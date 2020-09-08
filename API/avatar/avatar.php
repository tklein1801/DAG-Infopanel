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
    // require $this->config;
    // TODO Check if file is an image
    // TODO Check if image is below our max-size
    $res = array();
    if ($avatar != null || $avatar != "") {
      // $fileName = basename($_FILES[$avatar]['name']);
      // $tmpFile = basename($_FILES[$avatar]['tmp_name']);
      // $tarLoc = $dir_avatar . $fileName;
      // $fileExtension = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
      // $fileURL = $url_avatar . $fileName;
      // if ($_FILES[$avatar]['size'] <= $avatar_max) {
      //   if (move_uploaded_file($tmpFile, $tarLoc)) {
      //     $insert = $db->prepare("INSERT INTO `tool_avatar`(`owner`, `file_name`, `file_extension`, `avatar_url`) VALUES (?, ?, ?, ?)");
      //     $insert->bind_param("", $owner, $fileName, $fileExtension, $fileURL);
      //     $insert->execute();
      //     $res = array('inserted_id' => $insert->insert_id, 'error' => $insert->error == "" ? null : $insert->error);
      //   } else {
      //     $res = array('inserted_id' => null, 'error' => 'Das Hochladen ist fehlgeschlagen');
      //   }
      // } else {
      //   $res = array('inserted_id' => null, 'error' => 'Die Datei ist größer als x MB');
      // }
    } else {
      // FIXME Set default avatar in the config
      $fileName = "logo.jpg";
      $fileExtension = "jpg";
      // $avatarURL = $url_host . "assets/img/logo.jpg";
      $avatarURL = "https://info.dulliag.de/assets/img/logo.jpg";
      $insert = $db->prepare("INSERT INTO `tool_avatar` (`owner`, `file_name`, `file_extension`, `avatar_url`) VALUES (?, ?, ?, ?)");
      $insert->bind_param("isss", $owner, $fileName, $fileExtension, $avatarURL);
      $insert->execute();
      $res = array('inserted_id' => $insert->insert_id, 'error' => $insert->error == "" ? null : $insert->error);
    }

    return $res;
    $insert->close();
    $db->close();
  }
}
