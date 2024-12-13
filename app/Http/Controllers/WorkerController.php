<?php

namespace App\Http\Controllers;

use App\Models\worker;
use Illuminate\Http\Request;

class WorkerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Worker::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

    
        $worker = Worker::create($request->all());
    
        return response()->json(['message' => 'Worker created successfully', 'worker' => $worker], 201);
    }
    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $worker = Worker::find($id);
        if (!$worker) {
            return response()->json(['message' => 'Worker not found'], 404);
        }

        return $worker;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $worker = worker::find($id);
        if (!$worker) {
            return response()->json(['message' => 'Worker not found'], 404);
        }
        $worker->update($request->all());
        return response()->json($worker, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $worker = worker::find($id);
        if (!$worker) {
            return response()->json(['message' => 'Worker not found'], 404);
        }
        $worker->delete();
        return response()->json(['message' => 'Worker deleted successfully'], 200);
    }
}
