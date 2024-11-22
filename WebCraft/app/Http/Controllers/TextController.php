<?php

namespace App\Http\Controllers;

use App\Models\Text;
use Illuminate\Http\Request;

class TextController extends Controller
{
    public function index()
    {
        $texts = Text::all();
        return response()->json($texts);
    }

    public function show($id)
    {
        $text = Text::find($id);
        if ($text) {
            return response()->json($text);
        }
        return response()->json(['message' => 'Text not found'], 404);
    }

    public function store(Request $request)
    {
        $text = Text::create($request->all());
        return response()->json($text, 201);
    }

    public function update(Request $request, $id)
    {
        $text = Text::find($id);
        if ($text) {
            $text->update($request->all());
            return response()->json($text);
        }
        return response()->json(['message' => 'Text not found'], 404);
    }

    public function destroy($id)
    {
        $text = Text::find($id);
        if ($text) {
            $text->delete();
            return response()->json(['message' => 'Text deleted']);
        }
        return response()->json(['message' => 'Text not found'], 404);
    }
}
