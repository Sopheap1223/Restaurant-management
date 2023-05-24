<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Addmin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="row">
    <div class="col-md12">
        <h2>
            Food List
        </h2>
    </div>
</div>
<table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Food Name</th>
        <th scope="col">Food Price</th>
        <th scope="col">Food Picture</th>
        <th scope="col">Food type</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        @foreach($data as $food)
        <th scope="row">{{$food -> id}}</th>
        <td>{{$food -> name}}</td>
        <td>{{$food -> price}}$</td>
        <td><img style="width: 150px;" src="{{$food -> food_image}}"></td>
        <td>{{$food -> type_of_food}}</td>
        @endforeach
    </tr>
    </tbody>
</table>
</body>
