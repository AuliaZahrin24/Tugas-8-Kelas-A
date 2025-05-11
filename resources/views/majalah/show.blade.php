@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Detail Majalah</h2>
    <ul class="list-group">
        <li class="list-group-item"><strong>Judul:</strong> {{ $majalah->judul }}</li>
        <li class="list-group-item"><strong>Edisi:</strong> {{ $majalah->edisi }}</li>
        <li class="list-group-item"><strong>Penerbit:</strong> {{ $majalah->penerbit }}</li>
        <li class="list-group-item"><strong>Tanggal Terbit:</strong> {{ $majalah->tanggal_terbit }}</li>
        <li class="list-group-item"><strong>Deskripsi:</strong> {{ $majalah->deskripsi }}</li>
    </ul>
    <a href="{{ route('majalah.index') }}" class="btn btn-secondary mt-3">Kembali</a>
</div>
@endsection
