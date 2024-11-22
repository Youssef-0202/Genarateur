<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function index()
    {
        $images = Image::all();
        return response()->json($images);
    }

    public function show($id)
    {
        $image = Image::find($id);
        if ($image) {
            return response()->json($image);
        }
        return response()->json(['message' => 'Image not found'], 404);
    }

    public function store(Request $request)
    {
        $image = Image::create($request->all());
        return response()->json($image, 201);
    }

    public function update(Request $request, $id)
    {
        $image = Image::find($id);
        if ($image) {
            $image->update($request->all());
            return response()->json($image);
        }
        return response()->json(['message' => 'Image not found'], 404);
    }

    public function destroy($id)
    {
        $image = Image::find($id);
        if ($image) {
            $image->delete();
            return response()->json(['message' => 'Image deleted']);
        }
        return response()->json(['message' => 'Image not found'], 404);
    }
}
