	<div class="content-box-large">
		<div class="panel-heading">
			<div class="panel-title">Tabel Member</div>
		</div>
		<div class="panel-body">
			<table class="table table-bordered">
				<thead>
					<tr>
						<th class="id-member">No</th>
						<th class="nama-member ">Nama</th>
						<th class="email-member">Email</th>
						<th class="alamat-member">Alamat</th>
						<th class="telp-member">Telp</th>
					</tr>
				</thead>
				<tbody>
					<?php 
                    
                      $queryMember = mysqli_query($koneksi, "SELECT * FROM member ORDER BY id_member ASC");
                      while($arrayMember = mysqli_fetch_array($queryMember)){
                        echo '
                          <tr>
                            <td class="id-member ">'.$arrayMember['id_member'].'</td>
                            <td class="nama-member ">'.$arrayMember['nama'].'</td>
                            <td class="email-member ">'.$arrayMember['email'].'</td>
                            <td class="alamat-member text-justify">'.$arrayMember['alamat'].'</td>
                            <td class="telp-member text-left">'.$arrayMember['telp'].'</td>
                            
                            
                          </tr>
                        ';
                      }

                     ?>   
				</tbody>
			</table>
		</div>
	</div>
