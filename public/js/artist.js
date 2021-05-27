let datosTikT = [];
let datosInsta = [];
let datosTwitt = [];

window.onload = () => {
    cuenta();
    $.ajax({
        url: BASE_URL + '/api/artist',
        type: 'GET',
        success: (data) => {
            if (data.data) {
                let cards = '';
                for (let i = 0; i < data.data.length; i++) {
                    cards += '<div class="col-md-3 p-0 w-100" onclick="abrirModal('+data.data[i].IdArtist+')" style="height:280px;background-image:url(\'' + data.data[i].Image + '\');background-size: cover;"><a ><h3>' + data.data[i].Nickname + '</h3></a></div>';
                }
                $('#ListArtist').append(cards);
                $('#ListArtist div').mouseover((e) => { e.currentTarget.children[0].style.display = "block"; });
                $('#ListArtist div').mouseout((e) => { e.currentTarget.children[0].style.display = "none"; })
            }
        }
    })
}
function Fdatos(numero){
    let datos = [];
    datos.push(numero/(6/Math.random())+3)
    datos.push(numero/(4/Math.random())+2)
    datos.push(numero/(2/Math.random())+1)
    datos.push(parseInt(numero))
    return datos;
}
function updateData(chart, datosCharts) {
    chart.data.datasets[0].data = datosCharts;
    chart.update();
}
function abrirModal(id = null) {
    $.ajax({
        url: BASE_URL + '/api/artist/'+id,
        type: 'GET',
        success: (data) => {
            if (data.data) {
                if(data.data.Tiktok !== null){
                    datosTikT = Fdatos(data.data.Tiktok);
                    updateData(Chart1, datosTikT);
                    updateData(myChart1, datosTikT);
                    $('.tiktok').show();
                }else{
                    $('.tiktok').hide();
                }
                if(data.data.Twitter !== null){
                    datosTwitt = Fdatos(data.data.Twitter);
                    updateData(Chart2, datosTwitt);
                    updateData(myChart2, datosTwitt);
                    $('.twitter').show();
                }else{
                    $('.twitter').hide();
                }
                if(data.data.Instagram !== null){
                    datosInsta = Fdatos(data.data.Instagram);
                    updateData(Chart3, datosInsta);
                    updateData(myChart3, datosInsta);
                    $('.insta').show();
                }else{
                    $('.insta').hide();
                }
                $('#imagen_perfil').css("background-image","url('"+data.data.Image+"')");
                $('#nick').text(data.data.Nickname)
                $('#instagram').text(data.data.Instagram)
                $('#Name').text(data.data.Real_name)
                $('#years').text('Years: '+data.data.Years_old)
                $('#height').text('Height: '+data.data.Height+" cm")
                $('#weight').text('Weight: '+data.data.Width+" kg")
                $('#skills').text('Skills: '+data.data.Skills)
                $('#email').text('Email: '+data.data.Email)
                $('#total').text(parseInt(data.data.Tiktok)+parseInt(data.data.Twitter)+parseInt(data.data.Instagram))
            }
        }
    })
    $('#modalArtist').modal('show');
}
var myChart1 = new Chart(
    document.getElementById('histTikTok').getContext('2d'),
    {
        type: 'bar',
        data: {
            labels: ['2018', '2019', '2020', '2021'],
            datasets: [{
                label:'Tiktok',
                backgroundColor: ['rgba(37,98,160,1)'],
                data: [],
                borderWidth: 1
            }]
        },
        options: {
            responsive:true,
            scaleShowValues: true,
            scales: {
                x: [{
                    display: false,
                    ticks: {
                        autoSkip: false
                    }
                }],
                y: [{
                    display: false,
                    ticks: {
                        beginAtZero: false
                        }
                }],
            },
            plugins: {
                legend: {
                },
            }
        },
    }
);

