<?php

class Petugas extends Controller
{
    public function __construct()
    {
        Middleware::auth();
    }
    
    public function index()
    {

        $data = [
            'title' => 'petugas'
        ];

        $this->view("templates/header", $data);
        $this->view("petugas/index");
        $this->view("templates/footer");
    }
}