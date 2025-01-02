<?php

namespace App\Http\Controllers;

use App\Models\Dokter;
use App\Models\Jadwal;
use Illuminate\Http\Request;

class JadwalController extends Controller
{
    // Menampilkan daftar semua jadwal
    public function index()
    {
        $jadwals = Jadwal::with('dokter')->get();  // Mengambil data jadwal beserta relasi dokter
        $pageTitle = "Daftar Jadwal Konsultasi";

        return view('jadwal.index', compact('jadwals', 'pageTitle'));
    }

    // Menampilkan form untuk membuat jadwal baru
    public function create()
    {
        $dokters = Dokter::all(); // Ambil semua dokter
        return view('jadwal.create', compact('dokters'));  // Kirim data dokter ke form create
    }

    // Menyimpan data jadwal yang baru dibuat
    public function store(Request $request)
    {
        // Validate the incoming request data
        $validated = $request->validate([
            'nama_lengkap' => 'required|string|max:255',
            'umur' => 'required|integer|min:0',
            'nama_dokter' => 'required|exists:dokters,id',
            'lokasi_praktik' => 'required|string|max:255',
            'waktu_konsultasi' => 'required|date',
            'riwayat' => 'required|string',
        ]);

        // Create a new consultation record in the database
        $jadwal = new Jadwal();
        $jadwal->nama_lengkap = $validated['nama_lengkap'];
        $jadwal->umur = $validated['umur'];
        $jadwal->nama_dokter = $validated['nama_dokter'];
        $jadwal->lokasi_praktik = $validated['lokasi_praktik'];
        $jadwal->waktu_konsultasi = $validated['waktu_konsultasi'];
        $jadwal->riwayat = $validated['riwayat'];
        $jadwal->save();  // Save the new consultation to the database

        // Redirect to a page with a success message
        return redirect()->route('jadwal.index')->with('success', 'Consultation created successfully!');
    }


    // Menampilkan detail dari satu jadwal
    public function show($id)
    {
        $jadwal = Jadwal::with('dokter')->find($id);  // Mengambil jadwal dengan dokter

        if (!$jadwal || !$jadwal->dokter) {
            // Jika jadwal atau dokter tidak ditemukan
            return redirect()->route('jadwal.index')->with('error', 'Jadwal atau Dokter tidak ditemukan.');
        }

        return view('jadwal.show', compact('jadwal'));  // Menampilkan halaman detail jadwal
    }

    // Menampilkan form untuk mengedit jadwal
    public function edit($id)
    {
        $jadwal = Jadwal::findOrFail($id);  // Mencari jadwal berdasarkan ID
        $dokters = Dokter::all(); // Ambil semua dokter
        return view('jadwal.edit', compact('jadwal', 'dokters'));  // Kirim data dokter dan jadwal ke form edit
    }

    // Mengupdate data jadwal yang telah ada
    public function update(Request $request, $id)
{
    // Validasi input
    $validated = $request->validate([
        'nama_lengkap' => 'required|string|max:255',
        'umur' => 'required|numeric',
        'no_pasien' => 'required|unique:pasien,no_pasien,' . $id,
        'paket_konsultasi' => 'required|exists:dokters,id',
        'jenis_kelamin' => 'required|string',
        'email' => 'nullable|email',
        'nomor_ponsel' => 'required|numeric',
    ]);

    // Mencari pasien berdasarkan ID dan memperbarui data
    $pasien = Pasien::findOrFail($id);
    $pasien->update($validated);

    return redirect()->route('pasien.index')->with('success', 'Pasien berhasil diperbarui.');
}
    // Menghapus jadwal berdasarkan ID
    public function destroy($id)
    {
        $jadwal = Jadwal::findOrFail($id);  // Mencari jadwal berdasarkan ID
        $jadwal->delete();  // Menghapus jadwal

        // Redirect setelah delete
        return redirect()->route('jadwal.index')->with('success', 'Jadwal berhasil dihapus.');
    }
}
