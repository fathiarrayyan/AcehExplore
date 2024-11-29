<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Destination;
use Illuminate\Http\Request;

class DestinationController extends Controller
{
    public function index()
    {
        $destinations = Destination::all();
        return view('admin.destinations.index', compact('destinations'));
    }

    public function create()
    {
        return view('admin.destinations.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif',
        ]);

        $destination = new Destination();
        $destination->name = $request->name;
        $destination->description = $request->description;

        if ($request->hasFile('image')) {
            $destination->image = $request->file('image')->store('destinations');
        }

        $destination->save();

        return redirect()->route('admin.destinations.index')->with('success', 'Destinasi berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $destination = Destination::findOrFail($id);
        return view('admin.destinations.edit', compact('destination'));
    }

    public function update(Request $request, $id)
    {
        $destination = Destination::findOrFail($id);
        $destination->update($request->all());

        if ($request->hasFile('image')) {
            $destination->image = $request->file('image')->store('destinations');
            $destination->save();
        }

        return redirect()->route('admin.destinations.index')->with('success', 'Destinasi berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $destination = Destination::findOrFail($id);
        $destination->delete();

        return redirect()->route('admin.destinations.index')->with('success', 'Destinasi berhasil dihapus!');
    }

    public function loadMoreDestinations(Request $request)
    {
        $offset = $request->offset;
        $destinations = \App\Models\Destination::skip($offset)->take(4)->get();

        return response()->json([
            'data' => $destinations
        ]);
    }
}
