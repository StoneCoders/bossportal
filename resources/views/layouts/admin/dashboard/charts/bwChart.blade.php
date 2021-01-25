<script type="text/javascript">

config = {
    type: 'line',
    data: {
        labels: generateLabels(),
        datasets: [{
            label: 'Uplink',
            backgroundColor: utils.color(4),
            borderColor: utils.color(4),
            data: generateData(),
            fill: false,
        }, {
            label: 'Downlink',
            fill: false,
            backgroundColor: utils.color(1),
            borderColor: utils.color(1),
            data: generateData(),
        }]
    },
    options: {
        responsive: true,
        legend: {
            position: 'top',
        },
        title: {
            display: true,
            text: 'Uplink Vs. Downlink'
        },
        scales: {
            xAxes: [{
                display: true,
                scaleLabel: {
                    display: true,
                    labelString: 'Month'
                }
            }],
            yAxes: [{
                display: true,
                scaleLabel: {
                    display: true,
                    labelString: 'Value'
                }
            }]
        }
    }
};

new Chart(document.getElementById('bwChart'), config);


</script>
