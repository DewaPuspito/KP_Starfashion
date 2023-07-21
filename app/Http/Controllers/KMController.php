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
        $jumlahPisauTumpul = $request->query('tumpul');
        $jumlahMinyakHabis = $request->query('habis');
        $jumlahAbrasif = $request->query('abrasif');
        $jumlahInstalasiKabel = $request->query('kabel');
        $jumlahKondisiMesin = $request->query('kondisi-mesin');
        
        // if($request->has('search')) {
        //     $data_km_cutting = KM::where('serial_number','LIKE', '%' .$request->search.'%')->get();
        // } 
        if ($jumlahPisauTumpul) {
            $data_km_cutting = KM::whereNotNull($jumlahPisauTumpul)
                ->whereMonth($jumlahPisauTumpul, now()->format('m'))
                ->whereYear($jumlahPisauTumpul, now()->format('Y'))
                ->get();

        } elseif ($jumlahMinyakHabis) {
            $data_km_cutting = KM::whereNotNull($jumlahMinyakHabis)
                ->whereMonth($jumlahMinyakHabis, now()->format('m'))
                ->whereYear($jumlahMinyakHabis, now()->format('Y'))
                ->get();
                
        } elseif ($jumlahAbrasif) {
            $data_km_cutting = KM::whereNotNull($jumlahAbrasif)
                ->whereMonth($jumlahAbrasif, now()->format('m'))
                ->whereYear($jumlahAbrasif, now()->format('Y'))
                ->get();
                
        } elseif ($jumlahInstalasiKabel) {
            $data_km_cutting = KM::whereNotNull($jumlahInstalasiKabel)
                ->whereMonth($jumlahInstalasiKabel, now()->format('m'))
                ->whereYear($jumlahInstalasiKabel, now()->format('Y'))
                ->get();

        } elseif ($jumlahKondisiMesin) {
            $data_km_cutting = KM::whereNotNull($jumlahKondisiMesin)
                ->whereMonth($jumlahKondisiMesin, now()->format('m'))
                ->whereYear($jumlahKondisiMesin, now()->format('Y'))
                ->get();

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
        $data_km_cutting->update($request->all());
        if(session('url')){
            return redirect(session('url'))->with('success', 'Data Berhasil Diperbarui');
        }
        return redirect()->route('km-cutting');
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
