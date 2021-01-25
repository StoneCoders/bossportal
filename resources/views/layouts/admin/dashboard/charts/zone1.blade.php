<script type="text/javascript">

    /*=============================
    =            zone1            =
    =============================*/

    var config = {
        type: 'pie',
        data: {
            datasets: [{
                data: [
                70,
                30,

                ],
                backgroundColor: [

                window.chartColors.green,
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
                text: 'Zone 1'
            },
            animation: {
                animateScale: true,
                animateRotate: true
            }
        }
    };

    var zone1 = document.getElementById('zone1').getContext('2d');
    new Chart(zone1, config);

</script>
