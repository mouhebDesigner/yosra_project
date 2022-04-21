<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
    <!-- Add icons to the links using the .nav-icon class
        with font-awesome or any other icon font library -->
    <li class="nav-item @if(Request::is('home')) active @endif">
        <a href="{{ url('home') }}" class="nav-link ">
            <i class="nav-icon fas fa-home"></i>
            <p>
                Acceuil
                <i class="right fas fa-angle-left"></i>
            </p>
        </a>
    </li>
  
    <li class="nav-item @if(Request::is('admin/users*')) active @endif">
        <a href="{{ url('admin/users') }}" class="nav-link ">
            <i class="nav-icon fas fa-user"></i>
            <p>
            Inscription
            <i class="right fas fa-angle-left"></i>
            </p>
        </a>
    </li>
     <li class="nav-item @if(Request::is('admin/etudiants*')) active @endif">
        <a href="{{ url('admin/etudiants') }}" class="nav-link ">
            <i class="nav-icon fas fa-chalkboard-teacher"></i>
            <p>
            Etudiants
            <i class="right fas fa-angle-left"></i>
            </p>
        </a>
    </li>
    <li class="nav-item @if(Request::is('admin/sujets*')) active @endif">
        <a href="{{ url('admin/sujets') }}" class="nav-link ">
            <i class="nav-icon fas fa-user"></i>
            <p>
            Sujets
            <i class="right fas fa-angle-left"></i>
            </p>
        </a>
    </li>
    <li class="nav-item @if(Request::is('admin/events*')) active @endif">
        <a href="{{ url('admin/events') }}" class="nav-link ">
            <i class="nav-icon fas fa-user"></i>
            <p>
            Evènements
            <i class="right fas fa-angle-left"></i>
            </p>
        </a>
    </li>
    <li class="nav-item @if(Request::is('admin/documents*')) active @endif">
        <a href="{{ url('admin/documents') }}" class="nav-link ">
            <i class="nav-icon fas fa-user"></i>
            <p>
            Documents
            <i class="right fas fa-angle-left"></i>
            </p>
        </a>
    </li>
   
   
</ul>