<?php namespace App\Controllers;
 
use CodeIgniter\Controller;
 
class DodajKnjige extends Controller
{
    public function index()
    {
        $session = session(); //započinje se sesija u pozadini, u koju smeštamo podatke po želji (ime korisnika, username, id...)

        echo view('dodajKnjige'); //komanda kojom pozivamo prikazivanje view-a, odnosno html stranice iz foldera View
    }
}