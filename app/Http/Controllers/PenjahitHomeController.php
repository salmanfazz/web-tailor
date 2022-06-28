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
}
