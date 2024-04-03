<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User\HomeModel;
use App\Models\User\LoaiSanPhamModel;
use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facade\Redirect;

class HomeController extends Controller
{
    public function index(){
        $sp = DB::table('sanpham')->where('Status', '1')->orderby('idSanPham','desc')->get();
        $lsp = DB::table('loaisanpham')->where('Status', '1')->orderby('idLoaiSP','desc')->get();
        return view('User.home')->with('sp',$sp)->with('lsp',$lsp);
    }
    public function gioiThieu(){
        $sp = HomeModel::all();
        $lsp = LoaiSanPhamModel::all();
        return view('User.gioiThieu',compact('sp', 'lsp'));
    }
    public function tinTuc(){
        $sp = HomeModel::all();
        $lsp = LoaiSanPhamModel::all();
        return view('User.tinTuc',compact('sp', 'lsp'));
    }
    public function danhMuc(){
        $sp = HomeModel::all();
        $sp = HomeModel::all();
        $lsp = LoaiSanPhamModel::all();
        return view('User.danhMuc',compact('sp', 'lsp'));
    }
    public function sanPham(){
        $sp = HomeModel::all();
        $lsp = LoaiSanPhamModel::all();
        return view('User.sanPham',compact('sp', 'lsp'));
    }
    public function SanPhamSauGion(){
        $sp = HomeModel::all();
        $lsp = LoaiSanPhamModel::all();
        return view('User.SanPhamSauGion',compact('sp', 'lsp'));
    }
    public function gioHang(){
        $sp = HomeModel::all();
        $lsp = LoaiSanPhamModel::all();
        return view('User.gioHang',compact('sp', 'lsp'));
    }
    public function thanhToan(){
        $sp = HomeModel::all();
        $lsp = LoaiSanPhamModel::all();
        return view('User.thanhToan',compact('sp', 'lsp'));
    }
    public function ttkh(){
        $sp = HomeModel::all();
        $lsp = LoaiSanPhamModel::all();
        return view('User.ttkh',compact('sp', 'lsp'));
    }

}
