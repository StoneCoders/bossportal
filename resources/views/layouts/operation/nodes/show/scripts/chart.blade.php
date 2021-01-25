<script type="text/javascript" src="https://www.chartjs.org/dist/2.8.0/Chart.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.13.0/moment.min.js"></script>
<script type="text/javascript" src="/js/chartjs/utils.js"></script>

<script type="text/javascript">

    /*=====================================
    =            instanceChart            =
    =====================================*/

    var config = {
        type: 'doughnut',
        data: {
            datasets: [{
                data: [
                {{ $vnflcm['vnfInstanceCount'] }},
                {{ $vnflcm['vnfInstancesMax'] }} - {{ $vnflcm['vnfInstanceCount'] }},

                ],
                backgroundColor: [

                window.chartColors.green,
                window.chartColors.grey,
                ],
                label: 'Dataset 1'
            }],
            labels: [
            'Instances','Remaining',
            ]
        },
        options: {
            responsive: true,
            legend: {
                display: false
            },
            title: {
                display: true,
                text: 'Instances',
                fontSize: 20,
            },
            animation: {
                animateScale: true,
                animateRotate: true
            }
        }
    };

    var instanceChart = document.getElementById('instanceChart').getContext('2d');
    new Chart(instanceChart, config);

    /*=================================
    =            vcpuChart            =
    =================================*/

    var config = {
        type: 'doughnut',
        data: {
            datasets: [{
                data: [
                {{ $vnflcm['vCPUsUsed'] }},
                {{ $vnflcm['vCPUsTotal'] }} - {{ $vnflcm['vCPUsUsed'] }},

                ],
                backgroundColor: [

                window.chartColors.orange,
                window.chartColors.grey,
                ],
                label: 'VCPU'
            }],
            labels: [
            'VCPU','Remaining',
            ]
        },
        options: {
            responsive: true,
            legend: {
                display: false
            },
            title: {
                display: true,
                text: 'VCPU',
                fontSize: 20,
            },
            animation: {
                animateScale: true,
                animateRotate: true
            }
        }
    };

    var vcpuChart = document.getElementById('vcpuChart').getContext('2d');
    new Chart(vcpuChart, config);

    /*=====================================
    =            memoryChart            =
    =====================================*/

    var config = {
        type: 'doughnut',
        data: {
            datasets: [{
                data: [
                {{ $vnflcm['memoryFreeInKb'] }},
                {{ $vnflcm['memoryTotalInKb'] }} - {{ $vnflcm['memoryFreeInKb'] }},

                ],
                backgroundColor: [

                window.chartColors.yellow,
                window.chartColors.grey,
                ],
                label: 'Memory'
            }],
            labels: [
            'Memory','Remaining',
            ]
        },
        options: {
            responsive: true,
            legend: {
                display: false
            },
            title: {
                display: true,
                text: 'Memory',
                fontSize: 20,
            },
            animation: {
                animateScale: true,
                animateRotate: true
            }
        }
    };

    var memoryChart = document.getElementById('memoryChart').getContext('2d');
    new Chart(memoryChart, config);

    /*=====================================
    =            hddChart            =
    =====================================*/

    var config = {
        type: 'doughnut',
        data: {
            datasets: [{
                data: [
                35,
                65,

                ],
                backgroundColor: [

                window.chartColors.red,
                window.chartColors.grey,
                ],
                label: 'HDD'
            }],
            labels: [
            'HDD','Remaining',
            ]
        },
        options: {
            responsive: true,
            legend: {
                display: false
            },
            title: {
                display: true,
                text: 'HDD',
                fontSize: 20,
            },
            animation: {
                animateScale: true,
                animateRotate: true
            }
        }
    };

    var hddChart = document.getElementById('hddChart').getContext('2d');
    new Chart(hddChart, config);

</script>