<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Upload Personal File</title>

	<link href="<?=base_url()?>assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?=base_url()?>assets/css/style.css" rel="stylesheet">
<style>
	body{
		margin: 20px 10%;
	}
</style>
</head>
<body>
	<div class="container">
		<div class="panel panel-default">
			<div class="panel-heading">List Personal File PPDS-I</div>
				<div class="panel-body">
					<?=$this->session->flashdata('pesan')?>
					<p>
						<a href="<?=base_url()?>upload/add" class="btn btn-success"> ADD</a>
					</p>
					<table class="table table-bordered table-striped">
						<tr>
							<th>Nama File</th>
							<th>Tipe File</th>
							<th>Personal File</th>
							<th>Keterangan</th>
						</tr>
						<?foreach ($query as $row) {?>
						<tr>
							<td><?=$row->NAMA_PF;?></td>
							<td><?=$row->TIPE_PF;?></td>
							<td><a src="<?base_url()?>personal_file/<?=$row->nmfile;?>"></a></td>
							<td><?=$row->KET_PF;?></td>
						</tr>
						<?php }?>
					</table>
				</div>
		</div>
	</div>
</body>
</html>