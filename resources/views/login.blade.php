<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SAD-Web | Log in</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('template') }}/plugins/fontawesome-free/css/all.min.css">  
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('template') }}/dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">

<div class="login-box">    
    <div class="card card-outline card-primary">
      <div class="card-header text-center">
        <h1><b>Login</b> SAD-Web</h1>
      </div>
      <div class="card-body">
        <p class="login-box-msg">Silahkan Masuk Terlebih Dahulu</p>

        <form action="{{ route('login') }}" method="post">
          @csrf
          <div class="input-group mb-3">
            <input type="email"  name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Masukkan Email Disini" autocomplete="off">            
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
            <div class="invalid-feedback">
                @error('email')
                    {{ $message }}
                @enderror
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Masukkan Password Disini">            
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
            <div class="invalid-feedback">
                @error('password')
                    {{ $message }}
                @enderror
            </div>
          </div>                               
            <button type="submit" class="btn btn-primary btn-block"><b>Log In &LongRightArrow;</b></button>                    
        </form>              
  
        <div class="text-center mt-3">            
            <a href="{{ route('register') }}" class="text-center">Daftar Akun Baru</a>
        </div>
      </div>      
    </div>    
</div>  

<!-- jQuery -->
<script src="{{ asset('template') }}/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('template') }}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="{{ asset('template') }}/dist/js/adminlte.min.js"></script>
</body>
</html>
