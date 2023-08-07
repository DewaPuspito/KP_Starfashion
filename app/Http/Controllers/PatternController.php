<?php

namespace App\Http\Controllers;

use App\Models\Pattern;
use App\Models\Sparepart;
use Illuminate\Http\Request;
use App\Exports\PatternExport;
use OwenIt\Auditing\Models\Audit;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Session;

class PatternController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data_pattern = Pattern::all();
        return view ('pattern.patterns', compact('data_pattern'));
    }

    public function addpattern()
    {
        return view ('pattern.addpattern');
    }
    
    public function insertpattern(Request $request)
    {
        Pattern::create($request->all());   
        return redirect()->route('pattern')->with('success', 'Data Berhasil Dimasukkan');
    }

    public function showpattern(string $serial_number)
    {
        $data_pattern = Pattern::find($serial_number);
        Session::put('url', request()->fullUrl());
        return view ('pattern.showpattern', compact('data_pattern'));
    }

    public function tampilpattern(string $serial_number)
    {
        $data_pattern = Pattern::find($serial_number);
        $data_sparepart = Sparepart::all();
        return view('pattern.tampilpattern', compact('data_pattern', 'data_sparepart'));
    }

    public function editpattern(Request $request, string $serial_number)
    {
        $data_pattern = Pattern::find($serial_number);
        if (!$data_pattern) {
            return redirect()->back()->with('error', 'Invalid serial number or record not found.');
        }
        $old_serial_number = $data_pattern->serial_number;
        $data_pattern->update($request->all());
        $new_serial_number = $data_pattern->serial_number;
        $returnRoute = Session::pull('url', null);
        if ($returnRoute) {
            $returnRoute = str_replace($old_serial_number, $new_serial_number, $returnRoute);
            return redirect($returnRoute)->with('success', 'Data Berhasil Diperbarui');
        }
        return redirect()->route('showpattern', ['serial_number' => $new_serial_number]);
    }

    public function deletepattern(string $serial_number)
    {
        $data_pattern = Pattern::find($serial_number);
        $data_pattern->delete();
        return redirect()->route('pattern')->with('success', 'Data Berhasil Dihapus');
    }

    public function exportpattern() {
        return Excel::download(new PatternExport, 'datapattern.xlsx');
    }

    public function historypattern(string $serial_number)
    {
        $data_pattern = Pattern::find($serial_number);
        $audits = $data_pattern->audits;
        return view('pattern.historypattern', compact('audits'));
    }

    public function deletehistorypattern(string $id)
    {
    $audit = Audit::findOrFail($id);
    $audit->delete();
    return redirect()->back()->with('success', 'History Log Deleted Successfully');
    }
}
