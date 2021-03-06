<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header">Menu</li>
            <li class="{{ Route::getCurrentRoute()->getName() === 'admin.cardapios' ? 'active' : '' }}"><a href="{{ route('admin.cardapios') }}"><i class='fa fa-book'></i> <span>Cardápios</span></a></li>
            <li class="{{ Route::getCurrentRoute()->getName() === 'admin.ingredientes' ? 'active' : '' }}"><a href="{{ route('admin.ingredientes') }}"><i class='fa fa-tint'></i> <span>Ingredientes</span></a></li>
            <li class="{{ Route::getCurrentRoute()->getName() === 'admin.receitas' ? 'active' : '' }}"><a href="{{ route('admin.receitas') }}"><i class='fa fa-tag'></i> <span>Receitas</span></a></li>
            <li class="{{ Route::getCurrentRoute()->getName() === 'admin.caracteristicas' ? 'active' : '' }}"><a href="{{ route('admin.caracteristicas') }}"><i class='fa fa-flask'></i> <span>Caracteristicas</span></a></li>
            <li class="{{ Route::getCurrentRoute()->getName() === 'admin.fornecedores' ? 'active' : '' }}"><a href="{{ route('admin.fornecedores') }}"><i class='fa fa-exchange'></i> <span>Fornecedores</span></a></li>
            <li class="{{ Route::getCurrentRoute()->getName() === 'admin.distribuidores' ? 'active' : '' }}"><a href="{{ route('admin.distribuidores') }}"><i class='fa fa-code-fork'></i> <span>Distribuidores</span></a></li>
            <li class="{{ Route::getCurrentRoute()->getName() === 'admin.grupos' ? 'active' : '' }}"><a href="{{ route('admin.grupos') }}"><i class='fa fa-list'></i> <span>Grupos</span></a></li>
            <li class="{{ Route::getCurrentRoute()->getName() === 'admin.clientes' ? 'active' : '' }}"><a href="{{ route('admin.clientes') }}"><i class='fa fa-users'></i> <span>Clientes</span></a></li>
            <li class="{{ Route::getCurrentRoute()->getName() === 'admin.fontes' ? 'active' : '' }}"><a href="{{ route('admin.fontes') }}"><i class='fa fa-users'></i> <span>Fontes</span></a></li>
            <li class="{{ Route::getCurrentRoute()->getName() === 'admin.parceiros' ? 'active' : '' }}"><a href="{{ route('admin.parceiros') }}"><i class='fa fa-circle-o'></i> <span>Parceiros</span></a></li>
        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
