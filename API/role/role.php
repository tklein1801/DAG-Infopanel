<?php
class Role
{
  public $sqlPHP = "../sql.php";

  public function getAll()
  {
    require $this->sqlPHP;

    $arr = array();
    $select = $db->query("SELECT * FROM `tool_roles` ORDER BY `rank` DESC");
    while ($data = $select->fetch_assoc()) {
      $arr[] = $data;
    }

    return $arr;
    $select->close;
    $db->close;
  }
}
