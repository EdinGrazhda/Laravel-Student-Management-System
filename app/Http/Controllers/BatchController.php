<?php

namespace App\Http\Controllers;

use App\Models\Batch;
use App\Models\Course;
use Illuminate\View\View;
use Illuminate\Http\Request;

class BatchController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $batches = Batch::with('course')->get();
        return view('batches.index')->with('batches', $batches);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $courses = Course::pluck('name', 'id');
        return view('batches.create', compact('courses'));
    }
    

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input=$request->all();
        Batch::create($input);
        return redirect('batches')->with('flash_message','Batch Added');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $batches=Batch::findOrFail($id);
        return view('batches.show')->with('batches',$batches);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $batches=Batch::findOrFail($id);
        return view('batches.edit')->with('batches',$batches);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
{
    $input = $request->all();
    $batches = Batch::findOrFail($id);
    $batches->update($input); // Call update() on the instance of Batch model
    return redirect('batches')->with('flash_message', 'Batch Updated'); // Redirect after updating
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $batches=Batch::findOrFail($id);
        $batches->delete();
        return redirect('batches');
    }
}
