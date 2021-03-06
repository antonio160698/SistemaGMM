window.onload = ()=>{
    cuenta();
    $.ajax({
		url: BASE_URL+'/api/article',
		type:'GET',
		success:(data)=>{
			if(data.data){
                let cards = '';
                for(let i=0; i < 10; i++){
                    if(i == 0){
                        cards += '<div class="carousel-item active">'
                    }else{
                        cards += '<div class="carousel-item">'
                    }
                    cards += '<div class="card mx-1"><img class="img-fluid" src="'+data.data[i].Imagen+'"/><a style="color:black;" href="'+BASE_URL+'/detail-article/'+data.data[i].IdArticulo+'"><p class="text-center">'+data.data[i].Descripcion.substr(0,50)+'...</p><p class="text-center">'+parseInt(data.data[i].Price).toLocaleString('th-TH', { style: 'currency', currency: 'THB' })+'</p></a></div></div>';
                }
                $('#carouselBestSeller > .carousel-inner').append(cards);
                $('.carousel .carousel-item').each(function() {
                    var minPerSlide = 2;
                    var next = $(this).next();
                    if (!next.length) {
                        next = $(this).siblings(':first');
                    }
                    next.children(':first-child').clone().appendTo($(this));
                
                    for (var i = 0; i < minPerSlide; i++) {
                        next = next.next();
                        if (!next.length) {
                            next = $(this).siblings(':first');
                        }
                
                        next.children(':first-child').clone().appendTo($(this));
                    }
                });
            }
		}
	})
}