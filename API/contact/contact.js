class Contact {
  constructor() {
    this.api = "https://info.dulliag.de/API/contact/";
  }

  /**
   * @param {string} name
   * @param {string} information
   */
  create(name, information) {
    let data;
    $.ajax({
      url: this.api + "create.php",
      async: false,
      method: "POST",
      data: {
        name: name,
        information: information,
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

  /**
   * @param {number} contact
   * @param {string} name
   * @param {string} information
   */
  update(contact, name, information) {
    let data;
    $.ajax({
      url: this.api + "update.php",
      async: false,
      method: "POST",
      data: {
        contact: contact,
        name: name,
        information: information,
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

  /**
   * @param {number} contact
   */
  delete(contact) {
    let data;
    $.ajax({
      url: this.api + "delete.php",
      async: false,
      method: "POST",
      data: {
        contact: contact,
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
   * @param {number} contact
   */
  get(contact) {
    let data;
    $.ajax({
      url: this.api + "get.php",
      async: false,
      method: "GET",
      data: {
        contact: contact,
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
