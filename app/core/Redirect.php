<?php

class Redirect 
{
    public static function to($path)
    {
        header("Location: " . BURL . "$path");
    }
}