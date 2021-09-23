<?php namespace App\Controllers;
 
use CodeIgniter\Controller;
use App\Models\BookModel;
class Biblioteka extends Controller
{
    public function index()
    {
        $session = session(); //započinje se sesija u pozadini, u koju smeštamo podatke po želji (ime korisnika, username, id...)
        $model = new BookModel(); 
        $data['book_data'] = $model->findAll();
        return view('biblioteka', $data);
       
    }
}