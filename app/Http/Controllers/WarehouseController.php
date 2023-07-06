<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Warehouse;

class WarehouseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data_warehouse = Warehouse::all();
        return view ('warehouse.machines', compact('data_warehouse'));
    }

    public function search(Request $request)
    {
    $searchType = $request->input('searchType');
    $searchTerm = $request->input('search');

    if ($searchTerm) {
        if ($searchType === 'serial_number') {
            $data_warehouse = Warehouse::where('serial_number', 'LIKE', '%' . $searchTerm . '%')->get();
        } elseif ($searchType === 'type') {
            $data_warehouse = Warehouse::where('tipe', 'LIKE', '%' . $searchTerm . '%')->get();
        } elseif ($searchType === 'jenis') {
            $data_warehouse = Warehouse::where('jenis_mesin', 'LIKE', '%' . $searchTerm . '%')->get();
        } elseif ($searchType === 'sparepart-diganti') {
            $data_warehouse = Warehouse::where('jenis_sparepart_yang_diganti', 'LIKE', '%' . $searchTerm . '%')->get();
        } elseif ($searchType === 'harga_sparepart') {
            $data_warehouse = Warehouse::where('harga_sparepart', 'LIKE', '%' . $searchTerm . '%')->get();
        } else {
            $data_warehouse = Warehouse::all();
        }
            return view('warehouse.machines', compact('data_warehouse'));
        }
    }

    public function addwarehouse()
    {
        return view ('warehouse.addmachine');
    }
    
    public function insertwarehouse(Request $request)
    {
        Warehouse::create($request->all());   
        return redirect()->route('warehouse')->with('success', 'Data Berhasil Dimasukkan');
    }

    public function showwarehouse(string $serial_number)
    {
        $data_warehouse = Warehouse::find($serial_number);
        return view ('warehouse.showmachines', compact('data_warehouse'));
    }

    public function tampilwarehouse(string $serial_number)
    {
        $data_warehouse = Warehouse::find($serial_number);
        return view('warehouse.tampilmachine', compact('data_warehouse'));
    }

    public function editwarehouse(Request $request, string $serial_number)
    {
        $data_warehouse = Warehouse::find($serial_number);
        $data_warehouse->update($request->all());
        return redirect()->route('warehouse')->with('success', 'Data Berhasil Diperbarui');
    }

    public function deletewarehouse(string $serial_number)
    {
        $data_warehouse = Warehouse::find($serial_number);
        $data_warehouse->delete();
        return redirect()->route('warehouse')->with('success', 'Data Berhasil Dihapus');
    }
}
