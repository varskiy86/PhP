<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Country;

class CountryController extends Controller
{
    public function index()
    {
        $countries = Country::all();
        return view('countries.index', compact('countries'));
    }

    public function create()
    {
        return view('countries.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|unique:countries,name|max:255',
        ]);

        Country::create($validatedData);
        return redirect()->route('countries.index')->with('success', 'Страна успешно создана.');
    }

    public function edit(Country $country)
    {
        return view('countries.edit', compact('country'));
    }

    public function update(Request $request, Country $country)
    {
        $validatedData = $request->validate([
            'name' => 'required|unique:countries,name,'.$country->id.'|max:255',
        ]);

        $country->update($validatedData);
        return redirect()->route('countries.index')->with('success', 'Страна успешно обновлена.');
    }

    public function destroy(Country $country)
    {
        $country->delete();
        return redirect()->route('countries.index')->with('success', 'Страна удалена.');
    }
}