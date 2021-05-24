<?php namespace App\Models;

use CodeIgniter\Model;

class ArticleModel extends Model
{
    protected $table = 'article';
    protected $primaryKey = 'IdArticulo';
    protected $allowedFields = ['Category', 'Size', 'Price', 'Descripcion', 'Imagen'];

    public function todo(){
        return $this->findAll();
    }
    public function detail($id){
        return $this->find($id);
    }

}