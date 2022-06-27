<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Pesanan;
use App\Models\DetailPesanan;
use App\Models\History;
use App\Models\User;
use Carbon\Carbon;

class KonsumenHomeController extends Controller
{
    public function indexKonsumen()
    {
    	return view('konsumen');
    }

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

    public function service()
    {
        $data['penjahit'] = DB::table('users')->where('roles', 'penjahit')->get();
    	return view('service', $data);
    }

    public function serviceAdd(Request $request)
    {
        $this->validate($request, [
            'id_users_1' => 'required',
            'id_users_2' => 'required',
            'lingkar_dada' => 'required',
            'lingkar_pinggul' => 'required',
            'lingkar_pinggang' => 'required',
            'panjang_baju' => 'required',
            'panjang_lengan' => 'required',
            'panjang_celana' => 'required',
            'keterangan' => 'required',
            'gambar' => 'required',
        ]);

        $detail_pesanan = DetailPesanan::create([
            'lingkar_dada' => request('lingkar_dada'),
            'lingkar_pinggul' => request('lingkar_pinggul'),
            'lingkar_pinggang' => request('lingkar_pinggang'),
            'panjang_baju' => request('panjang_baju'),
            'panjang_lengan' => request('panjang_lengan'),
            'panjang_celana' => request('panjang_celana'),
            'keterangan' => request('keterangan'),
            'gambar' => request('gambar'),
        ]);

        $detail = DetailPesanan::latest('id_detail_pesanans')->first();

        $pesanan = Pesanan::create([
            'id_users_1' => request('id_users_1'),
            'id_users_2' => request('id_users_2'),
            'id_detail_pesanans' => $detail->id_detail_pesanans,
        ]);

        $pembayaran = History::create([
            'id_pesanans' => $pesanan->id_pesanans,
            'status' => 'Belum Dibayar'
        ]);

        if($pembayaran) {
            return redirect('/konsumen/service')->with('success', 'Order Success');
        } else {
            return redirect('/konsumen/service')->with('error', 'Order Failed');
        }
    }
}
