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
        // if($request->has('search')) {
        //     $data_bandknife = BandKnife::where('serial_number','LIKE', '%' .$request->search.'%')->get();
        // } 
        $data_bandknife = BandKnife::all();
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
