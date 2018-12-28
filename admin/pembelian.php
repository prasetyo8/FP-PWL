<div class="content-box-large">
		<div class="panel-heading">
			<div class="panel-title">Tabel Transaksi Pembelian</div>
		</div>
		<div class="panel-body">
			<table class="table table-bordered">
				<thead>
					<tr>
						<th class="id">No</th>
						<th class="jumlah">Jumlah </th>
						<th class="tanggal">Tanggal</th>
						<th class="status">Status Pembayaran</th>
						<th class="ulasan">Ulasan Deskripsi</th>
						<th class="bukti">Bukti Prmbayaran</th>
					</tr>
				</thead>
				<tbody>
					<?php 
                    
                      $queryMember = mysqli_query($koneksi, "SELECT * FROM transaksi ORDER BY id_transaksi ASC");
                      while($arrayMember = mysqli_fetch_array($queryMember)){
                        echo '
                          <tr>
                            <td class="id">'.$arrayMember['id_transaksi'].'</td>
                            <td class="jumlah">'.$arrayMember['jumlah'].'</td>
                            <td class="tanggal">'.$arrayMember['tanggal'].'</td>
                            <td class="status">'.$arrayMember['status_pembayaran'].'</td>
                            <td class="ulasan">'.$arrayMember['ulasan_deskripsi'].'</td>
                            <td class="bukti">'.$arrayMember['bukti_pembayaran'].'</td>
                          </tr>
                        ';
                      }

                     ?>   
				</tbody>
			</table>
		</div>
	</div>