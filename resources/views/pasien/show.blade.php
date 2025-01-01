@extends('layouts.app')

@section('content')
<div class="container-sm my-5">
    <div class="row justify-content-center">
        <div class="p-5 bg-light rounded-3 border col-xl-8">
            <div class="mb-3 text-center">
                <i class="bi-person-circle fs-1"></i>
                <h4>Detail Pasien</h4>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-12 mb-3">
                    <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
                    <h5>{{ $pasien->nama_lengkap }}</h5>
                </div>
                <div class="col-md-12 mb-3">
                    <label for="umur" class="form-label">Umur</label>
                    <h5>{{ $pasien->umur }}</h5>
                </div>
                <div class="col-md-12 mb-3">
                    <label for="no_pasien" class="form-label">No Pasien</label>
                    <h5>{{ $pasien->no_pasien }}</h5>
                </div>
                <div class="col-md-12 mb-3">
                    <label for="paket_konsultasi" class="form-label">Paket Konsultasi</label>
                    <h5>{{ $pasien->paket_konsultasi }}</h5>
                </div>
                <div class="col-md-12 mb-3">
                    <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                    <h5>{{ $pasien->jenis_kelamin }}</h5>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="email" class="form-label">Email</label>
                    <h5>{{ $pasien->email ?? 'N/A' }}</h5>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="nomor_ponsel" class="form-label">Nomor Ponsel</label>
                    <h5>{{ $pasien->nomor_ponsel }}</h5>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-12 d-grid">
                    <a href="{{ route('pasien.index') }}" class="btn btn-outline-dark btn-lg mt-3"><i class="bi-arrow-left-circle me-2"></i> Back</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
