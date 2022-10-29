@extends('layouts.main')
@section('container')

<div class="row mt-5">
@foreach ($barang as $brg)  
    <div class="col">  
        <div class="card" style="width: 18rem;">
            <img src="/img/{{ $brg->foto }}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">{{ $brg->nama }}</h5>
              {{-- <p class="card-text">{{ $brg->deskripsi_detail }}</p> --}}
              <p class="card-text">{{ $brg->harga }}</p>
              <a href="{{ route('detail', $brg->id) }}" class="btn btn-primary">Lihat Detail</a>
            </div>
        </div>
    </div>
@endforeach
</div>

@endsection