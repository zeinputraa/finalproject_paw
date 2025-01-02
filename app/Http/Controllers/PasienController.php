<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use App\Models\Dokter;
use Illuminate\Http\Request;

class PasienController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pageTitle = 'Data Pasien';
        // Mengambil data pasien bersama dengan data dokter
        $pasiens = Pasien::with('dokter')->get();
        return view('pasien.index', ['pageTitle' => $pageTitle, 'pasiens' => $pasiens]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pageTitle = 'Tambah Pasien';
        $dokters = Dokter::all();
        return view('pasien.create', compact('pageTitle', 'dokters'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate input
        $validated = $request->validate([
            'nama_lengkap' => 'required|string|max:255',
            'umur' => 'required|integer',
            'no_pasien' => 'required|numeric|unique:pasiens,no_pasien',
            'paket_konsultasi' => 'required|exists:dokters,id',
            'jenis_kelamin' => 'required|in:male,female',
            'email' => 'nullable|email|max:255',
            'nomor_ponsel' => 'required|numeric',
        ]);

        // Create a new Pasien record
        $pasien = new Pasien;
        $pasien->nama_lengkap = $validated['nama_lengkap'];
        $pasien->umur = $validated['umur'];
        $pasien->no_pasien = $validated['no_pasien'];
        $pasien->paket_konsultasi = $validated['paket_konsultasi'];
        $pasien->jenis_kelamin = $validated['jenis_kelamin'];
        $pasien->email = $validated['email'] ?? null; // Optional field
        $pasien->nomor_ponsel = $validated['nomor_ponsel'];

        // Save the record to the database
        $pasien->save();

        // Redirect or return a response
        return redirect()->route('pasien.index')->with('success', 'Pasien created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $pasien = Pasien::with('dokter')->findOrFail($id); // Mengambil data pasien bersama dengan dokter
        $pageTitle = 'Detail Pasien';
        return view('pasien.show', ['pageTitle' => $pageTitle, 'pasien' => $pasien]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pasien = Pasien::findOrFail($id); // Ambil data pasien berdasarkan ID
        $dokters = Dokter::all();  // Mengambil daftar dokter
        $pageTitle = 'Edit Pasien';
        return view('pasien.edit', ['pageTitle' => $pageTitle, 'pasien' => $pasien, 'dokters' => $dokters]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $pasien = Pasien::findOrFail($id); // Ambil data pasien berdasarkan ID

        // Validasi data yang diterima
        $validated = $request->validate([
            'nama_lengkap' => 'required|string|max:255',
            'umur' => 'required|integer',
            'no_pasien' => 'required|integer|unique:pasiens,no_pasien,' . $pasien->id,
            'dokter_id' => 'required|exists:dokters,id',  // Menambahkan validasi untuk dokter
            'jenis_kelamin' => 'required|string',
            'email' => 'nullable|email',
            'nomor_ponsel' => 'required|numeric',
        ]);

        // Update data pasien
        $pasien->update($validated);

        return redirect()->route('pasien.index')->with('success', 'Data pasien berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pasien = Pasien::findOrFail($id); // Ambil data pasien berdasarkan ID

        // Hapus pasien
        $pasien->delete();

        return redirect()->route('pasien.index')->with('success', 'Pasien berhasil dihapus');
    }
}
