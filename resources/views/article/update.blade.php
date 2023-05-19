@extends('layouts.footer')

@extends('layouts.nav')
<!DOCTYPE php>
<html lang="en"dir="rtl">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>تعديل مقال</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  @include('cdn')
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">

</head>
        @section('content')

<body>
  <div class="container mt-5">
          <form action={{ url('article/update') }} method="post" 
            enctype="multipart/form-data">        
          @csrf
              <input name="id"value="{{ $article->id }}"hidden>

                      <div class="row mb-3 ">
                    <h4 class="mt-4 mb-3">تعديل مقال</h4>
                    <div class="row mb-3">
                      <label for="title" class="col-md-4 col-lg-3 col-form-label">العنوان</label>
                      <div class=" col-lg-8">
                        <input name="title" type="text"
                        value="{{ $article->title }}"
                        class="form-control" id="title" >
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="paragraph"
                      class="col-md-4 col-lg-3 col-form-label">	المقال</label>
                      <div class="col-lg-8">
                        <input name="paragraph"
                        value="{{ $article->paragraph}}"
                        type="text" class="form-control"
                        style="height:30vh"
                        id="	paragraph"/>
                      </div>
                    </div>

                    <div class="row mb-3">
                      <label for="author" class="col-md-4 col-lg-3 col-form-label">المؤلف</label>
                      <div class="col-lg-8">
                        <input name="author" type="text" 
                        value="{{ $article->author }}"

                        class="form-control" id="author" >
                      </div>
                    </div>

                    
                    <div class="row mb-3">
                      <label for="password" class="col-md-4 col-lg-3 col-form-label">صورة</label>
                      <div class=" col-lg-8">
                        <input name="avatar" type="file" 
                          value="{{ $article->image }}"

                        class="form-control" id="password" >
                      </div></div>
                          <div class="text-center">
                          <button  class="btn btn-dark p-3 mb-4"
                          type="submit">تعديل المقال <i class="fa fa-edit"></i></button>
                          <a  class="btn btn-danger mx-5 p-3 mb-4"
                          href ="{{ url("article/list") }}">الرجوع لصفحة المقالات <i class="fa fa-list"></i></a>
                    </div>
                  </form>
                  </div>
</body>

</html>
@endsection