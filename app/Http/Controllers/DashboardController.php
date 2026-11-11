<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    // Menampilkan seluruh data produk
    public function index()
    {
        $products = Product::latest()->get();

        return view('dashboard.index', [
            'title' => 'DATA PRODUK',
            'products' => $products,
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
            'harga' => 'required|numeric|min:0',
            'stok' => 'required|integer|min:0',
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

    // Menampilkan halaman edit produk
    public function edit($id)
    {
        $produk = Product::findOrFail($id);

        return view('dashboard.edit', [
            'title' => 'Edit Data Produk',
            'produk' => $produk,
        ]);
    }

    // Memperbarui data produk
    public function update(Request $request, $id)
    {
        $produk = Product::findOrFail($id);

        $validated = $request->validate([
            'nama_produk' => 'required',
            'kode_produk' => 'required|unique:products,kode_produk,' . $id,
            'kategori' => 'required',
            'harga' => 'required|numeric|min:0',
            'stok' => 'required|integer|min:0',
        ]);

        $produk->update($validated);

        return redirect('/dashboard')
            ->with('success', 'Data produk berhasil diperbarui!');
    }
}
