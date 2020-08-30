<?php
class User
{
  public $sqlPHP = "../sql.php";

  public function create(int $tool_access, int $role, string $username, string $password, string $email)
  {
    require $this->sqlPHP;

    $insert = $db->prepare("INSERT INTO `tool_user`(`tool_access`, `role`, `username`, `password`, `email`) VALUES (?, ?, ?, ?, ?)");
    $insert->bind_param("iisss", $tool_access, $role, $username, hash("md5", $password), $email);
    $insert->execute();

    echo json_encode(array('inserted_id' => $insert->insert_id, 'error' => $insert->error == "" ? null : $insert->error), JSON_PRETTY_PRINT);
    $insert->close();
    $db->close();
  }

  public function update(int $user, int $tool_access, int $role, string $username, string $password, string $email)
  {
    require $this->sqlPHP;

    $insert = $db->prepare("UPDATE `tool_user` SET `tool_access`=?, `role`=?, `username`=?, `password`=?, `email`=? WHERE `id`=?");
    $insert->bind_param("iisssi", $tool_access, $role, $username, hash("md5", $password), $email, $user);
    $insert->execute();

    echo json_encode(array('inserted_id' => $insert->insert_id, 'error' => $insert->error == "" ? null : $insert->error), JSON_PRETTY_PRINT);
    $insert->close();
    $db->close();
  }

  public function delete(int $user)
  {
    require $this->sqlPHP;

    $delete = $db->prepare("DELETE FROM `tool_user` WHERE  `id`=?");
    $delete->bind_param("i", $user);
    $delete->execute();

    echo json_encode(array('inserted_id' => $delete->insert_id, 'error' => $delete->error == "" ? null : $delete->error), JSON_PRETTY_PRINT);
    $delete->close();
    $db->close();
  }

  public function get(string $user)
  {
    require $this->sqlPHP;

    $arr = array();
    $select = $db->query("SELECT tool_user.id, tool_user.tool_access, tool_user.username, tool_user.password, tool_user.email, tool_roles.role, tool_avatar.avatar_url FROM tool_user INNER JOIN tool_roles ON tool_user.role = tool_roles.id INNER JOIN tool_avatar ON tool_user.id = tool_avatar.owner WHERE tool_user.id = '" . $user . "'");
    while ($data = $select->fetch_assoc()) {
      $arr = $data;
    }

    echo json_encode($arr, JSON_PRETTY_PRINT);
    $select->close();
    $db->close();
  }

  public function getAll()
  {
    require $this->sqlPHP;

    $arr = array();
    $select = $db->query("SELECT tool_user.id, tool_user.tool_access, tool_user.username, tool_user.password, tool_user.email, tool_roles.role, tool_avatar.avatar_url FROM tool_user INNER JOIN tool_roles ON tool_user.role = tool_roles.id INNER JOIN tool_avatar ON tool_user.id = tool_avatar.owner");
    while ($data = $select->fetch_assoc()) {
      $arr[] = $data;
    }

    echo json_encode($arr, JSON_PRETTY_PRINT);
    $select->close();
    $db->close();
  }

  public function checkUsername(string $username, string $password)
  {
    require $this->sqlPHP;

    // Check if the username is registered
    $hashedPw = hash("md5", $password);
    $select = $db->query("SELECT `id` FROM `tool_user` WHERE `username`='" . $username . "'");
    if ($select->num_rows > 0) {
      $select = $db->query("SELECT `id` FROM `tool_user` WHERE `username` = '" . $username . "' AND `password` = '" . $hashedPw . "'");
      if ($select->num_rows > 0) {
        echo json_encode(array('login' => true, 'reason' => null), JSON_PRETTY_PRINT);
        while ($data = $select->fetch_assoc()) {
          session_start();
          $_SESSION['login'] = array('userId' => $data['id'], 'username' => $username);
        }
      } else {
        echo json_encode(array('login' => false, 'reason' => 'Das Passwort ist falsch!'), JSON_PRETTY_PRINT);
      }
    } else {
      echo json_encode(array('login' => false, 'reason' => 'Der Benutzer ist nicht registriert!'), JSON_PRETTY_PRINT);
    }

    $select->close();
    $db->close();
  }
}
