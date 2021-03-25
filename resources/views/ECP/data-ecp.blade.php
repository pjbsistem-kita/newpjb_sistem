@extends('HalamanDepan.beranda')

@section('title','Data ECP')

@section('container')
    <!-- Main content -->
    <div class="content">
      <div class ="card card-info card-outline">
        <div class ="card-header">
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>
        </div>
        <div class="card-body">
          <table class="table table-bordered">
                <tr>
                    <th>#</th>
                    <th>ECP NO</th>
                    <th>Nama</th>
                    <th>Deskripsi</th>
                    <th>Diajukan Tanggal</th>
                    <th>Aksi</th>

                </tr>
                @foreach ($ecp as $item)
                <tr>
                    <td>{{ $loop->iteration}}</td>                    
                    <td>{{$item->ecpno}}</td>
                    <td>{{$item->nama}}</td>
                    <td>{{$item->deskripsi}}</td>
                    <td>{{$item->created_at}}</td>
                    <td>
                    @if (auth()->user()->level=="user spv")
                      <a href="{{route('show-ecp',$item->id)}}"><i class="fas fa-file" style="color: green">Evaluate</i></a>
                      @endif
                    @if (auth()->user()->level=="admin engineer")
                      <a href="{{route('show-ecp',$item->id)}}"><i class="fas fa-plus" style="color: green">Notulen</i></a>
                      @endif

                    @if (auth()->user()->level=="super user")
                      <a href="{{route('show-ecp',$item->id)}}"><i class="fas fa-file" style="color: blue"></i></a>
                      |
                      <a href="{{route('delete-ecp',$item->id)}}"><i onclick="return confirm('Yakin hapus data?')" class="fas fa-trash-alt" style="color: red"></i></a>
                    @endif

                   

                    </td>
                </tr>
                @endforeach
          </table>
        </div>
      </div>
    </div>
@endsection