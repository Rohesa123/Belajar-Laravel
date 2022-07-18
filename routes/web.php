<?php

use App\Http\Controllers\PengenalanController;
use App\Http\Controllers\LatihanController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\BranchController;
use App\Http\Controllers\StaffBranchController;
use App\Http\Controllers\TabelSiswaController;
use App\Http\Controllers\StaffBranch1Controller;

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

Route::get('/', function () {
 return view('welcome');
});

Route::get("/Hello", function () {
 echo "<center><u>";
 echo "Hello semuanya apa kabar?<br>";
 echo "Pada kali ini kita sedang belajar route basic";
 echo "</u></center>";
});

Route::get("/home", function () {
 return view("home");
});

Route::get("/pages1", function () {
 return view("pages1.index");
});

Route::get("/pages2", function () {
 return view("pages2.index");
});

Route::get("/pages3", function () {
 return view("pages3.index");
});

Route::get("/biodata/{nama}+{umur}+{Alamat}+{jk}+{hobi}", function ($nama, $umur, $alamat, $jk, $hobi) {
 return view('pages1.biodata', compact('nama', "umur", "alamat", "jk", "hobi"));
});

Route::get("/pesanan/{minuman?}", function ($minuman = "Kosong") {
 return view('pages1.pesanan', compact("minuman"));
});

Route::get("/toko/{produk_1?}/{produk_2?}", function ($produk_1 = "Kosong", $produk_2 = "Kosong") {
 return view("pages1.toko", compact("produk_1", "produk_2"));
});

Route::get("/pengenalan", [App\Http\Controllers\PengenalanController::class, "pengenalan"]);

Route::get("/intro/{nama}/{alamat}/{umur}", [PengenalanController::class, "intro"]);

Route::get("/siswa",[PengenalanController::class, "siswa"]);

Route::get("/menu", [LatihanController::class, "menu"]);

Route::get("/mahasiswa", [LatihanController::class, "nilaiMahasiswa"]);

Route::get("/televisi", [LatihanController::class, "channel"]);

Route::get("/belanja", [LatihanController::class, "belanja"]);

Route::get("/post", [PostController::class, "index"]);

Route::get("/staff", [StaffController::class, "index"]);

Route::get("/branch", [BranchController::class, "index"]);

Route::get("/StaffBranch", [StaffBranchController::class, "index"]);

Route::get("/TabelSiswa", [TabelSiswaController::class, "index"]);

Route::get("/StaffBranch1", [StaffBranch1Controller::class, "index"]);
