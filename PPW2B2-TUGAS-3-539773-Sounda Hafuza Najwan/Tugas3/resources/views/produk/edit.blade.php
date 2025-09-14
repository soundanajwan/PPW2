<!DOCTYPE html>
<html>
<head>
    <title>Edit Produk</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <h1>Edit Produk</h1>
    <form class="form-produk" action="{{ route('produk.update', $produk->id) }}" method="POST">
        @csrf
        @method('PUT')
        Nama: <input type="text" name="nama" value="{{ $produk->nama }}"><br>
        Stok: <input type="number" name="stok" value="{{ $produk->stok }}"><br>
        Harga: <input type="text" name="harga" value="{{ $produk->harga }}"><br>
        <button type="submit">Update</button>
    </form>
</body>
</html>
