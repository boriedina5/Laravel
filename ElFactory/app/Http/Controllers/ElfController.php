<?php

namespace App\Http\Controllers;

use App\Models\Elf;
use App\Http\Requests\StoreElfRequest;
use App\Http\Requests\UpdateElfRequest;

class ElfController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //echo "Here are elves"; - lekérjük az összes elfet, le is kér és tömbösít is
        $elves = Elf::all();
        $elves = Elf::take(10)->get();
        //dd($elves); //kiíratjuk
        return view('welcome', ["elves" => $elves]);//irányítson vissza
        //welcome page-re küldjük $elves válzónkat, amit ott $manok neven fogunk használni
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
    public function store(StoreElfRequest $request)
    {
        //Elf::create($request->all()); - basic
        //ha bele kell nyúlni a modellbe valami miatt
        $elf = new Elf($request->all());
        $elf->toy = "Fluxuskondenzátor";
        $elf->profile_pic = "placeholder.png";
        $elf -> save();

        return back()->with("success", "Hell Yeah Elf is on the sh");

    }

    /**
     * Display the specified resource.
     */
    public function show(Elf $elf)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Elf $elf)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateElfRequest $request, Elf $elf)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Elf $elf)
    {
        //
    }
}
