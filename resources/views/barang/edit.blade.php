@extends('lay.index')
@section('konten')

    <br>
      <h6>Edit Data Barang</h6>
      <form action="{{ route('barang.update', $barang->id) }}" method="POST">
        @method('put')
        @csrf

      <div class="mb-3">
        <label for="disabledTextInput" class="form-label">Nama Barang</label>
        <input type="text" name="nama_barang" class="form-control" value="{{ $barang->nama_barang }}" placeholder="Nama Barang">
      </div>

      <div class="mb-3">
        <label for="disabledTextInput" class="form-label">Harga Barang</label>
        <input type="number" name="harga_barang" class="form-control" value="{{ $barang->harga_barang }}"placeholder="Harga Barang">
      </div>

      <div class="mb-3">
        <label for="disabledTextInput" class="form-label">Stok</label>
        <input type="number" name="stok" class="form-control" value="{{ $barang->stok }}"placeholder="Stok">
      </div>

      <button type="submit" class="btn btn-secondary">Submit</button> 
  </form>
  
@endsection