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
        // Validasi input dari form
        $validated = $request->validate([
            'nama_lengkap' => 'required|string|max:255',
            'umur' => 'required|numeric|min:0',
            'nama_dokter' => 'required|string|max:255',
            'lokasi_praktik' => 'required|string|max:255',
            'waktu_konsultasi' => 'required|date',
            'riwayat' => 'required|string|max:1000',
        ]);

        // Menyimpan data ke tabel jadwals
        Jadwal::create($validated);

        // Redirect setelah sukses
        return redirect()->route('jadwal.index')->with('success', 'Jadwal berhasil dibuat.');
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
        // Validasi input dari form
        $validated = $request->validate([
            'nama_lengkap' => 'required|string|max:255',
            'umur' => 'required|numeric|min:0',
            'nama_dokter' => 'required|string|max:255',
            'lokasi_praktik' => 'required|string|max:255',
            'waktu_konsultasi' => 'required|date',
            'riwayat' => 'required|string|max:1000',
        ]);

        // Mencari jadwal berdasarkan ID dan mengupdate datanya
        $jadwal = Jadwal::findOrFail($id);
        $jadwal->update($validated);

        // Redirect setelah update
        return redirect()->route('jadwal.index')->with('success', 'Jadwal berhasil diperbarui.');
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
