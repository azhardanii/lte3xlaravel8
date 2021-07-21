@extends('layout.main')
@section('title', 'Detail Guru')

@section('content')
  <div class="row">
    <div class="col-12">          
      <div class="card">            
        <div class="card-body text-center">
            <h2>{{ $guru->nama_guru }}</h2>
            <p><img src="{{asset('img')}}/{{ $guru->foto_guru }}" width="125" class="mb-2"></p>           
            <h4>N.I.P : {{ $guru->nip }}</h4>  
            <h4>Pengajar {{ $guru->mata_pelajaran }}</h4> 
            <a href="/guru" class="btn btn-success btn-sm mt-3">< Kembali</a>
        </div>
    </div>   
@endsection