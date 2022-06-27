<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Pesanan;
use App\Models\DetailPesanan;
use App\Models\History;
use App\Models\User;
use Carbon\Carbon;

class PesananController extends Controller
{
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
