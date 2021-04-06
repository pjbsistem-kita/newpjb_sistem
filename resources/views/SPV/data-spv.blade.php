@extends('HalamanDepan.beranda')

@section('title','Evaluate ECP')

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
                    <th>Disetujui:</th>
                    <th>Nama Supervisor</th>
                    <th>Alasan</th>
                    <th>Dievaluasi Tanggal</th>
                    <th>Aksi</th>

                </tr>
                @foreach ($spv as $item)
                <tr>
                    <td>{{ $loop->iteration}}</td>                    
                    <td>{{$item->ecpnomor}}</td>
                    <td>{{$item->keputusan_spv}}</td>
                    <td>{{$item->nama_spv}}</td>
                    <td>{{$item->alasan_spv}}</td>
                    <td>{{$item->created_at}}</td>
                    <td>
                       
                    @if (auth()->user()->level=="user spv")
                      <a href="{{route('edit-spv',$item->id)}}"><i class="fas fa-file" style="color: blue"></i></a>
                       | 
               
                      <a href="{{route('delete-spv',$item->id)}}"><i onclick="return confirm('Yakin hapus data?')" class="fas fa-trash-alt" style="color: red"></i></a>
                    @endif
                    @if (auth()->user()->level=="super user")
                      <a href="{{route('show-spv',$item->id)}}"><i class="fas fa-file" style="color: blue"></i></a>
                   @endif

                    </td>
                </tr>
                @endforeach
          </table>
        </div>
      </div>
    </div>
@endsection