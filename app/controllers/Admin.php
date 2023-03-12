<?php

class Admin extends Controller 
{

    protected $fixedData;

    public function __construct()
    {
        Middleware::auth();
    }

    public function setFixedData()
    {
        $this->fixedData = [
            'totalSiswa' => $this->model("User_model")->countAllSiswa(),
            'totalPetugas' => $this->model("User_model")->countAllPetugas(), 
            'totalKelas' => $this->model("Kelas_model")->countKelas(),
            'totalPengguna' => $this->model("User_model")->countPengguna(),

        ];

        return $this->fixedData;
    }

    public function index()
    {
        $data = [
            'title' => 'admin',
        ];

        $this->view("templates/header", $data);
        $this->view("admin/index", $data, $this->setFixedData());
        $this->view("templates/footer");
    }





    // admin kelas
    public function kelas()
    {
        $data = [
            'title' => 'admin kelas',
            'getAllKelas' => $this->model("Kelas_model")->getAllKelas(),
            'tbl' => 'Table kelas',
        ];

        $this->view("templates/header", $data);
        $this->view("admin/kelas/index", $data);
        $this->view("templates/footer");
    }
    // end
    


    // Admin siswa
    public function siswa()
    {
        $data = [
            'title' => 'admin siswa',
            'tbl' => 'Table siswa',
        ];

        $this->view("templates/header", $data);
        $this->view("admin/siswa/index", $data);
        $this->view("templates/footer");
    }
    // End



    // Admin pengguna
    public function pengguna()
    {
        $data = [
            'title' => 'admin pengguna',
            'tbl' => 'Table pengguna',
            'getAllPengguna' => $this->model("User_model")->getAllPengguna(),
        ];

        $this->view("templates/header", $data);
        $this->view("admin/pengguna/index", $data);
        $this->view("templates/footer");
    }
    // End 



    // Admin petugas
    public function petugas()
    {
        $data = [
            'title' => 'admin petugas',
            'tbl' => 'Table petugas',
            'getAllPetugas' => $this->model("User_model")->getAllPetugas(),
        ];

        $this->view("templates/header", $data);
        $this->view("admin/petugas/index", $data);
        $this->view("templates/footer");
    }

    public function tambahPetugas()
    {
        $data = [
            'title' => 'tambah petugas',
        ];

        $this->view("templates/header", $data);
        $this->view("admin/petugas/tambah", $data);
        $this->view("templates/footer");
    }

    public function tambahPetugasAct(){
        if($this->model("User_model")->tambahPengguna($_POST) > 0){     // Masukan tambah pengguna dulu
            $id_pengguna = $this->model("User_model")->getLastInsertedId(); // Masukan gaetInsertedById sebagai insert id terakhir itu apa
            if($this->model("User_model")->tambahPetugas($_POST, $id_pengguna) > 0){ // Baru masukan tambah petugas
                Flasher::setFlash("Petugas", "Berhasil Ditambahkan", "success");
                Redirect::to("/admin/tambahPetugas");
            } else{
                Flasher::setFlash("Petugas", "Gagal Ditambahkan", "danger");
                Redirect::to("/admin/tambahPetugas");
            }
        } else{
            Flasher::setFlash("Petugas", "Gagal Ditambahkan", "danger");
            Redirect::to("/admin/tambahPetugas");
        }
    }

    public function deletePetugas()
    {
        if($this->model("User_model")->deletePetugas($_POST) > 0){ 
            Flasher::setFlash("Petugas", "Berhasil Dihapus", "success");
            Redirect::to("/admin/petugas");
        } else{
            Flasher::setFlash("Petugas", "Gagal Dihapus", "danger");
            Redirect::to("/admin/petugas");
        }
    }
    
    // End
}