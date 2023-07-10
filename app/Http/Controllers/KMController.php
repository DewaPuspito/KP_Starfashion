<?php

namespace App\Http\Controllers;

use App\Models\KM;
use App\Exports\KMExport;
use App\Models\Sparepart;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class KMController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->has('search')) {
            $data_km_cutting = KM::where('serial_number','LIKE', '%' .$request->search.'%')->get();
        } else {
        $data_km_cutting = KM::all();
        }
        return view ('kmcutting.kmcuttings', compact('data_km_cutting'));
    }

    public function addkmcutting()
    {
        return view ('kmcutting.addkmcutting');
    }
    
    public function insertkmcutting(Request $request)
    {
        KM::create($request->all());   
        return redirect()->route('km-cutting')->with('success', 'Data Berhasil Dimasukkan');
    }

    public function showkmcutting(string $serial_number)
    {
        $data_km_cutting = KM::find($serial_number);
        return view ('kmcutting.showkmcutting', compact('data_km_cutting'));
    }

    public function tampilkmcutting(string $serial_number)
    {
        $data_km_cutting = KM::find($serial_number);
        $data_sparepart = Sparepart::all();
        return view('kmcutting.tampilkmcutting', compact('data_km_cutting', 'data_sparepart'));
    }

    public function editkmcutting(Request $request, string $serial_number)
    {
        $data_km_cutting = KM::find($serial_number);
        $data_km_cutting->update($request->all());
        return redirect()->route('km-cutting')->with('success', 'Data Berhasil Diperbarui');
    }

    public function deletekmcutting(string $serial_number)
    {
        $data_km_cutting = KM::find($serial_number);
        $data_km_cutting->delete();               
        return redirect()->route('km-cutting')->with('success', 'Data Berhasil Dihapus');
    }

    public function exportkmcutting() {
        return Excel::download(new KMExport, 'datakmcutting.xlsx');
    }
}
