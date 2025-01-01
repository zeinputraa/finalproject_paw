@extends('layouts.app')

@section('content')
<div class="container-sm mt-5">
    <form action="#" method="POST" enctype="multipart/form-data">
        <div class="row justify-content-center">
            <div class="p-5 bg-light rounded-3 border col-xl-8">
                <div class="mb-3 text-center">
                    <i class="bi-person-circle fs-1"></i>
                    <h4>bla</h4>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <label for="firstName" class="form-label">Nama Pasien</label>
                        <input class="form-control" type="text" name="firstName" id="firstName" placeholder="Masukan Nama Pasien">
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="age" class="form-label">Nama Dokter</label>
                        <input class="form-control" type="number" name="age" id="age" placeholder="Masukan Nama Dokter">
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
                        <label for="waktuKonsultasi" class="form-label">Waktu Konsultasi</label>
                        <input type="datetime-local" class="form-control" name="waktuKonsultasi" id="waktuKonsultasi">
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="gender" class="form-label">Status</label>
                        <select class="form-control" name="gender" id="gender">
                            <option value="">Pilih Status</option>
                            <option value="male">Ongoing</option>
                            <option value="female">Complete</option>
                        </select>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-6 d-grid">
                        <a href="{{ route('jadwal.index') }}" class="btn btn-outline-dark btn-lg mt-3"><i class="bi-arrow-left-circle me-2"></i> Cancel</a>
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
