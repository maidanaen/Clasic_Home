<?php 
namespace App\Controllers;
use App\Models\usuario_model; //convocamos a la tabla 
use CodeIgniter\Controller;

class usuario_controller extends BaseController{

    public function __construct(){
        helper(['form','url']);
    }
    public function create(){
        $dato['titulo']= 'registro';
        echo view('proyec_frontend/head_view',$dato);
        echo view('proyec_frontend/navbar_view');
        echo view('proyec_backend/usuario/registro');
        echo view('proyec_frontend/footer_view');
        
    }
    public function formValidation(){
        $input = $this-> validate([
            'nombre'   => 'required|min_length[3]',
            'apellido' => 'required|min_length[3]|max_length[25]',
            'email'   => 'required|min_length[4]|max_length[100]|valid_email|is_unique[usuarios.email]',
            'contraseña' => 'required|min_length[3]|max_length[20]'
        ],
    );
    $formModel = new usuario_model();
    if(!$input){
        $data['titulo']= 'registro';
        echo view('proyec_frontend/head_view',$data);
        echo view('proyec_frontend/navbar_view');
        echo view('proyec_backend/usuario/registro', ['validation' => $this->validator]);
        echo view('proyec_frontend/footer_view');
        
    } else {
        $formModel->save([
            'nombre'=> $this->request-> getVar ('nombre'),
            'apellido'=> $this->request->getVar('apellido'),
            'email'=> $this->request->getVar('email'),
            'contraseña'=>password_hash($this->request->getVar('contraseña'), PASSWORD_DEFAULT)
            //passwor has  crea un nuevo has de contraseña de manera encriptada
        ]);
        //el flashdata nos sirve para mostrar mensajes en base a que se hizo, si se tuvo exito o hubo un error
        session()->setFlashdata('success','Usuario registrado con exito');
        // Agregué nombre del proyecto
        return $this->response->redirect('/primer_proyecto/login');
    }
}
}