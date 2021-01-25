<script type="text/javascript">

    /*=============================
    =            zone4            =
    =============================*/

    var config = {
        type: 'pie',
        data: {
            datasets: [{
                data: [
                15,
                85,

                ],
                backgroundColor: [

                window.chartColors.red,
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
                text: 'Zone 4'
            },
            animation: {
                animateScale: true,
                animateRotate: true
            }
        }
    };


    var zone4 = document.getElementById('zone4').getContext('2d');
    new Chart(zone4, config);

</script>
