<style>
 th {
    text-align: Center;
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
        <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h1 class="card-title"><?=$subtitle?></h1>
                <div class="float-sm-right">
       					 <a href="<?php echo base_url("/Ppds/view_insert") ?>" id="btn_to_action" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i> Add</a>
              	</div>
              </div>

            <!-- /.card-header -->
						    	<div class="card-body">
										<div class="table-responsive">
											<table class="table table-bordered table-striped" id="datatable">
						  					<thead>
													<tr>
														<th class="bg-info">Aksi</th>
														<th class="bg-info">ID PPDS</th>
														<th class="bg-info">Kode Program Studi</th>
													 	<th class="bg-info">Program Studi</th>	
													 	<th class="bg-info">Nama</th>
													 	<th class="bg-info">NPM</th>
														<th class="bg-info">Nomor KTP</th>
														<th class="bg-info">Tempat Lahir</th>
														<th class="bg-info">Tanggal Lahir</th>
														<th class="bg-info">Jenis Kelamin</th>
														<th class="bg-info">Agama</th>
														<th class="bg-info">Alamat</th>
														<th class="bg-info">Nomor Handphone</th>
														<th class="bg-info">Email</th>
														<th class="bg-info">Periode Masuk</th>
														<th class="bg-info">Status</th>
														<!-- <th class="bg-info">Personal File</th> -->
							 						</tr>
											</thead>
											<tbody>
												<?php  
												foreach ($list_ppds as $data) 
												{
												?>
													<tr>
														<td class>
											        <?php echo anchor('Ppds/view_update/'.$data->ID_PPDS," <i class='nav-icon fas fa-edit'></i>");?>
											        &nbsp;&nbsp;|&nbsp;&nbsp;
											        <a href=# onclick="delete_ID('<?=$data->ID_PPDS?>')"><i class='nav-icon fas fa-trash'></i></a>
											      </td>
															<td><?=$data->ID_PPDS?></td>
															<td><?=$data->KD_PRODI?></td>
															<td><?=$data->NAMA_PRODI?></td>
															<td><?=$data->NAMA?></td>
															<td><?=$data->NPM?></td>
															<td><?=$data->NIK?></td>
															<td><?=$data->TMPT_LAHIR?></td>
															<td><?=$data->TGL_LAHIR?></td>
															<td><?=$data->JNS_KELAMIN?></td>
															<td><?=$data->AGAMA?></td>
															<td><?=$data->ALAMAT?></td>
															<td><?=$data->NO_HP?></td>
															<td><?=$data->EMAIL?></td>
															<td><?=$data->PER_MSK?></td>
															<td><?=$data->STATUS?></td>
															<!-- <td><?=$data->UP_FILE?></td> -->
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
</script>