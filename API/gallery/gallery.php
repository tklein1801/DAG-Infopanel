<?php
class Gallery
{
  public $sqlPHP = "../sql.php";

  public function upload(int $owner, string $heading, $image)
  {
    require $this->sqlPHP;
    require_once "../../config.php";

    $arr = array();
    $file_name = basename($image['name']);
    $tmp_file_name = $image['tmp_name'];
    $file_extension = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
    $allw_extensions = array('png', 'jpg', 'gif', 'jpeg');
    $tar_loc = $dir_gallery . $file_name;
    $file_url = $url_gallery . $file_name;
    if (in_array($file_extension, $allw_extensions)) {
      if ($image['size'] <= $gallery_max) {
        if (move_uploaded_file($tmp_file_name, $tar_loc)) {
          $insert = $db->prepare("INSERT INTO `tool_gallery`(`owner`, `heading`, `file_name`, `file_extension`, `file_url`) VALUES (?, ?, ?, ?, ?)");
          $insert->bind_param("issss", $owner, $heading, $file_name, $file_extension, $file_url);
          $insert->execute();
          $arr = array('inserted_id' => $insert->insert_id, 'url' => $file_url, 'error' => $insert->error == "" ? null : $insert->error);
          $insert->close();
        } else {
          $arr = array('inserted_id' => null, 'error' => 'Dateiupload fehlgeschlagen');
        }
      } else {
        $arr = array('inserted_id' => null, 'error' => 'Das Bild ist zu groß');
      }
    } else {
      $arr = array('inserted_id' => null, 'error' => 'Die Datei ist kein Bild');
    }

    return $arr;
    $db->close();
  }

  public function delete(int $news)
  {
    require $this->sqlPHP;

    $delete = $db->prepare("DELETE FROM `tool_gallery` WHERE `id`=?");
    $delete->bind_param("i", $news);
    $delete->execute();

    return array('affected_rows' => $delete->affected_rows, 'error' => $delete->error == "" ? null : $delete->error);
    $delete->close();
    $db->close();
  }

  public function getAll()
  {
    require $this->sqlPHP;

    $arr = array();
    $select = $db->query("SELECT tool_gallery.id, tool_gallery.heading, tool_gallery.file_name, tool_gallery.file_extension, tool_gallery.file_url, tool_user.username, tool_avatar.avatar_url FROM tool_gallery INNER JOIN tool_user ON tool_gallery.owner = tool_user.id INNER JOIN tool_avatar ON tool_gallery.owner = tool_avatar.owner ORDER BY tool_gallery.id");
    while ($data = $select->fetch_assoc()) {
      $arr[] = $data;
    }

    return $arr;
    $select->close();
    $db->close();
  }

  public function get(int $image)
  {
    require $this->sqlPHP;

    $arr = array();
    $select = $db->query("SELECT tool_gallery.id, tool_gallery.heading, tool_gallery.file_name, tool_gallery.file_extension, tool_gallery.file_url, tool_user.username, tool_avatar.avatar_url FROM tool_gallery INNER JOIN tool_user ON tool_gallery.owner = tool_user.id INNER JOIN tool_avatar ON tool_gallery.owner = tool_avatar.owner WHERE tool_gallery.id = '" . $image . "'");
    while ($data = $select->fetch_assoc()) {
      $arr = $data;
    }

    return $arr;
    $select->close();
    $db->close();
  }
}
