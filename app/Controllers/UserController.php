<?php namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use App\Controllers\Home;

class UserController extends ResourceController {

    protected $modelName = 'App\Models\UsuarioModel';
    protected $format = 'json';

    // public function __construct()
    // {
    //     $this->session = \Config\Services::session();
    // }

    public function show($email = null, $pass = null){
        $generic = new Home();
        if($email == null || $pass == null){
            return $this->respond($generic->genericMessage(null,"No existe el email o password", 400));
        }else{
            if($this->model->get($email, $pass) == null){
                return $this->respond($generic->genericMessage(false,"No existe un usuario con esos datos", 200));
            }else{
                $session = session();
                $token = [
                    'email'=>$email,
                    'password'=>$pass,
                    'loggin'=>TRUE
                ];
                $session->set($token);
                $this->response->setHeader('Access-Control-Allow-Origin', '*')
            ->setHeader('Access-Control-Allow-Headers', '*')
            ->setHeader('Access-Control-Allow-Methods', 'GET');
                return $this->respond($generic->genericMessage(true,"", 200));
            }
        }
    }
    public function create(){
        $generic = new Home();
        $this->response->setHeader('Access-Control-Allow-Origin', '*')
            ->setHeader('Access-Control-Allow-Headers', '*')
            ->setHeader('Access-Control-Allow-Methods', 'POST');
        if($this->validate('signin')){
            if(!$this->request->getPost('card') || !$this->request->getPost('exp_date') || !$this->request->getPost('cvv')){
                return $this->respond($generic->genericMessage(null,"Existe algun dato de la tarjeta que no existe",400));
            }
            $id = $this->model->post($this->request->getPost('firstname'), $this->request->getPost('lastname'),
            $this->request->getPost('email'), $this->request->getPost('phone'), $this->request->getPost('password'),
            $this->request->getPost('address1'), $this->request->getPost('address2'), 
            $this->request->getPost('district'), $this->request->getPost('postcode'), $this->request->getPost('contry'),
            $this->request->getPost('city'), $this->request->getPost('card'), $this->request->getPost('exp_date'),
            $this->request->getPost('cvv'));
            return $this->respond($generic->genericMessage($id,"",200));
        }else{
            $validation = \Config\Services::validation();
            return $this->respond($generic->genericMessage(null,$validation->getErrors(),500));
        }

    }
}