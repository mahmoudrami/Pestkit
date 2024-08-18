<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>@yield('title', env('APP_NAME'))</title>

    <!-- Custom fonts for this template-->
    <link href="{{ asset('back/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('back/css/sb-admin-2.min.css') }}" rel="stylesheet">
    <style>
        .nav-item{
            padding: 0;
        }
    </style>
    @yield('css')
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('admin.homePage') }}">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">{{ env('APP_NAME') }}</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider m-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.homePage') }}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider m-0">
            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBlog"
                    aria-expanded="true" aria-controls="collapseBlog">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Blog</span>
                </a>
                <div id="collapseBlog" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Blogs</h6>
                        <a class="collapse-item" href="{{ route('admin.blogs.index') }}">All Blog</a>
                        <a class="collapse-item" href="{{ route('admin.blogs.create') }}">Add New</a>
                    </div>
                </div>
            </li>

            <hr class="sidebar-divider m-0">
            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseServices"
                    aria-expanded="true" aria-controls="collapseServices">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Services</span>
                </a>
                <div id="collapseServices" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Blogs</h6>
                        <a class="collapse-item" href="{{ route('admin.services.index') }}">All Service</a>
                        <a class="collapse-item" href="{{ route('admin.services.create') }}">Add New</a>
                    </div>
                </div>
            </li>
            <hr class="sidebar-divider m-0">
            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseProjects"
                    aria-expanded="true" aria-controls="collapseProjects">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Projects</span>
                </a>
                <div id="collapseProjects" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Blogs</h6>
                        <a class="collapse-item" href="{{ route('admin.projects.index') }}">All Project</a>
                        <a class="collapse-item" href="{{ route('admin.projects.create') }}">Add New</a>
                    </div>
                </div>
            </li>
            <hr class="sidebar-divider m-0">
            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSliders"
                    aria-expanded="true" aria-controls="collapseSliders">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Sliders</span>
                </a>
                <div id="collapseSliders" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Sliders</h6>
                        <a class="collapse-item" href="{{ route('admin.sliders.index') }}">All Sliders</a>
                        <a class="collapse-item" href="{{ route('admin.sliders.create') }}">Add New</a>
                    </div>
                </div>
            </li>

            <hr class="sidebar-divider m-0">
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseMembers"
                    aria-expanded="true" aria-controls="collapseMembers">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Members</span>
                </a>
                <div id="collapseMembers" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Sliders</h6>
                        <a class="collapse-item" href="{{ route('admin.members.index') }}">All Members</a>
                        <a class="collapse-item" href="{{ route('admin.members.create') }}">Add New</a>
                    </div>
                </div>
            </li>

            <hr class="sidebar-divider m-0">
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTestimonials"
                    aria-expanded="true" aria-controls="collapseTestimonials">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Testimonials</span>
                </a>
                <div id="collapseTestimonials" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Testimonials</h6>
                        <a class="collapse-item" href="{{ route('admin.testimonials.index') }}">All Testimonials</a>
                        <a class="collapse-item" href="{{ route('admin.testimonials.create') }}">Add New</a>
                    </div>
                </div>
            </li>

            <hr class="sidebar-divider m-0">
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Page</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Pages</h6>
                        <a class="collapse-item" href="{{ route('admin.pages.index') }}">All Pages</a>
                        <a class="collapse-item" href="{{ route('admin.pages.create') }}">Add New</a>
                    </div>
                </div>
            </li>
            <hr class="sidebar-divider m-0">
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePricingPlan"
                    aria-expanded="true" aria-controls="collapsePricingPlan">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Pricing Plan</span>
                </a>
                <div id="collapsePricingPlan" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Testimonials</h6>
                        <a class="collapse-item" href="{{ route('admin.pricingPlan.index') }}">All Pricing Plan</a>
                        <a class="collapse-item" href="{{ route('admin.pricingPlan.create') }}">Add New</a>
                    </div>
                </div>
            </li>

            <hr class="sidebar-divider m-0">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.settings') }}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Settings</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">



                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{ Auth::user()->name }}</span>
                                <img class="img-profile rounded-circle"
                                    src="{{ Auth::user()->image_path }}">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="{{ route('admin.profile') }}">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="{{ route('admin.settings') }}">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <div class="dropdown-divider"></div>
                                <form action="{{ route('logout') }}" method="POST">
                                    @csrf
                                <button class="dropdown-item" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Logout
                                </button>
                                </form>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->


                    @yield('content')
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>


    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('back/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('back/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('back/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('back/js/sb-admin-2.min.js') }}"></script>

    <script>
        function showImg(e){
            const [file] = e.target.files
            console.log(file);

            if(file){
                previwe.src = URL.createObjectURL(file)
            }
        }

        setTimeout(() => {
            $('.alert').fadeOut()
        }, 3000);
    </script>

    @yield('js')
</body>

</html>
