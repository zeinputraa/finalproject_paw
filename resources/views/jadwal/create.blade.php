@extends('layouts.app')

@section('content')
<div class="container-sm mt-5">
    <form action="#" method="POST" enctype="multipart/form-data">
        <div class="row justify-content-center">
            <div class="p-5 bg-light rounded-3 border col-xl-6">
                <div class="mb-3 text-center">
                    <i class="bi-person-circle fs-1"></i>
                    <h4>Create Pasien</h4>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="firstName" class="form-label">First Name</label>
                        <input class="form-control" type="text" name="firstName" id="firstName" placeholder="Enter First Name">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="lastName" class="form-label">Last Name</label>
                        <input class="form-control" type="text" name="lastName" id="lastName" placeholder="Enter Last Name">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input class="form-control" type="text" name="email" id="email" placeholder="Enter Email">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="age" class="form-label">Age</label>
                        <input class="form-control" type="text" name="age" id="age" placeholder="Enter Age">
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="position" class="form-label">Position</label>
                        <select name="position" id="position" class="form-select">
                            <option value="1">Position 1</option>
                            <option value="2">Position 2</option>
                            <option value="3">Position 3</option>
                        </select>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="cv" class="form-label">Curriculum Vitae (CV)</label>
                        <input type="file" class="form-control" name="cv" id="cv">
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