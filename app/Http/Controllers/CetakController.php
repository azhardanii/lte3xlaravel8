<?php

namespace App\Http\Controllers;

use Dompdf\Dompdf;
use Dompdf\Options;
use App\Models\Siswa;
use Illuminate\Http\Request;

class CetakController extends Controller
{
    public function __construct() {
        $this->siswaModel = new Siswa();
    }

    public function index() {
        $siswa = ['data_siswa' => $this->siswaModel->datAll()];                
        return view('cetak', $siswa);
    }
    
    public function pdf() {
        $siswa = ['data_siswa' => $this->siswaModel->datAll()];                
        $html  =  view('cetakpdf', $siswa);    
        
        $options = new Options();
        $options->setIsRemoteEnabled(true);
        $dompdf = new Dompdf($options);

        $dompdf->loadHtml($html);
        
        $dompdf->setPaper('A4', 'landscape');

        $dompdf->render();
        
        $dompdf->stream();
    }
}
