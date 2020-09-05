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
  <title>Infopanel • Streams</title>
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
              <h1 class="m-0">Streaming</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="<?php echo $url_host; ?>">Infopanel</a></li>
                <li class="breadcrumb-item"><a href="<?php echo $url_host . "Dashboard/"; ?>">Dashboard</a></li>
                <li class="breadcrumb-item active">Streams</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
      <!-- ./content-header -->

      <div class="content">
        <div class="container-fluid">
          <div id="streams" class="row">
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
  <script src="<?php echo $dir_js . "realliferpg.js"; ?>"></script>
  <script>
    new Loader().init();
    document.querySelector(".main-sidebar #streams").classList.add("active");
    const rl = new ReallifeRPG();
    const streams = rl.getStreams();
    const output = document.querySelector(".content #streams");
    if (streams.length > 0) {
      streams.forEach(stream => {
        console.log(stream);
        output.innerHTML += `<div class="col-md-3 col-12">
            <div class="card card-outline card-orange bg-transparent shadow-none">
              <div class="card-header position-relative border-0 p-0">
                <img class="w-100 rounded-bottom" src="${stream.preview_large}" alt="Thumbnail of ${stream.display_name}" />
                <span id="badge-live" class="badge badge-danger p-2 position-absolute" style="top: 1rem; left: 1rem;"><i class="fas fa-exclamation-circle mr-1"></i> Live</span>
                <span id="badge-viewer" class="badge badge-success p-2 position-absolute" style="top: 1rem; right: 1rem;"><i class="fas fa-users mr-1"></i> ${stream.viewers}</span>
              </div>
              <div class="card-body mx-auto rounded-bottom" style="width: 95%; background-color: #212121;">
                <h4 class="title">${stream.display_name}</h4>
                <p class="text mb-0">${stream.status}</p>
                <a href="${stream.url}" class="btn btn-sm btn-outline-warning mt-3" target="_blank"><i class="fab fa-twitch"></i> Zuschauen</a>
              </div>
            </div>
          </div>`;
      });
    } else {
      output.innerHTML = `<div class="col-md-3 col-12">
            <div class="card card-outline card-orange bg-transparent shadow-none">
              <div class="card-header border-0 p-0">
                <img class="w-100 rounded-bottom" src="https://static-cdn.jtvnw.net/previews-ttv/live_user_uhseryt-640x360.jpg" alt="TITLE" />
              </div>
              <div class="card-body mx-auto rounded-bottom" style="width: 95%; background-color: #212121;">
                <h4 class="title text-center mb-0">Keine Streams gefunden</h4>
              </div>
            </div>
          </div>`;
    }
  </script>
</body>

</html>