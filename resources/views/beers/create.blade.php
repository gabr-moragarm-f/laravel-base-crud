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
  @if ($errors->any())
    <div class="alert alert-danger">
      <ul>
        @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
  @endif

  <form action="{{route('beers.store')}}" method="post">
    @csrf

    @method('POST')

    <div class="form-group">
      <label for="name">Name</label>
      <input type="text" class="form-control" name="name" placeholder="Name">
    </div>

    <div class="form-group">
      <label for="quantity">Quantity</label>
      <input type="text" class="form-control" name="quantity" placeholder="Quantity">
    </div>

    <div class="form-group">
      <label for="volume">Volume</label>
      <input type="text" class="form-control" name="volume" placeholder="Volume">
    </div>

    <div class="form-group">
      <label for="image">Image (URL)</label>
      <input type="text" class="form-control" name="image" placeholder="Image (URL)">
    </div>

    <input type="submit" value="Create!">
  </form>
</body>
</html>
