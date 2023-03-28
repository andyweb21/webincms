<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.dashboard');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function setting()
    {
        return view('admin.setting');
    }

    public function update_setting(Request $request, $id)
    {
        //
    }

    public function profile()
    {
        return view('admin.profile');
    }
}
