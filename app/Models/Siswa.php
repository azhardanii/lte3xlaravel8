<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Siswa extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    
    public function datAll() {
        return DB::table('siswas')
                   ->leftJoin('kelas', 'siswas.kode_kelas', '=', 'kelas.kode_kelas')
                   ->leftJoin('mata_pelajarans', 'siswas.kode_mapel', '=', 'mata_pelajarans.kode_mapel')
                   ->orderBy('nis','asc')->get();
    }
}
