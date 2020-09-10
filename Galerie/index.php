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
  <title>Infopanel • Galerie</title>
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
              <h1 class="m-0">
                <button class="btn btn-sm btn-outline-warning" style="margin-top: -0.3rem;" data-toggle="modal" data-target="#upload-image-modal">
                  <i class="fas fa-cloud-upload-alt"></i>
                </button>
                Galerie
              </h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="<?php echo $url_host; ?>">Infopanel</a></li>
                <li class="breadcrumb-item"><a href="<?php echo $url_host . "Dashboard/"; ?>">Dashboard</a></li>
                <li class="breadcrumb-item active">Galerie</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
      <!-- ./content-header -->

      <div class="content">
        <div class="container-fluid">
          <div class="row align-items-center"></div>
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

  <div id="upload-image-modal" class="modal fade">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header border-0">
          <h5 class="modal-title title font-weight-bold">Bild hochladen</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form id="upload-image-form">
          <div class="modal-body py-0">
            <div class="form-group">
              <label for="image" class="text-white">Bild</label>
              <div class="input-group">
                <div class="custom-file">
                  <input type="file" name="image" id="image" class="custom-file-input" />
                  <label class="custom-file-label" for="inputGroupFile01">Bild</label>
                </div>
              </div>
            </div>

            <div class="form-group">
              <label for="heading" class="text-white">Überschrift</label>
              <input type="text" name="heading" id="heading" class="form-control" />
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
  <script src="<?php echo $dir_api . "user/user.js"; ?>"></script>
  <script src="<?php echo $dir_api . "gallery/gallery.js"; ?>"></script>
  <script>
    new Loader().init();
    document.querySelector(".main-sidebar #gallery").classList.add("active");

    const user = new User();
    const gallery = new Gallery();
    const userData = user.getSession();
    const images = gallery.getAll();
    const imageOutput = document.querySelector(".content .row");
    if (images.length > 0) {
      images.map((image, index) => {
        imageOutput.innerHTML = `<div id="image-${image.id}" class="col-md-3 col-12">
            <div class="card card-outline card-orange bg-transparent shadow-none">
              <div class="card-header border-0 p-0">
                <img class="w-100 rounded-bottom" src="${image.file_url}" alt="${image.heading}" />
              </div>
              <div class="card-body mx-auto rounded-bottom" style="width: 95%; background-color: #212121;">
                <h4 class="title">${image.heading}</h4>
                <button class="btn btn-sm btn-outline-warning ml-auto mr-2 delIMG" data-image="${image.id}" onclick="js: document.querySelector('#image-${image.id}').remove(); gallery.delete(${image.id});">
                  <i class="fas fa-trash-alt"></i>
                </button>
              </div>
            </div>
          </div>` + imageOutput.innerHTML;
      });
    } else {
      // TODO Display an message
    }

    $("#upload-image-modal").on("show.bs.modal", function(e) {
      const modal = this,
        form = this.querySelector("form");

      form.addEventListener("submit", function(e) {
        e.preventDefault();
        e.stopImmediatePropagation();

        let formData = {
          heading: form.querySelector("#heading").value,
          image: form.querySelector("#image").files[0],
        };
        let res = gallery.upload(userData.userId, formData.heading, formData.image);
        if (res.error == null) {
          imageOutput.innerHTML = `<div id="image-${res.inserted_id}" class="col-md-3 col-12">
            <div class="card card-outline card-orange bg-transparent shadow-none">
              <div class="card-header border-0 p-0">
                <img class="w-100 rounded-bottom" src="${res.url}" alt="${formData.heading}" />
              </div>
              <div class="card-body mx-auto rounded-bottom" style="width: 95%; background-color: #212121;">
                <h4 class="title">${formData.heading}</h4>
                <button class="btn btn-sm btn-outline-warning ml-auto mr-2 delIMG" data-image="${res.inserted_id}" onclick="js: document.querySelector('#image-${res.inserted_id}').remove(); gallery.delete(${res.inserted_id});">
                  <i class="fas fa-trash-alt"></i>
                </button>
              </div>
            </div>
          </div>` + imageOutput.innerHTML;
        } else {
          console.error(res.error);
        }
        $(modal).modal("hide");
      });
    });

    $("#upload-image-modal").on("hide.bs.modal", function(e) {
      const modal = this,
        form = this.querySelector("form");
      form.reset();
    });
  </script>
</body>

</html>