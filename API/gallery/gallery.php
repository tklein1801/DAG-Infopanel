<?php
class Gallery
{
  public $sqlPHP = "../sql.php";

  public function uplaoad(int $owner, string $heading, $image)
  {
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    require $this->sqlPHP;

    $res = array();
    $fileName = basename($image['name']);
    $tmpFile = basename($image['tmp_name']);
    $tarLoc = "/var/www/vhosts/dulliag.de/info.dulliag.de/assets/img/gallery/" . $fileName;
    $fileExtension = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
    $fileURL = "https://info.dulliag.de/assets/img/gallery/" . $fileName;
    $res = array('inserted_id' => null, 'error' => $fileName . $tmpFile);
    if (move_uploaded_file($tmpFile, $tarLoc)) {
      $insert = $db->prepare("INSERT INTO `tool_gallery`(`owner`, `heading`, `file_name`, `file_extension`, `file_url`) VALUES (?, ?, ?, ?, ?)");
      $insert->bind_param("issss", $owner, $heading, $fileName, $fileExtension, $fileURL);
      $insert->execute();
      $res = array('inserted_id' => $insert->insert_id, 'error' => $insert->error == "" ? null : $insert->error);
      $res = array('inserted_id' => null, 'error' => null);
    } else {
      $res = array('inserted_id' => null, 'error' => 'Dateiupload gescheitert');
    }

    return $res;
    $insert->close();
    $db->close();
  }

  public function upload(int $owner, string $heading, $image)
  {
    require $this->sqlPHP;

    $arr = array();
    $file_name = basename($image['name']);
    $tmp_file_name = $image['tmp_name'];
    $file_extension = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
    $tar_loc = "/var/www/vhosts/dulliag.de/info.dulliag.de/assets/img/gallery/";
    $file_url = "https://info.dulliag.de/assets/img/gallery/" . $file_name;
    if (move_uploaded_file($tmp_file_name, $tar_loc . $file_name)) {
      $insert = $db->prepare("INSERT INTO `tool_gallery`(`owner`, `heading`, `file_name`, `file_extension`, `file_url`) VALUES (?, ?, ?, ?, ?)");
      $insert->bind_param("issss", $owner, $heading, $file_name, $file_extension, $file_url);
      $insert->execute();
      $res = array('inserted_id' => $insert->insert_id, 'url' => $file_url, 'error' => $insert->error == "" ? null : $insert->error);
      $insert->close();
    } else {
      $res = array('inserted_id' => null, 'error' => 'Dateiupload fehlgeschlagen');
    }

    return $res;
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
