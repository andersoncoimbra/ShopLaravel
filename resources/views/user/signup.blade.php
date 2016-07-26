@extends('layout.master')
@section('content')
<div class="row">
    <div class="col-md-4 col-md-offset-4">
        <h1>Sing Up</h1>
        @if(count($errors) > 0)
        <div class="alert alert-danger">
            @foreach($errors->all() as $error)
            <p>{{$error}}</p>
            @endforeach
        </div>
        @endif
        <form action="{{route('user.signup')}}" method="post">
            <div class="form-group">
                <label for="email">E-mail</label>
                <input name="email" type="text" id="email" class="form-control" >
            </div>
            <div class="form-group">
                <label for="password">Passwod</label>
                <input name="password" type="text" id="password" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary" >Sign Up</button>
            {{ csrf_field() }}
        </form>
    </div>
</div>
    @endsection