@extends('layouts.app')

@section('content')
<div class="container-sm mt-5">
    <form action="{{ route('jadwal.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row justify-content-center">
            <div class="p-5 bg-light rounded-3 border col-xl-8">
                <div class="mb-3 text-center">
                    <i class="bi-person-circle fs-1"></i>
                    <h4>Create Konsultasi</h4>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
                        <input class="form-control" type="text" name="nama_lengkap" id="nama_lengkap" placeholder="Masukkan nama lengkap" required>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="umur" class="form-label">Umur</label>
                        <input class="form-control" type="number" name="umur" id="umur" placeholder="Masukkan umur" min="0" required>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="dokter" class="form-label">Nama Dokter</label>
                        <select class="form-control" name="nama_dokter" id="dokter" required>
                            <option value="">Pilih Nama Dokter</option>
                            @foreach($dokters as $dokter)
                                <option value="{{ $dokter->id }}" {{ old('nama_dokter') == $dokter->id ? 'selected' : '' }}>
                                    {{ $dokter->nama_lengkap }} - {{ $dokter->bidang_keahlian }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="lokasi_praktik" class="form-label">Lokasi Praktik</label>
                        <input class="form-control" type="text" name="lokasi_praktik" id="lokasi_praktik" placeholder="Masukkan lokasi praktik" required>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="waktu_konsultasi" class="form-label">Waktu dan Tanggal Konsultasi</label>
                        <input class="form-control" type="datetime-local" name="waktu_konsultasi" id="waktu_konsultasi" required>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="riwayat" class="form-label">Riwayat</label>
                        <textarea class="form-control" name="riwayat" id="riwayat" placeholder="Masukkan riwayat" rows="4" required></textarea>
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
                            <i class="bi-check-circle me-2"></i> Save
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection
