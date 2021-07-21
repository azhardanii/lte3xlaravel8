<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Cetak Data Siswa</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('plugins') }}/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('dist') }}/css/adminlte.min.css">
</head>
<body>
<div class="wrapper">
    <div class="row mt-3 mb-3">
        <div class="col-12">
            <h2 class="page-header">
            <i class="fas fa-globe"></i> SAD_Web, ID.
            <small class="float-right">
                <?php 
                    setlocale(LC_ALL, 'id-ID', 'id_ID');
                    echo strftime('%A, %d %B %Y %T').' WIB';
                ?>
            </small>
            </h2>
        </div>      
    </div>                  
        
    <div class="row">
        <div class="col-12 table-responsive">
            <table class="table table-bordered table-striped">
            <thead>
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
            </tbody>
            </table>
        </div>      
    </div>  
</div>
<script>
    window.print();
</script>
</body>
</html> 
