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
        // Verarbeiten Sie das Hochladen des Bilds und speichern Sie den Datensatz in der Datenbank
        // ...
    }
}