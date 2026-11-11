
<x-app>
    <x-slot:title>{{ $title }}</x-slot:title>

    <div class="container mt-4">
        <div class="card shadow p-4">
            <h4 class="mb-4">Edit Data Produk</h4>

            <form action="/dashboard/{{ $produk->id }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label class="form-label">Nama Produk</label>
                    <input type="text" name="nama_produk" class="form-control"
                        value="{{ old('nama_produk', $produk->nama_produk) }}">
                </div>

                <div class="mb-3">
                    <label class="form-label">Kode Produk</label>
                    <input type="text" name="kode_produk" class="form-control"
                        value="{{ old('kode_produk', $produk->kode_produk) }}">
                </div>

                <div class="mb-3">
                    <label class="form-label">Kategori</label>
                    <input type="text" name="kategori" class="form-control"
                        value="{{ old('kategori', $produk->kategori) }}">
                </div>

                <div class="mb-3">
    <label class="form-label">Harga Produk</label>

    <div class="input-group">
        <span class="input-group-text">Rp</span>

        <input type="number"
            name="harga"
            class="form-control"
            value="{{ old('harga', $produk->harga) }}"
            min="0">
    </div>

    @error('harga')
        <div class="text-danger">{{ $message }}</div>
    @enderror
</div>

                <div class="mb-3">
                    <label class="form-label">Stok Produk</label>
                    <input type="number" name="stok" class="form-control"
                        value="{{ old('stok', $produk->stok) }}">
                </div>

                <button type="submit" class="btn btn-pink">
                    Simpan Perubahan
                </button>

                <a href="/dashboard" class="btn btn-secondary">
                    Kembali
                </a>
            </form>
        </div>
    </div>

    <style>
        .btn-pink {
            background-color: #e7549b;
            color: white;
        }

        .btn-pink:hover {
            background-color: #d63384;
            color: white;
        }
    </style>
</x-app>

