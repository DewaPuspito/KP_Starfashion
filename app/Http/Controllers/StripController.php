<?php

namespace App\Http\Controllers;

use App\Models\Strip;
use App\Models\Sparepart;
use App\Exports\StripExport;
use Illuminate\Http\Request;
use OwenIt\Auditing\Models\Audit;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Session;

class StripController extends Controller
{
     /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function index(Request $request)
    {
        $data_strip = Strip::all();
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
        if (!$data_strip) {
            abort(404);
        }
        Session::put('url', request()->fullUrl());
        return view ('stripcutter.showstrip', compact('data_strip'));
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
        if (!$data_strip) {
            return redirect()->back()->with('error', 'Invalid serial number or record not found.');
        }
        $old_serial_number = $data_strip->serial_number;
        $data_strip->update($request->all());
        $new_serial_number = $data_strip->serial_number;
        $returnRoute = Session::pull('url', null);
        if ($returnRoute) {
            $returnRoute = str_replace($old_serial_number, $new_serial_number, $returnRoute);
            return redirect($returnRoute)->with('success', 'Data Berhasil Diperbarui');
        }
        return redirect()->route('showstrip', ['serial_number' => $new_serial_number]);
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
    
    public function historystrip(string $serial_number)
    {
        $data_strip = Strip::find($serial_number);
        $audits = $data_strip->audits;
        return view('stripcutter.historystrip', compact('audits'));
    }

    public function deletehistorystrip(string $id)
    {
    $audit = Audit::findOrFail($id);
    $audit->delete();
    return redirect()->back()->with('success', 'History Log Deleted Successfully');
    }
}
