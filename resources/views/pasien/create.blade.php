@extends('layouts.app')

@section('content')
<div class="container-sm mt-5">
    <form action="{{ route('pasien.store') }}" method="POST">
        @csrf
        <div class="row justify-content-center">
            <div class="p-5 bg-light rounded-3 border col-xl-8">
                <div class="mb-3 text-center">
                    <i class="bi-person-circle fs-1"></i>
                    <h4>Create Pasien</h4>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
                        <input class="form-control @error('nama_lengkap') is-invalid @enderror" type="text" name="nama_lengkap" id="nama_lengkap" placeholder="Masukkan Nama Lengkap" value="{{ old('nama_lengkap') }}">
                        @error('nama_lengkap')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="umur" class="form-label">Umur</label>
                        <input class="form-control @error('umur') is-invalid @enderror" type="number" name="umur" id="umur" placeholder="Masukkan Umur" value="{{ old('umur') }}">
                        @error('umur')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="no_pasien" class="form-label">No Pasien (NIK)</label>
                        <input class="form-control @error('no_pasien') is-invalid @enderror" type="number" name="no_pasien" id="no_pasien" placeholder="Masukkan Nomor Pasien" value="{{ old('no_pasien') }}">
                        @error('no_pasien')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="paket_konsultasi" class="form-label">Pilih Paket Konsultasi</label>
                        <select class="form-control" name="paket_konsultasi" id="paket_konsultasi" required>
                            <option value="">Pilih Dokter</option>
                            @foreach($dokters as $dokter)
                                <option value="{{ $dokter->id }}" {{ old('paket_konsultasi') == $dokter->id ? 'selected' : '' }}>
                                    {{ $dokter->nama_lengkap }} - {{ $dokter->bidang_keahlian }}
                                </option>
                            @endforeach
                        </select>
                        @error('paket_konsultasi')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                        <select class="form-control @error('jenis_kelamin') is-invalid @enderror" name="jenis_kelamin" id="jenis_kelamin">
                            <option value="">Pilih Jenis Kelamin</option>
                            <option value="male" {{ old('jenis_kelamin') == 'male' ? 'selected' : '' }}>Laki-Laki</option>
                            <option value="female" {{ old('jenis_kelamin') == 'female' ? 'selected' : '' }}>Perempuan</option>
                        </select>
                        @error('jenis_kelamin')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="email" class="form-label">Email (Opsional)</label>
                        <input class="form-control @error('email') is-invalid @enderror" type="email" name="email" id="email" placeholder="Masukkan Email" value="{{ old('email') }}">
                        @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="nomor_ponsel" class="form-label">Nomor Ponsel</label>
                        <input class="form-control @error('nomor_ponsel') is-invalid @enderror" type="number" name="nomor_ponsel" id="nomor_ponsel" placeholder="Masukkan Nomor Ponsel" value="{{ old('nomor_ponsel') }}">
                        @error('nomor_ponsel')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
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
