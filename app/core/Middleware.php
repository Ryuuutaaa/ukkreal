<?php

class Middleware 
{
    public static function auth()
    {
        if($_SESSION['user']['login'] != true)
        {
            Redirect::to("/auth");
        }
    }
}