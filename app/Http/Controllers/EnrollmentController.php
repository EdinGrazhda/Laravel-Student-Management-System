<?php

namespace App\Http\Controllers;

use App\Models\Batch;
use App\Models\Student;
use App\Models\Enrollment;
use Illuminate\Http\Request;

class EnrollmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $enrollments=Enrollment::with('student','batch')->get();
        return view('enrollments.index')->with('enrollments',$enrollments);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $batches=Batch::pluck('name','id');
        $students = Student::pluck('name','id');
        return view('enrollments.create',compact('batches','students'));
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input=$request->all();
        Enrollment::create($input);
        return redirect('enrollments')->with('flash_message','Enrollment Added');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $enrollments = Enrollment::findOrFail($id);
        return view('enrollments.show', compact('enrollments'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $enrollments = Enrollment::findOrFail($id);
        return view('enrollments.edit', compact('enrollments'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
      $enrollments=Enrollment::findOrFail($id);
      $input=$request->all();
      $enrollments->update($input);
      return redirect('enrollments')->with('enrollments','Enrollment Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $enrollments = Enrollment::findOrFail($id);
        $enrollments->delete();
        return redirect('enrollments')->with('flash_message', 'Enrollment Deleted');
    }
}
