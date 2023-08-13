@extends('layouts.guest')

@section('title', 'Login page')

@section('content')

<section>
  <div class="container">
    <div class="page_login">
      <div class="card">
        <div class="row g-0">
          <div class="col-md-6 col-lg-6 d-none d-md-block">
            <img src="{{ asset('guest/img/login.png') }}"
              alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;"/>
          </div>
          <div class="col-md-6 col-lg-6 d-flex align-items-center">
            <div class="card-body p-2 p-lg-4 text-black" style="height: 500px">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    
                <div class="text-center py-2 mb-2 border-bottom">
                  <div class="text-dark fs-2 fw-bold">SIGN IN</div>
                  <small class="text-secondary">
                    You can sign in to access with your existing account
                  </small>
                </div>
                  @if($errors->any())
                  <div class="text-center py-2">
                    <small class="text-danger">{{ implode('', $errors->all(':message')) }}</small>
                  </div>
                  @endif
                
                    <div class="form-outline mb-3 position-relative">
                    <label class="form-label" for="username">Username</label>
                    <input type="text" id="username" name="username" value="{{ old('username') }}" class="form-control form-control-md ps-5" placeholder="Username / email" required/>
                    <span class="icon-username"><i class="bi bi-person-fill"></i></span>
                    </div>

                    <div class="form-outline mb-4 position-relative">
                        <div class="d-flex justify-content-between">
                            <label class="form-label" for="password">Password</label>
                        </div>
                        <input type="password" id="password"  name="password"
                        class="form-control form-control-md ps-5" placeholder="********" required autocomplete="current-password"/>
                        <span class="icon-password">
                            <i class="bi bi-shield-lock-fill"></i>
                        </span>
                        <div onclick="showPassword()" style="cursor:pointer;" class="show_password"> 
                            <i class="bi bi-eye-slash" id="icon-password"></i> <span id="text-icon-password"></span> 
                        </div>
                    </div>
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="remember_me">
                            <label class="form-check-label" for="remember_me" name="remember">Remember me</label>
                        </div>
                    
                        @if (Route::has('password.request'))
                            <a class="text-secondary link-underline link-underline-opacity-0" href="{{ route('password.request') }}">
                                Forgot your password?
                            </a>
                        @endif
                    </div>
                  <button class="btn-login btn btn-default btn-sm" type="submit">Log in</button>
                  
              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<script>
  document.body.style.background = "#343232";

  function showPassword() {
    let icon_eye = document.getElementById("icon-password");
    let password = document.getElementById("password");
    
    if (password.type  === "password") {
        // Change icon eye slash to eye
        document.getElementById("icon-password").classList.remove('bi-eye-slash');
        document.getElementById("icon-password").classList.add('bi-eye');
        // Change Type Input Password to Text
        password.type = "text";
    } else {
        // Change icon eye to eye slash
        document.getElementById("icon-password").classList.remove('bi-eye');
        document.getElementById("icon-password").classList.add('bi-eye-slash');
        // Change Type Input Password to Password
        password.type = "password";
     }
    }
</script>

@endsection