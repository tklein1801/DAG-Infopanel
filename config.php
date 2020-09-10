<?php
session_start();

// URL's
$url_host = "https://info.dulliag.de/";
$url_avatar = "https://info.dulliag.de/assets/img/avatar/";
$url_gallery = "https://info.dulliag.de/assets/img/gallery/";

// Directories
$dir_server = "/var/www/vhosts/dulliag.de/info.dulliag.de/";
$dir_assets = __DIR__ . "/assets/";
$dir_css = $url_host . "assets/css/";
$dir_images = $url_host . "assets/img/";
$dir_js = $url_host . "assets/js/";
$dir_plugins = $url_host . "plugins/";
$dir_components = $dir_assets . "components/";
$dir_api = $url_host . "API/";
$dir_avatar = $dir_server . "assets/img/avatar/";
$dir_gallery = $dir_server . "assets/img/gallery/";

// Components
$comp_navbar = $dir_components . "navbar.php";
$comp_sidebar = $dir_components . "sidebar.php";
$comp_footer = $dir_components . "footer.php";

// Other
$other_theme_color = "#df691a";
$other_logo = $dir_images . "logo.jpg";
$avatar_max = 4 * 1024 * 1024; // equals 4 MB
$gallery_max = 8 * 1024 * 1024; // equals 8 MB

// Check if the user is logged in
if ($_SERVER['REQUEST_URI'] !== "/Login/") {
  if (!isset($_SESSION['login'])) {
    header("Location: " . $url_host . "Login/");
  }
  require __DIR__ . "/API/avatar/avatar.php";
  $av = new Avatar();
  $user_avatar = $av->get(($_SESSION['login']['userId']));
}
