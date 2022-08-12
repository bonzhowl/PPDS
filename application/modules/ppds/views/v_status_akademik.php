<style>
 th {
    text-align: Center;
}
</style>

<?php
if ($this->session->userdata('message'))
 {
  echo "<script>alert('".($this->session->userdata('message')['message'])."')
  </script>";
 }
?>

<section class="content">
  <div class="container-fluid">
  <div class="col-12">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title"><?=$subtitle?></h3>    
      </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered table-striped" id="datatable">
                <thead>
                  <tr>
                    <?php if ($akses ==2): ?>
                      <?= "";?>
                      <?php else:?>
                    <!-- <th class="bg-info">AKSI</th> -->
                    <?php endif?>
                    <th class="bg-info" hidden>ID PPDS</th>
                    <th class="bg-info">NPM</th>   
                    <th class="bg-info">Nama</th>
                    <th class="bg-info">Level Kompetensi</th>
                    <th class="bg-info">Periode Masuk</th>
                    <th class="bg-info">Periode Lulus</th>
                    <th class="bg-info">Status</th>
                  </tr>
                </thead>
                    <tbody>
                       <?php  
                        foreach ($list_ppds as $data) 
                        {
                        ?>
                      <tr>
                        <?php if ($akses ==2):?>
                          <?= "";?>
                        <?php else:?>
                          <!-- <td style="text-align:center"><?php echo anchor('Ppds/ViewUpdateStatus/'.$data->ID_PPDS," <i class='nav-icon fas fa-edit'></i>");?> -->
                          </td>
                        <?php endif?>
                          <td hidden><?=$data->ID_PPDS?></td>
                          <td style="text-align:center"><?=$data->NPM?></td>
                          <td><?=$data->NAMA?></td>
                          <td style="text-align:center"><?=$data->LEVEL_KOMPETENSI?></td>
                          <td style="text-align:center"><?=$data->PER_MSK?></td>
                          <td style="text-align:center"><?=$data->PER_LULUS?></td>
                          <td style="text-align:center">
                          <!-- <td style="text-align:center" bgcolor="<?=$data->STATUS == 'Aktif' ? '' : '#ff4040' ?>"> -->
                          <?php 
                          if ($data->STATUS == 'Aktif'){
                            echo '<button type="button" id="btnAktif" onclick="lulusbtn('."'".$data->ID_PPDS."'".')" class="btn btn-success btn-sm">Aktif</button>'; 
                          }else{
                            echo '<button type="button" id="btnLulus" disable="disabled" class="btn btn-danger btn-sm">Lulus</button>';
                          }
                          ?></td>
                          
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
</section>
<script>
   $(function () 
  {
    $("#datatable").DataTable(
    {
      "responsive": false, 
      "lengthChange": true, 
      "autoWidth": false,
      "ordering": false,
      // "buttons": ["excel", "pdf", "print", "colvis"] //"csv","copy"
    }).buttons().container().appendTo('#datatable_wrapper .col-md-6:eq(0)');
  });

  function lulusbtn(id_ppds)
  {
    // console.log('TES')
        $.ajax({
            url : "<?php echo site_url('Ppds/insert_status_akademik')?>/" + id_ppds
        });
        refresh();       
  }  

  //window.setInterval('refresh()', 15000);   // Call a function every 15000 milliseconds (OR 15 seconds).

  function fillData(dataJson) {
    // body...
    var status=[
        {text:"Lulus",type:"bg-danger"}
    ];
  }

  function refresh() {
        window.location.reload();
    }

</script>