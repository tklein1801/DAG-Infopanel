<?php
class News
{
  public $sqlPHP = "../sql.php";

  public function create(int $author, string $heading, string $content)
  {
    require $this->sqlPHP;

    $insert = $db->prepare("INSERT INTO `tool_news`(`author`, `heading`, `content`) VALUES (?, ?, ?)");
    $insert->bind_param("iss", $author, $heading, $content);
    $insert->execute();

    return array('inserted_id' => $insert->insert_id, 'error' => $insert->error == "" ? null : $insert->error);
    $insert->close();
    $db->close();
  }

  public function update(int $news, string $heading, string $content)
  {
    require $this->sqlPHP;

    $update = $db->prepare("UPDATE `tool_news` SET `heading`=?, `content`=? WHERE `id`=?");
    $update->bind_param("ssi", $heading, $content, $news);
    $update->execute();

    return array('inserted_id' => $update->insert_id, 'error' => $update->error == "" ? null : $update->error);
    $update->close();
    $db->close();
  }

  public function delete(int $news)
  {
    require $this->sqlPHP;

    $delete = $db->prepare("DELETE FROM `tool_news` WHERE `id`=?");
    $delete->bind_param("i", $news);
    $delete->execute();

    return array('removed_id' => $delete->insert_id, 'error' => $delete->error == "" ? null : $delete->error);
    $delete->close();
    $db->close();
  }

  public function getAll()
  {
    require $this->sqlPHP;

    $arr = array();
    $select = $db->query("SELECT tool_news.id, tool_news.heading, tool_news.content, tool_news.postedAt, tool_user.username, tool_avatar.avatar_url FROM  tool_news INNER JOIN tool_user ON tool_news.author = tool_user.id INNER JOIN tool_avatar ON tool_news.author = tool_avatar.owner");
    while ($data = $select->fetch_assoc()) {
      $arr[] = $data;
    }

    return $arr;
    $select->close();
    $db->close();
  }

  public function get(int $news)
  {
    require $this->sqlPHP;

    $arr = array();
    $select = $db->query("SELECT tool_news.id, tool_news.heading, tool_news.content, tool_news.postedAt, tool_user.username, tool_avatar.avatar_url FROM  tool_news INNER JOIN tool_user ON tool_news.author = tool_user.id INNER JOIN tool_avatar ON tool_news.author = tool_avatar.owner WHERE `id`='" . $news . "'");
    while ($data = $select->fetch_assoc()) {
      $arr = $data;
    }

    return $arr;
    $select->close();
    $db->close();
  }
}
