@extends('layouts.app')

@section('title')
    blog
@endsection

@section('content')

    <h1 class="mt-3">Edit Data Siswa</h1>
    <form action="{{url("posts/$posts->id")}}" class="form-control" method="post">
      @method('PATCH')
      @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" value="{{$posts->nama}}" required>
          </div>

          <div class="mb-3">
            <label for="title" class="form-label">kelas</label>
            <input type="text" class="form-control" id="kelas" name="kelas" value="{{$posts->kelas}}" required>
          </div>
          <div class="mb-3">
            <label for="title" class="form-label">Sekolah</label>
            <input type="text" class="form-control" id="sekolah" name="sekolah" value="{{$posts->sekolah}}" required>
          </div>

          <button type="submit" class="btn btn-outline-primary">Simpan</button>
          <a href="{{url('posts')}}" class="btn btn-outline-primary">Kembali</a>

    </form>
    @endsection