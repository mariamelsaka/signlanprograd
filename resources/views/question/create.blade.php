@extends('layouts.footer')

@extends('layouts.nav')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }} "dir="rtl">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>إضافة سؤال </title>
        @include('cdn')
        <link href="{{ url('/css/listQuestion.css') }}" rel="stylesheet">
        
    </head>

        @section('content')

<body>
  @if (auth()->user()->role == 1)
     
  <div class="container mt-5">
          <form action={{ url('question/store') }} method="POST"
            enctype="multipart/form-data">       
              @csrf
                      <div class="row mb-3 ">
                    <h4 class="mt-4 mb-3">إضافة سؤال</h4>
                    <div class="row mb-3">
                      <label for="title" class="col-md-4 col-lg-3 col-form-label">اسم السؤال</label>
                      <div class=" col-lg-8">
                        <input name="questionName" type="text"
                        class="form-control" id="questionName"
                        placeholder="اسم السؤال ">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="questionLevel" class="col-md-4 col-lg-3 col-form-label"  >
                      مستوي السؤال</label>
                      <div class="  col-lg-8">
                        <input name="questionLevel" type="text" 
                        class="form-control" id="qustionLevel"
                        placeholder="ادخل مستوي السؤال">
                      </div>
                    </div>

                    
                    <div class="row mb-3">
                      <label for="image" class="col-md-4 col-lg-3 col-form-label">
                      صورة</label>
                      <div class="col-lg-8">
                        <input name="avatar3" type="file" class="form-control"
                        id="image">
                      </div></div>

                          <div class="text-center">
                          <button  class="btn btn-dark mb-5"type="submit">إضافة السؤال</button>
                          <a  class="btn btn-danger mx-5 mb-5" href ="{{ url("question/list") }}">الرجوع لصفحة المقالات </a>
                    </div>
                  </form>
                  </div>

@endif
                  @if (auth()->user()->role == 2)
                  <div class="container">
                      <div class="message">
                          <h3>هذه الصفحه غير متوفره لك </h3>
                      </div>
                  </div>
              @endif

</body>

</html>
@endsection