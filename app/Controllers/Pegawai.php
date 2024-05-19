<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Pegawai_model;

class Pegawai extends Controller
{
    public function index()
    {
        $model = new Pegawai_model;
        $data['title']     = 'Data Pegawai';
        $data['getPegawai'] = $model->getPegawai();
        echo view('konten/pegawai/employee_view', $data);
        
    }

    public function add()
    {
        $model = new Pegawai_model;
        $data = array(
            'nama_pegawai'       => $this->request->getPost('nama_pegawai'),
            'tmpt_lahir'         => $this->request->getPost('tempat_lahir'),
            'tgl_lahir'          => $this->request->getPost('tanggal_lahir'),
            'agama'              => $this->request->getPost('agama'),
            'pedetar'           => $this->request->getPost('pedetar'),
            'jenis_kelamin'      => $this->request->getPost('jenis_kelamin'),
            'tmt'                => $this->request->getPost('tmt'),
            'golongan'           => $this->request->getPost('golongan'),
            'jabatan'            => $this->request->getPost('jabatan'),
            'status_pegawai'     => $this->request->getPost('status_pegawai'),
            'status_pernikahan'  => $this->request->getPost('status_pernikahan'),
            'jumlah_anak'        => $this->request->getPost('jumlah_anak'),
            'alamat'             => $this->request->getPost('alamat'),
            'gaji_pokok'         => $this->request->getPost('gaji_pokok'),
            'no_tlp'             => $this->request->getPost('no_tlp')
        );
        
        $model->savePegawai($data);
        echo '<script>
                alert("Selamat! Berhasil Menambah Data Pegawai");
                window.location="' . base_url('pegawai') . '"
            </script>';
    }
    public function edit($kode_pegawai)
    {
        $model = new Pegawai_model;
        $getPegawai = $model->getPegawai($kode_pegawai)->getRow();
        if (isset($getPegawai)) {
            $data['pegawai'] = $getPegawai;
            $data['title']  = 'Ari Tutorial';

            
            echo view('konten/pegawai/edit_view', $data);
            
        } else {

            echo '<script>
                    alert("kode_pegawai  ' . $kode_pegawai . ' Tidak ditemukan");
                    window.location="' . base_url('pegawai') . '"
                </script>';
        }
    }

    public function update()
    {
        $model = new Pegawai_model;
        $kode_pegawai = $this->request->getPost('kode_pegawai');
        $data = array(
            'kode_pegawai'       => $this->request->getPost('kode_pegawai'),
            'nama_pegawai'       => $this->request->getPost('nama_pegawai'),
            'tmpt_lahir'         => $this->request->getPost('tmpt_lahir'),
            'tgl_lahir'          => $this->request->getPost('tanggal_lahir'),
            'agama'              => $this->request->getPost('agama'),
            'pedetar'           => $this->request->getPost('pedetar'),
            'jenis_kelamin'      => $this->request->getPost('jenis_kelamin'),
            'tmt'                => $this->request->getPost('tmt'),
            'golongan'           => $this->request->getPost('golongan'),
            'jabatan'            => $this->request->getPost('jabatan'),
            'status_pegawai'     => $this->request->getPost('status_pegawai'),
            'status_pernikahan'  => $this->request->getPost('status_pernikahan'),
            'jumlah_anak'        => $this->request->getPost('jumlah_anak'),
            'alamat'             => $this->request->getPost('alamat'),
            'gaji_pokok'         => $this->request->getPost('gaji_pokok'),
            'no_tlp'             => $this->request->getPost('no_tlp')
        );
        
        $model->editPegawai($data, $kode_pegawai);
        echo '<script>
                alert("Selamat! Anda berhasil melakukan update data.");
                window.location="' . base_url('pegawai') . '"
            </script>';
    }
    public function hapus($kode_pegawai)
    {
        $model = new Pegawai_model;
        $getPegawai = $model->getPegawai($kode_pegawai)->getRow();
        if (isset($getPegawai)) {
            $model->hapusPegawai($kode_pegawai);
            echo '<script>
                    alert("Selamat! Data berhasil terhapus.");
                    window.location="' . base_url('pegawai') . '"
                </script>';
        } else {
 
            echo '<script>
                    alert("Gagal Menghapus !, ID Pegawai ' . $kode_pegawai . ' Tidak ditemukan");
                    window.location="' . base_url('pegawai') . '"
                </script>';
        }
    }
}
