<?php

namespace App\Http\Controllers;

use App\Models\Sparepart;
use Illuminate\Http\Request;
use App\Models\MetalDetector;
use OwenIt\Auditing\Models\Audit;
use App\Exports\MetalDetectorExport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Session;

class MetalDetectorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data_metaldetector = MetalDetector::all();
        return view ('metaldetector.metaldetectors', compact('data_metaldetector'));
    }

    public function addmetaldetector()
    {
        return view ('metaldetector.addmetaldetector');
    }
    
    public function insertmetaldetector(Request $request)
    {
        MetalDetector::create($request->all());
        if (!$data_metaldetector) {
            abort(404);
        }   
        return redirect()->route('metal-detector')->with('success', 'Data Berhasil Dimasukkan');
    }

    public function showmetaldetector(string $serial_number)
    {
        $data_metaldetector = MetalDetector::find($serial_number);
        Session::put('url', request()->fullUrl());
        return view ('metaldetector.showmetaldetector', compact('data_metaldetector'));
    }

    public function tampilmetaldetector(string $serial_number)
    {
        $data_metaldetector = MetalDetector::find($serial_number);
        $data_sparepart = Sparepart::all();
        return view('metaldetector.tampilmetaldetector', compact('data_metaldetector', 'data_sparepart'));
    }

    public function editmetaldetector(Request $request, string $serial_number)
    {
        $data_metaldetector = MetalDetector::find($serial_number);
        if (!$data_metaldetector) {
            return redirect()->back()->with('error', 'Invalid serial number or record not found.');
        }
        $old_serial_number = $data_metaldetector->serial_number;
        $data_metaldetector->update($request->all());
        $new_serial_number = $data_metaldetector->serial_number;
        $returnRoute = Session::pull('url', null);
        if ($returnRoute) {
            $returnRoute = str_replace($old_serial_number, $new_serial_number, $returnRoute);
            return redirect($returnRoute)->with('success', 'Data Berhasil Diperbarui');
        }
        return redirect()->route('showmetaldetector', ['serial_number' => $new_serial_number]);
    }

    public function deletemetaldetector(string $serial_number)
    {
        $data_metaldetector = MetalDetector::find($serial_number);
        $data_metaldetector->delete();
        return redirect()->route('metal-detector')->with('success', 'Data Berhasil Dihapus');
    }

    public function exportmetaldetector() {
        return Excel::download(new MetalDetectorExport, 'datametaldetector.xlsx');
    }

    public function historymetaldetector(string $serial_number)
    {
        $data_metaldetector = MetalDetector::find($serial_number);
        $audits = $data_metaldetector->audits;
        return view('metaldetector.historymetaldetector', compact('audits'));
    }

    public function deletehistorymetal(string $id)
    {
        $audit = Audit::findOrFail($id);
        $audit->delete();
        return redirect()->back()->with('success', 'History Log Deleted Successfully');
    }
}
