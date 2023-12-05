@extends('lay.index')
@section('konten')
<div class="mb-3">
    <h4>Data Transaksi</h4>
    <br>
    <a href="{{ route('transaksi.create') }}"> TAMBAH</a>
    <br/>
    <table id="example1" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Kasir</th>
                <th>Nama Barang</th>
                <th>Qty</th>
                <th>Total Bayar</th>
                <th>Tanggal</th>
                <th>Opsi</th>
            </tr>
        </thead>
        
                    @foreach($data as $item)
                  <tr>
                    <td>{{ $loop->iteration}}</td>
                    <td>{{ $item->kasir->namakasir}}</td>
                    <td>{{ $item->barang->nama_barang}}</td>
                    <td>{{ $item->qty}}</td>
                    <td>{{ $item->total_bayar }}</td>
                    <td>{{ $item->created_at->translatedFormat('d, m Y')}}</td>
                    <td>
                        
                        <form action={{ route('transaksi.destroy', $item->id) }} method="POST">
                            @method('delete')
                            @csrf
                            <button type="sumbit" class="btn btn-danger">hapus</button>
                      </form>
                    </td>
                  </tr>
                  @endforeach
    </table>
@endsection