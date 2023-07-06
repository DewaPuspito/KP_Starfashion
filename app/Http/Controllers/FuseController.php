<?php

namespace App\Http\Controllers;

use App\Models\Fuse;
use App\Exports\FuseExport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class FuseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->has('search')) {
            $data_fuse = Fuse::where('serial_number','LIKE', '%' .$request->search.'%')->get();
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
        return view ('fusemachine.showfuse', compact('data_fuse'));
    }

    public function tampilfuse(string $serial_number)
    {
        $data_fuse = Fuse::find($serial_number);
        return view('fusemachine.tampilfuse', compact('data_fuse'));
    }

    public function editfuse(Request $request, string $serial_number)
    {
        $data_fuse = Fuse::find($serial_number);
        $data_fuse->update($request->all());
        return redirect()->route('fuse')->with('success', 'Data Berhasil Diperbarui');
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
}