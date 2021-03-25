@extends('HalamanDepan.beranda')

@section('title','Create ECP')

@section('container')
  <!-- Main content -->
  <section class="content">
      <div class="row">
        <div class="col-md-6">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Formulir</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fas fa-minus"></i></button>
              </div>
            </div>
            <div class="card-body">
            <form method="post" action="{{route('simpan-ecp')}}">
                @csrf
              <div class="form-group">
                <label for="ecpno">No ECP</label>
                <input type="text" id="ecpno" class="form-control @error('ecpno') is-invalid @enderror" placeholder="Masukkan No ECP" name="ecpno" value="{{old('ecpno')}}">
                @error('ecpno') <div class="invalid-feedback"> Masukkan No ECP !  </div> @enderror 
              </div>
              <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" id="nama" class="form-control @error('nama') is-invalid @enderror" placeholder="Masukkan Nama" name="nama" value="{{auth()->user()->name}}">
                @error('nama') <div class="invalid-feedback"> Masukkan Nama !  </div> @enderror 
              </div>
              
              <div class="form-group">
                <label for="deskripsi">Deskripsi</label>
                <textarea id="deskripsi" class="form-control @error('deskripsi') is-invalid @enderror" rows="2" name="deskripsi" value="{{old('deskripsi')}}"></textarea>
                @error('deskripsi') <div class="invalid-feedback"> Masukkan Deskripsi !  </div> @enderror
              </div>
           
              <div class="form-group">
                <label for="desktambahan">Deskripsi Tambahan</label>
                <textarea id="desktambahan" class="form-control @error('desktambahan') is-invalid @enderror" rows="4" name="desktambahan" value="{{old('desktambahan')}}"></textarea>
                @error('desktambahan') <div class="invalid-feedback"> Masukkan Deskripsi Tambahan !  </div> @enderror
              </div>

              <div class="form-group">
                <label for="alasan">Alasan</label>
                <textarea id="alasan" class="form-control @error('alasan') is-invalid @enderror" rows="2" name="alasan" value="{{old('alasan')}}"></textarea>
                @error('alasan') <div class="invalid-feedback"> Masukkan Alasan !  </div> @enderror
              </div>
              
               <div class="row">
                    <div class="col-12">
                    <a href="/beranda" class="btn btn-secondary">Cancel</a>
                    <input type="submit" value="Create ECP" class="btn btn-success float-right">
                    </div>
               </div>
            </div>
          </div>
        </div>
      </div>
  </section>
@endsection