<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Models\User\HomeModel;
// use App\Http\Models\Admin\LSPModel;
// use App\Http\Models\Admin\SanPhamModel;
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

Route::get('/admin', function () {
    return view('Admin.darkboard');
})->name('admin');



Route::controller(App\Http\Controllers\Admin\AdminController::class)->group(function(){
    Route::get('/index',  'index')->name('index');
    Route::get('/add', 'create')->name('add');
    Route::post('/store','store')->name('store');
    Route::get('/edit/{idLoaiSP}','edit')->name('edit');
    Route::get('/destroy/{idLoaiSP}', 'destroy')->name('destroy');
    Route::get('/show/{idLoaiSP}', 'show')->name('detail');
    Route::put('/update/{idLoaiSP}', 'update')->name('update');
});


Route::controller(App\Http\Controllers\Admin\SanPhamController::class)->group(function(){
    Route::get('/indexSP',  'index')->name('indexSP');
    Route::get('/addSP', 'create')->name('addSP');
    Route::post('/storeSP','store')->name('storeSP');
    Route::get('/editSP/{idSanPham}','edit')->name('editSP');
    Route::get('/destroySP/{idSanPham}', 'destroy')->name('destroySP');
    Route::get('/showSP/{idSanPham}', 'show')->name('detailSP');
    Route::put('/updateSP/{idSanPham}', 'update')->name('updateSP');
    
});

Route::controller(App\Http\Controllers\Admin\NhanVienController::class)->group(function(){
    Route::get('/indexNV','index')->name('indexNV');
    Route::get('/addNV','create')->name('addNV');
    Route::post('/storeNV','store')->name('storeNV');
    Route::get('/showNV/{idNhanVien}','show')->name('detailNV');
    Route::get('/editNV/{idNhanVien}','edit')->name('editNV');
    Route::put('/updateNV/{idNhanVien}', 'update')->name('updateNV');
    Route::get('/destroyNV/{idNhanVien}', 'destroy')->name('destroyNV');
});
Route::controller(App\Http\Controllers\Admin\KhachHangController::class)->group(function(){
    Route::get('/indexKH','index')->name('indexKH');
    Route::get('/addKH','create')->name('addKH');
    Route::post('/storeKH','store')->name('storeKH');
    Route::get('/showKH/{idKhachHang}','show')->name('detailKH');
    Route::get('/editKH/{idKhachHang}','edit')->name('editKH');
    Route::put('/updateKH/{idKhachHang}', 'update')->name('updateKH');
    Route::get('/destroyKH/{idKhachHang}', 'destroy')->name('destroyKH');
});
Route::controller(App\Http\Controllers\Admin\NhaCungCapController::class)->group(function(){
    Route::get('/indexNCC','index')->name('indexNCC');
    Route::get('/addNCC','create')->name('addNCC');
    Route::post('/storeNCC','store')->name('storeNCC');
    Route::get('/showNCC/{idNhaCungCap}','show')->name('detailNCC');
    Route::get('/editNCC/{idNhaCungCap}','edit')->name('editNCC');
    Route::put('/updateNCC/{idNhaCungCap}', 'update')->name('updateNCC');
    Route::get('/destroyNCC/{idNhaCungCap}', 'destroy')->name('destroyNCC');
});
Route::controller(App\Http\Controllers\Admin\HoaDonBanController::class)->group(function(){
    Route::get('/indexHDB','index')->name('indexHDB');
    Route::get('/addNCC','create')->name('addNCC');
    Route::post('/storeNCC','store')->name('storeNCC');
    Route::get('/showNCC/{idNhaCungCap}','show')->name('detailNCC');
    Route::get('/editNCC/{idNhaCungCap}','edit')->name('editNCC');
    Route::put('/updateNCC/{idNhaCungCap}', 'update')->name('updateNCC');
    Route::get('/destroyNCC/{idNhaCungCap}', 'destroy')->name('destroyNCC');
});

//USER
Route::controller(App\Http\Controllers\User\HomeController::class)->group(function(){
    Route::get('/user',  'index')->name('user');
    Route::get('/home',  'index')->name('home');
    Route::get('/GioiThieu',  'gioiThieu')->name('gioiThieu');
    Route::get('/TinTuc',  'tinTuc')->name('tinTuc');
    Route::get('/DanhMuc',  'danhMuc')->name('danhMuc');
    Route::get('/SanPham',  'sanPham')->name('sanPham');
    Route::get('/SanPhamSauGion',  'sanPhamSauGion')->name('sanPhamSauGion');
    Route::get('/GioHang',  'gioHang')->name('gioHang');
    Route::get('/ThanhToan',  'thanhToan')->name('thanhToan');
    Route::get('/TTKH',  'ttkh')->name('ttkh');
    // Route::get('san-pham/{Slug}/{idSanPham}',  'show_category_home')->name('index_detailSP');
    
});