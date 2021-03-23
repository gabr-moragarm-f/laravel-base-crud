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

  <form action="{{route('beers.update', $beer)}}" method="post">
    @csrf

    @method('PUT')

    <div class="form-group">
      <label for="name">Name</label>
      <span><strong>Current value:</strong> {{$beer->name}}</span>
      <input type="text" class="form-control" name="name" placeholder="Name" value="{{$beer->name}}">
    </div>

    <div class="form-group">
      <label for="quantity">Quantity</label>
      <span><strong>Current value:</strong> {{$beer->quantity}}</span>
      <input type="text" class="form-control" name="quantity" placeholder="Quantity" value="{{$beer->quantity}}">
    </div>

    <div class="form-group">
      <label for="volume">Volume</label>
      <span><strong>Current value:</strong> {{$beer->volume}}</span>
      <input type="text" class="form-control" name="volume" placeholder="Volume" value="{{$beer->volume}}">
    </div>

    <div class="form-group">
      <label for="image">Image (URL)</label>
      <span><strong>Current value:</strong> {{$beer->image}}</span>
      <input type="text" class="form-control" name="image" placeholder="Image (URL)" value="{{$beer->image}}">
    </div>

    <input type="submit" value="Edit!">
  </form>
</body>
</html>
