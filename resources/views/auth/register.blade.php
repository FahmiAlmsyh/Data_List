@extends('layouts.app')

@section('title', 'Register')

@section('content')
<form method="POST" action="{{route('register')}}">

  {{-- @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif --}}


    @csrf
    <div class="mb-3">
      <label for="name" class="form-label">Name</label>
      <input type="text" class="form-control" id="name" name="name">
      @if($errors->has('name'))
        <small class="text-danger">{{ $errors->first('name') }}</small>
    @endif
      {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}

    </div>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Email address</label>
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
      @if($errors->has('email'))
        <small class="text-danger">{{ $errors->first('email') }}</small>
    @endif
      {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
    </div>

    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Password</label>
      <input type="password" class="form-control" id="exampleInputPassword1" name="password">
      @if($errors->has('password'))
        <small class="text-danger">{{ $errors->first('password') }}</small>
    @endif
    </div>

    <div class="mb-3">
      <label for="password_confirmation" class="form-label">Password Confirmation</label>
      <input type="password" name="password_confirmation" class="form-control" id="password_confirmation" >
    </div>

    {{-- <div class="mb-3 form-check">
      <input type="checkbox" class="form-check-input" id="exampleCheck1">
      <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div> --}}

    {{-- <button type="submit" class="btn btn-primary">Submit</button> --}}

    <div class="justify-content-center d-flex">
        <button type="submit" class="btn btn-primary">Register</button>
    </div>
  </form>
@endsection