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
                    <a href="{{ route('consultation.create') }}" class="btn btn-outline-success">
                        <i class="bi bi-file-earmark-plus me-1"></i>Tambah Dokter
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
                    @foreach ($dokters as $dokter)
                    <tr>
                        <td>{{ $dokter->nama_lengkap }}</td>
                        <td>{{ $dokter->umur }}</td>
                        <td>{{ $dokter->bidang_keahlian }}</td>
                        <td>{{ $dokter->riwayat }}</td>
                        <td>{{ $dokter->lokasi_praktik }}</td>
                        <td>
                            <div class="d-flex">
                                <a href="{{ route('consultation.show', ['id' => $dokter->id]) }}" class="btn btn-outline-dark btn-sm me-2"><i
                                        class="bi-person-lines-fill"></i></a>
                                <a href="{{ route('consultation.edit', ['id' => $dokter->id]) }}" class="btn btn-outline-dark btn-sm me-2"><i
                                        class="bi-pencil-square"></i></a>
                                <form action="{{ route('consultation.destroy', ['id' => $dokter->id]) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-outline-dark btn-sm"><i
                                            class="bi-trash"></i></button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>
