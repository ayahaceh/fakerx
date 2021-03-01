<?php

namespace App\Models;

use CodeIgniter\Model;

class Fakerx extends Model
{

    public function xnama()
    {
        $nama = 'fakerx/dbnama.csv';
        $file = new \CodeIgniter\Files\File($nama);
        $nan = $file->openFile('r');
        $nan = explode(",", $nan);
        return $nan[mt_rand(0, count($nan) - 1)];
    }

    public function xemail()
    {
        $imel = 'fakerx/dbimel.csv';
        $file = new \CodeIgniter\Files\File($imel);
        $nan = $file->openFile('r');
        $nan = explode(",", $nan);
        return $nan[mt_rand(0, count($nan) - 1)];
    }

    public function xlima()
    {
        $limadig = 'fakerx/dblimadig.csv';
        $file = new \CodeIgniter\Files\File($limadig);
        $limong = $file->openFile('r');
        $limong = explode(",", $limong);
        return $limong[mt_rand(0, count($limong) - 1)];
    }


    // ------------------------
}
