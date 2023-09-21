<?php

namespace App\Controllers;

//use App\Models\AdminDB;
use App\Controllers\BaseController;

class AdminRegister extends BaseController
{
    private $admin;
    public function __construct(){
        $this->admin = new \App\Models\AdminDB();
    }

    public function delete($id){
        $this->admin->delete($id);
        return redirect()->to('/adreg');
    }

    public function edit($id)
    {
        $data = [
            'admin' => $this->admin->findAll(),
            'ad' => $this->admin->where('id', $id)->first(),
        ];
        return view('admins', $data);
    }
    
    

    public function save(){
        $id = $_POST['id'];
        $data = [
            'lastname' => $this->request->getVar('lastname'),
            'firstname' => $this->request->getVar('firstname'),
            'middlename' => $this->request->getVar('middlename'),
            'age' => $this->request->getVar('age'),
            'dateofbirth' => $this->request->getVar('dateofbirth'),
        ];
        if($id != null){
            $this->admin->set($data)->where('id', $id)->update();
        }else{
            $this->admin->save($data);
        }  
        return redirect()->to('/adreg');
    }

    public function adreg($admin)
    {
        echo $admin;
    
    }

    public function eryel()
    {
        $data['admin'] = $this->admin->findAll();
        return view('admins', $data);
    }
    
    public function index()
    {
        //
    }
}
