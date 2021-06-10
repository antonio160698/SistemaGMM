<!DOCTYPE html>
<!-- <html lang="th"> -->
<header>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('css/styles.css') ?>">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" integrity="sha384-vSIIfh2YWi9wW0r9iZe7RJPrKwp6bG+s9QZMoITbCckVJqGCCRhc+ccxNcdpHuYu" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/all.css">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
    <link rel="icon" href="assets/css/img/GMMTV_Logo.ico">
    <?php $session = session(); ?>
    <script type="text/javascript">
        var BASE_URL = "<?php echo base_url(); ?>";
    </script>

    <title>GMMTV</title>
    <nav class="navbar navbar-expand-md">

        <div> <a href="<?php echo base_url(); ?>"><img src="https://upload.wikimedia.org/wikipedia/commons/3/39/GMMTV_Logo.svg" id="logo"></a></div>
        <button type="button" class="navbar-toggler pr-2" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav">
                <div class="nav-item dropdown" id="drop">
                    <a href="<?php echo base_url(); ?>" class="nav-link dropdown-toggle" data-toggle="dropdown">Content</a>
                    <div class="dropdown-menu">
                        <br>
                        <a href="<?php echo base_url("search/Series"); ?>" class="dropdown-item">Series</a>
                        <hr>
                        <a href="<?php echo base_url("search/Records"); ?>" class="dropdown-item">Records</a>
                        <hr>
                        <a href="<?php echo base_url("search/Webshow"); ?>" class="dropdown-item">Variety</a>
                        <br>
                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a href="<?php echo base_url("article"); ?>" class="nav-link dropdown-toggle" data-toggle="dropdown">Shop</a>
                    <div class="dropdown-menu">
                        <br>
                        <a href="#" class="dropdown-item">All</a>
                        <a href="#" class="dropdown-item">News</a>
                        <a href="#" class="dropdown-item">Promotions</a>
                        <hr>
                        <a href="<?php echo base_url("search/Merchandasing"); ?>" class="dropdown-item">Merchandasing</a>
                        <hr>
                        <a href="<?php echo base_url("search/Skincare"); ?>" class="dropdown-item">Skincare</a>
                        <hr>
                        <a href="<?php echo base_url("search/Makeup"); ?>" class="dropdown-item">Makeup</a>
                        <br>
                    </div>
                </div>
                <a href="<?php echo base_url("artist"); ?>" class="nav-item nav-link">Artist</a>

                <form class="form-inline" style="width:60%;background-color:transparent;right:20px;position:absolute;">

                    <input id="input-search" style="width:88%;" type="text" class="form-control mr-sm-2" placeholder="Search">
                    <button id="btn-search"><span class="material-icons">search</span></button>
                    <div class="dropdown admin">
                        <button id="dLabel" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="material-icons"><i class="fas fa-shopping-bag"></i></span></button>
                        <div class="dropdown-menu" aria-labelledby="dLabel">
                            <div class="row" style="width:300px;">
                                
                            </div>
                            <div class="dropdown-divider"></div>
                            <div class="flex-row">
                                <a class="float-left nav-link" href="<?php echo base_url("wishlist"); ?>">Wishlist</a>
                                <a class="float-right nav-link" href="#" id="logout">Log out</a>
                            </div>
                        </div>
                    </div>
                    <button id="count-logout" type="button" data-toggle="modal" data-target=".bd-example-modal-lg"><span class="material-icons">account_circle</span></button>

                </form>
    </nav>
</header>