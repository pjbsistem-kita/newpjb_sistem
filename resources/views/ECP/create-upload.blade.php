@extends('HalamanDepan.beranda')

@section('title','Upload File Pendukung')

@section('container')     
<section class="content">
      <div class="row">
        <div class="col-md-6">
          <div class="card card-primary">
              <form action="{{route('simpan-upload')}}" method="post" enctype="multipart/form-data">
              @csrf       
                <div class="form-group">
                    <label for="exampleInputEmail1">Input File</label>
                      <input type="file" class="form-control" id="nama" name="file">
                      {{-- pesan error  --}}
                            @error('file')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                </div>
                <div class="form-group">
                                <label for="exampleInputPassword1">Keterangan</label>
                                <textarea name="keterangan" cols="30" rows="5" class="form-control"></textarea>
                            </div>
                            {{-- pesan error  --}}
                            @error('keterangan')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <div class="form-group">
              <button type="submit" class="btn btn-success">Simpan Data</button>
            </div>
              </form>
          </div>
        </div>
      </div>
</section>
@endsection