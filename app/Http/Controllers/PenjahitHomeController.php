<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Pesanan;
use App\Models\DetailPesanan;
use App\Models\History;
use App\Models\User;
use Carbon\Carbon;

class PenjahitHomeController extends Controller
{
    public function indexPenjahit(Request $request)
    {
        $data['pesanans'] = \App\Models\Pesanan::where('pesanans.id_users_2', '=' , $request->session()->get('id_users', 'id_users'))->count();
		$data['pembayarans'] = DB::table('pesanans')
        ->select('pesanans.id_pesanans', 'users.nama','pesanans.id_users_1', 'pesanans.id_users_2', 'detail_pesanans.lingkar_dada', 'detail_pesanans.lingkar_pinggul', 'detail_pesanans.lingkar_pinggang', 'detail_pesanans.panjang_baju', 'detail_pesanans.panjang_lengan', 'detail_pesanans.panjang_celana', 'detail_pesanans.keterangan', 'detail_pesanans.gambar', 'pembayarans.waktu_bayar', 'pembayarans.total_bayar', 'pembayarans.status')
        ->join('detail_pesanans', 'detail_pesanans.id_detail_pesanans', '=', 'pesanans.id_detail_pesanans')
        ->join('users', 'users.id_users', '=', 'pesanans.id_users_2')
        ->join('pembayarans', 'pesanans.id_pesanans', '=', 'pembayarans.id_pesanans')
        ->where('users.roles', '=', 'penjahit')
        ->where('pesanans.id_users_2', '=' , $request->session()->get('id_users', 'id_users'))
        ->where('pembayarans.status', '=', 'Selesai')
        ->count();
        $data['pembayaran'] = DB::table('pesanans')
        ->select('pesanans.id_pesanans', 'users.nama','pesanans.id_users_1', 'pesanans.id_users_2', 'detail_pesanans.lingkar_dada', 'detail_pesanans.lingkar_pinggul', 'detail_pesanans.lingkar_pinggang', 'detail_pesanans.panjang_baju', 'detail_pesanans.panjang_lengan', 'detail_pesanans.panjang_celana', 'detail_pesanans.keterangan', 'detail_pesanans.gambar', 'pembayarans.waktu_bayar', 'pembayarans.total_bayar', 'pembayarans.status')
        ->join('detail_pesanans', 'detail_pesanans.id_detail_pesanans', '=', 'pesanans.id_detail_pesanans')
        ->join('users', 'users.id_users', '=', 'pesanans.id_users_2')
        ->join('pembayarans', 'pesanans.id_pesanans', '=', 'pembayarans.id_pesanans')
        ->where('users.roles', '=', 'penjahit')
        ->where('pesanans.id_users_2', '=' , $request->session()->get('id_users', 'id_users'))
        ->where('pembayarans.status', '=', 'Belum Dibayar')
        ->count();
    	return view('penjahit', $data);
    }

    public function servicePenjahit(Request $request) 
    {
        $data['pembayaran'] = DB::table('pesanans')
        ->select('pesanans.id_pesanans', 'users.nama','pesanans.id_users_1', 'pesanans.id_users_2', 'detail_pesanans.lingkar_dada', 'detail_pesanans.lingkar_pinggul', 'detail_pesanans.lingkar_pinggang', 'detail_pesanans.panjang_baju', 'detail_pesanans.panjang_lengan', 'detail_pesanans.panjang_celana', 'detail_pesanans.keterangan', 'detail_pesanans.gambar', 'pembayarans.waktu_bayar', 'pembayarans.total_bayar', 'pembayarans.status')
        ->join('detail_pesanans', 'detail_pesanans.id_detail_pesanans', '=', 'pesanans.id_detail_pesanans')
        ->join('users', 'users.id_users', '=', 'pesanans.id_users_1')
        ->join('pembayarans', 'pesanans.id_pesanans', '=', 'pembayarans.id_pesanans')
        ->where('users.roles', '=', 'konsumen')
        ->where('pesanans.id_users_2', '=' , $request->session()->get('id_users', 'id_users'))
        ->where('pembayarans.status', '=', 'Belum Dibayar')
        ->get();
        return view('servicePenjahit', $data);
    }

