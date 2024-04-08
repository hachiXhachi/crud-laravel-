<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <title>
        Material Dashboard 2 by Creative Tim
    </title>
    @include('fragments.css.header')
</head>

<body class="g-sidenav-show bg-gray-200">
    <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
        <div class="sidenav-header">
            <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
            <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/material-dashboard/pages/dashboard " target="_blank">
                <img src="../assets/img/logo-ct.png" class="navbar-brand-img h-100" alt="main_logo">
                <span class="ms-1 font-weight-bold text-white">Material Dashboard 2</span>
            </a>
        </div>
        <hr class="horizontal light mt-0 mb-2">
        <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link text-white " href="../pages/dashboard.html">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">dashboard</i>
                        </div>
                        <span class="nav-link-text ms-1">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white " href="/product">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">table_view</i>
                        </div>
                        <span class="nav-link-text ms-1">Tables</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white active bg-gradient-primary" href="../pages/profile.html">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">person</i>
                        </div>
                        <span class="nav-link-text ms-1">Profile</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">logout</i>
                        </div>
                        <span class="nav-link-text ms-1">Logout</span>
                    </a>
                </li>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </ul>
        </div>
    </aside>
    <div class="main-content position-relative max-height-vh-100 h-100">
        <!-- Navbar -->
        <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" data-scroll="true">
            <div class="container-fluid py-1 px-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                        <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
                        <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Profile</li>
                    </ol>
                    <h6 class="font-weight-bolder mb-0">Profile</h6>
                </nav>
            </div>
        </nav>
        <!-- End Navbar -->
        <div class="container-fluid px-2 px-md-4">
            <div class="page-header min-height-300 border-radius-xl mt-4" style="background-image: url('https://images.unsplash.com/photo-1531512073830-ba890ca4eba2?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1920&q=80');">
                <span class="mask  bg-gradient-primary  opacity-6"></span>
            </div>
            <div class="card card-body mx-3 mx-md-4 mt-n6">
                <div class="row gx-4 mb-2">
                    <div class="col-auto">
                        <div class="avatar avatar-xl position-relative">
                            <img src="data:image/jpeg;base64,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" alt="profile_image" class="w-100 border-radius-lg shadow-sm">
                        </div>
                    </div>
                    <div class="col-auto my-auto">
                        <div class="h-100">
                            <h5 class="mb-1">
                                {{$user->name}}
                            </h5>
                            <p class="mb-0 font-weight-normal text-sm">
                                Sunshine
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="row">
                        <div class="col-12 col-xl-4">
                            <div class="card card-plain h-100">
                                <div class="card-header pb-0 p-3">
                                    <div class="row">
                                        <div class="col-md-8 d-flex align-items-center">
                                            <h6 class="mb-0">Profile Information</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body p-3">
                                    <p class="text-sm" style="text-align: justify;">
                                        Hi, I’m {{$user->name}}, 
                                        {{$user->description}}
                                    </p>
                                    <hr class="horizontal gray-light my-4">
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-xl-4">
                            <div class="card-body p-3">
                                <ul class="list-group">
                                    <li class="list-group-item border-0 ps-0 pt-0 text-sm"><strong class="text-dark">Full Name:</strong> &nbsp; {{$user->name}}</li>
                                    <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Mobile:</strong> &nbsp; {{$user->mobile_number}}</li>
                                    <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Email:</strong> &nbsp; {{$user->email}}</li>
                                    <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Location:</strong> &nbsp; {{$user->address}}</li>
                                    <li class="list-group-item border-0 ps-0 pb-0">
                                        <strong class="text-dark text-sm">Social:</strong> &nbsp;
                                        <a class="btn btn-facebook btn-simple mb-0 ps-1 pe-2 py-0" href="javascript:;">
                                            <i class="fab fa-facebook fa-lg"></i>
                                        </a>
                                        <a class="btn btn-twitter btn-simple mb-0 ps-1 pe-2 py-0" href="javascript:;">
                                            <i class="fab fa-twitter fa-lg"></i>
                                        </a>
                                        <a class="btn btn-instagram btn-simple mb-0 ps-1 pe-2 py-0" href="javascript:;">
                                            <i class="fab fa-instagram fa-lg"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-4 text-end">
                            <a href="{{route('user.edit',["id" => $user->id])}}">
                                <i class="fas fa-user-edit text-secondary text-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit Profile"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer py-4  ">
            <div class="container-fluid">
                <div class="row align-items-center justify-content-lg-between">
                    <div class="col-lg-6 mb-lg-0 mb-4">
                        <div class="copyright text-center text-sm text-muted text-lg-start">
                            © <script>
                                document.write(new Date().getFullYear())
                            </script>,
                            made with <i class="fa fa-heart"></i> by
                            <a href="https://www.creative-tim.com" class="font-weight-bold" target="_blank">Creative Tim</a>
                            for a better web.
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                            <li class="nav-item">
                                <a href="https://www.creative-tim.com" class="nav-link text-muted" target="_blank">Creative Tim</a>
                            </li>
                            <li class="nav-item">
                                <a href="https://www.creative-tim.com/presentation" class="nav-link text-muted" target="_blank">About Us</a>
                            </li>
                            <li class="nav-item">
                                <a href="https://www.creative-tim.com/blog" class="nav-link text-muted" target="_blank">Blog</a>
                            </li>
                            <li class="nav-item">
                                <a href="https://www.creative-tim.com/license" class="nav-link pe-0 text-muted" target="_blank">License</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <!--   Core JS Files   -->
    @include('fragments.js.js')

</html>