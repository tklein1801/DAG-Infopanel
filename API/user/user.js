class User {
  constructor() {
    this.api = "https://info.dulliag.de/API/user/";
  }

  /**
   * @param {number} tool_access
   * @param {number} role
   * @param {string} username
   * @param {string} password
   * @param {string} email
   */
  create(tool_access, role, username, password, email) {
    let data;
    $.ajax({
      url: this.api + "create.php",
      async: false,
      method: "POST",
      data: {
        tool_access: tool_access,
        role: role,
        username: username,
        password: password,
        email: email,
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
   * @param {number} user
   * @param {number} tool_access
   * @param {number} role
   * @param {string} username
   * @param {string} email
   */
  update(user, tool_access, role, username, email) {
    let data;
    $.ajax({
      url: this.api + "update.php",
      async: false,
      method: "POST",
      data: {
        user: user,
        tool_access: tool_access,
        role: role,
        username: username,
        email: email,
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
   * @param {number} user
   * @param {string} password
   */
  updatePassword(user, password) {
    let data;
    $.ajax({
      url: this.api + "updatePassword.php",
      async: false,
      method: "POST",
      data: {
        user: user,
        password: password,
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
   * @param {number} user
   */
  delete(user) {
    let data;
    $.ajax({
      url: this.api + "delete.php",
      async: false,
      method: "POST",
      data: {
        user: user,
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
   * @param {number} user
   */
  get(user) {
    let data;
    $.ajax({
      url: this.api + "get.php",
      async: false,
      method: "GET",
      data: {
        user: user,
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
   * Check if login-data is correct. Will sign the user in if the login-data is correct
   * @param {string} username
   * @param {string} password
   */
  checkUsername(username, password) {
    let data;
    $.ajax({
      url: this.api + "checkUsername.php",
      async: false,
      method: "GET",
      data: {
        username: username,
        password: password,
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

  getSession() {
    let data;
    $.ajax({
      url: this.api + "getSession.php",
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
