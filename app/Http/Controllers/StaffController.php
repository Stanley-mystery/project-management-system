<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/*
    |--------------------------------------------------------------------------
    | Staff Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles actions related to the Staff's (e.g., Developers) functionalities in the
    | application. It is responsible for displaying the staff dashboard and potentially other staff-related
    | actions such as viewing tasks, working on assigned projects, etc.
    |
    */

class StaffController extends Controller
{
    /**
     * Display the staff dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('staff.dashboard');  
    }
}
