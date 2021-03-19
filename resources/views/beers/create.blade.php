<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Laravel</title>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('css/app.css')}}">

</head>
<body>
  <form action="{{route('beers.store')}}" method="post">
    @csrf

    @method('POST')

    <div class="">
      <label for="name">Name</label>
      <input type="text" name="name" placeholder="Name">
    </div>

    <div class="">
      <label for="quantity">Quantity</label>
      <input type="text" name="quantity" placeholder="Quantity">
    </div>

    <div class="">
      <label for="volume">Volume</label>
      <input type="text" name="volume" placeholder="Volume">
    </div>

    <div class="">
      <label for="image">Image (URL)</label>
      <input type="text" name="image" placeholder="Image (URL)">
    </div>
    
    <input type="submit" value="Create!">
  </form>
</body>
</html>
