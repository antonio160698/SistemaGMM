let Dir = 'http://localhost/SistemaGMM/public/';
window.onload = ()=>{
    cuenta();
    $.ajax({
		url: Dir+'api/begin/'+window.location.href.split('/')[6],
		type:'GET',
		success:(data)=>{
			if(data.data){
                $(".detail-image").css("background-image","url('"+data.data.Image+"')");
                $(".detail-titulo").text(data.data.Title);
                $("#detail-year").append(data.data.Year);
                $("#detail-state").append(data.data.State);
                $("#detail-gene").append(data.data.Genere);
                $('#detail-description').text(data.data.Description);
            }
		}
	})
}