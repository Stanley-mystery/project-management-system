<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/*
    |--------------------------------------------------------------------------
    | Project Manager Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles actions related to the Project Manager's functionalities in the
    | application. It is responsible for displaying the project manager dashboard and 
    | potentially other project manager-related actions, such as managing projects, assigning tasks, etc.
    |
    */

class ProjectManagerController extends Controller
{
    /**
     * Display the project manager dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('project_manager.dashboard');
    }
}
