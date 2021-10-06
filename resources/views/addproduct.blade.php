<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    {{-- <link rel="=stylesheet" href="{{asset('css/app.css')}}"> --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)

                        <li>
                            {{$error}}
                        </li>
                  @endforeach 
                </ul>
                </div>
            </div>
            <div class="col-md-12">
                {{-- <img src="{{asset('hu.jpg')}}">
                <div class="alert alert-danger">
                    it works!!
                </div> --}}

                <form action="/createproduct" method="POST" enctype="multipart/form-data">
                    {{csrf_field()}}
                    Product Name :
                    <input type="text" name="p_name" id="">
                    Product Price :
                    <input type="text" name="p_price" id="">
                   
                    Product Image:
                    <input type="file" name="myimage" id="">
                   
                    <input type="submit" value="create Product">

            </div>
            </div>
        </div>
  
</body>
</html>