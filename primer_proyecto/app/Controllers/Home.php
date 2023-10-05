<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data['titulo']='pagina principal';
        echo view('proyec_frontend/head_view',$data);
        echo view('proyec_frontend/navbar_view');
        echo view('proyec_frontend/inicio');
        echo view('proyec_frontend/footer_view');
        
    }
    public function quienes_somos()
    {
        $data['titulo']='quienes somos';
        echo view('proyec_frontend/head_view',$data);
        echo view('proyec_frontend/navbar_view');
        echo view('proyec_frontend/quienes_somos');
        echo view('proyec_frontend/footer_view');
        
    }
    public function catalogo()
    {
        $data['titulo']='catalogo';
        echo view('proyec_frontend/head_view',$data);
        echo view('proyec_frontend/navbar_view');
        echo view('proyec_frontend/catalogo');
        echo view('proyec_frontend/footer_view');
        
    }
    public function login()
    {
        $data['titulo']='inicio de sesion';
        echo view('proyec_frontend/head_view',$data);
        echo view('proyec_frontend/navbar_view');
        echo view('proyec_backend/usuario/login');
        echo view('proyec_frontend/footer_view');
        
    }
    public function registro()
    {
        $data['titulo']='registro';
        echo view('proyec_frontend/head_view',$data);
        echo view('proyec_frontend/navbar_view');
        echo view('proyec_backend/usuario/registro');
        echo view('proyec_frontend/footer_view');
        
    }
    
}
