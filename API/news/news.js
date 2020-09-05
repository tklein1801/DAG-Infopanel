class News {
  constructor() {
    this.api = "https://info.dulliag.de/API/news/";
  }

  /**
   * @param {number} author
   * @param {string} heading
   * @param {string} content
   */
  create(author, heading, content) {
    let data;
    $.ajax({
      url: this.api + "create.php",
      async: false,
      method: "POST",
      data: {
        author: author,
        heading: heading,
        content: content,
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
   * @param {number} news
   * @param {string} heading
   * @param {string} content
   */
  update(news, heading, content) {
    let data;
    $.ajax({
      url: this.api + "update.php",
      async: false,
      method: "POST",
      data: {
        news: news,
        heading: heading,
        content: content,
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
   * @param {number} news
   */
  delete(news) {
    let data;
    $.ajax({
      url: this.api + "delete.php",
      async: false,
      method: "POST",
      data: {
        news: news,
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
   * @param {number} news
   */
  get(news) {
    let data;
    $.ajax({
      url: this.api + "get.php",
      async: false,
      method: "GET",
      data: {
        news: news,
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
