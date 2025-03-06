<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        if (auth()->user()->role === 'admin') {
            return view('admin.dashboard');
        } elseif (auth()->user()->role === 'customer') {
            return view('customer.dashboard');
        } else {
            abort(403, 'Unauthorized.');
        }
    }
}
