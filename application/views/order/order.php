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
				<th>Nomer Order</th>
				<th>Pembeli</th>
				<th>Tanggal</th>
				<th>Customer id</th>
                <th>Saleman id</th>
                <th></th>
			</tr>
		</thead>
		<tbody>
        <?php
			$no = 1; //untuk menampilkan no
			foreach($list_order as $row){
				echo "
				<tr>
					<td>$row[ord_no]</td>
					<td>$row[purch_amt]</td>
					<td>$row[ord_date]</td>
					<td>$row[customer_id]</td>
					<td>$row[salesman_id]</td>
					<td>
						<a href='edit/$row[ord_no]' class='btn btn-sm btn-info'>Update</a>
						<a href='delete/$row[ord_no]' class='btn btn-sm btn-danger'>Hapus</a>
					</td>
				</tr>
				";
				$no++;
			}
		?>
		</tbody>
	</table>
</div>