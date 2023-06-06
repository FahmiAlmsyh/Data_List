@extends('layouts.app')

@section('title')
    blog
@endsection

@section('content')

    <h1 class="mt-3">Buat Data Siswa Baru</h1>
    <form action="{{url('posts')}}" class="form-control" method="post">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Nama</label>
            <input type="text" class="form-control" id="title" name="nama" required>
          </div>

          <div class="mb-3">
            <label for="title" class="form-label">kelas</label>
            <input type="text" class="form-control" id="title" name="kelas" required>
          </div>

          <div class="mb-3">
            <label for="title" class="form-label">Sekolah</label>
            <input type="text" class="form-control" id="title" name="sekolah" required>
          </div>
          <button type="submit" class="btn btn-outline-primary">Simpan</button>
          <a href="{{url('posts')}}" class="btn btn-outline-primary">Kembali</a>

    </form>
    @endsection