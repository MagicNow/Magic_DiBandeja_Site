<!-- Main Header -->
<header class="main-header">

    <!-- Logo -->
    <a href="{{ url('/admin') }}" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>DB</b></span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>DiBandeja Admin</b></span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                    <!-- User Account Menu -->
                    <li class="dropdown user user-menu">
                        <!-- Menu Toggle Button -->
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <!-- The user image in the navbar-->
                            <!-- hidden-xs hides the username on small devices so only the image appears. -->
                            @if (Auth::user())
                                <span class="hidden-xs">{{ Auth::user()->name }}</span>
                            @endif
                        </a>
                        <ul class="dropdown-menu">
                            <!-- Menu Footer-->
                            <li class="user-footer">
                                <div class="pull-right">
                                    <a href="{{ url('/admin/logout') }}" class="btn btn-default btn-flat">Sair</a>
                                </div>
                            </li>
                        </ul>
                    </li>

                <!-- Control Sidebar Toggle Button -->
                
            </ul>
        </div>
    </nav>
</header>