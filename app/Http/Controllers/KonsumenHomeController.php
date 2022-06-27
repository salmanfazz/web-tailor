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
}
