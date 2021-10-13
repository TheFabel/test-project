<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post("products", [\App\Http\Controllers\ProductsController::class, "all"]);
Route::post("categories", [\App\Http\Controllers\CategoriesController::class, "all"]);
