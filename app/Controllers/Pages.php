<?php

namespace App\Controllers;

class Pages extends BaseController
{
	public function index()
	{
        //$session = session();
		echo 'Ovo sad radi!';  
	}
    function showme ($page = 'preulaz'){
            
        if( !is_file(APPPATH.'/Views/pages/'.$page.'.php'))
        {
            throw new \CodeIgniter\Exceptions\PageNotFoundException($page);
        }
        $session = session();
           // echo view('templates/header');
            echo view('pages/'.$page);
            //echo view('templates/footer');
    }

    function about ($page = 'about'){
            
        if( !is_file(APPPATH.'/Views/pages/'.$page.'.php'))
        {
            throw new \CodeIgniter\Exceptions\PageNotFoundException($page);
        }
        $session = session();
            //echo view('templates/header');
            echo view('pages/'.$page);
           // echo view('templates/footer');
    }

    function contact ($page = 'contact'){
            
        if( !is_file(APPPATH.'/Views/pages/'.$page.'.php'))
        {
            throw new \CodeIgniter\Exceptions\PageNotFoundException($page);
        }
        $session = session();
            //echo view('templates/header');
            echo view('pages/'.$page);
           // echo view('templates/footer');
    }
}
