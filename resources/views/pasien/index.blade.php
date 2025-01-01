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
                    <a href="{{ route('pasien.create') }}" class="btn btn-outline-success">
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
                    @forelse ($pasiens as $pasien)
                        <tr>
                            <td>{{ $pasien->nama_lengkap }}</td>
                            <td>{{ $pasien->nomor_ponsel }}</td>
                            <td>{{ $pasien->paket_konsultasi }}</td>
                            <td>{{ $pasien->umur }}</td>
                            <td>{{ $pasien->no_pasien }}</td>
                            <td>
                                <div class="d-flex">
                                    <a href="{{ route('pasien.show', $pasien->id) }}" class="btn btn-outline-dark btn-sm me-2">
                                        <i class="bi-person-lines-fill"></i>
                                    </a>
                                    <a href="{{ route('pasien.edit', $pasien->id) }}" class="btn btn-outline-dark btn-sm me-2">
                                        <i class="bi-pencil-square"></i>
                                    </a>
                                    <form action="{{ route('pasien.destroy', $pasien->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus data ini?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-outline-dark btn-sm">
                                            <i class="bi-trash"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="text-center">Tidak ada data pasien.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    <script src="path/to/your/app.js"></script>
</body>

</html>
