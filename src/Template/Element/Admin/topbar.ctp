<header class="main-header">
  <!-- Logo -->
  <a href="../../index2.html" class="logo">
    <!-- mini logo for sidebar mini 50x50 pixels -->
    <span class="logo-mini"><b>B</b>55</span>
    <!-- logo for regular state and mobile devices -->
    <span class="logo-lg"><b>Bielles</b>Meusiennes</span>
  </a>
  <!-- Header Navbar: style can be found in header.less -->
  <nav class="navbar navbar-static-top" role="navigation">
    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </a>
    <div class="navbar-custom-menu">
      <ul class="nav navbar-nav">
        <!-- User Account: style can be found in dropdown.less -->
        <li class="dropdown user user-menu">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <?= $this->Html->image('avatar.png', ['class' => 'user-image', 'alt' => 'user image']);?>
            <span class="hidden-xs">Administrateur</span>
          </a>
          <ul class="dropdown-menu">
            <!-- User image -->
            <li class="user-header">
                <?= $this->Html->image('avatar.png', ['class' => 'img-circle', 'alt' => 'user image']);?>
              <p>
                Administrateur
                <small>compte principal</small>
              </p>
            </li>
            <!-- Menu Footer-->
            <li class="user-footer">
              <div class="">
                <a href="#" class="btn btn-default btn-flat btn-block">Sign out</a>
              </div>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </nav>
</header>
