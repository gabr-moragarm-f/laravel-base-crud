<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Laravel</title>

  <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
  <table class="table table-dark">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Last</th>
        <th scope="col">Handle</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($beers as $beer)
        <tr>
          <th scope="row">{{$beer->id}}</th>
          <td>
            <a href="{{route('beers.show', $beer)}}">{{$beer->name}}</a>
          </td>
          <td>{{$beer->quantity}}</td>
          <td>{{$beer->volume}}%vol</td>
          <td><img src="{{asset($beer->image)}}" alt="{{$beer->name}}" height="150"></td>
        </tr>
      @endforeach
    </tbody>
  </table>
</body>
</html>
