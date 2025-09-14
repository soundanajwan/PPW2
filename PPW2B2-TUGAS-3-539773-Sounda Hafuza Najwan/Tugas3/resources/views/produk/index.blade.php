<!DOCTYPE html>
<html>

<head>
    <title>Daftar Produk</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <h1>Daftar Produk</h1>
    <a href="{{ route('produk.create') }}">Tambah Produk</a>

    @if(session('success'))
    <p>{{ session('success') }}</p>
    @endif

    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Stok</th>
            <th>Harga</th>
            <th>Aksi</th>
        </tr>
        @foreach($produks as $p)
        <tr>
            <td>{{ $p->id }}</td>
            <td>{{ $p->nama }}</td>
            <td>{{ $p->stok }}</td>
            <td>{{ $p->harga }}</td>
            <td>
                <div class="action-buttons">
    <a href="{{ route('produk.edit', $p->id) }}">Edit</a>
    <form action="{{ route('produk.destroy', $p->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" onclick="return confirm('Yakin hapus?')">Hapus</button>
    </form>
</div>
            </td>


        </tr>
        @endforeach
    </table>
</body>

</html>