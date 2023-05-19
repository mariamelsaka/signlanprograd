<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }} "dir="rtl">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Login</title>
        @include('cdn')
        <link href="{{ url('/css/login.css') }}" rel="stylesheet">
    </head>

    <body class="antialiased">
<!--Preloader-->
<div id="preloader">
  <div id="pre-status">
    <div class="preload-placeholder"></div>
  </div>
</div>
        <div class="backgroundLogin">
        <div class="container">
                <div class="card-body">
                <div class="pt-5 pb-2">
                <h2>تعليم لغة الاشارة العربية</h2>
                    <br>
                    <h5 class="card-title pb-0 fs-4">تسجيل الدخول </h5>
                    <p class=" small">ادخل البريد الالكتروني الخاص بك وكلمة المرور<br> للدخول لموقع تعليم لغة الاشارة</p>
                </div>

            <form action={{ url('loginRequest') }} method="post">
                @csrf

                <div class="col-lg-4 col-md-5">
                <label for="email" class="form-label">البريد الالكتروني</label>
                <div class="input-group has-validation"> 
                    <input type="text" name="email" class="form-control" id="email" required>
                </div>
                </div>

                <div class="col-lg-4 col-md-5">
                <label for="password" class="form-label">كلمة المرور</label>
                <div class="input-group has-validation">
                    <input type="password"name="password" class="form-control" 
                    id="password" required>
                </div>
                </div>        
                
                <div class="col-lg-4 col-md-5">
                <div class="form-check mt-2">

                    <input class="form-check-input 
                    "dir="rtl" type="checkbox" 
                    name="remember" value="true" id="rememberMe">  
                <label class="form-check-label" for="rememberMe">تذكر</label>
                </div>
                </div>

                <div class="col-lg-4 col-md-5">
                <button class="btn btn-primary w-100 mb-2" type="submit"name="login">
                تسجيل الدخول</button>
                </div>
                @if ($errors->any())
     @foreach ($errors->all() as $error)
           <div class="alert alert-danger col-lg-4 col-md-5" role="alert">
                 {{ $error }}
           </div>
    @endforeach
@endif
                <div class="col-12">
                <p class="small mb-5 ">ليس لديك حساب ؟ <a class="mb-4"href="register">
                انشاء حساب</a></p>
                </div>  

            </form>
            </div>
            </div>
    </body>
</html>
