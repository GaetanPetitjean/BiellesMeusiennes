<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu">
      <li class="header">Menu principal</li>
      <li>
        <a href="<?= $this->Url->build(['_name' => 'Dashboard']);?>">
          <i class="fa fa-dashboard"></i> <span>Dashboard</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-calendar-o"></i>
          <span>Évènements</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
          <li>
              <a href="<?=$this->Url->build(['controller' => 'events', 'action'=> 'index', 'prefix' => 'admin'])?>">
                  <i class="fa fa-circle-o"></i> Liste
              </a>
          </li>
          <li>
              <a href="<?=$this->Url->build(['controller' => 'events', 'action'=> 'add', 'prefix' => 'admin'])?>">
                  <i class="fa fa-circle-o"></i> Créer évènement
              </a>
          </li>
        </ul>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-users"></i>
          <span>Participants</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
          <li>
              <a href="<?=$this->Url->build(['controller' => 'owners', 'action'=> 'index', 'prefix' => 'admin'])?>">
                  <i class="fa fa-circle-o"></i> Liste
              </a>
          </li>
          <li>
              <a href="<?=$this->Url->build(['controller' => 'owners', 'action'=> 'add', 'prefix' => 'admin'])?>">
                  <i class="fa fa-circle-o"></i> A valider
              </a>
          </li>
        </ul>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-car"></i>
          <span>Vehicules</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
          <li>
              <a href="<?=$this->Url->build(['controller' => 'vehicles', 'action'=> 'index', 'prefix' => 'admin'])?>">
                  <i class="fa fa-circle-o"></i> Liste
              </a>
          </li>
          <li>
              <a href="<?=$this->Url->build(['controller' => 'vehicles', 'action'=> 'add', 'prefix' => 'admin'])?>">
                  <i class="fa fa-circle-o"></i> Ajouter un vhl
              </a>
          </li>
        </ul>
      </li>
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>
