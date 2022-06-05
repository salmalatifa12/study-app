<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'judul'             => 'required|unique:books',
            'slug'              => 'required',
            'penulis'               => 'required',
            'harga_buku'                => 'required|numeric',
            'terbit'                => 'required',
            'deskripsi'             => 'required',
            'gambar'                => 'required'
        ];
    }

    public function messages()
    {
        return [
            'judul.required' => 'Judul Tidak Boleh Kosong',
            'judul.unique' => 'Judul Ini Sudah Ada',
            'penulis.required' => 'Penulis Tidak Boleh Kosong',
            'harga_buku.required' => 'Harga Buku Tidak Boleh Kosong',
            'harga_buku.numeric' => 'Harga Buku Harus Menggunakan Angka',
            'terbit.required' => 'Terbit Tidak Boleh Kosong',
            'deskripsi.required' => 'Deskripsi Tidak Boleh Kosong',
            'gambar.required' => 'Gambar Tidak Boleh Kosong'
        ];
    }
}
