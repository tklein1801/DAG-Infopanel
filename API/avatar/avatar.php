<?php
class Avatar
{
  public $sqlPHP = "/var/www/vhosts/dulliag.de/info.dulliag.de/API/sql.php";

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
}
