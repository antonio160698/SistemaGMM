let Dir = 'http://localhost/SistemaGMM/public/';
window.onload = ()=>{
    cuenta();
    $.ajax({
		url: Dir+'api/artist',
		type:'GET',
		success:(data)=>{
			if(data.data){
                let cards = '';
                for(let i=0; i < data.data.length; i++){
                    cards += '<div class="col-md-2 p-0"><img class="w-100" style="height:280px;" src="'+data.data[i].Image+'"/></div>';
                }
                $('#ListArtist').append(cards);
            }
		}
	})
}