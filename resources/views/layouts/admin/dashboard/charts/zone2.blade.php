<script type="text/javascript">
    /*=============================
    =            zone2            =
    =============================*/

    var config = {
        type: 'pie',
        data: {
            datasets: [{
                data: [
                55,
                40,

                ],
                backgroundColor: [

                window.chartColors.orange,
                window.chartColors.grey,
                ],
                label: 'Dataset 1'
            }],
            labels: [
            'Healthy','Warning',
            ]
        },
        options: {
            responsive: true,
            legend: {
                display: false
            },
            title: {
                display: true,
                text: 'Zone 2'
            },
            animation: {
                animateScale: true,
                animateRotate: true
            }
        }
    };


    var zone2 = document.getElementById('zone2').getContext('2d');
    new Chart(zone2, config);
</script>
