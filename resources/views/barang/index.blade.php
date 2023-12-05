@extends('lay.index')
@section('konten')
<div class="mb-3">
    <h4>Data Barang</h4>
    <br>
    <a href="{{ route('barang.create') }}"> Tambah Barang</a>
    <br/>
    <table id="example1" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Barang</th>
                <th>Harga Barang</th>
                <th>Stok</th>
                <th>Aksi</th>
            </tr>
        </thead>
        
                    @foreach($data as $item)
                  <tr>
                    <td>{{ $loop->iteration}}</td>
                    <td>{{ $item->nama_barang}}</td>
                    <td>{{ $item->harga_barang }}</td>
                    <td>{{ $item->stok}}</td>
                    <td>
                        <a href="{{ route('barang.edit', $item->id) }}" class="btn btn-warning">Edit</a>
                        <form action={{ route('barang.destroy', $item->id) }} method="POST">
                            @method('delete')
                            @csrf
                            <button type="sumbit" class="btn btn-danger">hapus</button>
                      </form>
                    </td>
                  </tr>
                  @endforeach
    </table>
@endsection