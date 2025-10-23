@extends('layouts.app')

@section('title', 'Profile - Rumah Roti')

@section('content')
<div class="mb-4">
    <h2 class="mb-0">Profil Pengguna</h2>
    <small class="text-muted">Informasi akun</small>
</div>

<div class="row">
    <div class="col-md-8 mx-auto">

        <div class="card shadow-sm">
            <div class="card-header bg-warning text-center py-4">
                <div class="mb-2">
                    {{-- avatar placeholder biar nggak kosong --}}
                    <div style="width:88px;height:88px;border-radius:50%;background:#fff;display:inline-block;line-height:88px;">
                        <span style="font-size:28px;font-weight:700;">
                            {{ strtoupper(substr(($username ?? 'U'),0,1)) }}
                        </span>
                    </div>
                </div>
                <h3 class="mb-1">Halo, {{ $username ?? 'Pengguna' }} </h3>
                <small class="text-dark">Pemilik Rumah Roti</small>
            </div>

            <div class="card-body p-4">
                <h5 class="mb-3">Informasi Akun</h5>

                <table class="table table-borderless mb-0">
                    <tr>
                        <td width="200"><strong>Nama Lengkap</strong></td>
                        <td>{{ $username ?? '-' }}</td>
                    </tr>
                    <tr>
                        <td><strong>No. Telepon</strong></td>
                        <td>{{ $phone ?? '0812-3456-7890' }}</td>
                    </tr>
                    <tr>
                        <td><strong>Jabatan</strong></td>
                        <td><span class="badge bg-warning text-dark">{{ $role ?? 'Pemilik Toko' }}</span></td>
                    </tr>
                    <tr>
                        <td><strong>Status Akun</strong></td>
                        <td>
                            @php $active = $active ?? true; @endphp
                            <span class="badge {{ $active ? 'bg-success' : 'bg-secondary' }}">
                                {{ $active ? 'Aktif' : 'Nonaktif' }}
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td><strong>Bergabung Sejak</strong></td>
                        <td>{{ ($joinedAt ?? now())->translatedFormat('F Y') }}</td>
                    </tr>
                    <tr>
                        <td><strong>Login Terakhir</strong></td>
                        <td>{{ ($lastLogin ?? now())->format('d F Y, H:i') }} WIB</td>
                    </tr>
                </table>

                <hr>

            </div>
        </div>
    </div>
</div>
@endsection