@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Daftar Koleksi Majalah</h2>
    <a href="{{ route('majalah.create') }}" class="btn btn-primary mb-3">Tambah Majalah</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Judul</th>
                <th>Edisi</th>
                <th>Penerbit</th>
                <th>Tanggal Terbit</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($majalah as $item)
                <tr>
                    <td>{{ $item->judul }}</td>
                    <td>{{ $item->edisi }}</td>
                    <td>{{ $item->penerbit }}</td>
                    <td>{{ $item->tanggal_terbit }}</td>
                    <td>
                        <a href="{{ route('majalah.show', $item->id) }}" class="btn btn-info btn-sm">Detail</a>
                        <a href="{{ route('majalah.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('majalah.destroy', $item->id) }}" method="POST" style="display:inline;">
                            @csrf @method('DELETE')
                            <button class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection