@extends('lay.index')
@section('konten')
    <br>
      <h6>Tambah Data Barang</h6>
      <form action="{{ route('barang.store') }}" method="POST">
        @method('POST')
        @csrf
      <div class="mb-3">
        <label for="disabledTextInput" class="form-label">Nama Barang</label>
        <input type="text" name="nama_barang" class="form-control" placeholder="Nama Barang">
      </div>
      <div class="mb-3">
        <label for="disabledTextInput" class="form-label">Harga Barang</label>
        <input type="number"  name="harga_barang"class="form-control" placeholder="Harga Barang">
      </div>
      <div class="mb-3">
        <label for="disabledTextInput" class="form-label">Stok</label>
        <input type="number"  name="stok" class="form-control" placeholder="Stok">
      </div>
      <button type="submit" class="btn btn-secondary">Submit</button>
  </form>
@endsection