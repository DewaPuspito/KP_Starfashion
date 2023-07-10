<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CuttingMenuController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function cuttingindex()
    {
        return view('cuttingindex');
    }
}
