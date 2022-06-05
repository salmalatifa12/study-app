@extends('crud.app')

@section('content')

<div class="container mt-4 text-end">
    <a href="{{route('book.create')}}" class="btn btn-primary">Tambah Data</a>
</div>

<div class="container mt-4">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Gambar</th>
                <th scope="col">Judul</th>
                <th scope="col">Terbit</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            @forelse($books as $book)
            <tr>
                <th scope="row">{{$i++}}</th>
                <td>
                    <img src="{{$book->gambar}}" alt="ini gambar dari buku {{$book->judul}}" class="img-fluid">
                </td>

                <td>{{$book->judul}}</td>
                <td>{{$book->terbit}}</td>
                <td class="text-center">
                    <a href="#" class="btn btn-success"><i class="fa-solid fa-eye"></i></a>
                    <a href="#" class="btn btn-primary"><i class="fa-solid fa-pencil"></i></a>
                    <a href="#" class="btn btn-danger"><i class="fa-solid fa-trash-can"></i></a>
                </td>

            </tr>
            @empty
            <tr>
                <td class="text-center" colspan="5">
                    Data Masih Kosong
                </td>
            </tr>


            @endforelse

        </tbody>
    </table>
</div>

@endsection