let Dir = 'http://localhost/SistemaGMM/public/';
window.onload = ()=>{
    $.ajax({
		url: Dir+'api/search/'+window.location.href.split('/')[6],
		type:'GET',
		success:(data)=>{
			if(data.data){
                let cards = '';
                for(let i=0; i < data.data.length; i++){
                    cards += "<a class='col-md-3 p-0'><img class='w-100' style='height:400px;' src='"+data.data[i].Imagen+"'></a>"
                }
                $('#search').append(cards);
            }
		}
	})
}