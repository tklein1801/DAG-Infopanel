<!-- <?php require_once "../config.php"; ?> -->
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
  <title>Infopanel | Login</title>
  <link rel="icon" href="<?php echo $other_logo; ?>" />
  <link rel="stylesheet" href="<?php echo $dir_plugins . "fontawesome-free/css/all.min.css"; ?>" />
  <link rel="stylesheet" href="<?php echo $dir_css . "adminlte.min.css"; ?>" />
  <link rel="stylesheet" href="<?php echo $dir_css . "theme.css"; ?>" />
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet" />
</head>

<body>
  <style>
    html,
    body {
      background-color: #1a1a1a;
    }

    #login-container img {
      width: 40%;
    }
  </style>

  <!-- .ml-0 class is required bcause it would be add an margin-left for the sidebar of the adminlte template which isn't used on this page -->
  <div class="content-wrapper w-100 h-100 ml-0">
    <div id="login-container" class="d-flex w-100 h-100 justify-content-center align-items-center">
      <form class="px-4">
        <div class="form-group d-flex justify-content-center">
          <img class="rounded-circle" src="https://files.dulliag.de/web/images/logo.jpg" alt="DulliAG Logo">
        </div>

        <div class="form-group">
          <label for="username">Benutzername</label>
          <input type="text" name="username" id="username" class="form-control" autocomplete="username">
        </div>

        <div class="form-group">
          <label for="password">Passwort</label>
          <input type="password" name="password" id="password" class="form-control" autocomplete="current-password">
        </div>

        <div class="form-group d-flex justify-content-center">
          <input type="submit" class="btn btn-outline-warning rounded-pill px-4" value="Anmelden">
        </div>
      </form>
    </div>

  </div>

  <!-- REQUIRED SCRIPTS -->
  <!-- jQuery -->
  <script src="<?php echo $dir_plugins . "jquery/jquery.min.js"; ?>"></script>
  <script src="<?php echo $dir_js . "loader.js"; ?>"></script>
  <script src="<?php echo $dir_api . "user/user.js"; ?>"></script>
  <script>
    new Loader().init();

    const Toast = {
      /**
       * @param {string} state
       * @param {string} message
       */
      show(state, message) {
        const toast = document.createElement("div");
        toast.classList.add("toast", `toast-${state}`, "show");
        toast.textContent = message;

        document.querySelector("#login-container form").append(toast);
        let shown = setTimeout(() => {
          document.querySelector("#login-container form").removeChild(toast);
        }, 3000);
      },
    };

    const user = new User();
    const loginForm = document.querySelector("#login-container form");
    loginForm.addEventListener("submit", function(e) {
      e.preventDefault();

      const formData = {
        username: loginForm.querySelector("#username").value,
        password: loginForm.querySelector("#password").value
      };
      let res = user.checkUsername(formData.username, formData.password);
      if (res.login == true) {
        Toast.show("success", "Du hast dich angemeldet!");
        setTimeout(() => {
          location.href = "../Dashboard/";
        }, 1000);
      } else {
        Toast.show("error", res.reason);
      }
      console.log(res);
    });
  </script>
</body>

</html>