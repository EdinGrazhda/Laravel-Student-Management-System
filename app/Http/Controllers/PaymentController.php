<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Models\Enrollment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $payments=Payment::all();
        return view('payments.index')->with('payments',$payments);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $payments=Enrollment::pluck('enroll_no','id');
        return view('payments.create',compact('payments'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input=$request->all();
        Payment::create($input);
        return redirect('payments')->with('flash_message','Payments Added');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $payments = Payment::findOrFail($id);
        return view('payments.show', compact('payments'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $payments=Payment::findOrFail($id);
        $enrollments=Enrollment::pluck('enroll_no','id');
        return view('payments.edit',compact('payments'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $payments=Payment::findOrFail($id);
        $input=$request->all();
        $payments->update($input);
        return redirect('payments')->with('payments','Payments Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $payments=Payment::findOrFail($id);
        $payments->delete();
        return redirect('payments')->with('flash_message', 'Payment Deleted');
    }
}
