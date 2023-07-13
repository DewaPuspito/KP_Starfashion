<?php

namespace App\Http\Controllers;

use App\Models\Sparepart;
use Illuminate\Http\Request;
use App\Models\MetalDetector;
use App\Exports\MetalDetectorExport;
use Maatwebsite\Excel\Facades\Excel;
use OwenIt\Auditing\Models\Audit;

class MetalDetectorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->has('search')) {
            $data_metaldetector = MetalDetector::where('serial_number','LIKE', '%' .$request->search.'%')->get();
        } else {
        $data_metaldetector = MetalDetector::all();
        }
        return view ('metaldetector.metaldetectors', compact('data_metaldetector'));
    }

    public function addmetaldetector()
    {
        return view ('metaldetector.addmetaldetector');
    }
    
    public function insertmetaldetector(Request $request)
    {
        MetalDetector::create($request->all());   
        return redirect()->route('metal-detector')->with('success', 'Data Berhasil Dimasukkan');
    }

    public function showmetaldetector(string $serial_number)
    {
        $data_metaldetector = MetalDetector::find($serial_number);
        $audits = $data_metaldetector->audits; // Retrieve audits for the sewing sample
        return view ('metaldetector.showmetaldetector', compact('data_metaldetector', 'audits'));
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
        $data_metaldetector->update($request->all());
        return redirect()->route('metal-detector')->with('success', 'Data Berhasil Diperbarui');
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
}
