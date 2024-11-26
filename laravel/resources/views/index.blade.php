<!-- resources/views/index.blade.php -->

@extends('layouts.app')

@section('content')
    <h1 class="text-center mb-4">Daftar Produk Toko Bangunan</h1>

    <!-- Table to display the products -->
    <table class="table table-bordered table-striped">

        <!-- Button to add a new product -->
        <a href="{{ route('products.create') }}" class="btn btn-success mb-3">
        <i class="bi bi-plus-circle"></i> Tambah Produk
        </a>

        <thead>
            <tr>
                <th>#</th>
                <th>Nama Produk</th>
                <th>Deskripsi</th>
                <th>Harga</th>
                <th>Stok</th>
                <th>Kategori</th>
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
