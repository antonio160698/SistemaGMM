<?php namespace App\Models;

use CodeIgniter\Model;

class ArtistModel extends Model
{
    protected $table = 'artist';
    protected $primaryKey = 'IdArtist';
    protected $allowedFields = ['Tiktok', 'Twitter', 'Instagram', 'Email', 'Skills', 'Width', 'Height', 'Years_old', 'Real_name', 'Nickname', 'Image'];

    public function todo(){
        return $this->findAll();
    }

    public function artists(){
        return $this->select('IdArtist, Image, Nickname')->orderby('Instagram','DESC')->findAll();
    }

    public function skill(){
        return $this->select('Skills')->distinct()->findAll();
    }

    public function detail($id){
        return $this->find($id);
    }

}