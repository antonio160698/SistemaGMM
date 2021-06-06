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
        $usuario = $_SESSION['usuario'];
        $id = $this->insert([
            'IdUsuario' => $usuario,
            'IdArticle' => $IdArticle
        ]);
        return $id;
    }

    public function detail(){
        $session = \Config\Services::session();
        try{
            $usuario = $session->get('usuario');
            $queryArtist = "SELECT art.* FROM Wishlist Wl join article art on art.IdArticulo = Wl.IdArticle where Wl.IdUsuario =".$usuario.";";
            $buscar1 = $this->query($queryArtist)->getResult('array');
            $execute = $buscar1;
        }catch(Exception $e){
            $execute = $e;
        }
        return $execute;
    }

}