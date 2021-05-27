<?php namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use App\Controllers\Home;

class ArtistController extends ResourceController {

    protected $modelName = 'App\Models\ArtistModel';
    protected $format = 'json';

    public function index(){
        $generic = new Home();
        return $this->respond($generic->genericMessage($this->model->artists(),"",200));
    }
    public function skill(){
        $generic = new Home();
        return $this->respond($generic->genericMessage($this->model->skill(),"",200));
    }
    public function show($id = null){
        $generic = new Home();
        $resp = $this->model->detail($id); 
        if($resp == null){
            return $this->respond($generic->genericMessage(null, "No se encontro un id que corresponda", 500));
        }else{
            return $this->respond($generic->genericMessage($resp, "", 200));
        }
    }
}