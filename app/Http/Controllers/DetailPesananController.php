<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Pesanan;
use App\Models\DetailPesanan;
use App\Models\History;
use App\Models\User;
use Carbon\Carbon;

class DetailPesananController extends Controller
{
    public function history(Request $request)
    {
    	$data['pesanan'] = DB::table('pesanans')
        ->select('pesanans.id_pesanans', 'users.nama','pesanans.id_users_1', 'pesanans.id_users_2', 'detail_pesanans.lingkar_dada', 'detail_pesanans.lingkar_pinggul', 'detail_pesanans.lingkar_pinggang', 'detail_pesanans.panjang_baju', 'detail_pesanans.panjang_lengan', 'detail_pesanans.panjang_celana', 'detail_pesanans.keterangan', 'detail_pesanans.gambar', 'pembayarans.waktu_bayar', 'pembayarans.total_bayar', 'pembayarans.status')
        ->join('detail_pesanans', 'detail_pesanans.id_detail_pesanans', '=', 'pesanans.id_detail_pesanans')
        ->join('users', 'users.id_users', '=', 'pesanans.id_users_2')
        ->join('pembayarans', 'pesanans.id_pesanans', '=', 'pembayarans.id_pesanans')
        ->where('users.roles', '=', 'penjahit')
        ->where('pesanans.id_users_1', '=' , $request->session()->get('id_users', 'id_users'))
        ->where('pembayarans.status', '=', 'Selesai')
        ->get();
        return view('history', $data);
    }

    public function historyDetail(Request $request, $id_pesanans)
    {
    	$data['pesanan'] = DB::table('pesanans')
        ->select('pesanans.id_pesanans', 'users.nama','pesanans.id_users_1', 'pesanans.id_users_2', 'detail_pesanans.lingkar_dada', 'detail_pesanans.lingkar_pinggul', 'detail_pesanans.lingkar_pinggang', 'detail_pesanans.panjang_baju', 'detail_pesanans.panjang_lengan', 'detail_pesanans.panjang_celana', 'detail_pesanans.keterangan', 'detail_pesanans.gambar', 'pembayarans.waktu_bayar', 'pembayarans.total_bayar', 'pembayarans.status')
        ->join('detail_pesanans', 'detail_pesanans.id_detail_pesanans', '=', 'pesanans.id_detail_pesanans')
        ->join('users', 'users.id_users', '=', 'pesanans.id_users_2')
        ->join('pembayarans', 'pesanans.id_pesanans', '=', 'pembayarans.id_pesanans')
        ->where('users.roles', '=', 'penjahit')
        ->where('pesanans.id_users_1', '=' , $request->session()->get('id_users', 'id_users'))
        ->where('pembayarans.status', '=', 'Selesai')
        ->where('pesanans.id_pesanans', '=', $id_pesanans)
        ->get();
        return view('historyDetail', $data);
    }
}
