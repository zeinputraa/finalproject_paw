@extends('layouts.app')

@section('content')
<div class="container-sm mt-5">
    <form action="{{ route('consultation.store') }}" method="POST" enctype="multipart/form-data">
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
                        <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
                        <input class="form-control" type="text" name="nama_lengkap" id="nama_lengkap" placeholder="Masukkan nama lengkap" required>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="umur" class="form-label">Umur</label>
                        <input class="form-control" type="number" name="umur" id="umur" placeholder="Masukkan umur" min="0" required>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="bidang_keahlian" class="form-label">Bidang Keahlian</label>
                        <select class="form-control" name="bidang_keahlian" id="bidang_keahlian" required>
                            <option value="">Pilih bidang keahlian</option>
                            <option value="Psikologi Klinis">Psikologi Klinis</option>
                            <option value="Psikologi Pendidikan">Psikologi Pendidikan</option>
                            <option value="Psikologi Industri dan Organisasi">Psikologi Industri dan Organisasi</option>
                            <option value="Psikologi Sosial">Psikologi Sosial</option>
                            <option value="Psikologi Anak">Psikologi Anak</option>
                            <option value="Psikologi Forensik">Psikologi Forensik</option>
                            <option value="Psikologi Kesehatan">Psikologi Kesehatan</option>
                            <option value="Psikologi Perkembangan">Psikologi Perkembangan</option>
                        </select>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="lokasi_praktik" class="form-label">Lokasi Praktik</label>
                        <input class="form-control" type="text" name="lokasi_praktik" id="lokasi_praktik" placeholder="Masukkan lokasi praktik" required>
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
