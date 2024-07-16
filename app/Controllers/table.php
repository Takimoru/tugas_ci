<?php

namespace App\Controllers;

class table extends BaseController
{
    public function index()
    {
        {
            $data = [
                'title' => 'Daftar Mahasiswa',
            ];
            return view('table/index', $data);
        }
    }
}