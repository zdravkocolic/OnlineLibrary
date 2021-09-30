<?php namespace App\Controllers;
 
use CodeIgniter\Controller;
use App\Models\UserModel; 
use App\Models\OrdersModel;
class Dashboard extends Controller
{
    public function index()
    {
        $session = session(); //započinje se sesija u pozadini, u koju smeštamo podatke po želji (ime korisnika, username, id...)
        $model = new UserModel();
        $data["user_data"] = $model->where('user_id', $_SESSION['user_id'])->first();

        $model2 = new OrdersModel();
        $data["orders"] = $model2->where('email', $_SESSION["email"])->findAll();

        return view('dashboard', $data); //komanda kojom pozivamo prikazivanje view-a, odnosno html stranice iz foldera View
    }
    public function update($id=null){ 
        $model = new UserModel();
        $user = $model->find('user_id', $id);
        //include helper form
        helper(['form']);    
            $model = new UserModel();
            date_default_timezone_set('Serbia/Belgrade');
            $now = date('Y-m-d H:i:s');
            $data = [
                'first_name'     => $this->request->getVar('first_name'),
                'last_name'     => $this->request->getVar('last_name'),
                'email'    => $this->request->getVar('email'),
                'registration_date' => $now
            ];
           
            $query = $model->where(["user_id" => $id])-> set($data) -> update(); 
            return redirect()->to('/dashboard'); 
        }
        

}