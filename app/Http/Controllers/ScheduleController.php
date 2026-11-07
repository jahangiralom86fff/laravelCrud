<?php

namespace App\Http\Controllers;

use App\Models\Schedule;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{

    public function index()
    {
        
    }
    public function create()
    {
        return view('layout.shedule.create');
    }
    public function store(Request $request)
    {
        $data = $request->all();

        // Session-এ স্থায়ীভাবে রাখবে
        session()->put('submittedData', $data);

        return redirect()->route('schedule.index');
    }

    public function show(Schedule $schedule)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Schedule $schedule)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Schedule $schedule)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Schedule $schedule)
    {
        //
    }
}
