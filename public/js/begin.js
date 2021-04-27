window.onload = ()=>{
    cuenta();
    $.ajax({
		url: BASE_URL+'/api/begin',
		type:'GET',
		success:(data)=>{
			if(data.data){
                let cards = '';
                for(let i=0; i < data.data.length; i++){
                    if(i == 0){
                        cards += '<div class="carousel-item active fill"><a href="'+BASE_URL+"/detail/"+data.data[i].BeginId+'"><img class="back" src="'+data.data[i].Image+'" align="middle"><img class="front" src="'+data.data[i].Image+'" align="middle"></a></div>';
                    }else{
                        cards += '<div class="carousel-item fill"><a href="'+BASE_URL+"/detail/"+data.data[i].BeginId+'"><img class="back" src="'+data.data[i].Image+'" align="middle"><img class="front" src="'+data.data[i].Image+'" align="middle"></a></div>';
                    }
                }
                $('#carouselExampleControls>.carousel-inner').append(cards);
            }
		}
	})
    $.ajax({
		url: BASE_URL+'/api/series',
		type:'GET',
		success:(data)=>{
			if(data.data){
                let cards = '';
                for(let i=0; i < data.data.length; i++){
                    if(i == 0){
                        cards += '<div class="carousel-item active cuadrado-300"><a href="'+BASE_URL+"/detail/"+data.data[i].BeginId+'"><img src="'+data.data[i].Image+'"></a></div>';
                    }else{
                        cards += '<div class="carousel-item cuadrado-300"><a href="'+BASE_URL+"/detail/"+data.data[i].BeginId+'"><img src="'+data.data[i].Image+'"></a></div>';
                    }
                }
                $('#carouselSeries .carousel-inner').append(cards);
            }
		}
	})
    $.ajax({
		url: BASE_URL+'/api/records',
		type:'GET',
		success:(data)=>{
			if(data.data){
                let cards = '';
                for(let i=0; i < data.data.length; i++){
                    if(i == 0){
                        cards += '<div class="carousel-item active cuadrado-300"><a href="'+BASE_URL+"/detail/"+data.data[i].BeginId+'"><img src="'+data.data[i].Image+'"></a></div>';
                    }else{
                        cards += '<div class="carousel-item cuadrado-300"><a href="'+BASE_URL+"/detail/"+data.data[i].BeginId+'"><img src="'+data.data[i].Image+'"></a></div>';
                    }
                }
                $('#carouselRecords .carousel-inner').append(cards);
            }
		}
	})
    $.ajax({
		url: BASE_URL+'/api/webshows',
		type:'GET',
		success:(data)=>{
			if(data.data){
                let cards = '';
                for(let i=0; i < data.data.length; i++){
                    if(i == 0){
                        cards += '<div class="carousel-item active cuadrado-300"><a href="'+BASE_URL+"/detail/"+data.data[i].BeginId+'"><img src="'+data.data[i].Image+'"></a></div>';
                    }else{
                        cards += '<div class="carousel-item cuadrado-300"><a href="'+BASE_URL+"/detail/"+data.data[i].BeginId+'"><img src="'+data.data[i].Image+'"></a></div>';
                    }
                }
                $('#carouselVariety .carousel-inner').append(cards);
            }
		}
	})
}