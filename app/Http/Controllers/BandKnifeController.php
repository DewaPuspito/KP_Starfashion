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
        if (!$data_bandknife) {
            abort(404);
        }
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
        if (!$data_bandknife) {
            return redirect()->back()->with('error', 'Invalid serial number or record not found.');
        }
        $old_serial_number = $data_bandknife->serial_number;
        $data_bandknife->update($request->all());
        $new_serial_number = $data_bandknife->serial_number;
        $returnRoute = Session::pull('url', null);
        if ($returnRoute) {
            $returnRoute = str_replace($old_serial_number, $new_serial_number, $returnRoute);
            return redirect($returnRoute)->with('success', 'Data Berhasil Diperbarui');
        }
        return redirect()->route('showbandknife', ['serial_number' => $new_serial_number]);
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
