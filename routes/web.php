<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('index');
// });
// Route::view('/','index');

// Route::get('/portfolio', function () {
//     return view('portfolio', [
//         "nama" => "Michelle",
//         "nilai" => [80,70,60] //cara 1
//     ]);
// });

// // Route::view('/portfolio', 'welcome');

// Route::get('/admin/staf', function () {
//     return view('admin.staf')
//     ->with('nama', 'Budi'); //cara 2
// });
// Route::get('/admin/mahasiswa', function () {
//     $mhs = "Michelle";

//     return view('admin.mahasiswa', compact('mhs')); //cara 3
// });
// // Route::get('/admin/mahasiswa/{mhs?}',
// // function ($mhs = "N/A") {

// //     return view('admin.mahasiswa', compact('mhs')); //cara 4
// // });

// Route::get('/testing/{harga?}', function($harga = 0){
//     return view ('test', compact('harga'));
// });

Route::get('/', function () {
    return view('home');
   });

Route::get('/mhskita', function () {
    $dtMahasiswa = [
    "Mario Mario",
    "Luigi Mario",
    "Peach Toadstool",
    "Daisy",
    "T. Yoshisaur Munchakoopas"];
    return view('mahasiswa')->with('dtMahasiswa', $dtMahasiswa);
   })->name('mahasiswa');

Route::get('/dosen', function () {
    $dtDosen = [
        "King Bowser Koopa",
        "Jimmy Poppadopolos",
        "Wario Scapelli",
        "Donkey Kong",
        "Koopa Junior"];
    return view('dosen')->with('dtDosen', $dtDosen);
   });
