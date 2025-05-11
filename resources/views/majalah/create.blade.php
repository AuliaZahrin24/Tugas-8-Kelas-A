@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Tambah Majalah</h2>
    <form action="{{ route('majalah.store') }}" method="POST">
        @csrf
        @include('majalah.form')
        <button class="btn btn-success">Simpan</button>
    </form>
</div>
@endsection
