<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use App\Controllers\Home;
use Exception;

class UserController extends ResourceController
{

    protected $modelName = 'App\Models\WishlistModel';
    protected $format = 'json';

    // public function __construct()
    // {
    //     $this->session = \Config\Services::session();
    // }

    public function index()
    {
        $generic = new Home();
        $session = \Config\Services::session();
        if (isset($_SESSION['email'])) {
            return $this->respond($generic->genericMessage($this->model->detail($_SESSION['id']),"", 200));
        }else{
            return $this->respond($generic->genericMessage(null, "No ha iniciado sesion", 400));
        }

    }
    public function create()
    {
        $generic = new Home();
        $session = \Config\Services::session();
        $this->response->setHeader('Access-Control-Allow-Origin', '*')
            ->setHeader('Access-Control-Allow-Headers', '*')
            ->setHeader('Access-Control-Allow-Methods', 'POST');
        //if($this->validate('signin')){
        if (!$this->request->getPost('articulo')) {
            return $this->respond($generic->genericMessage(null, "No existe el articulo", 400));
        }
        $id = $this->model->post(
            $this->request->getPost('articulo'),
            $_SESSION['id']
        );
        return $this->respond($generic->genericMessage($id, "", 200));
    }
}