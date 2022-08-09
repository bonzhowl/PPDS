<div class="card card-outline card-danger">
     <div class="card-header">
         <h3 class="card-title"><?=$subtitle?></h3>
     </div>
  <!-- /.card-header -->
  <form method="post" action="<?=base_url('/Ppds/SubmitUpdateStatus')?>">
   <div class="card-body">
      <div class="row">
            <div class="form-group">
               <input type="hidden" name="id_ppds" value="<?=$data_ppds->ID_PPDS?>">
            </div>
            <div class="form-group">
               <label for="exampleInputEmail1">NPM</label>
                  <input type="number" class="form-control" id="npm" name="npm" value="<?=$data_ppds->NPM?>" readonly="readonly">
            </div>
          <div class="col-md">
            <div class="form-group">
               <label for="exampleInputEmail1">Nama PPDS</label>
                  <input type="text" class="form-control" id="nama" name="nama" value="<?=$data_ppds->NAMA?>" readonly="readonly">
            </div>
         </div>
         <div class="col-md">
            <div class="form-group">
               <label for="exampleInputEmail1">Level Kompetensi</label>
                  <select class="form-control select2" name="level" id="level">
                     <option value="0" <?php if ($data_ppds->LEVEL_KOMPETENSI=="") echo "selected"?>></option>
                     <option value="Level 1" <?php if ($data_ppds->LEVEL_KOMPETENSI=="Level 1") echo "selected"?>>Level 1</option>
                     <option value="Level 2" <?php if ($data_ppds->LEVEL_KOMPETENSI=="Level 2") echo "selected"?>>Level 2</option>
                     <option value="Level 3" <?php if ($data_ppds->LEVEL_KOMPETENSI=="Level 3") echo "selected"?>>Level 3</option>
                  </select>
            </div>
         </div>
         <div class="col-md">
            <div class="form-group">
               <label for="">Periode Masuk</label>
                  <input type="date" class="form-control" id="per_msk" name="per_msk" value="<?=$data_ppds->PER_MSK?>" readonly="readonly">
            </div>
         </div>
         <div class="col-md">
            <div class="form-group">
               <label for="">Periode Lulus</label>
                  <input type="date" class="form-control" id="per_lulus" name="per_lulus" value="<?=$data_ppds->PER_LULUS?>">
            </div>
         </div>
         <div class="col-md">
            <div class="form-group">
               <label for="exampleInputEmail1">Status</label>
                  <select class="form-control select2" name="status" id="status">
                     <option value="0" <?php if ($data_ppds->STATUS=="") echo "selected"?>></option>
                     <option value="Aktif" <?php if ($data_ppds->STATUS=="Aktif") echo "selected"?>>Aktif</option>
                     <option value="Lulus" <?php if ($data_ppds->STATUS=="Lulus") echo "selected"?>>Lulus</option>
                  </select>
            </div> 
         </div>
      </div>
   </div>
<!-- /.card-body -->

    <div class="card-footer">
      <button type="submit" class="btn btn-primary">Submit</button>
      <a href="<?php echo base_url("/Ppds/view_akademik") ?>" class="btn btn-default float-right">Cancel</a>
    </div>
  </form>
</div>