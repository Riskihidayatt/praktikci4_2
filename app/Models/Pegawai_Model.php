<?php

namespace App\Models;

use CodeIgniter\Model;

class Pegawai_model extends Model
{
    protected $table = 'pegawai';

    public function getPegawai($kode_pegawai = false)
    {
        if ($kode_pegawai === false) {
            return $this->findAll();
        } else {
            return $this->getWhere(['kode_pegawai' => $kode_pegawai]);
        }
    }

    public function savePegawai($data)
    {
        $builder = $this->db->table($this->table);
        return $builder->insert($data);
    }
    public function editPegawai($data, $kode_pegawai)
    {
        $builder = $this->db->table($this->table);
        $builder->where('kode_pegawai', $kode_pegawai);
        return $builder->update($data);
    }
    public function hapusPegawai($kode_pegawai)
    {
        $builder = $this->db->table($this->table);
        return $builder->delete(['kode_pegawai' => $kode_pegawai]);
    }
}
