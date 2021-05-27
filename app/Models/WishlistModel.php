<?php namespace App\Models;

use CodeIgniter\Model;
use Exception;

class WishlistModel extends Model
{
    protected $table = 'wishlist';
    protected $primaryKey = 'IdWishlist';
    protected $allowedFields = ['IdUsuario', 'IdArticle'];

    public function todo(){
        return $this->findAll();
    }

    public function post($IdArticle){
        $session = \Config\Services::session();
        $id = $this->insert([
            'IdUsuario' => $session->get('id'),
            'IdArticle' => $IdArticle
        ]);
        return $id;
    }

    public function detail(){
        $session = \Config\Services::session();
        $db = db_connect();
        try{
            $queryArtist = "SELECT art.* FROM Whishlist Wl join article art on art.IdArticulo = Wl.IdArticle where Wl.IdUsuario ="+$session->get('id')+";";
            $buscar1 = $db->query($queryArtist)->getResult();
            $execute = $buscar1;
        }catch(Exception $e){
            echo($e);
            $execute = $e;
        }
        return $execute;
    }

}