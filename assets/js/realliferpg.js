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

  getServerList() {
    let data = [];
    $.ajax({
      url: this.api + "v1/servers/",
      async: false,
      method: "GET",
      dataType: "JSON",
      success: (res) => {
        res.data.forEach((server) => {
          // We don't support the community gungame server
          if (server.Id < 3) {
            data.push({
              id: server.Id,
              servername: server.Servername,
              ip: server.IpAddress,
              port: server.Port,
              password: server.ServerPassword,
              online: {
                slots: server.Slots,
                used: server.Playercount,
              },
              sides: {
                civ: server.Civilians,
                cop: server.Cops,
                medic: server.Medics,
                rac: server.Adac,
              },
              player: server.Players,
            });
          }
        });
      },
      error: (err) => {
        console.error(err);
      },
    });
    return data;
  }

  /**
   * @param {number} server
   */
  getServer(server) {
    let data = {};
    $.ajax({
      url: this.api + "v1/server/" + server,
      async: false,
      method: "GET",
      dataType: "JSON",
      success: (res) => {
        data = res.data[0];
      },
      error: (err) => {
        console.error(err);
      },
    });
    return data;
  }

  /**
   * @param {string} apiKey
   */
  getProfile(apiKey) {
    let data;
    $.ajax({
      url: this.api + "v1/player/" + apiKey,
      async: false,
      method: "GET",
      dataType: "JSON",
      success: (res) => {
        data = res.data[0];
      },
      error: (err) => {
        console.error(err);
      },
    });
    return data;
  }

}
