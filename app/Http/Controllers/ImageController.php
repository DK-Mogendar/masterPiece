<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;
use App\Http\Controllers\Controller;

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
            'title' => 'required',
            'logblob' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $image = new Image();

        $image->title = $request->input('title');

        if ($request->hasFile('logblob')) {
            $imageFile = $request->file('logblob');
            $imageName = time() . '.' . $imageFile->getClientOriginalExtension();
            $imagePath = public_path('resources/uploads');
            $imageFile->move($imagePath, $imageName);

            $image->logblob = 'resources/uploads/' . $imageName;
        }
        $image->save();

        return redirect()->route('images.index')->with('success', 'Image uploaded successfully.');
    }
}