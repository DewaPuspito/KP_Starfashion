<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Strip;

class StripController extends Controller
{
     /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function index(Request $request)
    {
        if($request->has('search')) {
            $data_strip = Strip::where('serial_number','LIKE', '%' .$request->search.'%')->get();
        } else {
        $data_strip = Strip::all();
        }
        return view ('stripcutter.strips', compact('data_strip'));
    }

    public function addstrip()
    {
        return view ('stripcutter.addstrip');
    }
    
    public function insertstrip(Request $request)
    {
        Strip::create($request->all());   
        return redirect()->route('strip')->with('success', 'Data Berhasil Dimasukkan');
    }

    public function showstrip(string $serial_number)
    {
        $data_strip= Strip::find($serial_number);
        return view ('stripcutter.showstrip', compact('data_strip'));
    }

    public function tampilstrip(string $serial_number)
    {
        $data_strip = Strip::find($serial_number);
        return view('stripcutter.tampilstrip', compact('data_strip'));
    }

    public function editstrip(Request $request, string $serial_number)
    {
        $data_strip = Strip::find($serial_number);
        $data_strip->update($request->all());
        return redirect()->route('strip')->with('success', 'Data Berhasil Diperbarui');
    }

    public function deletestrip(string $serial_number)
    {
        $data_strip = Strip::find($serial_number);
        $data_strip->delete();
        return redirect()->route('strip')->with('success', 'Data Berhasil Dihapus');
    }
}
