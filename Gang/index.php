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
  <title>Infopanel | Gang</title>
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
              <h1 class="m-0">Starter Page</h1>
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
            <div class="col-md-7 col-12">
              <div class="card card-outline card-orange">
                <div class="card-header border-0">
                  <p class="card-title font-weight-bold">
                    Gangkasse: <small class="text-success"> 50.000 €</small>
                  </p>
                  <div class="card-tools">
                    <button class="btn btn-tool">
                      <i class="fas fa-plus"></i>
                    </button>
                  </div>
                </div>
                <div class="card-body p-0">
                  <div class="table-responsive table-borderless">
                    <table class="table mb-0">
                      <thead>
                        <tr class="text-center">
                          <th>Datum</th>
                          <th>Verwendungszweck</th>
                          <th>Sender</th>
                          <th>Betrag</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr class="text-center">
                          <td>
                            <p class="text mb-0" data-toggle="tooltip" title="05:17 Uhr">
                              12.08.2020
                            </p>
                          </td>
                          <td>
                            <p class="text mb-0"><i>Kaution</i></p>
                          </td>
                          <td>
                            <p class="text mb-0">
                              <img class="img-circle img-size-32 mr-2" src="./assets/img/avatar.jpg" alt="User avatar" />
                              Alexander Pierce
                            </p>
                          </td>
                          <td>
                            <p class="text text-danger mb-0">- 50.000 €</p>
                          </td>
                        </tr>
                        <tr class="text-center">
                          <td>
                            <p class="text mb-0" data-toggle="tooltip" title="03:24 Uhr">
                              12.08.2020
                            </p>
                          </td>
                          <td>
                            <p class="text mb-0"><i>HK 416 Team Barbie</i></p>
                          </td>
                          <td>
                            <p class="text mb-0">
                              <img class="img-circle img-size-32 mr-2" src="./assets/img/avatar.jpg" alt="User avatar" />
                              Alexander Pierce
                            </p>
                          </td>
                          <td>
                            <p class="text text-success mb-0">+ 100.000 €</p>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-5 col-12">
              <div class="card card-outline card-orange">
                <div class="card-header border-0">
                  <p class="card-title font-weight-bold">
                    Kontakte
                  </p>
                  <div class="card-tools">
                    <button class="btn btn-tool">
                      <i class="fas fa-user-plus"></i>
                    </button>
                  </div>
                </div>
                <div class="card-body p-0">
                  <div class="table-responsive table-borderless">
                    <table class="table mb-0">
                      <thead>
                        <tr>
                          <th>Vor- & Nachname</th>
                          <th>Beschreibung</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                            <p class="text mb-0">Michael Burns</p>
                          </td>
                          <td>
                            <p class="text mb-0">Krasser dude</p>
                          </td>
                          <td class="text-right">
                            <button class="btn btn-sm btn-outline-warning mr-2 px-3" style="margin-top: -0.3rem;">
                              <i class="fas fa-user-edit"></i>
                            </button>
                            <button class="btn btn-sm btn-outline-danger px-3" style="margin-top: -0.3rem;">
                              <i class="fas fa-trash-alt"></i>
                            </button>
                          </td>
                        </tr>
                      </tbody>
                    </table>
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
    document.querySelector(".main-sidebar #gang").classList.add("active");
  </script>
</body>

</html>