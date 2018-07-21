<!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Detail Kehadiran
            <small>Control panel</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="index"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Detail Kehadiran</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          
          	<div class="row">          	
          	<div class="col-xs-12">
          		<div class="box">
                <div class="box-header">
                
                  
                </div><!-- /.box-header -->

               

                <div class="box-body">
                 
                  <table id="example1" class="table table-bordered table-hover dataTable">
                    <thead>
                      <tr>
                        <th width="5%">No</th>
                        <th>NIK</th>
                        <th>Nama Pegawai</th>
                        <th>Tanggal</th>
                        <th>Jam Masuk</th>
                        <th>Jam Pulang</th>
                        <th>Lat</th>
                        <th>Long</th>
                        <th>Photo</th>
                        </tr>
                    </thead>
                    <tbody>
                      	<?php  
                        $no = 1;
                        foreach ($data as $lihat):
                        ?>
                    	<tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo ucwords($lihat->nik)?></td>
                        <td><?php echo ucwords($lihat->nama)?></td>
                        <td><?php echo ucwords($lihat->tanggal)?></td>
                    		<td><?php echo ucwords($lihat->jam_masuk)?></td>
                        <td><?php echo ucwords($lihat->jam_pulang)?></td>
                        <td><?php echo ucwords($lihat->xlat)?></td>
                        <td><?php echo ucwords($lihat->xlong)?></td>
                        <td><img src="<?php echo base_url('../../ws/absen/gambar/'.$lihat->photo)?>"></td>
                    	</tr>
                    	<?php endforeach; ?>
                    </tbody>
                  </table>
                  
                </div><!-- /.box-body -->

                </div>
                
               
             </div>
          </div>
        


        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
