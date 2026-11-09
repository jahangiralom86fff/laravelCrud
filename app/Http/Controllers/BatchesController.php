<?php

namespace App\Http\Controllers;

use App\Models\Batch;
use Illuminate\Http\Request;

class BatchesController extends Controller
{
    public function index()
    {
        $batches = Batch::latest()->get();
        return view('layout.batches.index', compact('batches'));
    }
  
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'start_date' => 'required|date',
            'programs' => 'required|array',
        ]);

        Batch::create([
            'title' => $request->title,
            'start_date' => $request->start_date,
            'programs' => $request->programs,
        ]);

        return redirect()->route('batches.index')->with('success', 'Batch saved successfully!');
    }

    //edit function//
    public function edit($id)
    {
        $batch = Batch::findOrFail($id);

        return response()->json($batch);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'start_date' => 'required|date',
            'programs' => 'required|array',
        ]);

        $batch = Batch::findOrFail($id);

        $batch->title = $request->title;
        $batch->start_date = $request->start_date;
        $batch->programs = $request->programs;

        $batch->save();

        return redirect()->back()->with('success', 'Batch Updated Successfully!');
    }
}