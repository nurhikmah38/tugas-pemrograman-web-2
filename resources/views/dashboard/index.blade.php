<x-app>
    <x-slot:title>{{ $title }}</x-slot:title>

    <div class="container mt-4">

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <a href="/dashboard/create" class="btn btn-pink mb-3">
            + Tambah Produk
        </a>

        <div class="table-responsive">
            <table class="table table-bordered table-hover text-center">

                <thead class="table-pink">
                    <tr>
                        <th>No</th>
                        <th>Nama Produk</th>
                        <th>Kode Produk</th>
                        <th>Kategori</th>
                        <th>Harga</th>
                        <th>Stok</th>
                        <th>Aksi</th>
                    </tr>
                </thead>

                <tbody>
                    @forelse($products as $produk)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $produk->nama_produk }}</td>
                            <td>{{ $produk->kode_produk }}</td>
                            <td>{{ $produk->kategori }}</td>
                            <td>Rp {{ number_format($produk->harga, 0, ',', '.') }}</td>
                            <td>{{ $produk->stok }}</td>

                            {{-- Kolom Aksi --}}
                            <td>
                                <a href="/dashboard/{{ $produk->id }}/edit"
                                   class="btn btn-warning btn-sm">
                                    Edit
                                </a>

                                <form action="/dashboard/{{ $produk->id }}"
                                      method="POST"
                                      style="display: inline;"
                                      onsubmit="return confirm('Yakin ingin menghapus produk ini?')">

                                    @csrf
                                    @method('DELETE')

                                    <button type="submit" class="btn btn-danger btn-sm">
                                        Hapus
                                    </button>
                                </form>
                            </td>
                        </tr>

                    @empty
                        <tr>
                            <td colspan="7">Belum ada data produk.</td>
                        </tr>
                    @endforelse
                </tbody>

            </table>
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

        .table-pink th {
            background-color: #f7b6d2;
            color: #333;
        }
    </style>

</x-app>