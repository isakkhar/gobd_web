<div id="page-container" class="sidebar-o enable-page-overlay sidebar-dark side-scroll page-header-fixed">
    <aside id="side-overlay" class="font-size-sm">
        <div class="content-header border-bottom">
            <a class="img-link mr-1" href="javascript:void(0)">
                <img class="img-avatar img-avatar32" src="{{ asset('media/avatars/avatar10.jpg') }}" alt="">
            </a>
            <div class="ml-2">
                <a class="link-fx text-dark font-w600" href="javascript:void(0)">Adam McCoy</a>
            </div>
            <a class="ml-auto btn btn-sm btn-dual" href="javascript:void(0)" data-toggle="layout" data-action="side_overlay_close">
                <i class="fa fa-fw fa-times text-danger"></i>
            </a>
        </div>
        <div class="content-side">
            <p>
                Content..
            </p>
        </div>
    </aside>
    <nav id="sidebar" aria-label="Main Navigation">
        <div class="content-header bg-white-5">
            <a class="font-w600 text-dual" href="/">
                <span class="smini-hide">
                    <span class="font-w700 font-size-h5">GO BD</span> <span class="font-w400">Logistics</span>
                </span>
            </a>
            <div>
                <a class="d-lg-none text-dual ml-3" data-toggle="layout" data-action="sidebar_close" href="javascript:void(0)">
                    <i class="fa fa-times"></i>
                </a>
            </div>
        </div>
        <div class="content-side content-side-full">
            <ul class="nav-main">
                <li class="nav-main-item">
                    <a class="nav-main-link{{ request()->is('dashboard') ? ' active' : '' }}" href="/dashboard">
                        <i class="nav-main-link-icon si si-cursor"></i>
                        <span class="nav-main-link-name">Dashboard</span>
                    </a>
                </li>
               @php if (Auth::user()->role == 'Seller') { @endphp
                <li class="nav-main-item">
                    <a class="nav-main-link{{ request()->is('create-order') ? ' active' : '' }}" href="/create-order">
                        <i class="nav-main-link-icon si si-cursor"></i>
                        <span class="nav-main-link-name">Create Order</span>
                    </a>
                </li>
                @php } @endphp
                @php if (Auth::user()->role == 'Operations'||Auth::user()->role == 'CS'||Auth::user()->role == 'Admin') { @endphp
                 <li class="nav-main-item">
                     <a class="nav-main-link{{ request()->is('view-orders') ? ' active' : '' }}" href="/view-orders">
                         <i class="nav-main-link-icon si si-cursor"></i>
                         <span class="nav-main-link-name">View Orders</span>
                     </a>
                 </li>
                 @php } @endphp
            </ul>
        </div>
    </nav>
    <header id="page-header">
        <div class="content-header">
            <div class="d-flex align-items-center">
                <button type="button" class="btn btn-sm btn-dual mr-2 d-lg-none" data-toggle="layout" data-action="sidebar_toggle">
                    <i class="fa fa-fw fa-bars"></i>
                </button>
                <button type="button" class="btn btn-sm btn-dual mr-2 d-none d-lg-inline-block" data-toggle="layout" data-action="sidebar_mini_toggle">
                    <i class="fa fa-fw fa-ellipsis-v"></i>
                </button>
                <!-- END Toggle Mini Sidebar -->

                <!-- Apps Modal -->
                <!-- Opens the Apps modal found at the bottom of the page, after footer’s markup -->
                <button type="button" class="btn btn-sm btn-dual mr-2" data-toggle="modal" data-target="#one-modal-apps">
                    <i class="si si-grid"></i>
                </button>
                <!-- END Apps Modal -->

                <!-- Open Search Section (visible on smaller screens) -->
                <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                <button type="button" class="btn btn-sm btn-dual d-sm-none" data-toggle="layout" data-action="header_search_on">
                    <i class="si si-magnifier"></i>
                </button>
                <!-- END Open Search Section -->

                <!-- Search Form (visible on larger screens) -->
                <form class="d-none d-sm-inline-block" action="/dashboard" method="POST">
                    @csrf
                    <div class="input-group input-group-sm">
                        <input type="text" class="form-control form-control-alt" placeholder="Search.." id="page-header-search-input2" name="page-header-search-input2">
                        <div class="input-group-append">
                            <span class="input-group-text bg-body border-0">
                                <i class="si si-magnifier"></i>
                            </span>
                        </div>
                    </div>
                </form>
                <!-- END Search Form -->
            </div>
            <!-- END Left Section -->

            <!-- Right Section -->
            <div class="d-flex align-items-center">
                <!-- User Dropdown -->
                <div class="dropdown d-inline-block ml-2">
                    <button type="button" class="btn btn-sm btn-dual" id="page-header-user-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img class="rounded" src="{{ asset('media/avatars/avatar10.jpg') }}" alt="Header Avatar" style="width: 18px;">
                        <span class="d-none d-sm-inline-block ml-1">{{ Auth::user()->name }}</span>
                        <i class="fa fa-fw fa-angle-down d-none d-sm-inline-block"></i>
                    </button>
                    <a class="btn btn-sm btn-dual" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                    <a class="btn btn-sm btn-dual">
                    Logged as  {{ Auth::user()->role }}
                    </a>
                    <div class="dropdown-menu dropdown-menu-right p-0 border-0 font-size-sm" aria-labelledby="page-header-user-dropdown">
                        <div class="p-3 text-center bg-primary">
                            <img class="img-avatar img-avatar48 img-avatar-thumb" src="{{ asset('media/avatars/avatar10.jpg') }}" alt="">
                        </div>
                        <div class="p-2">
                            <h5 class="dropdown-header text-uppercase">User Options</h5>
                            <a class="dropdown-item d-flex align-items-center justify-content-between" href="javascript:void(0)">
                                <span>Inbox</span>
                                <span>
                                    <span class="badge badge-pill badge-primary">3</span>
                                    <i class="si si-envelope-open ml-1"></i>
                                </span>
                            </a>
                            <a class="dropdown-item d-flex align-items-center justify-content-between" href="javascript:void(0)">
                                <span>Profile</span>
                                <span>
                                    <span class="badge badge-pill badge-success">1</span>
                                    <i class="si si-user ml-1"></i>
                                </span>
                            </a>
                            <a class="dropdown-item d-flex align-items-center justify-content-between" href="javascript:void(0)">
                                <span>Settings</span>
                                <i class="si si-settings"></i>
                            </a>
                            <div role="separator" class="dropdown-divider"></div>
                            <h5 class="dropdown-header text-uppercase">Actions</h5>
                            <a class="dropdown-item d-flex align-items-center justify-content-between" href="javascript:void(0)">
                                <span>Lock Account</span>
                                <i class="si si-lock ml-1"></i>
                            </a>
                            <a class="dropdown-item d-flex align-items-center justify-content-between" href="javascript:void(0)">
                                <span>Log Out</span>
                                <i class="si si-logout ml-1"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- END User Dropdown -->

                <!-- Notifications Dropdown -->
                <div class="dropdown d-inline-block ml-2">
                    <button type="button" class="btn btn-sm btn-dual" id="page-header-notifications-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="si si-bell"></i>
                        <span class="badge badge-primary badge-pill">6</span>
                    </button>
            </div>
        </div>
        <div id="page-header-search" class="overlay-header bg-white">
            <div class="content-header">
                <form class="w-100" action="/dashboard" method="POST">
                    @csrf
                    <div class="input-group input-group-sm">
                        <div class="input-group-prepend">
                            <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                            <button type="button" class="btn btn-danger" data-toggle="layout" data-action="header_search_off">
                                <i class="fa fa-fw fa-times-circle"></i>
                            </button>
                        </div>
                        <input type="text" class="form-control" placeholder="Search or hit ESC.." id="page-header-search-input" name="page-header-search-input">
                    </div>
                </form>
           </div>
        </div>
        <div id="page-header-loader" class="overlay-header bg-white">
            <div class="content-header">
                <div class="w-100 text-center">
                    <i class="fa fa-fw fa-circle-notch fa-spin"></i>
                </div>
            </div>
        </div>
    </header>
