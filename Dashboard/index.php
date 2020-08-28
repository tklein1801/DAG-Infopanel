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
  <title>Infopanel | Dashboard</title>
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
                Profile stats
              -->
            <div class="col-md-3 col-6">
              <div class="info-box bg-orange text-white">
                <span class="info-box-icon">
                  <i class="fas fa-money-bill-alt"></i>
                </span>
                <div class="info-box-content">
                  <span class="info-box-text">Bargeld</span>
                  <span id="cash" class="info-box-number">5000 €</span>
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
                  <span id="bank" class="info-box-number">1.207.410 €</span>
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
                  <span id="level" class="info-box-number">94</span>
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
                  <span id="skillpoints" class="info-box-number">91 Punkte</span>
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
              <div class="col-md-3 col-12">
                <button class="btn bg-orange text-white w-100 mb-3" data-toggle="modal" data-target="#add-news-modal">
                  Neuigkeit erstellen
                </button>

                <div class="row mx-0">
                  <div class="card card-outline card-orange w-100">
                    <div class="card-header border-0 pb-2">
                      <p class="card-title text-white font-weight-bold">
                        DAG-Infopanel v5.2
                      </p>
                      <div class="card-tools">
                        <a class="btn btn-tool"><i class="fas fa-pencil-alt"></i></a>
                        <a class="btn btn-tool"><i class="fas fa-trash-alt"></i></a>
                      </div>
                    </div>
                    <div class="card-body pt-0">
                      <p class="text mb-0">
                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy
                        eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam
                        voluptua. At vero eos et accusam et
                      </p>
                    </div>
                  </div>
                </div>
              </div>

              <!-- 
                  Serverliste
                -->
              <div class="col-md-9 col-12">
                <div class="row">
                  <div class="col-md-6 col-12">
                    <div class="card card-outline card-orange">
                      <div class="card-header border-0">
                        <p class="card-title text-white font-weight-bold">
                          RealLifeRPG 7.0 Server 1 <small>38/100</small>
                        </p>
                        <div class="card-tools">
                          <a type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                          </a>
                          <a type="button" class="d-none btn btn-tool refresh-server" data-server="1">
                            <i class="fas fa-sync-alt"></i>
                          </a>
                        </div>
                      </div>
                      <div class="card-body pt-0">
                        <p class="text font-weight-bold mb-0">Spieler</p>
                        <div class="progress rounded">
                          <div style="width: 25%;" id="civilian" class="progress-bar bg-success" data-toggle="cs-tooltip" data-content="Zivilisten"></div>
                          <div style="width: 5%;" id="cops" class="progress-bar bg-info" data-toggle="tooltip" title="Polizisten: 5"></div>
                          <div style="width: 5%;" id="medics" class="progress-bar bg-danger" data-toggle="tooltip" title="Mediziner: 5"></div>
                          <div style="width: 5%;" id="rac" class="progress-bar bg-warning" data-toggle="tooltip" title="RACler: 5"></div>
                          <div style="width: 62%;" id="free" class="progress-bar bg-light" data-toggle="tooltip" title="Frei: 62"></div>
                        </div>
                        <p class="text font-weight-bold mt-3 mb-0">Spielerliste</p>
                        <div class="row" style="overflow-x: scroll; max-height: 10rem;">
                          <p class="col-md-6 col-12 text mb-0">[BTK] Jupp Ritter</p>
                          <p class="col-md-6 col-12 text mb-0">[CH] Daniel Colones</p>
                          <p class="col-md-6 col-12 text mb-0">[BTK] Kurt C Hose</p>
                          <p class="col-md-6 col-12 text mb-0">Klaus Naber (Lobby)</p>
                          <p class="col-md-6 col-12 text mb-0">[SC] Andre Hen</p>
                          <p class="col-md-6 col-12 text mb-0">[R5/28] Norman Griesbach</p>
                          <p class="col-md-6 col-12 text mb-0">[C4/55] Julius Fleming</p>
                          <p class="col-md-6 col-12 text mb-0">[-TwW-] James Brice</p>
                          <p class="col-md-6 col-12 text mb-0">[Stidda] Casey Jones</p>
                          <p class="col-md-6 col-12 text mb-0">[Medic] Leif Eriksson</p>
                          <p class="col-md-6 col-12 text mb-0">[R1/58] Max Prem</p>
                          <p class="col-md-6 col-12 text mb-0">[Medic] Manuel Fink</p>
                          <p class="col-md-6 col-12 text mb-0">[Medic] Willy Grant</p>
                          <p class="col-md-6 col-12 text mb-0">[BiA] Tristan Negron</p>
                          <p class="col-md-6 col-12 text mb-0">[R8/26] Peter Fresh</p>
                          <p class="col-md-6 col-12 text mb-0">[C4/96] Philip Telford</p>
                          <p class="col-md-6 col-12 text mb-0">[BIA] Lukas von Rüden</p>
                          <p class="col-md-6 col-12 text mb-0">[-TwW-] Gustav Fogel</p>
                          <p class="col-md-6 col-12 text mb-0">[-TwW-] Manfred Becht</p>
                          <p class="col-md-6 col-12 text mb-0">Emerald Coxx</p>
                          <p class="col-md-6 col-12 text mb-0">[BROT]Dominik Cybulenski</p>
                          <p class="col-md-6 col-12 text mb-0">[LTU] Ren�� Dracken</p>
                          <p class="col-md-6 col-12 text mb-0">[BIA] Kongo Otto</p>
                          <p class="col-md-6 col-12 text mb-0">[BiA] Fabian Green</p>
                          <p class="col-md-6 col-12 text mb-0">[BiA] Bud Spencer jr.</p>
                          <p class="col-md-6 col-12 text mb-0">Ralf Becker</p>
                          <p class="col-md-6 col-12 text mb-0">[-TwW-] René Notzke</p>
                          <p class="col-md-6 col-12 text mb-0">[NVL] Daniel Craig</p>
                          <p class="col-md-6 col-12 text mb-0">[NVL] Mauritio Van Potus</p>
                          <p class="col-md-6 col-12 text mb-0">[R6/63] David Müller</p>
                          <p class="col-md-6 col-12 text mb-0">[Stidda] Georg Herbst</p>
                          <p class="col-md-6 col-12 text mb-0">[C2/91] Simeon Weiß</p>
                          <p class="col-md-6 col-12 text mb-0">[BiA] Yukitero Amano</p>
                          <p class="col-md-6 col-12 text mb-0">[Medic] E. Livingstone</p>
                          <p class="col-md-6 col-12 text mb-0">[Justiz] Lars Falko</p>
                          <p class="col-md-6 col-12 text mb-0">[AAP] Kim Groß</p>
                          <p class="col-md-6 col-12 text mb-0">[Justiz] John Mahone</p>
                          <p class="col-md-6 col-12 text mb-0">Philip Steinmaurer</p>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-md-6 col-12">
                    <div class="card card-outline card-danger">
                      <div class="card-header border-0">
                        <p class="card-title text-white font-weight-bold">
                          RealLifeRPG 7.0 Server 2 <small>Offline</small>
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
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
        <div class="modal-body py-0">
          <form id="add-news-form">
            <div class="form-group">
              <label for="heading" class="text-white">Überschrift</label>
              <input type="text" name="heading" id="heading" class="form-control" />
            </div>
            <div class="form-group">
              <label for="content" class="text-white">Inhalt</label>
              <textarea name="content" id="content" class="form-control" cols="30" rows="10"></textarea>
            </div>
          </form>
        </div>
        <div class="modal-footer border-0">
          <button type="button" class="btn text" data-dismiss="modal">Abbrechen</button>
          <input type="submit" class="btn btn-sm btn-outline-warning" value="Absenden" />
        </div>
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
  <script>
    new Loader().init();
    document.querySelector(".main-sidebar #dashboard").classList.add("active");
  </script>
</body>

</html>