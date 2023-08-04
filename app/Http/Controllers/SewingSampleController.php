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
        
        $jumlahLine1 = $request->query('line1');
        $jumlahLine2 = $request->query('line2');
        $jumlahLine3 = $request->query('line3');
        $jumlahLine4 = $request->query('line4');
        $jumlahLine5 = $request->query('line5');      
        $jumlahLine6 = $request->query('line6');
        $jumlahLine7 = $request->query('line7');   
        $jumlahLine8 = $request->query('line8');
        $jumlahLine9 = $request->query('line9');
        $jumlahLine10 = $request->query('line10');
        $jumlahLine11 = $request->query('line11');
        $jumlahLine12 = $request->query('line12');  
        $jumlahLine13 = $request->query('line13');
        $jumlahLine14 = $request->query('line14');
        $jumlahLine15 = $request->query('line15');
        $jumlahLine16 = $request->query('line16');
        $jumlahLine17 = $request->query('line17');
        $jumlahLine18 = $request->query('line18');
        $jumlahLine19 = $request->query('line19');
        $jumlahLine20 = $request->query('line20');
        $jumlahSample = $request->query('sample');
        $jumlahMekanik = $request->query('mekanik');
        
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

        } elseif ($jumlahLine1) {
            $data_sewingsample = SewingSample::where('bagian', 'LINE 01')->get();

        } elseif ($jumlahLine2) {
            $data_sewingsample = SewingSample::where('bagian', 'LINE 02')->get();

        } elseif ($jumlahLine3) {
            $data_sewingsample = SewingSample::where('bagian', 'LINE 03')->get();

        } elseif ($jumlahLine4) {
            $data_sewingsample = SewingSample::where('bagian', 'LINE 04')->get();

        } elseif ($jumlahLine5) {
            $data_sewingsample = SewingSample::where('bagian', 'LINE 05')->get();

        } elseif ($jumlahLine6) {
            $data_sewingsample = SewingSample::where('bagian', 'LINE 06')->get();

        } elseif ($jumlahLine7) {
            $data_sewingsample = SewingSample::where('bagian', 'LINE 07')->get();

        } elseif ($jumlahLine8) {
            $data_sewingsample = SewingSample::where('bagian', 'LINE 08')->get();

        } elseif ($jumlahLine9) {
            $data_sewingsample = SewingSample::where('bagian', 'LINE 09')->get();

        } elseif ($jumlahLine10) {
            $data_sewingsample = SewingSample::where('bagian', 'LINE 10')->get();

        } elseif ($jumlahLine11) {
            $data_sewingsample = SewingSample::where('bagian', 'LINE 11')->get();

        } elseif ($jumlahLine12) {
            $data_sewingsample = SewingSample::where('bagian', 'LINE 12')->get();

        } elseif ($jumlahLine13) {
            $data_sewingsample = SewingSample::where('bagian', 'LINE 13')->get();

        } elseif ($jumlahLine14) {
            $data_sewingsample = SewingSample::where('bagian', 'LINE 14')->get();

        } elseif ($jumlahLine15) {
            $data_sewingsample = SewingSample::where('bagian', 'LINE 15')->get();

        } elseif ($jumlahLine16) {
            $data_sewingsample = SewingSample::where('bagian', 'LINE 16')->get();

        } elseif ($jumlahLine17) {
            $data_sewingsample = SewingSample::where('bagian', 'LINE 17')->get();

        } elseif ($jumlahLine18) {
            $data_sewingsample = SewingSample::where('bagian', 'LINE 18')->get();

        } elseif ($jumlahLine19) {
            $data_sewingsample = SewingSample::where('bagian', 'LINE 19')->get();

        } elseif ($jumlahLine20) {
            $data_sewingsample = SewingSample::where('bagian', 'LINE 20')->get();

        } elseif ($jumlahSample) {
            $data_sewingsample = SewingSample::where('bagian', 'SAMPLE')->get();

        } elseif ($jumlahMekanik) {
            $data_sewingsample = SewingSample::where('bagian', 'GUDANG MEKANIK')->get();
            
        } else {
            $data_sewingsample = SewingSample::sortable()->get();
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
    if (!$data_sewingsample) {
        return redirect()->back()->with('error', 'Invalid serial number or record not found.');
    }
    $old_serial_number = $data_sewingsample->serial_number;
    $data_sewingsample->update($request->all());
    $new_serial_number = $data_sewingsample->serial_number;
    $returnRoute = Session::pull('url', null);
    if ($returnRoute) {
        $returnRoute = str_replace($old_serial_number, $new_serial_number, $returnRoute);
        return redirect($returnRoute)->with('success', 'Data Berhasil Diperbarui');
    }
    return redirect()->route('showsewingsamples', ['serial_number' => $new_serial_number]);
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
