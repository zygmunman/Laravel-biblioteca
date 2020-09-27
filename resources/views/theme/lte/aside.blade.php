<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
      <img src="{{asset("assets/$theme/dist/img/biblio.jpg")}}" class="img-circle" alt="User Image">
      </div>
      
      <div class="pull-center info">
        <p>{{session()->get('nombre_usuario', 'Invitado')}}</p>
      </div>
      
    </div>
    <!-- search form -->
    <form action="#" method="get" class="sidebar-form">
      <div class="input-group">
        <input type="text" name="q" class="form-control" placeholder="Buscar...">
            <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
      </div>
    </form>
    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
    
      <li class="header"><h4><b>Menú Principal</b></h4></li>
        @foreach ($menusComposer as $key => $item)
            @if ($item["menu_id"] != 0)
                @break
            @endif
            @include("theme.$theme.menu-item", ["item" => $item])
        @endforeach
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>