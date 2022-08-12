<section class="content">
  <div class="container-fluid">
      <div class="row">
<!-- jumlah ppds aktif -->
        <div class="col-lg-4">
          <div class="small-box bg-info" onclick="showAktif()">
            <div class="inner">
              <p><h2><?=$jumlah_ppds[1]['TOTAL']?> Orang</h2></p>
              <h3><?=$jumlah_ppds[1]['STATUS']?> Aktif</h3>
            </div>
            <div class="icon">
              <i class="nav-icon fas fa-user"></i>
            </div>
          </div>
        </div>
<!-- jumlah ppds lulus -->
        <div class="col-lg-4">
          <div class="small-box bg-success" onclick="showLulus()">
            <div class="inner">
              <p><h2><?=$jumlah_ppds[0]['TOTAL']?> Orang</h2></p>
              <h3><?=$jumlah_ppds[0]['STATUS']?> Lulus</h3>
            </div>
            <div class="icon">
              <i class="nav-icon fas fa-user-graduate"></i>
            </div>
          </div>
        </div>        
<!-- jumlah prodi -->
        <div class="col-lg-4">
          <div class="small-box bg-white" onclick="showProdi()">
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
<!-- jumlah ppds aktif per prodi -->
      <div class="row">
        <div class="col-md">
          <div class="card">
            <div class="card-header border-0">
              <div class="d-flex justify-content-between">
                <h1 class="card-title">Jumlah PPDS Aktif Pada Setiap Program Studi</h1>
              </div>
            </div>
            <div class="card-body">
              <canvas id="sales-chart-aktif" height="500"></canvas>
            </div>
          </div>
        </div>
      </div>

<!-- jumlah ppds lulus per prodi-->
      <div class="row">
        <div class="col-md">
          <div class="card">
            <div class="card-header border-0">
              <div class="d-flex justify-content-between">
                <h1 class="card-title">Jumlah PPDS Lulus Pada Setiap Program Studi</h1>
              </div>
            </div>
            <div class="card-body">
              <canvas id="sales-chart-lulus" height="500"></canvas>
            </div>
          </div>
        </div>
      </div>
<!-- PIE CHART -->
<!-- <div class="card card-danger">
    <div class="card-header">
      <h3 class="card-title">Persentase PPDS Lulus per Tahun</h3>
      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse">
          <i class="fas fa-minus"></i>
        </button>
        <button type="button" class="btn btn-tool" data-card-widget="remove">
          <i class="fas fa-times"></i>
        </button>
      </div>
    </div>
    <div class="card-body"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
      <canvas id="donutChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%; display: block; width: 604px;" width="604" height="250" class="chartjs-render-monitor"></canvas>
    </div>
    <!-card-body -->
    <!-- <div class="card-footer bg-transparent text-right"> -->
      <!-- <span class="text-right"><a href="#" onclick="showDetail('')"><i class="fas fa-external-link-alt"></i></a></span> -->
    <!-- </div> -->
    <!-- /.card-footer -->
 <!-- </div> -->
      <!-- /.card -->
  </div>

</section>

<!-- modal ppds aktif -->
<div class="modal fade" id="myModalaktif" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-md">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">Daftar PPDS Aktif</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
            
        <div class="modal-body">
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th class="bg-info">Nama</th>
                      <th class="bg-info">NPM</th>
                      <th class="bg-info">Program Studi</th>
                      <th class="bg-info">Level Kompetensi</th>  
                    </tr>
                  </thead>
                    <tbody>
                    <?php
                    foreach ($dataaktif as $aktif)
                    {
                    ?>
                    <tr>
                      <td><?=$aktif['NAMA']?></td>
                      <td><?=$aktif['NPM']?></td>
                      <td><?=$aktif['BAGIAN']?></td>
                      <td><?=$aktif['LEVEL_KOMPETENSI']?></td>
                    </tr>
                    <?php
                    }
                    ?>
                    </tbody>
               </table>
              </div>
          </div>
        </div>
    </div>
  </div>
