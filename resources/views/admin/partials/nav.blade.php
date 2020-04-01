<!-- Sidebar Menu -->
<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        <li class="header text-center">
            <p class="text-light">Navegación</p>
        </li>
        <li class="nav-item has-treeview menu-open">
            <a class="{{(request()->is('dashboard')) ? 'active nav-link' : 'nav-link' }}" href="{{route('dashboard')}}">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>Inicio </p>
            </a>
            {{-- <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="#" class="nav-link active">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Active Page</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Inactive Page</p>
                    </a>
                </li>
            </ul> --}}
        </li>
        <li class="nav-item {{(request()->is('dashboard/posts*')) ? 'menu-open' : '' }}">
            <a href="#"
               class="nav-link {{(request()->is('dashboard/posts*')) ? 'active' : '' }}">
                <i class="fas fa-align-left"></i>
                <p> Blog </p>
            </a>
            <ul class="nav nav-treeview ">
                <li class="nav-item"><a class="nav-link {{(request()->is('dashboard/posts/create')) ? 'active' : '' }}"
                                        href="{{route('dashboard.posts.create')}}">Añadir nuevo Post</a></li>
                <li class="nav-item">
                    <a class="{{(request()->is('dashboard/posts')) ? 'active nav-link' : 'nav-link' }}"
                       href="{{ route('dashboard.posts.index')}}">Ver todos los
                        posts</a></li>
            </ul>
        </li>
    </ul>
</nav>
<!-- /.sidebar-menu -->