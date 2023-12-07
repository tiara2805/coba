@extends('lay.index')
@section('konten')
    <br>
      <h6>Edit Blog</h6>
      <form action="{{ route('blog.update', $blog->id) }}" method="POST">
        @method('put')
        @csrf
      <div class="mb-3">
        <label for="disabledTextInput" class="form-label">Judul</label>
        <input type="text" name="judul" class="form-control" value="{{ $blog->judul }}" placeholder="Judul">
      </div>
      <div class="mb-3">
        <label for="disabledTextInput" class="form-label">Konten</label>
        <input type="text"  name="konten"class="form-control" value="{{ $blog->konten }}" placeholder="Konten">
      </div>
      <div class="mb-3">
        <label for="disabledTextInput" class="form-label">Kategori</label>
        <input type="text"  name="kategori" class="form-control" value="{{ $blog->kategori }}" placeholder="Kategori">
      </div>
      <button type="submit" class="btn btn-secondary">Submit</button>
  </form>
@endsection