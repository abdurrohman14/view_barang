@extends('layouts.main')
@section('container')

<div class="card mb-3 mt-3" style="max-width: 540px;">
    <div class="row g-0"> 
      <div class="col-md-4">
        <img src="/img/{{ $barang->foto }}" class="img-fluid rounded-start" alt="...">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title">{{ $barang->nama }}</h5>
          <p class="card-text">{{ $barang->deskripsi_detail }}</p>
          <p class="card-text">Stock : {{ $barang->stock }}</p>
          <p class="card-text"><small class="text-muted">{{ $barang->harga }}</small></p>
        </div>
      </div>
    </div>
  </div>

@endsection