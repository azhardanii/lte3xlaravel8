@extends('layout.main')
@section('title', 'Guru')

@section('content')  
    @if (session('pesan'))        
        <div class="toast bg-success" role="alert" aria-live="assertive" aria-atomic="true" data-animation="true" data-delay="3500" data-autohide="true">
            <div class="toast-header">
                <i class="icon fas fa-check mr-2"></i>

                <strong class="mr-auto">Notifikasi</strong>
                <small>Beberapa detik yang lalu</small>                
            </div>
            <div class="toast-body">
                {{session('pesan')}}
            </div>
        </div>        
    @endif
    <div class="row">
    <div class="col-12">          
        <div class="card">  
        <div class="card-body">
            <a href="/tambah_guru" class="btn btn-info mb-2">Tambah Data Guru</a>
            <table id="sadtable" class="table table-bordered table-striped">
            <thead>
                <tr>                        
                    <th>NIP</th>
                    <th>Foto</th>
                    <th>Nama</th>
                    <th>Mata Pelajaran</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>    
                @foreach ($data_guru as $data)                
                    <tr>                
                        <td class="align-middle">{{ $data->nip }}</td>
                        <td class="text-center"><img src="img/{{ $data->foto_guru }}" width="50"></td>
                        <td class="align-middle">{{ $data->nama_guru }}</td>
                        <td class="align-middle">{{ $data->mata_pelajaran }}</td>
                        <td class="align-middle">
                            <a href="detail_guru/{{ strtolower($data->nama_guru) }}" class="badge badge-success">Detail</a>
                            <a href="ubah_guru/{{ strtolower($data->nama_guru) }}" class="badge badge-warning">Ubah</a>
                            <a href="#" class="badge badge-danger" type="button" data-toggle="modal" data-target="#delete{{$data->id}}">Hapus</a>
                        </td>
                    </tr>                
                @endforeach                        
            </tbody>                
            </table>
        </div>
        </div>
    </div>
    </div>    

    @foreach ($data_guru as $data)  
    <div class="modal fade" id="delete{{$data->id}}">
        <div class="modal-dialog modal-sm">
          <div class="modal-content bg-danger">            
            <div class="modal-body">
              <p>Apakah yakin akan menghapus data {{$data->nama_guru}}?</p>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-outline-light" data-dismiss="modal">Batal</button>
              <a href="hapus_data_guru/{{ strtolower($data->nama_guru) }}" class="btn btn-outline-light">Hapus</a>
            </div>
          </div>
        </div>
    </div>
    @endforeach
@endsection