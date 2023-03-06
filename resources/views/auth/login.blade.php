<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <title>{{ config('app.name') }} </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="" name="description" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ ('assets/images/favicon.ico') }}">


    @vite(['resources/js/app.js'])


    @stack('styles')
</head>
<body data-sidebar="dark">

<div>
    <div class="container-fluid p-0">
        <div class="row g-0">

            <div class="col-xl-9">
                <div class="auth-full-bg pt-lg-5 p-4">
                    <div class="w-100">
                        <div class="bg-overlay"></div>
                        <div class="d-flex h-100 flex-column">


                        </div>
                    </div>
                </div>
            </div>
            <!-- end col -->

            <div class="col-xl-3">
                <div class="auth-full-page-content p-md-5 p-4">
                    <div class="w-100">

                        <div class="d-flex flex-column h-100">
                            <div class="mb-4 mb-md-5">
                                {{--
                                 --}}
                            </div>
                            <div class="my-auto">

                                <div>
                                    <h5 class="text-primary">Welcome Back !</h5>
                                    <p class="text-muted">Sign in to continue to Energy Cost.</p>
                                </div>

                                <div class="mt-4">
                                    <form class="form-horizontal" method="POST" action="{{ route('login.post') }}">
                                        @csrf
                                        <div class="mb-3">
                                            <label for="username" class="form-label">Email</label>
                                            <input name="email" type="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email', 'admin@backend.app') }}" id="username" placeholder="Enter Email" autocomplete="email" autofocus>
                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>

                                        <div class="mb-3">
                                            <div class="float-end">
                                                @if (Route::has('password.request'))
                                                <a href="{{ route('password.request') }}" class="text-muted">Forgot password?</a>
                                                @endif
                                            </div>
                                            <label class="form-label">Password</label>
                                            <div class="input-group auth-pass-inputgroup @error('password') is-invalid @enderror">
                                                <input type="password" name="password" class="form-control  @error('password') is-invalid @enderror" id="userpassword" value="TunasMuda2023!" placeholder="Enter password" aria-label="Password" aria-describedby="password-addon">
                                                <button class="btn btn-light " type="button" id="password-addon"><i class="mdi mdi-eye-outline"></i></button>
                                                @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                            <label class="form-check-label" for="remember">
                                                Remember me
                                            </label>
                                        </div>

                                        <div class="mt-3 d-grid">
                                            <button class="btn btn-primary waves-effect waves-light" type="submit">Log
                                                In</button>
                                        </div>


                                    </form>

                                </div>
                            </div>

                            <div class="mt-4 mt-md-5 text-center">
                                <p class="mb-0">© <script>
                                        document.write(new Date().getFullYear())
                                    </script> IESR. Crafted with <i class="mdi mdi-heart text-danger"></i> by
                                    DaunDigital</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container-fluid -->
</div>

@stack('scripts')
</body>

</html>



