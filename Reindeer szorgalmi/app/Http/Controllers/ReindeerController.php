<?php

namespace App\Http\Controllers;

use App\Models\Reindeer;
use App\Http\Requests\StoreReindeerRequest;
use App\Http\Requests\UpdateReindeerRequest;
use Illuminate\View\View;

class ReindeerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reindeers = Reindeer::all();
        return view('reindeer.index', ['reindeers' => $reindeers]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreReindeerRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Reindeer $reindeer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Reindeer $reindeer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateReindeerRequest $request, Reindeer $reindeer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reindeer $reindeer)
    {
        //
    }
}
