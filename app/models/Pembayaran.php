<?php

class Pembayaran_model{
    private $pembayaran = "pembayaran";
    private $db;

    public function __construct(){
        $this->db = new Database();
    }

    public function getAll(){
        $this->db->query("SELECT * FROM $this->pembayaran");
        return $this->db->resultAll();
    }

    public function getById($id){
        $this->db->query("SELECT * FROM $this->pembayaran WHERE id_pembayaran = :id_pembayaran");
        $this->db->bind("id_pembayaran", $id);
        return $this->db->result();
    }

    public function countAllPembayaran(){
        $this->db->query("SELECT * FROM $this->pembayaran");
        return $this->db->rowCOunt();
    }

    public function tambah($data){
        $this->db->query("INSERT INTO $this->pembayaran VALUES(NULL, :tahun_ajaran, :nominal)");
        $this->db->bind("tahun_ajaran", $data['tahun_ajaran']);
        $this->db->bind("nominal", $data['nominal']);
        return $this->db->rowCount();
    }

    public function edit($data){
        $this->db->query("UPDATE $this->pembayaran SET tahun_ajaran = :tahun_ajaran, nominal = :nominal WHERE id_pembayaran = :id_pembayaran");
        $this->db->bind("tahun_ajaran", $data['tahun_ajaran']);
        $this->db->bind("nominal", $data['nominal']);
        $this->db->bind("id_pembayaran", $data['id_pembayaran']);
        return $this->db->rowCount();
    }

    public function delete($data){
        $this->db->query("DELETE FROM $this->pembayaran WHERE id_pembayaran = :id_pembayaran");
        $this->db->bind("id_pembayaran", $data['id_pembayaran']);
        return $this->db->rowCount();
    }
}