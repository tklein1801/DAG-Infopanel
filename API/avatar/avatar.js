class Avatar {
  constructor() {
    this.api = "https://info.dulliag.de/API/avatar/";
  }

  get(userId) {
    let data = {};
    $.ajax({
      url: this.api + "get.php",
      async: false,
      method: "GET",
      data: {
        userId: userId,
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

  getAll() {
    let data = [];
    $.ajax({
      url: this.api + "getAll.php",
      async: false,
      method: "GET",
      success: (res) => {
        data.push(res);
      },
      error: (err) => {
        console.error(err);
      },
    });
    return data;
  }
}
