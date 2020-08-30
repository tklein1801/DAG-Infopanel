class GangMoney {
  constructor() {
    this.api = "https://info.dulliag.de/API/gang/";
  }

  /**
   * @param {number} sender
   * @param {string} reason
   * @param {number} amount
   */
  registerTransaction(sender, reason, amount) {
    let data;
    $.ajax({
      url: this.api + "registerTransaction.php",
      async: false,
      method: "POST",
      data: {
        sender: sender,
        reason: reason,
        amount: amount,
      },
      success: (res) => {
        data = res;
      },
      error: (err) => {
        console.error(err);
      },
    });
    return data;
  }

  getTransactions() {
    let data;
    $.ajax({
      url: this.api + "getTransactions.php",
      async: false,
      method: "GET",
      success: (res) => {
        data = res;
      },
      error: (err) => {
        console.error(err);
      },
    });
    return data;
  }

  /**
   * @param {number} transaction TranscationId
   */
  deleteTransaction(transaction) {
    let data;
    $.ajax({
      url: this.api + "deleteTransaction.php",
      async: false,
      method: "POST",
      data: {
        transaction: transaction,
      },
      success: (res) => {
        data = res;
      },
      error: (err) => {
        console.error(err);
      },
    });
    return data;
  }

  getBalance() {
    let balance = 0;
    $.ajax({
      url: this.api + "getBalance.php",
      async: false,
      method: "GET",
      success: (res) => {
        balance = res;
      },
      error: (err) => {
        console.error(err);
      },
    });
    return balance;
  }
}
