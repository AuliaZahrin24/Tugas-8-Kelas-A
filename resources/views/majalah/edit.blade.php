@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Majalah</h2>
    <form action="{{ route('majalah.update', $majalah->id) }}" method="POST">
        @csrf @method('PUT')
        @include('majalah.form', ['majalah' => $majalah])
        <button class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
