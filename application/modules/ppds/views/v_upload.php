<style>
 th {
    text-align: Center;
    width: auto;
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
                    <th class="bg-info">Nama</th>
                    <th class="bg-info">Personal File</th>
                    <th class="bg-info">Upload</th>
                    <th class="bg-info">Aksi</th>
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
                          <td><?=$data->UP_FILE?></td>
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
                        <td>
                          <button style="font-size:15px" onclick="showUpload()">edit <i class="fa fa-edit"></i></button>
                        </td>
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

<?php foreach ($data_ppds as $data)?>
<!-- Modal edit personal file-->
    <div class="modal fade" id="myModalupload" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title" id="myModalLabel">Edit Personal File</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          </div>
                
            <div class="modal-body">
              <form method="post" action="" enctype="multipart/form-data">
                <div class="row">
                  <div class="col-md-12">
                    <div class="card">
                      <div class="card-body">

                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="exampleInputEmail1">ID PPDS</label>
                              <input type="number" class="form-control" name="id_ppds" id="id_ppds" value="<?=$data->ID_PPDS?>">
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="exampleInputEmail1">NPM</label>
                              <input type="text" class="form-control" name="npm" id="npm" value="<?=$data->NPM?>">
                            </div>
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="exampleInputEmail1">Nama</label>
                              <input type="text" class="form-control" name="npm" id="nama" value="<?=$data->NAMA?>">
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="exampleInputEmail1">Personal File <span class="text-info">(pdf)</span></label>
                              <input type="file" class="form-control" name="file" id="file" accept="application/pdf">
                            </div>
                          </div>
                        </div>

                    </div>
                         <div class="card-footer">
                           <button type="submit" class="btn btn-primary">Submit</button>
                            <a href="<?php echo base_url("/Ppds/view_upload") ?>" class="btn btn-default float-right">Cancel</a>
                            <?php echo form_close();?>
                         </div>
                    </div>
                  </div>
                </div>

              </form>
            </div>
        </div>
      </div>
    </div>
<?php?>


 <script>

  function showUpload() {
    $('#myModalupload').modal({backdrop: 'static', keyoboard: 'false'})
  }
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