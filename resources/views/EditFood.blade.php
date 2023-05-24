<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AddFood</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
@if(Session::has('success'))
    <div class="alert alert-success" role="alert">
        {{Session::get('success')}}
    </div>
@endif

<form action="{{url('updateFood')}}" method="POST" class="ms-auto me-auto mt-3" style="width: 300px">
    @csrf
    <input type="hidden" name="id" value="{{$data->id}}">
    <div class="mb-3">
        <label class="form-label">Food Name</label>
        <input type="text" class="form-control" name="name" value="{{$data->name}}">
        @error('name')
        <div class="alert alert-danger" role="alert">{{$message}}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label class="form-label">type of food</label>
        <input type="text" class="form-control" name="type_of_food" value="{{$data->type_of_food}}">
        @error('type_of_food')
        <div class="alert alert-danger" role="alert">{{$message}}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label class="form-label">Image</label>
        <input type="text" class="form-control" name="image" placeholder="link image" value="{{$data->image}}">
        @error('image')
        <div class="alert alert-danger" role="alert">{{$message}}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label class="form-label">Price</label>
        <input type="text" class="form-control" name="price" value="{{$data->price}}">
        @error('price')
        <div class="alert alert-danger" role="alert">{{$message}}</div>
        @enderror
    </div>
    <button type="Submit" class="btn btn-primary">Submit</button>
    <a href="{{url('AdminPage')}}" class="btn btn-danger">Back</a>
</form>
</div>
</body>
