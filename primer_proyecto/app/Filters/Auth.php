<?php
namespace App\Filters;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\ResponseInterface;

class Auth implements FilterInterface{
    public function before(RequestInterface $request, $arguments = null)
    {
        //si el usuario no esta logeado
        if(!session()->get ('logged_in')){
            //entonces redirecciona a la pagina de login
            return redirect()->to('/login');
        }
    }
    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        
    }
}