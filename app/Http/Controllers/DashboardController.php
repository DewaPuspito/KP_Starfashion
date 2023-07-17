<?php

namespace App\Http\Controllers;

use App\Models\SewingSample;
use App\Exports\DashboardExport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class DashboardController extends Controller
{
    public function dashboardindex()
    {
        return view('dashboardindex');
    }

    public function dashboardexport()
    {
        $dateNow = now();
        $fileName = 'dashboard_' . $dateNow->format('Y-m') . '.xlsx';
    
        return Excel::download(new DashboardExport, $fileName);
    }

}
