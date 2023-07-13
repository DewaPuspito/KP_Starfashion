<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KMController;
use App\Http\Controllers\FuseController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\LoginController;
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

Route::group(['middleware' => 'auth'], function ()  {
Route::get("/main-menu", [MainController::class, 'index'])->name('main-menu');
Route::get("/cutting-menu", [CuttingMenuController::class, 'cuttingindex'])->name('cutting-menu');
});

// Login and Register
Route::get("/login", [LoginController::class, 'login'])->name('login');
Route::post("/postlogin", [LoginController::class, 'postlogin'])->name('postlogin');
Route::get("/logout", [LoginController::class, 'logout'])->name('logout');
Route::get("/register", [LoginController::class, 'register'])->name('register');
Route::post("/postregister", [LoginController::class, 'postregister'])->name('postregister');

// Sewing and Sample
Route::group(['middleware' => 'auth'], function () {
Route::get("/addsewingsample", [SewingSampleController::class, 'addsewingsample'])->name('addsewingsample');
Route::post("/insertsewingsample", [SewingSampleController::class, 'insertsewingsample'])->name('insertsewingsample');
Route::get("/deletesewingsample/{id}", [SewingSampleController::class, 'deletesewingsample'])->name('deletesewingsample');
Route::get('/search', [SewingSampleController::class, 'search'])->name('search');
Route::get("/exportsewingsample", [SewingSampleController::class, 'exportsewingsample'])->name('exportsewingsample');
});
Route::get("/sewing-sample", [SewingSampleController::class, 'index'])->name('sewing-sample');
Route::get("/showsewingsample/{id}", [SewingSampleController::class, 'showsewingsample'])->name('showsewingsample');
Route::get("/tampilsewingsample/{id}", [SewingSampleController::class, 'tampilsewingsample'])->name('tampilsewingsample'); 
Route::post("/editsewingsample/{id}", [SewingSampleController::class, 'editsewingsample'])->name('editsewingsample');  



// Fuse Machine
Route::group(['middleware' => 'auth'], function () {
Route::get("/fuse", [FuseController::class, 'index'])->name('fuse');
Route::get("/addfuse", [FuseController::class, 'addfuse'])->name('addfuse');
Route::post("/insertfuse", [FuseController::class, 'insertfuse'])->name('insertfuse');
Route::get("/deletefuse/{id}", [FuseController::class, 'deletefuse'])->name('deletefuse'); 
Route::get("/exportfuse", [FuseController::class, 'exportfuse'])->name('exportfuse'); 
});
Route::get("/showfuse/{id}", [FuseController::class, 'showfuse'])->name('showfuse');
Route::get("/tampilfuse/{id}", [FuseController::class, 'tampilfuse'])->name('tampilfuse'); 
Route::post("/editfuse/{id}", [FuseController::class, 'editfuse'])->name('editfuse');  

// KM Cutting Machine
Route::group(['middleware' => 'auth'], function () {
Route::get("/km-cutting", [KMController::class, 'index'])->name('km-cutting');
Route::get("/addkmcutting", [KMController::class, 'addkmcutting'])->name('addkmcutting');
Route::post("/insertkmcutting", [KMController::class, 'insertkmcutting'])->name('insertkmcutting');
Route::get("/deletekmcutting/{id}", [KMController::class, 'deletekmcutting'])->name('deletekmcutting');  
Route::get("/exportkmcutting", [KMController::class, 'exportkmcutting'])->name('exportkmcutting');
});
Route::get("/showkmcutting/{id}", [KMController::class, 'showkmcutting'])->name('showkmcutting');
Route::get("/tampilkmcutting/{id}", [KMController::class, 'tampilkmcutting'])->name('tampilkmcutting'); 
Route::post("/editkmcutting/{id}", [KMController::class, 'editkmcutting'])->name('editkmcutting');  


// Band Knife Machine
Route::group(['middleware' => 'auth'], function () {
Route::get("/band-knife", [BandKnifeController::class, 'index'])->name('band-knife');
Route::get("/addbandknife", [BandKnifeController::class, 'addbandknife'])->name('addbandknife');
Route::post("/insertbandknife", [BandKnifeController::class, 'insertbandknife'])->name('insertbandknife');
Route::get("/deletebandknife/{id}", [BandKnifeController::class, 'deletebandknife'])->name('deletebandknife');  
Route::get("/exportbandknife", [BandKnifeController::class, 'exportbandknife'])->name('exportbandknife');
});
Route::get("/showbandknife/{id}", [BandKnifeController::class, 'showbandknife'])->name('showbandknife');
Route::get("/tampilbandknife/{id}", [BandKnifeController::class, 'tampilbandknife'])->name('tampilbandknife'); 
Route::post("/editbandknife/{id}", [BandKnifeController::class, 'editbandknife'])->name('editbandknife');  

// Plotter
Route::group(['middleware' => 'auth'], function () {
Route::get("/plotter", [PlotterController::class, 'index'])->name('plotter');
Route::get("/addplotter", [PlotterController::class, 'addplotter'])->name('addplotter');
Route::post("/insertplotter", [PlotterController::class, 'insertplotter'])->name('insertplotter');
Route::get("/deleteplotter/{id}", [PlotterController::class, 'deleteplotter'])->name('deleteplotter');  
Route::get("/exportplotter", [PlotterController::class, 'exportplotter'])->name('exportplotter');
});
Route::get("/showplotter/{id}", [PlotterController::class, 'showplotter'])->name('showplotter');
Route::get("/tampilplotter/{id}", [PlotterController::class, 'tampilplotter'])->name('tampilplotter'); 
Route::post("/editplotter/{id}", [PlotterController::class, 'editplotter'])->name('editplotter');

