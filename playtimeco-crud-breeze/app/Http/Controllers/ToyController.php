<?php

namespace App\Http\Controllers;

use App\Models\Toy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Exception;

class ToyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $toys = Toy::all();
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
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'user_id' => 'nullable|integer',
            'alias' => 'required|string|max:100',
            'name' => 'required|string|max:50',
            'gender' => 'required|string',
            'height' => 'nullable|numeric',
            'weight' => 'nullable|numeric',
            'subject' => 'required|integer|unique:toys,subject',
            'status' => 'required|string',
            'creation_date' => 'required|date',
            'species' => 'required|string|max:100',
            'description' => 'nullable|string|max:500',
            'visual' => 'nullable|string|max:500'
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput()
                ->with('error', 'Please fix the validation errors.');
        }

        try {
            Toy::create($request->all());
            return redirect()->route('toys.index')
                ->with('success', 'Toy created successfully!');
                
        } catch (Exception $e) {
            return redirect()->back()
                ->withInput()
                ->with('error', 'Failed to create toy. Please try again.');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        try {
            $display = Toy::findOrFail($id);
            return view('toys.show', compact('display'));
            
        } catch (ModelNotFoundException $e) {
            return redirect()->route('toys.index')
                ->with('error', 'Toy not found!');
                
        } catch (Exception $e) {
            return redirect()->route('toys.index')
                ->with('error', 'An error occurred while loading the toy.');
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        try {
            $toy = Toy::findOrFail($id);
            return view('toys.edit', compact('toy'));
            
        } catch (ModelNotFoundException $e) {
            return redirect()->route('toys.index')
                ->with('error', 'Toy not found!');
                
        } catch (Exception $e) {
            return redirect()->route('toys.index')
                ->with('error', 'An error occurred while loading the toy for editing.');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try {
            $toy = Toy::findOrFail($id);
            
            $validator = Validator::make($request->all(), [
                'user_id' => 'nullable|integer',
                'alias' => 'required|string|max:100',
                'name' => 'required|string|max:50',
                'gender' => 'required|string',
                'height' => 'nullable|numeric',
                'weight' => 'nullable|numeric',
                'subject' => 'required|integer|unique:toys,subject,' . $toy->id,
                'status' => 'required|string',
                'creation_date' => 'required|date',
                'species' => 'required|string|max:100',
                'description' => 'nullable|string|max:500',
                'visual' => 'nullable|string|max:500'
            ]);

            if ($validator->fails()) {
                return redirect()->back()
                    ->withErrors($validator)
                    ->withInput()
                    ->with('error', 'Please fix the validation errors.');
            }

            $toy->update($request->all());
            
            return redirect()->route('toys.index')
                ->with('success', 'Toy updated successfully!');
                
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            return redirect()->route('toys.index')
                ->with('error', 'Toy not found!');
                
        } catch (\Exception $e) {
            return redirect()->back()
                ->withInput()
                ->with('error', 'Failed to update toy. Please try again.');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $toy = Toy::findOrFail($id);
            
            // Opcional: Verificar condiciones antes de eliminar
            if ($toy->status === 'Alive') {
                return redirect()->route('toys.index')
                    ->with('error', 'Cannot delete an alive toy! Change status first.');
            }
            
            $toy->delete();
            
            return redirect()->route('toys.index')
                ->with('success', 'Toy deleted successfully!');
                
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            return redirect()->route('toys.index')
                ->with('error', 'Toy not found!');
                
        } catch (\Exception $e) {
            return redirect()->route('toys.index')
                ->with('error', 'Failed to delete toy. Please try again.');
        }
    }
}