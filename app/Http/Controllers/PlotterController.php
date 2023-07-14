<?php

namespace App\Http\Controllers;

use App\Models\Plotter; 
use App\Models\Sparepart;
use Illuminate\Http\Request;
use App\Exports\PlotterExport;
use OwenIt\Auditing\Models\Audit;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Session;

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
        $audits = $data_plotter->audits;
        Session::put('url', request()->fullUrl());
        return view ('plottermachine.showplotter', compact('data_plotter', 'audits'));
    }

    public function tampilplotter(string $serial_number)
    {
        $data_plotter = Plotter::find($serial_number);
        $data_sparepart = Sparepart::all();
        return view('plottermachine.tampilplotter', compact('data_plotter', 'data_sparepart'));
    }

    public function editplotter(Request $request, string $serial_number)
    {
        $data_plotter = Plotter::find($serial_number);
        $data_plotter->update($request->all());
        if(session('url')){
            return redirect(session('url'))->with('success', 'Data Berhasil Diperbarui');
        }
        return redirect()->route('plotter')->with('success', 'Data Berhasil Diperbarui');
    }

    public function deleteplotter(string $serial_number)
    {
        $data_plotter = Plotter::find($serial_number);
        $data_plotter->delete();
        return redirect()->route('plotter')->with('success', 'Data Berhasil Dihapus');
    }
    
    public function exportplotter() {
        return Excel::download(new PlotterExport, 'dataplotter.xlsx');
    }
}