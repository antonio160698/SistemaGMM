window.onload = ()=>{
    cuenta();
    let tipo = {1:'artist',
2:'detail-article',
3:'detail'}
    $.ajax({
		url: BASE_URL+'/api/search/'+window.location.href.split('/')[6],
		type:'GET',
		success:(data)=>{
			if(data.data){
                let cards = '';
                for(let i=0; i < data.data.length; i++){
                    cards += "<div class='col-md-12 card my-2'><a href='"+BASE_URL+"/"+tipo[data.data[i].Tab]+
                    (data.data[i].Tab != 1 ? "/"+data.data[i].Id: "/#"+data.data[i].Id)+"' class='row'><div class='col-8 p-2'><p>"+(data.data[i].Descripcion === null? '':data.data[i].Descripcion)+"</p><p>"+(data.data[i].Title === null? '':data.data[i].Title)+"</p></div><div class='col-4' style='text-align:center !important'><img style='height:150px;width:150px;' src='"+data.data[i].Imagen
                    +"'></div></a></div>"
                }
                $('#search').append(cards);
            }
		}
	})
}