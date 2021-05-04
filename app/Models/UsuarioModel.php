<?php namespace App\Models;

use CodeIgniter\Model;
use App\Models\DireccionModel;

class UsuarioModel extends Model
{
    protected $table = 'usuario';
    protected $primaryLey = 'IdUsuario';
    protected $allowedFields = ['Email', 'Firstname', 'Lastname', 'IdDireccion', 'Password', 'Phone', 'Card', 'ExpDate', 'CVV'];

    public function get($email = null, $pass = null){
        if($email === null || $pass === null){
            return null;
        }else{
            return $this->query("SELECT * FROM usuario WHERE Email = '" . $email . "' AND Password = '" . $pass . "';");
        }
    }
    public function post($firstname, $lastname, $email, $phone, $password, $addres1, $address2, 
    $district, $postcode, $contry, $city, $card, $exp_date, $cvv){
        $direccion = new DireccionModel();
        $id_direccion = $direccion->post($addres1,$address2,$district,$postcode,$contry,$city);
        $id = $this->insert([
            'Firstname' => $firstname,
            'Lastname' => $lastname,
            'Email' => $email,
            'IdDireccion' => $id_direccion,
            'Password' => $password,
            'Phone' => $phone,
            'Card' => $card,
            'ExpDate' => $exp_date,
            'CVV' => $cvv
        ]);
        return $id;
    }

}