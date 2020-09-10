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

  // FIXME The file-upload is not working
  /**
   * @param {number} owner
   * @param {*} avatar
   */
  upload(owner, avatar) {
    let data;
    let fData = new FormData();
    fData.append("owner", owner);
    fData.append("avatar", avatar);
    $.ajax({
      url: this.api + "upload.php",
      async: false,
      processData: false,
      contentType: false,
      method: "POST",
      data: fData,
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
   * @param {number} owner
   */
  setDefault(owner) {
    let data;
    $.ajax({
      url: this.api + "setDefault.php",
      async: false,
      method: "POST",
      data: {
        owner: owner,
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
}
