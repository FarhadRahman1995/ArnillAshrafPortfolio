<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Arnill Ashraf</title>
    <link href="{{asset('css/dashboard_style.css')}}" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
</head>
<body>
<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
    <a class="navbar-brand" href="{{route('home')}}">Arnill Ashraf</a>
    <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
    <!-- Navbar Search-->
    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">

    </form>
    <!-- Navbar-->
    <ul class="navbar-nav ml-auto ml-md-0">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="userDropdown" href="{{route('login')}}" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="flex items-center px-4">
                <div class="">
                    <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                    <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
                </div>
            </div>

            <div class="mt-3 space-y-1">
                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Logout') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
            </div>
        </li>
    </ul>
</nav>
<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
            <div class="sb-sidenav-menu">
                <div class="nav">
                    <a class="nav-link" href="{{route('admin.dashboard')}}">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        Dashboard
                    </a>
                    <a class="nav-link" href="{{route('admin.main')}}">
                        <div class="sb-nav-link-icon"><i class="fas fa-home"></i></div>
                        Main
                    </a>
                    <a class="nav-link" href="{{route('admin.about')}}">
                        <div class="sb-nav-link-icon"><i class="fas fa-chart-user"></i></div>
                        About
                    </a>

                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts4" aria-expanded="false" aria-controls="collapseLayouts4">
                        <div class="sb-nav-link-icon"><i class="fas fa-history"></i></div>
                        Recent Stories
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapseLayouts4" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link" href="{{route('admin.blogs.create')}}">Create</a>
                            <a class="nav-link" href="{{route('admin.blogs.list')}}">List</a>
                        </nav>
                    </div>

                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts2" aria-expanded="false" aria-controls="collapseLayouts2">
                        <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                        Social Media
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapseLayouts2" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link" href="{{route('admin.socialmedia.create')}}">Create</a>
                            <a class="nav-link" href="{{route('admin.socialmedia.list')}}">List</a>
                        </nav>
                    </div>


                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts3" aria-expanded="false" aria-controls="collapseLayouts2">
                        <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                        Notices
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapseLayouts3" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link" href="{{route('admin.notices.create')}}">Create</a>
                            <a class="nav-link" href="{{route('admin.notices.list')}}">List</a>
                        </nav>
                    </div>
                    <a class="nav-link" href="{{route('admin.homeposts')}}">
                        <div class="sb-nav-link-icon"><i class="fas fa-comment"></i></div>
                        Featured Posts
                    </a>
                    <a class="nav-link" href="{{route('admin.contact')}}">
                        <div class="sb-nav-link-icon"><i class="fas fa-envelope"></i></div>
                        Contacts
                    </a>
                </div>
            </div>
            <div class="sb-sidenav-footer">
                <div class="small">Logged in as:</div>
                Arnill Ashraf
            </div>
        </nav>
    </div>
    <div id="layoutSidenav_content">


    @include('alert.messages')
    @yield('content')



        <footer class="py-4 bg-light mt-auto">
            <div class="container-fluid">
                <div class="d-flex align-items-center justify-content-between small">
                    <div class="text-muted">Copyright &copy; Your Website 2020</div>
                    <div>
                        <a href="#">Privacy Policy</a>
                        &middot;
                        <a href="#">Terms &amp; Conditions</a>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="{{asset('js/dashboard_js.js')}}"></script>
</body>
</html>
