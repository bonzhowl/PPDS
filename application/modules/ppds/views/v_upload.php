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
      
    
   <!-- <div class="form-group col-3">
      <label for="exampleInputFile">UPLOAD BERKAS PERSONAL FILE</label>
        <div class="input-group">
            <div class="custom-file">
              <input type="file" class="custom-file-input" id="exampleInputFile">
              <label class="custom-file-label" for="exampleInputFile">Choose file</label>
            </div>
          <div class="input-group-append">
          <span class="input-group-text">Upload</span>
          </div>
        </div>
   </div> -->
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered table-striped" id="datatable">
                <thead>
                  <tr>
                    <th class="bg-info">ID PPDS</th>
                    <th class="bg-info">NPM</th>
                    <th class="bg-info">NAMA</th>
                    <th class="bg-info">PERSONAL FILE</th>
                    <th class="bg-info">Upload</th>
                  </tr>
                </thead>
                    <tbody>
                      
                      <?php
                      foreach ($data_ppds as $data)
                      {
                      ?>
                      <tr>
                          <td><?=$data->ID_PPDS?></td>
                          <td><?=$data->NPM?></td>
                          <td><?=$data->NAMA?></td>
                          <td class="nav-icon far fa-trash-alt float-right"><?=$data->UP_FILE?></td>
                          <td><?php echo form_open_multipart('ppds/upload/aksi_upload');?>
                        <?php
                        if ($data->UP_FILE == null)
                        {?>
                          <input type="file" name="berkas" accept="application/pdf">
                          <input type="hidden" name="id_ppds" value="<?=$data->ID_PPDS?>">
                          <br>
                          <button type="submit" value="upload">Upload File</button>
                        <?php
                        }?>
                          
                        <?php echo form_close();?></td>
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
      // "buttons": ["excel", "pdf", "print", "colvis"] //"csv","copy"
    }).buttons().container().appendTo('#datatable_wrapper .col-md-6:eq(0)');
  });  
 </script>