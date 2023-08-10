<?php

namespace App\Http\Controllers;

use App\Models\KM;
use App\Exports\KMExport;
use App\Models\Sparepart;
use Illuminate\Http\Request;
use OwenIt\Auditing\Models\Audit;
use Maatwebsite\Excel\Facades\Excel;
use OwenIt\Auditing\Facades\Auditor;
use Illuminate\Support\Facades\Session;

class KMController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {   
        $data_km_cutting = KM::all();
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
        if (!$data_km_cutting) {
            abort(404);
        }
        Session::put('url', request()->fullUrl());
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
        if (!$data_km_cutting) {
            return redirect()->back()->with('error', 'Invalid serial number or record not found.');
        }
        $old_serial_number = $data_km_cutting->serial_number;
        $data_km_cutting->update($request->all());
        $new_serial_number = $data_km_cutting->serial_number;
        $returnRoute = Session::pull('url', null);
        if ($returnRoute) {
            $returnRoute = str_replace($old_serial_number, $new_serial_number, $returnRoute);
            return redirect($returnRoute)->with('success', 'Data Berhasil Diperbarui');
        }
        return redirect()->route('showkmcutting', ['serial_number' => $new_serial_number]);
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

    public function historykmcutting(string $serial_number)
    {
        $data_km_cutting = KM::find($serial_number);
        $audits = $data_km_cutting->audits;
        return view('kmcutting.historykmcutting', compact('audits'));
    }

    public function deletehistorykm(string $id)
    {
        $audit = Audit::findOrFail($id);
        $audit->delete();
        return redirect()->back()->with('success', 'History Log Deleted Successfully');
    }
}
