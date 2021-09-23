<?php namespace App\Models;
 
use CodeIgniter\Model;
 
class OrdersModel extends Model{
    protected $table = 'narudzbine';
    protected $allowedFields = ['id_narudzbine','naziv_knjige','email','ime','prezime','adresa','telefon'];
}