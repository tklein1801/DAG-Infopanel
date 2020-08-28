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
  <title>Infopanel | Mein Profil</title>
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
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Starter Page</li>
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
            <div class="col-md-3 col-12">
              <div id="ca-banned" class="callout callout-orange">
                <h4 class="title">Gebannt</h4>
                <p class="text">
                  Du wurdest aus dem Spielgeschehen von
                  <a class="link" href="https://realliferpg.de">ReallifeRPG</a> ausgechlossen.
                  Bitte melde dich im
                  <a class="link" href="ts3server://ts.realliferpg.de">Support</a>.
                </p>
              </div>

              <div id="ca-jail" class="callout callout-orange">
                <h4 class="title">Inhaftiert</h4>
                <p class="text">
                  Du sitzt derzeit im Bundesgefänigs von Nordholm ein. Deine Inhaftierung dauert
                  noch <span id="time"></span> Monate an!
                </p>
              </div>

              <div class="card card-outline card-orange">
                <div class="card-body pb-0">
                  <img id="avatar" class="profile-img rounded-circle w-25 mb-2" alt="Steam Avatar" src="https://steamcdn-a.akamaihd.net/steamcommunity/public/images/avatars/e8/e88b53a566d6d8940387cc9ea1bcafc00d30e889_full.jpg" />
                  <div class="item mb-2">
                    <div id="level-progress">
                      <p class="text font-weight-bold mb-0">Level <span id="level">94</span></p>
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
                        <span id="cop-level" class="badge bg-orange text-white p-1">Level: 2</span>
                      </div>
                      <div class="col-4 text-center border-right" data-toggle="cs-tooltip" data-placement="top" data-content="Sanitäter">
                        <p class="text mb-0">
                          <i class="fas fa-clinic-medical w-100" style="font-size: 1.3rem;"></i>
                        </p>
                        <span id="medic-level" class="badge bg-orange text-white p-1">Level: 0</span>
                      </div>
                      <div class="col-4 text-center" data-toggle="cs-tooltip" data-placement="top" data-content="RAC">
                        <p class="text mb-0">
                          <i class="fas fa-wrench w-100" style="font-size: 1.3rem;"></i>
                        </p>
                        <span id="rac-level" class="badge bg-orange text-white p-1">Level: 6</span>
                      </div>
                    </div>
                  </div>

                  <div class="mb-1">
                    <p class="text font-weight-bold mb-0">Name</p>
                    <p id="name" class="text">[R618] Nele Hernandez</p>
                  </div>

                  <div class="mb-1">
                    <p class="text font-weight-bold mb-0">Steam64Id</p>
                    <p id="steamId" class="text">76561198356345899</p>
                  </div>

                  <div class="mb-1">
                    <p class="text font-weight-bold mb-0">Bargeld</p>
                    <p id="cash" class="text">0 €</p>
                  </div>

                  <div class="mb-1">
                    <p class="text font-weight-bold mb-0">Kontostand</p>
                    <p id="bank" class="text">1.207.410 €</p>
                  </div>

                  <div class="mb-1">
                    <p class="text font-weight-bold mb-0">Quest Fortschritt</p>
                    <p id="quest" class="text">39 / 39</p>
                  </div>

                  <div class="mb-1">
                    <p class="text font-weight-bold mb-0">Skillpunkte</p>
                    <p id="skillpoints" class="text">91 Punkte</p>
                  </div>

                  <div class="mb-1">
                    <p class="text font-weight-bold mb-0">Aktive Spielzeit</p>
                    <p id="playtime-active" class="text">1045.63 Stunden</p>
                  </div>

                  <div class="mb-1">
                    <p class="text font-weight-bold mb-0">Gesamte Spielzeit</p>
                    <p id="playtime-total" class="text">2575.10 Stunden</p>
                  </div>

                  <div class="mb-0">
                    <p class="text font-weight-bold mb-0">Zuletzt online</p>
                    <p id="last-seen" class="text">2020-08-11 21:59:02</p>
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
                      <button type="button" id="refresh" class="btn btn-warning">
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
                          <table class="table mb-0">
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
                            <tbody>
                              <tr class="text-center">
                                <td>
                                  <p class="text mb-0"><i class="fas fa-car-side"></i></p>
                                </td>
                                <td>
                                  <button class="btn btn-sm btn-outline-warning" style="margin-top: -0.3rem;">
                                    Geparkt
                                  </button>
                                </td>
                                <td>
                                  <p class="text mb-0">Mercedes Benz S63 AMG</p>
                                </td>
                                <td>
                                  <p class="text mb-0">Zivilisten</p>
                                </td>
                                <td>
                                  <button class="btn btn-sm btn-outline-warning" style="margin-top: -0.3rem;">
                                    NKDA4351
                                  </button>
                                </td>
                                <td>
                                  <div class="progress mt-1 rounded" data-toggle="cs-tooltip" data-placement="top" data-content="RAC">
                                    <div class="progress-bar progress-bar-striped bg-orange progress-bar-animated" style="width: 33.59%;"></div>
                                  </div>
                                </td>
                              </tr>
                            </tbody>
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
                          <table class="table mb-0">
                            <thead>
                              <tr class="text-center">
                                <th>ID</th>
                                <th>Status</th>
                                <th>Inhaber</th>
                                <th>Mitbewohner</th>
                                <th>Gewartet für</th>
                              </tr>
                            </thead>
                            <tbody id="house-output">
                              <tr class="text-center">
                                <td>
                                  <p class="text mb-0">1074</p>
                                </td>
                                <td>
                                  <button class="btn btn-sm btn-outline-warning" style="margin-top: -0.3rem;">
                                    Gewartet
                                  </button>
                                </td>
                                <td>
                                  <p class="text mb-0">[R618] Nele Hernandez</p>
                                </td>
                                <td style="white-space: normal !important;">
                                  <span class="badge bg-orange text-white mr-1 mb-1 p-2">[DAG] Anton Becker</span>
                                  <span class="badge bg-orange text-white mr-1 mb-1 p-2">[DAG] Michael Burns</span>
                                  <span class="badge bg-orange text-white mr-1 mb-1 p-2">[DAG] Justin Öxygen</span>
                                </td>
                                <td>
                                  <p class="text mb-0">16 Tage</p>
                                </td>
                                <td>
                                  <a class="btn btn-sm btn-warning" style="margin-top: -0.3rem;" href="https://info.realliferpg.de/map?x=7301&amp;y=3074" target="_blank"><i class="fas fa-map-marked-alt"></i></a>
                                </td>
                              </tr>
                            </tbody>
                          </table>
                        </div>

                        <h4 class="title mx-3">Appartments</h4>
                        <div class="table-responsive table-borderless">
                          <table class="table mb-0">
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
                          <table class="table mb-0">
                            <thead>
                              <tr class="text-center">
                                <th>ID</th>
                                <th>Status</th>
                                <th>Stufe</th>
                                <th>Inhaber</th>
                                <th>Mitbewohner</th>
                              </tr>
                            </thead>
                            <tbody id="building-output">
                              <tr class="text-center">
                                <td>
                                  <p class="text mb-0">1686</p>
                                </td>
                                <td>
                                  <button class="btn btn-sm btn-outline-warning" style="margin-top: -0.3rem;">
                                    Zerstört
                                  </button>
                                </td>
                                <td>
                                  <p class="text mb-0">-1</p>
                                </td>
                                <td>
                                  <p class="text mb-0">[R618] Nele Hernandez</p>
                                </td>
                                <td style="white-space: normal !important;">
                                  <span class="badge bg-orange text-white mr-1 mb-1 p-2">[DAG] Anton Becker</span>
                                </td>
                                <td>
                                  <a class="btn btn-sm btn-warning" href="https://info.realliferpg.de/map?x=7378&amp;y=3062" target="_blank"><i class="fas fa-map-marked-alt"></i></a>
                                </td>
                              </tr>
                            </tbody>
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
            <div class="col-md-3 col-12">
              <div class="card card-outline card-orange">
                <div class="card-body pb-0">
                  <div id="avatar-container" class="mb-1">
                    <img id="tool-avatar" class="rounded-circle w-25 mx-auto" src="https://dulliag.de/Tool/uploads/avatar/king-dulli.jpg" alt="Tool Avatar" />
                    <p class="d-none text text-center" data-toggle="modal" data-target="#update-avatar-modal">
                      <i class="fas fa-file-upload"></i>
                    </p>
                  </div>

                  <div class="mb-1">
                    <button class="btn btn-sm bg-orange text-white w-100 mt-2" data-toggle="modal" data-target="#edit-profile-modal">
                      Profil bearbeiten
                    </button>
                  </div>

                  <div class="mb-1">
                    <p class="text font-weight-bold mb-0">Benutzername</p>
                    <p id="tool-username" class="text">Laura</p>
                  </div>

                  <div class="mb-1">
                    <p class="text font-weight-bold mb-0">Name</p>
                    <p id="tool-name" class="text">Laura Klein</p>
                  </div>

                  <div class="mb-1">
                    <p class="text font-weight-bold mb-0">E-Mail</p>
                    <p id="tool-email" class="text">laura@dulliag.de</p>
                  </div>

                  <div class="mb-1">
                    <p class="text font-weight-bold mb-1">SteamURL</p>
                    <p id="tool-steam-url" class="text">
                      https://steamcommunity.com/profiles/76561198356345899
                    </p>
                  </div>

                  <div class="mb-1">
                    <p class="text font-weight-bold mb-1">API-Key</p>
                    <p id="tool-steam-url" class="text">
                      f902adcf58ecb5c5998f6372ccd46de12705a5ad
                    </p>
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

  <!-- REQUIRED SCRIPTS -->
  <!-- jQuery -->
  <script src="<?php echo $dir_plugins . "jquery/jquery.min.js"; ?>"></script>
  <!-- Bootstrap 4 -->
  <script src="<?php echo $dir_plugins . "bootstrap/js/bootstrap.bundle.min.js"; ?>"></script>
  <!-- AdminLTE App -->
  <script src="<?php echo $dir_js . "adminlte.min.js"; ?>"></script>
  <script src="<?php echo $dir_js . "loader.js"; ?>"></script>
  <script>
    new Loader().init();
    document.querySelector(".main-sidebar #profile").classList.add("active");
  </script>
</body>

</html>