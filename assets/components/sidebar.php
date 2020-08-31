<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <a href="index3.html" class="brand-link border-0">
    <img src="<?php echo $other_logo; ?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" />
    <span class="brand-text font-weight-bold text-white">Infopanel</span>
  </a>

  <div class="sidebar">
    <div class="user-panel mt-3 pb-3 mb-3 d-flex border-0">
      <div class="image">
        <img src="<?php echo $user_avatar['avatar_url']; ?>" class="img-circle elevation-2" alt="User Image" />
      </div>
      <div class="info">
        <a href="<?php echo $url_host . "API/user/logout.php"; ?>" class="d-block">
          <i class="fas fa-sign-out-alt"></i>
          <?php echo $_SESSION['login']['username']; ?>
        </a>
      </div>
    </div>

    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-header">Adminbereich</li>
        <li class="nav-item">
          <a href="<?php echo $url_host . "Benutzer/"; ?>" id="user" class="nav-link">
            <i class="fas fa-user-cog"></i>
            <p>
              Benutzerverwaltung
            </p>
          </a>
        </li>
      </ul>
      <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-header">Allgemeines</li>
        <li class="nav-item">
          <a href="<?php echo $url_host . "Dashboard/"; ?>" id="dashboard" class="nav-link">
            <i class="fas fa-tv nav-icon"></i>
            <p>
              Dashbaord
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?php echo $url_host . "Profil/"; ?>" id="profile" class="nav-link">
            <i class="far fa-address-card nav-icon"></i>
            <p>
              Mein Profil
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?php echo $url_host . "Markt/"; ?>" id="market" class="nav-link">
            <i class="fas fa-chart-area nav-icon"></i>
            <p>
              Markt
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?php echo $url_host . "Gang/"; ?>" id="gang" class="nav-link">
            <i class="fas fa-users nav-icon"></i>
            <p>
              Gang
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?php echo $url_host . "Streams/"; ?>" id="streams" class="nav-link">
            <i class="fab fa-twitch nav-icon"></i>
            <p>
              Streams
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?php echo $url_host . "Galerie/"; ?>" id="gallery" class="nav-link">
            <i class="far fa-images nav-icon"></i>
            <p>
              Galerie
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?php echo $url_host . "Crafting/"; ?>" id="crafting" class="nav-link">
            <i class="fas fa-tools nav-icon"></i>
            <p>
              Crafting
            </p>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- .sidebar -->
</aside>