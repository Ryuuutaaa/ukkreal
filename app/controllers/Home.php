<?php

class Home extends Controller 
{
    public function __construct()
    {
        Middleware::auth();
    }
    
    public function index()
    {
        $this->view("home/index");
    }
}