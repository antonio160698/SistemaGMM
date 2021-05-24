<script>window.onload = () => {cuenta();
$.ajax({
		url: BASE_URL+'/api/article/'+window.location.href.split('/')[6],
		type:'GET',
		success:(data)=>{
			if(data.data){
                $("#imagen").append('<img src="'+data.data.Imagen+'">');
                //$(".titulo").text(data.data.Title);
                $("#description").append(data.data.Descripcion);
                $("#size").append(data.data.Size);
                $("#price").append(data.data.Price);
                //$('#detail-description').text(data.data.Description);
            }
		}
	})};</script>
<div class="container row m-5">
    <!-- <div class="col-12" style="text-align: center;"><h2 class="titulo"></h2></div> -->
    <div class="col-6" id="imagen">
    </div>
    <div class="col-6">
        <p id="description">Description: </p>
        <p id="size">Size: </p>
        <p id="price">Price: ฿</p>
        <div class="row">
        <div class="col-6  px-3">
            <button class="btn btn-primary" style="float:left; background-color:#25629F;width:100%;"><i class="fas fa-shopping-basket"></i> Add Cart</button>
        </div>
        <div class="col-6  px-3">
            <button class="btn btn-primary" style="float:right; background-color:#25629F;width:100%;"><i class="far fa-heart"></i> Wishlist</button>
        </div>
        </div>
    </div>
</div>