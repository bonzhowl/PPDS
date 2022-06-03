<head>
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
			<div class="panel-heading">Upload Personal File PPDS-I</div>
				<div class="panel-body">
					<?=$this->session->flashdata('pesan')?>
					<form action="<?=base_url?>upload/insert" method="post" enctype="multipart/form-data">
						<table class="table table-striped">
							<tr>
								<td style="width: 15%;">Personal File</td>
									<td>
										<div class="col-sm-6">
											<input type="file" name="fileppds" class="form-control">
										</div>
									</td>
							</tr>
							<tr>
								<td style="width: 15%;">Keterangan</td>
									<td>
										<div class="col-sm-10">
											<textarea name="textket" class="form-control"></textarea>
										</div>
									</td>
							</tr>
								<tr>
									<td colspan="2">
										<input type="submit" class="btn btn-success" value="simpan">
										<button type="reset" class="btn btn-default">Batal</button>
									</td>
								</tr>
						</table>
					</form>
				</div>
		</div>
	</div>
</body>