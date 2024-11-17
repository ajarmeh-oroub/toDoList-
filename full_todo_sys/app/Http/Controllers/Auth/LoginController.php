<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    protected function authenticated(Request $request, $user)
    {
        if ($user->is_admin) {
            // Redirect admin user to the dashboard
            return redirect()->route('admin.dashboard');
        } else {
            // Redirect regular user to the todos index
            return redirect()->route('todos.index');
        }
    }
}
