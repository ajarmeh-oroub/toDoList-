<?php

namespace App\Http\Controllers;
use App\Models\todo;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
  public function index(){
    // Check if the logged-in user is an admin

        // First check if the user is logged in
        if(auth()->check()) {
            // If logged in, check if they are an admin
            if(auth()->user()->is_admin) {
                // Admin-specific logic
                return view('dashboard', ['users' => Todo::all()]);
            } else {
                // Non-admin logic, redirect to login page or other page
                return redirect('/login'); // Or to a different page like home
            }
        } else {
            // If not logged in, redirect to the login page
            return redirect('/login');
        }
    }
    


}
