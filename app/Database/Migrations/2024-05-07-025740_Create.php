<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Penggajian extends Migration
{
    public function up()
    {
        // Membuat kolom/field untuk tabel karyawan
        $this->forge->addField([
            'kode_pegawai'          => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true
            ],
            'nama_pegawai'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '255'
            ],
            'tmpt_lahir'      => [
                'type'           => 'VARCHAR',
                'constraint'     => '50',
            ],
            'tgl_lahir'      => [
                'type'           =>  'VARCHAR',
                'constraint'     => '50',
            ],
            'agama'      => [
                'type'           =>  'VARCHAR',
                'constraint'     => '50',
            ],
            'pedetar'      => [
                'type'           =>  'VARCHAR',
                'constraint'     => '50',
            ],
            'jerkel'      => [
                'type'           =>  'VARCHAR',
                'constraint'     => '50',
            ],
            'tmt'      => [
                'type'           =>  'VARCHAR',
                'constraint'     => '50',
            ],
            'golongan'      => [
                'type'           =>  'VARCHAR',
                'constraint'     => '50',
            ],
            'jabatan'      => [
                'type'           =>  'VARCHAR',
                'constraint'     => '50',
            ],
            'status_pegawai'      => [
                'type'           =>  'VARCHAR',
                'constraint'     => '50',
            ],
            'status_pernikahan'      => [
                'type'           => 'ENUM',
                'constraint'     => ['sudah', 'belum'],
                'default'        => 'belum',
            ],
            'jumlah anak'      => [
                'type'           =>  'VARCHAR',
                'constraint'     => '2',
            ],
            'alamat'      => [
                'type'           =>  'VARCHAR',
                'constraint'     => '50',
            ],
            'gaji_pokok'      => [
                'type'           =>  'VARCHAR',
                'constraint'     => '50',
            ],
            'no_tlp'      => [
                'type'           =>  'VARCHAR',
                'constraint'     => '50',
            ],
        ]);

        // Membuat primary key
        $this->forge->addKey('kode_pegawai', TRUE);

        // Membuat tabel karyawan
        $this->forge->createTable('pegawai', TRUE);
    }

    //-------------------------------------------------------

    public function down()
    {
        // menghapus tabel karyawan
        $this->forge->dropTable('pegawai');
    }
}
