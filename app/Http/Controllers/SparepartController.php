<?php

namespace App\Http\Controllers;
use App\Models\Sparepart;

use Illuminate\Http\Request;
use App\Exports\SparepartExport;
use Maatwebsite\Excel\Facades\Excel;

class SparepartController extends Controller
{
     /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function index(Request $request)
    {
        if($request->has('search')) {
            $data_sparepart = Sparepart::where('id_sparepart','LIKE', '%' .$request->search.'%')->get();
        } else {
        $data_sparepart = Sparepart::all();
        }
        return view ('sparepart.spareparts', compact('data_sparepart'));
    }

    public function addsparepart()
    {
        return view ('sparepart.addsparepart');
    }
    
    public function insertsparepart(Request $request)
    {
        Sparepart::create($request->all());   
        return redirect()->route('sparepart')->with('success', 'Data Berhasil Dimasukkan');
    }

    public function showsparepart(string $id_sparepart)
    {
        $data_sparepart= Sparepart::find($id_sparepart);
        return view ('sparepart.showsparepart', compact('data_sparepart'));
    }

    public function tampilsparepart(string $id_sparepart)
    {
        $data_sparepart = Sparepart::find($id_sparepart);
        return view('sparepart.tampilsparepart', compact('data_sparepart'));
    }

    public function editsparepart(Request $request, string $id_sparepart)
    {
        $data_sparepart = Sparepart::find($id_sparepart);
        $data_sparepart->update($request->all());
        return redirect()->route('sparepart')->with('success', 'Data Berhasil Diperbarui');
    }

    public function deletesparepart(string $id_sparepart)
    {
        $data_sparepart = Sparepart::find($id_sparepart);
        $data_sparepart->delete();
        return redirect()->route('sparepart')->with('success', 'Data Berhasil Dihapus');
    }

    public function exportsparepart() {
        return Excel::download(new SparepartExport, 'datasparepart.xlsx');
    }
}
