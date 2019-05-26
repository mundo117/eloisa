@extends('layouts.app')

@section('content')
<body>

<!-- Loader starts -->
<div class="loader-wrapper">
    <div class="loader bg-white">
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
        <h4>Have a great day at work today <span>&#x263A;</span></h4>
    </div>
</div>
<!-- Loader ends -->

<!--page-wrapper Start-->
<div class="page-wrapper">
    <div class="container-fluid">
        <!--login page start-->
        <div class="authentication-main">
            <div class="row">
                <div class="col-md-4 p-0">
                    <div class="auth-innerleft">
                        <div class="text-center">
                            <img src="{{asset('images/logo-login.png')}}" class="logo-login" alt="">
                            <hr>
                            <div class="social-media">
                                <ul class="list-inline">
                                    <li class="list-inline-item"><i class="fa fa-facebook txt-fb" aria-hidden="true"></i></li>
                                    <li class="list-inline-item"><i class="fa fa-google-plus txt-google-plus" aria-hidden="true"></i></li>
                                    <li class="list-inline-item"><i class="fa fa-twitter txt-twitter" aria-hidden="true"></i></li>
                                    <li class="list-inline-item"><i class="fa fa-linkedin txt-linkedin" aria-hidden="true"></i></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 p-0">
                    <div class="auth-innerright">
                        <div class="authentication-box">
                            <h4>Iniciar Sesión</h4>
                            <h6>Ingrese su nombre de usuario y contraseña para iniciar sesión</h6>
                            <div class="card mt-4 p-4 mb-0">
                                <form class="theme-form" method="POST" action="{{ route('login') }}">
                                @csrf
                                    <div class="form-group">
                                        <label for="login" class="col-form-label pt-0">Usuario</label>
                                        <input id="login" type="login" class="form-control form-control-lg @error('login') is-invalid @enderror" name="login" value="{{ old('login') }}" required autocomplete="email" autofocus>
                                        @error('login')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="password" class="col-form-label">Contraseña</label>
                                        <input id="password" type="password"  class="form-control form-control-lg @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                        @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                    </div>
                                    <div class="checkbox p-0">
                                        <input  type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                        <label for="remember">Recordar contraseña</label>
                                    </div>
                                    <div class="form-group form-row mt-3 mb-0">
                                        <div class="col-md-3">
                                            <button type="submit" class="btn btn-secondary">Iniciar Sesión</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--login page end-->
    </div>
</div>

</body>
@endsection

<!-- Scripts -->
@section ('script')
    <!-- latest jquery-->
<script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>

<!-- Bootstrap js-->
<script src="{{asset('js/bootstrap/popper.min.js')}}"></script>
<script src="{{asset('js/bootstrap/bootstrap.js')}}"></script>

<!-- Theme js-->
<script src="{{asset('js/script.js')}}"></script>
@endsection