var myChart2 = new Chart(
    document.getElementById('histTwitter').getContext('2d'),
    {
        type: 'bar',
        data: {
            labels: ['2018', '2019', '2020', '2021'],
            datasets: [{
                label:'Twitter',
                backgroundColor: ['rgba(37,98,160,1)'],
                data: [],
                borderWidth: 1
            }]
        },
        options: {
            responsive:true,
            scales: {
                xAxes: [{
                    display: false,
                    ticks: {
                        autoSkip: false
                    }
                }],
                yAxes: [{
                    display: false,
                    ticks: {
                        beginAtZero: true
                        }
                }],
            },
            plugins: {
                legend: {
                },
            }
        },
    }
);

var myChart3 = new Chart(
    document.getElementById('histInsta').getContext('2d'),
    {
        type: 'bar',
        data: {
            labels: ['2018', '2019', '2020', '2021'],
            datasets: [{
                label:'Instagram',
                backgroundColor: ['rgba(37,98,160,1)'],
                data: [],
                borderWidth: 1
            }],
                scales: {
                    xAxes: [{
                        display: false,
                        ticks: {
                            autoSkip: false
                        }
                    }],
                    yAxes: [{
                        display: false,
                        ticks: {
                            beginAtZero: true
                            }
                    }],
                },
        },
        options: {
            responsive:true,
            scales: {
                x: [{
                    display: false,
                    ticks: {
                        autoSkip: false
                    }
                }],
                y: [{
                    display: false,
                    ticks: {
                        beginAtZero: true
                        }
                }],
            },
            plugins: {
                legend: {
                },
            }
        },
    }
);

var Chart1 = new Chart(
    document.getElementById('pieTikTok').getContext('2d'),
    {
        type: 'doughnut',
        data: {
            labels: ['2018', '2019', '2020', '2021'],
            datasets: [{
                label:'Tiktok',
                backgroundColor: ['rgb(255,99,132)', 'rgb(255,159, 64)', 'rgb(255,205, 86)', 'rgb(75,192, 192)', 'rgb(54,132, 235)'],
                data: [],
                borderWidth: 1
            }]
        },
        options: {
            responsive:true,
            scaleShowValues: true,
            scales: {
                x: [{
                    display: false,
                    ticks: {
                        autoSkip: false
                    }
                }],
                y: [{
                    display: false,
                    ticks: {
                        beginAtZero: false
                        }
                }],
            },
            plugins: {
                legend: {
                    display:false,
                },
            }
        },
    }
);

var Chart2 = new Chart(
    document.getElementById('pieTwitter').getContext('2d'),
    {
        type: 'doughnut',
        data: {
            labels: ['2018', '2019', '2020', '2021'],
            datasets: [{
                label:'Twitter',
                backgroundColor: ['rgb(255,99,132)', 'rgb(255,159, 64)', 'rgb(255,205, 86)', 'rgb(75,192, 192)', 'rgb(54,132, 235)'],
                data: [],
                borderWidth: 1
            }]
        },
        options: {
            responsive:true,
            scales: {
                xAxes: [{
                    display: false,
                    ticks: {
                        autoSkip: false
                    }
                }],
                yAxes: [{
                    display: false,
                    ticks: {
                        beginAtZero: true
                        }
                }],
            },
            plugins: {
                legend: {
                    display:false,
                },
            }
        },
    }
);

var Chart3 = new Chart(
    document.getElementById('pieInsta').getContext('2d'),
    {
        type: 'doughnut',
        data: {
            labels: ['2018', '2019', '2020', '2021'],
            datasets: [{
                label:'Instagram',
                backgroundColor: ['rgb(255,99,132)', 'rgb(255,159, 64)', 'rgb(255,205, 86)', 'rgb(75,192, 192)', 'rgb(54,132, 235)'],
                data: [],
                borderWidth: 1
            }],
                scales: {
                    xAxes: [{
                        display: false,
                        ticks: {
                            autoSkip: false
                        }
                    }],
                    yAxes: [{
                        display: false,
                        ticks: {
                            beginAtZero: true
                            }
                    }],
                },
        },
        options: {
            responsive:true,
            scales: {
                x: [{
                    display: false,
                    ticks: {
                        autoSkip: false
                    }
                }],
                y: [{
                    display: false,
                    ticks: {
                        beginAtZero: true
                        }
                }],
            },
            plugins: {
                legend: {
                    display:false,
                },
            }
        },
    }
);