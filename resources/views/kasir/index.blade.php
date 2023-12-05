@extends('lay.index')
@section('konten')
<div class="mb-3">
    <h4>Data Kasir</h4>
    <table id="example1" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Kasir</th>
                <th>Username</th>
                
            </tr>
        </thead>
        
                    @foreach($data as $item)
                  <tr>
                    <td>{{ $loop->iteration}}</td>
                    <td>{{ $item->namakasir}}</td>
                    <td>{{ $item->username }}</td>
                    
                  </tr>
                  @endforeach
    </table>
@endsection