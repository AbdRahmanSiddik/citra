<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Nago - Admin & Dashboard HTML Template</title>

  <!-- Favicon -->
  <link rel="shortcut icon" href="{{ asset('nago') }}/assets/media/image/favicon.png" />

  <!-- Plugin styles -->
  <link rel="stylesheet" href="{{ asset('nago') }}/vendors/bundle.css" type="text/css">

  <!-- App styles -->
  <link rel="stylesheet" href="{{ asset('nago') }}/assets/css/app.min.css" type="text/css">

  {{-- dropzone --}}
  <link rel="stylesheet" href="{{ asset('dropzone/style.css') }}" type="text/css">
</head>

<body class="form-membership">

  <!-- begin::preloader-->
  {{-- <div class="preloader">
    <div class="preloader-icon"></div>
  </div> --}}
  <!-- end::preloader -->

  <div class="form-wrapper">


    <!-- logo -->
    <div id="logo">
      Welcome To Digital Image Processing <br>
      Please insert an image
    </div>
    <!-- ./ logo -->

    <!-- form -->
    <form action="/image_edit" method="POST" enctype="multipart/form-data" novalidate>
        @csrf
      <div class="form-group mb-8">
        <label for="image" class="form-label">Image</label>
        <div class="col-sm-12 ">
          <label for="input-file" id="drop-area">
            <input type="file" name="image" accept="image/*" id="input-file" hidden>
            <div id="image-view" style="height: 200px; width: 200px" class="mb-8">
              <img src="{{ asset('dropzone/508-icon.png') }}" width="100%" height="100%">
            </div>
          </label>
        </div>
      </div>
      <button class="btn btn-primary btn-block" style="margin-top: 80px">Proccess</button>
      <hr>
    </form>
    <!-- ./ form -->


  </div>

  <!-- Plugin scripts -->
  <script src="{{ asset('nago') }}/vendors/bundle.js"></script>
  <script src="{{ asset('nago') }}/vendors/dropzone/dropzone.js"></script>

  <!-- App scripts -->
  <script src="{{ asset('dropzone/script.js') }}"></script>
</body>

</html>
