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
  <div class="card" style="width: 18rem;">
    <img class="card-img-top" src="{{$beer->image}}" alt="{{$beer->name}}">

    <div class="card-body">
      <p class="card-text">
        <ol>
          <li>
            <strong>
              ID:
            </strong>
            {{$beer->id}}
          </li>

          <li>
            <strong>
              Name:
            </strong>
            {{$beer->name}}
          </li>

          <li>
            <strong>
              Quantity:
            </strong>
            {{$beer->quantity}}
          </li>

          <li>
            <strong>
              Volume:
            </strong>
            {{$beer->volume}} %vol
          </li>
        </ol>
      </p>
    </div>
  </div>

  <a href="{{route('beers.index')}}">
    <button type="button" name="button">Home</button>
  </a>
</body>
</html>
