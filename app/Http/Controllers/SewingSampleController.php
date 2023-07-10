<?php

namespace App\Http\Controllers;

use App\Models\Sparepart;
use App\Models\SewingSample;
use Illuminate\Http\Request;
use App\Exports\SewingSampleExport;
use Maatwebsite\Excel\Facades\Excel;

class SewingSampleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data_sewingsample = SewingSample::all();
        return view ('sewingsamplemachine.sewingsamples', compact('data_sewingsample'));
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
            $data_sewingsample = SewingSample::where('jenis_sparepart_yang_diganti', 'LIKE', '%' . $searchTerm . '%')->get();
        } elseif ($searchType === 'harga_sparepart') {
            $data_sewingsample = SewingSample::where('harga_sparepart', 'LIKE', '%' . $searchTerm . '%')->get();
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
        return view ('sewingsamplemachine.showsewingsamples', compact('data_sewingsample'));
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
        return redirect()->route('sewing-sample')->with('success', 'Data Berhasil Diperbarui');
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
    
}
