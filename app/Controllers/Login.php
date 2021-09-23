<?php namespace App\Controllers;
 
use CodeIgniter\Controller;
use App\Models\UserModel;
 
class Login extends Controller
{
    public function index()
    {
        helper(['form']);
        echo view('login'); 
    } 
 
    public function auth()
    {
        $session = session();  
        $model = new UserModel(); 
        $email = $this->request->getVar('email');  
        $password = $this->request->getVar('password');  
        $data = $model->where('email', $email)->first();  
        if($data){  
            $pass = $data['password']; 
            var_dump(password_verify($password, $pass), $password, $pass, password_hash($password, PASSWORD_DEFAULT)); 
            $verify_pass = password_verify($password, $pass); 
            if($verify_pass){   
                $ses_data = [
                    'user_id'  => $data['user_id'],
                    'name'     => $data['first_name'],
                    'last_name'     => $data['last_name'],
                    'email'    => $data['email'],
                    'logged_in'     => TRUE,
                    'isAdmin' => $data['isAdmin']
                ];
                $session->set($ses_data);
                return redirect()->to('/biblioteka');
            }else{     
                $session->setFlashdata('msg', 'Pogresna lozinka');
                return redirect()->to('/login');
            }
        }else{ 
            $session->setFlashdata('msg', 'Email adresa ne postoji u bazi');
            return redirect()->to('/login');
        }
    }
 
    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/login');
    }
} 