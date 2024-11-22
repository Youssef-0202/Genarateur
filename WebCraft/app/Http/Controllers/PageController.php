<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $pages = Page::all();
        return response()->json($pages);
    }

    public function show($id)
    {
        $page = Page::find($id);
        if ($page) {
            return response()->json($page);
        }
        return response()->json(['message' => 'Page not found'], 404);
    }

    public function store(Request $request)
    {
        $page = Page::create($request->all());
        return response()->json($page, 201);
    }

    public function update(Request $request, $id)
    {
        $page = Page::find($id);
        if ($page) {
            $page->update($request->all());
            return response()->json($page);
        }
        return response()->json(['message' => 'Page not found'], 404);
    }

    public function destroy($id)
    {
        $page = Page::find($id);
        if ($page) {
            $page->delete();
            return response()->json(['message' => 'Page deleted']);
        }
        return response()->json(['message' => 'Page not found'], 404);
    }
}
