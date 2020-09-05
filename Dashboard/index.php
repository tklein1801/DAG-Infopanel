<?php require_once "../config.php"; ?>
<!DOCTYPE html>
<html lang="de">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width-device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="id=edge" />
  <meta name="theme-color" content="<?php echo $other_theme_color; ?>" />
  <meta property="og:image" content="<?php echo $other_logo; ?>" />
  <meta name="description" content="Infopanel der DulliAG" />
  <meta property="og:type" content="website" />
  <title>Infopanel • Dashboard</title>
  <link rel="icon" href="<?php echo $other_logo; ?>" />
  <link rel="stylesheet" href="<?php echo $dir_plugins . "fontawesome-free/css/all.min.css"; ?>" />
  <link rel="stylesheet" href="<?php echo $dir_css . "adminlte.min.css"; ?>" />
  <link rel="stylesheet" href="<?php echo $dir_css . "theme.css"; ?>" />
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet" />
</head>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">
    <!-- Main-Header -->
    <?php require_once $comp_navbar; ?>
    <!-- ./Main-Header -->

    <!-- Sidebar -->
    <?php require_once $comp_sidebar; ?>
    <!-- ./Sidebar -->

    <!-- Content Wrapper -->
    <div class="content-wrapper">
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Dashboard</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="<?php echo $url_host; ?>">Infopanel</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
      <!-- ./content-header -->

      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <!-- 
                Profile stats
              -->
            <div class="col-md-3 col-6">
              <div class="info-box bg-orange text-white">
                <span class="info-box-icon">
                  <i class="fas fa-money-bill-alt"></i>
                </span>
                <div class="info-box-content">
                  <span class="info-box-text">Bargeld</span>
                  <span id="cash" class="info-box-number">Lädt...</span>
                </div>
              </div>
            </div>
            <div class="col-md-3 col-6">
              <div class="info-box bg-orange text-white">
                <span class="info-box-icon">
                  <i class="fas fa-piggy-bank"></i>
                </span>
                <div class="info-box-content">
                  <span class="info-box-text">Kontostand</span>
                  <span id="bank" class="info-box-number">Lädt...</span>
                </div>
              </div>
            </div>
            <div class="col-md-3 col-6">
              <div class="info-box bg-orange text-white">
                <span class="info-box-icon">
                  <i class="fas fa-chart-line"></i>
                </span>
                <div class="info-box-content">
                  <span class="info-box-text">Level</span>
                  <span id="level" class="info-box-number">Lädt...</span>
                </div>
              </div>
            </div>
            <div class="col-md-3 col-6">
              <div class="info-box bg-orange text-white">
                <span class="info-box-icon">
                  <i class="fas fa-coins"></i>
                </span>
                <div class="info-box-content">
                  <span class="info-box-text">Skillpunkte</span>
                  <span id="skillpoints" class="info-box-number">Lädt...</span>
                </div>
              </div>
            </div>

            <!--
                News & serverlist
              -->
            <div class="row px-2">
              <!--
                  Neuigkeiten
                -->
              <div id="news_container" class="col-md-3 col-12">
                <button class="btn bg-orange text-white w-100 mb-3" data-toggle="modal" data-target="#add-news-modal">
                  Neuigkeit erstellen
                </button>

                <div class="row mx-0"></div>
              </div>

              <!-- 
                  Serverliste
                -->
              <div id="server_list" class="col-md-9 col-12">
                <div class="row"></div>
              </div>
            </div>
          </div>
          <!-- ./row -->
        </div>
      </div>
      <!-- ./content -->
    </div>
    <!-- ./Content Wrapper -->

    <!-- Footer -->
    <?php require_once $comp_footer; ?>
    <!-- ./Footer -->
  </div>
  <!-- ./Wrapper -->

  <div id="add-news-modal" class="modal fade">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header border-0">
          <h5 class="modal-title title font-weight-bold">Neuigkeit erstellen</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form id="add-news-form">
          <div class="modal-body py-0">
            <div class="form-group">
              <label for="heading" class="text-white">Überschrift</label>
              <input type="text" name="heading" id="heading" class="form-control" />
            </div>
            <div class="form-group">
              <label for="content" class="text-white">Inhalt</label>
              <textarea name="content" id="content" class="form-control" cols="30" rows="10"></textarea>
            </div>
          </div>
          <div class="modal-footer border-0">
            <button type="button" class="btn text" data-dismiss="modal">Abbrechen</button>
            <input type="submit" class="btn btn-sm btn-outline-warning" value="Absenden" />
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- REQUIRED SCRIPTS -->
  <!-- jQuery -->
  <script src="<?php echo $dir_plugins . "jquery/jquery.min.js"; ?>"></script>
  <!-- Bootstrap 4 -->
  <script src="<?php echo $dir_plugins . "bootstrap/js/bootstrap.bundle.min.js"; ?>"></script>
  <!-- AdminLTE App -->
  <script src="<?php echo $dir_js . "adminlte.min.js"; ?>"></script>
  <script src="<?php echo $dir_js . "loader.js"; ?>"></script>
  <script src="<?php echo $dir_js . "realliferpg.js"; ?>"></script>
  <script src="<?php echo $dir_api . "user/user.js"; ?>"></script>
  <script src="<?php echo $dir_api . "avatar/avatar.js"; ?>"></script>
  <script src="<?php echo $dir_api . "news/news.js"; ?>"></script>
  <script>
    new Loader().init();
    document.querySelector(".main-sidebar #dashboard").classList.add("active");

    const ls = localStorage;
    const rl = new ReallifeRPG();
    const news = new News();
    const user = new User();
    const userData = user.getSession();
    const newsList = news.getAll();
    const serverList = [rl.getServer(1), rl.getServer(2)];
    const newsOutput = document.querySelector(".content #news_container .row");
    const serverOutput = document.querySelector(".content #server_list .row");

    if (ls.hasOwnProperty("@dag_apiKey")) {
      const profile = rl.getProfile(ls.getItem("@dag_apiKey"));
      document.querySelector("#cash").innerText = `${profile.cash.toLocaleString(undefined)} €`;
      document.querySelector("#bank").innerText = `${profile.bankacc.toLocaleString(undefined)} €`;
      document.querySelector("#level").innerText = `${profile.level}`;
      document.querySelector("#skillpoints").innerText = `${profile.skillpoint} Punkte`;
    }

    if (newsList.length > 0) {
      for (const key in newsList) {
        const item = newsList[key];
        var date = new Date(item.postedAt);
        // TODO Add edit-news function
        newsOutput.innerHTML += `<div id="news-${item.id}" class="card card-outline card-orange w-100">
            <div class="card-header border-0 pb-2">
              <p class="card-title text-white font-weight-bold">${item.heading}</p>
              <div class="card-tools">
                <a class="d-none btn btn-tool" data-toggle="modal" data-target="#update-news-modal" data-news="${item.id}">
                  <i class="fas fa-pencil-alt"></i>
                </a>
                <button class="btn btn-tool" onclick="document.querySelector('#news-${item.id}').remove(); news.delete(${item.id});">
                  <i class="fas fa-trash-alt"></i>
                </button>
              </div>
            </div>
            <div class="card-body pt-0 pb-0">
              <p class="text mb-0">${item.content}</p>
            </div>
            <div class="card-footer">
              <p class="text mb-0">
                <img class="img-circle img-size-32 mr-2" src="${item.avatar_url}" alt="Avatar of ${item.username}">
                ${item.username}
                am ${date.getDate()}.${date.getMonth() + 1}
              </p>
            </div>
          </div>`;
      }
    } else {
      newsOutput.innerHTML = `<div id="news-2" class="card card-outline card-orange w-100">
          <div class="card-body">
            <p class="text text-center mb-0">Keine Neuigkeiten gefunden</p>
          </div>
        </div>`;
    }

    serverList.forEach(server => {
      if (server.online == 1) {
        var temp = "";
        server.Players.forEach((player) => {
          temp += `<p class="col-md-6 col-12 text mb-0">${player}</p>`;
        });
        serverOutput.innerHTML += `<div id="server-${server.Id}" class="col-md-6 col-12">
            <div class="card card-outline card-orange">
              <div class="card-header border-0">
                <p class="card-title text-white font-weight-bold">${server.Servername} <small>${server.Playercount}/${server.Slots}</small></p>
                <div class="card-tools">
                  <a type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </a>
                  <a type="button" class="d-none btn btn-tool refresh-server" data-server="${server.Id}">
                    <i class="fas fa-sync-alt"></i>
                  </a>
                </div>
              </div>
              <div class="card-body pt-0">
                <p class="text font-weight-bold mb-0">Spieler</p>
                <div class="progress rounded">
                  <div style="width: ${server.Civilians * 100 / server.Playercount}%;" id="civilian" class="progress-bar bg-success" data-toggle="tooltip" data-content="Zivilisten: ${server.Civilians}"></div>
                    <div style="width: ${server.Cops * 100 / server.Playercount}%;" id="cops" class="progress-bar bg-info" data-toggle="tooltip" title="Polizisten: ${server.Cops}"></div>
                    <div style="width: ${server.Medics * 100 / server.Playercount}%;" id="medics" class="progress-bar bg-danger" data-toggle="tooltip" title="Mediziner: ${server.Medics}"></div>
                    <div style="width: ${server.Adac * 100 / server.Playercount}%;" id="rac" class="progress-bar bg-warning" data-toggle="tooltip" title="RACler: ${server.Adac}"></div>
                    <div style="width: ${(server.Slots - server.Playercount) * 100 / server.Playercount}%;" id="free" class="progress-bar bg-light" data-toggle="tooltip" title="Frei: ${server.Slots - server.Playercount}"></div>
                  </div>
                  <p class="text font-weight-bold mt-3 mb-0">Spielerliste</p>
                  <div class="row" style="overflow-x: scroll; max-height: 10rem;">
                    ${temp}
                  </div>
                </div>
              </div>
            </div>`;
        $('[data-toggle="tooltip"]').tooltip();
      } else {
        serverOutput.innerHTML += `<div class="col-md-6 col-12">
            <div class="card card-outline card-danger">
              <div class="card-header border-0">
                <p class="card-title text-white font-weight-bold">${server.Servername} <small>Offline</small></p>
              </div>
            </div>
          </div>`;
      }
    });

    $("#add-news-modal").on("show.bs.modal", function() {
      const modal = this,
        form = this.querySelector("#add-news-form");

      form.addEventListener("submit", function(e) {
        e.preventDefault();
        e.stopImmediatePropagation();

        const form = this;
        const formData = {
          user: userData.userId,
          heading: this.querySelector("#heading").value,
          content: this.querySelector("#content").value,
        };
        let res = news.create(formData.user, formData.heading, formData.content);
        if (res.error == null) {
          if (newsList.length == 0) {
            newsOutput.innerHTML = "";
          }
          const now = new Date();
          const userAvatar = new Avatar().get(userData.userId).avatar_url;
          newsOutput.innerHTML += `<div id="news-${res.inserted_id}" class="card card-outline card-orange w-100">
            <div class="card-header border-0 pb-2">
              <p class="card-title text-white font-weight-bold">${formData.heading}</p>
              <div class="card-tools">
                <a class="d-none btn btn-tool" data-toggle="modal" data-target="#update-news-modal" data-news="${res.inserted_id}">
                  <i class="fas fa-pencil-alt"></i>
                </a>
                <button class="btn btn-tool" onclick="document.querySelector('#news-${res.inserted_id}').remove(); news.delete(${res.inserted_id});">
                  <i class="fas fa-trash-alt"></i>
                </button>
              </div>
            </div>
            <div class="card-body pt-0 pb-0">
              <p class="text mb-0">${formData.content}</p>
            </div>
            <div class="card-footer">
              <p class="text mb-0">
                <img class="img-circle img-size-32 mr-2" src="${userAvatar}" alt="Avatar of ${userData.username}">
                ${userData.username}
                am ${now.getDate()}.${now.getMonth() + 1}
              </p>
            </div>
          </div>`;
        } else {
          console.error(res.error);
        }
        $(modal).modal("hide");
      });
    });

    $("#add-news-modal").on("hide.bs.modal", function() {
      const modal = this,
        form = this.querySelector("#add-news-form");
      form.reset();
    });
  </script>
</body>

</html>