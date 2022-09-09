<?php include 'V_header.php'; ?>
<div>
<h1 class="text-center">Data Alumni</h1>
<a class="btn btn-success " href=" <?php echo base_url('/C_home/add') ?> " role="button">Tambah</a>
<br>
<br>
<table class="table justify-content-center">
<thead>
	<tr>
	<th scope="col">No</th>
	<th scope="col">Nama</th>
	<th scope="col">NIM</th>
	<th scope="col">Konsentrasi</th>
	<th scope="col">Aksi</th>
	</tr>
</thead>
<tbody>
	<?php 
		$count = 0;
		foreach ($queryAllAlmn as $row){
			$count = $count + 1;
	?>
	<tr>
	<th scope="row"><?php echo $count; ?></th>
	<td><?php echo $row->nama ?></td>
	<td><?php echo $row->nim ?></td>
	<td><?php echo $row->konsentrasi ?></td>
	<td> 
		<a href=" <?php echo base_url('/C_home/detail') ?> " button type="button" class="btn btn-primary btn-sm">
		<span class="glyphicon glyphicon-eye-open"></span> Lihat
		</a>
		<a href=" <?php echo base_url('/C_home/edit') ?>/<?php echo $row->nim ?> " button type="button" class="btn btn-success btn-sm">
		<span class="glyphicon glyphicon-pencil"></span> Edit 
		</a>
		<a href=" <?php echo base_url('/C_home/delete') ?>/<?php echo $row->nim ?> " button type="button" class="btn btn-danger btn-sm">
		<span class="glyphicon glyphicon-trash"></span> Hapus 
		</a>
		</button>
	</tr>
	<?php } ?>
</tbody>
</table>
</div>

<?php include 'V_footer.php'; ?>