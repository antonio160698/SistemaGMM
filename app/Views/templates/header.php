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
                <a href="<?php echo base_url("artist"); ?>" class="nav-item nav-link">Artist</a>
            </div>

            <form class="form-inline ml-auto" style="background-color:transparent;">

                <input id="input-search" type="text" class="form-control mr-sm-2" placeholder="Search">
                <button id="btn-search"><span class="material-icons">search</span></button>
                <div class="dropdown admin">
                    <button id="dLabel" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="material-icons"><i class="fas fa-shopping-bag"></i></span></button>
                    <div class="dropdown-menu" aria-labelledby="dLabel">
                        <form class="px-4 py-3">
                            <div class="form-group">
                                <label for="exampleDropdownFormEmail1">Email address</label>
                                <input type="email" class="form-control" id="exampleDropdownFormEmail1" placeholder="email@example.com">
                            </div>
                            <div class="form-group">
                                <label for="exampleDropdownFormPassword1">Password</label>
                                <input type="password" class="form-control" id="exampleDropdownFormPassword1" placeholder="Password">
                            </div>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="dropdownCheck">
                                <label class="form-check-label" for="dropdownCheck">
                                    Remember me
                                </label>
                            </div>
                            <button type="submit" class="btn btn-primary">Sign in</button>
                        </form>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">New around here? Sign up</a>
                        <a class="dropdown-item" href="#">Forgot password?</a>
                    </div>
                </div>
                <button id="count-logout" type="button" data-toggle="modal" data-target=".bd-example-modal-lg"><span class="material-icons">account_circle</span></button>

            </form>
    </nav>
</header>