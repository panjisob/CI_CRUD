<div class="container">
	<h1>Customer</h1>
	<div class="row">
		<div class="col-sm">
			<a href="add" class="btn btn-primary">Tambah Data Customer</a>
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
				<th>Customer id</th>
				<th>Nama Customer</th>
				<th>Alamat</th>
				<th>Grade</th>
                <th>Saleman id</th>
                <th></th>
			</tr>
		</thead>
		<tbody>
        <?php
			$no = 1; //untuk menampilkan no
			foreach($list_cust as $row){
				echo "
				<tr>
					<td>$row[customer_id]</td>
					<td>$row[cust_name]</td>
					<td>$row[city]</td>
                    <td>$row[grade]</td>
                    <td>$row[salesman_id]</td>
					<td>
						<a href='customer/edit/$row[customer_id]' class='btn btn-sm btn-info'>Update</a>
						<a href='delete/$row[customer_id]' class='btn btn-sm btn-danger'>Hapus</a>
					</td>
				</tr>
				";
				$no++;
			}
			?>
		</tbody>
	</table>
</div>