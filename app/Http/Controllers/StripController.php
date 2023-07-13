<?php

namespace App\Http\Controllers;

use App\Models\Strip;
use App\Models\Sparepart;
use App\Exports\StripExport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use OwenIt\Auditing\Models\Audit;

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
        $audits = $data_strip->audits; // Retrieve audits for the sewing sample
        return view ('stripcutter.showstrip', compact('data_strip', 'audits'));
    }

    public function tampilstrip(string $serial_number)
    {
        $data_strip = Strip::find($serial_number);
        $data_sparepart = Sparepart::all();
        return view('stripcutter.tampilstrip', compact('data_strip', 'data_sparepart'));
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

    public function exportstrip() {
        return Excel::download(new StripExport, 'datastrip.xlsx');
    }
}
