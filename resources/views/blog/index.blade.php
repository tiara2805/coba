@extends('lay.index')
@section('konten')
<h4>Blog</h4>
<br>
    <a href="{{ route('blog.create') }}" class="btn btn-primary"> TAMBAH</a>
    <br/>
<table id="example1" class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>No</th>
            <th>Judul</th>
            <th>Konten </th>
            <th>Kategori </th>
            <th> opsi</th>
            
        </tr>
    </thead>
    
                @foreach($data as $item)
              <tr>
                <td>{{ $loop->iteration}}</td>
                <td>{{ $item->judul}}</td>
                <td>{{ $item->konten }}</td>
                <td>{{ $item->kategori }}</td>
                <td>
                    <a href="{{ route('blog.edit', $item->id) }}" class="btn btn-warning">Edit</a>
                    <form action={{ route('blog.destroy', $item->id) }} method="POST">
                        @method('delete')
                        @csrf
                        <button type="sumbit" class="btn btn-danger">hapus</button>
                  </form>
                </td>
              </tr>
              @endforeach
</table>
@endsection