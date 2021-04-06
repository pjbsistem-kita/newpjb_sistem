@extends('HalamanDepan.beranda')

@section('title','Evaluate ECP')

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
            <form method="post" action="{{route('simpan-spv')}}">
                @csrf
              <div class="form-group">
                <input type="text" id="ecpnomor" class="form-control @error('ecpnomor') is-invalid @enderror" placeholder="Masukkan No ECP" name="ecpnomor" value="{{old('ecpnomor')}}">
                @error('ecpnomor') <div class="invalid-feedback"> Masukkan No ECP !  </div> @enderror 
              </div>
                <div class="row">
                      <!-- select -->
                      <div class="form-group ml-2 col-sm-3">
                        <select class="form-control custom-select @error('keputusan_spv') is-invalid @enderror" id="keputusan_spv" name="keputusan_spv" value="{{old('keputusan_spv')}}">
                          <option selected disabled>-Disetujui :-</option>
                          <option>Ya</option>
                          <option>Tidak</option>   
                        </select>
                        @error('keputusan_spv') <div class="invalid-feedback"> {{$message}} </div> @enderror
                      </div>
                </div>

              <div class="form-group">
            
                <textarea id="alasan_spv" class="form-control @error('alasan_spv') is-invalid @enderror" rows="2" placeholder="Alasan" name="alasan_spv" value="{{old('alasan_spv')}}"></textarea>
                @error('alasan_spv') <div class="invalid-feedback"> Masukkan Alasan !  </div> @enderror
              </div>
              <div class="form-group">
               
                <input type="text" id="nama_spv" class="form-control @error('nama_spv') is-invalid @enderror" placeholder="Masukkan Nama" name="nama_spv" value="{{auth()->user()->name}}">
                @error('nama_spv') <div class="invalid-feedback"> Masukkan Nama !  </div> @enderror 
              </div>
              
               <div class="row">
                    <div class="col-12">
                    <a href="/beranda" class="btn btn-secondary">Cancel</a>
                    <input type="submit" value="Evaluate" class="btn btn-success float-right">
                    </div>
               </div>
            </div>
          </div>
        </div>
      </div>
  </section>
@endsection