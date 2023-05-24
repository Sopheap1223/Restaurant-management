<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adminpage</title>
    <link rel="stylesheet" href="{{ asset('index.css') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
    <div class="container" style="margin-top: 20px">
        <div class="row">
            <div class="col-md-12">
                <h2>Food List</h2>
                <div style="margin-right: 10%;float: right"><a href="{{url('AddFood')}}" class="btn btn-primary">Add</a></div>
                @if(Session::has('success'))
                    <div class="alert alert-success" role="alert">
                        {{Session::get('success')}}
                    </div>
                @endif
                <table class="table">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Type of food</th>
                        <th>Food image</th>
                        <th>price</th>
                        <th>action</th>
                    </tr>
                    </thead>
                    <tbody>
                        @php
                            $i=1
                        @endphp
                        @foreach($data as $food)
                            <tr>
                                <td>{{$i++}}</td>
                                <td><img style="width: 150px;" src="{{$food -> food_image}}"></td>
                                <td>{{$food -> name}}</td>
                                <td>{{$food -> type_of_food}}</td>
                                <td>{{$food -> price}}$</td></h2>
                                <td><a href="{{url('EditFood/'.$food->id)}}" class="btn btn-primary">Edit</a> | <a href="{{url('deleteFood/'.$food->id)}}" class="btn btn-danger">delete</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</body>
