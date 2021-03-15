<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get("/", function () {
    return view("welcome");
})->name("home");

Route::group(["middleware" => "auth"], function () {
    Route::get("/dashboard", function () {
        return view("dashboard");
    })->name("dashboard");
    Route::get("/post", [PostController::class, "index"])->name("post");
    Route::get("/post/create", [PostController::class, "create"])->name(
        "post.create"
    );
});

require __DIR__ . "/auth.php";
require __DIR__ . "/auth.php";
