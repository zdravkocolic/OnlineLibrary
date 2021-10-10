<?php namespace App\Models;
 
use CodeIgniter\Model;
 
class BookModel extends Model{
    
    protected $table = 'books';
    protected $allowedFields = ['id','book_image','book_name','book_publisher','book_price','book_details'];
}