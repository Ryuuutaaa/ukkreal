<?php

class Kelas_model 
{
    protected $kelas = 'kelas';
    protected $komka = 'komka';

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
        $this->db->query("SELECT kls.*,kmk.kompetensi_keahlian FROM $this->kelas AS kls INNER JOIN $this->komka AS kmk ON kls.id_komka=kmk.id_komka");

        return $this->db->resultAll();
    }

}