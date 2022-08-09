<div class="card card-outline card-danger">
  <div class="card-header">
      <h3 class="card-title"><?=$subtitle?></h3>
  </div>
  <!-- /.card-header -->
  <form method="post" action="<?=base_url('/Ppds/submit_update')?>">
                     <div class="card-body">
                       <!-- /.row 1 -->
                        <div class="row">
                           <div class="col-md-3">
                              <div class="form-group">
                                 <input type="hidden" name="id_ppds" value="<?=$data_ppds->ID_PPDS?>">
                                    <label>Program Studi</label>
                                      <select class="form-control select2" name="kd_prodi" style="width: 100%;">
                                       <?php
                                          foreach($data_prodi as $data){
                                             $select="";
                                                if($data->KD_PRODI==$data_ppds->KD_PRODI) 
                                                {
                                                   $select="selected";
                                                }
                                                echo "<option ".$select." value='".$data->KD_PRODI."'>".$data->KD_PRODI." | ".$data->BAGIAN."</option>";
                                          }    
                                       ?>
                                      </select>
                              </div>
                           </div>
                           <div class="col-md-3">
                              <div class="form-group">
                                 <label for="exampleInputEmail1">Nama PPDS</label>
                                    <input type="text" class="form-control" id="nama" name="nama" maxlength="50" value="<?=$data_ppds->NAMA?>">
                              </div>
                           </div>
                           <div class="col-md-3">
                              <div class="form-group">
                                 <label for="exampleInputEmail1">NPM</label>
                                    <input type="number" class="form-control" id="npm" name="npm" maxlength="12" value="<?=$data_ppds->NPM?>">
                              </div>
                           </div>
                           <div class="col-md-3">
                              <div class="form-group">
                                 <label for="exampleInputEmail1">Nomor KTP</label>
                                    <input type="number" class="form-control" id="nik" name="nik" value="<?=$data_ppds->NIK?>" maxlength="16">
                              </div>  
                           </div>
                        </div>

                        <!-- /.row 2 -->
                        <div class="row">
                           <div class="col-md-3">
                              <div class="form-group">
                                 <label for="exampleInputEmail1">Tempat Lahir</label>
                                    <input type="text" class="form-control" id="tmpt_lahir" name="tmpt_lahir" value="<?=$data_ppds->TMPT_LAHIR?>" maxlength="30">
                              </div> 
                           </div>
                           <div class="col-md-3">
                              <div class="form-group">
                                 <label for="exampleInputEmail1">Tanggal Lahir</label>
                                    <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" value="<?=$data_ppds->TGL_LAHIR2?>">
                              </div> 
                           </div>
                           <div class="col-md-3">
                              <div class="form-group">
                                 <label for="">Jenis Kelamin</label>
                                    <select class="form-control select2" name="jns_kelamin">
                                       <option value="" <?php if ($data_ppds->JNS_KELAMIN=="") echo "selected"?>>--Pilih--</option>
                                       <option value="L" <?php if ($data_ppds->JNS_KELAMIN=="L") echo "selected"?>>L</option>
                                       <option value="P" <?php if ($data_ppds->JNS_KELAMIN=="P") echo "selected"?>>P</option>
                                    </select>
                              </div> 
                           </div>
                           <div class="col-md-3">
                              <div class="form-group">
                                 <label for="exampleInputEmail1">Agama</label>
                                    <select class="form-control select2" name="agama">
                                       <option value="" <?php if ($data_ppds->AGAMA=="") echo "selected"?>>--Pilih--</option>
                                       <option value="Islam" <?php if ($data_ppds->AGAMA=="Islam") echo "selected"?>>Islam</option>
                                       <option value="Kristen" <?php if ($data_ppds->AGAMA=="Kristen") echo "selected"?>>Kristen</option>    
                                       <option value="Hindu" <?php if ($data_ppds->AGAMA=="Hindu") echo "selected"?>>Hindu</option>    
                                       <option value="Budha" <?php if ($data_ppds->AGAMA=="Budha") echo "selected"?>>Budha</option>    
                                       <option value="Lainnya" <?php if ($data_ppds->AGAMA=="Lainnya") echo "selected"?>>Lainnya</option>    
                                    </select>
                              </div>
                           </div> 
                        </div>

                        <!-- /.row 3 -->
                        <div class="row">
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label for="exampleInputEmail1">Alamat</label>
                                    <input type="text" class="form-control" id="alamat" name="alamat" value="<?=$data_ppds->ALAMAT?>">
                              </div> 
                           </div>
                           <div class="col-md-3">
                              <div class="form-group">
                                 <label for="exampleInputEmail1">Nomor Handphone</label>
                                    <input type="number" class="form-control" id="no_hp" name="no_hp" maxlength="13" value="<?=$data_ppds->NO_HP?>">
                              </div>
                           </div>
                           <div class="col-md-3">
                              <div class="form-group">
                                 <label for="exampleInputEmail1">E-Mail</label>
                                    <input type="text" class="form-control" id="email" name="email" maxlength="50" value="<?=$data_ppds->EMAIL?>">
                              </div> 
                           </div>
                        </div>

                        <!-- /.row 4 -->
                        <div class="row">
                           <div class="col-md-3">
                              <div class="form-group">
                                  <label for="exampleInputEmail1">Level</label>
                                    <select class="form-control select2" name="level" id="level">
                                       <option value="" <?php if ($data_ppds->LEVEL_KOMPETENSI=="") echo "selected"?>>--Pilih--</option>
                                       <option value="Level 1" <?php if ($data_ppds->LEVEL_KOMPETENSI=="Level 1") echo "selected"?>>Level 1</option>
                                       <option value="Level 2" <?php if ($data_ppds->LEVEL_KOMPETENSI=="Level 2") echo "selected"?>>Level 2</option>
                                       <option value="Level 3" <?php if ($data_ppds->LEVEL_KOMPETENSI=="Level 3") echo "selected"?>>Level 3</option>
                                    </select>
                              </div>
                           </div>
                           <div class="col-md-3">
                              <div class="form-group">
                                 <label for="">Periode Masuk</label>
                                    <input type="date" class="form-control" id="per_msk" name="per_msk" value="<?=$data_ppds->PER_MSK?>">
                              </div>
                           </div>
                           <div class="col-md-3">
                              <div class="form-group">
                                 <label for="">Periode Lulus</label>
                                    <input type="date" class="form-control" id="per_lulus" name="per_lulus" value="<?=$data_ppds->PER_LULUS?>">
                              </div>
                           </div>
                           <div class="col-md-3">
                              <div class="form-group">
                                 <label for="exampleInputEmail1">Status</label>
                                    <select class="form-control select2" name="status" id="status">
                                       <!-- <option value="" <?php if ($data_ppds->STATUS=="") echo "selected"?>>--Pilih--</option> -->
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
                  <a href="<?php echo base_url("/Ppds") ?>" class="btn btn-default float-right">Cancel</a>
                </div>
  </form>
</div>