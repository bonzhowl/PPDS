<style>
    /**
 *
 * Style.css buat dropzone manual
 *
 */
.container {
  padding: 50px 200px;
}
.box {
  position: relative;
  background: #ffffff;
  width: 100%;
}
.box-header {
  color: #444;
  display: block;
  padding: 10px;
  position: relative;
  border-bottom: 1px solid #f4f4f4;
  margin-bottom: 10px;
}
.box-tools {
  position: absolute;
  right: 10px;
  top: 5px;
}
.dropzone-wrapper {
  border: 2px dashed #91b0b3;
  color: #92b0b3;
  position: relative;
  height: 150px;
}
.dropzone-desc {
  position: absolute;
  margin: 0 auto;
  left: 0;
  right: 0;
  text-align: center;
  width: 40%;
  top: 50px;
  font-size: 16px;
}
.dropzone,
.dropzone:focus {
  position: absolute;
  outline: none !important;
  width: 100%;
  height: 150px;
  cursor: pointer;
  opacity: 0;
}
.dropzone-wrapper:hover,
.dropzone-wrapper.dragover {
  background: #ecf0f5;
}
.preview-zone {
  text-align: center;
}
.preview-zone .box {
  box-shadow: none;
  border-radius: 0;
  margin-bottom: 0;
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
		                      	<?php
		                          	if ($akses ==2){
		                          		echo"";
		                          	}
		                          	else
		                          	{
		                          ?>
		                          <th class="bg-gray">Aksi</th>
		                        <?php }?>
		                          <th class="bg-gray">ID PPDS</th>
		                          <th class="bg-gray">Kode Program Studi</th>
		                          <th class="bg-gray">Program Studi</th>  
		                          <th class="bg-gray">Nama</th>
		                          <th class="bg-gray">NPM</th>
		                          <?php
		                          	if ($akses ==2){
		                          		echo"";
		                          	}
		                          	else
		                          	{
		                          ?>
		                          <th class="bg-gray">Nomor KTP</th>
		                          <th class="bg-gray">Tempat Lahir</th>
		                          <th class="bg-gray">Tanggal Lahir</th>
		                          <th class="bg-gray">Jenis Kelamin</th>
		                          <th class="bg-gray">Agama</th>
		                          <th class="bg-gray">Alamat</th>
		                          <th class="bg-gray">Nomor Handphone</th>
		                          <th class="bg-gray">Email</th>
		                          <?php }?>
		                          <th class="bg-gray">Periode Masuk</th>
		                      </tr>
		                  </thead>
		                          <tbody>
		                              <?php  
		                              foreach ($list_ppds as $data) 
		                              {
		                              ?>
		                              <tr>		                                
		                               	<?php if ($akses ==1){ ?>
		                               	<td class>	
		                               		<?php echo anchor('Ppds/view_update/'.$data->ID_PPDS," <i class='nav-icon fas fa-edit'></i>");?>
		                             				 &nbsp;&nbsp;|&nbsp;&nbsp;
		                                   <a href=# onclick="delete_ID('<?=$data->ID_PPDS?>')"><i class='nav-icon fas fa-trash'></i></a>
		                             			<?php	 
		                             				 }
		                             				 else
		                             				 {
		                               		?>
		                                </td>
		                                <?php }?>
		                                  <td><?=$data->ID_PPDS?></td>
		                                  <td><?=$data->KD_PRODI?></td>
		                                  <td><?=$data->NAMA_PRODI?></td>
		                                  <td><?=$data->NAMA?></td>
		                                  <td><?=$data->NPM?></td>
		                                  <?php
		                                  	if ($akses ==2){
		                                  		echo"";
		                                  	}
		                                  	else
		                                  	{
		                                  ?>
		                                  <td><?=$data->NIK?></td>
		                                  <td><?=$data->TMPT_LAHIR?></td>
		                                  <td><?=$data->TGL_LAHIR?></td>
		                                  <td><?=$data->JNS_KELAMIN?></td>
		                                  <td><?=$data->AGAMA?></td>
		                                  <td><?=$data->ALAMAT?></td>
		                                  <td><?=$data->NO_HP?></td>
		                                  <td><?=$data->EMAIL?></td>
		                                  <?php }?>
		                                  <td><?=$data->PER_MSK?></td>
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
			<div class="modal-dialog modal-xl" role="document">
				<div class="modal-content">
					<div class="modal-header">
				  	<h4 class="modal-title" id="myModalLabel">Input Data</h4>
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
														<input type="text" class="form-control" id="nama" placeholder="Nama Lengkap PPDS" name="nama" onkeypress="return event.charCode < 48 || event.charCode  >57" required>
													</div>
												  </div>
												</div>

												<div class="row">
												  <div class="col-md-3">
													<div class="form-group">
														<label for="exampleInputEmail1">NPM</label>
														<input type="number" class="form-control" id="npm" placeholder="Nomor Pokok Mahasiswa" name="npm" required >
													</div>
												  </div>
												  <div class="col-md-5">
													<div class="form-group">
														<label for="exampleInputEmail1">Nomor KTP</label>
														<input type="text" class="form-control" id="nik" placeholder="Nomor KTP" name="nik" required>
													</div>
												  </div>
												  <div class="col-md-4">
													<div class="form-group">
														<label for="exampleInputEmail1">Periode Masuk</label>
														<input type="date" class="form-control" id="per_msk" placeholder="" name="per_msk" value="<?=$data_ppds['PER_MSK_PPDS2']?>" required>
													</div>
												  </div>
												</div>
												  
												<div class="row">
												  <div class="col-md-2">
													<div class="form-group">
														<label for="exampleInputEmail1">Tempat Lahir</label>
														<input type="text" class="form-control" id="tmpt_lahir" placeholder="Tempat Lahir" name="tmpt_lahir" required>
													</div>
												  </div>
												  <div class="col-md-2">
													<div class="form-group">
														<label for="exampleInputEmail1">Tanggal Lahir</label>
														<input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" value="<?=$data_ppds['TGL_LAHIR2']?>" required>
													</div>
												  </div>
												  <div class="col-md-2">
													<div class="form-group">
														<label for="exampleInputEmail1">Jenis Kelamin</label>
														<select class="form-control select2" name="jns_kelamin" required>
														<option value="L">L</option>
														<option value="P">P</option>
														</select>
													</div>
												  </div>
												  <div class="col-md-2">
													<div class="form-group">
														<label for="exampleInputEmail1">Agama</label>
														<select class="form-control select2" name="agama" required>
														<option value="Islam">Islam</option>
														<option value="Kristen">Kristen</option>
														<option value="Hindu">Hindu</option>
														<option value="Budha">Budha</option>
														<option value="Lainnya">Lainnya</option>
														</select>
													</div>
												  </div>
												  <div class="col-md-2">
													<div class="form-group">
														<label for="exampleInputEmail1">Nomor Handphone</label>
														<input type="text" class="form-control" id="no_hp" placeholder="No Handphone Aktif" name="no_hp" required>
													</div>
												  </div>
												</div>

												<div class="row">
												  <div class="col-md-6">
													<div class="form-group">
														<label for="exampleInputEmail1">Alamat</label>
														<input type="text" class="form-control" id="alamat" placeholder="Alamat Sesuai KTP" name="alamat" required>
													</div>
												  </div>
												  <div class="col-md-4">
													<div class="form-group">
														<label for="exampleInputEmail1">Alamat Email</label>
														<input type="text" class="form-control" id="email" placeholder="e-mail aktif" name="email" required>
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
      "responsive": false, 
      "lengthChange": true, 
      "autoWidth": false,
      "buttons": ["excel", "pdf", "print", "colvis"] //"csv","copy"
    }).buttons().container().appendTo('#datatable_wrapper .col-md-6:eq(0)');
    // $('#example2').DataTable({
    //   "paging": true,
    //   "lengthChange": false,
    //   "searching": false,
    //   "ordering": true,
    //   "info": true,
    //   "autoWidth": false,
    //   "responsive": true,
    // });
  });

  function delete_ID(ID_PPDS)
{
  var base_url="<?=base_url()?>";
  if (confirm("Delete PPDS dengan ID "+ID_PPDS+" ?")) {
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


