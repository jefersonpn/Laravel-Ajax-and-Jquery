@include('layout.header.header')


        <!-- Topbar Start -->
        <div class="navbar-custom topnav-navbar topnav-navbar-dark">
            <div class="container-fluid">

                <!-- LOGO -->
                <a href="index.html" class="topnav-logo">
                    <span class="topnav-logo-lg">
                        <img src="assets/images/logo-light.png" alt="" height="16">
                    </span>
                    <span class="topnav-logo-sm">
                        <img src="{{ asset('images/logo_sm.png') }}" alt="" height="16">
                    </span>
                </a>

                <ul class="list-unstyled topbar-menu float-end mb-0">

                    <li class="dropdown notification-list d-xl-none">
                        <a class="nav-link dropdown-toggle arrow-none" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <i class="dripicons-search noti-icon"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-animated dropdown-lg p-0">
                            <form class="p-3">
                                <input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                            </form>
                        </div>
                    </li>
            
                    <li class="dropdown notification-list topbar-dropdown d-none d-lg-block">
                        <a class="nav-link dropdown-toggle arrow-none" data-bs-toggle="dropdown" id="topbar-languagedrop" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                            <img src="{{ asset('images/flags/us.jpg') }}" alt="user-image" class="me-1" height="12"> <span class="align-middle">English</span> <i class="mdi mdi-chevron-down"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated topbar-dropdown-menu" aria-labelledby="topbar-languagedrop">
    
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <img src="{{ asset('images/flags/germany.jpg') }}" alt="user-image" class="me-1" height="12"> <span class="align-middle">German</span>
                            </a>
    
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <img src="{{ asset('images/flags/italy.jpg' ) }}" alt="user-image" class="me-1" height="12"> <span class="align-middle">Italian</span>
                            </a>
                    
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <img src="{{ asset('images/flags/spain.jpg') }}" alt="user-image" class="me-1" height="12"> <span class="align-middle">Spanish</span>
                            </a>
    
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <img src="{{ asset('images/flags/russia.jpg') }}" alt="user-image" class="me-1" height="12"> <span class="align-middle">Russian</span>
                            </a>
    
                        </div>
                    </li>
    
                    <li class="dropdown notification-list">
                        <a class="nav-link dropdown-toggle arrow-none" data-bs-toggle="dropdown" href="#" id="topbar-notifydrop" role="button" aria-haspopup="true" aria-expanded="false">
                            <i class="dripicons-bell noti-icon"></i>
                            <span class="noti-icon-badge"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated dropdown-lg" aria-labelledby="topbar-notifydrop">
    
                        <!-- item-->
                        <div class="dropdown-item noti-title px-3">
                            <h5 class="m-0">
                                <span class="float-end">
                                    <a href="javascript: void(0);" class="text-dark">
                                        <small>Clear All</small>
                                    </a>
                                </span>Notification
                            </h5>
                        </div>

                        <div class="px-3" style="max-height: 300px;" data-simplebar>

                            <h5 class="text-muted font-13 fw-normal mt-0">Today</h5>
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item p-0 notify-item card unread-noti shadow-none mb-2">
                                <div class="card-body">
                                    <span class="float-end noti-close-btn text-muted"><i class="mdi mdi-close"></i></span>   
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0">
                                            <div class="notify-icon bg-primary">
                                                <i class="mdi mdi-comment-account-outline"></i>
                                            </div>
                                        </div>
                                        <div class="flex-grow-1 text-truncate ms-2">
                                            <h5 class="noti-item-title fw-semibold font-14">Datacorp <small class="fw-normal text-muted ms-1">1 min ago</small></h5>
                                            <small class="noti-item-subtitle text-muted">Caleb Flakelar commented on Admin</small>
                                        </div>
                                      </div>
                                </div>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item p-0 notify-item card read-noti shadow-none mb-2">
                                <div class="card-body">
                                    <span class="float-end noti-close-btn text-muted"><i class="mdi mdi-close"></i></span>   
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0">
                                            <div class="notify-icon bg-info">
                                                <i class="mdi mdi-account-plus"></i>
                                            </div>
                                        </div>
                                        <div class="flex-grow-1 text-truncate ms-2">
                                            <h5 class="noti-item-title fw-semibold font-14">Admin <small class="fw-normal text-muted ms-1">1 hours ago</small></h5>
                                            <small class="noti-item-subtitle text-muted">New user registered</small>
                                        </div>
                                      </div>
                                </div>
                            </a>

                            <h5 class="text-muted font-13 fw-normal mt-0">Yesterday</h5>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item p-0 notify-item card read-noti shadow-none mb-2">
                                <div class="card-body">
                                    <span class="float-end noti-close-btn text-muted"><i class="mdi mdi-close"></i></span>   
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0">
                                            <div class="notify-icon">
                                                <img src="{{ asset('images/users/avatar-2.jpg') }}" class="img-fluid rounded-circle" alt="" />
                                            </div>
                                        </div>
                                        <div class="flex-grow-1 text-truncate ms-2">
                                            <h5 class="noti-item-title fw-semibold font-14">Cristina Pride <small class="fw-normal text-muted ms-1">1 day ago</small></h5>
                                            <small class="noti-item-subtitle text-muted">Hi, How are you? What about our next meeting</small>
                                        </div>
                                      </div>
                                </div>
                            </a>

                            <h5 class="text-muted font-13 fw-normal mt-0">30 Dec 2021</h5>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item p-0 notify-item card read-noti shadow-none mb-2">
                                <div class="card-body">
                                    <span class="float-end noti-close-btn text-muted"><i class="mdi mdi-close"></i></span>   
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0">
                                            <div class="notify-icon bg-primary">
                                                <i class="mdi mdi-comment-account-outline"></i>
                                            </div>
                                        </div>
                                        <div class="flex-grow-1 text-truncate ms-2">
                                            <h5 class="noti-item-title fw-semibold font-14">Datacorp</h5>
                                            <small class="noti-item-subtitle text-muted">Caleb Flakelar commented on Admin</small>
                                        </div>
                                      </div>
                                </div>
                            </a>

                             <!-- item-->
                             <a href="javascript:void(0);" class="dropdown-item p-0 notify-item card read-noti shadow-none mb-2">
                                <div class="card-body">
                                    <span class="float-end noti-close-btn text-muted"><i class="mdi mdi-close"></i></span>   
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0">
                                            <div class="notify-icon">
                                                <img src="{{ asset('images/users/avatar-4.jpg') }}" class="img-fluid rounded-circle" alt="" />
                                            </div>
                                        </div>
                                        <div class="flex-grow-1 text-truncate ms-2">
                                            <h5 class="noti-item-title fw-semibold font-14">Karen Robinson</h5>
                                            <small class="noti-item-subtitle text-muted">Wow ! this admin looks good and awesome design</small>
                                        </div>
                                      </div>
                                </div>
                            </a>

                            <div class="text-center">
                                <i class="mdi mdi-dots-circle mdi-spin text-muted h3 mt-0"></i>
                            </div>
                        </div>

                        <!-- All-->
                        <a href="javascript:void(0);" class="dropdown-item text-center text-primary notify-item border-top border-light py-2">
                            View All
                        </a>
    
                        </div>
                    </li>

                    <li class="dropdown notification-list d-none d-sm-inline-block">
                        <a class="nav-link dropdown-toggle arrow-none" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <i class="dripicons-view-apps noti-icon"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated dropdown-lg p-0">
    
                            <div class="p-2">
                                <div class="row g-0">
                                    <div class="col">
                                        <a class="dropdown-icon-item" href="#">
                                            <img src="{{ asset('images/brands/slack.png') }}" alt="slack">
                                            <span>Slack</span>
                                        </a>
                                    </div>
                                    <div class="col">
                                        <a class="dropdown-icon-item" href="#">
                                            <img src="{{ asset('images/brands/github.png') }}" alt="Github">
                                            <span>GitHub</span>
                                        </a>
                                    </div>
                                    <div class="col">
                                        <a class="dropdown-icon-item" href="#">
                                            <img src="{{ asset('images/brands/dribbble.png') }}" alt="dribbble">
                                            <span>Dribbble</span>
                                        </a>
                                    </div>
                                </div>
    
                                <div class="row g-0">
                                    <div class="col">
                                        <a class="dropdown-icon-item" href="#">
                                            <img src="{{ asset('images/brands/bitbucket.png') }}" alt="bitbucket">
                                            <span>Bitbucket</span>
                                        </a>
                                    </div>
                                    <div class="col">
                                        <a class="dropdown-icon-item" href="#">
                                            <img src="{{ asset('images/brands/dropbox.png') }}" alt="dropbox">
                                            <span>Dropbox</span>
                                        </a>
                                    </div>
                                    <div class="col">
                                        <a class="dropdown-icon-item" href="#">
                                            <img src="{{ asset('images/brands/g-suite.png') }}" alt="G Suite">
                                            <span>G Suite</span>
                                        </a>
                                    </div>
                
                                </div>
                            </div>
    
                        </div>
                    </li>

                    <li class="notification-list">
                        <a class="nav-link end-bar-toggle" href="javascript: void(0);">
                            <i class="dripicons-gear noti-icon"></i>
                        </a>
                    </li>
    
                    <li class="dropdown notification-list">
                        <a class="nav-link dropdown-toggle nav-user arrow-none me-0" data-bs-toggle="dropdown" id="topbar-userdrop" href="#" role="button" aria-haspopup="true"
                            aria-expanded="false">
                            <span class="account-user-avatar"> 
                                <img src="{{ Auth::user()->image }}" alt="user-image" class="rounded-circle">
                            </span>
                            <span>
                                <span class="account-user-name">{{ Auth::user()->name }}</span>
                                <span class="account-position">{{ Auth::user()->position }}</span>
                            </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated topbar-dropdown-menu profile-dropdown" aria-labelledby="topbar-userdrop">
                            <!-- item-->
                            <div class=" dropdown-header noti-title">
                                <h6 class="text-overflow m-0">Welcome !</h6>
                            </div>
    
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="mdi mdi-account-circle me-1"></i>
                                <span>My Account</span>
                            </a>
    
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="mdi mdi-account-edit me-1"></i>
                                <span>Settings</span>
                            </a>
    
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="mdi mdi-lifebuoy me-1"></i>
                                <span>Support</span>
                            </a>
    
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="mdi mdi-lock-outline me-1"></i>
                                <span>Lock Screen</span>
                            </a>
    
                            <!-- item-->
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>

                            <a href="{{ route('logout') }}" class="dropdown-item notify-item"
                            onclick="event.preventDefault();
                                          document.getElementById('logout-form').submit();">
                            <i class="mdi mdi-logout me-1"></i>
                                <span>Logout</span>
                            </a>
    
                        </div>
                    </li>

                </ul>
                <a class="button-menu-mobile disable-btn">
                    <div class="lines">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </a>
                <div class="app-search dropdown">
                    <form>
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search..." id="top-search">
                            <span class="mdi mdi-magnify search-icon"></span>
                            <button class="input-group-text btn-primary" type="submit">Search</button>
                        </div>
                    </form>
                    <div class="dropdown-menu dropdown-menu-animated dropdown-lg" id="search-dropdown">
                        <!-- item-->
                        <div class="dropdown-header noti-title">
                            <h5 class="text-overflow mb-2">Found <span class="text-danger">17</span> results</h5>
                        </div>
    
                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <i class="iconify font-16 me-1" data-icon="uil:notes"></i>
                            <span>Analytics Report</span>
                        </a>
    
                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <i class="iconify font-16 me-1" data-icon="uil:life-ring"></i>
                            <span>How can I help you?</span>
                        </a>
    
                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <i class="iconify font-16 me-1" data-icon="uil:cog"></i>
                            <span>User profile settings</span>
                        </a>
    
                        <!-- item-->
                        <div class="dropdown-header noti-title">
                            <h6 class="text-overflow mb-2 text-uppercase">Users</h6>
                        </div>
    
                        <div class="notification-list">
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <div class="d-flex">
                                    <img class="d-flex me-2 rounded-circle" src="{{ asset('images/users/avatar-2.jpg') }}" alt="Generic placeholder image" height="32">
                                    <div class="w-100">
                                        <h5 class="m-0 font-14">Erwin Brown</h5>
                                        <span class="font-12 mb-0">UI Designer</span>
                                    </div>
                                </div>
                            </a>
    
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <div class="d-flex">
                                    <img class="d-flex me-2 rounded-circle" src="{{ asset('images/users/avatar-5.jpg') }}" alt="Generic placeholder image" height="32">
                                    <div class="w-100">
                                        <h5 class="m-0 font-14">Jacob Deo</h5>
                                        <span class="font-12 mb-0">Developer</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
        <!-- end Topbar -->
        
        <!-- Start Content-->
        <div class="container-fluid">

            <!-- Begin page -->
            <div class="wrapper">

                <!-- ========== Left Sidebar Start ========== -->
                <div class="leftside-menu leftside-menu-detached">

                    <div class="leftbar-user">
                        <a href="javascript: void(0);">
                            <img src="{{ Auth::user()->image }}" alt="user-image" height="42" class="rounded-circle shadow-sm">
                            <span class="leftbar-user-name">{{ Auth::user()->name }}</span>
                        </a>
                    </div>

                    <!--- Sidemenu -->
                    <ul class="side-nav">

                        <li class="side-nav-title side-nav-item">Navigation</li>

                        <li class="side-nav-item">
                            <a href="{{ url(('/') }}" class="side-nav-link">
                                <i class="iconify" data-icon="uil:home-alt"></i>
                                <span> Dashboards </span>
                            </a>
                        </li>

                        <li class="side-nav-title side-nav-item">Apps</li>

                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#sidebarAlunos" aria-expanded="false" aria-controls="sidebarAlunos" class="side-nav-link">
                                <i class="iconify" data-icon="uil:chat-bubble-user"></i>
                                <span> Alunos </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarAlunos">
                                <ul class="side-nav-second-level">
                                    <li>
                                        <a href="{{ route('aluno-cadastro') }}">Cadastrar</a>
                                    </li>
                                    <li>
                                        <a href="#">Editar</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#sidebarSalaDeAula" aria-expanded="false" aria-controls="sidebarSalaDeAula" class="side-nav-link">
                                <i class="iconify" data-icon="uil:presentation-play"></i>
                                <span> Sala de Aula </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarSalaDeAula">
                                <ul class="side-nav-second-level">
                                    <li>
                                        <a href="#">Cadastrar</a>
                                    </li>
                                    <li>
                                        <a href="#">Editar</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                                    
                        <li class="side-nav-item">
                            <a href="{{ route('chamada') }}" class="side-nav-link">
                                <i class="iconify" data-icon="uil:calender"></i>
                                <span> Chamada </span>
                            </a>
                        </li>

                    </ul>

                    <!-- Help Box -->
                    <div class="help-box help-box-light text-center">
                        <a href="javascript: void(0);" class="float-end close-btn text-body">
                            <i class="mdi mdi-close"></i>
                        </a>
                        <img src="{{ asset('images/help-icon.svg') }}" height="90" alt="Helper Icon Image" />
                        <h5 class="mt-3">Unlimited Access</h5>
                        <p class="mb-3">Upgrade to plan to get access to unlimited reports</p>
                        <a href="javascript: void(0);" class="btn btn-outline-primary btn-sm">Upgrade</a>
                    </div>
                    <!-- end Help Box -->
                    <!-- End Sidebar -->

                    <div class="clearfix"></div>
                    <!-- Sidebar -left -->

                </div>
                <!-- Left Sidebar End -->

                <div class="content-page">
                    <div class="content">
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                        <form class="d-flex">
                                            <div class="input-group">
                                                <input type="text" class="form-control form-control-light" id="dash-daterange">
                                                <span class="input-group-text bg-primary border-primary text-white">
                                                    <i class="mdi mdi-calendar-range font-13"></i>
                                                </span>
                                            </div>
                                            <a href="javascript: void(0);" class="btn btn-primary ms-2">
                                                <i class="mdi mdi-autorenew"></i>
                                            </a>
                                            <a href="javascript: void(0);" class="btn btn-primary ms-1">
                                                <i class="mdi mdi-filter-variant"></i>
                                            </a>
                                        </form>
                                    </div>
                                    <h4 class="page-title text-success">@if (isset($msg_added_aluno))
                                                                {{ $msg_added_aluno }}
                                                            @endif
                                    </h4>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->
                        @if (isset($link))
                           
                            @switch($link)
                                @case('chamada')
                                    @include('chamada')
                                    @break
                                @case('dashboard')
                                    @include('dashboard-contents')
                                    @break
                                @case('aluno-cadastro')
                                    @include('aluno-cadastro')
                                    @break
                            @endswitch
                            

                        @else
                            @include('dashboard-contents')
                        @endif
                        
                        
                    </div> <!-- End Content -->

                    @include('layout.footer.footer')
                    @include('layout.sideBar-settings.settings')
        @include('layout.bottomPage.bottom')
