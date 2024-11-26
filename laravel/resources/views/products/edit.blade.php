@extends('layouts.app')

@section('content')
    <h1 class="text-center mb-4">Daftar Produk Toko Bangunan</h1>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('products.create') }}" class="btn btn-success mb-3">
        <i class="bi bi-plus-circle"></i> Tambah Produk
    </a>

    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>
                    <a href="{{ route('products.index', ['sortBy' => 'name', 'sortOrder' => $sortOrder === 'asc' ? 'desc' : 'asc']) }}">
                        #
                    </a>
                </th>
                <th>
                    <a href="{{ route('products.index', ['sortBy' => 'name', 'sortOrder' => $sortOrder === 'asc' ? 'desc' : 'asc']) }}">
                        Nama Produk
                        @if ($sortBy == 'name')
                            <span class="text-muted">({{ $sortOrder === 'asc' ? '↑' : '↓' }})</span>
                        @endif
                    </a>
                </th>
                <th>
                    <a href="{{ route('products.index', ['sortBy' => 'description', 'sortOrder' => $sortOrder === 'asc' ? 'desc' : 'asc']) }}">
                        Deskripsi
                    </a>
                </th>
                <th>
                    <a href="{{ route('products.index', ['sortBy' => 'price', 'sortOrder' => $sortOrder === 'asc' ? 'desc' : 'asc']) }}">
                        Harga
                        @if ($sortBy == 'price')
                            <span class="text-muted">({{ $sortOrder === 'asc' ? '↑' : '↓' }})</span>
                        @endif
                    </a>
                </th>
                <th>
                    <a href="{{ route('products.index', ['sortBy' => 'stock', 'sortOrder' => $sortOrder === 'asc' ? 'desc' : 'asc']) }}">
                        Stok
                        @if ($sortBy == 'stock')
                            <span class="text-muted">({{ $sortOrder === 'asc' ? '↑' : '↓' }})</span>
                        @endif
                    </a>
                </th>
                <th>
                    <a href="{{ route('products.index', ['sortBy' => 'category_id', 'sortOrder' => $sortOrder === 'asc' ? 'desc' : 'asc']) }}">
                        Kategori
                        @if ($sortBy == 'category_id')
                            <span class="text-muted">({{ $sortOrder === 'asc' ? '↑' : '↓' }})</span>
                        @endif
                    </a>
                </th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ Str::limit($product->description, 100) }}</td>
                    <td>Rp {{ number_format($product->price, 0, ',', '.') }}</td>
                    <td>{{ $product->stock }}</td>
                    <td>{{ $product->category->name }}</td>
                    <td class="d-flex justify-content-around">
                        <!-- Edit and Delete buttons -->
                        <a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning btn-sm">
                            <i class="bi bi-pencil-square"></i> Edit
                        </a>

                        <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">
                                <i class="bi bi-trash"></i> Hapus
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection