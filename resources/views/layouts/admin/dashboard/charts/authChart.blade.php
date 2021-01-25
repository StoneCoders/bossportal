    <script type="text/javascript">

        /*=================================
        =            authChart            =
        =================================*/

        var MONTHS = [
        'June',
        'July',
        'August',
        'September',
        'October',
        'November',
        'December'
        ];

        var color = Chart.helpers.color;
        var barChartData = {
            labels: MONTHS,
            datasets: [{
                label: 'Auth',
                backgroundColor: color(window.chartColors.red).alpha(0.5).rgbString(),
                borderColor: window.chartColors.red,
                borderWidth: 1,
                data: [
                randomScalingFactor(),
                randomScalingFactor(),
                randomScalingFactor(),
                randomScalingFactor(),
                randomScalingFactor(),
                randomScalingFactor(),
                randomScalingFactor()
                ]
            }, {
                label: 'Unauth',
                backgroundColor: color(window.chartColors.blue).alpha(0.5).rgbString(),
                borderColor: window.chartColors.blue,
                borderWidth: 1,
                data: [
                randomScalingFactor(),
                randomScalingFactor(),
                randomScalingFactor(),
                randomScalingFactor(),
                randomScalingFactor(),
                randomScalingFactor(),
                randomScalingFactor()
                ]
            }]

        };


        var authChart = document.getElementById('authChart').getContext('2d');
        new Chart(authChart, {
            type: 'bar',
            data: barChartData,
            options: {
                responsive: true,
                legend: {
                    position: 'top',
                },
                title: {
                    display: true,
                    text: 'Auth Vs. Unauth'
                }
            }
        });


    </script>