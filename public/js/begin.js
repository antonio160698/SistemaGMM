let Dir = 'http://localhost/SistemaGMM/public/';
window.onload = ()=>{
    $.ajax({
		url: Dir+'api/begin',
		type:'GET',
		success:(data)=>{
			if(data.data){
                let cards = '';
                for(let i=0; i < data.data.length; i++){
                    if(i == 0){
                        cards += '<div class="carousel-item active fill"><img class="back" src="'+data.data[i].Image+'" align="middle"><img class="front" src="'+data.data[i].Image+'" align="middle"></div>';
                    }else{
                        cards += '<div class="carousel-item fill"><img class="back" src="'+data.data[i].Image+'" align="middle"><img class="front" src="'+data.data[i].Image+'" align="middle"></div>';
                    }
                }
                $('#carouselExampleControls>.carousel-inner').append(cards);
            }
		}
	})
    $.ajax({
		url: Dir+'api/series',
		type:'GET',
		success:(data)=>{
			if(data.data){
                let cards = '';
                for(let i=0; i < data.data.length; i++){
                    if(i == 0){
                        cards += '<div class="carousel-item active cuadrado-300"><img src="'+data.data[i].Image+'"></div>';
                    }else{
                        cards += '<div class="carousel-item cuadrado-300"><img src="'+data.data[i].Image+'"></div>';
                    }
                }
                $('#carouselSeries .carousel-inner').append(cards);
            }
		}
	})
    $.ajax({
		url: Dir+'api/records',
		type:'GET',
		success:(data)=>{
			if(data.data){
                let cards = '';
                for(let i=0; i < data.data.length; i++){
                    if(i == 0){
                        cards += '<div class="carousel-item active cuadrado-300"><img src="'+data.data[i].Image+'"></div>';
                    }else{
                        cards += '<div class="carousel-item cuadrado-300"><img src="'+data.data[i].Image+'"></div>';
                    }
                }
                $('#carouselRecords .carousel-inner').append(cards);
            }
		}
	})
    $.ajax({
		url: Dir+'api/webshows',
		type:'GET',
		success:(data)=>{
			if(data.data){
                let cards = '';
                for(let i=0; i < data.data.length; i++){
                    if(i == 0){
                        cards += '<div class="carousel-item active cuadrado-300"><img src="'+data.data[i].Image+'"></div>';
                    }else{
                        cards += '<div class="carousel-item cuadrado-300"><img src="'+data.data[i].Image+'"></div>';
                    }
                }
                $('#carouselVariety .carousel-inner').append(cards);
            }
		}
	})
}