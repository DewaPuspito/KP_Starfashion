<?php

namespace App\Http\Controllers;

use App\Models\BandKnife;
use App\Models\Sparepart;
use Illuminate\Http\Request;
use App\Exports\BandKnifeExport;
use OwenIt\Auditing\Models\Audit;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Session;

class BandKnifeController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $jumlahElectricalInstalasi = $request->query('electric');
        $jumlahMotorBearingPully = $request->query('bearing');
        $jumlahPullyAtasBearing = $request->query('pully');
        $jumlahGantiGerindaAsahanPisau = $request->query('gerinda');
        $jumlahDinamoKompresor = $request->query('kompresor');
        $jumlahGantiSparepartKnife = $request->query('sparepart-knife');
        
        // if($request->has('search')) {
        //     $data_bandknife = BandKnife::where('serial_number','LIKE', '%' .$request->search.'%')->get();
        // } 
        
        if ($jumlahElectricalInstalasi) {
            $data_bandknife = BandKnife::whereNotNull($jumlahElectricalInstalasi)
                ->whereMonth($jumlahElectricalInstalasi, now()->format('m'))
                ->whereYear($jumlahElectricalInstalasi, now()->format('Y'))
                ->get();

        } elseif ($jumlahMotorBearingPully) {
            $data_bandknife = BandKnife::whereNotNull($jumlahMotorBearingPully)
                ->whereMonth($jumlahMotorBearingPully, now()->format('m'))
                ->whereYear($jumlahMotorBearingPully, now()->format('Y'))
                ->get();
                
        } elseif ($jumlahPullyAtasBearing) {
            $data_bandknife = BandKnife::whereNotNull($jumlahPullyAtasBearing)
                ->whereMonth($jumlahPullyAtasBearing, now()->format('m'))
                ->whereYear($jumlahPullyAtasBearing, now()->format('Y'))
                ->get();
                
        } elseif ($jumlahGantiGerindaAsahanPisau) {
            $data_bandknife = BandKnife::whereNotNull($jumlahGantiGerindaAsahanPisau)
                ->whereMonth($jumlahGantiGerindaAsahanPisau, now()->format('m'))
                ->whereYear($jumlahGantiGerindaAsahanPisau, now()->format('Y'))
                ->get();

        } elseif ($jumlahDinamoKompresor) {
            $data_bandknife = BandKnife::whereNotNull($jumlahDinamoKompresor)
                ->whereMonth($jumlahDinamoKompresor, now()->format('m'))
                ->whereYear($jumlahDinamoKompresor, now()->format('Y'))
                ->get();

        } elseif ($jumlahGantiSparepartKnife) {
            $data_bandknife = BandKnife::whereNotNull($jumlahGantiSparepartKnife)
                ->whereMonth($jumlahGantiSparepartKnife, now()->format('m'))
                ->whereYear($jumlahGantiSparepartKnife, now()->format('Y'))
                ->get();
                
        } else {
        $data_bandknife = BandKnife::all();
        }
        // }
        return view ('bandknife.bandknives', compact('data_bandknife'));
    }
    

    public function addbandknife()
    {
        return view ('bandknife.addbandknife');
    }
    
    public function insertbandknife(Request $request)
    {
        BandKnife::create($request->all());   
        return redirect()->route('band-knife')->with('success', 'Data Berhasil Dimasukkan');
    }

    public function showbandknife(string $serial_number)
    {
        $data_bandknife = BandKnife::find($serial_number);
        Session::put('url', request()->fullUrl());
        return view ('bandknife.showbandknife', compact('data_bandknife'));
    }

    public function tampilbandknife(string $serial_number)
    {
        $data_bandknife = BandKnife::find($serial_number);
        $data_sparepart = Sparepart::all();
        return view('bandknife.tampilbandknife', compact('data_bandknife', 'data_sparepart'));
    }

    public function editbandknife(Request $request, string $serial_number)
    {
        $data_bandknife = BandKnife::find($serial_number);
        $data_bandknife->update($request->all());
        $returnRoute = Session::pull('url', null);
        if ($returnRoute) {
        return redirect($returnRoute)->with('success', 'Data Berhasil Diperbarui');
        }
        return redirect()->route('band-knife');
    }

    public function deletebandknife(string $serial_number)
    {
        $data_bandknife = BandKnife::find($serial_number);
        $data_bandknife->delete();
        return redirect()->route('band-knife')->with('success', 'Data Berhasil Dihapus');
    }

    public function exportbandknife() {
        return Excel::download(new BandKnifeExport, 'databandknife.xlsx');
    }

    public function historybandknife(string $serial_number)
    {
        $data_bandknife = BandKnife::find($serial_number);
        $audits = $data_bandknife->audits;
        return view('bandknife.historybandknife', compact('audits'));
    }

    public function deletehistoryknife(string $id)
    {
    $audit = Audit::findOrFail($id);
    $audit->delete();
    return redirect()->back()->with('success', 'History Log Deleted Successfully');
    }
}
