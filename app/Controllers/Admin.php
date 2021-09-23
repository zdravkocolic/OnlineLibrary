<?php namespace App\Controllers;
 
use CodeIgniter\Controller;
use App\Models\UserModel;
 
class Admin extends Controller
{
    public function index()
    {

        $model = new UserModel();
        $data['user_data'] = $model->findAll();
        return view('admin', $data);

    }

    public function edit($id=null)
    {
        $model = new UserModel();
        $user = $model->find('user_id', $id);
        $data = [
            'isAdmin' => '1'
        ];

        $query = $model->where([
            "user_id" => $id
        ])-> set($data) -> update();
 
        return redirect()->to('/admin'); 

    }

    public function delete($id){
        $model = new UserModel();
       
        $query = $model->where([
            "user_id" => $id
        ])-> set($data) -> delete();

        return redirect()->to('/admin'); 
    }
}