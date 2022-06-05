@extends('crud.app')

@section('content')

<div class="container">
    <form method="POST" enctype="multipart/form-data" action="{{route('book.store')}}">
        @csrf

        <div class="mb-3">
            <label for="judul" class="form-label">Judul Buku</label>
            <input value="{{old('judul')}}" type="text" class="form-control" id="judul" name="judul">
            <div id="judul" class="form-text" style="color: red;">{{ $errors->first('judul') }}</div>
        </div>

        <div class="mb-3">
            <label for="penulis" class="form-label">Penulis Buku</label>
            <input value="{{old('penulis')}}" type="text" class="form-control" id="penulis" name="penulis">
            <div id="penulis" class="form-text" style="color: red;">{{ $errors->first('penulis') }}</div>
        </div>

        <div class="mb-3">
            <label for="terbit" class="form-label">Terbit Buku</label>
            <input value="{{old('terbit')}}" type="date" class="form-control" id="terbit" name="terbit">
            <div id="terbit" class="form-text" style="color: red;">{{ $errors->first('terbit') }}</div>
        </div>

        <div class="mb-3">
            <label for="harga" class="form-label">Harga Buku</label>
            <input value="{{old('harga_buku')}}" type="text" class="form-control" id="harga" name="harga_buku">
            <div id="harga" class="form-text" style="color: red;">{{ $errors->first('harga_buku') }}</div>
        </div>

        <div class="mb-3">
            <label for="gambar" class="form-label">Gambar Buku</label>
            <input type="file" class="form-control" id="gambar" name="gambar">
            <div id="gambar" class="form-text" style="color: red;">{{ $errors->first('gambar') }}</div>
        </div>

        <div class="mb-3">
            <label for="deskripsi" class="form-label">Deskripsi Buku</label>
            <textarea class="form-control" id="deskripsi" name="deskripsi" rows="8">{{old('deskripsi')}}</textarea>
            <div id="deskripsi" class="form-text" style="color: red;">{{ $errors->first('deskripsi') }}</div>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

@endsection