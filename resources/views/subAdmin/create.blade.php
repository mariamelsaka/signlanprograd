@extends('layouts.footer')

@extends('layouts.nav')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }} "dir="rtl">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>إضافة subAdmin </title>
        @include('cdn')
            <link href="{{ url('/css/addSubAdmin.css') }}" rel="stylesheet">
        
    </head>

        @section('content')

<body>
    @if(auth()->user()->role== 1)

  <div class="backgroundRegister">
        <div class="container">

            <div class="card-body">
                <div class="pt-1 pb-2">
                    <h4 class="card-title pb-0 fs-4 ">تعليم لغة الاشارة العربية </h4><br>
                    <h5 class="card-title pb-0 fs-4">  انشاء حساب جديد ل sub Admin</h5>
                    <p class=" small">أدخل معلوماتك</p>
                </div>

        <form action={{ url('subAdmin/store') }} method="post"
                    enctype="multipart/form-data">       

            @csrf


                <div class="col-lg-4">
                <label for="user_name" class="form-label">اسم المستخدم</label>
                <div class="input-group has-validation">
                    <input type="text"name="user_name" class="form-control"
                    id="user_name" required>
                </div>
                </div>

                <div class="col-lg-4">
                <label for="email" class="form-label">البريد الالكتروني</label>
                <div class="input-group has-validation">
                        <input type="text" name="email" 
                        class="form-control" id="email" required>
                        <div class="invalid-feedback">Please enter your e-mail.</div>
                </div>
                </div>

                <div class="col-lg-4">
                <label for="password" class="form-label">كلمةالمرور</label>
                <div class="input-group has-validation">
                    <input type="password"name="password" class="form-control" 
                    id="password" required>
                </div>
                </div>

                <div class="col-lg-4">
                <label for="year_of_birth" class="form-label">سنة الميلاد</label>
                <div class="input-group has-validation">
                    <input type="number"name="year_of_birth" class="form-control"
                    id="year_of_birth" required>
                </div>
                </div>

                <div class="col-lg-4">
                <label for="address" class="form-label">العنوان الشخصي</label>
                <div class="input-group has-validation">
                    <input type="text"name="address" class="form-control"
                    id="address" required>
                </div>
                </div>

                <div class="col-lg-4">
                <label for="gender" class="form-label">النوع </label>
                <div class="input-group has-validation">
                    <input type="text"name="gender" class="form-control" 
                    id="gender" required>
                </div>
                </div>

                <div class="col-lg-4">
                <label for="avatar2" class="form-label">الصورة</label>
                <div class="input-group has-validation">
                    <input type="file"name="avatar2" 
                    class="form-control" id="avatar2" required>
                </div>
                </div>

                <div class="col-lg-4">
                <label for="phone" class="form-label">الرقم الشخصي</label>
                <div class="input-group has-validation">
                    <input type="number"name="phone" class="form-control" id="phone" required>
                </div>
                </div>

                  <div class="col-lg-4">
                <label for="role" class="form-label">الرقم التعريفي</label>
                <div class="input-group has-validation">
                    <input type="number"name="role"
                    hidden
                    class="form-control"value="2"
                    id="role">
                </div>
                </div>

                    <div class="col-lg-4">
                    <div class="form-check mt-2">
                        <input class="form-check-input " type="checkbox" name="remember" value="true" id="rememberMe">
                        <label class="form-check-label" for="rememberMe">اوافق علي الشروط</label>
                    </div>
                    </div>
                    <div class="col-lg-4">
                    <button class="btn btn-primary w-100 mb-2 mb-5" type="submit"name="register">
                    تسجيل</button>
                    </div>
        </form>
        </div>
        </div>
        @endif
        @if(auth()->user()->role== 2)
        <div class="container">
        <div class="message">
        <h3>هذه الصفحه غير متوفره لك </h3>
        </div>
        </div>
        @endif

</body>

</html>
@endsection