class Gallery {
  constructor() {
    this.api = "https://info.dulliag.de/API/gallery/";
  }

  upload(owner, heading, image) {
    let data;
    let fData = new FormData();
    fData.append("owner", owner);
    fData.append("heading", heading);
    fData.append("image", image);
    $.ajax({
      url: this.api + "upload.php",
      async: false,
      processData: false,
      contentType: false,
      data: fData,
      method: "POST",
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
   * @param {number} image
   */
  delete(image) {
    let data;
    $.ajax({
      url: this.api + "delete.php",
      async: false,
      method: "POST",
      data: {
        image: image,
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

  /**
   * @param {number} image
   */
  get(image) {
    let data;
    $.ajax({
      url: this.api + "get.php",
      async: false,
      method: "GET",
      data: {
        image: image,
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
