<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"dir="rtl">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register</title>
    @include('cdn')
    <link href="{{ url('/css/register.css') }}" rel="stylesheet">
    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>

<body>

    <div class="backgroundRegister">
        <div class="container">

            <div class="card-body">
                <div class="pt-1 pb-2">
                    <h4 class="card-title pb-0 fs-4 ">تعليم لغة الاشارة العربية </h4><br>
                    <h5 class="card-title pb-0 fs-4"> انشاء حساب جديد</h5>
                    <p class=" small">أدخل معلوماتك</p>
                </div>

                <form action={{ url('registerRequest') }} method="post">
                    @csrf


                    <div class="col-lg-4 col-md-5">
                        <label for="user_name" class="form-label">اسم المستخدم</label>
                        <div class="input-group has-validation">

                            <input type="text"name="user_name" placeholder="الاسم كامل" class="form-control"
                                id="user_name" required>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-5">
                        <label for="email" class="form-label">البريد الالكتروني</label>
                        <div class="input-group has-validation">
                            <input type="text" name="email" placeholder="البريد الخاص بك" class="form-control"
                                id="email" required>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-5">
                        <label for="password" class="form-label">كلمةالمرور</label>
                        <div class="input-group has-validation">

                            <input type="password"name="password" class="form-control"
                                placeholder="اختار كلمة مرور قوية" id="password" required>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-5">
                        <label for="year_of_birth" class="form-label">سنة الميلاد</label>
                        <div class="input-group has-validation">
                            <input type="number"name="year_of_birth" placeholder="سنة الميلاد" class="form-control"
                                id="year_of_birth" required>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-5">
                        <label for="address" class="form-label">العنوان الشخصي</label>
                        <div class="input-group has-validation">
                            <input type="text"name="address" class="form-control"
                                placeholder="المدينة-المحافظة-الدولة" id="address" required>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-5">
                        <label for="gender" class="form-label">النوع </label>
                        <div class="input-group has-validation">
                            <input type="text"name="gender" class="form-control" placeholder="ذكر-انثي"
                                id="gender" required>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-5">
                        <label for="phone" class="form-label">الرقم الشخصي</label>
                        <div class="input-group has-validation">
                            <input type="number"name="phone" class="form-control" placeholder="رقم الهاتف الشخصي"
                                id="phone" required>
                        </div>
                    </div>
                    <input type="int"name="role" hidden value="3">

                    <div class="col-lg-4 col-md-5">
                        <div class="form-check mt-2">
                            <input class="form-check-input " type="checkbox" name="remember" value="true"
                                id="rememberMe">
                            <label required class="form-check-label" for="rememberMe">اوافق علي حفظ بياناتي </label>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-5">
                        <button class="btn btn-primary w-100 mb-2" type="submit"name="register">
                            انشأ حساب</button>
                    </div>
                    <div class="">
                        <p class="small pb-5">لدي حساب بالفعل<a class="pb-5"href="login">
                                تسجيل الدخول</a></p>
                    </div>
                </form>
            </div>
        </div>
</body>

</html>
