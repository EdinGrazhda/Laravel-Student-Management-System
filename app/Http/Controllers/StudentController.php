<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\View\View;
use App\Models\Student;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index():View
    {
        $students = Student::all();

        return view('students.index',compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request):RedirectResponse
    {
        $request->validate([
            'name'=>'required|max:255|string',
            'address'=>'required|max:255|string',
            'mobile'=>'required|max:255|string'
        ]);

        Student::create([
            'name'=>$request->name,
            'address'=>$request->address,
            'mobile' => $request->mobile,
        ]);

        return redirect('students')->with('status','Student Added !');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id):View
    {
        $student= Student::findOrFail($id);
        return view('students.show')->with('students',$student);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, int $id):View
    {
        $student=Student::findOrFail($id);
        return view('students.edit')->with('students',$student);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id):RedirectResponse
    {
        $student = Student::findOrFail($id);
        $input=$request->all();
        $student->update($input);
        return redirect('students')->with('status','Student Information Has Been Updated !');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id):RedirectResponse
    {
        $students=Student::findOrFail($id);
        $students->delete();

        return redirect()->back()->with('status','Student Deleted !');

    }

}
