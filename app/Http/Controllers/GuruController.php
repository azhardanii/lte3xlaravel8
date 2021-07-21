<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use Illuminate\Http\Request;

class GuruController extends Controller
{
    public function __construct() {
        $this->guruModel = new Guru();
        $this->middleware('auth');
    }
    
    public function index() {
        return view('guru', ["data_guru" => Guru::all()]);
    }

    public function detail(Guru $guru) {        
        return view('gurudetail', ["guru" => $guru]);
    }

    public function tambah() {
        return view('gurutambah');
    }

    public function tambah_data_guru() {        
        Request()->validate([
            'nip'   => 'required|unique:gurus,nip|min:4|max:9',
            'nama'  => 'required',
            'mapel' => 'required',
            'foto'  => 'required|mimes:jpg,jpeg,png,bmp|max:512',
            'valid' => 'required'
        ],
        [
            'nip.required'   => 'Harap kolom NIP ini diisi, tidak boleh kosong!',
            'nama.required'  => 'Harap kolom Nama Lengkap ini diisi, tidak boleh kosong!',
            'mapel.required' => 'Harap kolom Mata Pelajaran ini diisi, tidak boleh kosong!',
            'foto.required'  => 'Harap pilih berkas foto, tidak boleh kosong!',
            'valid.required' => 'Klik pada kotak untuk memvalidasi data yang telah diisikan dan tolong dicek kembali!',
            'nip.unique'     => 'NIP telah tersedia, tolong isikan data yang lain!',
            'nip.min'        => 'NIP yang diisikan kurang dari kapasitas!',
            'nip.max'        => 'NIP yang diisikan melebihi kapasitas!',
            'foto.mimes'     => 'Format berkas yang dipilih bukan gambar!',
            'foto.max'       => 'Berkas yang dipilih melebihi kapasitas!'
        ]);

        //upload foto/gambar
        $file = Request()->foto;
        $fileName = Request()->nip.'.'.$file->extension();          
        $file->move(public_path('img'), $fileName);
        $data = [
            'nip'            => Request()->nip,
            'nama_guru'      => Request()->nama,
            'mata_pelajaran' => Request()->mapel,
            'foto_guru'      => $fileName,
        ];
        $this->guruModel->tambahDataGuru($data);
        return redirect()->route('guru')->with('pesan', 'Data Guru Berhasil Ditambahkan!');
    }

    public function ubah(Guru $guru) {        
        return view('guruubah', ["guru" => $guru]);        
    }

    public function ubah_data_guru($guru) {        
        Request()->validate([            
            'nama'  => 'required',
            'mapel' => 'required',
            'foto'  => 'mimes:jpg|max:512', 
            'valid' => 'required'
            //dalam laravel8 otomatis menghapus gambar yg sama jika nama dan file extension-nya sama 
            //karena itu format extension-nya dibuat hanya .jpg dan tidak bisa mengubah nama nip yang merupakan nama dari file gambar
        ],
        [            
            'nama.required'  => 'Harap kolom Nama Lengkap ini diisi, tidak boleh kosong!',
            'mapel.required' => 'Harap kolom Mata Pelajaran ini diisi, tidak boleh kosong!',
            'valid.required' => 'Klik pada kotak untuk memvalidasi data yang telah diisikan dan tolong dicek kembali!',            
            'foto.mimes'     => 'Format berkas yang dipilih harus berformat .jpg!',
            'foto.max'       => 'Berkas yang dipilih melebihi kapasitas!'
        ]);        

        //upload foto/gambar
        if(Request()->foto != "") {
            $file = Request()->foto;
            $fileName = Request()->nip.'.'.$file->extension();          
            $file->move(public_path('img'), $fileName);
            $data = [
                'nip'            => Request()->nip,
                'nama_guru'      => Request()->nama,
                'mata_pelajaran' => Request()->mapel,
                'foto_guru'      => $fileName,
            ];
            $this->guruModel->ubahDataGuru($guru, $data);
        } else {            
            $data = [
                'nip'            => Request()->nip,
                'nama_guru'      => Request()->nama,
                'mata_pelajaran' => Request()->mapel,                
            ];
            $this->guruModel->ubahDataGuru($guru, $data);
        }
        
        return redirect()->route('guru')->with('pesan', 'Data '.$data['nama_guru'].' Berhasil Diubah!');
    }

    public function hapus(Guru $data) {                     
        if ($data->foto_guru != "") {            
            unlink(public_path('img').'/'.$data->foto_guru);
        }

        $this->guruModel->hapusDataGuru($data->nama_guru);
        return redirect()->route('guru')->with('pesan', 'Data yang Dipilih Telah Berhasil Dihapus!');        
    }
}
