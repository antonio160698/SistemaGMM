<div class="container">
    <div id="search" class="row mx-0"></div>
</div>
<script>
window.onload = ()=>{
    cuenta();
    $.ajax({
		url: BASE_URL+'/api/compras',
		type:'GET',
		success:(data)=>{
			if(data.data){
                let cards = '';
                for(let i=0; i < data.data.length; i++){
                    cards += "<div class='col-md-12 card my-2'><div class='row'><a href='"+BASE_URL+"/detail-article/"+data.data[i].Id+"' class='col-8 p-2'><p>"
                    +(data.data[i].Descripcion === null? '':data.data[i].Descripcion)+"</p><div style='display:inline-flex;'><p class='mr-4'>"
                    +(data.data[i].Price === null? '':'$'+data.data[i].Price)
                    +"</p><p>"+(data.data[i].Cantidad === null? '':data.data[i].Cantidad)
                    +"</p></div></a><div class='col-4' style='text-align:center !important'><img style='height:150px;width:150px;' src='"
                    +data.data[i].Imagen+"'></div></div></div>"
                }
                $('#search').append(cards);
            }
		}
	})
}</script>