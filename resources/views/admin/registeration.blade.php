@extends('admin.layout.app')
@section('title')
    rigister
@endsection
@section('content')
  <form action="{{route('rigister')}}" method="post" class="mt-3 w-100 px-3">
    <input type="text"  name="active" value=0 hidden>
    <div class="form-group mb-3">
      <label for="" class="text-white form-label">Fullname*</label>
      <input type="text" placeholder="e.g. John Doe" class="form-control form-control-input py-2" name="fullName" required>
    </div>
    <div class="form-group mb-3">
      <label for="" class="text-white form-label">Username*</label>
      <input type="text" placeholder="Username" class="form-control form-control-input py-2" name="userName"  required>
    </div>
    <div class="form-group mb-3">
      <label for="" class="text-white form-label">Email*</label>
      <input type="email" placeholder="Email" class="form-control form-control-input py-2"  name="email"  required>
    </div>
    <div class="form-group mb-3">
      <label for="" class="text-white form-label">Password*</label>
      <input type="password" placeholder="Password" class="form-control form-control-input py-2"  name="password"  required>
    </div>
    <div class="form-group mb-3">
      <label for="" class="text-white form-label">Phone*</label>
      <input type="text" placeholder="e.g. +2011423253" class="form-control form-control-input py-2"  name="phone" >
    </div>
    <button class="btn my-4 bg-light fs-5 fw-bold w-100 border-0 py-2">Register</button>
    <a href="{{route('login')}}" class="text-center d-block fs-4 text-dark mb-5">Already have account?</a>
  </form>
@endsection
        
    