<?php namespace App\Controllers;
 
use CodeIgniter\Controller;
use App\Models\UserModel;
 
class Register extends Controller
{
    public function index()
    {
        //include helper form
        helper(['form']);
        $data = [];
        echo view('register', $data);
    }
 
    public function save()
    {
        //include helper form
        helper(['form']);
        //set rules validation form
        $rules = [ 
            'first_name'    => 'required|min_length[3]|max_length[20]',
            'last_name'    => 'required|min_length[3]|max_length[40]',
            'email'         => 'required|min_length[6]|max_length[60]|valid_email|is_unique[users.email]',
            'password'      => 'required|min_length[6]|max_length[100]',
            'confpassword'  => 'matches[password]'
        ];
         
        if($this->validate($rules)){
            $model = new UserModel();
            date_default_timezone_set('Serbia/Belgrade');
            $now = date('Y-m-d H:i:s');
            $data = [
                'first_name'     => $this->request->getVar('first_name'),
                'last_name'     => $this->request->getVar('last_name'),
                'email'    => $this->request->getVar('email'),
                'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
                'registration_date' => $now
            ];
            $model->save($data); 
            return redirect()->to('/login'); 
        }else{ 
            $data['validation'] = $this->validator;
            echo view('register', $data);
        }
         
    }
 
}