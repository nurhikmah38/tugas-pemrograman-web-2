
<x-app>
    <x-slot:title>{{ $title }}</x-slot:title>

    <div class="container mt-4">
        <div class="card shadow p-4">

            <form action="/dashboard" method="POST">
                @csrf

                <div class="mb-3">
                    <label class="form-label">Nama Produk</label>
                    <input type="text"
                        name="nama_produk"
                        class="form-control @error('nama_produk') is-invalid @enderror"
                        placeholder="Masukkan nama produk"
                        value="{{ old('nama_produk') }}">

                    @error('nama_produk')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Kode Produk</label>
                    <input type="text"
                        name="kode_produk"
                        class="form-control @error('kode_produk') is-invalid @enderror"
                        placeholder="Masukkan kode produk"
                        value="{{ old('kode_produk') }}">

                    @error('kode_produk')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Kategori Produk</label>
                    <select name="kategori"
                        class="form-select @error('kategori') is-invalid @enderror">
                        <option value="">Pilih Kategori</option>
                        @foreach (['Makanan', 'Minuman', 'Pakaian', 'Elektronik', 'Lainnya'] as $kategori)
                            <option value="{{ $kategori }}" {{ old('kategori') == $kategori ? 'selected' : '' }}>
                                {{ $kategori }}
                            </option>
                        @endforeach
                    </select>

                    @error('kategori')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
    <label class="form-label">Harga Produk</label>

    <div class="input-group">
        <span class="input-group-text">Rp</span>
        <input type="number"
            name="harga"
            class="form-control @error('harga') is-invalid @enderror"
            placeholder="Masukkan harga produk"
            value="{{ old('harga') }}"
            min="0">

    </div>

    @error('harga')
        <div class="text-danger">{{ $message }}</div>
    @enderror
</div>

                <div class="mb-3">
                    <label class="form-label">Stok Produk</label>
                    <input type="number"
                        name="stok"
                        class="form-control @error('stok') is-invalid @enderror"
                        placeholder="Masukkan jumlah stok"
                        value="{{ old('stok') }}"
                        min="0">

                    @error('stok')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Deskripsi Produk</label>
                    <textarea name="deskripsi"
                        class="form-control"
                        rows="3"
                        placeholder="Masukkan deskripsi produk">{{ old('deskripsi') }}</textarea>
                </div>

                <button type="submit" class="btn btn-pink">
                    Simpan Produk
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
