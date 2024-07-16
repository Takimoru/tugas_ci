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

    public function InsertData() 
    {
        $data =[
            'title' => 'Insert Data'  
        ];
        return view('Pages/InsertData',$data);

        dd($this->request->getVar());
    }

    public function UpdateData() 
    {
        return view('Pages/UpdateData',$data);
    }

}