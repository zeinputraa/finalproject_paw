<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $pageTitle }}</title>
    @vite('resources/sass/app.scss')
</head>

<body>
    @include('layouts.nav')
    <div class="container mt-4">
        <div class="row mb-0">
            <div class="col-lg-9 col-xl-10">
                <h4 class="mb-3">Paket Konsultasi</h4>
            </div>
            <div class="col-lg-3 col-xl-2">
                <div class="d-grid gap-2">
                    <a href="consultation.create" class="btn btn-outline-success">
                        <i class="bi bi-file-earmark-plus me-1"></i>Tambah Paket
                    </a>
                </div>
            </div>
        </div>
        <hr>
        <div class="table-responsive border p-3 rounded-3">
            <table class="table table-bordered table-hover table-striped mb-0 bg-white">
                <thead>
                    <tr>
                        <th>Nama Dokter</th>
                        <th>Umur</th>
                        <th>Bidang Keahlian</th>
                        <th>Riwayat</th>
                        <th>Tempat Praktik</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Gentur Anto Judho S.Psi, Psikolog</td>
                        <td>22</td>
                        <td>Gangguan Kecemasan</td>
                        <td>Alumnus Universitas Islam Bandung</td>
                        <td>Surabaya</td>
                        <td>
                            <div class="d-flex">
                                <a href="consultation.show" class="btn btn-outline-dark btn-sm me-2"><i
                                        class="bi-person-lines-fill"></i></a>
                                <a href="consultation.edit" class="btn btn-outline-dark btn-sm me-2"><i
                                        class="bi-pencil-square"></i></a>
                                <button type="button" class="btn btn-outline-dark btn-sm"><i
                                        class="bi-trash"></i></button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <script src="path/to/your/app.js"></script>
</body>

</html>
