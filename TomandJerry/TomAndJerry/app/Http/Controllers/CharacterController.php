<?php

namespace App\Http\Controllers;

use App\Models\Character;
use App\Http\Requests\StoreCharacterRequest;
use App\Http\Requests\UpdateCharacterRequest;

use function Laravel\Prompts\alert;

class CharacterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $characters = Character::all();
        return view('characters.index', ['characters' => $characters]); //indexnek adja vissza (típus nélkül), miként és mit adom vissza
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('characters.create'); //ott fogom megadni az adatokat, így csak create oldalt kell visszaadjam
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCharacterRequest $request) //kell a createhez, ellenőrzi
    {
        Character::create($request->all()); //mi kell ahhoz, hogy egy sikeres létrehozás legyen, sima nyíl hozzárendel, új adattagot hozok létre
        //return 'Tárolva'; //jelzi, hogy mentve lettek az adatok
        return view('layouts.welcome');
    }

    /**
     * Display the specified resource. - adott cuccokat mutatja külön-külön
     */
    public function show(Character $character)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Character $character)
    {
        return view('characters.edit', ['character' => $character]); //'character' átviszi az edit oldalra az adatokat
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCharacterRequest $request, Character $character) //kell az edithez, ellenőrzi; bemeneti érték
    {
        $character->update($request->all()); //ha nem lenne minden módosítható, akkor: [módosíthatóAdat1, módosíthatóAdat2], átfutattom a requets
        return view('layouts.welcome');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Character $character)
    {
        $character->delete();
        //return 'Törölve'
        return view('layouts.welcome');
    }
}
