<?php

namespace App\Http\Controllers;

use App\Models\Fabric;
use App\Models\Sparepart;
use Illuminate\Http\Request;
use App\Exports\FabricExport;
use Maatwebsite\Excel\Facades\Excel;

class FabricController extends Controller
{
    public function index(Request $request)
    {
        if($request->has('search')) {
            $data_fabric = Fabric::where('serial_number','LIKE', '%' .$request->search.'%')->get();
        } else {
        $data_fabric = Fabric::all(); 
        }
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
        return view ('fabric.showfabric', compact('data_fabric'));
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
        return redirect()->route('fabric')->with('success', 'Data Berhasil Diperbarui');
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
}
