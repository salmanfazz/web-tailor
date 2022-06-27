@extends('layouts.template')
@section('content')
    <title>Konsumen - History</title>
    <div class="container mt-5">
        <div class="d-flex justify-content-center row">
            <div class="col-md-10">
                <div class="rounded">
                    <div class="table-responsive table-borderless">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="text-center">
                                        <div class="toggle-btn">
                                            <div class="inner-circle"></div>
                                        </div>
                                    </th>
                                    <th>Pesanan #</th>
                                    <th>Penjahit</th>
                                    <th>Keterangan</th>
                                    <th>Status Bayar</th>
                                    <th>Total</th>
                                    <th>Waktu</th>
                                    <th>Detail</th>
                                </tr>
                            </thead>
                            @foreach ($pesanan as $row)
                                <tbody class="table-body">
                                    <tr class="cell-1">
                                        <td class="text-center">
                                            <div class="toggle-btn">
                                                <div class="inner-circle"></div>
                                            </div>
                                        </td>
                                        <td>{{ $row->id_pesanans }}</td>
                                        <td>{{ $row->nama }}</td>
                                        <td>{{ $row->keterangan }}</td>
                                        <td><span class="badge badge">{{ $row->status }}</span></td>
                                        <td>{{ $row->total_bayar }}</td>
                                        <td>{{ $row->waktu_bayar }}</td>
                                        <td><a type="button"
                                                href="{{ url('konsumen/historyDetail/' . $row->id_pesanans) }}"
                                                class="fa fa-ellipsis-h text-black-50"></a></td>
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
