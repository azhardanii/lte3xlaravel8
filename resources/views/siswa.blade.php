@extends('layout.main')
@section('title', 'Siswa')

@section('content')
<div class="row">
    <div class="col-12">          
        <div class="card">  
        <div class="card-body">   
            <a href="/cetak" target="_blank" class="btn btn-info mb-3">Cetak Printer</a>        
            <a href="/cetakpdf" target="_blank" class="btn btn-info mb-3">Cetak PDF</a>        
            <table class="table table-bordered table-striped">
            <thead>
                <tr>                        
                    <th>NIS</th>                    
                    <th>Nama</th>
                    <th>Kelas</th>
                    <th>Mata Pelajaran</th>                    
                </tr>
            </thead>
            <tbody>    
                @foreach ($data_siswa as $data)                
                    <tr>                
                        <td class="align-middle">{{ $data->nis }}</td>                        
                        <td class="align-middle">{{ $data->nama_siswa }}</td>                        
                        <td class="align-middle">{{ $data->kelas }}</td>
                        <td class="align-middle">{{ $data->mata_pelajaran }}</td>                        
                    </tr>                
                @endforeach                        
            </tbody>                
            </table>
        </div>
        </div>
    </div>
    </div>  
@endsection