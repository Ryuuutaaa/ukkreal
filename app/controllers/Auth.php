<?php

class Auth extends Controller 
{ 

    public function index()
    {
        $data  = [
            'title' => 'Halamann Login',
        ];

        $this->view("templates/header", $data);
        $this->view("auth/index");
        $this->view("templates/footer");
    }

    public function login()
    {
        if($this->model("User_model")->authByUsername($_POST) > 0){          
            $user = $this->model("User_model")->getUserByUsername($_POST); 
            $_SESSION['user'] = [
                'id' => $user['id'],
                'username' => $user['username'],
                'role' => $user['role'],
                'login' => true,
            ];
            if($user['role'] == '0'){
                Redirect::to("/admin");
            }else if($user['role'] == "1"){
                Redirect::to("/petugas");
            }else{
                Redirect::to("/siswa");
            }
        }else{
            Flasher::setFlash("danger","gagal login");
            Redirect::to("/auth");
        }
    }

    public function logout()
    {
        session_unset();
        session_destroy();

        Redirect::to("/auth");
    }
}