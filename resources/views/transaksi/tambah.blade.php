@extends('lay.index')
@section('konten')
    <br>
      <h6>Transaksi</h6>
      <form action="{{ route('transaksi.store') }}" method="POST">
        @method('POST')
        @csrf
      <div class="mb-3">
        <label for="disabledTextInput" class="form-label">Nama Kasir</label>
        <div class="input-group">
            <select type="text" name="idkasir" class="form-control" id="idbarang" placeholder="Masukan nama barang">
            <option value="idkasir" disabled selected>Pilih</option>
        @foreach ($kasir as $item)
            <option value="{{ $item->id }}">{{ $item->namakasir }}</option>
            @endforeach
      </select>

      </div>
      <div class="mb-3">
        <label for="disabledTextInput" class="form-label">Nama Barang</label>
        <select type="text"  name="idbarang" class="form-control" id="id" placeholder="Masukan Nama Barang">
            <option value="idbarang" disabled selected>Pilih</option>
        @foreach ($barang as $item)
            <option value="{{ $item->id }}">{{ $item->nama_barang }}</option>
            @endforeach
      </select>

      </div>
      <div class="mb-3">
        <label for="disabledTextInput" class="form-label">Qty</label>
        <input type="number"  name="qty" class="form-control" id="qty" placeholder="Qty">
      </div>

      <div class="mb-3">
        <label for="disabledTextInput" class="form-label">Total Bayar</label>
        <input type="number"  name="total_bayar" class="form-control" id="total_bayar" placeholder="Total">
      </div>

      <div class="mb-3">
        <label for="disabledTextInput" class="form-label">Tanggal</label>
        <input type="date"  name="tanggaltransaksi" class="form-control" id="tanggaltransaksi" placeholder="Tanggal">
      </div>
      <button type="submit" class="btn btn-secondary">Simpan</button>
  </form>
@endsection