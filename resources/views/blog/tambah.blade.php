@extends('lay.index')
@section('konten')
    <br>
      <h6>Tambah Blog</h6>
      <form action="{{ route('blog.store') }}" method="POST">
        @method('POST')
        @csrf
      <div class="mb-3">
        <label for="disabledTextInput" class="form-label">Judul</label>
        <input type="text" name="judul" class="form-control" placeholder="Judul">
      </div>
      <div class="mb-3">
        <label for="disabledTextInput" class="form-label">Konten</label>
        <input type="text"  name="konten"class="form-control" placeholder="Konten">
      </div>
      <div class="mb-3">
        <label for="disabledTextInput" class="form-label">Kategori</label>
        <input type="text"  name="kategori" class="form-control" placeholder="Kategori">
      </div>
      <button type="submit" class="btn btn-secondary">Submit</button>
  </form>
@endsection