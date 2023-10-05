<?php 
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\usuario_model;

class login_controller extends BaseController{ 
    public function index(){
        helper(['form','url']);
        $dato ['titulo']='login';
        echo view('proyec_frontend/head_view',$dato);
        echo view('proyec_frontend/navbar_view');
        echo view('proyec_backend/usuario/login');
        echo view('proyec_frontend/footer_view');
    }
    public function auth(){
        $session = session(); //iniciamos la session
        $model= new usuario_model();

        //usamos los datos del formulario
        $email=$this-> request->getVar ('email');
        $contrasaña=$this-> request->getVar ('contraseña');
        //busca encontrar la primera coincidencia para probar que existe
        $data = $model ->where('email', $email)->first();
        if($data){
            $pass=$data ['contraseña'];
            $ba=$data ['baja'];
            if($ba=='SI'){
                $session->setFlashdata('msg','usuario dado de baja');
                return redirect()->to ('/login');
            }
            //se verifica los datos para iniciar session
            $veryf_contraseña = password_verify($contrasaña,$pass);
            
            if($veryf_contraseña){
                //aca tenemos que verificar si se escribe correctamente y coincide los nombre con el de la tabla
                $ses_data= [
                    'id_usuario'=>$data['id_usuario'],
                    'nombre'=>$data['nombre'],
                    'apellido'=>$data['apellido'],
                    'email'=>$data['email'],
                    'contraseña'=>$data['contraseña'],
                    'perfil_id'=>$data['perfil_id'],
                    'logged_in' => TRUE
                ];
                //si se cumple la verificacion inicia la session
                $session->set ($ses_data);
                
                session()->setFlashdata('msg','Bienvenido!');
                return redirect()->to('/panel');
            }else{
                //no paso la validacion de contraseña
                $session->setFlashdata('msg','contraseña incorrecta');
                return redirect()->to('/login');
            }
        }else{
            $session->setFlashdata('msg','no existe el email o es incorrecto');
            return redirect()->to('/login');
        }
    }
    
    public function logout(){
        $session= session();
        $session->destroy();
        return redirect()->to('/');
    }
}