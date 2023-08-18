<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image; // Stellen Sie sicher, dass das korrekte Model importiert wird
use App\Http\Controllers\Controller; // Importieren Sie den Controller

class ImageController extends Controller
{
    public function index()
    {
        $images = Image::all();
        return view('images.index', compact('images'));
    }

    public function show($id)
    {
        $image = Image::findOrFail($id);
        return view('images.show', compact('image'));
    }

    public function create()
    {
        return view('images.upload');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $image = new Image();

        $image->name = $request->input('name');

        if ($request->hasFile('image')) {
            $imageFile = $request->file('image');
            $imageName = time() . '.' . $imageFile->getClientOriginalExtension();
            $imagePath = public_path('resources/uploads'); // Hier wird der Pfad angepasst
            $imageFile->move($imagePath, $imageName);
        
            $image->image_data = 'resources/uploads/' . $imageName; // Hier wird der Pfad angepasst
        }
        $image->save();

        return redirect()->route('images.index')->with('success', 'Image uploaded successfully.');
    }
}
