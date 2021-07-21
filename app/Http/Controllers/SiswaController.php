<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function __construct() {
        $this->siswaModel = new Siswa();
        $this->middleware('auth');
    }

    public function index() {
        $siswa = ['data_siswa' => $this->siswaModel->datAll()];        
        return view('siswa', $siswa);
    }
}
