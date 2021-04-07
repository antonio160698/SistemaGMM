<?php namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use App\Controllers\Home;

class BeginController extends ResourceController {

    protected $modelName = 'App\Models\BeginModel';
    protected $format = 'json';

    public function index(){
        $generic = new Home();
        return $this->respond($generic->genericMessage($this->model->todo(),"",200));
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

    public function series(){
        $generic = new Home();
        return $this->respond($generic->genericMessage($this->model->series(),"",200));
    }

    public function record(){
        $generic = new Home();
        return $this->respond($generic->genericMessage($this->model->record(),"",200));
    }

    public function webshows(){
        $generic = new Home();
        return $this->respond($generic->genericMessage($this->model->webshow(),"",200));
    }
    public function search($v_search){
        $generic = new Home();
        return $this->respond($generic->genericMessage($this->model->search($v_search),"",200));
    }
}