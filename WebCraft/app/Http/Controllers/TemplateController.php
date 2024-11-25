<?php

namespace App\Http\Controllers;

use App\Models\Template;
use Illuminate\Http\Request;

class TemplateController extends Controller
{
    public function index()
    {
        $templates = Template::all();
        return response()->json($templates);
    }

    public function show($id)
    {
        $template = Template::find($id);
        if ($template) {
            return response()->json($template);
        }
        return response()->json(['message' => 'Template not found'], 404);
    }

    public function store(Request $request)
    {
        $template = Template::create($request->all());
        return response()->json($template, 201);
    }

    public function update(Request $request, $id)
    {
        $template = Template::find($id);
        if ($template) {
            $template->update($request->all());
            return response()->json($template);
        }
        return response()->json(['message' => 'Template not found'], 404);
    }

    public function destroy($id)
    {
        $template = Template::find($id);
        if ($template) {
            $template->delete();
            return response()->json(['message' => 'Template deleted']);
        }
        return response()->json(['message' => 'Template not found'], 404);
    }


    public function listTemplates()
    {

        $templates = Template::all();
        return view('templates.template-gallery', compact('templates'));
    }



    public function showTemplate($id)
    {
        $template = Template::find($id);

        if (!$template) {
            abort(404, 'Template not found');
        }



        if ($template->nom === 'ILanding') {
            return view('templates.show-one', compact('template'));
        }

        return redirect('/');
    }






}
