$('#signin-btn').click(()=>{
	$('#register').removeAttr('hidden');
	$('#register').show();
	$('#loginshow').hide();
	$('#registerstep-1').show();
	$('#registerstep-2').hide();
	$('#registerstep-3').hide();
	$.ajax({
		url: 'https://restcountries.eu/rest/v2/all',
		success:(data)=>{
			let contries = data.map(x => x.name);
			let options = '';
			for (let i = 0; i < contries.length; i++) {
				options += '<option value="'+contries[i]+'">'+contries[i]+'</option>';
			}
			$('#signinContry').append(options);
		}
	})
});
$('.step-1').click(()=>{
	$('.step-1').addClass('active');
	$('.step-3').text('3');
	$('.step-2').removeClass('active');
	$('.step-3').removeClass('active');
	$('#registerstep-1').show();
	$('#registerstep-2').hide();
	$('#registerstep-3').hide();
});
$('.step-2').click(()=>{
	$('.step-2').addClass('active');
	$('.step-3').text('3');
	$('.step-1').removeClass('active');
	$('.step-3').removeClass('active');
	$('#registerstep-2').show();
	$('#registerstep-1').hide();
	$('#registerstep-3').hide();
});
$('.step-3').click(()=>{
	$('.step-3').addClass('active');
	$('.step-2').removeClass('active');
	$('.step-1').removeClass('active');
	$('#registerstep-3').show();
	$('#registerstep-2').hide();
	$('#registerstep-1').hide();
	$('.step-3').text('REGISTER');
	$('.step-3').click(register);
});
$('.close').click(()=>{
	$('#register').hide();
	$('#loginshow').show();
	$('.step-3').text('3');
	$('#registerstep-1').hide();
	$('#registerstep-2').hide();
	$('#registerstep-3').hide();
});
$('#login-btn').click(()=>{
	let email = $('#loginEmail').val();
	let pass = $('#loginPassword').val();
	$.ajax({
		url: BASE_URL+'/usuario/'+email+'/'+pass,
		success:(data)=>{
			if(data.data){
				$('#modal-login').modal('hide');
				$("#count-login").show();
				$("#count-logout").hide();
			}else{

			}
		}
	})
})
let register = (e)=>{
	e.preventDefault(); 
	let firstname = $('#signinFname').val();
	let lastname = $('#signinLname').val();
	let email = $('#signinEmail').val();
	let phone = $('#signinPhone').val();
	let pass = $('#signinPass').val();
	let confpass = $('#signinCPass').val();
	let address1 = $('#signinAddress1').val();
	let address2 = $('#signinAddress2').val();
	let district = $('#signinDistrict').val();
	let postcode = $('#signinPostcode').val();
	let contry = $('#signinContry').val();
	let city = $('#signinCity').val();
	let card = $('#signinNombreCard').val();
	let expdate = $('#signinExpdate').val();
	let cvv = $('#signinCVV').val();
	$.ajax({
		url: BASE_URL+'/usuario',
		data: {firstname: firstname,
		lastname: lastname,
		email: email,
		phone: phone,
		password: pass,
		address1: address1,
		address2: address2,
		district: district,
		postcode: postcode,
		contry: contry,
		city: city,
		card:card,
		exp_date: expdate,
		cvv: cvv
		},
		type:'POST',
		success:(data)=>{
			console.log(data);
			if(data.data){
				$('#modal-login').modal('hide');
				$("#count-logout").hide();
				$(".admin").css("display", "block");
			}
			$('.step-3').click(()=>{
				$('.step-3').addClass('active');
				$('.step-3').text('REGISTER');
				$('.step-2').removeClass('active');
				$('.step-1').removeClass('active');
				$('#registerstep-3').show();
				$('#registerstep-2').hide();
				$('#registerstep-1').hide();
				$('.step-3').click(register);
			});
		}
	})
}
let cuenta = () => {
	$(".admin").hide();
	$("#count-logout").hide();
	$.ajax({
		url: BASE_URL+'/api/log',
		success:(data)=>{
			if(data.data){
				$(".admin").show();
			}else{
				$("#count-logout").show();
			}
		}
	})
} 
$("#btn-search").click((e)=>{
	e.preventDefault(); 
	let search = $("#input-search").val();
	window.location = BASE_URL+"/search/"+search;
})

$("#logout").click((e)=> {
	e.preventDefault(); 
	$.ajax({
		url: BASE_URL+'/api/log_out',
		success:(data)=>{
			cuenta();
		}
	})
})