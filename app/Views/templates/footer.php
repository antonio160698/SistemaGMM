<div id="modal-login" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content" id="loginshow">
            <div class="modal-header">
                <p class="modal-title text-center" id="mySmallModalLabel" style="font-size:1.5rem;width:100%;">LOG IN</p>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body container" style="max-width:650px">
                <form>
                    <div class="form-group">
                        <label for="loginEmail">User or email</label>
                        <input type="text" class="form-control" id="loginEmail" placeholder="User">
                    </div>
                    <div class="form-group">
                        <label for="loginPassword">Password</label>
                        <input type="password" class="form-control" id="loginPassword">
                    </div>
                </form>
                <div class="d-flex vertical-center">
                    <button class="btn btn-primary mx-2 px-4 py-0" id="signin-btn">SIGN IN</button>
                    <p>o</p>
                    <button class="btn btn-outline-primary mx-2 px-4 py-0" id="login-btn">LOG IN</button>
                </div>
            </div>
        </div>
        <div class="modal-content" id="register" hidden>
            <div class="modal-header">
                <p class="modal-title text-center" id="mySmallModalLabel" style="font-size:1.5rem;width:100%;">REGISTER</p>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body container" style="max-width:650px">
                <form id="registerstep-1">
                    <div class="form-group">
                        <label for="signinFname">Firstname</label>
                        <input type="text" class="form-control" id="signinFname" placeholder="User">
                    </div>
                    <div class="form-group">
                        <label for="signinLname">Lastname</label>
                        <input type="text" class="form-control" id="signinLname">
                    </div>
                    <div class="form-group">
                        <label for="signinEmail">Email</label>
                        <input type="text" class="form-control" id="signinEmail" placeholder="User">
                    </div>
                    <div class="form-group">
                        <label for="signinPhone">Phone</label>
                        <input type="text" class="form-control" id="signinPhone">
                    </div>
                    <div class="form-group">
                        <label for="signinPass">Password</label>
                        <input type="text" class="form-control" id="signinPass" placeholder="User">
                    </div>
                    <div class="form-group">
                        <label for="signinCPass">Confirm password</label>
                        <input type="text" class="form-control" id="signinCPass">
                    </div>
                </form>
                <form id="registerstep-2">
                    <div class="form-group">
                        <label for="signinAddress1">Address1</label>
                        <input type="text" class="form-control" id="signinAddress1" placeholder="User">
                    </div>
                    <div class="form-group">
                        <label for="signinAddress2">Address2</label>
                        <input type="text" class="form-control" id="signinAddress2">
                    </div>
                    <div class="form-group">
                        <label for="signinDistrict">District</label>
                        <input type="text" class="form-control" id="signinDistrict" placeholder="User">
                    </div>
                    <div class="form-group">
                        <label for="signinPostcode">Postcode</label>
                        <input type="text" class="form-control" id="signinPostcode">
                    </div>
                    <div class="form-group">
                        <label for="signinContry">Contry</label>
                        <input type="text" class="form-control" id="signinContry" placeholder="User">
                    </div>
                    <div class="form-group">
                        <label for="signinCity">Providence/State/City</label>
                        <input type="text" class="form-control" id="signinCity">
                    </div>
                </form>
                <form id="registerstep-3">
                    <div class="form-group">
                        <label for="signinNombreCard">Nombre</label>
                        <input type="text" class="form-control" id="signinNombreCard" placeholder="User">
                    </div>
                    <div class="form-group">
                        <label for="signinExpdate">Expiration date</label>
                        <input type="date" class="form-control" id="signinExpdate">
                    </div>
                    <div class="form-group">
                        <label for="signinCVV">CVV</label>
                        <input type="text" class="form-control" id="signinCVV" placeholder="User">
                    </div>
                <button id="register-btn" class="btn btn-outline-primary py-0 px-2">REGISTER</button>
                </form>
                <nav class="nav nav-pills nav-fill row">
                    <div class="col-4">
                        <a class="nav-link active step-1" href="#">1</a>
                    </div>
                    <div class="col-4">
                        <a class="nav-link step-2" href="#">2</a>
                    </div>
                    <div class="col-4">
                        <a class="nav-link step-3" href="#">3</a>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</div>
<footer class="bg-primary text-white text-center text-lg-start">
    <!-- Grid container -->
    <div class="container p-4">
        <!--Grid row-->
        <div class="row">
            <div class="col-8 col-md-6"><label> @2020 GMMTV CO., LTD. - ALL RIGHTS RESERVED.</label>
                <a href="https://www.gmm-tv.com/upload/gmmtv-privacy-notice.pdf" target="_blank">PRIVACY NOTE</a>
                <a href="privacy_policy.php">| PRIVACY POLICY</a> <a href="terms.php">| TERMS OF SERVICES</a>
            </div>
            <div class="col-4 col-md-6"><label>© GMMTV SHOP. 2020. All Rights Reserved</label></div><br>

            <div class="col-md-4"><br>
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
    <script src="<?= base_url('js/home.js') ?>"></script>

</footer>

</html>