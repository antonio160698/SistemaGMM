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

    public $default_message = '<html><body><header>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://localhost/SistemaGMM/public/css/styles.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&amp;display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" integrity="sha384-vSIIfh2YWi9wW0r9iZe7RJPrKwp6bG+s9QZMoITbCckVJqGCCRhc+ccxNcdpHuYu" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&amp;display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/all.css">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
    <link rel="icon" href="assets/css/img/GMMTV_Logo.ico">
        <script type="text/javascript">
        var BASE_URL = "http://localhost/SistemaGMM/public";
    </script>
    <nav class="navbar navbar-expand-md">

        <div> <a href="http://localhost/SistemaGMM/public"><img src="https://upload.wikimedia.org/wikipedia/commons/3/39/GMMTV_Logo.svg" id="logo"></a></div>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav">
                <a href="http://localhost/SistemaGMM/public" class="nav-item nav-link">Content</a>
                <a href="http://localhost/SistemaGMM/public/article" class="nav-item nav-link">Shop</a>
                <a href="http://localhost/SistemaGMM/public/artist" class="nav-item nav-link">Artist</a>
            </div>

    </div></nav>
</header>

<h1>Bienvenido a GMMTV</h1>
<h3>Disfruta el contenido y las diferentes cosas que tus amigos de GMMTV te podemos ofrecer</h3>
<footer class="bg-primary text-white text-center text-lg-start">
    <!-- Grid container -->
    <div class="container py-4 px-0">
        <!--Grid row-->
        <div class="row">
            <div class="col-12 col-md-9" style="white-space: nowrap;"><label> @2020 GMMTV CO., LTD. - ALL RIGHTS RESERVED.</label>
                <a href="https://www.gmm-tv.com/upload/gmmtv-privacy-notice.pdf" target="_blank">PRIVACY NOTE</a>
                <a href="http://localhost/SistemaGMM/public/privacy-policy">| PRIVACY POLICY</a> <a href="http://localhost/SistemaGMM/public/terms">| TERMS OF SERVICES</a>
            </div>
            <div class="col-4 col-md-3" style="white-space: nowrap;"><label>© GMMTV SHOP. 2020. All Rights Reserved</label></div><br>

            <div class="col-md-4">
                <label>CONTACT INFO</label><br>
                <label>ADDRESS:</label><br>
                <label> GMMTV CO., LTD. (30FL.) 50 GMM Grammy Place, Sukhumvit 21 Rd. (Asoke) Khlongtoeinuea, Wattana, Bangkok 10110 </label><br>
                <label> CUSTOMER SERVICE </label>
                <label> Customer Service Form PHONE : +662 669 8999 </label><br><br>
            </div>

            <div class="col-md-4">
                <label> PAYMENT METHODS </label>
                <label> CREDIT CARD, DEBIT CARD </label>
                <label> INTERNET BANKING </label>
                <label> WORKING DAYS/HOURS </label>

                <label> Walk-in Purchase at GMMTV Office,
                    30th Floor, GMM GRAMMY Building.
                    Monday-Friday 9:00 a.m. – 6:00 p.m.
                    (Closed on Saturday, Sunday and Public holidays) </label><br><br><br>
            </div>

            <div class="col-md-4">
                <span style="display:inline-flex;">
                    <div class="col-sm-12 col-md-2"><a href="https://www.facebook.com/gmmtvofficial/" target="_blank"><i class="fab fa-facebook" id="iconmedium"></i></a></div>
                    <div class="col-sm-12 col-md-2"><a href="https://twitter.com/GMMTV" target="_blank"><i class="fab fa-twitter" id="iconmedium"></i></a></div>
                    <div class="col-sm-12 col-md-2"><a href="https://www.youtube.com/channel/UC8BzJM6_VbZTdiNLD4R1jxQ" target="_blank"><i class="fab fa-youtube" id="iconmedium"></i></a></div>
                    <div class="col-sm-12 col-md-2"><a href="https://www.instagram.com/GMMTV/" target="_blank"><i class="fab fa-instagram" id="iconmedium"></i></a></div>
                    <div class="col-sm-12 col-md-2"><a href="https://apps.apple.com/th/app/gmmtv/id395892666#?platform=iphone" target="_blank"><i class="fab fa-apple" id="iconmedium"></i></a></div>
                    <div class="col-sm-12 col-md-2"><a href="https://play.google.com/store/apps/details?id=com.gmmtv.gmmtv" target="_blank"><i class="fab fa-google-play" id="iconmedium"></i></a></div>
                </span><br>

                <span style="display:inline-flex;">
                    <i class="fab fa-cc-mastercard" id="icons"></i>
                    <i class="fab fa-cc-visa" id="icons"></i>
                    <i class="fab fa-cc-jcb" id="icons"></i>
                </span>

            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/js/splide.min.js"></script>
    <script src="http://localhost/SistemaGMM/public/js/home.js"></script>

</footer>

</body></html>';

}