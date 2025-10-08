<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExampleController;

   // Route to trigger the flash message (e.g., visit /show-message)
   Route::get('/show-message', [ExampleController::class, 'showMessage'])->name('show.message');
   // Home route to display the message
   Route::get('/', function () {
       return view('home');
   })->name('home');

     Route::get('/show-error', function (Request $request) {
       $request->session()->flash('error', 'This is a temporary error message!');
       return redirect()->route('home');
   })->name('show.error');
   

   
