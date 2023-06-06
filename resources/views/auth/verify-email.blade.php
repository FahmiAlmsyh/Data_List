@extends('layouts.app')

@section('title', 'Login')
@section('content')

    <div class="row">

        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
        <div class="col-md-4 mx-auto">
            <div class="card">
                <div class="card-header text-center fw-bold">
                    Verify Email
                </div>
                <div class="card-body">
                   Before proceding, please check your email for a verification link or 
                <form action="{{ route('verification.send') }}" method="post">
                  @csrf
                <button type="submit" class="btn btn-link p-0 m-0 align-baseline">
                  {{__('click here to resend verification email')}}
                </button>
                </form>

                </div>
            </div>


        </div>
    </div>

@endsection