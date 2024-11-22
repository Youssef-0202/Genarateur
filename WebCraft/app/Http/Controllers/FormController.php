<?php

namespace App\Http\Controllers;

use App\Models\Form;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function index()
    {
        $forms = Form::all();
        return response()->json($forms);
    }

    public function show($id)
    {
        $form = Form::find($id);
        if ($form) {
            return response()->json($form);
        }
        return response()->json(['message' => 'Form not found'], 404);
    }

    public function store(Request $request)
    {
        $form = Form::create($request->all());
        return response()->json($form, 201);
    }

    public function update(Request $request, $id)
    {
        $form = Form::find($id);
        if ($form) {
            $form->update($request->all());
            return response()->json($form);
        }
        return response()->json(['message' => 'Form not found'], 404);
    }

    public function destroy($id)
    {
        $form = Form::find($id);
        if ($form) {
            $form->delete();
            return response()->json(['message' => 'Form deleted']);
        }
        return response()->json(['message' => 'Form not found'], 404);
    }
}
