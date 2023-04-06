

    <aside class="main-sidebar sidebar-dark-primary elevation-4">

        <div class="sidebar">

            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <li class="nav-item">
                        <a href="#" class="nav-link {{ (request()->is('admin')) ? 'active' : '' }}">
                            <i class="nav-icon bi bi-palette"></i>
                            <p>
                                Асоси
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('region.index')}}" class="nav-link {{ (request()->is('regions')) ? 'active' : '' }}">
                            <i class="nav-icon bi bi-palette"></i>
                            <p>
                                Регион
                            </p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{route('otdel.index')}}" class="nav-link {{ (request()->is('otdels') or request()->is('otdels/*')) ? 'active' : '' }}">
                            <i class="nav-icon bi bi-palette"></i>
                            <p>
                                Отделы
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('logout')}}" class="nav-link">
                            <i class="nav-icon bi bi-palette"></i>
                            <p>
                                Баромад
                            </p>
                        </a>
                    </li>

                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->



