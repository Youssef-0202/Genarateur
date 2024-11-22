<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\FormController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\TemplateController;
use App\Http\Controllers\StructureController;
use App\Http\Controllers\CssController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ComponentController;
use App\Http\Controllers\TextController;
use App\Http\Controllers\ImageController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::apiResource('users', UserController::class);
Route::apiResource('websites', WebsiteController::class);
Route::apiResource('templates', TemplateController::class);
Route::apiResource('structures', StructureController::class);
Route::apiResource('css', CssController::class);
Route::apiResource('pages', PageController::class);
Route::apiResource('components', ComponentController::class);
Route::apiResource('texts', TextController::class);
Route::apiResource('images', ImageController::class);
Route::apiResource('forms', FormController::class);
