<?php

namespace App\Http\Controllers;

use App\Models\Structure;
use Illuminate\Http\Request;

class StructureController extends Controller
{
    public function index()
    {
        $structures = Structure::all();
        return response()->json($structures);
    }

    public function show($id)
    {
        $structure = Structure::find($id);
        if ($structure) {
            return response()->json($structure);
        }
        return response()->json(['message' => 'Structure not found'], 404);
    }

    public function store(Request $request)
    {
        $structure = Structure::create($request->all());
        return response()->json($structure, 201);
    }

    public function update(Request $request, $id)
    {
        $structure = Structure::find($id);
        if ($structure) {
            $structure->update($request->all());
            return response()->json($structure);
        }
        return response()->json(['message' => 'Structure not found'], 404);
    }

    public function destroy($id)
    {
        $structure = Structure::find($id);
        if ($structure) {
            $structure->delete();
            return response()->json(['message' => 'Structure deleted']);
        }
        return response()->json(['message' => 'Structure not found'], 404);
    }
}
