@extends('layouts.footer')

@extends('layouts.nav')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }} "dir="rtl">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>إضافة فيديو </title>
        @include('cdn')
        <link href="{{ url('/css/listArticle.css') }}" rel="stylesheet">
        
    </head>

        @section('content')

<body>
  <div class="container mt-5">
          <form action={{ url('video/store') }} method="POST"
            enctype="multipart/form-data">       
              @csrf
          
                      <div class="row mb-3 ">
                    <h4 class="mt-4 mb-3">إضافة فيديو</h4>
                    <div class="row mb-3">
                      <label for="title" class="col-md-4 col-lg-3 col-form-label">العنوان</label>
                      <div class=" col-lg-8">
                        <input name="title" type="text" class="form-control" id="title"
                        placeholder="عنوان للفيديو ">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="description" class="col-md-4 col-lg-3 col-form-label"  >	وصف الفيديو</label>
                      <div class="  col-lg-8">
                        <textarea name="description" type="text" rows="7";
                        class="form-control" id="description"
                        placeholder="ادخل المقال   "></textarea>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="link" class="col-md-4 col-lg-3 col-form-label">رابط  </label>
                      <div class="col-lg-8">
                        <input name="link" type="text" class="form-control" id="link" 
                          placeholder="رابط الفيديو">
                        
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="level_num" class="col-md-4 col-lg-3 col-form-label">مستوي الفيديو </label>
                      <div class="col-lg-8">
                        <input name="level_num" type="number" class="form-control" id="level_num" 
                          placeholder="المستوي (رقم)">
                        
                      </div>
                    </div>

                          <div class="text-center">
                          <button  class="btn btn-dark p-3 mb-5"
                          type="submit">إضافة الفيديو
                          <i class="fa fa-plus"></i>
                        </button>
                          <a  class="btn btn-danger p-3 mx-5 mb-5" 
                          href ="{{ url("video/list") }}">الرجوع لصفحة الفيديوهات                       
                          <i class="fa fa-list"></i>
                        </a>
                    </div>
                  </form>
                  </div>




</body>

</html>
@endsection