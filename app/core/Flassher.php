<?php

class Flasher
{
    public static function setFlash($tipe,$pesan)
    {
        $_SESSION['flash'] = [
            'pesan' => $pesan,
            'tipe' => $tipe
        ];
    }

    public static function flash()
    {
        if(isset($_SESSION['flash']))
        {
            echo '<div class="alert alert-' . $_SESSION['flash']['tipe'] .'">' . $_SESSION['flash']['pesan'] . '</div>';
            unset($_SESSION['flash']);
        }
    }
}