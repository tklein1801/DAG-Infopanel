<?php
class GangMoney
{
  public $sqlPHP = "../sql.php";

  public function registerTransaction(int $sender, string $reason, int $amount)
  {
    require $this->sqlPHP;

    $insert = $db->prepare("INSERT INTO `tool_money`(`sender`, `reason`, `amount`) VALUES (?, ?, ?)");
    $insert->bind_param("isi", $sender, $reason, $amount);
    $insert->execute();

    return array('inserted_id' => $insert->insert_id, 'error' => $insert->error == "" ? null : $insert->error);
    $insert->close();
    $db->close();
  }

  public function getTransactions()
  {
    require $this->sqlPHP;

    $arr = array();
    $select = $db->query("SELECT tool_money.id, tool_money.date, tool_money.reason, tool_money.amount, tool_user.username, tool_avatar.avatar_url FROM  tool_money INNER JOIN tool_user ON tool_money.sender = tool_user.id INNER JOIN tool_avatar ON tool_money.sender = tool_avatar.owner ORDER BY id DESC");
    while ($data = $select->fetch_assoc()) {
      $arr[] = $data;
    }

    return $arr;
    $select->close;
    $db->close;
  }

  public function deleteTransaction(int $transactionId)
  {
    require $this->sqlPHP;

    $delete = $db->prepare("DELETE FROM `tool_money` WHERE `id`=?");
    $delete->bind_param("i", $transactionId);
    $delete->execute();

    return array('affected_rows' => $delete->affected_rows, 'error' => $delete->error == "" ? null : $delete->error);
    $delete->close();
    $db->close();
  }

  public function getBalance()
  {
    require $this->sqlPHP;

    $balance = 0;
    $select = $db->query("SELECT SUM(amount) FROM tool_money");
    while ($data = $select->fetch_assoc()) {
      $balance = $data['SUM(amount)'];
    }

    return $balance;
    $select->close();
    $db->close();
  }
}
