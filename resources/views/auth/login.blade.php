<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Sign In - Fosti Docs</title>
    <!-- Favicon-->
    <link rel="icon" href="{{asset('log/favicon.png')}}" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="{{asset('log/css/bootstrap.css')}}" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="{{asset('log/css/waves.css')}}" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="{{asset('log/css/animate.css')}}" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="{{asset('log/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('log/css/all-themes.css')}}" rel="stylesheet" />

    <!-- CSS sweetalert -->
    <link rel='stylesheet' href='{{asset('log/plugins/sweetalert2/sweetalert2.min.css')}}'>

    <!-- Material Icon CSS -->
    <link type="text/css" rel="stylesheet" href="{{asset('log/plugins/material-icons/material-icons.css')}}">

</head>
<body class="login-page">
    <div id="mysidenav" class="sidenav">
        <div class="tutup">
            <a href="javascript:void(0)" onclick="tutupnav()">&times;</a>
        </div>
          <ul>
            <li><a href="http://fosti.ums.ac.id" title="Homepage" >Beranda</a></li>
                <li><a title="Blog Fosti" href="http://fosti.ums.ac.id/blog">Blog</a></li>
                <li><a title="Event Fosti" href="http://event.fostiums.org/">Event</a></li>
                <li><a title="Source Code" href="http://github.com/fosti">Source Code</a></li>
          </ul>
        </div>
        <div id="overlay" onclick="tutupnav()"></div>
        <div style="display: none" class="mobile">
            <span style="font-size:26px;cursor:pointer; padding-left: 3%;" onclick="tampilnav()">&#9776;</span>
        </div>
    <menu>
        <ul>
                <li><a href="http://fosti.ums.ac.id" title="Homepage" ><i class="material-icons" style="font-size: 15px;">home</i> Beranda</a></li>
                <li><a title="Blog Fosti" href="http://fosti.ums.ac.id/blog">Blog</a></li>
                <li><a title="Event Fosti" href="http://event.fostiums.org/">Event</a></li>
                <li><a title="Source Code" href="http://github.com/fosti">Source Code</a></li>
        </ul>
    </menu>
    <div class="login-box">
        <div class="logo">
            <a title="Homepage" href="http://fosti.ums.ac.id/"><b>F<b style="color:red;">OS</b>TI UMS</b></a>
            <small>LOGIN ADMIN FOSTI</small>
        </div>
        <div style="border-radius: 15px 15px 0 0 !important;" class="card">
            <div class="body">
                <form id="sign_in" action="{{route('login')}}" method="POST">
                    {{ csrf_field() }}
                    <div class="msg">Silahkan login untuk melanjutkan</div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line">
                            <input id="email" value="{{ old('email') }}" type="email" class="form-control" name="email" placeholder="Email" required autofocus>
                        </div>
                        {{-- @if ($errors->has('email'))
                            <label class="error">
                                <strong>{{ $errors->first('email') }}</strong>
                            </label>
                        @endif --}}
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line" {{ $errors->has('password') ? 'has-error' : '' }}>
                            <input id="password" value="{{ old('password') }}" type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-8 p-t-5">
                            <input type="checkbox" name="remember" {{ old('password') ? 'checked' : '' }} id="rememberme" class="filled-in chk-col-green">
                            <label id="showhide" for="rememberme">Remember Me</label>
                        </div>
                        <div class="col-xs-4">
                            <input style="margin: 0;" type="submit" class="tombol waves-effect" value="LOGIN">
                        </div>
                        <div class="col-xs-8" style="float: right; text-align: right; margin-top: 20px; padding-right: 30px;">
                            @if (Route::has('password.request'))
                                <a href="{{ route('password.request') }}"><b>{{ __('Forgot Your Password?') }}</b></a>
                            @endif
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <footer class="loginfooter"><p>Copyright © <script>document.write(new Date().getFullYear());</script> | <a href="http://fosti.ums.ac.id/" title="Homepage">FOSTI </a> | All Rights Reserved.</p></footer>

    <!-- Sweetalert Js -->
    <script src="{{asset('log/plugins/sweetalert2/sweetalert2.all.min.js')}}"></script>

    <!-- Jquery Core Js -->
    <script src="{{asset('log/js/jquery.min.js')}}"></script>

    <!-- Bootstrap Core Js -->
    <script src="{{asset('log/js/bootstrap.js')}}"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="{{asset('log/js/waves.js')}}"></script>

    <!-- Validation Plugin Js -->
    <script src="{{asset('log/js/jquery.validate.js')}}"></script>

    <!-- Custom Js -->
    <script src="{{asset('log/js/admin.js')}}"></script>
    <script src="{{asset('log/js/sign-in.js')}}"></script>
    <script src="{{asset('log/js/main.js')}}"></script>
    @if ($errors->has('email'))
        <script type='text/javascript'>
            function gagal() {
                swal({
                    title: 'Email atau Password Salah!',
                    type: 'error',
                    confirmButtonText: 'OK',
                    confirmButtonColor: '#4caf50',
                    reverseButtons: true,
                    focusConfirm: true,
                 });
            }
        </script>
        <div></div>
        <script>gagal();</script>
    @endif
</body>
</html>
