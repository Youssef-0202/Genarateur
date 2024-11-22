<?php

namespace App\Http\Controllers;

use App\Models\Component;
use Illuminate\Http\Request;

class ComponentController extends Controller
{
    public function index()
    {
        $components = Component::all();
        return response()->json($components);
    }

    public function show($id)
    {
        $component = Component::find($id);
        if ($component) {
            return response()->json($component);
        }
        return response()->json(['message' => 'Component not found'], 404);
    }

    public function store(Request $request)
    {
        $component = Component::create($request->all());
        return response()->json($component, 201);
    }

    public function update(Request $request, $id)
    {
        $component = Component::find($id);
        if ($component) {
            $component->update($request->all());
            return response()->json($component);
        }
        return response()->json(['message' => 'Component not found'], 404);
    }

    public function destroy($id)
    {
        $component = Component::find($id);
        if ($component) {
            $component->delete();
            return response()->json(['message' => 'Component deleted']);
        }
        return response()->json(['message' => 'Component not found'], 404);
    }
}
