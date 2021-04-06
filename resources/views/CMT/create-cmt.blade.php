@extends('HalamanDepan.beranda')

@section('title','Notulen ECP')

@section('container')
  <!-- Main content -->
  <section class="content">
      <div class="row">
        <div class="col-md-6">
          <div class="card card-primary">
            <div class="card-header">
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fas fa-minus"></i></button>
              </div>
            </div>
            <div class="card-body">
            <form method="post" action="{{route('simpan-cmt')}}">
                @csrf
              <div class="form-group">
                <input type="text" id="ecpnmr" class="form-control @error('ecpnmr') is-invalid @enderror" placeholder="Masukkan No ECP" name="ecpnmr" value="{{old('ecpnmr')}}">
                @error('ecpnmr') <div class="invalid-feedback"> Masukkan No ECP !  </div> @enderror 
              </div>
                
             
              <div class="form-group">
                <textarea id="catatan_cmt" class="form-control @error('catatan_cmt') is-invalid @enderror" rows="4" name="catatan_cmt" value="{{old('catatan_cmt')}}"></textarea>
                @error('catatan_cmt') <div class="invalid-feedback"> Masukkan Notulen !  </div> @enderror
              </div>
              
              <div class="form-group">
                <input type="text" id="nama_cmt" class="form-control @error('nama_cmt') is-invalid @enderror" placeholder="Masukkan Nama" name="nama_cmt" value="{{auth()->user()->name}}">
                @error('nama_cmt') <div class="invalid-feedback"> Masukkan Nama !  </div> @enderror 
              </div>
              
               <div class="row">
                    <div class="col-12">
                    <a href="/beranda" class="btn btn-secondary">Cancel</a>
                    <input type="submit" value="Buat Notulen" class="btn btn-success float-right">
                    </div>
               </div>
            </div>
          </div>
        </div>
      </div>
  </section>
@endsection