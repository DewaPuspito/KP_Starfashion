<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KMController;
use App\Http\Controllers\FuseController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\StripController;
use App\Http\Controllers\FabricController;
use App\Http\Controllers\PatternController;
use App\Http\Controllers\PippingController;
use App\Http\Controllers\PlotterController;
use App\Http\Controllers\BandKnifeController;
use App\Http\Controllers\SparepartController;
use App\Http\Controllers\CuttingMenuController;
use App\Http\Controllers\SewingSampleController;
use App\Http\Controllers\MetalDetectorController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get("/main-menu", [MainController::class, 'index'])->name('main-menu');
Route::get("/cutting-menu", [CuttingMenuController::class, 'cuttingindex'])->name('cutting-menu');

// Sewing and Sample
Route::get("/sewing-sample", [SewingSampleController::class, 'index'])->name('sewing-sample');
Route::get("/addsewingsample", [SewingSampleController::class, 'addsewingsample'])->name('addsewingsample');
Route::post("/insertsewingsample", [SewingSampleController::class, 'insertsewingsample'])->name('insertsewingsample');
Route::get("/showsewingsample/{id}", [SewingSampleController::class, 'showsewingsample'])->name('showsewingsample');
Route::get("/tampilsewingsample/{id}", [SewingSampleController::class, 'tampilsewingsample'])->name('tampilsewingsample'); 
Route::post("/editsewingsample/{id}", [SewingSampleController::class, 'editsewingsample'])->name('editsewingsample');  
Route::get("/deletesewingsample/{id}", [SewingSampleController::class, 'deletesewingsample'])->name('deletesewingsample');
Route::get('/search', [SewingSampleController::class, 'search'])->name('search');
Route::get("/exportsewingsample", [SewingSampleController::class, 'exportsewingsample'])->name('exportsewingsample');



// Fuse Machine
Route::get("/fuse", [FuseController::class, 'index'])->name('fuse');
Route::get("/addfuse", [FuseController::class, 'addfuse'])->name('addfuse');
Route::post("/insertfuse", [FuseController::class, 'insertfuse'])->name('insertfuse');
Route::get("/showfuse/{id}", [FuseController::class, 'showfuse'])->name('showfuse');
Route::get("/tampilfuse/{id}", [FuseController::class, 'tampilfuse'])->name('tampilfuse'); 
Route::post("/editfuse/{id}", [FuseController::class, 'editfuse'])->name('editfuse');  
Route::get("/deletefuse/{id}", [FuseController::class, 'deletefuse'])->name('deletefuse'); 
Route::get("/exportfuse", [FuseController::class, 'exportfuse'])->name('exportfuse'); 

// KM Cutting Machine
Route::get("/km-cutting", [KMController::class, 'index'])->name('km-cutting');
Route::get("/addkmcutting", [KMController::class, 'addkmcutting'])->name('addkmcutting');
Route::post("/insertkmcutting", [KMController::class, 'insertkmcutting'])->name('insertkmcutting');
Route::get("/showkmcutting/{id}", [KMController::class, 'showkmcutting'])->name('showkmcutting');
Route::get("/tampilkmcutting/{id}", [KMController::class, 'tampilkmcutting'])->name('tampilkmcutting'); 
Route::post("/editkmcutting/{id}", [KMController::class, 'editkmcutting'])->name('editkmcutting');  
Route::get("/deletekmcutting/{id}", [KMController::class, 'deletekmcutting'])->name('deletekmcutting');  
Route::get("/exportkmcutting", [KMController::class, 'exportkmcutting'])->name('exportkmcutting');

// Band Knife Machine
Route::get("/band-knife", [BandKnifeController::class, 'index'])->name('band-knife');
Route::get("/addbandknife", [BandKnifeController::class, 'addbandknife'])->name('addbandknife');
Route::post("/insertbandknife", [BandKnifeController::class, 'insertbandknife'])->name('insertbandknife');
Route::get("/showbandknife/{id}", [BandKnifeController::class, 'showbandknife'])->name('showbandknife');
Route::get("/tampilbandknife/{id}", [BandKnifeController::class, 'tampilbandknife'])->name('tampilbandknife'); 
Route::post("/editbandknife/{id}", [BandKnifeController::class, 'editbandknife'])->name('editbandknife');  
Route::get("/deletebandknife/{id}", [BandKnifeController::class, 'deletebandknife'])->name('deletebandknife');  
Route::get("/exportbandknife", [BandKnifeController::class, 'exportbandknife'])->name('exportbandknife');

// Plotter
Route::get("/plotter", [PlotterController::class, 'index'])->name('plotter');
Route::get("/addplotter", [PlotterController::class, 'addplotter'])->name('addplotter');
Route::post("/insertplotter", [PlotterController::class, 'insertplotter'])->name('insertplotter');
Route::get("/showplotter/{id}", [PlotterController::class, 'showplotter'])->name('showplotter');
Route::get("/tampilplotter/{id}", [PlotterController::class, 'tampilplotter'])->name('tampilplotter'); 
Route::post("/editplotter/{id}", [PlotterController::class, 'editplotter'])->name('editplotter');  
Route::get("/deleteplotter/{id}", [PlotterController::class, 'deleteplotter'])->name('deleteplotter');  
Route::get("/exportplotter", [PlotterController::class, 'exportplotter'])->name('exportplotter');

