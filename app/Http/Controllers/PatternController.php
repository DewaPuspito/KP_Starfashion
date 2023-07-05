<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pattern;

class PatternController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->has('search')) {
            $data_pattern = Pattern::where('serial_number','LIKE', '%' .$request->search.'%')->get();
        } else {
        $data_pattern = Pattern::all();
        }
        return view ('pattern.patterns', compact('data_pattern'));
    }

    public function addpattern()
    {
        return view ('pattern.addpattern');
    }
    
    public function insertpattern(Request $request)
    {
        Pattern::create($request->all());   
        return redirect()->route('pattern')->with('success', 'Data Berhasil Dimasukkan');
    }

    public function showpattern(string $serial_number)
    {
        $data_pattern = Pattern::find($serial_number);
        return view ('pattern.showpattern', compact('data_pattern'));
    }

    public function tampilpattern(string $serial_number)
    {
        $data_pattern = Pattern::find($serial_number);
        return view('pattern.tampilpattern', compact('data_pattern'));
    }

    public function editpattern(Request $request, string $serial_number)
    {
        $data_pattern = Pattern::find($serial_number);
        $data_pattern->update($request->all());
        return redirect()->route('pattern')->with('success', 'Data Berhasil Diperbarui');
    }

    public function deletepattern(string $serial_number)
    {
        $data_pattern = Pattern::find($serial_number);
        $data_pattern->delete();
        return redirect()->route('pattern')->with('success', 'Data Berhasil Dihapus');
    }
}
