<div class="container">
	<h1>Customer</h1>
	<div class="row">
		<div class="col-sm">
			<a href="add" class="btn btn-primary">Tambah Data Salesman</a>
		</div>
		<div class="col-sm">
		
		</div>
		<div class="col-sm">
			<a href="upload" class="btn btn-primary">Tambah Data dari File</a>
		</div>
	</div>
	<br>
	<table class="table">
		<thead class="thead-dark">
			<tr>
				<th>Saleman id</th>
				<th>Nama</th>
				<th>Alamat</th>
				<th>Komisi</th>
                <th></th>
			</tr>
		</thead>
		<tbody>
        <?php
			$no = 1; //untuk menampilkan no
			foreach($list_sales as $row){
				echo "
				<tr>
					<td>$row[salesman_id]</td>
					<td>$row[nama]</td>
					<td>$row[city]</td>
					<td>$row[commision]</td>
					<td>
						<a href='edit/$row[salesman_id]' class='btn btn-sm btn-info'>Update</a>
						<a href='delete/$row[salesman_id]' class='btn btn-sm btn-danger'>Hapus</a>
					</td>
				</tr>
				";
				$no++;
			}
		?>
		</tbody>
	</table>
</div>