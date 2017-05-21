<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header">Menu</li>
            <li class="{{ Route::getCurrentRoute()->getName() === 'admin.ingredientes' ? 'active' : '' }}"><a href="{{ route('admin.ingredientes') }}"><i class='fa fa-tint'></i> <span>Ingredientes</span></a></li>
            <li class="{{ Route::getCurrentRoute()->getName() === 'admin.receitas' ? 'active' : '' }}"><a href="{{ route('admin.receitas') }}"><i class='fa fa-tag'></i> <span>Receitas</span></a></li>
            <li class="{{ Route::getCurrentRoute()->getName() === 'admin.caracteristicas' ? 'active' : '' }}"><a href="{{ route('admin.caracteristicas') }}"><i class='fa fa-flask'></i> <span>Caracteristicas</span></a></li>
            <li class="{{ Route::getCurrentRoute()->getName() === 'admin.fornecedores' ? 'active' : '' }}"><a href="{{ route('admin.fornecedores') }}"><i class='fa fa-exchange'></i> <span>Fornecedores</span></a></li>
            <li class="{{ Route::getCurrentRoute()->getName() === 'admin.distribuidores' ? 'active' : '' }}"><a href="{{ route('admin.distribuidores') }}"><i class='fa fa-code-fork'></i> <span>Distribuidores</span></a></li>
            <li class="{{ Route::getCurrentRoute()->getName() === 'admin.grupos' ? 'active' : '' }}"><a href="{{ route('admin.grupos') }}"><i class='fa fa-list'></i> <span>Grupos</span></a></li>
            <li class="{{ Route::getCurrentRoute()->getName() === 'admin.clientes' ? 'active' : '' }}"><a href="{{ route('admin.clientes') }}"><i class='fa fa-users'></i> <span>Clientes</span></a></li>

            {{-- <li class="treeview">
                <a href="#"><i class='fa fa-link'></i> <span>Multilevel</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="#">Link in level 2</a></li>
                    <li><a href="#">Link in level 2</a></li>
                </ul>
            </li> --}}
        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
