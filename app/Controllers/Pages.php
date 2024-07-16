<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {

        $data =[
            'title' => 'Home'  
        ];
        return view('pages/Home',$data);
    }

    public function about() 
    {
        $data =[
            'title' => 'About'  
        ];
        return view('Pages/about',$data);
    }

    public function contact() 
    {
        $data =[
            'title' => 'Contact',
            'alamat' => [
                [
                    'tipe' => 'Rumah',
                    'alamat' => 'Jl. Raya Cibinong 1',
                    'kota' => 'Cibinong'
                ],
                [
                    'tipe' => 'Kantor',
                    'alamat' => 'Jl. Raya Cibinong 2',
                    'kota' => 'Cibinong'
                ]
            ]  
        ];
        return view('Pages/contact',$data);
    }

}