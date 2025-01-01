@extends('layouts.app')

@section('content')
<div class="container-sm mt-5">
    <form action="#" method="POST" enctype="multipart/form-data">
        <div class="row justify-content-center">
            <div class="p-5 bg-light rounded-3 border col-xl-8">
                <div class="mb-3 text-center">
                    <i class="bi-person-circle fs-1"></i>
                    <h4>Create Pasien</h4>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <label for="firstName" class="form-label">Nama Lengkap</label>
                        <input class="form-control" type="text" name="firstName" id="firstName" placeholder="Masukan Nama Lengkap">
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="age" class="form-label">Umur</label>
                        <input class="form-control" type="number" name="age" id="age" placeholder="Masukan Umur">
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="nopasien" class="form-label">No Pasien</label>
                        <input class="form-control" type="number" name="nopasien" id="nopasien" placeholder="Masukan Nomor Pasien">
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="paketKonsultasi" class="form-label">Paket Konsultasi</label>
                        <select class="form-control" name="paketKonsultasi" id="paketKonsultasi">
                            <option value="">Pilih Paket Konsultasi</option>
                            <option value="paket1">Paket 1</option>
                            <option value="paket2">Paket 2</option>
                            <option value="paket3">Paket 3</option>
                        </select>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="gender" class="form-label">Jenis Kelamin</label>
                        <select class="form-control" name="gender" id="gender">
                            <option value="">Pilih Jenis Kelamin</option>
                            <option value="male">Laki-Laki</option>
                            <option value="female">Perempuan</option>
                        </select>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="email" class="form-label">Email (Opsional)</label>
                        <input class="form-control" type="email" name="email" id="email" placeholder="Masukan Email">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="phone" class="form-label">Nomor Ponsel</label>
                        <input class="form-control" type="tel" name="phone" id="phone" placeholder="Masukan Nomor Ponsel">
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