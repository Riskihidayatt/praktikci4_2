<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Penggajian_model;

class Penggajian extends Controller
{
    public function index()
    {
        $model = new Penggajian_model;
        $data['title']     = 'Data Penggajian';
        $data['getPenggajian'] = $model->getPenggajian();
        echo view('konten/penggajian/employee_view', $data);
        
    }

    public function add()
    {
        $model = new Penggajian_model;
        $data = array(
            'kode_penggajian'       => $this->request->getPost('kode_penggajian'),
            'tunj_istri_suami'       => $this->request->getPost('tunj_istri_suami'),
            'tunj_anak'          => $this->request->getPost('tunj_anak'),
            'tunj_jabatan'              => $this->request->getPost('tunj_jabatan'),
            'tunj_beras'           => $this->request->getPost('tunj_beras'),
            'tukin'      => $this->request->getPost('tukin'),
            'uang_makan'                => $this->request->getPost('uang_makan'),
            'pot_rwp'           => $this->request->getPost('pot_rwp'),
            'pot_pph'            => $this->request->getPost('pot_pph'),
            'biapetarum'     => $this->request->getPost('biapetarum'),
            'sewa_rmh_dinas'  => $this->request->getPost('sewa_rmh_dinas'),
            'gaji_bersih'        => $this->request->getPost('gaji_bersih'),
            'kode_pegawai'             => $this->request->getPost('kode_pegawai'),
            'kode_tunjangan'         => $this->request->getPost('kode_tunjangan'),
            'kode_potongan'             => $this->request->getPost('kode_potongan')
        );
        
        $model->savePenggajian($data);
        echo '<script>
                alert("Selamat! Berhasil Menambah Data Penggajian");
                window.location="' . base_url('penggajian') . '"
            </script>';
    }
    public function edit($kode_penggajian)
    {
        $model = new Penggajian_model;
        $getPenggajian = $model->getPenggajian($kode_penggajian)->getRow();
        if (isset($getPenggajian)) {
            $data['penggajian'] = $getPenggajian;
            $data['title']  = 'Ari Tutorial';

            
            echo view('konten/penggajian/edit_view', $data);
            
        } else {

            echo '<script>
                    alert("kode_penggajian  ' . $kode_penggajian . ' Tidak ditemukan");
                    window.location="' . base_url('penggajian') . '"
                </script>';
        }
    }

    public function update()
    {
        $model = new Penggajian_model;
        $kode_penggajian = $this->request->getPost('kode_penggajian');
        $data = array(
            'kode_penggajian'       => $this->request->getPost('kode_penggajian'),
            'tunj_istri_suami'         => $this->request->getPost('tunj_istri_suami'),
            'tunj_anak'          => $this->request->getPost('tunj_anak'),
            'tunj_jabatan'              => $this->request->getPost('tunj_jabatan'),
            'tunj_beras'           => $this->request->getPost('tunj_beras'),
            'tukin'      => $this->request->getPost('tukin'),
            'uang_makan'                => $this->request->getPost('uang_makan'),
            'pot_rwp'           => $this->request->getPost('pot_rwp'),
            'pot_pph'            => $this->request->getPost('pot_pph'),
            'biapetarum'     => $this->request->getPost('biapetarum'),
            'sewa_rmh_dinas'  => $this->request->getPost('sewa_rmh_dinas'),
            'gaji_bersih'        => $this->request->getPost('gaji_bersih'),
            'kode_pegawai'             => $this->request->getPost('kode_pegawai'),
            'kode_tunjangan'         => $this->request->getPost('kode_tunjangan'),
            'kode_potongan'             => $this->request->getPost('kode_potongan')
        );
        
        $model->editPenggajian($data, $kode_penggajian);
        echo '<script>
                alert("Selamat! Anda berhasil melakukan update data.");
                window.location="' . base_url('penggajian') . '"
            </script>';
    }
    public function hapus($kode_penggajian)
    {
        $model = new Penggajian_model;
        $getPenggajian = $model->getPenggajian($kode_penggajian)->getRow();
        if (isset($getPenggajian)) {
            $model->hapusPenggajian($kode_penggajian);
            echo '<script>
                    alert("Selamat! Data berhasil terhapus.");
                    window.location="' . base_url('penggajian') . '"
                </script>';
        } else {
 
            echo '<script>
                    alert("Gagal Menghapus !, ID penggajian ' . $kode_penggajian . ' Tidak ditemukan");
                    window.location="' . base_url('penggajian') . '"
                </script>';
        }
    }
}
