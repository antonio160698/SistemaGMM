<?php namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use App\Controllers\Home;

class ArticleController extends ResourceController {

    protected $modelName = 'App\Models\ArticleModel';
    protected $format = 'json';

    public function index(){
        $generic = new Home();
        return $this->respond($generic->genericMessage($this->model->todo(),"",200));
    }
}