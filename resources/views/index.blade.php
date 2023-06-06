@extends('layouts.app')

@section('title', 'welcome')

@section('content')



{{-- <form method="POST" action="{{route('password.email')}}"> --}}

  {{-- @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
    @endif --}}

  {{-- @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif --}}

{{-- @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif --}}

{{--   
    @csrf
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Email address</label>
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
      @if($errors->has('email'))
      <small class="text-danger">{{ $errors->first('email') }}</small>
  @endif
      
      {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
    {{-- </div> --}}

    {{-- <div class="mb-3 form-check">
      <input type="checkbox" class="form-check-input" id="exampleCheck1">
      <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div> --}}

    {{-- <div class="justify-content-center d-flex">
        <button type="submit" class="btn btn-primary">Send Reset Link</button>
        <a href="{{url('posts')}}" class="btn btn-outline-primary mx-2">Kembali</a>
    </div>
  </form>
 --}}

 <div class="card">

  <div class="card-header text-center fw-bold">
    Welcome
  </div>

<div class="card-body">
  <h1 class="text-center">Ini Adalah Halaman Utama</h1>
</div>

 </div>


@endsection