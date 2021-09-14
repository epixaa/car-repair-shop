@extends('master')
@section("content")

<div class="container custom-login">
        <div class="row">


            <div class="col-sm-4 col-sm-offset-4">
            <form action="login" method="POST"> 
    <div class="form-group">
        @csrf
        <label for="exampleInputUsername1">Username</label>
        <input type="name" class="form-control" name="name" id="exampleInputUsername1" placeholder="Username">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control"  name="password" id="exampleInputPassword1" placeholder="Password">
    </div>
    
    <button type="submit" class="btn btn-default">Login</button>
    </form>

            </div>
        </div>

</div>

@endsection