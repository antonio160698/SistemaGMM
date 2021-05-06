window.onload = () => {
    cuenta();
    $.ajax({
        url: BASE_URL + '/api/artist',
        type: 'GET',
        success: (data) => {
            if (data.data) {
                let cards = '';
                for (let i = 0; i < data.data.length; i++) {
                    cards += '<div class="col-md-3 p-0 w-100" onclick="abrirModal()" style="height:280px;background-image:url(\'' + data.data[i].Image + '\');background-size: cover;"><a ><h3>' + data.data[i].Nickname + '</h3></a></div>';
                }
                $('#ListArtist').append(cards);
                $('#ListArtist div').mouseover((e) => { e.currentTarget.children[0].style.display = "block"; });
                $('#ListArtist div').mouseout((e) => { e.currentTarget.children[0].style.display = "none"; })
            }
        }
    })
}
function abrirModal(imagen = null) {
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
                data: [10, 156, 678, 1289, 1528, 2803, 3073],
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
                data: [13739, 247493, 327283, 427301, 538382, 1608392, 2300000],
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
                data: [1273933, 2394052, 3282932, 4392011, 5373910, 6372922, 6800000],
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

var myChart1 = new Chart(
    document.getElementById('pieTikTok').getContext('2d'),
    {
        type: 'doughnut',
        data: {
            labels: ['2018', '2019', '2020', '2021'],
            datasets: [{
                label:'Tiktok',
                backgroundColor: ['rgb(255,99,132)', 'rgb(255,159, 64)', 'rgb(255,205, 86)', 'rgb(75,192, 192)', 'rgb(54,132, 235)'],
                data: [10, 156, 678, 1289, 1528, 2803, 3073],
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

var myChart2 = new Chart(
    document.getElementById('pieTwitter').getContext('2d'),
    {
        type: 'doughnut',
        data: {
            labels: ['2018', '2019', '2020', '2021'],
            datasets: [{
                label:'Twitter',
                backgroundColor: ['rgb(255,99,132)', 'rgb(255,159, 64)', 'rgb(255,205, 86)', 'rgb(75,192, 192)', 'rgb(54,132, 235)'],
                data: [13739, 247493, 327283, 427301, 538382, 1608392, 2300000],
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

var myChart3 = new Chart(
    document.getElementById('pieInsta').getContext('2d'),
    {
        type: 'doughnut',
        data: {
            labels: ['2018', '2019', '2020', '2021'],
            datasets: [{
                label:'Instagram',
                backgroundColor: ['rgb(255,99,132)', 'rgb(255,159, 64)', 'rgb(255,205, 86)', 'rgb(75,192, 192)', 'rgb(54,132, 235)'],
                data: [1273933, 2394052, 3282932, 4392011, 5373910, 6372922, 6800000],
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