<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class AdminRegister extends BaseController
{
    public function index()
    {
        //
    }
    public function adreg($id)
    {
        echo 'hello';
    }

    public function eryel(){
        return view('admins');
    }
}
