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
                <h4 class="mb-3">Data Pasien</h4>
            </div>
            <div class="col-lg-3 col-xl-2">
                <div class="d-grid gap-2">
                    <a href="pasien.create" class="btn btn-outline-success">
                        <i class="bi bi-person-plus-fill me-1"></i>Tambah Pasien
                    </a>
                </div>
            </div>
        </div>
        <hr>
        <div class="table-responsive border p-3 rounded-3">
            <table class="table table-bordered table-hover table-striped mb-0 bg-white">
                <thead>
                    <tr>
                        <th>Nama Pasien</th>
                        <th>No Telpon</th>
                        <th>Paket Konsultasi</th>
                        <th>Umur</th>
                        <th>Nomor Pasien</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Rezal Ihsanu</td>
                        <td>082131898358</td>
                        <td>Paket 1</td>
                        <td>24</td>
                        <td>2465378</td>
                        <td>
                            <div class="d-flex">
                                <a href="pasien.show" class="btn btn-outline-dark btn-sm me-2"><i
                                        class="bi-person-lines-fill"></i></a>
                                <a href="pasien.edit" class="btn btn-outline-dark btn-sm me-2"><i
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
