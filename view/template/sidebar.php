<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <div class="row" style="padding-top:10px">
    <div class="col-12">
      <img align="center" src="assets/img/artikel/Logo1.png" alt="Logo" style="width: 200px;">
      <hr>
    </div>
  </div>
  <div align="center"></div>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item">
          <a href="index.php?dashboard" class="nav-link">
            <i class="fas fa-users"></i>
            <p>Dashboard</p>
          </a>
        </li>

        <li class="nav-item">
          <a href="index.php?catatan" class="nav-link">
            <i class="fas fa-users"></i>
            <p>Catatan</p>
          </a>
        </li>

        <?php if ($_SESSION['role'] == 'admin') { ?>
          <li class="nav-item">
            <a href="index.php?edukasi" class="nav-link">
              <i class="fas fa-users"></i>
              <p>Edukasi</p>
            </a>
          </li>
        <?php } else { ?>
          <li class="nav-item">
            <a href="index.php?edukasiuser" class="nav-link">
              <i class="fas fa-users"></i>
              <p>Edukasi User</p>
            </a>
          </li>
        <?php } ?>

        <li class="nav-item">
          <a href="index.php?prediksi" class="nav-link">
            <i class="fas fa-users"></i>
            <p>Prediksi</p>
          </a>
        </li>

        <li class="nav-item">
          <a id="logoutLink" href="index.php?logout" class="nav-link <?php if($title=='logout'){echo 'active';}?>">
            <i class="fas fa-copy"></i>
            <p>Logout</p>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>

<script>
  document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('logoutLink').addEventListener('click', function(event) {
      event.preventDefault(); // Prevent the default link behavior
      var userConfirmed = confirm("Are you sure you want to logout?");
      if (userConfirmed) {
        window.location.href = this.href; // Proceed with the logout if confirmed
      }
    });
  });
</script>