// Metal Detector
Route::get("/metal-detector", [MetalDetectorController::class, 'index'])->name('metal-detector');
Route::get("/addmetaldetector", [MetalDetectorController::class, 'addmetaldetector'])->name('addmetaldetector');
Route::post("/insertmetaldetector", [MetalDetectorController::class, 'insertmetaldetector'])->name('insertmetaldetector');
Route::get("/showmetaldetector/{id}", [MetalDetectorController::class, 'showmetaldetector'])->name('showmetaldetector');
Route::get("/tampilmetaldetector/{id}", [MetalDetectorController::class, 'tampilmetaldetector'])->name('tampilmetaldetector'); 
Route::post("/editmetaldetector/{id}", [MetalDetectorController::class, 'editmetaldetector'])->name('editmetaldetector');  
Route::get("/deletemetaldetector/{id}", [MetalDetectorController::class, 'deletemetaldetector'])->name('deletemetaldetector');  
Route::get("/exportmetaldetector", [MetalDetectorController::class, 'exportmetaldetector'])->name('exportmetaldetector');

// Cutter Pattern
Route::get("/pattern", [PatternController::class, 'index'])->name('pattern');
Route::get("/addpattern", [PatternController::class, 'addpattern'])->name('addpattern');
Route::post("/insertpattern", [PatternController::class, 'insertpattern'])->name('insertpattern');
Route::get("/showpattern/{id}", [PatternController::class, 'showpattern'])->name('showpattern');
Route::get("/tampilpattern/{id}", [PatternController::class, 'tampilpattern'])->name('tampilpattern'); 
Route::post("/editpattern/{id}", [PatternController::class, 'editpattern'])->name('editpattern');  
Route::get("/deletepattern/{id}", [PatternController::class, 'deletepattern'])->name('deletepattern');  
Route::get("/exportpattern", [PatternController::class, 'exportpattern'])->name('exportpattern');

// Rewinding Pipping
Route::get("/pipping", [PippingController::class, 'index'])->name('pipping');
Route::get("/addpipping", [PippingController::class, 'addpipping'])->name('addpipping');
Route::post("/insertpipping", [PippingController::class, 'insertpipping'])->name('insertpipping');
Route::get("/showpipping/{id}", [PippingController::class, 'showpipping'])->name('showpipping');
Route::get("/tampilpipping/{id}", [PippingController::class, 'tampilpipping'])->name('tampilpipping'); 
Route::post("/editpipping/{id}", [PippingController::class, 'editpipping'])->name('editpipping');  
Route::get("/deletepipping/{id}", [PippingController::class, 'deletepipping'])->name('deletepipping');  
Route::get("/exportpipping", [PippingController::class, 'exportpipping'])->name('exportpipping');

// Strip Cutter
Route::get("/strip", [StripController::class, 'index'])->name('strip');
Route::get("/addstrip", [StripController::class, 'addstrip'])->name('addstrip');
Route::post("/insertstrip", [StripController::class, 'insertstrip'])->name('insertstrip');
Route::get("/showstrip/{id}", [StripController::class, 'showstrip'])->name('showstrip');
Route::get("/tampilstrip/{id}", [StripController::class, 'tampilstrip'])->name('tampilstrip'); 
Route::post("/editstrip/{id}", [StripController::class, 'editstrip'])->name('editstrip');  
Route::get("/deletestrip/{id}", [StripController::class, 'deletestrip'])->name('deletestrip');
Route::get("/exportstrip", [StripController::class, 'exportstrip'])->name('exportstrip');

// Fabric Warehouse
Route::get("/fabric", [FabricController::class, 'index'])->name('fabric');
Route::get("/addfabric", [FabricController::class, 'addfabric'])->name('addfabric');
Route::post("/insertfabric", [FabricController::class, 'insertfabric'])->name('insertfabric');
Route::get("/showfabric/{id}", [FabricController::class, 'showfabric'])->name('showfabric');
Route::get("/tampilfabric/{id}", [FabricController::class, 'tampilfabric'])->name('tampilfabric'); 
Route::post("/editfabric/{id}", [FabricController::class, 'editfabric'])->name('editfabric');  
Route::get("/deletefabric/{id}", [FabricController::class, 'deletefabric'])->name('deletefabric');
Route::get("/exportfabric", [FabricController::class, 'exportfabric'])->name('exportfabric');

// Sparepart
Route::get("/sparepart", [SparepartController::class, 'index'])->name('sparepart');
Route::get("/addsparepart", [SparepartController::class, 'addsparepart'])->name('addsparepart');
Route::post("/insertsparepart", [SparepartController::class, 'insertsparepart'])->name('insertsparepart');
Route::get("/showsparepart/{id}", [SparepartController::class, 'showsparepart'])->name('showsparepart');
Route::get("/tampilsparepart/{id}", [SparepartController::class, 'tampilsparepart'])->name('tampilsparepart'); 
Route::post("/editsparepart/{id}", [SparepartController::class, 'editsparepart'])->name('editsparepart');  
Route::get("/deletesparepart/{id}", [SparepartController::class, 'deletesparepart'])->name('deletesparepart');
Route::get("/exportsparepart", [SparepartController::class, 'exportsparepart'])->name('exportsparepart');