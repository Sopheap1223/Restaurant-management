@extends('Layout')
@section('title','login')
@section('content')
    <div class="container">
        <div class="mt-5">
            @if($errors -> any())
                <div class="col-12">
                    @foreach($errors ->all() as $errors) @endforeach
                </div>
            @endif
            @if(session() -> has('error'))
                <div class="alert alert-danger">{{session('error')}}</div>
            @endif
            @if(session() ->has('sucess'))
                <div class="alert alert-success">{{session('success')}}</div>
            @endif
        </div>
        <form action="{{route('login.post')}}" method="post" class="ms-auto me-auto mt-3" style="width: 300px">
            @csrf
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" class="form-control" name="email">
            </div>
            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" class="form-control" name="password">
            </div>
            <button type="Submit" class="btn btn-primary" style="background-color: #299b63">Submit</button>
            <a href="{{url('register')}}">
                Register
            </a>
        </form>
    </div>
@endsection
