<?php

namespace App\Http\Controllers;

// model ko import kryy gyy to use
use App\Models\Property;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    // index page pr sb properties show krny k lye
    public function index()
    {
        $properties = Property::all();

        return view('properties.index', ['properties' => $properties]);
    }

    // form show krny k lye jahan new property add kr skty hn
    public function create()
    {
        return view('properties.create');
    }

    // new property store krny k lye
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'price' => 'required|numeric',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('properties', 'public');
            $validated['image'] = $path;
        }

        Property::create($validated);

        return redirect('/properties')->with('success', 'Property added successfully!');
    }

    // specific property ka detail show krny k lye
    public function show($id)
    {
        $property = Property::findOrFail($id);

        return view('properties.show', ['property' => $property]);
    }

    // property edit krny k lye form show krny k lye
    public function edit($id)
    {
        $property = Property::findOrFail($id);

        return view('properties.edit', ['property' => $property]);
    }

    // property update krny k lye
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'price' => 'required|numeric',
            'description' => 'required',
        ]);

        $property = Property::findOrFail($id);
        $property->update($validated);

        return redirect('/properties')->with('success', 'Property updated!');
    }

    // property delete krny k lye
    public function destroy($id)
    {
        $property = Property::findOrFail($id);
        $property->delete();

        return redirect('/properties')->with('success', 'Property deleted successfully!');
    }
}
