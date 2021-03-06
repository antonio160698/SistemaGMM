<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<div id="ListArtist" class="row mx-0"></div>
<div id="modalArtist" class="modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body p-0">
                <div id="imagen_perfil" style=" position:relative; height: 400px;background-image: url(https://www.gmm-tv.com/cms/upload_file/vj_floating/pic/adda67ee0faafc8a4a9e6f88de9a0e3f.jpg);background-size: cover;">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>    
                <div style="position:absolute; width:100%; bottom:0;color:white;background: rgb(0,0,0);background: linear-gradient(180deg, rgba(0,0,0,0.5) 0%, rgba(0,0,0,0.75) 50%, rgba(0,0,0) 100%);">
                        <div class="p-1" style="float:left;">
                            <p class="m-0" id="nick"></p>
                        </div>
                        <div class="p-1" style="float:right">
                            <p class="m-0">Followers:</p>
                            <p class="m-0" id="instagram"></p>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <p id="Name"></p>
                    <div class="row">
                        <p class="col-4" id="years">Years: </p>
                        <p class="col-4" id="height">Height: </p>
                        <p class="col-4" id="weight">Weight: </p>
                    </div>
                    <p id="skills">Skills: </p>
                    <p id="email">Email: </p>
                    <div class="row">
                        <div class="col-md-3 p-1" style="text-align: center;font-size: xx-large;"><a href="https://www.facebook.com/gmmtvofficial/" target="_blank"><i class="fab fa-tiktok" id="iconmedium"></i></a></div>
                        <div class="col-md-3 p-1" style="text-align: center;font-size: xx-large;"><a href="https://www.instagram.com/GMMTV/" target="_blank"><i class="fab fa-instagram" id="iconmedium"></i></a></div>
                        <div class="col-md-3 p-1" style="text-align: center;font-size: xx-large;"><a href="https://www.youtube.com/channel/UC8BzJM6_VbZTdiNLD4R1jxQ" target="_blank"><i class="fab fa-youtube" id="iconmedium"></i></a></div>
                        <div class="col-md-3 p-1" style="text-align: center;font-size: xx-large;"><a href="https://twitter.com/GMMTV" target="_blank"><i class="fab fa-twitter" id="iconmedium"></i></a></div>
                    </div>
                    <div class="row">
                        <div class="col-4 tiktok">
                            <canvas id="histTikTok" height="400"></canvas>
                        </div>
                        <div class="col-4 twitter">
                            <canvas id="histTwitter"  height="400"></canvas>
                        </div>
                        <div class="col-4 insta">
                            <canvas id="histInsta"  height="400"></canvas>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4 tiktok">
                            <canvas id="pieTikTok" ></canvas>
                        </div>
                        <div class="col-4 twitter">
                            <canvas id="pieTwitter"  ></canvas>
                        </div>
                        <div class="col-4 insta">
                            <canvas id="pieInsta" ></canvas>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6" style="text-align: center;"><p class="p-3" style="border-radius: 25%; " id="total"></p><p>Total</p></div>
                        <div class="col-6" style="text-align: center;"><p class="p-3" style="border-radius: 25%;">29%</p><p>Engadment</p></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="js/artist.js"></script>