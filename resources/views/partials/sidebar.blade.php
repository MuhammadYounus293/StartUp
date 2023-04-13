<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{ url('dashboard') }}"> <img alt="image" src="{{ asset('assets/img/kdalogo.png') }} " style="height: 80px; width: 200px" class="" /> <span class="logo-name"></span>
            </a>
        </div>
        <div class="sidebar-user">
            <div class="sidebar-user-picture">
                <img alt="image" src="{{(Auth::user()->image == null)? asset('/assets/img/admin1.png') : asset('/assets/images/user/'.Auth::user()->image)}}">
            </div>
            <div class="sidebar-user-details">
                <div class="user-name">{{ Auth::user()->name }}</div>
            </div>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Main</li>
            <li class="dropdown active">
                <a href="{{ url('dashboard') }}" class=" nav-link "><i data-feather="monitor"></i><span>Dashboard</span></a>
            </li>


            <li class="dropdown">
                <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="layers"></i><span>User Management</span></a>
                <ul class="dropdown-menu">
                    <li><a href="{{ url('recovery') }}">Recovery Depart</a></li>
                    <li><a href="{{ url('publichousing') }}">Public Housing Depart</a></li>
                </ul>
            </li>
    


           

       
        

        </ul>
    </aside>
</div>