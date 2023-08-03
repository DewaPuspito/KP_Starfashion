<?php

namespace App\Http\Controllers;

use App\Models\Sparepart;
use App\Models\SewingSample;
use Illuminate\Http\Request;
use OwenIt\Auditing\Models\Audit;
use App\Exports\SewingSampleExport;
use Maatwebsite\Excel\Facades\Excel;
use OwenIt\Auditing\Facades\Auditor;
use Illuminate\Support\Facades\Session;

class SewingSampleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $jumlahJahitanLoncat = $request->query('jahitan');
        $jumlahBenangPutusan = $request->query('benang');
        $jumlahGantiGuntingPisau = $request->query('gunting-pisau');
        $jumlahGantiRotary = $request->query('rotary');
        $jumlahGantiSuttelHook = $request->query('hook');
        $jumlahBakMesin = $request->query('bak');
        $jumlahPisauTidakMotong = $request->query('pisau');
        $jumlahKondisiMinyakMesin = $request->query('minyak');
        $jumlahGantiSparepartLainnya = $request->query('sparepart-lainnya');
        $jumlahLine1 = $request->query('line1');
        $jumlahJarum1Line1 = $request->query('line1-jarum1');
        $jumlahJarum2Line1 = $request->query('line1-jarum2');
        $jumlahObrasLine1 = $request->query('line1-obras');
        $jumlahLubangLine1 = $request->query('line1-lubang');
        $jumlahPasangLine1 = $request->query('line1-pasang');        
        $jumlahLine2 = $request->query('line2');
        $jumlahJarum1Line2 = $request->query('line2-jarum1');
        $jumlahJarum2Line2 = $request->query('line2-jarum2');
        $jumlahObrasLine2 = $request->query('line2-obras');
        $jumlahLubangLine2 = $request->query('line2-lubang');
        $jumlahPasangLine2 = $request->query('line2-pasang');        
        $jumlahLine3 = $request->query('line3');
        $jumlahJarum1Line3 = $request->query('line3-jarum1');
        $jumlahJarum2Line3 = $request->query('line3-jarum2');
        $jumlahObrasLine3 = $request->query('line3-obras');
        $jumlahLubangLine3 = $request->query('line3-lubang');
        $jumlahPasangLine3 = $request->query('line3-pasang');        
        $jumlahLine4 = $request->query('line4');
        $jumlahJarum1Line4 = $request->query('line4-jarum1');
        $jumlahJarum2Line4 = $request->query('line4-jarum2');
        $jumlahObrasLine4 = $request->query('line4-obras');
        $jumlahLubangLine4 = $request->query('line4-lubang');
        $jumlahPasangLine4 = $request->query('line4-pasang');        
        $jumlahLine5 = $request->query('line5');
        $jumlahJarum1Line5 = $request->query('line5-jarum1');
        $jumlahJarum2Line5 = $request->query('line5-jarum2');
        $jumlahObrasLine5 = $request->query('line5-obras');
        $jumlahLubangLine5 = $request->query('line5-lubang');
        $jumlahPasangLine5 = $request->query('line5-pasang');        
        $jumlahLine6 = $request->query('line6');
        $jumlahJarum1Line6 = $request->query('line6-jarum1');
        $jumlahJarum2Line6 = $request->query('line6-jarum2');
        $jumlahObrasLine6 = $request->query('line6-obras');
        $jumlahLubangLine6 = $request->query('line6-lubang');
        $jumlahPasangLine6 = $request->query('line6-pasang');        
        $jumlahLine7 = $request->query('line7');
        $jumlahJarum1Line7 = $request->query('line7-jarum1');
        $jumlahJarum2Line7 = $request->query('line7-jarum2');
        $jumlahObrasLine7 = $request->query('line7-obras');
        $jumlahLubangLine7 = $request->query('line7-lubang');
        $jumlahPasangLine7 = $request->query('line7-pasang');        
        $jumlahLine8 = $request->query('line8');
        $jumlahJarum1Line8 = $request->query('line8-jarum1');
        $jumlahJarum2Line8 = $request->query('line8-jarum2');
        $jumlahObrasLine8 = $request->query('line8-obras');
        $jumlahLubangLine8 = $request->query('line8-lubang');
        $jumlahPasangLine8 = $request->query('line8-pasang');        
        $jumlahLine9 = $request->query('line9');
        $jumlahJarum1Line9 = $request->query('line9-jarum1');
        $jumlahJarum2Line9 = $request->query('line9-jarum2');
        $jumlahObrasLine9 = $request->query('line9-obras');
        $jumlahLubangLine9 = $request->query('line9-lubang');
        $jumlahPasangLine9 = $request->query('line9-pasang');        
        $jumlahLine10 = $request->query('line10');
        $jumlahJarum1Line10 = $request->query('line10-jarum1');
        $jumlahJarum2Line10 = $request->query('line10-jarum2');
        $jumlahObrasLine10 = $request->query('line10-obras');
        $jumlahLubangLine10 = $request->query('line10-lubang');
        $jumlahPasangLine10 = $request->query('line10-pasang');        
        $jumlahLine11 = $request->query('line11');
        $jumlahJarum1Line11 = $request->query('line11-jarum1');
        $jumlahJarum2Line11 = $request->query('line11-jarum2');
        $jumlahObrasLine11 = $request->query('line11-obras');
        $jumlahLubangLine11 = $request->query('line11-lubang');
        $jumlahPasangLine11 = $request->query('line11-pasang');        
        $jumlahLine12 = $request->query('line12');
        $jumlahJarum1Line12 = $request->query('line12-jarum1');
        $jumlahJarum2Line12 = $request->query('line12-jarum2');
        $jumlahObrasLine12 = $request->query('line12-obras');
        $jumlahLubangLine12 = $request->query('line12-lubang');
        $jumlahPasangLine12 = $request->query('line12-pasang');        
        $jumlahLine13 = $request->query('line13');
        $jumlahJarum1Line13 = $request->query('line13-jarum1');
        $jumlahJarum2Line13 = $request->query('line13-jarum2');
        $jumlahObrasLine13 = $request->query('line13-obras');
        $jumlahLubangLine13 = $request->query('line13-lubang');
        $jumlahPasangLine13 = $request->query('line13-pasang');        
        $jumlahLine14 = $request->query('line14');
        $jumlahJarum1Line14 = $request->query('line14-jarum1');
        $jumlahJarum2Line14 = $request->query('line14-jarum2');
        $jumlahObrasLine14 = $request->query('line14-obras');
        $jumlahLubangLine14 = $request->query('line14-lubang');
        $jumlahPasangLine14 = $request->query('line14-pasang');        
        $jumlahLine15 = $request->query('line15');
        $jumlahJarum1Line15 = $request->query('line15-jarum1');
        $jumlahJarum2Line15 = $request->query('line15-jarum2');
        $jumlahObrasLine15 = $request->query('line15-obras');
        $jumlahLubangLine15 = $request->query('line15-lubang');
        $jumlahPasangLine15 = $request->query('line15-pasang');        
        $jumlahLine16 = $request->query('line16');
        $jumlahJarum1Line16 = $request->query('line16-jarum1');
        $jumlahJarum2Line16 = $request->query('line16-jarum2');
        $jumlahObrasLine16 = $request->query('line16-obras');
        $jumlahLubangLine16 = $request->query('line16-lubang');
        $jumlahPasangLine16 = $request->query('line16-pasang');        
        $jumlahLine17 = $request->query('line17');
        $jumlahJarum1Line17 = $request->query('line17-jarum1');
        $jumlahJarum2Line17 = $request->query('line17-jarum2');
        $jumlahObrasLine17 = $request->query('line17-obras');
        $jumlahLubangLine17 = $request->query('line17-lubang');
        $jumlahPasangLine17 = $request->query('line17-pasang');        
        $jumlahLine18 = $request->query('line18');
        $jumlahJarum1Line18 = $request->query('line18-jarum1');
        $jumlahJarum2Line18 = $request->query('line18-jarum2');
        $jumlahObrasLine18 = $request->query('line18-obras');
        $jumlahLubangLine18 = $request->query('line18-lubang');
        $jumlahPasangLine18 = $request->query('line18-pasang');        
        $jumlahLine19 = $request->query('line19');
        $jumlahJarum1Line19 = $request->query('line19-jarum1');
        $jumlahJarum2Line19 = $request->query('line19-jarum2');
        $jumlahObrasLine19 = $request->query('line19-obras');
        $jumlahLubangLine19 = $request->query('line19-lubang');
        $jumlahPasangLine19 = $request->query('line19-pasang');        
        $jumlahLine20 = $request->query('line20');
        $jumlahJarum1Line20 = $request->query('line20-jarum1');
        $jumlahJarum2Line20 = $request->query('line20-jarum2');
        $jumlahObrasLine20 = $request->query('line20-obras');
        $jumlahLubangLine20 = $request->query('line20-lubang');
        $jumlahPasangLine20 = $request->query('line20-pasang');        

        if ($jumlahJahitanLoncat) {
            $data_sewingsample = SewingSample::whereNotNull($jumlahJahitanLoncat)
                ->whereMonth($jumlahJahitanLoncat, now()->format('m'))
                ->whereYear($jumlahJahitanLoncat, now()->format('Y'))
                ->get();

        } elseif ($jumlahBenangPutusan) {
            $data_sewingsample = SewingSample::whereNotNull($jumlahBenangPutusan)
                ->whereMonth($jumlahBenangPutusan, now()->format('m'))
                ->whereYear($jumlahBenangPutusan, now()->format('Y'))
                ->get();
                
        } elseif ($jumlahGantiGuntingPisau) {
            $data_sewingsample = SewingSample::whereNotNull($jumlahGantiGuntingPisau)
                ->whereMonth($jumlahGantiGuntingPisau, now()->format('m'))
                ->whereYear($jumlahGantiGuntingPisau, now()->format('Y'))
                ->get();
                
        } elseif ($jumlahGantiRotary) {
            $data_sewingsample = SewingSample::whereNotNull($jumlahGantiRotary)
                ->whereMonth($jumlahGantiRotary, now()->format('m'))
                ->whereYear($jumlahGantiRotary, now()->format('Y'))
                ->get();

        } elseif ($jumlahGantiSuttelHook) {
            $data_sewingsample = SewingSample::whereNotNull($jumlahGantiSuttelHook)
                ->whereMonth($jumlahGantiSuttelHook, now()->format('m'))
                ->whereYear($jumlahGantiSuttelHook, now()->format('Y'))
                ->get();

        } elseif ($jumlahBakMesin) {
            $data_sewingsample = SewingSample::whereNotNull($jumlahBakMesin)
                ->whereMonth($jumlahBakMesin, now()->format('m'))
                ->whereYear($jumlahBakMesin, now()->format('Y'))
                ->get();
                
        } elseif ($jumlahPisauTidakMotong) {
            $data_sewingsample = SewingSample::whereNotNull($jumlahPisauTidakMotong)
                ->whereMonth($jumlahPisauTidakMotong, now()->format('m'))
                ->whereYear($jumlahPisauTidakMotong, now()->format('Y'))
                ->get();
                
        } elseif ($jumlahKondisiMinyakMesin) {
            $data_sewingsample = SewingSample::whereNotNull($jumlahKondisiMinyakMesin)
                ->whereMonth($jumlahKondisiMinyakMesin, now()->format('m'))
                ->whereYear($jumlahKondisiMinyakMesin, now()->format('Y'))
                ->get();

        } elseif ($jumlahGantiSparepartLainnya) {
            $data_sewingsample = SewingSample::whereNotNull($jumlahGantiSparepartLainnya)
                ->whereMonth($jumlahGantiSparepartLainnya, now()->format('m'))
                ->whereYear($jumlahGantiSparepartLainnya, now()->format('Y'))
                ->get();

        } elseif ($jumlahLine1) {
            $data_sewingsample = SewingSample::where('bagian', 'LINE 01')->get();

        } elseif ($jumlahJarum1Line1) {
            $data_sewingsample = SewingSample::where('bagian', 'LINE 01')
            ->where('jenis_mesin', 'JARUM 1')
            ->get();

        } elseif ($jumlahJarum2Line1) {
            $data_sewingsample = SewingSample::where('bagian', 'LINE 01')
            ->where('jenis_mesin', 'JARUM 2')
            ->get();

        } elseif ($jumlahObrasLine1) {
            $data_sewingsample = SewingSample::where('bagian', 'LINE 01')
            ->where('jenis_mesin', 'OBRAS')
            ->get();

        } elseif ($jumlahLubangLine1) {
            $data_sewingsample = SewingSample::where('bagian', 'LINE 01')
            ->where('jenis_mesin', 'LUBANG KANCING')
            ->get();

        } elseif ($jumlahPasangLine1) {
            $data_sewingsample = SewingSample::where('bagian', 'LINE 01')
            ->where('jenis_mesin', 'PASANG KANCING')
            ->get();

        } elseif ($jumlahLine2) {
            $data_sewingsample = SewingSample::where('bagian', 'LINE 02')->get();

        } elseif ($jumlahJarum1Line2) {
            $data_sewingsample = SewingSample::where('bagian', 'LINE 02')
            ->where('jenis_mesin', 'JARUM 1')
            ->get();

        } elseif ($jumlahJarum2Line2) {
            $data_sewingsample = SewingSample::where('bagian', 'LINE 02')
            ->where('jenis_mesin', 'JARUM 2')
            ->get();

        } elseif ($jumlahObrasLine2) {
            $data_sewingsample = SewingSample::where('bagian', 'LINE 02')
            ->where('jenis_mesin', 'OBRAS')
            ->get();

        } elseif ($jumlahLubangLine2) {
            $data_sewingsample = SewingSample::where('bagian', 'LINE 02')
            ->where('jenis_mesin', 'LUBANG KANCING')
            ->get();

        } elseif ($jumlahPasangLine2) {
            $data_sewingsample = SewingSample::where('bagian', 'LINE 02')
            ->where('jenis_mesin', 'PASANG KANCING')
            ->get();

        } elseif ($jumlahLine3) {
            $data_sewingsample = SewingSample::where('bagian', 'LINE 03')->get();

        } elseif ($jumlahJarum1Line3) {
            $data_sewingsample = SewingSample::where('bagian', 'LINE 03')
            ->where('jenis_mesin', 'JARUM 1')
            ->get();

        } elseif ($jumlahJarum2Line3) {
            $data_sewingsample = SewingSample::where('bagian', 'LINE 03')
            ->where('jenis_mesin', 'JARUM 2')
            ->get();

        } elseif ($jumlahObrasLine3) {
            $data_sewingsample = SewingSample::where('bagian', 'LINE 03')
            ->where('jenis_mesin', 'OBRAS')
            ->get();

        } elseif ($jumlahLubangLine3) {
            $data_sewingsample = SewingSample::where('bagian', 'LINE 03')
            ->where('jenis_mesin', 'LUBANG KANCING')
            ->get();

        } elseif ($jumlahPasangLine3) {
            $data_sewingsample = SewingSample::where('bagian', 'LINE 03')
            ->where('jenis_mesin', 'PASANG KANCING')
            ->get();

        } elseif ($jumlahLine4) {
            $data_sewingsample = SewingSample::where('bagian', 'LINE 04')->get();

        } elseif ($jumlahJarum1Line4) {
            $data_sewingsample = SewingSample::where('bagian', 'LINE 04')
            ->where('jenis_mesin', 'JARUM 1')
            ->get();

        } elseif ($jumlahJarum2Line4) {
            $data_sewingsample = SewingSample::where('bagian', 'LINE 04')
            ->where('jenis_mesin', 'JARUM 2')
            ->get();

        } elseif ($jumlahObrasLine4) {
            $data_sewingsample = SewingSample::where('bagian', 'LINE 04')
            ->where('jenis_mesin', 'OBRAS')
            ->get();

        } elseif ($jumlahLubangLine4) {
            $data_sewingsample = SewingSample::where('bagian', 'LINE 04')
            ->where('jenis_mesin', 'LUBANG KANCING')
            ->get();

        } elseif ($jumlahPasangLine4) {
            $data_sewingsample = SewingSample::where('bagian', 'LINE 04')
            ->where('jenis_mesin', 'PASANG KANCING')
            ->get();

        } elseif ($jumlahLine5) {
            $data_sewingsample = SewingSample::where('bagian', 'LINE 05')->get();

        } elseif ($jumlahJarum1Line5) {
            $data_sewingsample = SewingSample::where('bagian', 'LINE 05')
            ->where('jenis_mesin', 'JARUM 1')
            ->get();

        } elseif ($jumlahJarum2Line5) {
            $data_sewingsample = SewingSample::where('bagian', 'LINE 05')
            ->where('jenis_mesin', 'JARUM 2')
            ->get();

        } elseif ($jumlahObrasLine5) {
            $data_sewingsample = SewingSample::where('bagian', 'LINE 05')
            ->where('jenis_mesin', 'OBRAS')
            ->get();

        } elseif ($jumlahLubangLine5) {
            $data_sewingsample = SewingSample::where('bagian', 'LINE 05')
            ->where('jenis_mesin', 'LUBANG KANCING')
            ->get();

        } elseif ($jumlahPasangLine5) {
            $data_sewingsample = SewingSample::where('bagian', 'LINE 05')
            ->where('jenis_mesin', 'PASANG KANCING')
            ->get();

        } elseif ($jumlahLine6) {
            $data_sewingsample = SewingSample::where('bagian', 'LINE 06')->get();

        } elseif ($jumlahJarum1Line6) {
            $data_sewingsample = SewingSample::where('bagian', 'LINE 06')
            ->where('jenis_mesin', 'JARUM 1')
            ->get();

        } elseif ($jumlahJarum2Line6) {
            $data_sewingsample = SewingSample::where('bagian', 'LINE 06')
            ->where('jenis_mesin', 'JARUM 2')
            ->get();

        } elseif ($jumlahObrasLine6) {
            $data_sewingsample = SewingSample::where('bagian', 'LINE 06')
            ->where('jenis_mesin', 'OBRAS')
            ->get();

        } elseif ($jumlahLubangLine6) {
            $data_sewingsample = SewingSample::where('bagian', 'LINE 06')
            ->where('jenis_mesin', 'LUBANG KANCING')
            ->get();

        } elseif ($jumlahPasangLine6) {
            $data_sewingsample = SewingSample::where('bagian', 'LINE 06')
            ->where('jenis_mesin', 'PASANG KANCING')
            ->get();

        } elseif ($jumlahLine7) {
            $data_sewingsample = SewingSample::where('bagian', 'LINE 07')->get();

        } elseif ($jumlahJarum1Line7) {
            $data_sewingsample = SewingSample::where('bagian', 'LINE 07')
            ->where('jenis_mesin', 'JARUM 1')
            ->get();

        } elseif ($jumlahJarum2Line7) {
            $data_sewingsample = SewingSample::where('bagian', 'LINE 07')
            ->where('jenis_mesin', 'JARUM 2')
            ->get();

        } elseif ($jumlahObrasLine7) {
            $data_sewingsample = SewingSample::where('bagian', 'LINE 07')
            ->where('jenis_mesin', 'OBRAS')
            ->get();

        } elseif ($jumlahLubangLine7) {
            $data_sewingsample = SewingSample::where('bagian', 'LINE 07')
            ->where('jenis_mesin', 'LUBANG KANCING')
            ->get();

        } elseif ($jumlahPasangLine7) {
            $data_sewingsample = SewingSample::where('bagian', 'LINE 07')
            ->where('jenis_mesin', 'PASANG KANCING')
            ->get();

        } elseif ($jumlahLine8) {
            $data_sewingsample = SewingSample::where('bagian', 'LINE 08')->get();

        } elseif ($jumlahJarum1Line8) {
            $data_sewingsample = SewingSample::where('bagian', 'LINE 08')
            ->where('jenis_mesin', 'JARUM 1')
            ->get();

        } elseif ($jumlahJarum2Line8) {
            $data_sewingsample = SewingSample::where('bagian', 'LINE 08')
            ->where('jenis_mesin', 'JARUM 2')
            ->get();

        } elseif ($jumlahObrasLine8) {
            $data_sewingsample = SewingSample::where('bagian', 'LINE 08')
            ->where('jenis_mesin', 'OBRAS')
            ->get();

        } elseif ($jumlahLubangLine8) {
            $data_sewingsample = SewingSample::where('bagian', 'LINE 08')
            ->where('jenis_mesin', 'LUBANG KANCING')
            ->get();

        } elseif ($jumlahPasangLine8) {
            $data_sewingsample = SewingSample::where('bagian', 'LINE 08')
            ->where('jenis_mesin', 'PASANG KANCING')
            ->get();

        } elseif ($jumlahLine9) {
            $data_sewingsample = SewingSample::where('bagian', 'LINE 09')->get();

        } elseif ($jumlahJarum1Line9) {
            $data_sewingsample = SewingSample::where('bagian', 'LINE 09')
            ->where('jenis_mesin', 'JARUM 1')
            ->get();

        } elseif ($jumlahJarum2Line9) {
            $data_sewingsample = SewingSample::where('bagian', 'LINE 09')
            ->where('jenis_mesin', 'JARUM 2')
            ->get();

        } elseif ($jumlahObrasLine9) {
            $data_sewingsample = SewingSample::where('bagian', 'LINE 09')
            ->where('jenis_mesin', 'OBRAS')
            ->get();

        } elseif ($jumlahLubangLine9) {
            $data_sewingsample = SewingSample::where('bagian', 'LINE 09')
            ->where('jenis_mesin', 'LUBANG KANCING')
            ->get();

        } elseif ($jumlahPasangLine9) {
            $data_sewingsample = SewingSample::where('bagian', 'LINE 09')
            ->where('jenis_mesin', 'PASANG KANCING')
            ->get();

        } elseif ($jumlahLine10) {
            $data_sewingsample = SewingSample::where('bagian', 'LINE 10')->get();

        } elseif ($jumlahJarum1Line10) {
            $data_sewingsample = SewingSample::where('bagian', 'LINE 10')
            ->where('jenis_mesin', 'JARUM 1')
            ->get();

        } elseif ($jumlahJarum2Line10) {
            $data_sewingsample = SewingSample::where('bagian', 'LINE 10')
            ->where('jenis_mesin', 'JARUM 2')
            ->get();

        } elseif ($jumlahObrasLine10) {
            $data_sewingsample = SewingSample::where('bagian', 'LINE 10')
            ->where('jenis_mesin', 'OBRAS')
            ->get();

        } elseif ($jumlahLubangLine10) {
            $data_sewingsample = SewingSample::where('bagian', 'LINE 10')
            ->where('jenis_mesin', 'LUBANG KANCING')
            ->get();

        } elseif ($jumlahPasangLine10) {
            $data_sewingsample = SewingSample::where('bagian', 'LINE 10')
            ->where('jenis_mesin', 'PASANG KANCING')
            ->get();

        } elseif ($jumlahLine11) {
            $data_sewingsample = SewingSample::where('bagian', 'LINE 11')->get();

        } elseif ($jumlahJarum1Line11) {
            $data_sewingsample = SewingSample::where('bagian', 'LINE 11')
            ->where('jenis_mesin', 'JARUM 1')
            ->get();

        } elseif ($jumlahJarum2Line11) {
            $data_sewingsample = SewingSample::where('bagian', 'LINE 11')
            ->where('jenis_mesin', 'JARUM 2')
            ->get();

        } elseif ($jumlahObrasLine11) {
            $data_sewingsample = SewingSample::where('bagian', 'LINE 11')
            ->where('jenis_mesin', 'OBRAS')
            ->get();

        } elseif ($jumlahLubangLine11) {
            $data_sewingsample = SewingSample::where('bagian', 'LINE 11')
            ->where('jenis_mesin', 'LUBANG KANCING')
            ->get();

        } elseif ($jumlahPasangLine11) {
            $data_sewingsample = SewingSample::where('bagian', 'LINE 11')
            ->where('jenis_mesin', 'PASANG KANCING')
            ->get();

        } elseif ($jumlahLine12) {
            $data_sewingsample = SewingSample::where('bagian', 'LINE 12')->get();

        } elseif ($jumlahJarum1Line12) {
            $data_sewingsample = SewingSample::where('bagian', 'LINE 12')
            ->where('jenis_mesin', 'JARUM 1')
            ->get();

        } elseif ($jumlahJarum2Line12) {
            $data_sewingsample = SewingSample::where('bagian', 'LINE 12')
            ->where('jenis_mesin', 'JARUM 2')
            ->get();

        } elseif ($jumlahObrasLine12) {
            $data_sewingsample = SewingSample::where('bagian', 'LINE 12')
            ->where('jenis_mesin', 'OBRAS')
            ->get();

        } elseif ($jumlahLubangLine12) {
            $data_sewingsample = SewingSample::where('bagian', 'LINE 12')
            ->where('jenis_mesin', 'LUBANG KANCING')
            ->get();

        } elseif ($jumlahPasangLine12) {
            $data_sewingsample = SewingSample::where('bagian', 'LINE 12')
            ->where('jenis_mesin', 'PASANG KANCING')
            ->get();

        } elseif ($jumlahLine13) {
            $data_sewingsample = SewingSample::where('bagian', 'LINE 13')->get();

        } elseif ($jumlahJarum1Line13) {
            $data_sewingsample = SewingSample::where('bagian', 'LINE 13')
            ->where('jenis_mesin', 'JARUM 1')
            ->get();

        } elseif ($jumlahJarum2Line13) {
            $data_sewingsample = SewingSample::where('bagian', 'LINE 13')
            ->where('jenis_mesin', 'JARUM 2')
            ->get();

        } elseif ($jumlahObrasLine13) {
            $data_sewingsample = SewingSample::where('bagian', 'LINE 13')
            ->where('jenis_mesin', 'OBRAS')
            ->get();

        } elseif ($jumlahLubangLine13) {
            $data_sewingsample = SewingSample::where('bagian', 'LINE 13')
            ->where('jenis_mesin', 'LUBANG KANCING')
            ->get();

        } elseif ($jumlahPasangLine13) {
            $data_sewingsample = SewingSample::where('bagian', 'LINE 13')
            ->where('jenis_mesin', 'PASANG KANCING')
            ->get();

        } elseif ($jumlahLine14) {
            $data_sewingsample = SewingSample::where('bagian', 'LINE 14')->get();

        } elseif ($jumlahJarum1Line14) {
            $data_sewingsample = SewingSample::where('bagian', 'LINE 14')
            ->where('jenis_mesin', 'JARUM 1')
            ->get();

        } elseif ($jumlahJarum2Line14) {
            $data_sewingsample = SewingSample::where('bagian', 'LINE 14')
            ->where('jenis_mesin', 'JARUM 2')
            ->get();

        } elseif ($jumlahObrasLine14) {
            $data_sewingsample = SewingSample::where('bagian', 'LINE 14')
            ->where('jenis_mesin', 'OBRAS')
            ->get();

        } elseif ($jumlahLubangLine14) {
            $data_sewingsample = SewingSample::where('bagian', 'LINE 14')
            ->where('jenis_mesin', 'LUBANG KANCING')
            ->get();

        } elseif ($jumlahPasangLine14) {
            $data_sewingsample = SewingSample::where('bagian', 'LINE 14')
            ->where('jenis_mesin', 'PASANG KANCING')
            ->get();

        } elseif ($jumlahLine15) {
            $data_sewingsample = SewingSample::where('bagian', 'LINE 15')->get();

        } elseif ($jumlahJarum1Line15) {
            $data_sewingsample = SewingSample::where('bagian', 'LINE 15')
            ->where('jenis_mesin', 'JARUM 1')
            ->get();

        } elseif ($jumlahJarum2Line15) {
            $data_sewingsample = SewingSample::where('bagian', 'LINE 15')
            ->where('jenis_mesin', 'JARUM 2')
            ->get();

        } elseif ($jumlahObrasLine15) {
            $data_sewingsample = SewingSample::where('bagian', 'LINE 15')
            ->where('jenis_mesin', 'OBRAS')
            ->get();

        } elseif ($jumlahLubangLine15) {
            $data_sewingsample = SewingSample::where('bagian', 'LINE 15')
            ->where('jenis_mesin', 'LUBANG KANCING')
            ->get();

        } elseif ($jumlahPasangLine15) {
            $data_sewingsample = SewingSample::where('bagian', 'LINE 15')
            ->where('jenis_mesin', 'PASANG KANCING')
            ->get();

        } elseif ($jumlahLine16) {
            $data_sewingsample = SewingSample::where('bagian', 'LINE 16')->get();

        } elseif ($jumlahJarum1Line16) {
            $data_sewingsample = SewingSample::where('bagian', 'LINE 16')
            ->where('jenis_mesin', 'JARUM 1')
            ->get();

        } elseif ($jumlahJarum2Line16) {
            $data_sewingsample = SewingSample::where('bagian', 'LINE 16')
            ->where('jenis_mesin', 'JARUM 2')
            ->get();

        } elseif ($jumlahObrasLine16) {
            $data_sewingsample = SewingSample::where('bagian', 'LINE 16')
            ->where('jenis_mesin', 'OBRAS')
            ->get();

        } elseif ($jumlahLubangLine16) {
            $data_sewingsample = SewingSample::where('bagian', 'LINE 16')
            ->where('jenis_mesin', 'LUBANG KANCING')
            ->get();

        } elseif ($jumlahPasangLine16) {
            $data_sewingsample = SewingSample::where('bagian', 'LINE 16')
            ->where('jenis_mesin', 'PASANG KANCING')
            ->get();

        } elseif ($jumlahLine17) {
            $data_sewingsample = SewingSample::where('bagian', 'LINE 17')->get();

        } elseif ($jumlahJarum1Line17) {
            $data_sewingsample = SewingSample::where('bagian', 'LINE 17')
            ->where('jenis_mesin', 'JARUM 1')
            ->get();

        } elseif ($jumlahJarum2Line17) {
            $data_sewingsample = SewingSample::where('bagian', 'LINE 17')
            ->where('jenis_mesin', 'JARUM 2')
            ->get();

        } elseif ($jumlahObrasLine17) {
            $data_sewingsample = SewingSample::where('bagian', 'LINE 17')
            ->where('jenis_mesin', 'OBRAS')
            ->get();

        } elseif ($jumlahLubangLine17) {
            $data_sewingsample = SewingSample::where('bagian', 'LINE 17')
            ->where('jenis_mesin', 'LUBANG KANCING')
            ->get();

        } elseif ($jumlahPasangLine17) {
            $data_sewingsample = SewingSample::where('bagian', 'LINE 17')
            ->where('jenis_mesin', 'PASANG KANCING')
            ->get();

        } elseif ($jumlahLine18) {
            $data_sewingsample = SewingSample::where('bagian', 'LINE 18')->get();

        } elseif ($jumlahJarum1Line18) {
            $data_sewingsample = SewingSample::where('bagian', 'LINE 18')
            ->where('jenis_mesin', 'JARUM 1')
            ->get();

        } elseif ($jumlahJarum2Line18) {
            $data_sewingsample = SewingSample::where('bagian', 'LINE 18')
            ->where('jenis_mesin', 'JARUM 2')
            ->get();

        } elseif ($jumlahObrasLine18) {
            $data_sewingsample = SewingSample::where('bagian', 'LINE 18')
            ->where('jenis_mesin', 'OBRAS')
            ->get();

        } elseif ($jumlahLubangLine18) {
            $data_sewingsample = SewingSample::where('bagian', 'LINE 18')
            ->where('jenis_mesin', 'LUBANG KANCING')
            ->get();

        } elseif ($jumlahPasangLine18) {
            $data_sewingsample = SewingSample::where('bagian', 'LINE 18')
            ->where('jenis_mesin', 'PASANG KANCING')
            ->get();

        } elseif ($jumlahLine19) {
            $data_sewingsample = SewingSample::where('bagian', 'LINE 19')->get();

        } elseif ($jumlahJarum1Line19) {
            $data_sewingsample = SewingSample::where('bagian', 'LINE 19')
            ->where('jenis_mesin', 'JARUM 1')
            ->get();

        } elseif ($jumlahJarum2Line19) {
            $data_sewingsample = SewingSample::where('bagian', 'LINE 19')
            ->where('jenis_mesin', 'JARUM 2')
            ->get();

        } elseif ($jumlahObrasLine19) {
            $data_sewingsample = SewingSample::where('bagian', 'LINE 19')
            ->where('jenis_mesin', 'OBRAS')
            ->get();

        } elseif ($jumlahLubangLine19) {
            $data_sewingsample = SewingSample::where('bagian', 'LINE 19')
            ->where('jenis_mesin', 'LUBANG KANCING')
            ->get();

        } elseif ($jumlahPasangLine19) {
            $data_sewingsample = SewingSample::where('bagian', 'LINE 19')
            ->where('jenis_mesin', 'PASANG KANCING')
            ->get();

        } elseif ($jumlahLine20) {
            $data_sewingsample = SewingSample::where('bagian', 'LINE 20')->get();

        } elseif ($jumlahJarum1Line20) {
            $data_sewingsample = SewingSample::where('bagian', 'LINE 20')
            ->where('jenis_mesin', 'JARUM 1')
            ->get();

        } elseif ($jumlahJarum2Line20) {
            $data_sewingsample = SewingSample::where('bagian', 'LINE 20')
            ->where('jenis_mesin', 'JARUM 2')
            ->get();

        } elseif ($jumlahObrasLine20) {
            $data_sewingsample = SewingSample::where('bagian', 'LINE 20')
            ->where('jenis_mesin', 'OBRAS')
            ->get();

        } elseif ($jumlahLubangLine20) {
            $data_sewingsample = SewingSample::where('bagian', 'LINE 20')
            ->where('jenis_mesin', 'LUBANG KANCING')
            ->get();

        } elseif ($jumlahPasangLine20) {
            $data_sewingsample = SewingSample::where('bagian', 'LINE 20')
            ->where('jenis_mesin', 'PASANG KANCING')
            ->get();

        } else {
            $data_sewingsample = SewingSample::sortable()->get();
        }

        return view('sewingsamplemachine.sewingsamples', compact('data_sewingsample'));
    }

    public function search(Request $request)
    {
    $searchType = $request->input('searchType');
    $searchTerm = $request->input('search');

    if ($searchTerm) {
        if ($searchType === 'serial_number') {
            $data_sewingsample = SewingSample::where('serial_number', 'LIKE', '%' . $searchTerm . '%')->get();
        } elseif ($searchType === 'type') {
            $data_sewingsample = SewingSample::where('tipe', 'LIKE', '%' . $searchTerm . '%')->get();
        } elseif ($searchType === 'jenis') {
            $data_sewingsample = SewingSample::where('jenis_mesin', 'LIKE', '%' . $searchTerm . '%')->get();
        } elseif ($searchType === 'bagian') {
            $data_sewingsample = SewingSample::where('bagian', 'LIKE', '%' . $searchTerm . '%')->get();
        } elseif ($searchType === 'sparepart-diganti') {
            $data_sparepart = Sparepart::where('nama_sparepart', 'LIKE', '%' . $searchTerm . '%')->get();
        }  elseif ($searchType === 'indikator-mesin') {
            $data_sewingsample = SewingSample::where('indikator_mesin', 'LIKE', '%' . $searchTerm . '%')->get();      
        } else {
        $data_sewingsample = SewingSample::all();
    }
    return view('sewingsamplemachine.sewingsamples', compact('data_sewingsample'));
    }
}

    public function addsewingsample()
    {
        return view ('sewingsamplemachine.addsewingsample');
    }
    
    public function insertsewingsample(Request $request)
    {
        SewingSample::create($request->all());   
        return redirect()->route('sewing-sample')->with('success', 'Data Berhasil Dimasukkan');
    }

    public function showsewingsample(string $serial_number)
    {
        $data_sewingsample = SewingSample::find($serial_number);
        Session::put('url', request()->fullUrl());
        return view('sewingsamplemachine.showsewingsamples', compact('data_sewingsample'));
    }

    public function tampilsewingsample(string $serial_number)
    {
        $data_sewingsample = SewingSample::find($serial_number);
        $data_sparepart = Sparepart::all();
        return view('sewingsamplemachine.tampilsewingsample', compact('data_sewingsample', 'data_sparepart'));
    }

    public function editsewingsample(Request $request, string $serial_number)
    {
    $data_sewingsample = SewingSample::find($serial_number);
    if (!$data_sewingsample) {
        return redirect()->back()->with('error', 'Invalid serial number or record not found.');
    }
    $old_serial_number = $data_sewingsample->serial_number;
    $data_sewingsample->update($request->all());
    $new_serial_number = $data_sewingsample->serial_number;
    $returnRoute = Session::pull('url', null);
    if ($returnRoute) {
        $returnRoute = str_replace($old_serial_number, $new_serial_number, $returnRoute);
        return redirect($returnRoute)->with('success', 'Data Berhasil Diperbarui');
    }
    return redirect()->route('showsewingsamples', ['serial_number' => $new_serial_number]);
    }


    public function deletesewingsample(string $serial_number)
    {
        $data_sewingsample = SewingSample::find($serial_number);
        $data_sewingsample->delete();
        return redirect()->route('sewing-sample')->with('success', 'Data Berhasil Dihapus');
    }

    public function exportsewingsample() {
        return Excel::download(new SewingSampleExport, 'datasewingsample.xlsx');
    }

    public function historysewingsample(string $serial_number)
    {
        $data_sewingsample = SewingSample::find($serial_number);
        $audits = $data_sewingsample->audits;
        return view('sewingsamplemachine.historysewingsample', compact('audits'));
    }
    
    public function deletehistorysewing(string $id)
    {
    $audit = Audit::findOrFail($id);
    $audit->delete();
    return redirect()->back()->with('success', 'History Log Deleted Successfully');
    }
}
