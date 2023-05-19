<!DOCTYPE php>
<html lang="en"dir="rtl">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>@yield('title','unknowpage')</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  @include('cdn')

    <link href="{{ url('/css/nav.css') }}" rel="stylesheet">
   <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/fontawesome.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" />
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@600;700&display=swap" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<div class="container">
  <a class="navbar-brand" href="#">
  <div class="logo"></div> 
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item ">
        <a  class="nav-link " href="{{ url("home") }}">الصفحة الرئيسية</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ url("video/list") }}">لغة الإشارة</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ url("article/list") }}">لغة الجسد </a>
      </li>
      @if((auth()->user()->role== 1)||(auth()->user()->role== 2))

      <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            لوحة التحكم
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown"dir="rtl">
            <li><a class="dropdown-item" href="{{ url("video/list") }}">قائمة الفيديوهات</a></li>
            <li><a class="dropdown-item" href="{{ url("video/create") }}">اضافة فيديو</a></li>
            <li><hr class="dropdown-divider"></li>

            <li><a class="dropdown-item" href="{{ url("article/list") }}">قائمة المقالات</a></li>
            <li><a class="dropdown-item" href="{{ url("article/create") }}">اضافة مقال</a></li>

            @if((auth()->user()->role== 1))

            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="{{ url("subAdmin/list") }}">قائمة المديرين </a></li>
            <li><a class="dropdown-item" href="{{ url("subAdmin/create") }}">اضافة ل مدير </a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="{{ url("question/create") }}">إضافة اسئلة  </a></li>
            <li><a class="dropdown-item" href="{{ url("question/list") }}">قائمةالاسئلة </a></li>
            @endif
          </ul>
        </li>
        @endif
        
    </ul>
    
    
    <div class="navbar-collapse collapse order-3 ">
        <ul class="navbar-nav ">
            <li class="nav-item">
              <a class="btn btn-danger "href={{ url('logout') }}>تسجيل الخروج</a>
            </li>
        </ul>
    </div>        
        

  </div>
  </div>
</nav>
</body>
<div>

@yield('content')
</div>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.min.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/js/main.js"></script>

