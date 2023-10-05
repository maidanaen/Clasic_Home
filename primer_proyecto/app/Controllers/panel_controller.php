<?php
namespace App\Controllers;
use CodeIgniter\Controller;

class panel_controller extends Controller{
    public function index(){
        $session=session();
        $nombre=$session->get('usuario');
        $perfil=$session->get('id_PerfilUsuario');

        $data['id_PerfilUsuario']=$perfil;

        $dato['titulo']='panel del usuario';
        echo view('proyec_frontend/head_view',$dato);
        echo view('proyec_frontend/navbar_view');
        echo view('proyec_backend/usuario/usuario_logeado',$dato);
        echo view('proyec_frontend/footer_view');
    }
}