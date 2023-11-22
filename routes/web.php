<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Models\stagiaire;
use App\Http\Controllers\CommentaireController;
use App\Http\Controllers\controllerressource;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
    */Route::get('stage/test', [controllerressource::class,'stimuler'])->name('stage.stimuler');

    Route::post('stage/test', [controllerressource::class,'stimuler'])->name('stage.stimuler');
    Route::get('/', function () {
        return view('welcome');
    });
    Route::resource("/Post",PostController::class)->middleware('cors');
    Route::resource("/stage",controllerressource::class)->middleware('cors');

    Route::middleware("cors")->group(function(){
    Route::get("/comment",[CommentaireController::class,'show']);
    });


    Route::middleware("guest")->group(function(){
        Route::get("/", function(){
            return view("welcome");
        });
        Route::get("/register", [InscriptionController::class, "show"]);
        Route::post("/register", [InscriptionController::class, "register"])
    ->name("register");
   });
    Route::middleware("auth")->group(function(){
        Route::get("/logout", [DeconnexionController::class, "show"]);
        Route::post("/logout", [DeconnexionController::class, "logout"])->name("logout");});

    Route::middleware("guest")->group(function(){
        Route::get("/login", [ConnexionController::class, "show"]);
        Route::post("/login", [ConnexionController::class, "login"])
        ->name("login");
        });