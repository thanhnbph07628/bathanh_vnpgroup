<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerBase extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('frontend.index');
    }

    public function recruitment()
    {
        return view('frontend.recruitment');
    }

    public function recruitment_detail()
    {
        return view('frontend.recruitment_detail');
    }
}
