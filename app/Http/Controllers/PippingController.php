<?php

namespace App\Http\Controllers;

use App\Models\Pipping;
use Illuminate\Http\Request;
use App\Exports\PippingExport;
use Maatwebsite\Excel\Facades\Excel;

class PippingController extends Controller
{
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function index(Request $request)
    {
        if($request->has('search')) {
            $data_pipping = Pipping::where('serial_number','LIKE', '%' .$request->search.'%')->get();
        } else {
        $data_pipping = Pipping::all();
        }
        return view ('rewindingpipping.pippings', compact('data_pipping'));
    }

    public function addpipping()
    {
        return view ('rewindingpipping.addpipping');
    }
    
    public function insertpipping(Request $request)
    {
        Pipping::create($request->all());   
        return redirect()->route('pipping')->with('success', 'Data Berhasil Dimasukkan');
    }

    public function showpipping(string $serial_number)
    {
        $data_pipping= Pipping::find($serial_number);
        return view ('rewindingpipping.showpipping', compact('data_pipping'));
    }

    public function tampilpipping(string $serial_number)
    {
        $data_pipping = Pipping::find($serial_number);
        return view('rewindingpipping.tampilpipping', compact('data_pipping'));
    }

    public function editpipping(Request $request, string $serial_number)
    {
        $data_pipping = Pipping::find($serial_number);
        $data_pipping->update($request->all());
        return redirect()->route('pipping')->with('success', 'Data Berhasil Diperbarui');
    }

    public function deletepipping(string $serial_number)
    {
        $data_pipping = Pipping::find($serial_number);
        $data_pipping->delete();
        return redirect()->route('pipping')->with('success', 'Data Berhasil Dihapus');
    }

    public function exportpipping() {
        return Excel::download(new PippingExport, 'datapipping.xlsx');
    }
}
