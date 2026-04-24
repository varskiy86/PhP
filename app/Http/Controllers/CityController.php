<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use use App\Models\City;

class CityController extends Controller
{
    public function index()
    {
        $cytes = City::all();
        return view('cytes.index', compact('cytes'));
    }

    public function create()
    {
        return view('cytes.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|unique:cytes,name|max:255',
        ]);

        City::create($validatedData);
        return redirect()->route('cytes.index')->with('success', 'Страна успешно создана.');
    }

    public function edit(City $cytes)
    {
        return view('cytes.edit', compact('city'));
    }

    public function update(Request $request, City $cytes)
    {
        $validatedData = $request->validate([
            'name' => 'required|unique:cytes,name,'.$city->id.'|max:255',
        ]);

        $cytes->update($validatedData);
        return redirect()->route('cytes.index')->with('success', 'Страна успешно обновлена.');
    }

    public function destroy(City $cytes)
    {
        $cytes->delete();
        return redirect()->route('cytes.index')->with('success', 'Страна удалена.');
    }
}
