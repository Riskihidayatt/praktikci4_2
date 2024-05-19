<?php
 
namespace App\Models;
 
use CodeIgniter\Model;
 
class Penggajian_Model extends Model
{
    protected $table = 'penggajian';
 
    public function getPenggajian($kode_penggajian = false)
    {
        if ($kode_penggajian === false) {
            return $this->findAll();
        } else {
            return $this->getWhere(['kode_penggajian' => $kode_penggajian]);
        }
    }
 
    public function savePenggajian($data)
    {
        $builder = $this->db->table($this->table);
        return $builder->insert($data);
    }public function editPenggajian($data, $kode_penggajian)
    {
        $builder = $this->db->table($this->table);
        $builder->where('kode_penggajian', $kode_penggajian);
        return $builder->update($data);
    }
    public function hapusPenggajian($kode_penggajian)
    {
        $builder = $this->db->table($this->table);
        return $builder->delete(['kode_penggajian' => $kode_penggajian]);
    }
}