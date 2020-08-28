class ReallifeRPG {
  constructor() {
    this.api = "https://api.realliferpg.de/";
    this.config = {
      topJobs: {
        blacklist: ["beer"],
      },
    };
  }

  getStreams() {
    var data = [];
    $.ajax({
      url: this.api + "v1/twitch/",
      async: false,
      method: "GET",
      success: (res) => {
        data = res.data;
      },
      error: (err) => {
        data = err;
        console.error(err);
      },
    });
    return data;
  }

  /**
   * @param {number} server
   */
  getMarket(server) {
    var data = [];
    $.ajax({
      url: this.api + "v1/market/" + server,
      async: false,
      method: "GET",
      success: (res) => {
        data = res.data;
      },
      error: (err) => {
        data = err;
        console.error(err);
      },
    });
    return data;
  }

  getTopJobs(server) {
    const blacklist = this.config.topJobs.blacklist;
    var temp = [],
      topItems = [];

    $.ajax({
      url: this.api + "v1/market/" + server,
      async: false,
      method: "GET",
      dataType: "JSON",
      success: (res) => {
        res.data.forEach((item) => {
          if (!blacklist.includes(item.item)) {
            temp.push([item.localized, item.price]);
          }
        });
        temp.sort((a, b) => a[1] - b[1]);
        for (let i = temp.length - 1; i > temp.length - 11; i--) {
          topItems.push(temp[i]);
        }
      },
      error: (err) => {
        console.error(err);
      },
    });
    return topItems;
  }
}
