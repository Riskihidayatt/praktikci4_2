<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Bendahara_model;

class Bendahara extends Controller
{
    public function index()
    {
        $model = new Bendahara_model;
        $data['title']     = 'Data Bendahara';
        $data['getBendahara'] = $model->getbendahara();
        echo view('konten/bendahara/employee_view', $data);
        
    }

    public function add()
    {
        $model = new Bendahara_model;
        $data = array(
            'kode_user'       => $this->request->getPost('kode_user'),
            'username'         => $this->request->getPost('username'),
            'pass'          => $this->request->getPost('pass')
        );
        
        $model->saveBendahara($data);
        echo '<script>
                alert("Selamat! Berhasil Menambah Data bendahara");
                window.location="' . base_url('bendahara') . '"
            </script>';
    }
    public function edit($kode_user)
    {
        $model = new Bendahara_model;
        $getBendahara = $model->getBendahara($kode_user)->getRow();
        if (isset($getBendahara)) {
            $data['bendahara'] = $getBendahara;
            $data['title']  = 'Ari Tutorial';

            
            echo view('konten/bendahara/edit_view', $data);
            
        } else {

            echo '<script>
                    alert("kode_user  ' . $kode_user . ' Tidak ditemukan");
                    window.location="' . base_url('bendahara') . '"
                </script>';
        }
    }

    public function update()
    {
        $model = new Bendahara_model;
        $kode_user = $this->request->getPost('kode_user');
        $data = array(
            'kode_user'       => $this->request->getPost('kode_user'),
            'username'         => $this->request->getPost('username'),
            'pass'          => $this->request->getPost('pass')
        );
        $model->editBendahara($data, $kode_user);
        echo '<script>
                alert("Selamat! Anda berhasil melakukan update data.");
                window.location="' . base_url('bendahara') . '"
            </script>';
    }
    public function hapus($kode_user)
    {
        $model = new Bendahara_model;
        $getBendahara = $model->getBendahara($kode_user)->getRow();
        if (isset($getBendahara)) {
            $model->hapusBendahara($kode_user);
            echo '<script>
                    alert("Selamat! Data berhasil terhapus.");
                    window.location="' . base_url('bendahara') . '"
                </script>';
        } else {
 
            echo '<script>
                    alert("Gagal Menghapus !, ID Bendahara ' . $kode_user . ' Tidak ditemukan");
                    window.location="' . base_url('bendahara') . '"
                </script>';
        }
    }
}
