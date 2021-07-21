<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Guru extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function tambahDataGuru($data) {
        DB::table('gurus')->insert($data);
    }

    public function ubahDataGuru($guru, $data) {
        DB::table('gurus')->where('nama_guru', $guru)->update($data);
    }

    public function hapusDataGuru($data) {
        DB::table('gurus')->where('nama_guru', $data)->delete();
    }
}
