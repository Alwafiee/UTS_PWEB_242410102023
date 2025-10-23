@extends('layouts.app')

@section('title', 'Daftar Roti - Rumah Roti')

@section('content')

<div class="mb-4">
    <h2 class="mb-0">Daftar Roti</h2>
    <small class="text-muted">Berikut daftar roti yang tersedia di toko</small>
</div>

<div class="card shadow-sm">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered align-middle">
                <thead class="table-warning">
                    <tr class="text-center">
                        <th style="width: 50px;">#</th>
                        <th>Nama Roti</th>
                        <th>Kategori</th>
                        <th>Harga</th>
                        <th>Stok</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($rotis as $r)
                        <tr>
                            <td class="text-center">{{ $loop->iteration }}</td>
                            <td>{{ $r['nama'] ?? '-' }}</td>
                            <td>{{ $r['kategori'] ?? '-' }}</td>
                            <td>Rp {{ number_format($r['harga'] ?? 0, 0, ',', '.') }}</td>
                            <td class="text-center">
                                @php $stok = $r['stok'] ?? 0; @endphp
                                @if($stok > 20)
                                    <span class="badge bg-success">{{ $stok }} pcs</span>
                                @elseif($stok >= 10)
                                    <span class="badge bg-warning text-dark">{{ $stok }} pcs</span>
                                @else
                                    <span class="badge bg-danger">{{ $stok }} pcs</span>
                                @endif
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="text-center text-muted">Belum ada data roti.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>

{{-- Ringkasan --}}
<div class="row mt-4">
    <div class="col-md-4 mb-3">
        <div class="card text-center bg-warning bg-opacity-75">
            <div class="card-body">
                <h6 class="fw-semibold mb-1">Total Jenis</h6>
                <h3 class="mb-0">{{ count($rotis) }} Jenis</h3>
            </div>
        </div>
    </div>

    <div class="col-md-4 mb-3">
        <div class="card text-center bg-success bg-opacity-75 text-white">
            <div class="card-body">
                @php 
                    $totalStok = array_sum(array_column($rotis, 'stok'));
                @endphp
                <h6 class="fw-semibold mb-1">Total Stok</h6>
                <h3 class="mb-0">{{ $totalStok }} pcs</h3>
            </div>
        </div>
    </div>

</div>

@endsection