<?php

namespace App\Controllers;

use App\Models\Fakerx;

class Fakerxc extends BaseController
{

    public function __construct()
    {
        $this->Fakerx = new Fakerx();
    }


    public function index()
    {

        $nama 		= $this->Fakerx->xnama();
        $email 		= $this->Fakerx->xemail();
        $lima_digit = $this->Fakerx->xlima();
        // Echo
        echo 'Nama : ' . $nama . '<br> Email : ' . $email . '<br> No. Induk : ' . $lima_digit;
    }


    // ----------------------
}
