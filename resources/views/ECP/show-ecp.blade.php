@extends('HalamanDepan.beranda')

@section('title','Detail ECP')

@section('container')
 
  <div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">ECP NO: {{$ecp->ecpno}}</h5>
       <p> <h6 class="card-text">Nama Pembuat: {{$ecp->nama}}</h6></p>
        <p class="card-text">Deskripsi: {{$ecp->deskripsi}}</p>
        <p class="card-text">Deskripsi Tambahan: {{$ecp->desktambahan}}</p>
        <p class="card-text">Alasan: {{$ecp->alasan}}</p>
        <p class="card-text">Tanggal Pengajuan: {{$ecp->created_at}}</p>
        


        <a href="{{route('data-ecp')}}" class="btn btn-primary btn-sm">Back</a>
        @if (auth()->user()->level=="user spv")
        <a href="{{route('create-spv')}}" class="btn btn-success btn-sm">Evaluate</a>
        @endif
        @if (auth()->user()->level=="admin engineer")
        <a href="{{route('create-cmt')}}" class="btn btn-success btn-sm">Create Notulen</a>
        @endif
      </div>
    </div>
  </div>
  </div>
  @endsection