@extends('layouts.app')

@section('title', 'Login')

@section('content')

<form method="POST" action="{{url('login')}}">

  @if (session('success'))
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
@endif

  
    @csrf
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Email address</label>
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
      
      
      {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
      
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Password</label>
      <input type="password" class="form-control" id="exampleInputPassword1" name="password">
      
    </div>

    {{-- <div class="mb-3 form-check">
      <input type="checkbox" class="form-check-input" id="exampleCheck1">
      <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div> --}}

    <div class="justify-content-center d-flex">
        <button type="submit" class="btn btn-primary">Login</button>
        <a href="{{route('password.request')}}" class="btn btn-link">Forgot Your Password</a>
    </div>
  </form>



@endsection