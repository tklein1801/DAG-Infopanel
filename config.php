<?php
session_start();

// URL's
$url_host = "https://info.dulliag.de/";

// Directories
$dir_assets = __DIR__ . "/assets/";
$dir_css = $url_host . "assets/css/";
$dir_images = $url_host . "assets/img/";
$dir_js = $url_host . "assets/js/";
$dir_plugins = $url_host . "plugins/";
$dir_components = $dir_assets . "components/";
$dir_api = $url_host . "API/";

// Components
$comp_navbar = $dir_components . "navbar.php";
$comp_sidebar = $dir_components . "sidebar.php";
$comp_footer = $dir_components . "footer.php";

// Other
$other_theme_color = "#007bff";
$other_logo = $dir_images . "logo.jpg";

// Check if the user is logged in
if ($_SERVER['REQUEST_URI'] !== "/Login/") {
  if (!isset($_SESSION['login'])) {
    header("Location: " . $url_host . "Login/");
  }
  require __DIR__ . "/API/avatar/avatar.php";
  $av = new Avatar();
  $user_avatar = $av->get(($_SESSION['login']['userId']));
}
