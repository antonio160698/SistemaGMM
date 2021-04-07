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
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&display=swap" rel="stylesheet">
<link rel="stylesheet" href="assets/css/all.css">
<link rel="stylesheet" href="assets/css/fontawesome.min.css">
<link rel="icon" href="assets/css/img/GMMTV_Logo.ico">
<script type="text/javascript">
    var BASE_URL = "<?php echo base_url();?>";
</script>

<title>GMMTV</title>
    <nav class="navbar navbar-expand-md">

        <div> <a href="/gmmtvwebsite"><img src="https://upload.wikimedia.org/wikipedia/commons/3/39/GMMTV_Logo.svg" id="logo"></a></div>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav">
            <div class="nav-item dropdown" id="drop">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Content</a>
                <div class="dropdown-menu">
                    <br>
                    <a href="#" class="dropdown-item">Series</a>
                    <hr>
                    <a href="#" class="dropdown-item">Records</a>
                    <hr>
                    <a href="#" class="dropdown-item">Variety</a>
                    <br>
                </div>
            </div>
                <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Shop</a>
                <div class="dropdown-menu">
                <br>
                    <a href="#" class="dropdown-item">All</a>
                    <a href="#" class="dropdown-item">News</a>
                    <a href="#" class="dropdown-item">Promotions</a>
                    <hr>
                    <a href="#" class="dropdown-item">Merchandasing</a>
                    <hr>
                    <a href="#" class="dropdown-item">Skincare</a>
                    <hr>
                    <a href="#" class="dropdown-item">Makeup</a>
                    <br>
                </div>
                </div>
                <a href="#" class="nav-item nav-link">Artist</a>
            </div>
            
            <form class="form-inline ml-auto" style="background-color:transparent;">
                
                <input type="text" class="form-control mr-sm-2" placeholder="Search">
                <button ><span class="material-icons">search</span></button>
                <button type="button"data-toggle="modal" data-target=".bd-example-modal-lg"><span class="material-icons"<i class="fas fa-shopping-bag"></i></span></button>
                <button type="button"data-toggle="modal" data-target=".bd-example-modal-lg"><span class="material-icons">account_circle</span></button>
                
            </form>
    </nav>
    </header>