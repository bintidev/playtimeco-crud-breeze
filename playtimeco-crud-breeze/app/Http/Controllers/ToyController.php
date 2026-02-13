<?php

namespace App\Http\Controllers;

use App\Models\Toy;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class ToyController extends Controller
{
    /**
     * Display a listing of the toys existing at the moment.
     */
    public function index()
    {
        $toys = Toy::with('user_id')->get();

        return view('toys.index', compact('toys'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('toys.create');
    }

    /**
     * Store a newly experiment monitoring in storage
     */
    public function store(Request $request)
    {

        $request->validate([
            'user_id' => 'nullable|integer',
            'alias' => 'required|string|max:100',
            'name' => 'required|string|max:50',
            'gender' => 'required|string',
            'height' => 'required|float',
            'weight' => 'required|float',
            'subject' => 'required|integer',
            'status' => 'required|string',
            'creation_date' => 'required|date',
            'species' => 'required|string|max:100',
            'description' => 'nullable|string|max:500'
        ]);

        Toy::create($request->all());

        return redirect()->route('toys.index')
                        ->with('success', 'Toy monitoring successfully initiated');

    }


    /**
     * Display the specified toy.
     */
    public function show(Toy $toy)
    {

        $display = Toy::find($toy->id);

        return redirect()->route('toys.index')
                        ->with('success', 'Toy monitoring successfully initiated');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Toy $toy)
    {
        return view('toys.edit', compact('toy'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Toy $toy)
    {
        $request->validate([
            'user_id' => 'nullable|integer',
            'alias' => 'required|string|max:100',
            'name' => 'required|string|max:50',
            'gender' => 'required|string',
            'height' => 'required|float',
            'weight' => 'required|float',
            'subject' => 'required|integer',
            'status' => 'required|string',
            'creation_date' => 'required|date',
            'species' => 'required|string|max:100',
            'description' => 'nullable|string|max:500'
        ]);

        $toy->update($request->all());
        return redirect()->route('toys.index')->with('success', 'Toy progress reported successfully.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Toy $toy)
    {

        $toy->delete();
        return redirect()->route('toys.index')->with('success', 'Toy failed.');

    }
}
