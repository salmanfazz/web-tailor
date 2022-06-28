@extends('layouts.templates')
@section('content')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <title>Penjahit - History</title>
    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="page-breadcrumb bg-white">
            <div class="row align-items-center">
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <h4 class="page-title">Service</h4>
                </div>
                <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                    <div class="d-md-flex">
                        <ol class="breadcrumb ms-auto">
                            <li><a class="fw-normal">Service</a></li>
                        </ol>
                    </div>
                </div>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
            <!-- ============================================================== -->
            <!-- Start Page Content -->
            <!-- ============================================================== -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="white-box">
                        <h3 class="box-title">Daftar Pesanan</h3>
                        <div class="table-responsive">
                            <table class="table text-nowrap">
                                <thead>
                                    <tr>
                                        <th class="border-top-0">#</th>
                                        <th class="border-top-0">Konsumen</th>
                                        <th class="border-top-0">Keterangan</th>
                                        <th class="border-top-0">Status Bayar</th>
                                        <th class="border-top-0">Total</th>
                                        <th class="border-top-0">Detail</th>
                                    </tr>
                                </thead>
                                @foreach($pembayaran as $row)
                                    <tbody>
                                        <tr>
                                            <td> {{ isset($i) ? ++$i : $i = 1 }} </td>
                                            <td>{{ $row->nama }}</td>
                                            <td>{{ $row->keterangan }}</td>
                                            <td>{{ $row->status }}</td>
                                            <td>{{ $row->total_bayar }}</td>
                                            <td><a type="button" href="{{ url('penjahit/historyPenjahitDetail/' . $row->id_pesanans) }}" class="fa fa-ellipsis-h text-black-50"></a></td>
                                        </tr>
                                    </tbody>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
