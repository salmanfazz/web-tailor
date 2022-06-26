@extends('layouts.template')
@section('content')
<title>Konsumen - Home</title>
<div class="row">
    <div class="col-md-4">
       <div id="hover_chang" class="service_box">
          <i><img src="{{ asset('images/dress.png') }}" alt="#"/></i>
          <h3>Dress</h3>
          <p>Dress yang dibuat dengan menggunakan kualitas bahan yang terbaik dan tentu saja design serta bahan yang digunakana dapat disesuaikan dengan keinginan anda</p>
       </div>
    </div>
    <div class="col-md-4">
       <div id="hover_chang" class="service_box">
          <i><img src="{{ asset('images/shirt.png') }}" alt="#"/></i>
          <h3>Shirt</h3>
          <p>Baju yang dibuat dengan menggunakan kualitas bahan yang terbaik dan tentu saja bahan yang digunakan dapat disesuaikan dengan keinginan anda</p>
       </div>
    </div>
    <div class="col-md-4">
       <div id="hover_chang" class="service_box">
          <i><img src="{{ asset('images/jeans.png') }}" alt="#"/></i>
          <h3>Jeans</h3>
          <p>Jeans atau Celana yang dibuat dengan menggunakan kualitas bahan yang terbaik dan tentu saja dapat disesuaikan dengan keinginan anda</p>
       </div>
    </div>
    <div class="col-md-12">
       <a class="read_more" href="{{ url('konsumen/service') }}">Order Now!</a>
    </div>
 </div>
@endsection
