window.onload = () => {
  cuenta();
  $.ajax({
    url: BASE_URL + '/api/begin/' + window.location.href.split('/')[6],
    type: 'GET',
    success: (data) => {
      if (data.data) {
        $(".detail-image").css("background-image", "url('" + data.data.Image + "')");
        $(".detail-titulo").text(data.data.Title);
        $("#detail-year").append(data.data.Year);
        $("#detail-state").append(data.data.State);
        $("#detail-gene").append(data.data.Genere);
        $('#detail-description').text(data.data.Description);
        let video = data.data.video.includes('youtube') ? '<iframe width="727" height="409" src="'+data.data.video+'" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>' : '';
        $('#detail-video').append(video);
      }
    }
  })
}