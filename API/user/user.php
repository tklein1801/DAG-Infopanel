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

    return array('inserted_id' => $insert->insert_id, 'error' => $insert->error == "" ? null : $insert->error);
    $insert->close();
    $db->close();
  }

  public function update(int $user, int $tool_access, int $role, string $username, string $password, string $email)
  {
    require $this->sqlPHP;

    $hashedPassword = hash("md5", $password);
    $insert = $db->prepare("UPDATE `tool_user` SET `tool_access`=?, `role`=?, `username`=?, `password`=?, `email`=? WHERE `id`=?");
    $insert->bind_param("iisssi", $tool_access, $role, $username, $hashedPassword, $email, $user);
    $insert->execute();

    return array('inserted_id' => $insert->insert_id, 'error' => $insert->error == "" ? null : $insert->error);
    $insert->close();
    $db->close();
  }

  public function updatePassword(int $user, string $password)
  {
    require $this->sqlPHP;

    $hashedPassword = hash("md5", $password);
    $update = $db->prepare("UPDATE `tool_user` SET `password` = ? WHERE `id` = ?");
    $update->bind_param("si", $hashedPassword, $user);
    $update->execute();

    return array('affected_rows' => $update->affected_rows, 'error' => $update->error == "" ? null : $update->error);
    $update->close();
    $db->close();
  }

  public function delete(int $user)
  {
    require $this->sqlPHP;

    $delete = $db->prepare("DELETE FROM `tool_user` WHERE  `id`=?");
    $delete->bind_param("i", $user);
    $delete->execute();

    return array('affected_rows' => $delete->affected_rows, 'error' => $delete->error == "" ? null : $delete->error);
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

    return $arr;
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

    return $arr;
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
        while ($data = $select->fetch_assoc()) {
          session_start();
          $_SESSION['login'] = array('userId' => $data['id'], 'username' => $username);
        }
        return array('login' => true, 'reason' => null);
      } else {
        return array('login' => false, 'reason' => 'Das Passwort ist falsch!');
      }
    } else {
      return array('login' => false, 'reason' => 'Der Benutzer ist nicht registriert!');
    }

    $select->close();
    $db->close();
  }
}
