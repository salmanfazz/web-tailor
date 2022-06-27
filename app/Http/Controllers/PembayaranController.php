<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Pesanan;
use App\Models\DetailPesanan;
use App\Models\History;
use App\Models\User;
use Carbon\Carbon;

class PembayaranController extends Controller
{
    public function payment(Request $request)
    {
    	$data['pesanan'] = DB::table('pesanans')
        ->select('pesanans.id_pesanans', 'users.nama','pesanans.id_users_1', 'pesanans.id_users_2', 'detail_pesanans.lingkar_dada', 'detail_pesanans.lingkar_pinggul', 'detail_pesanans.lingkar_pinggang', 'detail_pesanans.panjang_baju', 'detail_pesanans.panjang_lengan', 'detail_pesanans.panjang_celana', 'detail_pesanans.keterangan', 'detail_pesanans.gambar', 'pembayarans.waktu_bayar', 'pembayarans.total_bayar', 'pembayarans.status')
        ->join('detail_pesanans', 'detail_pesanans.id_detail_pesanans', '=', 'pesanans.id_detail_pesanans')
        ->join('users', 'users.id_users', '=', 'pesanans.id_users_2')
        ->join('pembayarans', 'pesanans.id_pesanans', '=', 'pembayarans.id_pesanans')
        ->where('users.roles', '=', 'penjahit')
        ->where('pesanans.id_users_1', '=' , $request->session()->get('id_users', 'id_users'))
        ->where('pembayarans.status', '=', 'Belum Dibayar')
        ->get();
        return view('payment', $data);
    }

    public function paymentDetail(Request $request, $id_pesanans)
    {
    	$data['pesanan'] = DB::table('pesanans')
        ->select('pesanans.id_pesanans', 'users.nama','pesanans.id_users_1', 'pesanans.id_users_2', 'detail_pesanans.lingkar_dada', 'detail_pesanans.lingkar_pinggul', 'detail_pesanans.lingkar_pinggang', 'detail_pesanans.panjang_baju', 'detail_pesanans.panjang_lengan', 'detail_pesanans.panjang_celana', 'detail_pesanans.keterangan', 'detail_pesanans.gambar', 'pembayarans.waktu_bayar', 'pembayarans.total_bayar', 'pembayarans.status')
        ->join('detail_pesanans', 'detail_pesanans.id_detail_pesanans', '=', 'pesanans.id_detail_pesanans')
        ->join('users', 'users.id_users', '=', 'pesanans.id_users_2')
        ->join('pembayarans', 'pesanans.id_pesanans', '=', 'pembayarans.id_pesanans')
        ->where('users.roles', '=', 'penjahit')
        ->where('pesanans.id_users_1', '=' , $request->session()->get('id_users', 'id_users'))
        ->where('pembayarans.status', '=', 'Belum Dibayar')
        ->where('pesanans.id_pesanans', '=', $id_pesanans)
        ->get();
        return view('paymentDetail', $data);
    }

    public function paymentSet(Request $request, $id_pesanans)
    {
        $pembayaran = \App\Models\History::where('id_pesanans', $id_pesanans)
                        ->update(['waktu_bayar' => Carbon::now()->toDateTimeString(),
                                    'Status' => 'Selesai'
                        ]);

        if($pembayaran) {
            return redirect('/konsumen/history')->with('success', 'Payment Success');
        } else {
            return redirect('/konsumen/payment')->with('error', 'Payment Failed');
        }
    }
}
