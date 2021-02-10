<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>KAS Masjid {{ App\Masjid::first()->nama }}</title>

    <!-- Custom fonts for this template-->
    <link href="{{asset('assets/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="{{asset('assets/css/sb-admin-2.min.css')}}" rel="stylesheet">

</head>

<body class="bg-gray-300">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <img class="col-lg-6 d-none d-lg-block" src="{{asset('img/bg-login-image.jpg')}}" alt="">
                            <div class="col-lg-6">
                                <div class="px-5 pt-5">
                                    <h1 class="h5 text-gray-800 text-lg font-weight-bold font-italic">
                                        KAS Masjid
                                    </h1>
                                </div>
                                <div class="px-5 pt-4">
                                    <div class="text-left mb-4">
                                        <h1 class="h5 text-gray">Assalamulaikum,</h1>
                                        <h1 class="h5 text-gray">Silahkan masuk untuk melanjutkan.</h1>
                                    </div>
                                    <form class="user" action="{{route('post-login')}}" method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <label for="username">Username</label>
                                            <input type="text" name="username" id="username" class="form-control form-control-lg @error('username') is-invalid @enderror" value="{{old('username')}}" style="border-radius: 2rem" autocomplete="off">
                                            @error('username')
                                            <div class="text-danger">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="password">Password</label>
                                            <input type="password" name="password" id="password" class="form-control form-control-lg @error('password') is-invalid @enderror" style="border-radius: 2rem">
                                            @error('password')
                                            <div class="text-danger">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck" name="remember">
                                                <label class="custom-control-label" for="customCheck">Ingat saya</label>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-success btn-user btn-block">
                                            <b>Masuk</b>
                                        </button>
                                    </form>

                                    <div class="text-center">
                                        <h1 class="h5 text-gray-900 mt-4 mb-1 font-weight-bold"><i class="fas fa-mosque"></i> Masjid {{ App\Masjid::first()->nama }}</h1>
                                        <h1 class="h6 text-gray-900 mb-4 font-italic">{{ App\Masjid::first()->alamat }}</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{asset('assets/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{asset('assets/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{asset('assets/js/sb-admin-2.min.js')}}"></script>
    @include('sweetalert::alert')

</body>

</html>
