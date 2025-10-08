<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExampleController extends Controller
{
    public function showMessage(Request $request)
       {
           // Set a temporary flash message (success type)
           $request->session()->flash('success', 'This is a temporary success message! It will disappear after refresh.');
           
           // Optional: Set an error message instead (uncomment below and comment the success line)
           // $request->session()->flash('error', 'Oops! Something went wrong. Try again.');
           
           // Redirect to the home page (or any route where you want to display the message)
           return redirect()->route('home');
       }
}
