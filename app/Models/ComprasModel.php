<?php namespace App\Models;

use CodeIgniter\Model;
use Exception;

class ComprasModel extends Model
{
    protected $table = 'compra';
    protected $primaryKey = 'IdCompra';
    protected $allowedFields = ['IdArticle', 'Cantidad'];

    public function todo(){
        return $this->findAll();
    }

    public function post($Cantidad, $IdArticle){
        $id = $this->insert([
            'IdArticle' => $IdArticle,
            'Cantidad' => $Cantidad
        ]);
        return $id;
    }

    public function detail(){
        $db = db_connect();
        try{
            $queryArtist = "SELECT art.* FROM compra cpr join article art on art.IdArticulo = cpr.IdArticle";
            $buscar1 = $db->query($queryArtist)->getResult();
            $execute = $buscar1;
        }catch(Exception $e){
            echo($e);
            $execute = $e;
        }
        return $execute;
    }

}