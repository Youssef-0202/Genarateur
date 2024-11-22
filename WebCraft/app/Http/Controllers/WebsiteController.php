<?php

namespace App\Http\Controllers;

use App\Models\Website;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{public function index()
    {
        $websites = Website::all();
        return response()->json($websites);
    }

    public function show($id)
    {
        $website = Website::find($id);
        if ($website) {
            return response()->json($website);
        }
        return response()->json(['message' => 'Website not found'], 404);
    }

    public function store(Request $request)
    {
        $website = Website::create($request->all());
        return response()->json($website, 201);
    }

    public function update(Request $request, $id)
    {
        $website = Website::find($id);
        if ($website) {
            $website->update($request->all());
            return response()->json($website);
        }
        return response()->json(['message' => 'Website not found'], 404);
    }

    public function destroy($id)
    {
        $website = Website::find($id);
        if ($website) {
            $website->delete();
            return response()->json(['message' => 'Website deleted']);
        }
        return response()->json(['message' => 'Website not found'], 404);
    }
}
