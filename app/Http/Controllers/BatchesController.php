<?php

namespace App\Http\Controllers;

use App\Models\Batches;
use Illuminate\Http\Request;

class BatchesController extends Controller
{
    public function index()
    {
        return view('layout.batches.index');
    }

    public function create()
    {
    
    }

    public function store(Request $request)
    {
        
    }

    public function show(Batches $batches)
    {
        
    }
    public function edit(Batches $batches)
    {
        
    }

   
}
