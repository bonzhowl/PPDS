<style>
 th {
    text-align: Center;
    width: auto;
    }
</style>

<!--show toast-->
<?php
  if ($this->session->userdata('message'))
  {
    echo "<script>alert('".($this->session->userdata('message')['message'])."')</script>";
  // echo "<script>showSwal('".($this->session->userdata('message')['type'])."','".($this->session->userdata('message')['message'])."','".($this->session->userdata('message')['head'])."');</script>";
  }
?>
    <div class="card">
              <div class="card-header">
                <h1 class="card-title"><?=$subtitle?></h1>
                <div class="float-sm-right">
                    
                    <!-- Button trigger modal -->
                    <a href=# onclick="add_ppds()" class="btn btn-primary btn-lg"><i class="fas fa-plus"></i> Add</a>
                    
								</div>
			  			</div>
          
            	<!-- /.card-header -->
		           <div class="card-body">
		              <div class="table-responsive">
		                <table class="table table-bordered table-striped" id="datatable">
		                  <thead>
		                      <tr>
		                      	<?php if ($akses ==2): ?>
		                         	<?= "";?>
		                          <?php else: ?>
		                          <th class="bg-info">Aksi</th>
		                        <?php endif ?>
		                          <th class="bg-info" hidden>ID PPDS</th>
		                          <th class="bg-info">Kode Program Studi</th>
		                          <th class="bg-info">Program Studi</th>  
		                          <th class="bg-info">NAMA</th>
		                          <th class="bg-info">NPM</th>
		                          <?php
		                          	if ($akses ==2){
		                          		echo"";
		                          	}
		                          	else
		                          	{
		                          ?>
		                          <th class="bg-info">Nomor KTP</th>
		                          <th class="bg-info">Tempat Lahir</th>
		                          <th class="bg-info">Tanggal Lahir</th>
		                          <th class="bg-info">Jenis Kelamin</th>
		                          <th class="bg-info">Agama</th>
		                          <th class="bg-info">Alamat</th>
		                          <th class="bg-info">Nomor Handphone</th>
		                          <th class="bg-info">E-Mail</th>
		                          <?php }?>
		                          <!-- <th class="bg-info">Periode Masuk</th> -->
		                          <th class="bg-info">Status</th>
		                      </tr>
		                  </thead>
		                          <tbody>
		                              <?php  
		                              foreach ($list_ppds as $data) 
		                              {
		                              ?>
		                              <tr>		                                
		                               	<?php if ($akses ==1){ ?>
		                               	<td>	
		                               		<?php echo anchor('Ppds/view_update/'.$data->ID_PPDS," <i class='nav-icon far fa-edit'></i>");?>
		                             				 &nbsp;
		                                   <a href=# onclick="delete_ID('<?=$data->ID_PPDS?>')"><i class='nav-icon far fa-trash-alt'></i></a>
		                             			<?php	 
		                             				 }
		                             				 else
		                             				 {
		                               		?>
		                                </td>
		                                <?php }?>
		                                  <td hidden><?=$data->ID_PPDS?></td>
		                                  <td style="text-align:center"><?=$data->KD_PRODI?></td>
		                                  <td><?=$data->BAGIAN?></td>
		                                  <td><?=$data->NAMA?></td>
		                                  <td style="text-align:center"><?=$data->NPM?></td>
		                                  <?php
		                                  	if ($akses ==2){
		                                  		echo"";
		                                  	}
		                                  	else
		                                  	{
		                                  ?>
		                                  <td style="text-align:center"><?=$data->NIK?></td>
		                                  <td><?=$data->TMPT_LAHIR?></td>
		                                  <td><?=$data->TGL_LAHIR?></td>
		                                  <td><?=$data->JNS_KELAMIN?></td>
		                                  <td><?=$data->AGAMA?></td>
		                                  <td><?=$data->ALAMAT?></td>
		                                  <td style="text-align:center"><?=$data->NO_HP?></td>
		                                  <td><?=$data->EMAIL?></td>
		                                  <?php }?>
		                                  <!-- <td><?=$data->PER_MSK?></td> -->
                                     	<td style="text-align:center" bgcolor="<?=$data->STATUS == 'Aktif' ? '' : '#FF0000' ?>" 
																			><?=$data->STATUS?></td>
		                              </tr>
		                              <?php
		                              }   
		                              ?>
		                          </tbody>
		                 </table>
		              </div>
		          </div>
    </div>              


	<!-- Modal -->
   	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			<div class="modal-dialog modal-lg" role="document">
				<div class="modal-content">
					<div class="modal-header">
				  	<h4 class="modal-title" id="myModalLabel">Tambah PPDS</h4>
				  	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					</div>
							  
						<div class="modal-body">
							<form method="post" action="/Ppds/submit_insert" enctype="multipart/form-data">
								<div class="row">
									<div class="col-md-12">
										<div class="card">
											<div class="card-body">
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label for="prodi">Program Studi</label>
															<select class="form-control select2" name="kd_prodi">
																<!-- <option>-- Pilih --</option> -->
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
														<input type="text" class="form-control" id="nama" placeholder="Nama Lengkap PPDS" name="nama" onkeypress="return event.charCode < 48 || event.charCode  >57" maxlength="50" required>
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
												  <div class="col-md-5">
														<div class="form-group">
															<label for="exampleInputEmail1">Nomor KTP</label>
															<input type="number" class="form-control" id="nik" placeholder="Nomor KTP" name="nik" pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==16) return false;" required>
														</div>
												  </div>
												  <div class="col-md-3">
														<div class="form-group">
															<label for="exampleInputEmail1">Periode Masuk</label>
															<input type="date" class="form-control" id="per_msk" placeholder="" name="per_msk" value="<?=$data_ppds['PER_MSK2']?>" required>
														</div>
												  </div>
												</div>
												  
												<div class="row">
												  <div class="col-md-4">
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
												  <div class="col-md-2">
														<div class="form-group">
															<label for="exampleInputEmail1">Jenis Kelamin</label>
																<select class="form-control select2" name="jns_kelamin" required>
																	<option value="">-- Pilih --</option>	
																	<option value="L">L</option>
																	<option value="P">P</option>
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
															<input type="text" class="form-control" id="email" title="please enter valid email [test@test.com]." placeholder="e-mail aktif" name="email"  maxlength="50" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required>
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
											</div>
										</div>
									</div>
								</div>
							
											  <div class="card-footer">
											     <button type="submit" class="btn btn-primary">Submit</button>
												    <a href="<?php echo base_url("/Ppds") ?>" class="btn btn-default float-right">Cancel</a>
												    <?php echo form_close();?>
											  </div>
							</form>
						</div>
      	</div>
     	</div>
		</div>
  
  <script>
  $(function () 
  {
    $("#datatable").DataTable(
    {
    	"ordering": false,
      "responsive": false, 
      "lengthChange": true, 
      "autoWidth": false,
      "buttons": ["excel", "pdf", "print", "colvis"] //"csv","copy"
    }).buttons().container().appendTo('#datatable_wrapper .col-md-6:eq(0)');
    // $('#example2').DataTable({
    //   "paging": true,
    //   "lengthChange": false,
    //   "searching": false,
    //   "info": true,
    //   "autoWidth": false,
    //   "responsive": true,
    // });
  });

  function delete_ID(ID_PPDS)
{
  var base_url="<?=base_url()?>";
  if (confirm("Delete PPDS dengan ID "+ID_PPDS+"?")) {
    //alert(base_url+"Jabatan/delete/"+id_jabatan);
    window.location.href = base_url+"Ppds/delete/"+ID_PPDS;
  } 
}
	
	function add_ppds(){
		$('#myModal').modal({backdrop: 'static', keyoboard:'false'})
	}

$(function () {
  bsCustomFileInput.init();
});
</script>
<script src="<?=base_url()?>assets/vendor/adminlte//plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>