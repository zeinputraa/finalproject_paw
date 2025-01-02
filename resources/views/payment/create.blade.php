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
        <h4 class="mb-3">Tambah Payment</h4>

        <form action="{{ route('payment.store') }}" method="POST">
            @csrf

            <!-- Pasien and Dokter Selection -->
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="pasien_id" class="form-label">Nama Pasien</label>
                    <select id="pasien_id" name="pasien_id" class="form-select" required>
                        <option value="" disabled selected>Pilih Pasien</option>
                        @foreach($pasiens as $pasien)
                            <option value="{{ $pasien->id }}"
                                    @if(old('pasien_id') == $pasien->id) selected @endif>
                                {{ $pasien->nama_lengkap }}
                            </option>
                        @endforeach
                    </select>
                </div>


                <div class="col-md-6">
                    <label for="dokter_id" class="form-label">Nama Dokter</label>
                    <select id="dokter_id" name="dokter_id" class="form-select" required>
                        <option value="" disabled selected>Pilih Dokter</option>
                        @foreach($dokters as $dokter)
                            <option value="{{ $dokter->id }}"
                                    @if(old('dokter_id') == $dokter->id) selected @endif>
                                {{ $dokter->nama_lengkap }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>

            <!-- Paket and Payment Status Selection -->
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="paket_id" class="form-label">Paket yang Dipilih</label>
                    <select id="paket_id" name="paket_id" class="form-select" required>
                        <option value="" disabled selected>Pilih Paket</option>
                        @foreach($pakets as $paket)
                            <option value="{{ $paket->id }}"
                                    @if(old('paket_id') == $paket->id) selected @endif>
                                {{ $pasien->paket_konsultasi }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="col-md-6">
                    <label for="status_pembayaran" class="form-label">Status Pembayaran</label>
                    <select id="status_pembayaran" name="status_pembayaran" class="form-select" required>
                        <option value="paid" @if(old('status_pembayaran') == 'paid') selected @endif>Paid</option>
                        <option value="unpaid" @if(old('status_pembayaran') == 'unpaid') selected @endif>Unpaid</option>
                        <option value="pending" @if(old('status_pembayaran') == 'pending') selected @endif>Pending</option>
                    </select>
                </div>
            </div>

            <!-- Amount Input -->
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="amount" class="form-label">Amount</label>
                    <input type="number" id="amount" name="amount" class="form-control"
                           value="{{ old('amount') }}" required>
                </div>
            </div>

            <!-- Submit Button -->
            <div class="d-flex justify-content-end">
                <button type="submit" class="btn btn-primary">Save Payment</button>
            </div>
        </form>
    </div>

</body>

</html>
