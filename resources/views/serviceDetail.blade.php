@extends('layouts.templates')
@section('content')
    <title>Penjahit - Service Detail</title>
    <section class="h-100 h-custom" style="background-color: #eee;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-lg-8 col-xl-6">
                    <div class="card border-top border-bottom border-3" style="border-color: #f37a27 !important;">
                        <div class="card-body p-5">
                            @foreach ($pembayaran as $row)
                                <p class="lead fw-bold mb-5" style="color: #f37a27;">Order Detail</p>
                                <form action="{{ url('/penjahit/serviceSet') . '/' . $row->id_pesanans }}" method="post"
                                    class="p-3 mt-3">
                                    @csrf
                                    <div class="row">
                                        <div class="col mb-3">
                                            <p class="small text-muted mb-1">Waktu</p>
                                            <p>{{ $row->waktu_bayar }}</p>
                                        </div>
                                        <div class="col mb-3">
                                            <p class="small text-muted mb-1">Penjahit</p>
                                            <p>{{ $row->nama }}</p>
                                        </div>
                                        <div class="col mb-3">
                                            <p class="small text-muted mb-1">Order No.</p>
                                            <p>{{ $row->id_pesanans }}</p>
                                        </div>
                                    </div>
                                    <div class="mx-n5 px-5 py-4" style="background-color: #f2f2f2;">
                                        <div class="row">
                                            <div class="col-md-8 col-lg-9">
                                                <p>{{ $row->keterangan }}</p>
                                            </div>
                                            <div class="col-md-4 col-lg-3">
                                                <p>{{ $row->total_bayar }}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="lead fw-bold mb-4 pb-2" style="color: #f37a27;">Detail Pesanan</p>
                                    <div class="mx-n5 px-5 py-4" style="background-color: #f2f2f2;">
                                        <div class="row">
                                            <div class="col-md-8 col-lg-9">
                                                <p>Lingkar Dada</p>
                                            </div>
                                            <div class="col-md-4 col-lg-3">
                                                <p>{{ $row->lingkar_dada }}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-8 col-lg-9">
                                                <p>Lingkar Pinggul</p>
                                            </div>
                                            <div class="col-md-4 col-lg-3">
                                                <p>{{ $row->lingkar_pinggul }}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-8 col-lg-9">
                                                <p>Lingkar Pinggang</p>
                                            </div>
                                            <div class="col-md-4 col-lg-3">
                                                <p>{{ $row->lingkar_pinggang }}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-8 col-lg-9">
                                                <p>Panjang Baju</p>
                                            </div>
                                            <div class="col-md-4 col-lg-3">
                                                <p>{{ $row->panjang_baju }}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-8 col-lg-9">
                                                <p>Panjang Lengan</p>
                                            </div>
                                            <div class="col-md-4 col-lg-3">
                                                <p>{{ $row->panjang_lengan }}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-8 col-lg-9">
                                                <p>Panjang Celana</p>
                                            </div>
                                            <div class="col-md-4 col-lg-3">
                                                <p>{{ $row->panjang_celana }}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mx-n5 px-5 py-4" style="background-color: #f2f2f2;">
                                        <div class="row">
                                            <div class="col-md-8 col-lg-9">
                                                <p>Status</p>
                                            </div>
                                            <div class="col-md-4 col-lg-3">
                                                <p>{{ $row->status }}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="inputGroup-sizing-default">Harga</span>
                                        </div>
                                        <input type="text" name="total_bayar" id="total_bayar" class="form-control"
                                            aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                                    </div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
