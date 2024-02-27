<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBatchRequest;
use App\Http\Requests\UpdateBatchRequest;
use App\Models\Batch;
use App\Models\Course;

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
        $batchs = Course::all();
        return view('batches.create')->with('batchs', $batchs); //, compact('courses'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBatchRequest $request)
    {
        Batch::create($request->validated());
        return back()->with('success', 'Batch Added Success');
    }

    /**
     * Display the specified resource.
     */
    public function show(Batch $batch)
    {
        return view('batches.show')->with('batch', $batch);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Batch $batch)
    {
        return view('batches.edit')->with('batch', $batch);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBatchRequest $request, Batch $batch)
    {
        $data = $request->validated();
        $batch->update($data);
        return back()->with('success', 'Batch edited isa success');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Batch $batch)
    {
        $batch->delete();
        return back()->with('success', 'Batch Delete isa success');
    }
}
