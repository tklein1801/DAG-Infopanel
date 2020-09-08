class Role {
  constructor() {
    this.api = "https://info.dulliag.de/API/role/";
  }

  getAll() {
    let data;
    $.ajax({
      url: this.api + "getAll.php",
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
}
