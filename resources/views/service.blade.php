@extends('layouts.template')
@section('content')
<title>Konsumen - Service</title>
<form action="{{ url('/konsumen/serviceAdd') }}" method="post" class="p-3 mt-3">
@csrf
<input type="hidden" name="id_users_1" id="id_users_1" value="{{ (session()->get('id_users', 'id_users')) }}">
<div class="input-group mb-3">
    <div class="input-group-prepend">
      <label class="input-group-text" for="inputGroupSelect01">Penjahit</label>
    </div>
    <select class="custom-select" id="inputGroupSelect01">
      <option name="id_users_2" id="id_users_2" selected>Pilih Penjahit</option>
      @foreach ($penjahit as $row)
      <option name="id_users_2" id="id_users_2" value="{{ $row->nama }}">{{ $row->nama }}</option>
      @endforeach
    </select>
  </div>
<div class="input-group mb-3">
    <div class="input-group-prepend">
      <span class="input-group-text" id="inputGroup-sizing-default">Lingkar Dada</span>
    </div>
    <input type="text" name="lingkar_dada" id="lingkar_dada" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
</div>
<div class="input-group mb-3">
    <div class="input-group-prepend">
      <span class="input-group-text" id="inputGroup-sizing-default">Lingkar Pinggul</span>
    </div>
    <input type="text" name="lingkar_pinggul" id="lingkar_pinggul" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
</div>
<div class="input-group mb-3">
    <div class="input-group-prepend">
      <span class="input-group-text" id="inputGroup-sizing-default">Lingkar Pinggang</span>
    </div>
    <input type="text" name="lingkar_pinggang" id="lingkar_pinggang" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
</div>
<div class="input-group mb-3">
    <div class="input-group-prepend">
      <span class="input-group-text" id="inputGroup-sizing-default">Panjang Baju</span>
    </div>
    <input type="text" name="panjang_baju" id="panjang_baju" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
</div>
<div class="input-group mb-3">
    <div class="input-group-prepend">
      <span class="input-group-text" id="inputGroup-sizing-default">Panjang Lengan</span>
    </div>
    <input type="text" name="panjang_lengan" id="panjang_lengan" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
</div>
<div class="input-group mb-3">
    <div class="input-group-prepend">
      <span class="input-group-text" id="inputGroup-sizing-default">Panjang Celana</span>
    </div>
    <input type="text" name="panjang_celana" id="panjang_celana" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
</div>
<div class="input-group mb-3">
    <div class="input-group-prepend">
      <span class="input-group-text" id="inputGroup-sizing-default">Keterangan</span>
    </div>
    <input type="text" name="keterangan" id="keterangan" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
</div>
<div class="input-group mb-3">
    <div class="input-group-prepend">
      <span class="input-group-text" id="inputGroup-sizing-default">Keterangan</span>
    </div>
    <input type="text" name="gambar" id="gambar" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
</div>
{{-- <div class="input-group mb-3">
    <div class="input-group-prepend">
      <span class="input-group-text" id="inputGroupFileAddon01">Gambar</span>
    </div>
    <div class="custom-file">
      <input type="file" class="custom-file-input" name="gambar" id="gambar" aria-describedby="inputGroupFileAddon01">
      <label class="custom-file-label" for="inputGroupFile01">Pilih Gambar</label>
    </div>
</div> --}}
<button type="button" class="btn btn-primary">Submit</button>
</form>
@endsection
