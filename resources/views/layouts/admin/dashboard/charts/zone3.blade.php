<script type="text/javascript">

    /*=============================
    =            zone3            =
    =============================*/

    var config = {
        type: 'pie',
        data: {
            datasets: [{
                data: [
                35,
                65,

                ],
                backgroundColor: [

                window.chartColors.yellow,
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
                text: 'Zone 3'
            },
            animation: {
                animateScale: true,
                animateRotate: true
            }
        }
    };


    var zone3 = document.getElementById('zone3').getContext('2d');
    new Chart(zone3, config);

</script>
