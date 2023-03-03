<nav class="navbar-custom">
    <!-- Search input -->
    <div class="search-wrap" id="search-wrap">
        <div class="search-bar">
            <input class="search-input" type="search" placeholder="Search" />
            <a href="#" class="close-search toggle-search" data-target="#search-wrap">
                <i class="mdi mdi-close-circle"></i>
            </a>
        </div>
    </div>

    <ul class="list-inline float-right mb-0">
        <!-- Search -->
        {{-- <li class="list-inline-item dropdown notification-list">
            <a class="nav-link waves-effect toggle-search" href="#"  data-target="#search-wrap">
                <i class="mdi mdi-magnify noti-icon"></i>
            </a>
        </li> --}}
       
        
        <!-- User-->
        <li class="list-inline-item dropdown notification-list">
            <a class="nav-link dropdown-toggle arrow-none waves-effect nav-user" data-toggle="dropdown" href="#" role="button"
               aria-haspopup="false" aria-expanded="false">
               <i class="dripicons-user text-light lg"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                <a class="dropdown-item" href="#"><i class="dripicons-user text-muted"></i> Profile</a>
               
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="{{ url('logout') }}"onclick="event.preventDefault(); 
                document.getElementById('logout-form').submit();"><i class="dripicons-exit text-muted"></i> Logout</a>
                <form id="logout-form" action="{{ url('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
        </li>
    </ul>

    <!-- Menu Collapse Button -->
    <button type="button" class="button-menu-mobile open-left waves-effect">
        <i class="ion-navicon"></i>
    </button>

    <div class="clearfix"></div>
</nav>


