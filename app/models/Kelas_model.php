<?php

class Kelas_model 
{
    protected $kelas = 'class';
    // protected $komka = 'komka';

    protected $db;

    public function __construct()
    {
        $this->db = new Database;
    }


    public function countKelas()
    {
        $this->db->query("SELECT * FROM $this->kelas");

        return $this->db->rowCount();
    }

    public function getAllKelas()
    {
        $this->db->query("SELECT * FROM $this->kelas");

        return $this->db->resultAll();
    }

    public function tambahKelas($data)
    {
        $query = "INSERT INTO $this->kelas VALUES(NULL, :nama, :kompetensi_keahlian)";
        $this->db->query($query);
        $this->db->bind("nama", $data['nama']);
        $this->db->bind("kompetensi_keahlian", $data['kompetensi_keahlian']);
        // $this->db->bind("pengguna_id", $id_pengguna);
        return $this->db->rowCount();
    }

    public function hapusKelas($id)
    {
        $this->db->query("DELETE FROM $this->kelas WHERE id =:id");
        $this->db->bind("id", $id['id']);

        return $this->db->rowCount();
    }

    // public function getAllKelas()
    // {
    //     $this->db->query("SELECT kls.*,kmk.kompetensi_keahlian FROM $this->kelas AS kls INNER JOIN $this->komka AS kmk ON kls.id_komka=kmk.id_komka");

    //     return $this->db->resultAll();
    // }

}