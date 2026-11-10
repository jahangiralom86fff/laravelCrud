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
        $batch = Batch::find($id);

        if (!$batch) {
            return response()->json([
                'message' => 'Batch not found',
            ], 404);
        }

        return response()->json([
            'id' => $batch->id,
            'title' => $batch->title,
            'start_date' => date('Y-m-d', strtotime($batch->start_date)),
            'programs' => $batch->programs ?? [],
        ]);
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'start_date' => 'required|date',
            'programs' => 'required|array|min:1',
            'programs.*' => 'string',
        ]);

        $batch = Batch::findOrFail($id);

        $batch->title = $request->title;
        $batch->start_date = $request->start_date;
        $batch->programs = $request->programs;

        $batch->save();

        return response()->json([
            'success' => true,
            'message' => 'Batch updated successfully!'
        ]);
    }
 
}