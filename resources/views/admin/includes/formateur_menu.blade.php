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
    <li class="nav-item @if(Request::is('admin/formations*')) active @endif">
        <a href="{{ url('admin/formations') }}" class="nav-link ">
            <i class="nav-icon fas fa-user"></i>
            <p>
            Formations
            <i class="right fas fa-angle-left"></i>
            </p>
        </a>
    </li>
    <li class="nav-item @if(Request::is('admin/actualites*')) active @endif">
        <a href="{{ url('admin/actualites') }}" class="nav-link ">
            <i class="nav-icon fas fa-user"></i>
            <p>
            Actualités
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
    <li class="nav-item @if(Request::is('admin/demandes*')) active @endif">
        <a href="{{ url('admin/demandes') }}" class="nav-link ">
            <i class="nav-icon fas fa-user"></i>
            <p>
            Demande de document
            <i class="right fas fa-angle-left"></i>
            </p>
        </a>
    </li>
   
</ul>