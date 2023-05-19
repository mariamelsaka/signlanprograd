@extends('layouts.footer')

@extends('layouts.nav')
<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <style>
        .chard{
            background-image: url()
        }
    </style>
        <link href="{{ url('/css/dashboard.css') }}" rel="stylesheet">

    <title>
        لوحة التحكم </title>

    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- CSS Files -->
</head>
@section('content')

    <body class="g-sidenav-show rtl bg-gray-100">


        <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg overflow-x-hidden">




            <div class="container py-4">
                <div class="row">
                    <div class="col-lg-3 col-sm-6 mb-lg-0 mb-4">
                        <div class="card">
                            <a class="card-body p-3 btn btn-dark" href="{{ url('video/list') }}">
                                <div class="row">
                                    <div class="col-8">
                                        <div class="numbers ">
                                            <p class="text-light text-sm mb-0 text-capitalize font-weight-bold">قائمة
                                                الفيديوهات</p>
                                            <h5 class="font-weight-bolder mb-0">
                                                <span class="text-success text-sm font-weight-bolder">لغة الإشارة </span>
                                            </h5>
                                        </div>
                                    </div>
                                    <div class="col-4 text-start">
                                        <div
                                            class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                                            <i class="ni ni-money-coins text-lg opacity-10" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 mb-lg-0 mb-4">
                        <div class="card">
                            <a class="card-body p-3 btn btn-success"href="{{ url('video/create') }}">
                                <div class="row">
                                    <div class="col-8">
                                        <div class="numbers ">
                                            <p class="text-sm mb-0 text-capitalize font-weight-bold">اضافة فيديو</p>
                                            <h5 class="font-weight-bolder mb-0">

                                                <span class="text-dark text-sm font-weight-bolder">لغة الإشارة</span>
                                            </h5>
                                        </div>
                                    </div>
                                    <div class="col-4 text-start">
                                        <div
                                            class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                                            <i class="ni ni-world text-lg opacity-10" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 mb-lg-0 mb-4">
                        <div class="card">
                            <a class="card-body p-3 btn btn-dark"href="{{ url('article/list') }}">
                                <div class="row">
                                    <div class="col-8">
                                        <div class="numbers">
                                            <p class="text-light text-sm mb-0 text-capitalize font-weight-bold"> قائمة
                                                المقالات</p>
                                            <h5 class="font-weight-bolder mb-0">
                                                <span class="text-danger text-sm font-weight-bolder">لغة الجسد</span>
                                            </h5>
                                        </div>
                                    </div>
                                    <div class="col-4 text-start">
                                        <div
                                            class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                                            <i class="ni ni-paper-diploma text-lg opacity-10" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <a class="card-body p-3  btn btn-danger"href="{{ url('article/create') }}">
                                <div class="row">
                                    <div class="col-8">
                                        <div class="numbers">
                                            <p class="text-sm mb-0 text-capitalize font-weight-bold">إضافة مقال</p>
                                            <h5 class="font-weight-bolder mb-0">
                                                <span class="text-dark text-sm font-weight-bolder">لغة الجسد</span>
                                            </h5>
                                        </div>
                                    </div>
                                    <div class="col-4 text-start">
                                        <div
                                            class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                                            <i class="ni ni-cart text-lg opacity-10" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    @if (auth()->user()->role == 1 )

                    <div class="col-lg-3 col-sm-6 mb-lg-0 mb-4">
                        <div class="card mt-4">
                            <a class="card-body p-3 btn btn-dark"href="{{ url('subAdmin/list') }}">
                                <div class="row">
                                    <div class="col-8">
                                        <div class="numbers">
                                            <p class="text-light text-sm mb-0 text-capitalize font-weight-bold"> قائمة
                                                المديرين</p>
                                            <h5 class="font-weight-bolder mb-0">
                                                <span class="text-secondary text-sm font-weight-bolder">اعداد الموقع </span>
                                            </h5>
                                        </div>
                                    </div>
                                    <div class="col-4 text-start">
                                        <div
                                            class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                                            <i class="ni ni-paper-diploma text-lg opacity-10" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    @endif
                    @if (auth()->user()->role == 1 )

                    <div class="col-lg-3 col-sm-6">
                        <div class="card mt-4">
                            <a class="card-body p-3 btn btn-secondary"href="{{ url('subAdmin/create') }}">
                                <div class="row">
                                    <div class="col-8">
                                        <div class="numbers">
                                            <p class="text-sm mb-0 text-capitalize font-weight-bold">إضافة مدير</p>
                                            <h5 class="font-weight-bolder mb-0">
                                                <span class="text-dark text-sm font-weight-bolder">اعداد الموقع</span>
                                            </h5>
                                        </div>
                                    </div>
                                    <div class="col-4 text-start">
                                        <div
                                            class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                                            <i class="ni ni-cart text-lg opacity-10" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    @endif
                    @if (auth()->user()->role == 1 )

                    <div class="col-lg-3 col-sm-6 mb-lg-0 mb-4">
                        <div class="card mt-4">
                            <a class="card-body p-3 btn btn-dark"href="{{ url('question/list') }}">
                                <div class="row">
                                    <div class="col-8">
                                        <div class="numbers">
                                            <p class="text-light text-sm mb-0 text-capitalize font-weight-bold"> قائمة
                                                الاسئلة</p>
                                            <h5 class="font-weight-bolder mb-0">
                                                <span class="text-primary text-sm font-weight-bolder"> اسئلة الاختبار
                                                </span>
                                            </h5>
                                        </div>
                                    </div>
                                    <div class="col-4 text-start">
                                        <div
                                            class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                                            <i class="ni ni-paper-diploma text-lg opacity-10" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    @endif
                    @if (auth()->user()->role == 1)

                    <div class="col-lg-3 col-sm-6">
                        <div class="card mt-4">
                            <a class="card-body p-3 btn btn-primary"href="{{ url('question/create') }}">
                                <div class="row">
                                    <div class="col-8">
                                        <div class="numbers">
                                            <p class="text-sm mb-0 text-capitalize font-weight-bold">إضافة سؤال</p>
                                            <h5 class="font-weight-bolder mb-0">
                                                <span class="text-dark text-sm font-weight-bolder">اسئلة الاختبار</span>
                                            </h5>
                                        </div>
                                    </div>
                                    <div class="col-4 text-start">
                                        <div
                                            class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                                            <i class="ni ni-cart text-lg opacity-10" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    @endif
                </div>

                <div class="row mt-4">

                    <a class="col-lg-12" href="{{ url('home') }}" style="text-decoration: none">
                        <div class="card  mb-4 chard">
                        <p class="col-sm-4 p-sm-2 font-lg-weight-bold">رؤيتنا من هذا الموقع هي زيادة المعرفة بلغة الإشارة
                            العربية وكذلك لغة الجسد بين جميع الناس في
                            جميع أنحاء العالم.</p>
                        </div>
                    </a>
                </div>
                <div class="col-lg-12">

                    <div class="card h-100 p-3">
                        <h5>بناها المطورون

                        </h5>
                        <div class="col-lg-12 col-sm-12 mb-lg-0 mb-4">
                            <div class="card">
                                <a class="card-body p-3 btn btn-dark" href="linktr.ee/zeyadabdelazim">
                                    <div class="row">
                                        <div class="">
                                            <div class="numbers ">
                                                <p class="text-light text-sm mb-0 text-capitalize font-weight-bold">زياد
                                                    عبدالعظيم علي </p>
                                                <h5 class="text-primary font-weight-bolder mb-0">full-stack Developer</h5>

                                                <span class="font-weight-bolder mb-0 text-light">
                                                    الموقع الشخصي وجميع مواقع التواصل
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col-4 text-start">
                                            <div
                                                class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                                                <i class="ni ni-money-coins text-lg opacity-10" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a class="card-body p-3 btn btn-primary mt-4" href="linktr.ee/zeyadabdelazim">
                                    <div class="row">
                                        <div class="">
                                            <div class="numbers ">
                                                <p class="text-light text-sm mb-0 text-capitalize font-weight-bold">مريم
                                                    علاء السقا </p>
                                                <h5 class="text-dark font-weight-bolder mb-0">AI developer</h5>

                                                <span class="font-weight-bolder mb-0 text-light">
                                                    الموقع الشخصي وجميع مواقع التواصل
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col-4 text-start">
                                            <div
                                                class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                                                <i class="ni ni-money-coins text-lg opacity-10" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a class="card-body p-3 btn btn-dark mt-4" href="linktr.ee/zeyadabdelazim">
                                    <div class="row">
                                        <div class="">
                                            <div class="numbers ">
                                                <p class="text-light text-sm mb-0 text-capitalize font-weight-bold">وفاء
                                                    وائل فاروق </p>
                                                <h5 class="text-success font-weight-bolder mb-0">AI developer</h5>

                                                <span class="font-weight-bolder mb-0 text-light">
                                                    الموقع الشخصي وجميع مواقع التواصل
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col-4 text-start">
                                            <div
                                                class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                                                <i class="ni ni-money-coins text-lg opacity-10" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class=" container">
                <div class="col-lg-12 mb-lg-5 mb-4">
                    <div class="card">
                        <div class="card-body p-3">
                            
                            </div>
                            <h6 class="ms-2 mt-4 mb-0 px-4"> المستخدمين النشطين </h6>
                            <p class="text-sm ms-2 px-4"> (<span class="font-weight-bolder">+23%</span>) من الأسبوع الماضي
                            </p>
                            <div class="container border-radius-lg">
                                <div class="row">
                                    <div class="col-3 py-4 ps-0">
                                        <div class="d-flex mb-2">
                                            <div
                                                class="icon icon-shape icon-xxs shadow border-radius-sm bg-gradient-primary text-center ms-2 d-flex align-items-center justify-content-center">
                                                
                                            </div>
                                            <p class="text-xs mt-1 px-1 mb-0 font-weight-bold">المستخدمون</p>
                                        </div>
                                        <h4 class="font-weight-bolder px-3">36K</h4>
                                        <div class="progress w-75">
                                            <div class="progress-bar  bg-dark w-60" role="progressbar" aria-valuenow="60"
                                                aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="col-3 py-3 ps-0">
                                        <div class="d-flex mb-2">
                                            <div
                                                class="icon icon-shape icon-xxs shadow border-radius-sm bg-gradient-info text-center ms-2 d-flex align-items-center justify-content-center">
                                                
                                            </div>
                                            <p class="text-xs mt-1 mb-0 font-weight-bold">نقرات</p>
                                        </div>
                                        <h4 class="font-weight-bolder">2m</h4>
                                        <div class="progress w-75">
                                            <div class="progress-bar bg-dark w-90" role="progressbar" aria-valuenow="90"
                                                aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="col-3 py-3 ps-0">
                                        <div class="d-flex mb-2">
                                            <div
                                                class="icon icon-shape icon-xxs shadow border-radius-sm bg-gradient-warning text-center ms-2 d-flex align-items-center justify-content-center">
                                                
                                            </div>
                                            <p class="text-xs mt-1 mb-0 font-weight-bold">فيديوهات</p>
                                        </div>
                                        <h4 class="font-weight-bolder">43</h4>
                                        <div class="progress w-75">
                                            <div class="progress-bar bg-dark w-30" role="progressbar" aria-valuenow="30"
                                                aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="col-3 py-3 ps-0">
                                        <div class="d-flex mb-2">
                                            <div
                                                class="icon icon-shape icon-xxs shadow border-radius-sm bg-gradient-danger text-center ms-2 d-flex align-items-center justify-content-center">
                                                
                                            </div>
                                            <p class="text-xs mt-1 mb-0 font-weight-bold">مقالات</p>
                                        </div>
                                        <h4 class="font-weight-bolder">43</h4>
                                        <div class="progress w-75">
                                            <div class="progress-bar bg-dark w-50" role="progressbar" aria-valuenow="50"
                                                aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                
            </div>

            </div>
        </main>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
        
    </body>

    </html>
@endsection
