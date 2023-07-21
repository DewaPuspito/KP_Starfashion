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
        $jumlahInstalasiElectrical = $request->query('electrical');
        $jumlahSwitchAutoStop = $request->query('autostop');
        $jumlahBelts = $request->query('belts');
        $jumlahDinamoMotor = $request->query('dinamo');
        $jumlahSensitifitas = $request->query('sensitifitas');
        $jumlahSparepartLainnya = $request->query('sparepartss');

        // if($request->has('search')) {
        //     $data_metaldetector = MetalDetector::where('serial_number','LIKE', '%' .$request->search.'%')->get();
        if ($jumlahInstalasiElectrical) {
            $data_metaldetector = MetalDetector::whereNotNull($jumlahInstalasiElectrical)
                ->whereMonth($jumlahInstalasiElectrical, now()->format('m'))
                ->whereYear($jumlahInstalasiElectrical, now()->format('Y'))
                ->get();

        } elseif ($jumlahSwitchAutoStop) {
            $data_metaldetector = MetalDetector::whereNotNull($jumlahSwitchAutoStop)
                ->whereMonth($jumlahSwitchAutoStop, now()->format('m'))
                ->whereYear($jumlahSwitchAutoStop, now()->format('Y'))
                ->get();
                
        } elseif ($jumlahBelts) {
            $data_metaldetector = MetalDetector::whereNotNull($jumlahBelts)
                ->whereMonth($jumlahBelts, now()->format('m'))
                ->whereYear($jumlahBelts, now()->format('Y'))
                ->get();
                
        } elseif ($jumlahDinamoMotor) {
            $data_metaldetector = MetalDetector::whereNotNull($jumlahDinamoMotor)
                ->whereMonth($jumlahDinamoMotor, now()->format('m'))
                ->whereYear($jumlahDinamoMotor, now()->format('Y'))
                ->get();

        } elseif ($jumlahSensitifitas) {
            $data_metaldetector = MetalDetector::whereNotNull($jumlahSensitifitas)
                ->whereMonth($jumlahSensitifitas, now()->format('m'))
                ->whereYear($jumlahSensitifitas, now()->format('Y'))
                ->get();

        } elseif ($jumlahSparepartLainnya) {
            $data_metaldetector = MetalDetector::whereNotNull($jumlahSparepartLainnya)
                ->whereMonth($jumlahSparepartLainnya, now()->format('m'))
                ->whereYear($jumlahSparepartLainnya, now()->format('Y'))
                ->get();

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
        $data_metaldetector->update($request->all());
        if(session('url')){
            return redirect(session('url'))->with('success', 'Data Berhasil Diperbarui');
        }
        return redirect()->route('metal-detector');
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
