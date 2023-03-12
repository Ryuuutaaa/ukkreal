<?php

class Siswa extends Controller 
{

    public function __construct()
    {
        Middleware::auth();
    }

    public function index()
    {

        $data = [
            'title' => 'siswa',
        ];

        $this->view('templates/header');
        $this->view('siswa/index');
        $this->view('templates/footer');
    }
}