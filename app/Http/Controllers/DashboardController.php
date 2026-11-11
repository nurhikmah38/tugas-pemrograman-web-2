<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    // Menampilkan seluruh data produk
    public function index()
    {
        $products = Product::all();

        return view('dashboard.index', [
            'title' => 'DATA PRODUK',
            'products' => Product::latest()->get(),
        ]);
    }

    // Menampilkan halaman tambah produk
    public function create()
    {
        return view('dashboard.create', [
            'title' => 'Tambah Data Produk'
        ]);
    }

    // Menyimpan data produk
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_produk' => 'required',
            'kode_produk' => 'required|unique:products,kode_produk',
            'kategori' => 'required',
            'harga' => 'required|numeric',
            'stok' => 'required|integer',
            'deskripsi' => 'nullable',
        ], [
            'nama_produk.required' => 'Nama produk wajib diisi.',
            'kode_produk.required' => 'Kode produk wajib diisi.',
            'kode_produk.unique' => 'Kode produk sudah digunakan.',
            'kategori.required' => 'Kategori wajib diisi.',
            'harga.required' => 'Harga wajib diisi.',
            'harga.numeric' => 'Harga harus berupa angka.',
            'stok.required' => 'Stok wajib diisi.',
            'stok.integer' => 'Stok harus berupa angka bulat.',
        ]);



        Product::create($validated);

        return redirect('/dashboard')
            ->with('success', 'Data produk berhasil ditambahkan!');
    }
}
