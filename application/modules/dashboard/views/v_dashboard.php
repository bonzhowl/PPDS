<section class="content">
  <div class="container-fluid">
    
      <!-- jumlah ppds aktif -->
      <div class="row">
        <div class="col-lg-3 col-6">
          <div class="small-box bg-info">
            <div class="inner">
              <p><h2><?=$jumlah_ppds['JUMLAH']?> Orang</h2></p>
              <h3><?=$jumlah_ppds['NAMA']?></h3>
            </div>
            <div class="icon">
              <i class="nav-icon fas fa-user"></i>
            </div>
          </div>
        </div>
        
        <!-- jumlah prodi -->
        <div class="col-lg-3 col-6">
          <div class="small-box bg-success">
            <div class="inner">
              <p><h2><?=$jumlah_prodi['JUMLAH']?></h2></p>
              <h3>Program Studi</h3>
              
            </div>
            <div class="icon">
              <i class="fas fa-university"></i>
            </div>
          </div>
        </div>
      </div>

      <!-- jumlah ppds per prodi -->
      <div class="row">
        <!-- <div class="col-md-12"> -->
          <!-- Info Boxes Style 2 -->
          <!-- <div class="info-box mb-3 bg-warning">
            <span class="info-box-icon"><i class="fas fa-university"></i></span>
              <div class="info-box-content">
               <span class="info-box-text">Anestesiologi dan Terapi Intensif</span>
              </div>
          </div>      -->         
          
              <!-- /.info-box-content -->
          <!-- </div> -->
          <div class="col-md">
            <div class="card">
              <div class="card-header border-0">
                <div class="d-flex justify-content-between">
                  <h1 class="card-title">Jumlah PPDS Aktif Pada Setiap Program Studi</h1>
                </div>
              </div>
              <div class="card-body">
                <canvas id="sales-chart" height="400"></canvas>
              </div>
            </div>
          </div>
        </div>

        
      </div>

</section>

<script>
 /* global Chart:false */

$(function () {
  'use strict'

  var ticksStyle = {
    fontColor: '#495057',
    fontStyle: 'bold'
  }

  var mode = 'index'
  var intersect = true

  var $salesChart = $('#sales-chart')
  // eslint-disable-next-line no-unused-vars
  var salesChart = new Chart($salesChart, {
    type: 'bar',
    data: {
      labels: [
      <?php
        foreach($jumlah_ppds_prodi as $value):
            echo "'" .$value['NAMA_PRODI'] ."',";
        endforeach;
      ?>
      ],
      datasets: [
        {
          backgroundColor: [
      'rgba(0, 0, 255, 1)',
      'rgba(138, 43, 226, 1)',
      'rgba(165, 42, 42, 1)',
      'rgba(222, 184, 135, 1)',
      'rgba(95, 158, 160, 1)',
      'rgba(127, 255, 0, 1)',
      'rgba(210, 105, 30, 1)',
      'rgba(255, 127, 80, 1)',
      'rgba(100, 149, 237, 1)',
      'rgba(255, 248, 220, 1)',
      'rgba(220, 20, 60, 1)',
      'rgba(255, 215, 0, 1)',
      'rgba(0, 255, 255, 1)',
      'rgba(0, 0, 139, 1)',
      'rgba(0, 139, 139, 1)',
      'rgba(184, 134, 11, 1)',
      'rgba(85, 107, 47, 1)',
      'rgba(0, 100, 0, 1)',
      'rgba(169, 169, 169, 1)',
      'rgba(189, 183, 107, 1)',
      'rgba(139, 0, 139, 1)'
      ],
          borderColor: '#000000',
          data: [
          <?php
                foreach($jumlah_ppds_prodi as $value):
                    echo "'" .$value['JUMLAH'] ."',";
                endforeach;
            ?>
           ]
        }
      ]
    },
    options: {
      maintainAspectRatio: false,
      tooltips: {
        mode: mode,
        intersect: intersect
      },
      hover: {
        mode: mode,
        intersect: intersect
      },
      legend: {
        display: false
      },
      scales: {
        yAxes: [{
          // display: false,
          gridLines: {
            display: true,
            lineWidth: '4px',
            color: 'rgba(0, 0, 0, .2)',
            zeroLineColor: 'transparent'
          },
          ticks: $.extend({
            beginAtZero: true,

            // Include a dollar sign in the ticks
            // callback: function (value) {
            //   if (value >= 1000) {
            //     value /= 1000
            //     value += 'k'
            //   }

            //   return '$' + value
            // }
          }, ticksStyle)
        }],
        xAxes: [{
          display: true,
          gridLines: {
            display: false
          },
          ticks: ticksStyle
        }]
      }
    }
  })
})

// lgtm [js/unused-local-variable] 
</script>
<script src="<?=base_url()?>assets/vendor/adminlte/plugins/chart.js/Chart.min.js"></script>
<!-- AdminLTE for demo purposes -->
<!-- <script src="<?=base_url()?>assets/vendor/adminlte/dist/js/demo.js"></script> -->
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<!-- <script src="<?=base_url()?>assets/vendor/adminlte/dist/js/pages/dashboard3.js"></script> -->