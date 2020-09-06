<?php
class Contact
{
  public $sqlPHP = "../sql.php";

  public function create(string $name, string $information)
  {
    require $this->sqlPHP;

    $insert = $db->prepare("INSERT INTO `tool_contacts`(`name`, `information`) VALUES (?, ?)");
    $insert->bind_param("ss", $name, $information);
    $insert->execute();

    return array('inserted_id' => $insert->insert_id, 'error' => $insert->error == "" ? null : $insert->error);
    $insert->close();
    $db->close();
  }

  public function update(int $contact, string $name, string $information)
  {
    require $this->sqlPHP;

    $update = $db->prepare("UPDATE `tool_contacts` SET `name`=?, `information`=? WHERE `id`=?");
    $update->bind_param("ssi", $name, $information, $contact);
    $update->execute();

    return array('affected_rows' => $update->affected_rows, 'error' => $update->error == "" ? null : $update->error);
    $update->close();
    $db->close();
  }

  public function delete(int $contact)
  {
    require $this->sqlPHP;

    $delete = $db->prepare("DELETE FROM `tool_contacts` WHERE `id`=?");
    $delete->bind_param("i", $contact);
    $delete->execute();

    return array('affected_rows' => $delete->affected_rows, 'error' => $delete->error == "" ? null : $delete->error);
    $delete->close();
    $db->close();
  }

  public function getAll()
  {
    require $this->sqlPHP;

    $arr = array();
    $select = $db->query("SELECT * FROM `tool_contacts` WHERE 1");
    while ($data = $select->fetch_assoc()) {
      $arr[] = $data;
    }

    return $arr;
    $select->close();
    $db->close();
  }

  public function get(int $contact)
  {
    require $this->sqlPHP;

    $arr = array();
    $select = $db->query("SELECT * FROM `tool_contacts` WHERE `id`='" . $contact . "'");
    while ($data = $select->fetch_assoc()) {
      $arr = $data;
    }

    return $arr;
    $select->close();
    $db->close();
  }
}
