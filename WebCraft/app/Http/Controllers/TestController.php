<?php

namespace App\Http\Controllers;

use App\Models\Template;
use Illuminate\Http\Request;

class TestController extends Controller
{
    function index($id){
         // Retrieve the template with its associated structure and css
         $template = Template::with(['structure', 'css'])->find($id);
         return view('test', compact('template'));
    }
}
