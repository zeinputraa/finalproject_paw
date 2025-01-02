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
                <h4 class="mb-3">List Payment</h4>
            </div>
            <div class="col-lg-3 col-xl-2">
                <div class="d-grid gap-2">
                    <a href="{{ route('payment.create') }}" class="btn btn-outline-success">
                        <i class="bi bi-person-plus-fill me-1"></i>Tambah Payment
                    </a>
                </div>
            </div>
        </div>
        <hr>
        <div class="table-responsive border p-3 rounded-3">
            <table class="table table-bordered table-hover table-striped mb-0 bg-white">
                <thead>
                    <tr>
                        <th>Nomer Pasien</th>
                        <th>Nama Pasien</th>
                        <th>Nama Dokter</th>
                        <th>Paket yang dipilih</th>
                        <th>Status Pembayaran</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($payments as $payment)
                    <tr>
                        <td>{{ $payment->pasien->nomor_pasien }}</td>
                        <td>{{ $payment->pasien->nama }}</td>
                        <td>{{ $payment->dokter->nama }}</td>
                        <td>{{ $payment->paket->nama }}</td>
                        <td>{{ $payment->status_pembayaran }}</td>
                        <td>
                            <div class="d-flex">
                                <a href="{{ route('pasien.show', $payment->pasien->id) }}" class="btn btn-outline-dark btn-sm me-2">
                                    <i class="bi-person-lines-fill"></i>
                                </a>
                                <a href="{{ route('pasien.edit', $payment->pasien->id) }}" class="btn btn-outline-dark btn-sm me-2">
                                    <i class="bi-pencil-square"></i>
                                </a>
                                <a href="#" class="btn btn-outline-dark btn-sm me-2"><i class="bi bi-file-earmark-ruled"></i></a>
                                <form action="{{ route('payment.destroy', $payment->id) }}" method="POST">
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
