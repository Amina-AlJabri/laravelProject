
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table width=50% border="">
        <tr>
            <td>Product Name</td>
            <td>Product Image</td>
        </tr>
    {{-- {{$pName}}
    {{$pPrice}} --}}
     <tr>
         @foreach ($products as $product)
         <td>
 {{$product->name}}
         </td>
         <td>
<img src="{{asset('images')}}/{{$product->img}}" alt="" width="50" height="20">
         </td>
        {{-- {{$product}} --}}
        {{-- {{$product->price}}
        {{$product->name}} --}}
        
        </tr>

        @endforeach  
     
   </table>
</body>
</html>