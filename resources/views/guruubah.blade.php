@extends('layout.main')
@section('title', 'Ubah Data Guru')

@section('content')    
<div class="row">    
    <div class="col-md-12">      
      <div class="card card-warning">
        <div class="card-header">
          <h3 class="card-title">Ubah Data Guru</h3>
        </div>        
        <form action="/ubah_data_guru/{{ strtolower($guru->nama_guru) }}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="card-body">
            <div class="form-group">
              <label for="nip">NIP</label>
              <input type="number" id="nip" name="nip" class="form-control @error('nip') is-invalid @enderror" placeholder="Masukkan NIP Disini" value="{{ $guru->nip }}" autocomplete="off" readonly>
              <div class="invalid-feedback">
                @error('nip')
                    {{ $message }}
                @enderror
              </div>
            </div>
            <div class="form-group">
              <label for="nama">Nama Lengkap</label>
              <input type="text" id="nama" name="nama" class="form-control @error('nama') is-invalid @enderror" placeholder="Masukkan Nama Lengkap Disini" value="{{ $guru->nama_guru }}" autocomplete="off">
              <div class="invalid-feedback">
                @error('nama')
                    {{ $message }}
                @enderror
              </div>
            </div>
            <div class="form-group">
              <label for="mapel">Mata Pelajaran</label>
              <input type="text" id="mapel" name="mapel" class="form-control @error('mapel') is-invalid @enderror" placeholder="Masukkan Mata Pelajaran Disini" value="{{ $guru->mata_pelajaran }}" autocomplete="off">
              <div class="invalid-feedback">
                @error('mapel')
                    {{ $message }}
                @enderror
              </div>
            </div>            
            <div class="form-group">              
              <div class="row">
                <div class="col-md-2">
                  <label>Foto Guru</label>
                  <p><img src="{{asset('img')}}/{{ $guru->foto_guru }}" width="125"></p>
                </div>
                <div class="col-md-10">
                  <label for="foto">Ubah Foto</label>
                  <div class="custom-file">
                    <input type="file" id="foto" name="foto" class="custom-file-input form-control @error('foto') is-invalid @enderror">   
                    <div class="invalid-feedback">
                      @error('foto')
                          {{ $message }}
                      @enderror
                    </div>                
                    <label class="custom-file-label" for="foto">Pilih Foto</label>
                  </div>   
                </div>
              </div>                                                                                            
            </div>            
            <div class="form-check">
              <input type="checkbox" id="valid" name="valid" class="form-check-input @error('valid') is-invalid @enderror">                            
              <label class="form-check-label" for="valid">Data diatas telah sesuai dan benar adanya, serta dengan penuh kesadaran mengubahnya tanpa ada tekanan dari pihak manapun.</label>
              <div class="invalid-feedback">
                @error('valid')
                    {{ $message }}
                @enderror
              </div>
            </div>
          </div>          
          <div class="card-footer">
            <button type="submit" class="btn btn-warning">Kirim Data</button>
            <a href="/guru" class="btn btn-danger">Batal</a>
          </div>
        </form>
      </div>      
    </div>
</div>
@endsection