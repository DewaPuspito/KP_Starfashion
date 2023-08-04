<?php

namespace App\Http\Controllers;

use App\Models\Fabric;
use App\Models\Sparepart;
use Illuminate\Http\Request;
use App\Exports\FabricExport;
use OwenIt\Auditing\Models\Audit;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Session;

class FabricController extends Controller
{
    public function index(Request $request)
    {
        // if($request->has('search')) {
        //     $data_fabric = Fabric::where('serial_number','LIKE', '%' .$request->search.'%')->get();
        // }
        $data_fabric = Fabric::all();
        return view ('fabric.fabrics', compact('data_fabric'));
    }

    public function addfabric()
    {
        return view ('fabric.addfabric');
    }
    
    public function insertfabric(Request $request)
    {
        Fabric::create($request->all());   
        return redirect()->route('fabric')->with('success', 'Data Berhasil Dimasukkan');
    }

    public function showfabric(string $serial_number)
    {
        $data_fabric = Fabric::find($serial_number);
        $audits = $data_fabric->audits; // Retrieve audits for the sewing sample
        Session::put('url', request()->fullUrl());
        return view ('fabric.showfabric', compact('data_fabric', 'audits'));
    }

    public function tampilfabric(string $serial_number)
    {
        $data_fabric = Fabric::find($serial_number);
        $data_sparepart = Sparepart::all();
        return view('fabric.tampilfabric', compact('data_fabric', 'data_sparepart'));
    }

    public function editfabric(Request $request, string $serial_number)
    {
        $data_fabric = Fabric::find($serial_number);
        $data_fabric->update($request->all());
        $returnRoute = Session::pull('url', null);
        if ($returnRoute) {
        return redirect($returnRoute)->with('success', 'Data Berhasil Diperbarui');
        }
        return redirect()->route('fabric');
    }

    public function deletefabric(string $serial_number)
    {
        $data_fabric = Fabric::find($serial_number);
        $data_fabric->delete();               
        return redirect()->route('fabric')->with('success', 'Data Berhasil Dihapus');
    }

    public function exportfabric() {
        return Excel::download(new FabricExport, 'datafabric.xlsx');
    }

    public function historyfabric(string $serial_number)
    {
        $data_fabric = Fabric::find($serial_number);
        $audits = $data_fabric->audits;
        return view('fabric.historyfabric', compact('audits'));
    }

    public function deletehistoryfabric(string $id)
    {
    $audit = Audit::findOrFail($id);
    $audit->delete();
    return redirect()->back()->with('success', 'History Log Deleted Successfully');
    }
}
