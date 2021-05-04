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
                    cards += '<div class="col-md-3 p-0 w-100" style="height:280px;background-image:url(\''+data.data[i].Image+'\');background-size: cover;"><a ><h3>'+data.data[i].Nickname+'</h3></a></div>';
                }
                $('#ListArtist').append(cards);
                $('#ListArtist div').mouseover((e)=>{e.currentTarget.children[0].style.display = "block";});
                $('#ListArtist div').mouseout((e)=>{e.currentTarget.children[0].style.display = "none";})
            }
		}
	})
}