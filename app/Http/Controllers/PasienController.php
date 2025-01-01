<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pasien;

class PasienController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    function index()
    {
        $pageTitle = 'Data Pasien';
        $pasiens = Pasien::all();
        return view('pasien.index', ['pageTitle' => $pageTitle, 'pasiens' => $pasiens]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pasien.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_lengkap' => 'required|string|max:255',
            'umur' => 'required|integer',
            'no_pasien' => 'required|integer|unique:pasien,no_pasien',
            'paket_konsultasi' => 'required|string',
            'jenis_kelamin' => 'required|in:male,female',
            'email' => 'nullable|email|max:255',
            'nomor_ponsel' => 'nullable|string|max:20',
        ]);

        Pasien::create($request->all());

        return redirect()->route('pasien.index')->with('success', 'Pasien berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Temukan pasien berdasarkan ID
        $pasien = Pasien::find($id);

        // Jika pasien tidak ditemukan, kembali ke daftar pasien dengan pesan error
        if (!$pasien) {
            return redirect()->route('pasien.index')
                            ->with('error', 'Pasien tidak ditemukan.');
        }

        // Kirim data pasien ke tampilan detail
        return view('pasien.show', compact('pasien'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pasien = Pasien::findOrFail($id);
        return view('pasien.edit', compact('pasien'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama_lengkap' => 'required|string|max:255',
            'umur' => 'required|integer',
            'no_pasien' => 'required|integer|unique:pasien,no_pasien,' . $id,
            'paket_konsultasi' => 'required|string',
            'jenis_kelamin' => 'required|in:male,female',
            'email' => 'nullable|email|max:255',
            'nomor_ponsel' => 'nullable|string|max:20',
        ]);

        $pasien = Pasien::findOrFail($id);
        $pasien->update($request->all());

        return redirect()->route('pasien.index')->with('success', 'Pasien berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pasien = Pasien::findOrFail($id);
        $pasien->delete();

        return redirect()->route('pasien.index')->with('success', 'Pasien berhasil dihapus.');
    }
}
