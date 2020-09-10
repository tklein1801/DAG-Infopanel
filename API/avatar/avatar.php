<?php
class Avatar
{
  public $sqlPHP = "/var/www/vhosts/dulliag.de/info.dulliag.de/API/sql.php";
  public $config = "/var/www/vhosts/dulliag.de/info.dulliag.de/config.php";

  public function get(int $user)
  {
    require $this->sqlPHP;

    $arr = array();
    $select = $db->query("SELECT * FROM `tool_avatar` WHERE `owner`='" . $user . "'");
    while ($data = $select->fetch_assoc()) {
      $arr = $data;
    }

    return $arr;
    $select->close();
    $db->close();
  }

  public function getAll()
  {
    require $this->sqlPHP;

    $arr = array();
    $select = $db->query("SELECT * FROM `tool_avatar` WHERE 1");
    while ($data = $select->fetch_assoc()) {
      $arr[] = $data;
    }

    return $arr;
    $select->close();
    $db->close();
  }

  public function upload(string $owner, $avatar)
  {
    require $this->sqlPHP;
    require_once "../../config.php";

    $arr = array();
    $file_name = basename($avatar['name']);
    $tmp_file_name = $avatar['tmp_name'];
    $file_extension = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
    $allw_extensions = array('png', 'jpg', 'gif', 'jpeg');
    $tar_loc = $dir_avatar . $file_name;
    $file_url = $url_avatar . $file_name;
    if (in_array($file_extension, $allw_extensions)) {
      if ($avatar['size'] <= $avatar_max) {
        if (move_uploaded_file($tmp_file_name, $tar_loc)) {
          $insert = $db->prepare("INSERT INTO `tool_avatar` (`owner`, `file_name`, `file_extension`, `avatar_url`) VALUES (?, ?, ?, ?)");
          $insert->bind_param("isss", $owner, $file_name, $file_extension, $file_url);
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

  public function setDefault(int $owner)
  {
    require $this->sqlPHP;
    require_once "../../config.php";

    $file_name = "logo.jpg";
    $file_extension = "jpg";
    $file_url = $other_logo;
    $insert = $db->prepare("INSERT INTO `tool_avatar` (`owner`, `file_name`, `file_extension`, `avatar_url`) VALUES (?, ?, ?, ?)");
    $insert->bind_param("isss", $owner, $file_name, $file_extension, $file_url);
    $insert->execute();
    $arr = array('inserted_id' => $insert->insert_id, 'error' => $insert->error == "" ? null : $insert->error);

    return $arr;
    $insert->close();
    $db->close();
  }
}
