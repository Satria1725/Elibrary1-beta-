<!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-primary navbar-dark" style="height:60px;">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <?php if(isset($_SESSION['login_id'])): ?>
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="" role="button"><i class="fas fa-bars"></i></a>
        </li>
      <?php endif; ?>
      <li>
        <!-- Management Document file Sharing -->
        <a class="nav-link text-white"  href="./" role="button"> <large><h4>Elibrary System</h4></large></a>
      </li>
    </ul>

    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->
