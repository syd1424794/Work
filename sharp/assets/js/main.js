var nSec = document.getElementById('myChart').getContext('2d');
var myChart = new Chart(nSec, {
    type: 'doughnut',
    data: {
        labels: ['A', 'B', 'C', 'D'],
        datasets: [{
            label: '# of Votes',
            data: [12, 19, 12, 24],
            backgroundColor: [
                '#b80f0a',
                '#aaaaaa',
                '#000000',
                '#e91a22'
            ],
            borderColor: [
                '#b80f0a',
                '#aaaaaa',
                '#000000',
                '#e91a22'
            ],
            borderWidth: 1,
        }]
    },
    options: {
        rotation: 1 * Math.PI,
        circumference: 1 * Math.PI,
        cutoutPercentage: 70,
        // scales: {
        //     yAxes: [{
        //         ticks: {
        //             beginAtZero: true
        //         }
        //     }]
        // }
    }
});

var tSec = document.getElementById('myChart1').getContext('2d');
var myChart = new Chart(tSec, {
    type: 'doughnut',
    data: {
        labels: ['Red', 'Blue', 'Yellow'],
        datasets: [{
            label: '# of Votes',
            data: [12, 19, 12],
            backgroundColor: [
                '#b80f0a',
                '#000000',
                '#e91a22'
            ],
            borderColor: [
                '#b80f0a',
                '#000000',
                '#e91a22'
            ],
            borderWidth: 1,
        }]
    },
    options: {
        rotation: 1 * Math.PI,
        circumference: 1 * Math.PI,
        cutoutPercentage: 70,
    }
});

var tp = document.getElementById('myChart2').getContext('2d');
var myChart = new Chart(tp, {
    type: 'bar',
    data: {
        labels: ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O'],
        datasets: [{
            label: '# of Votes',
            data: [12, 19, 12, 1, 12, 34, 11, 10, 8, 5, 7, 2, 17, 14, 3],
            backgroundColor: [
                '#e2252b',
                '#d21502',
                '#a91b0d',
                '#9c1003',
                '#d0312d',
                'b80f0a',
                '#910d09',
                '#791812',
                '#bc5449',
                '#990f02',
                '#710c04',
                '#600b04',
                '#5a2022',
                '#ff9195',
                '#e2252b'
            ],
            borderColor: [
                '#e2252b',
                '#d21502',
                '#a91b0d',
                '#9c1003',
                '#d0312d',
                'b80f0a',
                '#910d09',
                '#791812',
                '#bc5449',
                '#990f02',
                '#710c04',
                '#600b04',
                '#5a2022',
                '#ff9195',
                '#e2252b'
            ],
            borderWidth: 1,
        }]
    },
    options: {
        rotation: 1 * Math.PI,
        circumference: 1 * Math.PI,
        cutoutPercentage: 10,
        scales: {
            xAxes: [{
                barThickness: 15
            }],
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});

var population = document.getElementById('myChart3').getContext('2d');
var myChart = new Chart(population, {
    type: 'doughnut',
    data: {
        labels: ['Male', 'Females'],
        datasets: [{
            label: '# of Age',
            data: [23, 18],
            backgroundColor: [
                '#b80f0a',
                '#000000'
            ],
            borderColor: [
                '#b80f0a',
                '#000000'
            ],
            borderWidth: 1,
        }]
    },
    options: {
        rotation: 1 * Math.PI,
        circumference: 1 * Math.PI,
        cutoutPercentage: 70,
    }
});

var education = document.getElementById('myChart4').getContext('2d');
var myChart = new Chart(education, {
    type: 'doughnut',
    data: {
        labels: ['Male', 'Females'],
        datasets: [{
            label: '# of Age',
            data: [23, 18],
            backgroundColor: [
                '#b80f0a',
                '#000000'
            ],
            borderColor: [
                '#b80f0a',
                '#000000'
            ],
            borderWidth: 1,
        }]
    },
    options: {
        rotation: 1 * Math.PI,
        circumference: 1 * Math.PI,
        cutoutPercentage: 70,
    }
});

var employment = document.getElementById('myChart5').getContext('2d');
var myChart = new Chart(employment, {
    type: 'doughnut',
    data: {
        labels: ['Male', 'Females'],
        datasets: [{
            label: '# of Age',
            data: [23, 18],
            backgroundColor: [
                '#b80f0a',
                '#000000'
            ],
            borderColor: [
                '#b80f0a',
                '#000000'
            ],
            borderWidth: 1,
        }]
    },
    options: {
        rotation: 1 * Math.PI,
        circumference: 1 * Math.PI,
        cutoutPercentage: 70,
    }
});

jQuery(document).ready(function () {

    // JS FOR TABS

    jQuery('.c_tabs ul li a').click(function () {
        var val1 = jQuery(this).attr('title');
        jQuery('.c_tabs ul li a').removeClass('active');
        jQuery(this).addClass('active');
        var contentDiv = jQuery(this).parent().parent().parent().parent().next().find('.content-div');
        contentDiv.hide();
        jQuery(this).parent().parent().parent().parent().next().find('.content-div');
        contentDiv.each(function () {
            if (jQuery(this).attr('rel') === val1) {
                jQuery(this).show();
            }
        })
    })
});