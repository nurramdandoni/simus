<div class="card card-info">
    <div class="card-header">
        <h3 class="card-title">Grafik Pengunjung Museum</h3>

        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
        </div>
    </div>
    <div class="card-body">
        <div class="chart">
            <canvas id="stackedBarChart1" style="height:250px; min-height:250px"></canvas>
        </div>
    </div>
    <!-- /.card-body -->
</div>

<?php

foreach ($grappengunjung->result() as $grapp) {
    $tanggal[] = $grapp->tanggal;
    $jumlah[] = (float) $grapp->jumlah;
}


?>

<script>
    $(function() {

        var stackedBarChartCanvas = $('#stackedBarChart1').get(0).getContext('2d')
        var stackedBarChartData = {
            labels: <?php echo json_encode($tanggal); ?>,
            datasets: [{
                    label: 'Jumlah Pengunjung',
                    backgroundColor: 'rgba(60,141,188,0.9)',
                    borderColor: 'rgba(60,141,188,0.8)',
                    pointRadius: false,
                    pointColor: '#3b8bba',
                    pointStrokeColor: 'rgba(60,141,188,1)',
                    pointHighlightFill: '#fff',
                    pointHighlightStroke: 'rgba(60,141,188,1)',
                    data: <?php echo json_encode($jumlah); ?>
                },

            ]
        }

        var stackedBarChartOptions = {
            legend: {
                display: false,
            },
            responsive: true,
            maintainAspectRatio: false,
            scales: {
                xAxes: [{
                    stacked: true,
                    ticks: {
                        autoSkip: false,
                        maxRotation: 45,
                        minRotation: 45
                    }
                }],

                yAxes: [{
                    stacked: true,
                    ticks: {
                        beginAtZero: true,
                        userCallback: function(label, index, labels) {
                            // when the floored value is the same as the value we have a whole number
                            if (Math.floor(label) === label) {
                                return label;
                            }

                        },
                    }
                }],
            }
        }

        var stackedBarChart = new Chart(stackedBarChartCanvas, {
            type: 'bar',
            data: stackedBarChartData,
            options: stackedBarChartOptions
        })
    })
</script>