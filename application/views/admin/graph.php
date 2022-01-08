<!DOCTYPE html>
<html>
<head>
    <title>Grafis Penjualan Ikan</title>
    <!-- Load file plugin Chart.js -->
    <script src="<?php echo base_url()?>/assets/js/Chart.js"></script>
</head>
<style type="text/css">
    .myGraph {
    width: 100%;
    height: 100%;
    }
</style>
<body>
<br>
<canvas id="myGraph"></canvas>
    <?php
    //Inisialisasi nilai variabel awal
    $nama= "";
    $jumlah=null;
    foreach ($graph as $item)
    {
        $jur=$item->nama;
        $nama .= "'$jur'". ", ";
        $jum=$item->jumlah;
        $jumlah .= "$jum". ", ";
    }
    ?>
<script>
    var ctx = document.getElementById('myGraph').getContext('2d');
    var chart = new Chart(ctx, {
        // The type of chart we want to create
        type: 'bar',
        // The data for our dataset
        data: {
            labels: [<?php echo $nama; ?>],
            datasets: [{
                label:'Data Ikan ',
                backgroundColor: ['rgb(255, 99, 132)', 'rgba(56, 86, 255, 0.87)', 'rgb(60, 179, 113)','rgb(175, 238, 239)'],
                borderColor: ['rgb(255, 99, 132)'],
                data: [<?php echo $jumlah; ?>]
            }]
        },
        // Configuration options go here
        options: {
            scales: {
            responsive: false,
            maintainAspectRatio: true,
                yAxes: [{
                    ticks: {
                        beginAtZero:true
                    }
                }]
            }
        }
    });
</script>
</body>
</html>