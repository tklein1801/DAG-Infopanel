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
  <title>Infopanel • Mein Profil</title>
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
              <h1 class="m-0">Mein Profil</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="<?php echo $url_host; ?>">Infopanel</a></li>
                <li class="breadcrumb-item"><a href="<?php echo $url_host . "Dashboard/"; ?>">Dashboard</a></li>
                <li class="breadcrumb-item active">Mein Profil</li>
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
                ReallifeRPG-Profil
              -->
            <div id="rlrpg" class="col-md-3 col-12">
              <div id="ca-banned" class="callout callout-orange d-none">
                <h4 class="title">Gebannt</h4>
                <p class="text">
                  Du wurdest aus dem Spielgeschehen von
                  <a class="link" href="https://realliferpg.de">ReallifeRPG</a> ausgechlossen.
                  Bitte melde dich im
                  <a class="link" href="ts3server://ts.realliferpg.de">Support</a>.
                </p>
              </div>

              <div id="ca-jail" class="callout callout-orange d-none">
                <h4 class="title">Inhaftiert</h4>
                <p class="text">
                  Du sitzt derzeit im Bundesgefänigs von Nordholm ein. Deine Inhaftierung dauert
                  noch <span id="time"></span> Monate an!
                </p>
              </div>

              <div class="card card-outline card-orange">
                <div class="card-body pb-0">
                  <img id="avatar" class="profile-img rounded-circle w-25 mb-2" alt="Steam Avatar" src="https://files.dulliag.de/share/dag-logo.jpg" style="margin-left: 35.5%;" />
                  <div class="item mb-2">
                    <div id="level-progress">
                      <p class="text font-weight-bold mb-0">Level <span id="level">Lädt...</span></p>
                      <div id="level-progressbar-container" class="progress rounded" data-toggle="cs-tooltip" data-placement="bottom" data-content="Fortschritt: 9%">
                        <div id="level-progressbar" class="progress-bar bg-orange progress-bar-striped progress-bar-animated" style="width: 9%;"></div>
                      </div>
                      <!-- ./level-progress -->
                    </div>
                    <!-- ./level-progress -->
                  </div>

                  <div class="item mb-2">
                    <p class="text text-center font-weight-bold mb-2">Fraktionen</p>
                    <div class="row my-1">
                      <div class="col-4 text-center border-right" data-toggle="cs-tooltip" data-placement="top" data-content="Polizei">
                        <p class="text mb-0">
                          <i class="fas fa-id-badge w-100" style="font-size: 1.3rem;"></i>
                        </p>
                        <span id="cop-level" class="badge bg-orange text-white p-1">Lädt...</span>
                      </div>
                      <div class="col-4 text-center border-right" data-toggle="cs-tooltip" data-placement="top" data-content="Sanitäter">
                        <p class="text mb-0">
                          <i class="fas fa-clinic-medical w-100" style="font-size: 1.3rem;"></i>
                        </p>
                        <span id="medic-level" class="badge bg-orange text-white p-1">Lädt...</span>
                      </div>
                      <div class="col-4 text-center" data-toggle="cs-tooltip" data-placement="top" data-content="RAC">
                        <p class="text mb-0">
                          <i class="fas fa-wrench w-100" style="font-size: 1.3rem;"></i>
                        </p>
                        <span id="rac-level" class="badge bg-orange text-white p-1">Lädt...</span>
                      </div>
                    </div>
                  </div>

                  <div class="mb-1">
                    <p class="text font-weight-bold mb-0">Name</p>
                    <p id="name" class="text">Lädt...</p>
                  </div>

                  <div class="mb-1">
                    <p class="text font-weight-bold mb-0">Steam64Id</p>
                    <p id="steamId" class="text">Lädt...</p>
                  </div>

                  <div class="mb-1">
                    <p class="text font-weight-bold mb-0">Bargeld</p>
                    <p id="cash" class="text">Lädt...</p>
                  </div>

                  <div class="mb-1">
                    <p class="text font-weight-bold mb-0">Kontostand</p>
                    <p id="bank" class="text">Lädt...</p>
                  </div>

                  <div class="mb-1">
                    <p class="text font-weight-bold mb-0">Quest Fortschritt</p>
                    <p id="quest" class="text">Lädt...</p>
                  </div>

                  <div class="mb-1">
                    <p class="text font-weight-bold mb-0">Skillpunkte</p>
                    <p id="skillpoints" class="text">Lädt...</p>
                  </div>

                  <div class="mb-1">
                    <p class="text font-weight-bold mb-0">Aktive Spielzeit</p>
                    <p id="playtime-active" class="text">Lädt...</p>
                  </div>

                  <div class="mb-1">
                    <p class="text font-weight-bold mb-0">Gesamte Spielzeit</p>
                    <p id="playtime-total" class="text">Lädt...</p>
                  </div>

                  <div class="mb-0">
                    <p class="text font-weight-bold mb-0">Zuletzt online</p>
                    <p id="last-seen" class="text">Lädt...</p>
                  </div>
                </div>
              </div>
            </div>

            <!--
                Gebäude & Appartments
              -->
            <div class="col-md-6 col-12">
              <div class="card card-outline card-orange">
                <div class="card-body p-0">
                  <div id="nav-container" class="p-3">
                    <nav class="nav nav-pills nav-justified rounded">
                      <a href="#vehicles" id="vehicleTrigger" class="nav-item nav-link active" data-toggle="tab" role="tab">
                        Fahrzeuge
                      </a>
                      <a href="#buildings" id="buildingTrigger" class="nav-item nav-link" data-toggle="tab" role="tab">
                        Gebäude
                      </a>
                      <button type="button" id="refresh" class="btn btn-outline-warning">
                        <i class="fas fa-sync-alt"></i>
                      </button>
                    </nav>
                    <!-- ./navigation -->
                  </div>
                  <!-- ./nav-container -->

                  <div class="tab-container">
                    <div class="tab-content">
                      <!--
                          Vehicles
                        -->
                      <div id="vehicles" class="tab-pane fade show active" role="tabpanel">
                        <div class="table-responsive table-borderless">
                          <table class="table table-hover mb-0">
                            <thead>
                              <tr class="text-center">
                                <th>Typ</th>
                                <th>Status</th>
                                <th>Fahrzeug</th>
                                <th>Fraktion</th>
                                <th>Kennzeichen</th>
                                <th>Tank</th>
                              </tr>
                            </thead>
                            <tbody></tbody>
                          </table>
                        </div>
                      </div>

                      <!-- 
                          Buildings
                         -->
                      <div id="buildings" class="tab-pane fade show" role="tabpanel">
                        <div class="callout callout-orange mx-3 mb-3">
                          <h5 class="title">Achtung</h5>
                          <p class="text">
                            Hier werden nur Häuser, Appartments sowie Baustellen angezeigt welche
                            dir gehören und nicht für welche du Schlüssel besitzt.
                          </p>
                        </div>
                        <!-- ./callout -->

                        <h4 class="title mb-0 mx-3">Häuser</h4>
                        <div class="table-responsive table-borderless">
                          <table class="table table-hover mb-0">
                            <thead>
                              <tr class="text-center">
                                <th>ID</th>
                                <th>Status</th>
                                <th>Inhaber</th>
                                <th>Mitbewohner</th>
                                <th>Gewartet für</th>
                              </tr>
                            </thead>
                            <tbody id="house-output"></tbody>
                          </table>
                        </div>

                        <!-- 
                          FIXME Add appartments
                         -->
                        <h4 class="title mx-3 d-none">Appartments</h4>
                        <div class="table-responsive table-borderless d-none">
                          <table class="table table-hover mb-0">
                            <thead>
                              <tr class="text-center">
                                <th>ID</th>
                                <th>Status</th>
                                <th>Stufe</th>
                                <th>Inhaber</th>
                                <th>Mitbewohner</th>
                              </tr>
                            </thead>
                            <tbody id="appartment-output"></tbody>
                          </table>
                        </div>

                        <h4 class="title mx-3">Baustellen</h4>
                        <div class="table-responsive table-borderless">
                          <table class="table table-hover mb-0">
                            <thead>
                              <tr class="text-center">
                                <th>ID</th>
                                <th>Status</th>
                                <th>Stufe</th>
                                <th>Inhaber</th>
                                <th>Mitbewohner</th>
                              </tr>
                            </thead>
                            <tbody id="building-output"></tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                    <!-- ./tab-content -->
                  </div>
                  <!-- ./tab-container -->
                </div>
              </div>
            </div>

            <!--
                Infopanel-Profil
              -->
            <div id="app-profile" class="col-md-3 col-12">
              <div class="card card-outline card-orange">
                <div class="card-body pb-0">
                  <div id="avatar-container" class="mb-1">
                    <img id="avatar" class="profile-img rounded-circle w-25 mb-2" alt="Steam Avatar" src="https://files.dulliag.de/share/dag-logo.jpg" style="margin-left: 35.5%;" />
                  </div>

                  <div class="mb-3">
                    <button class="btn btn-outline-warning w-100 mt-2" data-toggle="modal" data-target="#edit-profile-modal">
                      Profil bearbeiten
                    </button>
                  </div>

                  <div class="mb-1">
                    <p class="text font-weight-bold mb-0">Benutzername</p>
                    <p id="username" class="text">Lädt...</p>
                  </div>

                  <div class="mb-1">
                    <p class="text font-weight-bold mb-0">Rolle</p>
                    <p id="role" class="text">Lädt...</p>
                  </div>

                  <div class="mb-1">
                    <p class="text font-weight-bold mb-0">E-Mail</p>
                    <p id="email" class="text">Lädt...</p>
                  </div>

                  <div class="mb-1">
                    <p class="text font-weight-bold mb-1">API-Key</p>
                    <p id="key" class="text">Lädt...</p>
                  </div>
                </div>
                <!-- ./card-body -->
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

  <div id="edit-profile-modal" class="modal fade">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header border-0">
          <h5 class="modal-title title font-weight-bold">Profil bearbeiten</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form id="edit-profile-form">
          <div class="modal-body p-0">

            <div id="nav-container" class="p-3">
              <nav class="nav nav-pills nav-justified rounded">
                <a href="#password" class="nav-item nav-link active" data-toggle="tab" role="tab">
                  Passwort
                </a>
                <a href="#apiKey" class="nav-item nav-link" data-toggle="tab" role="tab">
                  API Key
                </a>
              </nav>
            </div>

            <div class="tab-container">
              <div class="tab-content px-3">

                <div id="password" class="tab-pane fade show active" role="tabpanel">
                  <div class="form-group">
                    <label for="new-password">Neues Passwort</label>
                    <input type="text" name="new-password" id="new-password" class="form-control">
                  </div>

                  <div class="form-group">
                    <label for="repeat-password">Passwort wiederholen</label>
                    <input type="text" name="repeat-password" id="repeat-password" class="form-control">
                  </div>
                </div>

                <div id="apiKey" class="tab-pane fade show" role="tabpanel">
                  <div class="form-group">
                    <label for="new-key">API Key</label>
                    <input type="text" name="new-key" id="new-key" class="form-control">
                  </div>
                </div>
              </div>
            </div>

          </div>
          <div class="modal-footer border-0">
            <button type="button" class="btn text" data-dismiss="modal">Abbrechen</button>
            <input type="submit" class="btn btn-sm btn-outline-warning" value="Speichern" />
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
  <script>
    new Loader().init();
    document.querySelector(".main-sidebar #profile").classList.add("active");

    const ls = localStorage;
    const user = new User();
    const avatar = new Avatar();
    var temp = user.get(user.getSession().userId);
    const userData = {
      userId: temp.id,
      username: temp.username,
      email: temp.email,
      role: temp.role,
      avatar: temp.avatar_url,
      key: ls.hasOwnProperty("@dag_apiKey") == true ? ls.getItem("@dag_apiKey") : null,
    };

    const appProfile = document.querySelector("#app-profile");
    appProfile.querySelector("#avatar").setAttribute("src", userData.avatar);
    appProfile.querySelector("#username").innerText = userData.username;
    appProfile.querySelector("#role").innerText = userData.role;
    appProfile.querySelector("#email").innerText = userData.email;
    appProfile.querySelector("#key").innerText = userData.key;

    $("#edit-profile-modal").on("show.bs.modal", function(e) {
      const modal = this,
        form = this.querySelector("#edit-profile-form");

      form.querySelector("#new-key").setAttribute("placeholder", userData.key);
      form.addEventListener("submit", function(e) {
        e.preventDefault();
        e.stopImmediatePropagation();

        let formData;
        if (this.querySelector("#password").classList.contains("active")) {
          formData = {
            new: this.querySelector("#new-password").value,
            repeat: this.querySelector("#repeat-password").value,
          }
          if (formData.new === formData.repeat) {
            let res = user.updatePassword(userData.userId, formData.new);
            $(modal).modal("hide");
          }
        } else {
          formData = {
            key: form.querySelector("#new-key").value,
          }
          ls.setItem("@dag_apiKey", formData.key);

          document.querySelector("#vehicles table tbody").innerHTML = "";
          document.querySelector("#buildings #house-output").innerHTML = "";
          document.querySelector("#buildings #building-output").innerHTML = "";
          document.querySelector("#app-profile #key").innerText = formData.key;
          displayProfile(formData.key);
          displayVehicles(formData.key);
          displayHouses(formData.key);
          displayBuildings(formData.key);
          $(modal).modal("hide");
        }
      });
    });

    $("#edit-profile-modal").on("hide.bs.modal", function(e) {
      const modal = this,
        form = this.querySelector("#edit-profile-form");
      form.reset();
    });

    if (userData.key != null) {
      // Profile
      displayProfile(userData.key);

      // Vehicles
      displayVehicles(userData.key);

      // Houses
      displayHouses(userData.key);

      // Appartments
      // const appartmentList = rl.getAppartments(ls.getItem("@dag_apiKey"));

      // Buildings
      displayBuildings(userData.key);

      document.querySelector("#refresh").addEventListener("click", function(e) {
        if (document.querySelector("#vehicles").classList.contains("active")) {
          document.querySelector(".content #vehicles table tbody").innerHTML = "";
          displayVehicles(userData.key);
        } else {
          document.querySelector("#buildings #house-output").innerHTML = "";
          document.querySelector("#buildings #building-output").innerHTML = "";
          displayHouses(userData.key);
          displayBuildings(userData.key);
        }
      });

      $('[data-toggle="tooltip"]').tooltip();
    }

    function displayProfile(key) {
      const output = document.querySelector(".content #rlrpg");
      const rl = new ReallifeRPG();
      const profile = rl.getProfile(key);
      if (profile.suspended == 1) {
        profile.querySelector("#ca-banned").classList.remove("d-none");
      }
      if (profile.arrested == 1) {
        var prisonTime = profile.jail_time / 2;
        profile.querySelector("#ca-jail").classList.remove("d-none");
        profile.querySelector("#time").innerText = prisonTime;
      }
      var lastSeen = new Date(profile.last_seen.date);
      output.querySelector("#avatar").setAttribute("src", profile.avatar_full);
      output.querySelector("#level-progress #level").innerText = profile.level;
      output.querySelector("#level-progressbar").setAttribute("style", `width: ${profile.level_progress}%`);
      output.querySelector("#cop-level").innerText = `Level: ${profile.coplevel}`;
      output.querySelector("#medic-level").innerText = `Level: ${profile.mediclevel}`;
      output.querySelector("#rac-level").innerText = `Level: ${profile.adaclevel}`;
      output.querySelector("#name").innerText = profile.name;
      output.querySelector("#steamId").innerText = profile.pid;
      output.querySelector("#cash").innerText = `${profile.cash.toLocaleString(undefined)} €`;
      output.querySelector("#bank").innerText = `${profile.bankacc.toLocaleString(undefined)} €`;
      output.querySelector("#quest").innerText = `${profile.quest_row} / 39`;
      output.querySelector("#skillpoints").innerText = `${profile.skillpoint} Punkte`;
      output.querySelector("#playtime-active").innerText = `${(profile.play_time.active / 60).toFixed(2)} Stunden`;
      output.querySelector("#playtime-total").innerText = `${(profile.play_time.total / 60).toFixed(2)} Stunden`;
      output.querySelector("#last-seen").innerText = `${lastSeen.getDate()}.${lastSeen.getMonth() + 1}.${lastSeen.getFullYear()} | ${lastSeen.getHours()}:${lastSeen.getMinutes()} Uhr`;
    }

    function displayVehicles(key) {
      const vehicleOutput = document.querySelector(".content #vehicles table tbody");
      const rl = new ReallifeRPG();
      const vehicles = rl.getVehicles(key);
      if (vehicles.length > 0) {
        for (const key in vehicles) {
          const vehicle = vehicles[key];

          var type;
          if (vehicle.type === "Car") {
            type = `<i class="fas fa-car-side"></i>`;
          } else if (vehicle.type === "Ship") {
            type = `<i class="fas fa-ship"></i>`;
          } else if (vehicle.type === "Air") {
            type = `<i class="fas fa-plane"></i>`;
          }

          var status;
          if (vehicle.active == 1) {
            status = "Ausgeparkt";
          } else if (vehicle.impound == 1) {
            status = "Beschlagnahmt";
          } else {
            status = "Geparkt";
          }

          var side;
          if (vehicle.side === "COP") {
            side = "Polizei";
          } else if (vehicle.side === "EAST") {
            side = "RAC";
          } else if (vehicle.side === "MEDIC" || vehicle.side === "GUER") {
            side = "Medic";
          } else {
            side = "Zivilisten";
          }

          if (vehicle.alive == 1) {
            vehicleOutput.innerHTML += `<tr class="text-center">
              <td>
                <p class="text mb-0">${type}</p>
              </td>
              <td>
                <button class="btn btn-sm btn-outline-warning">${status}</button>
              </td>
              <td>
                <p class="text mb-0">${vehicle.vehicle_data.name}</p>
              </td>
              <td>
                <p class="text mb-0">${side}</p>
              </td>
              <td>
                <button class="btn btn-sm btn-outline-warning">${vehicle.plate}</button>
              </td>
              <td>
                <div class="progress mt-1 rounded" data-toggle="tooltip" data-placement="top" title="${parseInt(vehicle.fuel * 100)} %">
                  <div class="progress-bar progress-bar-striped bg-orange progress-bar-animated" style="width: ${parseInt(vehicle.fuel * 100)}%;"></div>
                </div>
              </td>
            </tr>`;
          }
        }
      } else {
        vehicleOutput.innerHTML = `<td><tr colspan="6"><p class="text text-center mb-0">Keine Fahrzeuge gefunden</p></tr></td>`;
      }
    }

    function displayHouses(key) {
      const houseOuput = document.querySelector("#buildings #house-output");
      const rl = new ReallifeRPG();
      const houseList = rl.getHouses(key);
      const owner = rl.getProfile(key).name;
      houseList.map((house, index) => {
        var loc = house.location.substring(1, house.location.length - 1).split(",");
        var players = "";
        house.players.forEach(player => {
          players += `<span class="badge bg-orange text-white mr-1 mb-1 p-2">${player}</span>`;
        });
        houseOuput.innerHTML += `<tr class="text-center">
            <td>
              <p class="text mb-0">${house.id}</p>
            </td>
            <td>
              <button class="btn btn-sm btn-outline-warning">
                ${house.disabled == 1 ? "Zerstört" : "Gewartet"}
              </button>
            </td>
            <td>
              <p class="text mb-0">${owner}</p>
            </td>
            <td style="white-space: normal !important;">
              ${players}
            </td>
            <td>
              <p class="text mb-0">${house.payed_for / 24} Tage</p>
            </td>
            <td>
              <a class="btn btn-sm btn-warning" href="https://info.realliferpg.de/map?x=${loc[0]}&amp;y=${loc[1]}" target="_blank"><i class="fas fa-map-marked-alt"></i></a>
            </td>
          </tr>`;
      });
    }

    function displayBuildings(key) {
      const buildingOutput = document.querySelector("#buildings #building-output");
      const rl = new ReallifeRPG();
      const buildingList = rl.getBuildings(key);
      const owner = rl.getProfile(key).name;
      buildingList.map((building, index) => {
        var loc = building.location.substring(1, building.location.length - 1).split(",");
        var players = "";
        building.players.forEach(player => {
          players += `<span class="badge bg-orange text-white mr-1 mb-1 p-2">${player}</span>`;
        });
        buildingOutput.innerHTML += `<tr class="text-center">
            <td>
              <p class="text mb-0">${building.id}</p>
            </td>
            <td>
              <button class="btn btn-sm btn-outline-warning">
                ${building.disabled == 1 ? "Zerstört" : "Aktiv"}
              </button>
            </td>
            <td>
              <p class="text mb-0">${building.stage}</p>
            </td>
            <td>
              <p class="text mb-0">${owner}</p>
            </td>
            <td style="white-space: normal !important;">
              ${players}
            </td>
            <td>
              <a class="btn btn-sm btn-warning" href="https://info.realliferpg.de/map?x=${loc[0]}&amp;y=${loc[1]}" target="_blank"><i class="fas fa-map-marked-alt"></i></a>
            </td>
          </tr>`;
      });
    }
  </script>
</body>

</html>