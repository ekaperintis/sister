<?php
 
 $judul = date('Ymd')."_".$title.".xls";

 header("Content-type: application/vnd-ms-excel");
 
 header("Content-Disposition: attachment; filename=$judul");
 
 header("Pragma: no-cache");
 
 header("Expires: 0");
 
 ?>
 
<table border="1" width="100%">
    <thead>
           <tr>
 				<th>No</th>
                <th>Soal</th>
                <th>Pilihan A</th>
                <th>Pilihan B</th>
                <th>Pilihan C</th>
                <th>Pilihan D</th>
                <th>Jawaban</th>
           </tr>
 
      </thead>
 
      <tbody>
 
           <?php $i=1; foreach($buku as $buku) { ?>
 
           <tr>
 				<td><?php echo $i; ?></td>
                <td><?php echo $buku->soal; ?></td>
                <td><?php echo $buku->a; ?></td>
                <td><?php echo $buku->b; ?></td>
              <td><?php echo $buku->c; ?></td>
              <td><?php echo $buku->d; ?></td>
              <td><?php echo $buku->jwaban; ?></td>
           </tr>
 
           <?php $i++; } ?>
 
      </tbody>
 
 </table>