<style>
 th {
    text-align: Center;
}
</style>

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
              <table class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th class="bg-info">ID PPDS</th>
                    <th class="bg-info">NPM</th>   
                    <th class="bg-info">Nama</th>
                    <th class="bg-info">Personal File</th>
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
                          <td>
                              <?php 
                              if ($data->UP_FILE != null)
                              {?>
                                <a href='<?=base_url()."ppds/Download/file/".$data->UP_FILE;?>' class ="btn btn-primary btn-block">&nbsp; Download PDF &nbsp;<i class="fa fa-download"></i></a>
                              <?php
                              }?>
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