</div>

<!-- modal ppds lulus -->
<div class="modal fade" id="myModallulus" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-md">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">Daftar PPDS Lulus</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
            
        <div class="modal-body">
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th class="bg-info">Nama</th>
                      <th class="bg-info">NPM</th>  
                      <th class="bg-info">Program Studi</th>
                      <th class="bg-info">Periode Lulus</th>  
                    </tr>
                  </thead>
                    <tbody>
                    <?php
                    foreach ($datalulus as $lulus)
                    {
                    ?>
                    <tr>
                      <td><?=$lulus['NAMA']?></td>
                      <td><?=$lulus['NPM']?></td>
                      <td><?=$lulus['BAGIAN']?></td>
                      <td><?=$lulus['PER_LULUS']?></td>
                    </tr>
                    <?php
                    }
                    ?>
                    </tbody>
               </table>
              </div>
          </div>
        </div>
    </div>
  </div>
</div>

<!-- modal daftar prodi -->
<div class="modal fade" id="myModalprodi" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-md">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">Daftar Program Studi</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
            
        <div class="modal-body">
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th class="bg-info">Kode</th>
                      <th class="bg-info">Program Studi</th>  
                    </tr>
                  </thead>
                    <tbody>
                    <?php
                    foreach ($dataprodi as $prodi)
                    {
                    ?>
                    <tr>
                      <td><?=$prodi['KD_PRODI']?></td>
                      <td><?=$prodi['BAGIAN']?></td>
                    </tr>
                    <?php
                    }
                    ?>
                    </tbody>
               </table>
              </div>
          </div>
        </div>
    </div>
  </div>
</div>



<script>
 /* global Chart:false */

$(function () {
  'use strict'

  var ticksStyle = {
    fontColor: '#010202',
    fontStyle: 'bold'
  }

  var mode = 'index'
  var intersect = true

  var $salesChart = $('#sales-chart-aktif')
  // eslint-disable-next-line no-unused-vars
  var salesChart = new Chart($salesChart, {
    type: 'bar',
    data: {
      labels: [
      <?php
        foreach($jumlahppdsAktif as $value):
            echo "'" .$value['BAGIAN'] ."',";
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
            foreach($jumlahppdsAktif as $value):
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
            lineWidth: '1px',
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

$(function () {
  'use strict'

  var ticksStyle = {
    fontColor: '#010202',
    fontStyle: 'bold'
  }

  var mode = 'index'
  var intersect = true

  var $salesChart = $('#sales-chart-lulus')
  // eslint-disable-next-line no-unused-vars
  var salesChart = new Chart($salesChart, {
    type: 'bar',
    data: {
      labels: [
      <?php
        foreach($jumlahppdsLulus as $value):
            echo "'" .$value['BAGIAN'] ."',";
        endforeach;
      ?>
      ],
      datasets: [
        {
          backgroundColor: [
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
      'rgba(0, 0, 255, 1)',
      'rgba(138, 43, 226, 1)',
      'rgba(165, 42, 42, 1)',
      'rgba(222, 184, 135, 1)',
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
            foreach($jumlahppdsLulus as $value):
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
            lineWidth: '1px',
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

function showAktif() {
    $('#myModalaktif').modal({backdrop: 'static', keyoboard:'false'})

}

function showProdi(){
    $('#myModalprodi').modal({backdrop: 'static', keyoboard:'false'})
    
  }

function showLulus(){
    $('#myModallulus').modal({backdrop: 'static', keyoboard:'false'})
    
  }
</script>
<script src="<?=base_url()?>assets/vendor/adminlte/plugins/chart.js/Chart.min.js"></script>
<!-- <script src="../../plugins/chart.js/Chart.min.js"></script> -->
<!-- AdminLTE for demo purposes -->
<!-- <script src="<?=base_url()?>assets/vendor/adminlte/dist/js/demo.js"></script> -->
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<!-- <script src="<?=base_url()?>assets/vendor/adminlte/dist/js/pages/dashboard3.js"></script> -->