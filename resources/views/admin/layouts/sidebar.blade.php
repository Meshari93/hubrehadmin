<section>
    <!-- Left Sidebar -->
    <aside id="leftsidebar" class="sidebar">
        <!-- User Info -->
        <div class="user-info">
            <div class="image">
                <img src="/images/user.png" width="48" height="48" alt="User" />
            </div>
            <div class="info-container">
                <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    {{ Auth::user()->name }}
                </div>
                <div class="email">{{ Auth::user()->email }}</div>
                <div class="btn-group user-helper-dropdown">
                    <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                    <ul class="dropdown-menu pull-right">
                        <li><a href="javascript:void(0);"><i class="material-icons">person</i>Profile</a></li>
                        <li role="seperator" class="divider"></li>
                        <li><a href="javascript:void(0);"><i class="material-icons">group</i>Followers</a></li>
                        <li><a href="javascript:void(0);"><i class="material-icons">shopping_cart</i>Sales</a></li>
                        <li><a href="javascript:void(0);"><i class="material-icons">favorite</i>Likes</a></li>
                        <li role="seperator" class="divider"></li>
                        <li>
                            <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            <i class="material-icons">input</i>Sign Out
                                        </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- #User Info -->
        <!-- Menu -->
        <div class="menu">
            <ul class="list">
                <li class="header">MAIN NAVIGATION</li>
                <li class="active">
                    <a href="{{ url('/home') }}">
                        <i class="material-icons">dashboard</i>
                        <span>Home</span>
                    </a>
                </li>
                <!-- admin li -->
                  @role('admin')
                <li>
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="material-icons">people</i>
                        <span>admin</span>
                    </a>
                    <ul class="ml-menu">
                        <li>
                            <a href="{{ url('/admin/dashboard') }}">
                                <span>dashboard</span>
                            </a>
                            <a href="{{ url('/admin/role') }}">
                             <span>role</span>
                            </a>
                            <a href="{{ url('/admin/permission')}}">
                                <span>permission</span>
                            </a>
                            <a href="{{ url('/admin/user') }}" >
                                <span>user</span>
                            </a>
                        </li>
                    </ul>
                </li>
                  @endrole
                <li>
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="material-icons">home</i>
                        <span>Property</span>
                    </a>

                    <ul class="ml-menu">
                        <li>
                            <a href="{{ url('property') }}">
                                <span>Property</span>
                            </a>
                            <!-- <a href="{{ url('section') }}">
                                <span>Section</span>
                            </a> -->
                            @role('admin')
                            <a href="{{ url('serves') }}">
                                <span>Serves</span>
                            </a>
                            @endrole
                        </li>
                    </ul>
                </li>
                <!-- admin li -->
                <li class="header">LABELS</li>
                <li>
                    <a href="javascript:void(0);">
                        <i class="material-icons col-red">donut_large</i>
                        <span>Important</span>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0);">
                        <i class="material-icons col-amber">donut_large</i>
                        <span>Warning</span>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0);">
                        <i class="material-icons col-light-blue">donut_large</i>
                        <span>Information</span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- #Menu -->
        <!-- Footer -->
        <div class="legal">
            <div class="copyright">
                &copy; 2016 - 2017 <a href="javascript:void(0);">AdminBSB - Material Design</a>.
            </div>
            <div class="version">
                <b>Version: </b> 1.0.5
            </div>
        </div>
        <!-- #Footer -->
    </aside>
