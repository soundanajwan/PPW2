<!DOCTYPE html>
<html>
<head>
    <title>Tambah Produk</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <h1>Tambah Produk</h1>
    <form class="form-produk" action="{{ route('produk.store') }}" method="POST">
        @csrf
        Nama: <input type="text" name="nama"><br>
        Stok: <input type="number" name="stok"><br>
        Harga: <input type="text" name="harga"><br>
        <button type="submit">Simpan</button>
    </form>
</body>
</html>
