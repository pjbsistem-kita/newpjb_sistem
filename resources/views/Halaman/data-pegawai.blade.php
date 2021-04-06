@extends('HalamanDepan.beranda')

@section('title','User')

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
          <div class ="card-tools">
            <a href="{{route('create-pegawai')}}" class="btn btn-success">Tambah Data <i class="fas fa-plus-square"></i></a>
         </div>
        </div>
        <div class="card-body">
          <table class="table table-bordered">
                <tr>
                    <th>#</th>
                    <th>Nama</th>
                    <th>NID</th>
                    <th>Email</th>
                    <th>Level</th>
                    <th>Ditambahkan Tanggal</th>
                    <th>Aksi</th>

                </tr>
                @foreach ($dtpegawai as $item)
                <tr>
                    <td>{{ $loop->iteration}}</td>                    
                    <td>{{$item->name}}</td>
                    <td>{{$item->NID}}</td>
                    <td>{{$item->email}}</td>
                    <td>{{$item->level}}</td>
                    <td>{{$item->created_at}}</td>
                    <td>
                      <a href="{{route('edit-pegawai',$item->id)}}"><i class="fas fa-edit"></i></a> 
                      |
                      <a href="{{route('delete-pegawai',$item->id)}}"><i onclick="return confirm('Yakin hapus data?')" class="fas fa-trash-alt" style="color: red"></i></a>
                    </td>
                </tr>
                @endforeach
          </table>
        </div>
      </div>
    </div>
@endsection