@extends('layouts.app')

@section('title')
@section('content')

<h1 class="text-center ">
    <span class="text-primary">Data</span> Siswa
    <a href="{{url('posts/create')}}" class="btn btn-outline-primary mx-2` ">+ Buat Postingan</a>
    {{-- <a href="{{url('posts/bin')}}" class="btn btn-outline-danger ">Bin</a> --}}
</h1>




<table class="table">

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


    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">Kelas</th>
            <th scope="col">Sekolah</th>
            <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
        @php($number = 1)
        
        @foreach($data as $p)
      <tr>
        <th scope="row">{{$number}}</th>
        <td>{{$p->nama}}</td>
        <td>{{$p->kelas}}</td>
        <td>{{$p->sekolah}}</td>
        <td style="width: 3%">
          <form action="{{url("posts/$p->id")}}" method="POST">
            @method('DELETE')
            @csrf
            <button type="submit" class="btn btn-danger"><i class="fa-regular fa-trash-can fa-xs"></i></button>
          </form>
        </td>

        <td style="width:3%">
          <a href="{{url("posts/$p->id/edit")}}"  class="btn btn-outline-primary"><i class="fa-regular fa-pen-to-square fa-xs"></i></a>

        </td>
      </tr>
     
      
    </tbody>
    @php($number++)
    @endforeach
    
    
  </table>
@endsection