<?php

namespace App\Http\Controllers;

use App\Models\Sparepart;
use Illuminate\Http\Request;
use App\Exports\SparepartExport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Pagination\LengthAwarePaginator;
use OwenIt\Auditing\Models\Audit;
use OwenIt\Auditing\Facades\Auditor;

class SparepartController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index(Request $request)
  {
    if ($request->has('search')) {
      $data_sparepart = Sparepart::where('nama_sparepart', 'LIKE', '%' . $request->search . '%')->paginate(10);
    } else {
      $data_sparepart = Sparepart::paginate(10);
    }
    return view('sparepart.spareparts', compact('data_sparepart'));
  }

  public function addsparepart()
  {
    return view('sparepart.addsparepart');
  }

  public function insertsparepart(Request $request)
  {
    Sparepart::create($request->all());   
    return redirect()->route('sparepart')->with('success', 'Data Berhasil Dimasukkan');
  }
  
  public function showsparepart(string $id_sparepart)
  {
    $data_sparepart = Sparepart::find($id_sparepart);
    return view('sparepart.showsparepart', compact('data_sparepart'));
  }

  public function tampilsparepart(string $id_sparepart)
  {
    $data_sparepart = Sparepart::find($id_sparepart);
    return view('sparepart.tampilsparepart', compact('data_sparepart'));
  }

  public function editsparepart(Request $request, string $id_sparepart)
  {
    $data_sparepart = Sparepart::find($id_sparepart);
    $data_sparepart->fill($request->all());
    $jumlahSparepartMasuk = $data_sparepart->jumlah_sparepart_masuk;
    $jumlahSparepartKeluar = $data_sparepart->jumlah_sparepart_keluar;
    $sisaSparepart = $jumlahSparepartMasuk - $jumlahSparepartKeluar;
    if ($jumlahSparepartMasuk > $data_sparepart->jumlah_sparepart_masuk) {
    // Handle addition: Increase sisaSparepart if jumlahSparepartMasuk is greater
    $sisaSparepart += ($jumlahSparepartMasuk - $data_sparepart->jumlah_sparepart_masuk);
    }
    // Update the sisa_sparepart value
    $data_sparepart->sisa_sparepart = $sisaSparepart;
    $data_sparepart->save();
    return redirect()->route('sparepart')->with('success', 'Data Berhasil Diperbarui');
  }
  

  public function deletesparepart(string $id_sparepart)
  {
    $data_sparepart = Sparepart::find($id_sparepart);
    $data_sparepart->delete();
    $data_sparepart->audits()->delete();
    return redirect()->route('sparepart')->with('success', 'Data Berhasil Dihapus');
  }

  public function exportsparepart()
  {
    return Excel::download(new SparepartExport, 'datasparepart.xlsx');
  }

  public function historysparepart(string $id_sparepart)
  {
    $data_sparepart = Sparepart::find($id_sparepart);
    $audits = $data_sparepart->audits;
    return view('sparepart.historysparepart', compact('audits'));
  }
  
  public function deletehistorysparepart(string $id)
  {
    $audit = Audit::findOrFail($id);
    $audit->delete();
    return redirect()->back()->with('success', 'History Log Deleted Successfully');
  }

}
