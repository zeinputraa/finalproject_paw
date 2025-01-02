<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Models\Pasien;
use App\Models\Dokter;
use App\Models\Jadwal;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $payments = Payment::with('pasien', 'dokter', 'jadwal')->get();
        $pageTitle = 'Payments List';

        // Send data to the view
        return view('payment.index', compact('payments', 'pageTitle'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pasiens = Pasien::all();  // Fetch all Pasien
        $dokters = Dokter::all();  // Fetch all Dokter
        $pakets = Jadwal::all();    // Fetch all Paket
        $pageTitle = 'Payments List';

        // Return the view for creating a new payment
        return view('payment.create', compact('pasiens', 'dokters', 'pakets', 'pageTitle'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the request data
        $validated = $request->validate([
            'pasien_id' => 'required|exists:pasiens,id',
            'dokter_id' => 'required|exists:dokters,id',
            'paket_id' => 'required|exists:pakets,id',
            'status_pembayaran' => 'required|string',
            'amount' => 'required|numeric',
        ]);

        // Store the new payment in the database
        Payment::create([
            'pasien_id' => $validated['pasien_id'],
            'dokter_id' => $validated['dokter_id'],
            'paket_id' => $validated['paket_id'],
            'status_pembayaran' => $validated['status_pembayaran'],
            'amount' => $validated['amount'],
        ]);

        // Redirect to the payments index page
        return redirect()->route('payment.index')->with('success', 'Payment added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Find the payment by ID, including its relationships
        $payment = Payment::with('pasien', 'dokter', 'paket')->findOrFail($id);
        $pageTitle = 'Payment Details';  // Page title for showing details

        // Return the view with payment details
        return view('payment.show', compact('payment', 'pageTitle'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // Fetch data for the edit form
        $payment = Payment::findOrFail($id);
        $pasiens = Pasien::all();
        $dokters = Dokter::all();
        $pakets = Paket::all();

        return view('payment.edit', compact('payment', 'pasiens', 'dokters', 'pakets'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Validate and update the payment record
        $validated = $request->validate([
            'pasien_id' => 'required|exists:pasiens,id',
            'dokter_id' => 'required|exists:dokters,id',
            'paket_id' => 'required|exists:pakets,id',
            'status_pembayaran' => 'required|string',
            'amount' => 'required|numeric',
        ]);

        $payment = Payment::findOrFail($id);
        $payment->update($validated);

        return redirect()->route('payment.index')->with('success', 'Payment updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $payment = Payment::findOrFail($id);
        $payment->delete();

        return redirect()->route('payment.index')->with('success', 'Payment deleted successfully');
    }
}
