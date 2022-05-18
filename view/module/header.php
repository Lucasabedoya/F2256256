<header class="main-header">
    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b></b>SNA</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b></b>SENA</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <span class="hidden-xs">Lucas Arboleda Bedoya</span>
            </a>
            <ul class="dropdown-menu">
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-right">
                  <form method="post">
                    <input type="hidden" name="isalir">
                    <button type="submit" class="btn btn-default btn-flat">Sign out</button>
                  </form>
                  <?php
                    if (isset($_POST['isalir'])) {
                      $_SESSION['login'] = false;
                      unset($_SESSION['login']);
                      header('location:index.php');
                    }
                  ?>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
