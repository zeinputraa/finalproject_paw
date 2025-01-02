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
                <h4 class="mb-3">Jadwal Konsultasi</h4>
            </div>
            <div class="col-lg-3 col-xl-2">
                <div class="d-grid gap-2">
                    <a href="{{ route('jadwal.create') }}" class="btn btn-outline-success">
                        <i class="bi bi-person-plus-fill me-1"></i>Tambah Jadwal
                    </a>
                </div>
            </div>
        </div>
        <hr>
        <div class="table-responsive border p-3 rounded-3">
            <table class="table table-bordered table-hover table-striped mb-0 bg-white">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nama Lengkap</th>
                        <th>Dokter</th>
                        <th>Lokasi Praktik</th>
                        <th>Waktu Konsultasi</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($jadwals as $jadwal)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $jadwal->nama_lengkap }}</td>
                            <td>
                                @if($jadwal->dokter)
                                    {{ $jadwal->dokter->nama_lengkap }}
                                @else
                                    Dokter tidak tersedia
                                @endif
                            </td>
                            <td>{{ $jadwal->lokasi_praktik }}</td>
                            <td>{{ \Carbon\Carbon::parse($jadwal->waktu_konsultasi)->format('d-m-Y H:i') }}</td> <!-- Format tanggal -->
                            <td>
                                <div class="d-flex">
                                    <a href="{{ route('jadwal.show', $jadwal->id) }}" class="btn btn-outline-dark btn-sm me-2">
                                        <i class="bi-person-lines-fill"></i>
                                    </a>
                                    <a href="{{ route('jadwal.edit', $jadwal->id) }}" class="btn btn-outline-dark btn-sm me-2">
                                        <i class="bi-pencil-square"></i>
                                    </a>
                                    <form action="{{ route('jadwal.destroy', $jadwal->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus pasien ini?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-outline-dark btn-sm">
                                            <i class="bi-trash"></i>
                                        </button>
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
