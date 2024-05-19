<?php
 
namespace App\Models;
 
use CodeIgniter\Model;
 
class Bendahara_model extends Model
{
    protected $table = 'bendahara';
 
    public function getBendahara($kode_user = false)
    {
        if ($kode_user === false) {
            return $this->findAll();
        } else {
            return $this->getWhere(['kode_user' => $kode_user]);
        }
    }
 
    public function saveBendahara($data)
    {
        $builder = $this->db->table($this->table);
        return $builder->insert($data);
    }public function editBendahara($data, $kode_user)
    {
        $builder = $this->db->table($this->table);
        $builder->where('kode_user', $kode_user);
        return $builder->update($data);
    }
    public function hapusBendahara($kode_user)
    {
        $builder = $this->db->table($this->table);
        return $builder->delete(['kode_user' => $kode_user]);
    }
}