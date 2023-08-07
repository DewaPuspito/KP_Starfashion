<?php

namespace App\Http\Controllers;

use App\Models\Pipping;
use App\Models\Sparepart;
use Illuminate\Http\Request;
use App\Exports\PippingExport;
use OwenIt\Auditing\Models\Audit;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Session;

class PippingController extends Controller
{
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function index(Request $request)
    {
        $data_pipping = Pipping::all();
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
        Session::put('url', request()->fullUrl());
        return view ('rewindingpipping.showpipping', compact('data_pipping'));
    }

    public function tampilpipping(string $serial_number)
    {
        $data_pipping = Pipping::find($serial_number);
        $data_sparepart = Sparepart::all();
        return view('rewindingpipping.tampilpipping', compact('data_pipping', 'data_sparepart'));
    }

    public function editpipping(Request $request, string $serial_number)
    {
        $data_pipping = Pipping::find($serial_number);
        if (!$data_pipping) {
            return redirect()->back()->with('error', 'Invalid serial number or record not found.');
        }
        $old_serial_number = $data_pipping->serial_number;
        $data_pipping->update($request->all());
        $new_serial_number = $data_pipping->serial_number;
        $returnRoute = Session::pull('url', null);
        if ($returnRoute) {
            $returnRoute = str_replace($old_serial_number, $new_serial_number, $returnRoute);
            return redirect($returnRoute)->with('success', 'Data Berhasil Diperbarui');
        }
        return redirect()->route('showpipping', ['serial_number' => $new_serial_number]);
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

    public function historypipping(string $serial_number)
    {
        $data_pipping = Pipping::find($serial_number);
        $audits = $data_pipping->audits;
        return view('rewindingpipping.historypipping', compact('audits'));
    }

    public function deletehistorypipping(string $id)
    {
    $audit = Audit::findOrFail($id);
    $audit->delete();
    return redirect()->back()->with('success', 'History Log Deleted Successfully');
    }
}
