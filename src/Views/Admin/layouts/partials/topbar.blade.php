<nav class="navbar columns is-fixed-top" role="navigation" aria-label="main navigation" id="app-header">
    <div class="navbar-brand column is-2 is-paddingless">
        <a class="navbar-item" href="{{url('admin')}}">
            NEWS ADMIN
        </a>
        <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="touchMenu">
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
        </a>
    </div>

    <div id="touchMenu">
        <a class="navbar-item is-active" href="index.html">
            <span class="icon">
                <i class="fa fa-home"></i>
            </span> Dashboard
        </a>
        <a class="navbar-item " href="forms.html">
            <span class="icon">
                <i class="fa fa-edit"></i>
            </span> Forms
        </a>
        <a class="navbar-item " href="elements.html">
            <span class="icon">
                <i class="fa fa-desktop"></i>
            </span> UI Elements
        </a>
        <a class="navbar-item " href="datatables.html">
            <span class="icon">
                <i class="fa fa-table"></i>
            </span> Datatables
        </a>
    </div>

    <div id="navMenu" class="navbar-menu column is-hidden-touch">
        <div class="navbar-end">
            <div class="navbar-item dropdown is-right">
                <div class="dropdown-trigger">
                    <a class="dropdown-trigger button is-white" aria-haspopup="true"
                        aria-controls="notification-dropdown">
                        <span class="icon">
                            <i class="fa fa-lg fa-bell"></i>
                        </span>
                    </a>
                </div>
                <div class="dropdown-menu" id="notification-dropdown" role="menu">
                    <div class="dropdown-content">
                        <div class="dropdown-item">
                            <p>You can insert <strong>any type of content</strong> within the dropdown menu.</p>
                        </div>
                        <hr class="dropdown-divider">
                        <div class="dropdown-item">
                            <p>You simply need to use a <code>&lt;div&gt;</code> instead.</p>
                        </div>
                        <hr class="dropdown-divider">
                        <a href="#" class="dropdown-item">
                            This is a link
                        </a>
                    </div>
                </div>
            </div>

            <div class="navbar-item">
                <a class="button is-white app-logout" href="{{url()}}">
                    <span class="icon">
                        <i class="fa fa-lg fa-power-off"></i>
                    </span>
                </a>
            </div>
            <div class="navbar-item has-dropdown is-hoverable">
                <a class="navbar-link">
                    
                    &nbsp;
                    @php
                        echo 'Hi '.$_SESSION['account']['name'];    
                    @endphp
                </a>
                <div class="navbar-dropdown">
                    <a class="navbar-item">
                        My Profile
                    </a>
                    {{-- <a class="navbar-item">
                        Settings
                    </a> --}}
                    <hr class="navbar-divider">
                    <a href="{{url('logout')}}" class="navbar-item app-logout">
                        Logout
                    </a>
                </div>
            </div>
        </div>
    </div>
</nav>