// Metal Detector
Route::group(['middleware' => 'auth'], function () {
Route::get("/metal-detector", [MetalDetectorController::class, 'index'])->name('metal-detector')->middleware('auth');
Route::get("/addmetaldetector", [MetalDetectorController::class, 'addmetaldetector'])->name('addmetaldetector')->middleware('auth');
Route::post("/insertmetaldetector", [MetalDetectorController::class, 'insertmetaldetector'])->name('insertmetaldetector')->middleware('auth');
Route::get("/deletemetaldetector/{id}", [MetalDetectorController::class, 'deletemetaldetector'])->name('deletemetaldetector')->middleware('auth');  
Route::get("/exportmetaldetector", [MetalDetectorController::class, 'exportmetaldetector'])->name('exportmetaldetector')->middleware('auth');
});
Route::get("/showmetaldetector/{id}", [MetalDetectorController::class, 'showmetaldetector'])->name('showmetaldetector');
Route::get("/tampilmetaldetector/{id}", [MetalDetectorController::class, 'tampilmetaldetector'])->name('tampilmetaldetector'); 
Route::post("/editmetaldetector/{id}", [MetalDetectorController::class, 'editmetaldetector'])->name('editmetaldetector');  

// Cutter Pattern
Route::group(['middleware' => 'auth'], function () {
Route::get("/pattern", [PatternController::class, 'index'])->name('pattern');
Route::get("/addpattern", [PatternController::class, 'addpattern'])->name('addpattern');
Route::post("/insertpattern", [PatternController::class, 'insertpattern'])->name('insertpattern');
Route::get("/deletepattern/{id}", [PatternController::class, 'deletepattern'])->name('deletepattern');  
Route::get("/exportpattern", [PatternController::class, 'exportpattern'])->name('exportpattern');
});
Route::get("/showpattern/{id}", [PatternController::class, 'showpattern'])->name('showpattern');
Route::get("/tampilpattern/{id}", [PatternController::class, 'tampilpattern'])->name('tampilpattern'); 
Route::post("/editpattern/{id}", [PatternController::class, 'editpattern'])->name('editpattern');  

// Rewinding Pipping
Route::group(['middleware' => 'auth'], function () {
Route::get("/pipping", [PippingController::class, 'index'])->name('pipping');
Route::get("/addpipping", [PippingController::class, 'addpipping'])->name('addpipping');
Route::post("/insertpipping", [PippingController::class, 'insertpipping'])->name('insertpipping');
Route::get("/deletepipping/{id}", [PippingController::class, 'deletepipping'])->name('deletepipping');  
Route::get("/exportpipping", [PippingController::class, 'exportpipping'])->name('exportpipping');
});
Route::get("/showpipping/{id}", [PippingController::class, 'showpipping'])->name('showpipping');
Route::get("/tampilpipping/{id}", [PippingController::class, 'tampilpipping'])->name('tampilpipping'); 
Route::post("/editpipping/{id}", [PippingController::class, 'editpipping'])->name('editpipping');  

// Strip Cutter
Route::group(['middleware' => 'auth'], function () {
Route::get("/strip", [StripController::class, 'index'])->name('strip');
Route::get("/addstrip", [StripController::class, 'addstrip'])->name('addstrip');
Route::post("/insertstrip", [StripController::class, 'insertstrip'])->name('insertstrip');
Route::get("/deletestrip/{id}", [StripController::class, 'deletestrip'])->name('deletestrip');
Route::get("/exportstrip", [StripController::class, 'exportstrip'])->name('exportstrip');
});
Route::get("/showstrip/{id}", [StripController::class, 'showstrip'])->name('showstrip');
Route::get("/tampilstrip/{id}", [StripController::class, 'tampilstrip'])->name('tampilstrip'); 
Route::post("/editstrip/{id}", [StripController::class, 'editstrip'])->name('editstrip');  

// Fabric Warehouse
Route::group(['middleware' => 'auth'], function () {
Route::get("/fabric", [FabricController::class, 'index'])->name('fabric');
Route::get("/addfabric", [FabricController::class, 'addfabric'])->name('addfabric');
Route::post("/insertfabric", [FabricController::class, 'insertfabric'])->name('insertfabric');
Route::get("/deletefabric/{id}", [FabricController::class, 'deletefabric'])->name('deletefabric');
Route::get("/exportfabric", [FabricController::class, 'exportfabric'])->name('exportfabric');
});
Route::get("/showfabric/{id}", [FabricController::class, 'showfabric'])->name('showfabric');
Route::get("/tampilfabric/{id}", [FabricController::class, 'tampilfabric'])->name('tampilfabric'); 
Route::post("/editfabric/{id}", [FabricController::class, 'editfabric'])->name('editfabric');

// Sparepart
Route::group(['middleware' => 'auth'], function () {
Route::get("/sparepart", [SparepartController::class, 'index'])->name('sparepart');
Route::get("/addsparepart", [SparepartController::class, 'addsparepart'])->name('addsparepart');
Route::post("/insertsparepart", [SparepartController::class, 'insertsparepart'])->name('insertsparepart');
Route::get("/deletesparepart/{id}", [SparepartController::class, 'deletesparepart'])->name('deletesparepart');
Route::get("/exportsparepart", [SparepartController::class, 'exportsparepart'])->name('exportsparepart');
});
Route::get("/showsparepart/{id}", [SparepartController::class, 'showsparepart'])->name('showsparepart');
Route::get("/tampilsparepart/{id}", [SparepartController::class, 'tampilsparepart'])->name('tampilsparepart'); 
Route::post("/editsparepart/{id}", [SparepartController::class, 'editsparepart'])->name('editsparepart');  