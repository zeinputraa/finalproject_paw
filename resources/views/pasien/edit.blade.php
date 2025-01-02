@extends('layouts.app')

@section('content')
<div class="container-sm mt-5">
    <form action="{{ route('pasien.update', $pasien->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row justify-content-center">
            <div class="p-5 bg-light rounded-3 border col-xl-8">
                <div class="mb-3 text-center">
                    <i class="bi-person-circle fs-1"></i>
                    <h4>Edit Pasien</h4>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
                        <input class="form-control" type="text" name="nama_lengkap" id="nama_lengkap" value="{{ $pasien->nama_lengkap }}" placeholder="Masukkan Nama Lengkap">
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="umur" class="form-label">Umur</label>
                        <input class="form-control" type="number" name="umur" id="umur" value="{{ $pasien->umur }}" placeholder="Masukkan Umur">
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="no_pasien" class="form-label">No Pasien</label>
                        <input class="form-control" type="number" name="no_pasien" id="no_pasien" value="{{ $pasien->no_pasien }}" placeholder="Masukkan Nomor Pasien">
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="paket_konsultasi" class="form-label">Pilih Bidang Keahlian</label>
                        <select class="form-control" name="paket_konsultasi" id="paket_konsultasi">
                            <option value="">Pilih Bidang Keahlian</option>
                            <option value="Psikologi Klinis" {{ $pasien->paket_konsultasi == 'Psikologi Klinis' ? 'selected' : '' }}>Psikologi Klinis</option>
                            <option value="Psikologi Pendidikan" {{ $pasien->paket_konsultasi == 'Psikologi Pendidikan' ? 'selected' : '' }}>Psikologi Pendidikan</option>
                            <option value="Psikologi Industri dan Organisasi" {{ $pasien->paket_konsultasi == 'Psikologi Industri dan Organisasi' ? 'selected' : '' }}>Psikologi Industri dan Organisasi</option>
                            <option value="Psikologi Sosial" {{ $pasien->paket_konsultasi == 'Psikologi Sosial' ? 'selected' : '' }}>Psikologi Sosial</option>
                            <option value="Psikologi Anak" {{ $pasien->paket_konsultasi == 'Psikologi Anak' ? 'selected' : '' }}>Psikologi Anak</option>
                            <option value="Psikologi Forensik" {{ $pasien->paket_konsultasi == 'Psikologi Forensik' ? 'selected' : '' }}>Psikologi Forensik</option>
                            <option value="Psikologi Kesehatan" {{ $pasien->paket_konsultasi == 'Psikologi Kesehatan' ? 'selected' : '' }}>Psikologi Kesehatan</option>
                            <option value="Psikologi Perkembangan" {{ $pasien->paket_konsultasi == 'Psikologi Perkembangan' ? 'selected' : '' }}>Psikologi Perkembangan</option>
                        </select>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                        <select class="form-control" name="jenis_kelamin" id="jenis_kelamin">
                            <option value="">Pilih Jenis Kelamin</option>
                            <option value="male" {{ $pasien->jenis_kelamin == 'male' ? 'selected' : '' }}>Laki-Laki</option>
                            <option value="female" {{ $pasien->jenis_kelamin == 'female' ? 'selected' : '' }}>Perempuan</option>
                        </select>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="email" class="form-label">Email (Opsional)</label>
                        <input class="form-control" type="email" name="email" id="email" value="{{ $pasien->email }}" placeholder="Masukkan Email">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="nomor_ponsel" class="form-label">Nomor Ponsel</label>
                        <input class="form-control" type="number" name="nomor_ponsel" id="nomor_ponsel" value="{{ $pasien->nomor_ponsel }}" placeholder="Masukkan Nomor Ponsel">
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-6 d-grid">
                        <a href="{{ route('pasien.index') }}" class="btn btn-outline-dark btn-lg mt-3"><i class="bi-arrow-left-circle me-2"></i> Cancel</a>
                    </div>
                    <div class="col-md-6 d-grid">
                        <button type="submit" class="btn btn-dark btn-lg mt-3"><i class="bi-check-circle me-2"></i> Save</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection
