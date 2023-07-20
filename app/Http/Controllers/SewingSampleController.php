<?php

namespace App\Http\Controllers;

use App\Models\Sparepart;
use App\Models\SewingSample;
use Illuminate\Http\Request;
use OwenIt\Auditing\Models\Audit;
use App\Exports\SewingSampleExport;
use Maatwebsite\Excel\Facades\Excel;
use OwenIt\Auditing\Facades\Auditor;
use Illuminate\Support\Facades\Session;

class SewingSampleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $jumlahJahitanLoncat = $request->query('jahitan');
        $jumlahBenangPutusan = $request->query('benang');
        $jumlahGantiGuntingPisau = $request->query('gunting-pisau');
        $jumlahGantiRotary = $request->query('rotary');
        $jumlahGantiSuttelHook = $request->query('hook');
        $jumlahBakMesin = $request->query('bak');
        $jumlahPisauTidakMotong = $request->query('pisau');
        $jumlahKondisiMinyakMesin = $request->query('minyak');
        $jumlahGantiSparepartLainnya = $request->query('sparepart-lainnya');

        if ($jumlahJahitanLoncat) {
            $data_sewingsample = SewingSample::whereNotNull($jumlahJahitanLoncat)
                ->whereMonth($jumlahJahitanLoncat, now()->format('m'))
                ->whereYear($jumlahJahitanLoncat, now()->format('Y'))
                ->get();

        } elseif ($jumlahBenangPutusan) {
            $data_sewingsample = SewingSample::whereNotNull($jumlahBenangPutusan)
                ->whereMonth($jumlahBenangPutusan, now()->format('m'))
                ->whereYear($jumlahBenangPutusan, now()->format('Y'))
                ->get();
                
        } elseif ($jumlahGantiGuntingPisau) {
            $data_sewingsample = SewingSample::whereNotNull($jumlahGantiGuntingPisau)
                ->whereMonth($jumlahGantiGuntingPisau, now()->format('m'))
                ->whereYear($jumlahGantiGuntingPisau, now()->format('Y'))
                ->get();
                
        } elseif ($jumlahGantiRotary) {
            $data_sewingsample = SewingSample::whereNotNull($jumlahGantiRotary)
                ->whereMonth($jumlahGantiRotary, now()->format('m'))
                ->whereYear($jumlahGantiRotary, now()->format('Y'))
                ->get();

        } elseif ($jumlahGantiSuttelHook) {
            $data_sewingsample = SewingSample::whereNotNull($jumlahGantiSuttelHook)
                ->whereMonth($jumlahGantiSuttelHook, now()->format('m'))
                ->whereYear($jumlahGantiSuttelHook, now()->format('Y'))
                ->get();

        } elseif ($jumlahBakMesin) {
            $data_sewingsample = SewingSample::whereNotNull($jumlahBakMesin)
                ->whereMonth($jumlahBakMesin, now()->format('m'))
                ->whereYear($jumlahBakMesin, now()->format('Y'))
                ->get();
                
        } elseif ($jumlahPisauTidakMotong) {
            $data_sewingsample = SewingSample::whereNotNull($jumlahPisauTidakMotong)
                ->whereMonth($jumlahPisauTidakMotong, now()->format('m'))
                ->whereYear($jumlahPisauTidakMotong, now()->format('Y'))
                ->get();
                
        } elseif ($jumlahKondisiMinyakMesin) {
            $data_sewingsample = SewingSample::whereNotNull($jumlahKondisiMinyakMesin)
                ->whereMonth($jumlahKondisiMinyakMesin, now()->format('m'))
                ->whereYear($jumlahKondisiMinyakMesin, now()->format('Y'))
                ->get();

        } elseif ($jumlahGantiSparepartLainnya) {
            $data_sewingsample = SewingSample::whereNotNull($jumlahGantiSparepartLainnya)
                ->whereMonth($jumlahGantiSparepartLainnya, now()->format('m'))
                ->whereYear($jumlahGantiSparepartLainnya, now()->format('Y'))
                ->get();

        } else {
            $data_sewingsample = SewingSample::all();
        }

        return view('sewingsamplemachine.sewingsamples', compact('data_sewingsample'));
    }

    public function search(Request $request)
    {
    $searchType = $request->input('searchType');
    $searchTerm = $request->input('search');

    if ($searchTerm) {
        if ($searchType === 'serial_number') {
            $data_sewingsample = SewingSample::where('serial_number', 'LIKE', '%' . $searchTerm . '%')->get();
        } elseif ($searchType === 'type') {
            $data_sewingsample = SewingSample::where('tipe', 'LIKE', '%' . $searchTerm . '%')->get();
        } elseif ($searchType === 'jenis') {
            $data_sewingsample = SewingSample::where('jenis_mesin', 'LIKE', '%' . $searchTerm . '%')->get();
        } elseif ($searchType === 'bagian') {
            $data_sewingsample = SewingSample::where('bagian', 'LIKE', '%' . $searchTerm . '%')->get();
        } elseif ($searchType === 'sparepart-diganti') {
            $data_sparepart = Sparepart::where('nama_sparepart', 'LIKE', '%' . $searchTerm . '%')->get();
        }  elseif ($searchType === 'indikator-mesin') {
            $data_sewingsample = SewingSample::where('indikator_mesin', 'LIKE', '%' . $searchTerm . '%')->get();      
        } else {
        $data_sewingsample = SewingSample::all();
    }
    return view('sewingsamplemachine.sewingsamples', compact('data_sewingsample'));
    }
}

    public function addsewingsample()
    {
        return view ('sewingsamplemachine.addsewingsample');
    }
    
    public function insertsewingsample(Request $request)
    {
        SewingSample::create($request->all());   
        return redirect()->route('sewing-sample')->with('success', 'Data Berhasil Dimasukkan');
    }

    public function showsewingsample(string $serial_number)
    {
        $data_sewingsample = SewingSample::find($serial_number);
        Session::put('url', request()->fullUrl());
        return view('sewingsamplemachine.showsewingsamples', compact('data_sewingsample'));
    }

    public function tampilsewingsample(string $serial_number)
    {
        $data_sewingsample = SewingSample::find($serial_number);
        $data_sparepart = Sparepart::all();
        return view('sewingsamplemachine.tampilsewingsample', compact('data_sewingsample', 'data_sparepart'));
    }

    public function editsewingsample(Request $request, string $serial_number)
    {
        $data_sewingsample = SewingSample::find($serial_number);
        $data_sewingsample->update($request->all());
        if(session('url')){
            return redirect(session('url'))->with('success', 'Data Berhasil Diperbarui');
        }
        return redirect()->route('sewing-sample');
    }

    public function deletesewingsample(string $serial_number)
    {
        $data_sewingsample = SewingSample::find($serial_number);
        $data_sewingsample->delete();
        return redirect()->route('sewing-sample')->with('success', 'Data Berhasil Dihapus');
    }

    public function exportsewingsample() {
        return Excel::download(new SewingSampleExport, 'datasewingsample.xlsx');
    }

    public function historysewingsample(string $serial_number)
    {
        $data_sewingsample = SewingSample::find($serial_number);
        $audits = $data_sewingsample->audits;
        return view('sewingsamplemachine.historysewingsample', compact('audits'));
    }
    
    public function deletehistorysewing(string $id)
    {
    $audit = Audit::findOrFail($id);
    $audit->delete();
    return redirect()->back()->with('success', 'History Log Deleted Successfully');
    }
}
