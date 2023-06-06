<div class="container">
<header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
    <div class="col-md-3 mb-2 mb-md-0">
      <i class="fa-solid fa-list fa-lg"> Data Siswa</i>
    </div>

    {{-- <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0"> --}}
      {{-- <li><a href="{{url('posts')}}" class="nav-link px-2 link-secondary">Home</a></li> --}}
      {{-- <li><a href="#" class="nav-link px-2">Features</a></li>
      <li><a href="#" class="nav-link px-2">Pricing</a></li>
      <li><a href="#" class="nav-link px-2">FAQs</a></li>
      <li><a href="#" class="nav-link px-2">About</a></li> --}}
    {{-- </ul> --}}

    <div class="col-md-3 text-end">
        {{-- @if(!Auth::check()) --}}
      {{-- <button type="button" class="btn btn-outline-primary me-2">{{}}</button>
      <button type="button" class="btn btn-primary">Sign-up</button> --}}

      @guest
          
      
      <a href="{{route('login')}}" class="btn btn-outline-primary me-2">Login</a>
      <a href="{{route('register')}}" class="btn btn-primary">Register</a>
      @else()

        <a href="#" class="btn btn-light me-2">{{Auth::user()->name}}</a>
        <a href="{{route('logout')}}" class="btn btn-warning" 
        onclick="event.preventDefault(); document.getElementById('form-logout').submit();">Logout</a>

        <form action="{{ route('logout') }}" method="POST" id="form-logout" class="d-inline">
          @csrf
      </form>
      
      @endguest
    </div>
  </header>
</div>