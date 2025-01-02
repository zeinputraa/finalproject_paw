<?php

namespace App\Http\Controllers;
use App\Models\Dokter;
use Illuminate\Http\Request;

class ConsultationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    function index()
    {
        $pageTitle = 'Consultation Dokter';
        $dokters = Dokter::all(); // Mengambil semua data dokter
        return view('consultation.index', ['pageTitle' => $pageTitle, 'dokters' => $dokters]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pageTitle = 'Tambah Dokter';
        return view('consultation.create', ['pageTitle' => $pageTitle]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_lengkap' => 'required|string|max:255',
            'umur' => 'required|integer|min:0',
            'bidang_keahlian' => 'required|string|max:255',
            'lokasi_praktik' => 'required|string|max:255',
            'riwayat' => 'required|string',
        ]);

        Dokter::create($request->all());

        return redirect()->route('consultation.index')->with('success', 'Dokter berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $dokter = Dokter::findOrFail($id);
        $pageTitle = 'Detail Dokter';
        return view('consultation.show', ['pageTitle' => $pageTitle, 'dokter' => $dokter]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $dokter = Dokter::findOrFail($id);
        $pageTitle = 'Edit Dokter';
        return view('consultation.edit', ['pageTitle' => $pageTitle, 'dokter' => $dokter]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama_lengkap' => 'required|string|max:255',
            'umur' => 'required|integer|min:0',
            'bidang_keahlian' => 'required|string|max:255',
            'lokasi_praktik' => 'required|string|max:255',
            'riwayat' => 'required|string',
        ]);

        $dokter = Dokter::findOrFail($id);
        $dokter->update($request->all());

        return redirect()->route('consultation.index')->with('success', 'Dokter berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $dokter = Dokter::findOrFail($id);
        $dokter->delete();

        return redirect()->route('consultation.index')->with('success', 'Dokter berhasil dihapus.');
    }
}
