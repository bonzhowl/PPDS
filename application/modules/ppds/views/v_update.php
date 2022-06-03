<div class="card card-outline card-danger">
  <div class="card-header">
      <h3 class="card-title"><?=$subtitle?></h3>
  </div>
  <!-- /.card-header -->
  <form method="post" action="<?=base_url('/Ppds/submit_update')?>">
                     <div class="card-body">
                        <div class="row">
                           <div class="col-md-6">
                              <div class="form-group">
                                 <input type="hidden" name="id_ppds" value="<?=$data_ppds->ID_PPDS?>">
                                    <label>Program Studi</label>
                                      <select class="form-control select2" name="kd_prodi" style="width: 100%;">
                                       <?php
                                          foreach($data_prodi as $data){
                                                echo "<option value='".$data->KD_PRODI."'>".$data->KD_PRODI." | ".$data->NAMA_PRODI."</option>";
                                          }    
                                       ?>
                                      </select>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label for="exampleInputEmail1">Nama PPDS</label>
                                    <input type="text" class="form-control" id="nama" name="nama" value="<?=$data_ppds->NAMA?>">
                              </div>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label for="exampleInputEmail1">NPM</label>
                                    <input type="text" class="form-control" id="npm" name="npm" value="<?=$data_ppds->NPM?>">
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label for="exampleInputEmail1">Nomor KTP</label>
                                    <input type="text" class="form-control" id="nik" name="nik" value="<?=$data_ppds->NIK?>">
                              </div>  
                           </div>
                         </div>
                         <div class="row">
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label for="exampleInputEmail1">Tempat Lahir</label>
                                    <input type="text" class="form-control" id="tmpt_lahir" name="tmpt_lahir" value="<?=$data_ppds->TMPT_LAHIR?>">
                              </div> 
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label for="exampleInputEmail1">Tanggal Lahir</label>
                                    <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" value="<?=$data_ppds->TGL_LAHIR2?>">
                              </div> 
                           </div>
                         </div>
                         <div class="row">
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label for="">Jenis Kelamin</label>
                                    <select class="form-control select2" name="jns_kelamin">
                                       <option id="L" name="L">L</option>
                                       <option id="P" name="P">P</option>
                                    </select>
                                    <!-- <input type="text" class="form-control" id="jns_kelamin" name="jns_kelamin" value="<?=$data_ppds->JNS_KELAMIN?>"> -->
                              </div> 
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label for="exampleInputEmail1">Agama</label>
                                    <select class="form-control select2" name="agama">
                                     <option id="islam" name="islam" >Islam</option>
                                     <option id="kristen" name="kristen" >Kristen</option>
                                     <option id="hindu" name="hindu" >Hindu</option>
                                     <option id="budha" name="budha" >Budha</option>
                                     <option id="lainnya" name="lainnya" >Lainnya</option>
                                    </select>
                                    <!-- <input type="text" class="form-control" id="agama" name="agama" value="<?=$data_ppds->AGAMA?>"> -->
                              </div> 
                           </div>
                         </div>
                         <div class="row">
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label for="exampleInputEmail1">Alamat</label>
                                    <input type="text" class="form-control" id="alamat" name="alamat" value="<?=$data_ppds->ALAMAT?>">
                              </div> 
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label for="exampleInputEmail1">Nomor Handphone</label>
                                    <input type="text" class="form-control" id="no_hp" name="no_hp" value="<?=$data_ppds->NO_HP?>">
                              </div>
                           </div>
                         </div>
                         <div class="row">  
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label for="exampleInputEmail1">E-Mail</label>
                                    <input type="text" class="form-control" id="email" name="email" value="<?=$data_ppds->EMAIL?>">
                              </div> 
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label for="">Periode Masuk</label>
                                    <input type="date" class="form-control" id="per_msk" name="per_msk" value="<?=$data_ppds->PER_MSK2?>">
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