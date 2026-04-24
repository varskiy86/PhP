<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use use App\Models\Attraction;

class AttractionController extends Controller
{
    public function index()
    {
        $attractions = Attraction::all();
        return view('attractions.index', compact('attractions'));
    }

    public function create()
    {
        return view('attractions.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|unique:attractions,name|max:255',
        ]);

        Attraction::create($validatedData);
        return redirect()->route('attractions.index')->with('success', 'Страна успешно создана.');
    }

    public function edit(Attraction $attractions)
    {
        return view('attractions.edit', compact('attraction'));
    }

    public function update(Request $request, Attraction $attractions)
    {
        $validatedData = $request->validate([
            'name' => 'required|unique:attractions,name,'.$attraction->id.'|max:255',
        ]);

        $attractions->update($validatedData);
        return redirect()->route('attractions.index')->with('success', 'Страна успешно обновлена.');
    }

    public function destroy(Attraction $attractions)
    {
        $attractions->delete();
        return redirect()->route('attractions.index')->with('success', 'Страна удалена.');
    }
}
