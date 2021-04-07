<?php namespace App\Models;

use CodeIgniter\Model;

class DireccionModel extends Model
{
    protected $table = 'direccion';
    protected $primaryLey = 'IdDireccion';
    protected $allowedFields = ['Address1', 'Address2', 'District', 'Postcode', 'Contry', 'City'];

    public function post($address1, $address2, $district, $postcode, $contry, $city){
        $id = $this->insert([
            'Address1' => $address1,
            'Address2' => $address2,
            'District' => $district,
            'Postcode' => $postcode,
            'Contry' => $contry,
            'City' => $city
        ]);
        return $id;
    }
}