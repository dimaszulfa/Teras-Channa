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
<div class="col-lg-9 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Bar chart</h4>
                  <canvas id="barChart"></canvas>
                </div>
              </div>
            </div>

<br>
<!-- <canvas id="myGraph"></canvas>
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
    ?> -->
<script>
    var ctx = document.getElementById('barChart').getContext('2d');
    var chart = new Chart(ctx, {
        // The type of chart we want to create
        type: 'pie',
        // The data for our dataset
        data: {
            labels: [<?php echo $nama; ?>],
            datasets: [{
                label:'Data Ikan ',
                backgroundColor: [
        'rgba(255, 99, 132, 0.2)',
        'rgba(54, 162, 235, 0.2)',
        'rgba(255, 206, 86, 0.2)',
        'rgba(75, 192, 192, 0.2)',
        'rgba(153, 102, 255, 0.2)',
        'rgba(255, 159, 64, 0.2)'
      ],
      borderColor: [
        'rgba(255,99,132,1)',
        'rgba(54, 162, 235, 1)',
        'rgba(255, 206, 86, 1)',
        'rgba(75, 192, 192, 1)',
        'rgba(153, 102, 255, 1)',
        'rgba(255, 159, 64, 1)'
      ],
      borderWidth: 1,
      fill: false,
                data: [<?php echo $jumlah; ?>],

            }]
        },
        // Configuration options go here
        options: {
            scales: {
            responsive: false,
            maintainAspectRatio: true,
                // yAxes: [{
                //     ticks: {
                //         beginAtZero:true
                //     }
                // }]
            }
        }
    });
</script>
<script src="<?php echo base_url()?>/assets/js/Chart.js"></script>
</body>
</div>
</div>
</html>