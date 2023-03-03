<div class="left side-menu">

    <div class="sidebar-inner slimscrollleft">
        <div id="sidebar-menu" class="mb-5">
            <ul>

                <li class="menu-title">Links</li>

                <li>
                    <a href="{{url('dashboard')}}" class="waves-effect "><i class="mdi mdi-view-dashboard"></i><span> Dashboard  </span></a>
                </li>

                <li class="menu-title">Student Management</li>
                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-sort"></i><span> Levels <span class="float-right"><i class="mdi mdi-chevron-right"></i></span> </span></a>
                    <ul class="list-unstyled">
                        <li><a href="{{url('level-list')}}">Levels</a></li>
                        <li><a href="{{url('darasa-list')}}">Classes</a></li>
                        <li><a href="{{url('stream-list')}}">Streams</a></li>
                    </ul>
                </li>
                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-store"></i><span> Domitory <span class="float-right"><i class="mdi mdi-chevron-right"></i></span> </span></a>
                    <ul class="list-unstyled">
                        <li><a href="{{url('dom-list')}}">Domitories</a></li>
                        <li><a href="{{url('room-list')}}">Rooms</a></li>
                    </ul>
                </li>
                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-car"></i><span> Route <span class="float-right"><i class="mdi mdi-chevron-right"></i></span> </span></a>
                    <ul class="list-unstyled">
                        <li><a href="{{url('njia-list')}}">Routes</a></li>
                        <li><a href="{{url('vehicle-list')}}">Vehicles</a></li>
                    </ul>
                </li>
                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-clock"></i><span> Year <span class="float-right"><i class="mdi mdi-chevron-right"></i></span> </span></a>
                    <ul class="list-unstyled">
                        <li><a href="email-inbox.html">Classes</a></li>
                        <li><a href="email-read.html">Streams</a></li>
                    </ul>
                </li>
                

                <li class="menu-title">User Management</li>
                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-account-multiple"></i><span> Users <span class="float-right"><i class="mdi mdi-chevron-right"></i></span> </span></a>
                    <ul class="list-unstyled">
                        <li><a href="{{url('user-list')}}">Users</a></li>
                        <li><a href="email-read.html">Roles</a></li>
                        <li><a href="email-read.html">permissions</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#" class="waves-effect"><i class="mdi mdi-settings"></i><span> Settings </span></a>
                </li>
            </ul>
        </div>
        <div class="clearfix"></div>
    </div> 
</div>