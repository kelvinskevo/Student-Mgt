<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePaymentRequest;
use App\Http\Requests\UpdatePaymentRequest;
use App\Models\Payment;
use App\Models\Enrollment;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $payments = Payment::all();
        return view('payments.index')->with('payments', $payments);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $enrollments = Enrollment::all();
        return view('payments.create')->with('enrollments', $enrollments);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePaymentRequest $request)
    {
        Payment::create($request->validated());
        return back()->with('success', 'Payment Received');
    }

    /**
     * Display the specified resource.
     */
    public function show(Payment $payment)
    {
        return view('payments.show')->with('payment', $payment);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Payment $payment)
    {
        $enrollments = Enrollment::all();
        return view('payments.edit')->with('enrollments', $enrollments)->with('payment', $payment);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePaymentRequest $request, Payment $payment)
    {
        $data = $request->validated();
        $payment->update($data);
        return back()->with('success', 'Payment Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Payment $payment)
    {
        $payment->delete();
        return back()->with('success', 'Payment Deleted');
    }
}
