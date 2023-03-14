<?php

class User_model 
{

    private $petugas = 'petugas';
    private $siswa = 'siswa';
    private $pengguna = 'pengguna';
    private $kelas = 'kelas';
    private $pembayaran = "pembayaran";

    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getLastInsertedId()
    {
        return $this->db->getLastInsertedId();
    }
    // Login
    public function authByUsername($data){
        $this->db->query("SELECT * FROM $this->pengguna WHERE username = :username AND pass = :pass");
        $this->db->bind("username", $data['username']); // $data['username'] = ['username'] ambil dari nama input yg ada di file
        $this->db->bind("pass", $data['pass']);

        return $this->db->rowCount();
    }
    
    public function getUserByUsername($data){
        $this->db->query("SELECT * FROM $this->pengguna WHERE username = :username");
        $this->db->bind("username", $data['username']);

        return $this->db->result();
    }
    // End Login


    // Siswa
    public function countAllSiswa(){
        $this->db->query("SELECT * FROM $this->siswa");
        return $this->db->rowCount();
    }

    public function getAllSiswa()
    {
        $this->db->query("SELECT * FROM $this->siswa");

        return $this->db->resultAll();
    }
    // End siswa


    // Petugas
    public function countAllPetugas(){
        $this->db->query("SELECT * FROM $this->petugas");
        return $this->db->rowCount();
    }

    public function getAllPetugas()
    {
        $this->db->query("SELECT * FROM $this->petugas");

        return $this->db->resultAll();
    }

    public function getPetugasById($id)
    {
        $this->db->query("SELECT * FROM $this->petugas WHERE id = :id");
        $this->db->bind("id", $id);

        return $this->db->result();
    }

    public function tambahPetugas($data, $id_pengguna)
    {
        $query = "INSERT INTO $this->petugas VALUES(NULL, :username, :pass, :pengguna_id)";
        $this->db->query($query);
        $this->db->bind("username", $data['username']);
        $this->db->bind("pass", $data['pass']);
        $this->db->bind("pengguna_id", $id_pengguna);
        return $this->db->rowCount();
    }

    public function deletePetugas($data)
    {
        $query = "DELETE FROM $this->petugas WHERE id = :id";
        $this->db->query($query);
        $this->db->bind("id", $data['id']);
        return $this->db->rowCount();
    }
    // End petugas

    // Pengguna 
    public function getAllPengguna()
    {
        $this->db->query("SELECT * FROM $this->pengguna");

        return $this->db->resultAll();
    }

    public function countPengguna()
    {
        $this->db->query("SELECT * FROM $this->pengguna");

        return $this->db->rowCount();
    }

    public function tambahPengguna($data){
        $this->db->query("INSERT INTO $this->pengguna VALUES(NULL, :username, :pass, :role)");
        $this->db->bind("username", $data['username']);
        $this->db->bind("pass", $data['pass']);
        $this->db->bind("role", $data['role']);
        return $this->db->rowCount();
    }

    public function deletePengguna($data)
    {
        $query = "DELETE FROM $this->pengguna WHERE id = :id";
        $this->db->query($query);
        $this->db->bind("id", $data['id']);
        return $this->db->rowCount();
    }
    // End
    
    public function getAllPembayaran(){
        $this->db->query("SELECT * FROM $this->pembayaran");
        return $this->db->resultAll();
    }

    public function getDataPembayaranById($id){
        $this->db->query("SELECT * FROM $this->pembayaran WHERE id = :id");
        $this->db->bind("id", $id);
        return $this->db->result();
    }

    public function tambahPembayaran($data){
        $this->db->query("INSERT INTO $this->pembayaran VALUES(NULL, :tahun_ajaran, :nominal)");
        $this->db->bind("tahun_ajaran", $data['tahun_ajaran']);
        $this->db->bind("nominal", $data['nominal']);
        return $this->db->rowCount();
    }

    public function editPembayaran($data){
        $this->db->query("UPDATE $this->pembayaran SET tahun_ajaran = :tahun_ajaran, nominal = :nominal WHERE id = :id");
        $this->db->bind("tahun_ajaran", $data['tahun_ajaran']);
        $this->db->bind("nominal", $data['nominal']);
        $this->db->bind("id", $data['id']);
        return $this->db->rowCount();
    }

    public function deletePembayaran($data){
        $this->db->query("DELETE FROM $this->pembayaran WHERE id = :id");
        $this->db->bind("id", $data['id']);
        return $this->db->rowCount();
    }
}