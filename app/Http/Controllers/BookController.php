<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Http\Requests\BookRequest;



class BookController extends Controller
{
    public function index()
    {
        $title = 'Data Buku';
        $books = Book::all();
        return view('crud.index', compact('books', 'title'));
        // echo 'hello world';
    }


    public function create()
    {
        $title = "Form Input Data";
        return view('crud.input', compact('title'));
    }


    public function store(BookRequest $request)
    {
        // Book::create(array_merge($book), [
        //'slug' => Str::slug($request->judul, '-')
        // ]);
        // ddd($request);

        Book::create([

            'judul'       => $request->judul,
            'harga_buku'  => $request->harga_buku,
            'penulis'     => $request->penulis,
            'terbit'      => $request->terbit,
            'deskripsi'   => $request->deskripsi,
            'slug'        => Str::slug($request->judul, '-'),
            // 'gambar'      => $request->gambar
            'gambar'      => $request->file('gambar')->store('image-book'),

        ]);

        return redirect(route('book.index'));
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
