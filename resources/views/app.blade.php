<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css\app.css')}}">
  
</head>
<body>
    <div class="container">
        @include('inc.navbar')
        @include('inc.messages')
    @yield('content')
    <p></p>
    </div>
     {{-- <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script> --}}
     
     <script src="//cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>  
    <script>
        CKEDITOR.replace( 'article-ckeditor' );
    </script>
</body>
</html>