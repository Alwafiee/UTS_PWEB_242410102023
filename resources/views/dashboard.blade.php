@extends('layouts.app')
@section('title', 'Dashboard - Rumah Roti')
@section('content')

@php
    // statistik
    $username     = $username     ?? 'Pengguna';
    $totalJenis   = $totalJenis   ?? 25;
    $penjualanHariIni = $penjualanHariIni ?? 150;
    $totalPelanggan   = $totalPelanggan   ?? 320;
    $lastLogin    = ($lastLogin ?? now())->format('d F Y, H:i') . ' WIB';
@endphp

<div class="alert alert-warning">
    <h4 class="mb-1">Selamat datang, {{ $username }}!</h4>
    <p class="mb-0">Anda berhasil login ke Rumah Roti.</p>
</div>

{{-- Statistik toko --}}
<div class="row mb-4">

    {{-- Total Jenis Roti --}}
    <div class="col-md-4 mb-3">
        <div class="card bg-warning bg-opacity-75 text-dark shadow-sm">
            <div class="card-body text-center">
                <h6 class="mb-1">Total Jenis Roti</h6>
                <h1 class="mb-1">{{ $totalJenis }}</h1>
                <small class="text-muted">Jenis roti tersedia</small>
            </div>
        </div>
    </div>

    {{-- Penjualan Hari Ini --}}
    <div class="col-md-4 mb-3">
        <div class="card bg-success bg-opacity-75 text-white shadow-sm">
            <div class="card-body text-center">
                <h6 class="mb-1">Penjualan Hari Ini</h6>
                <h1 class="mb-1">{{ number_format($penjualanHariIni, 0, ',', '.') }}</h1>
                <small class="text-white-50">Roti terjual</small>
            </div>
        </div>
    </div>

    {{-- Total Pelanggan --}}
    <div class="col-md-4 mb-3">
        <div class="card bg-info bg-opacity-75 text-white shadow-sm">
            <div class="card-body text-center">
                <h6 class="mb-1">Total Pelanggan</h6>
                <h1 class="mb-1">{{ number_format($totalPelanggan, 0, ',', '.') }}</h1>
                <small class="text-white-50">Pelanggan setia</small>
            </div>
        </div>
    </div>

</div>

{{-- Informasi pengguna yang login --}}
<div class="card shadow-sm">
    <div class="card-header bg-warning">
        <h6 class="mb-0">Informasi Pengguna</h6>
    </div>
    <div class="card-body">
        <table class="table table-borderless mb-0">
            <tr>
                <td width="200"><strong>Nama</strong></td>
                <td>{{ $username }}</td>
            </tr>
            <tr>
                <td><strong>Jabatan</strong></td>
                <td><span class="badge bg-warning text-dark">{{ $role ?? 'Pemilik Toko' }}</span></td>
            </tr>
            <tr>
                <td><strong>Status</strong></td>
                @php $active = $active ?? true; @endphp
                <td>
                    <span class="badge {{ $active ? 'bg-success' : 'bg-secondary' }}">
                        {{ $active ? 'Aktif' : 'Nonaktif' }}
                    </span>
                </td>
            </tr>
            <tr>
                <td><strong>Login Terakhir</strong></td>
                <td>{{ $lastLogin }}</td>
            </tr>
        </table>
    </div>
</div>
@endsection