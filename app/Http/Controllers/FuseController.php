<?php

namespace App\Http\Controllers;

use App\Models\Fuse;
use App\Models\Sparepart;
use App\Exports\FuseExport;
use Illuminate\Http\Request;
use OwenIt\Auditing\Models\Audit;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Session;

class FuseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $jumlahBeltAtas = $request->query('belt-atas');
        $jumlahBeltBawah = $request->query('belt-bawah');
        $jumlahBearingAtas = $request->query('bearing-atas');
        $jumlahBearingBawah = $request->query('bearing-bawah');
        $jumlahRollpressAtas = $request->query('rollpress-atas');
        $jumlahRollpressBawah = $request->query('rollpress-bawah');
        $jumlahSwitchKontrol = $request->query('switch');
        $jumlahKontrolSpeed = $request->query('speed');
        $jumlahTemperatur = $request->query('temperatur');
        
        // if($request->has('search')) {
        //     $data_fuse = Fuse::where('serial_number','LIKE', '%' .$request->search.'%')->get();
        // } 
        if ($jumlahBeltAtas) {
            $data_fuse = Fuse::whereNotNull($jumlahBeltAtas)
                ->whereMonth($jumlahBeltAtas, now()->format('m'))
                ->whereYear($jumlahBeltAtas, now()->format('Y'))
                ->get();

        } elseif ($jumlahBeltBawah) {
            $data_fuse = Fuse::whereNotNull($jumlahBeltBawah)
                ->whereMonth($jumlahBeltBawah, now()->format('m'))
                ->whereYear($jumlahBeltBawah, now()->format('Y'))
                ->get();
                
        } elseif ($jumlahBearingAtas) {
            $data_fuse = Fuse::whereNotNull($jumlahBearingAtas)
                ->whereMonth($jumlahBearingAtas, now()->format('m'))
                ->whereYear($jumlahBearingAtas, now()->format('Y'))
                ->get();
                
        } elseif ($jumlahBearingBawah) {
            $data_fuse = Fuse::whereNotNull($jumlahBearingBawah)
                ->whereMonth($jumlahBearingBawah, now()->format('m'))
                ->whereYear($jumlahBearingBawah, now()->format('Y'))
                ->get();

        } elseif ($jumlahRollpressAtas) {
            $data_fuse = Fuse::whereNotNull($jumlahRollpressAtas)
                ->whereMonth($jumlahRollpressAtas, now()->format('m'))
                ->whereYear($jumlahRollpressAtas, now()->format('Y'))
                ->get();

        } elseif ($jumlahRollpressBawah) {
            $data_fuse = Fuse::whereNotNull($jumlahRollpressBawah)
                ->whereMonth($jumlahRollpressBawah, now()->format('m'))
                ->whereYear($jumlahRollpressBawah, now()->format('Y'))
                ->get();
                
        } elseif ($jumlahSwitchKontrol) {
            $data_fuse = Fuse::whereNotNull($jumlahSwitchKontrol)
                ->whereMonth($jumlahSwitchKontrol, now()->format('m'))
                ->whereYear($jumlahSwitchKontrol, now()->format('Y'))
                ->get();
                
        } elseif ($jumlahKontrolSpeed) {
            $data_fuse = Fuse::whereNotNull($jumlahKontrolSpeed)
                ->whereMonth($jumlahKontrolSpeed, now()->format('m'))
                ->whereYear($jumlahKontrolSpeed, now()->format('Y'))
                ->get();

        } elseif ($jumlahTemperatur) {
            $data_fuse = Fuse::whereNotNull($jumlahTemperatur)
                ->whereMonth($jumlahTemperatur, now()->format('m'))
                ->whereYear($jumlahTemperatur, now()->format('Y'))
                ->get();

        } else {
        $data_fuse = Fuse::all(); 
        }
        return view ('fusemachine.fuses', compact('data_fuse'));
    }

    public function addfuse()
    {
        return view ('fusemachine.addfuse');
    }
    
    public function insertfuse(Request $request)
    {
        Fuse::create($request->all());   
        return redirect()->route('fuse')->with('success', 'Data Berhasil Dimasukkan');
    }

    public function showfuse(string $serial_number)
    {
        $data_fuse = Fuse::find($serial_number);
        Session::put('url', request()->fullUrl());
        return view ('fusemachine.showfuse', compact('data_fuse'));
    }

    public function tampilfuse(string $serial_number)
    {
        $data_fuse = Fuse::find($serial_number);
        $data_sparepart = Sparepart::all();
        return view('fusemachine.tampilfuse', compact('data_fuse', 'data_sparepart'));
    }

    public function editfuse(Request $request, string $serial_number)
    {
        $data_fuse = Fuse::find($serial_number);
        $data_fuse->update($request->all());
        if(session('url')){
            return redirect(session('url'))->with('success', 'Data Berhasil Diperbarui');
        }
        return redirect()->route('fuse');
    }

    public function deletefuse(string $serial_number)
    {
        $data_fuse = Fuse::find($serial_number);
        $data_fuse->delete();               
        return redirect()->route('fuse')->with('success', 'Data Berhasil Dihapus');
    }

    public function exportfuse() {
        return Excel::download(new FuseExport, 'datafuse.xlsx');
    }

    public function historyfuse(string $serial_number)
    {
        $data_fuse = Fuse::find($serial_number);
        $audits = $data_fuse->audits;
        return view('fusemachine.historyfuse', compact('audits'));
    }

    public function deletehistoryfuse(string $id)
    {
        $audit = Audit::findOrFail($id);
        $audit->delete();
        return redirect()->back()->with('success', 'History Log Deleted Successfully');
    }
}