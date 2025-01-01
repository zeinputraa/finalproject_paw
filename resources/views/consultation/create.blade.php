@extends('layouts.app')

@section('content')
<div class="container-sm mt-5">
    <form action="" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row justify-content-center">
            <div class="p-5 bg-light rounded-3 border col-xl-8">
                <div class="mb-3 text-center">
                    <i class="bi-person-circle fs-1"></i>
                    <h4>Create Dokter</h4>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <label for="namaLengkap" class="form-label">Nama Lengkap</label>
                        <input class="form-control" type="text" name="nama_lengkap" id="namaLengkap"
                            placeholder="Masukkan Nama Lengkap" required>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="umur" class="form-label">Umur</label>
                        <input class="form-control" type="number" name="umur" id="umur" placeholder="Masukkan Umur"
                            min="0" required>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="bidangKeahlian" class="form-label">Bidang Keahlian</label>
                        <input class="form-control" type="text" name="bidang_keahlian" id="bidangKeahlian"
                            placeholder="Masukkan Bidang Keahlian" required>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="lokasiPraktik" class="form-label">Lokasi Praktik</label>
                        <input class="form-control" type="text" name="lokasi_praktik" id="lokasiPraktik"
                            placeholder="Masukkan Lokasi Praktik" required>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="riwayat" class="form-label">Riwayat</label>
                        <textarea class="form-control" name="riwayat" id="riwayat" placeholder="Masukkan Riwayat"
                            rows="4" required></textarea>
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
