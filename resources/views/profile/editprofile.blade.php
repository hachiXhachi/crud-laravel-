<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <title>
        Sign-Up
    </title>
    @include('fragments.css.header')
</head>

<body class="">
    <main class="main-content dark-version mt-0">
        <section>
            <div class="page-header min-vh-100">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-4 col-lg-5 col-md-7 mx-auto">
                            <div class="card card-plain">
                                <div class="card-header">
                                    <h4 class="font-weight-bolder">User Profile</h4>
                                    <p class="mb-0">Edit Profile</p>
                                </div>
                                <div style="text-align: center; font-size: 12px;">
                                    @if($errors->any())
                                    @foreach($errors->all() as $error)
                                    <p>{{$error}}</p>
                                    @endforeach
                                    @endif
                                </div>
                                <div class="card-body">
                                    <form role="form" action="{{ route('user.update', ['user' => $user]) }}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        @method('put')
                                        <div class="input-group input-group-outline mb-3 is-filled">
                                            <label class="form-label">Name</label>
                                            <input type="text" name="name" value="{{$user->name}}" class="form-control">
                                        </div>
                                        <div class="input-group input-group-outline mb-3 is-filled">
                                            <label class="form-label">Change Picture</label>
                                            <input type="file" name="picture" class="form-control">
                                        </div>
                                        <div class="input-group input-group-outline mb-3 is-filled">
                                            <label class="form-label">Email</label>
                                            <input type="text" name="email" id="qty" value="{{$user->email}}" class="form-control" readonly>
                                        </div>

                                        <div class="input-group input-group-outline mb-3 is-filled">
                                            <label class="form-label">Address</label>
                                            <input type="text" name="address" id="price" value="{{$user->address}}" class="form-control">
                                        </div>
                                        <div class="input-group input-group-outline mb-3 is-filled">
                                            <label class="form-label">Mobile Number</label>
                                            <input type="text" name="mobile_number" id="number" value="{{$user->mobile_number}}" class="form-control">
                                        </div>
                                        <div class="input-group input-group-outline mb-3 is-filled">
                                            <label class="form-label">Description</label>
                                            <textarea name="description" id="description" class="form-control" rows="5">{{$user->description}}</textarea>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-lg bg-gradient-primary btn-lg w-100 mt-4 mb-0">Update</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    @include('fragments.js.js')
    <script>
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
            var options = {
                damping: '0.5'
            }
            Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }
    </script>

</body>

</html>