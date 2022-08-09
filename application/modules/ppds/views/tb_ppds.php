<?php
  if ($this->session->userdata('message'))
  {
    echo "<script>alert('".($this->session->userdata('message')['message'])."')</script>";
  // echo "<script>showSwal('".($this->session->userdata('message')['type'])."','".($this->session->userdata('message')['message'])."','".($this->session->userdata('message')['head'])."');</script>";
  }
?>

<form method="post" action="/Ppds/submit_insert" enctype="multipart/form-data">
  <section class="content">
    <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">       
                <h3 class="card-title"><?=$subtitle?></h3>
              </div>
                      <!-- /.card-header -->
                        <div class="card-body">
                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group">
                                  <label for="prodi">Program Studi</label>
                                  <select class="form-control select" name="kd_prodi">
                                  <?php
                                    foreach($data_prodi as $data){
                                      echo "<option value='".$data->KD_PRODI."'>".$data->KD_PRODI." | ".$data->BAGIAN."</option>";
                                  }    
                                  ?>
                                  </select>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group">
                                <label for="exampleInputEmail1">Nama PPDS</label>
                                    <input type="text" class="form-control" id="nama" placeholder="Nama Lengkap PPDS" name="nama" maxlength="50" required>
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-4">
                              <div class="form-group">
                                <label for="exampleInputEmail1">NPM</label>
                                    <input type="number" class="form-control" id="npm" placeholder="Nomor Pokok Mahasiswa" name="npm" pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==12) return false;" required>
                              </div>
                            </div>
                            <div class="col-md-4">
                              <div class="form-group">
                                <label for="exampleInputEmail1">Nomor KTP</label>
                                 <input type="number" class="form-control" id="nik" placeholder="Nomor KTP" name="nik" pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==16) return false;" required>
                              </div>
                            </div>
                            <div class="col-md-4">
                              <div class="form-group">
                                <label for="exampleInputEmail1">Periode Masuk</label>
                                 <input type="date" class="form-control" id="per_msk" placeholder="" name="per_msk" value="<?$data_ppds['PER_MSK2']?>" required>
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-3">
                              <div class="form-group">
                                <label for="exampleInputEmail1">Tempat Lahir</label>
                                 <input type="text" class="form-control" id="tmpt_lahir" placeholder="Tempat Lahir" name="tmpt_lahir" maxlength="30" required>
                              </div>
                            </div>
                            <div class="col-md-3">
                              <div class="form-group">
                                <label for="exampleInputEmail1">Tanggal Lahir</label>
                                  <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" value="<?=$data_ppds['TGL_LAHIR2']?>" required>
                              </div> 
                            </div>
                            <div class="col-md-3">
                              <div class="form-group">
                                <label for="exampleInputEmail1">Jenis Kelamin</label>
                                     <select class="form-control select" name="jns_kelamin" required>
                                      <option value="">-- Pilih --</option>
                                     <?php
                                       $jk = array("L","P");
                                          foreach($jk as $data_jk) {
                                     ?>
                                    <option><?php echo $data_jk; ?></option>
                                 <?php } ?>
                                    </select>
                              </div>
                            </div>
                            <div class="col-md-3">
                              <div class="form-group">
                                <label for="exampleInputEmail1">Agama</label>
                                  <select class="form-control select2" name="agama" required>
                                     <option value="">-- Pilih --</option>
                                     <?php
                                       $agama = array("Islam","Kristen","Hindu","Budha","Lainnya");
                                          foreach($agama as $data_agama) {
                                     ?>
                                    <option><?php echo $data_agama; ?></option>
                                 <?php } ?>
                                    </select>
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-12">
                              <div class="form-group">
                                <label for="exampleInputEmail1">Alamat</label>
                                 <input type="text" class="form-control" id="alamat" placeholder="Alamat Sesuai KTP" name="alamat" required>
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-4">
                             <div class="form-group">
                              <label for="exampleInputEmail1">Nomor Handphone</label>
                                 <input type="number" class="form-control" id="no_hp" placeholder="No Handphone Aktif" name="no_hp" pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==13) return false;" required>
                              </div>
                            </div>
                            <div class="col-md-4">
                              <div class="form-group">
                                <label for="exampleInputEmail1">Alamat Email</label>
                                  <input type="text" class="form-control" id="email" title="please enter valid email [test@test.com]." placeholder="e-mail aktif" name="email" maxlength="50" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required>
                              </div>
                            </div>
                              <div class="col-md-4">
                                <div class="form-group">
                                  <label for="exampleInputEmail1">Status</label>
                                  <select class="form-control select2" name="status">
                                    <!-- <option value="Aktif">Aktif</option> -->
                                       <?php
                                         $status = array("Aktif","Lulus");
                                            foreach($status as $data_status) {
                                       ?>
                                    <option><?php echo $data_status; ?></option>
                                       <?php } ?>
                                  </select>
                                </div>
                              </div>
                          </div>
                          <!-- <div class="row">
                            <div class="col-md-4">
                              <div class="form-group">
                                <label for="upload">Upload Personal File</label>
                                  <div class="custom-file">
                                    <?php echo form_open_multipart('ppds/upload/aksi_upload');?>
                                    <input type="file" class="custom-file-input" name ="berkas" id="custom-file" accept="application/pdf">
                                      <label class="custom-file-label" for="custom-file">Upload File</label>
                                  </div>
                              </div>
                            </div>
                          </div> -->
                  </div>
            </div>
          </div>
        </div>
    </div>
  </section>
                        <div class="card-footer">
                          <button type="submit" class="btn btn-primary">Submit</button>
                           <a href="<?php echo base_url("/Ppds") ?>" class="btn btn-default float-right">Cancel</a>
                           <?php echo form_close();?>
                        </div>
</form>

<script src="<?=base_url()?>assets/vendor/adminlte//plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<script>
$(function () {
  bsCustomFileInput.init();
});
</script>