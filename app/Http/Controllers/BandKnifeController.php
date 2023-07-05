<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BandKnife;

class BandKnifeController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->has('search')) {
            $data_bandknife = BandKnife::where('serial_number','LIKE', '%' .$request->search.'%')->get();
        } else {
        $data_bandknife = BandKnife::all();
        }
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
        return view ('bandknife.showbandknife', compact('data_bandknife'));
    }

    public function tampilbandknife(string $serial_number)
    {
        $data_bandknife = BandKnife::find($serial_number);
        return view('bandknife.tampilbandknife', compact('data_bandknife'));
    }

    public function editbandknife(Request $request, string $serial_number)
    {
        $data_bandknife = BandKnife::find($serial_number);
        $data_bandknife->update($request->all());
        return redirect()->route('band-knife')->with('success', 'Data Berhasil Diperbarui');
    }

    public function deletebandknife(string $serial_number)
    {
        $data_bandknife = BandKnife::find($serial_number);
        $data_bandknife->delete();
        return redirect()->route('band-knife')->with('success', 'Data Berhasil Dihapus');
    }
}
