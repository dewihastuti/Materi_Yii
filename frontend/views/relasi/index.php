<?php
$this->title = 'Relasi';
$this->params['breadcrumbs'][] = $this->title;
?>
 <div class="box">
   <div class="box-body ">
                 <table id="example1" class="table table-bordered table-striped">
                   <thead>
                   <tr>
                     <th>No.</th>
                     <th>Nip</th>
                     <th>Nama</th>
                     <th>Jabatan</th>
                     <th>Golongan</th>
					 <th>Nama Bagian</th>
                   </tr>
                 </thead>

                     <?php
                      $i=1;
                     foreach($query as $row) { ?>
                       <tbody>
                   <tr>
                     <td><?php echo $i++; ?></td>
                     <td><?php echo $row['nip']; ?></td>
						<td><?php echo $row['nama']; ?></td>
						<td><?php echo $row['jabatan']; ?></td>
						<td><?php echo $row['golongan']; ?></td>
						<td><?php echo $row['nama_bagian']; ?></td>



                   </tr>
                     <?php } ?>
                   </tbody>
                 </table>
               </div>
  </div>
