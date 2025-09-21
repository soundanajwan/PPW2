@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-3">Daftar Uma Musume</h1>

    <!-- Filter Trainer + Search -->
    <form method="GET" action="{{ route('uma.index') }}" class="mb-3 row g-2">
        <div class="col-auto">
            <select name="trainer" class="form-select">
                <option value="all">Semua Trainer</option>
                @foreach($trainers as $t)
                    <option value="{{ $t }}" {{ ($trainer == $t) ? 'selected' : '' }}>
                        {{ $t }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="col-auto">
            <input type="text" name="search" class="form-control" placeholder="Cari Uma..."
                   value="{{ $search }}">
        </div>
        <div class="col-auto">
            <button type="submit" class="btn btn-primary">Search</button>
        </div>
    </form>

    <!-- Tabel Uma -->
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Trainer</th>
                <th>Harga</th>
            </tr>
        </thead>
        <tbody>
            @forelse($umas as $uma)
                <tr>
                    <td>{{ $uma->nama }}</td>
                    <td>{{ $uma->trainer }}</td>
                    <td>Rp {{ number_format($uma->harga, 0, ',', '.') }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="3" class="text-center text-muted">Tidak ada data ditemukan</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    {{ $umas->links() }}

    <!-- 5 Uma terbaru -->
    <h3 class="mt-5">5 Uma Terbaru</h3>
    <ul class="list-group">
        @foreach($latestUmas as $u)
            <li class="list-group-item">
                {{ $u->nama }} <span class="text-muted">({{ $u->trainer }})</span>
            </li>
        @endforeach
    </ul>

    <!-- Statistik -->
    <h3 class="mt-5">Statistik Uma</h3>
    <div class="row">
        <div class="col-md-3">
            <div class="card shadow-sm">
                <div class="card-body text-center">
                    <h5>Total Uma</h5>
                    <p class="fs-4">{{ $stats['total'] }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card shadow-sm">
                <div class="card-body text-center">
                    <h5>Total Harga</h5>
                    <p class="fs-5">Rp {{ number_format($stats['total_harga'], 0, ',', '.') }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card shadow-sm">
                <div class="card-body text-center">
                    <h5>Harga Tertinggi</h5>
                    <p class="fs-5">Rp {{ number_format($stats['max_harga'], 0, ',', '.') }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card shadow-sm">
                <div class="card-body text-center">
                    <h5>Harga Terendah</h5>
                    <p class="fs-5">Rp {{ number_format($stats['min_harga'], 0, ',', '.') }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
