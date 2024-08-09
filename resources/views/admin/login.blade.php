@extends('admin.layout.app')
@section('title')
    Login
@endsection
@section('content')
<form action="{{route('login')}}" method="post" class="mt-3 w-100 px-3">
  <div class="form-group mb-3">
    <label for="" class="text-white form-label">Username</label>
    <input type="text" placeholder="Username" name="userName" class="form-control form-control-input py-2">
  </div>
  <div class="form-group mb-3">
    <label for="" class="text-white form-label">Password</label>
    <input type="password" placeholder="Password" name="password" class="form-control form-control-input py-2">
  </div>
  <button class="btn my-4 bg-light fs-5 fw-bold w-100 border-0 py-2">Log in</button>
  <a href="{{route('rigister')}}" class="text-center d-block fs-4 text-dark mb-5">Don't have account?</a>
</form>
@endsection
        
        
   