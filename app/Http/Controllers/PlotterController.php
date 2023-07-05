<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Plotter; 

class PlotterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->has('search')) {
            $data_plotter = Plotter::where('serial_number','LIKE', '%' .$request->search.'%')->get();
        } else {
        $data_plotter = Plotter::all();
        }
        return view ('plottermachine.plotters', compact('data_plotter'));
    }

    public function addplotter()
    {
        return view ('plottermachine.addplotter');
    }
    
    public function insertplotter(Request $request)
    {
        Plotter::create($request->all());   
        return redirect()->route('plotter')->with('success', 'Data Berhasil Dimasukkan');
    }

    public function showplotter(string $serial_number)
    {
        $data_plotter = Plotter::find($serial_number);
        return view ('plottermachine.showplotter', compact('data_plotter'));
    }

    public function tampilplotter(string $serial_number)
    {
        $data_plotter = Plotter::find($serial_number);
        return view('plottermachine.tampilplotter', compact('data_plotter'));
    }

    public function editplotter(Request $request, string $serial_number)
    {
        $data_plotter = Plotter::find($serial_number);
        $data_plotter->update($request->all());
        return redirect()->route('plotter')->with('success', 'Data Berhasil Diperbarui');
    }

    public function deleteplotter(string $serial_number)
    {
        $data_plotter = Plotter::find($serial_number);
        $data_plotter->delete();
        return redirect()->route('plotter')->with('success', 'Data Berhasil Dihapus');
    }
}