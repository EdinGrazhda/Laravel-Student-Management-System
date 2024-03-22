<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\View\View;
use App\Models\Teacher;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index():View
    {
        $teachers = Teacher::all();

        return view('teachers.index',compact('teachers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('teachers.create');
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

        Teacher::create([
            'name'=>$request->name,
            'address'=>$request->address,
            'mobile' => $request->mobile,
        ]);

        return redirect('teachers')->with('status','Teacher Added !');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id):View
    {
        $teacher= Teacher::findOrFail($id);
        return view('teachers.show')->with('teachers',$teacher);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, int $id):View
    {
        $teacher=Teacher::findOrFail($id);
        return view('teachers.edit')->with('teachers',$teacher);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id):RedirectResponse
    {
        $teacher = Teacher::findOrFail($id);
        $input=$request->all();
        $teacher->update($input);
        return redirect('teachers')->with('status','Teacher Information Has Been Updated !');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id):RedirectResponse
    {
        $teachers=Teacher::findOrFail($id);
        $teachers->delete();

        return redirect()->back()->with('status','Teacher Deleted !');

    }

}
