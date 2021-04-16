<?php $session = session(); ?>
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Anterior</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Siguiente</span>
  </a>
</div>
<p><?=$session->email?></p>
<div class="w-100 h-9 m-0 row bk-blue">
  <div class="col-md-2 p-1"></div>
  <div class="col-md-2 p-1"></div>
  <div class="col-md-2 p-1"></div>
  <div class="col-md-2 p-1"></div>
  <div class="col-md-4 p-1">
    <div class="d-flex align-items-center">
      <img class="img-fluid" src="https://www.gmm-tv.com/public/img/text_20201007.png">
      <a href="https://apps.apple.com/th/app/gmmtv/id395892666#?platform=iphone" target="_blank"><img class="img-fluid" src="https://www.gmm-tv.com/public/img/applestore_20201007.png"></a>
      <a href="https://play.google.com/store/apps/details?id=com.gmmtv.gmmtv" target="_blank"><img class="img-fluid" src="https://www.gmm-tv.com/public/img/googleplay_20201007.png"></a>
      <a href="https://appgallery.huawei.com/#/app/C103371077" target="_blank"><img class="img-fluid" src="https://www.gmm-tv.com/public/img/huawei.png"></a>
    </div>
  </div>
</div>
<div class="w-100 row bk-white">
  <div class="col-md-4 text-center">
    <a>
      <h4 class="py-2">Series</h4>
      <div id="carouselSeries" style="width:300px; display:inline-block;" class="carousel slide pb-2" data-ride="carousel">
        <div class="carousel-inner">
        </div>
        <a class="carousel-control-prev" href="#carouselSeries" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Anterior</span>
        </a>
        <a class="carousel-control-next" href="#carouselSeries" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Siguiente</span>
        </a>
      </div>
    </a>
  </div>
  <div class="col-md-4 text-center">
    <a>
      <h4 class="py-2">Variety</h4>
      <div id="carouselVariety" style="width:300px; display:inline-block;" class="carousel slide pb-2" data-ride="carousel">
        <div class="carousel-inner">
        </div>
        <a class="carousel-control-prev" href="#carouselVariety" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Anterior</span>
        </a>
        <a class="carousel-control-next" href="#carouselVariety" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Siguiente</span>
        </a>
      </div>
    </a>
  </div>
  <div class="col-md-4 text-center">
    <a>
      <h4 class="py-2">Records</h4>
      <div id="carouselRecords" style="width:300px; display:inline-block;" class="carousel slide pb-2" data-ride="carousel">
        <div class="carousel-inner">
        </div>
        <a class="carousel-control-prev" href="#carouselRecords" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Anterior</span>
        </a>
        <a class="carousel-control-next" href="#carouselRecords" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Siguiente</span>
        </a>
      </div>
    </a>
  </div>
</div>
<script src="js/begin.js"></script>