@extends('layouts.footer')

@extends('layouts.nav')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }} "dir="rtl">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>إضافة مقال </title>
        @include('cdn')
        <link href="{{ url('/css/listArticle.css') }}" rel="stylesheet">
        
    </head>

        @section('content')

<body>
  <div class="container mt-5">
          <form action={{ url('article/store') }} method="POST"
            enctype="multipart/form-data">       
              @csrf
          
                      <div class="row mb-3 ">
                    <h4 class="mt-4 mb-3">إضافة مقال</h4>
                    <div class="row mb-3">
                      <label for="title" class="col-md-4 col-lg-3 col-form-label">العنوان</label>
                      <div class=" col-lg-8">
                        <input name="title" type="text" class="form-control" id="title"
                        placeholder="عنوان المقال ">
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="paragraph" class="col-md-4 col-lg-3 col-form-label"  >	المقال</label>
                      <div class="  col-lg-8">
                        <textarea name="paragraph" type="text" rows="7";
                        class="form-control" id="paragraph"
                        placeholder="ادخل المقال   "

                        ></textarea>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="author" class="col-md-4 col-lg-3 col-form-label">المؤلف </label>
                      <div class="col-lg-8">
                        <input name="author" type="text" class="form-control" id="author" 
                          placeholder="اسم كاتب المقال ">
                        
                      </div>
                    </div>
                    
                    <div class="row mb-3">
                      <label for="image" class="col-md-4 col-lg-3 col-form-label">
                      صورة</label>
                      <div class="col-lg-8">
                        <input name="avatar" type="file" class="form-control"
                        id="image">
                      </div></div>

                          <div class="text-center">
                          <button  class="btn p-3 btn-dark mb-5"type="submit">إضافة المقال
                            <i class="fa fa-plus"></i>
                          </button>
                          <a  class="btn btn-danger p-3 mx-5 mb-5" href 
                          ="{{ url("article/list") }}">الرجوع لصفحة المقالات  
                          <i class="fa fa-list"></i>
                        </a>
                    </div>
                  </form>
                  </div>




</body>

</html>
@endsection