window.onload = ()=>{
    cuenta();
    $.ajax({
		url: BASE_URL+'/api/begin',
		type:'GET',
		success:(data)=>{
			if(data.data){
                let cards = '';
                let ind = '';
                for(let i=0; i < data.data.length; i++){
                    if(i == 0){
                        cards += '<div class="carousel-item active fill"><a class="carousel-caption d-none d-md-block" style="text-shadow: 1px 7px 7px rgba(47, 47, 47, 0.71);" href="'+BASE_URL+"/detail/"+data.data[i].BeginId+'"><h3>'+data.data[i].Title+'</h3></a><img class="back" src="'+data.data[i].Image+'" align="middle"><img class="front" src="'+data.data[i].Image+'" align="middle"></div>';
                        ind += '<li data-target="#carouselExampleIndicators" data-slide-to="'+i+'" class="active"></li>';
                    }else{
                        cards += '<div class="carousel-item fill"><a class="carousel-caption d-none d-md-block" style="text-shadow: 1px 7px 7px rgba(47, 47, 47, 0.71);" href="'+BASE_URL+"/detail/"+data.data[i].BeginId+'"><h3>'+data.data[i].Title+'</h3></a><img class="back" src="'+data.data[i].Image+'" align="middle"><img class="front" src="'+data.data[i].Image+'" align="middle"></div>';
                        ind += '<li data-target="#carouselExampleIndicators" data-slide-to="'+i+'"></li>'
                    }
                }
                $('#carouselExampleControls>.carousel-inner').append(cards);
                $('#carouselExampleControls>ol').append(ind);
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
                        cards += '<div class="carousel-item active cuadrado-300"><a class="carousel-caption d-none d-md-block" style="text-shadow: 1px 7px 7px rgba(47, 47, 47, 0.71);" href="'+BASE_URL+"/detail/"+data.data[i].BeginId+'">'+data.data[i].Title+'</a><img src="'+data.data[i].Image+'"></div>';
                    }else{
                        cards += '<div class="carousel-item cuadrado-300"><a class="carousel-caption d-none d-md-block" style="text-shadow: 1px 7px 7px rgba(47, 47, 47, 0.71);" href="'+BASE_URL+"/detail/"+data.data[i].BeginId+'">'+data.data[i].Title+'</a><img src="'+data.data[i].Image+'"></div>';
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
                        cards += '<div class="carousel-item active cuadrado-300"><a class="carousel-caption d-none d-md-block" style="text-shadow: 1px 7px 7px rgba(47, 47, 47, 0.71);" href="'+BASE_URL+"/detail/"+data.data[i].BeginId+'">'+data.data[i].Title+'</a><img src="'+data.data[i].Image+'"></div>';
                    }else{
                        cards += '<div class="carousel-item cuadrado-300"><a class="carousel-caption d-none d-md-block" style="text-shadow: 1px 7px 7px rgba(47, 47, 47, 0.71);" href="'+BASE_URL+"/detail/"+data.data[i].BeginId+'">'+data.data[i].Title+'</a><img src="'+data.data[i].Image+'"></div>';
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
                        cards += '<div class="carousel-item active cuadrado-300"><a class="carousel-caption d-none d-md-block" style="text-shadow: 1px 7px 7px rgba(47, 47, 47, 0.71);" href="'+BASE_URL+"/detail/"+data.data[i].BeginId+'">'+data.data[i].Title+'</a><img src="'+data.data[i].Image+'"></div>';
                    }else{
                        cards += '<div class="carousel-item cuadrado-300"><a class="carousel-caption d-none d-md-block" style="text-shadow: 1px 7px 7px rgba(47, 47, 47, 0.71);" href="'+BASE_URL+"/detail/"+data.data[i].BeginId+'">'+data.data[i].Title+'</a><img src="'+data.data[i].Image+'"></div>';
                    }
                }
                $('#carouselVariety .carousel-inner').append(cards);
            }
		}
	})
}