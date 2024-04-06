<!DOCTYPE html>
<html lang="en">

<head>
    <title>
        Login
    </title>
    @include('fragments.css.header')
</head>

<body class="bg-gray-200 dark-version">
    <main class="main-content  mt-0">
        <div class="page-header align-items-start min-vh-100" style="background-image: url('https://images.unsplash.com/photo-1497294815431-9365093b7331?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1950&q=80');">
            <span class="mask bg-gradient-dark opacity-6"></span>
            <div class="container my-auto">
                <div class="row">
                    <div class="col-lg-4 col-md-8 col-12 mx-auto">
                        <div class="card z-index-0 fadeIn3 fadeInBottom">
                            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                                <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
                                    <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">Sign in</h4>
                                </div>
                            </div>
                            <div class="card-body">
                                <form th:action="{{route('user.verify')}}" class="text-start" method="POST">
                                    @csrf
                                    @method('post')
                                    <div class="input-group input-group-outline my-3 ">
                                        <label class="form-label">Email</label>
                                        <input type="text" id="email" name="email" class="form-control">
                                    </div>
                                    <div class="input-group input-group-outline mb-3 ">
                                        <label class="form-label">Password</label>
                                        <input type="password" id="password" name="password" class="form-control">
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="btn bg-gradient-primary w-100 my-4 mb-2">Sign in</button>
                                    </div>
                                </form>
                                <p class="mt-4 text-sm text-center">
                                    Don't have an account?
                                    <a href="/signup" class="text-primary text-gradient font-weight-bold">Sign up</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="footer position-absolute bottom-2 py-2 w-100">
                <div class="container">
                    <div class="row align-items-center justify-content-lg-between">
                        <div class="col-12 col-md-6 my-auto">
                            <div class="copyright text-center text-sm text-white text-lg-start">
                                © <script>
                                    document.write(new Date().getFullYear())
                                </script>,
                                made with <i class="fa fa-heart" aria-hidden="true"></i> by
                                <a th:href="@{https://www.creative-tim.com}" class="font-weight-bold text-white" target="_blank">Creative Tim</a>
                                for a better web.
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                                <li class="nav-item">
                                    <a th:href="@{https://www.creative-tim.com}" class="nav-link text-white" target="_blank">Creative Tim</a>
                                </li>
                                <li class="nav-item">
                                    <a th:href="@{https://www.creative-tim.com/presentation}" class="nav-link text-white" target="_blank">About Us</a>
                                </li>
                                <li class="nav-item">
                                    <a th:href="@{https://www.creative-tim.com/blog}" class="nav-link text-white" target="_blank">Blog</a>
                                </li>
                                <li class="nav-item">
                                    <a th:href="@{https://www.creative-tim.com/license}" class="nav-link pe-0 text-white" target="_blank">License</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </main>

    <script>
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
            var options = {
                damping: '0.5'
            }
            Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }
    </script>
    @include('fragments.js.js')
</body>

</html>