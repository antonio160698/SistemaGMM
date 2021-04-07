let Dir = 'https://localhost/gmmtv/public/';
window.onload = ()=>{
    $.ajax({
		url: Dir+'api/artist',
		type:'GET',
		success:(data)=>{
			if(data.data){
                let cards = '';
                for(let i=0; i < data.data.length; i++){
                    cards += '<div class="col-md-3 px-0"><img class="w-100" src="'+data.data[i].Image+'"/></div>';
                }
                $('#ListArtist').append(cards);
            }
		}
	})
}