<?php

namespace App\Models;

use CodeIgniter\Model;
use Exception;

class BeginModel extends Model
{
    protected $table = 'begin';
    protected $primaryKey = 'BeginId';
    protected $allowedFields = ['Year', 'Genere', 'State', 'Title', 'Descripcion', 'Image'];


    public function todo()
    {
        return $this->select('BeginId, Image, Title')->limit(3)->orderBy('Year', 'DESC')->find();
    }

    public function detail($id)
    {
        return $this->find($id);
    }

    public function series()
    {
        return $this->select('BeginId, Image, Title')->where("Genere = 'Serie'")->limit(3)->orderBy('BeginId', 'RANDOM')->find();
    }

    public function webshow()
    {
        return $this->select('BeginId, Image, Title')->where("Genere = 'Webshow'")->limit(3)->orderBy('BeginId', 'RANDOM')->find();
    }

    public function record()
    {
        return $this->select('BeginId, Image, Title')->where("Genere = 'Record'")->limit(3)->orderBy('BeginId', 'RANDOM')->find();
    }
    public function search($v_search)
    {
        $db = db_connect();
        try {
            if ($v_search == 'Series') {
                $queryBegin = "SELECT b.BeginId Id, 3 Tab, b.Title Title, b.Description Descripcion, b.Image Imagen FROM begin as b WHERE b.Genere like '%Serie%';";
                $buscar1 = $db->query($queryBegin)->getResult();
            } else if ($v_search == 'Webshow') {
                $queryBegin = "SELECT b.BeginId Id, 3 Tab, b.Title Title, b.Description Descripcion, b.Image Imagen FROM begin as b WHERE b.Genere like '%Webshow%';";
                $buscar1 = $db->query($queryBegin)->getResult();
            } else if ($v_search == 'Records') {
                $queryBegin = "SELECT b.BeginId Id, 3 Tab, b.Title Title, b.Description Descripcion, b.Image Imagen FROM begin as b WHERE b.Genere like '%Record%';";
                $buscar1 = $db->query($queryBegin)->getResult();
            } else {
                $queryArtist = "SELECT ar.IdArtist Id, 1 Tab, ar.Real_name Title, ar.Nickname Descripcion, ar.Image Imagen FROM artist as ar join brands br on br.IdBrands = ar.idbrand WHERE ar.Real_name LIKE '%" . $v_search . "%' or ar.Nickname LIKE '%" . $v_search . "%' or br.Category LIKE '%" . $v_search . "%' or ar.skin LIKE '%" . $v_search . "%';";
                $buscar1 = $db->query($queryArtist)->getResult();
                $queryArticle = "SELECT pro.IdArticulo Id, 2 Tab, pro.Category Title, pro.Descripcion Descripcion, pro.Imagen Imagen FROM article as pro WHERE pro.Category LIKE '%" . $v_search . "%' or pro.Descripcion LIKE '%" . $v_search . "%';";
                $buscar1 += $db->query($queryArticle)->getResult();
                $queryBegin = "SELECT b.BeginId Id, 3 Tab, b.Title Title, b.Description Descripcion, b.Image Imagen FROM begin as b WHERE b.Title LIKE '%" . $v_search . "%' or b.Description LIKE '%" . $v_search . "%';";
                $buscar1 += $db->query($queryBegin)->getResult();
            }
            $execute = $buscar1;
        } catch (Exception $e) {
            echo ($e);
            $execute = $e;
        }
        return $execute;
    }
}
