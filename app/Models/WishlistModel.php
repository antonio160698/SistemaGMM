<?php namespace App\Models;

use CodeIgniter\Model;
use Exception;

class ArtistModel extends Model
{
    protected $table = 'wishlist';
    protected $primaryKey = 'IdWishlist';
    protected $allowedFields = ['IdUsuario', 'IdArticle'];

    public function todo(){
        return $this->findAll();
    }

    public function post($Cantidad, $IdArticle){
        $id = $this->insert([
            'IdUsuario' => $IdArticle,
            'IdArticle' => $Cantidad
        ]);
        return $id;
    }

    public function detail($id){
        $db = db_connect();
        try{
            $queryArtist = "SELECT art.* FROM Whishlist Wl join article art on art.IdArticulo = Wl.IdArticle where Wl.IdUsuario ="+$id+";";
            $buscar1 = $db->query($queryArtist)->getResult();
            $execute = $buscar1;
        }catch(Exception $e){
            echo($e);
            $execute = $e;
        }
        return $execute;
    }

}