    public function historyPenjahit(Request $request) 
    {
        $data['pembayaran'] = DB::table('pesanans')
        ->select('pesanans.id_pesanans', 'users.nama','pesanans.id_users_1', 'pesanans.id_users_2', 'detail_pesanans.lingkar_dada', 'detail_pesanans.lingkar_pinggul', 'detail_pesanans.lingkar_pinggang', 'detail_pesanans.panjang_baju', 'detail_pesanans.panjang_lengan', 'detail_pesanans.panjang_celana', 'detail_pesanans.keterangan', 'detail_pesanans.gambar', 'pembayarans.waktu_bayar', 'pembayarans.total_bayar', 'pembayarans.status')
        ->join('detail_pesanans', 'detail_pesanans.id_detail_pesanans', '=', 'pesanans.id_detail_pesanans')
        ->join('users', 'users.id_users', '=', 'pesanans.id_users_1')
        ->join('pembayarans', 'pesanans.id_pesanans', '=', 'pembayarans.id_pesanans')
        ->where('users.roles', '=', 'konsumen')
        ->where('pesanans.id_users_2', '=' , $request->session()->get('id_users', 'id_users'))
        ->where('pembayarans.status', '=', 'Selesai')
        ->get();
        return view('historyPenjahit', $data);
    }

    public function historyPenjahitDetail(Request $request) 
    {
        $data['pembayaran'] = DB::table('pesanans')
        ->select('pesanans.id_pesanans', 'users.nama','pesanans.id_users_1', 'pesanans.id_users_2', 'detail_pesanans.lingkar_dada', 'detail_pesanans.lingkar_pinggul', 'detail_pesanans.lingkar_pinggang', 'detail_pesanans.panjang_baju', 'detail_pesanans.panjang_lengan', 'detail_pesanans.panjang_celana', 'detail_pesanans.keterangan', 'detail_pesanans.gambar', 'pembayarans.waktu_bayar', 'pembayarans.total_bayar', 'pembayarans.status')
        ->join('detail_pesanans', 'detail_pesanans.id_detail_pesanans', '=', 'pesanans.id_detail_pesanans')
        ->join('users', 'users.id_users', '=', 'pesanans.id_users_1')
        ->join('pembayarans', 'pesanans.id_pesanans', '=', 'pembayarans.id_pesanans')
        ->where('users.roles', '=', 'konsumen')
        ->where('pesanans.id_users_2', '=' , $request->session()->get('id_users', 'id_users'))
        ->where('pembayarans.status', '=', 'Selesai')
        ->get();
        return view('historyPenjahitDetail', $data);
    }

    public function serviceDetail(Request $request, $id_pesanans) 
    {
        $data['pembayaran'] = DB::table('pesanans')
        ->select('pesanans.id_pesanans', 'users.nama','pesanans.id_users_1', 'pesanans.id_users_2', 'detail_pesanans.lingkar_dada', 'detail_pesanans.lingkar_pinggul', 'detail_pesanans.lingkar_pinggang', 'detail_pesanans.panjang_baju', 'detail_pesanans.panjang_lengan', 'detail_pesanans.panjang_celana', 'detail_pesanans.keterangan', 'detail_pesanans.gambar', 'pembayarans.waktu_bayar', 'pembayarans.total_bayar', 'pembayarans.status')
        ->join('detail_pesanans', 'detail_pesanans.id_detail_pesanans', '=', 'pesanans.id_detail_pesanans')
        ->join('users', 'users.id_users', '=', 'pesanans.id_users_1')
        ->join('pembayarans', 'pesanans.id_pesanans', '=', 'pembayarans.id_pesanans')
        ->where('users.roles', '=', 'konsumen')
        ->where('pesanans.id_users_2', '=' , $request->session()->get('id_users', 'id_users'))
        ->where('pesanans.id_pesanans', '=', $id_pesanans)
        ->where('pembayarans.status', '=', 'Belum Dibayar')
        ->get();
        return view('serviceDetail', $data);
    }

    public function serviceSet(Request $request, $id_pesanans)
    {
        $pembayaran = \App\Models\History::where('id_pesanans', $id_pesanans)
                        ->update(['total_bayar' => request('total_bayar')
                        ]);

        if($pembayaran) {
            return redirect('/penjahit/servicePenjahit')->with('success', 'Set Harga Success');
        } else {
            return redirect('/penjahit/servicePenjahit')->with('error', 'Set Harga Failed');
        }
    }
}
