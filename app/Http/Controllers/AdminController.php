<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/*
    |--------------------------------------------------------------------------
    | Admin Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles actions related to the Admin's functionalities in the 
    | application. It is responsible for displaying the admin dashboard and 
    | potentially any other admin-related actions.
    |
    */

class AdminController extends Controller
{
    /**
     * Display the admin dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('admin.dashboard');
    }
}
