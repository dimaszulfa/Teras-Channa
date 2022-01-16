<script src="<?php echo base_url() ?>/assets/js/Chart.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@0.4.0/dist/chartjs-plugin-datalabels.min.js"></script>
<div class="main-panel">
  <div class="content-wrapper">
    <div class="row">
      <div class="col-md-12 grid-margin">
        <div class="row">
          <div class="col-12 col-xl-8 mb-4 mb-xl-0">
            <h3 class="font-weight-bold">Selamat Datang <?= $this->session->userdata('fullname') ?> </h3>
          </div>
          <br>
          <br>
          <br>
          <div class="col-lg-8 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <center>
                  <h4 class="card-title">Data Penjualan Ikan Channa</h4>
                  <canvas id="barChart"></canvas>
              </div>
            </div>
          </div>

          <div class="col-12 col-xl-4">


            <br>
            <!-- <canvas id="myGraph"></canvas>
    <?php
    //Inisialisasi nilai variabel awal
    $nama = "";
    $jumlah = null;
    foreach ($graph as $item) {
      $jur = $item->nama;
      $nama .= "'$jur'" . ", ";
      $jum = $item->jumlah;
      $jumlah .= "$jum" . ", ";
      $total += $item->jumlah;
    }
    ?> -->
            <script>
              var options = {
                scales: {
                  responsive: false,
                  maintainAspectRatio: true,
                  // yAxes: [{
                  //     ticks: {
                  //         beginAtZero:true
                  //     }
                  // }]
                },
                plugins: {
                  datalabels: {
                    formatter: (value, ctx) => {
                      let datasets = ctx.chart.data.datasets;
                      if (datasets.indexOf(ctx.dataset) === datasets.length - 1) {
                        let sum = datasets[0].data.reduce((a, b) => a + b, 0);
                        let percentage = Math.round((value / sum) * 100) + '%';
                        return percentage;
                      } else {
                        return percentage;
                      }
                    },
                    color: 'green',
                  }
                }
              }
              var ctx = document.getElementById('barChart').getContext('2d');
              var chart = new Chart(ctx, {
                // The type of chart we want to create
                type: 'pie',
                // The data for our dataset
                data: {
                  labels: [<?php echo $nama; ?>],
                  datasets: [{
                    label: 'Data Ikan ',
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
                options: options
              });
            </script>

          </div>
        </div>
      </div>
    </div>





  </div>
  <!-- content-wrapper ends -->