@extends('layouts.app')

@section('content')
<div class="container-sm mt-5">
    <form action="{{ route('consultation.update', ['id' => $dokter->id]) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row justify-content-center">
            <div class="p-5 bg-light rounded-3 border col-xl-8">
                <div class="mb-3 text-center">
                    <i class="bi-person-circle fs-1"></i>
                    <h4>Edit Dokter</h4>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
                        <input class="form-control" type="text" name="nama_lengkap" id="nama_lengkap" placeholder="Masukkan nama lengkap" value="{{ old('nama_lengkap', $dokter->nama_lengkap) }}" required>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="umur" class="form-label">Umur</label>
                        <input class="form-control" type="number" name="umur" id="umur" placeholder="Masukkan umur" value="{{ old('umur', $dokter->umur) }}" min="0" required>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="bidang_keahlian" class="form-label">Bidang Keahlian</label>
                        <input class="form-control" type="text" name="bidang_keahlian" id="bidang_keahlian" placeholder="Masukkan bidang keahlian" value="{{ old('bidang_keahlian', $dokter->bidang_keahlian) }}" required>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="lokasi_praktik" class="form-label">Lokasi Praktik</label>
                        <input class="form-control" type="text" name="lokasi_praktik" id="lokasi_praktik" placeholder="Masukkan lokasi praktik" value="{{ old('lokasi_praktik', $dokter->lokasi_praktik) }}" required>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="riwayat" class="form-label">Riwayat</label>
                        <textarea class="form-control" name="riwayat" id="riwayat" placeholder="Masukkan riwayat" rows="4" required>{{ old('riwayat', $dokter->riwayat) }}</textarea>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-6 d-grid">
                        <a href="{{ route('consultation.index') }}" class="btn btn-outline-dark btn-lg mt-3">
                            <i class="bi-arrow-left-circle me-2"></i> Cancel
                        </a>
                    </div>
                    <div class="col-md-6 d-grid">
                        <button type="submit" class="btn btn-dark btn-lg mt-3">
                            <i class="bi-check-circle me-2"></i> Update
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection
