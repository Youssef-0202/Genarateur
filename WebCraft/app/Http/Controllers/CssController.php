<?php

namespace App\Http\Controllers;

use App\Models\Css;
use Illuminate\Http\Request;

class CssController extends Controller
{
    public function index()
    {
        $css = Css::all();
        return response()->json($css);
    }

    public function show($id)
    {
        $css = Css::find($id);
        if ($css) {
            return response()->json($css);
        }
        return response()->json(['message' => 'CSS not found'], 404);
    }

    public function store(Request $request)
    {
        $css = Css::create($request->all());
        return response()->json($css, 201);
    }

    public function update(Request $request, $id)
    {
        $css = Css::find($id);
        if ($css) {
            $css->update($request->all());
            return response()->json($css);
        }
        return response()->json(['message' => 'CSS not found'], 404);
    }

    public function destroy($id)
    {
        $css = Css::find($id);
        if ($css) {
            $css->delete();
            return response()->json(['message' => 'CSS deleted']);
        }
        return response()->json(['message' => 'CSS not found'], 404);
    }
}