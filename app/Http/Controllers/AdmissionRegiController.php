<?php

namespace App\Http\Controllers;

use App\Models\Admission_regi;
use Illuminate\Http\Request;

class AdmissionRegiController extends Controller
{
    
    public function index()
    {
        //
    }

    public function create()
    {
        return view('layout.admission_registration.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Admission_regi $admission_regi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Admission_regi $admission_regi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Admission_regi $admission_regi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Admission_regi $admission_regi)
    {
        //
    }
}
