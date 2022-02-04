@extends('template.layout')
@section('content')
<div>
    <form action="/store" method="post" enctype="multipart/form-data">
        @csrf
        @error('kategori')
            <p>{{ $message }}</p>
        @enderror
        <input type="text" name="kategori" class="border @error('kategori')
            border-red-500
        @enderror">
        <input type="file" name="image" id="">
        <button type="submit">Simpan</button>
    </form>
</div>
<h1>Home</h1>
@foreach ($kategoris as $isi)
    <li>{{ $isi->kategori }} <a href="/store/{{ $isi->idkategori }}">Hapus</a></li>
@endforeach
@endsection
