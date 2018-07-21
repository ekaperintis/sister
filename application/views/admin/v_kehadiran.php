<!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Data Kehadiran
            <small>Control panel</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="index"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Data Kehadiran</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          
          	<div class="row">          	
          	<div class="col-xs-12">
          		<div class="box">
                <div class="box-header">
                <?php echo form_open('admin/periode_kehadiran','class=form-inline'); ?>
                    <div class="form-group">
                      <label for="email">Tanggal Awal</label>
                      <input type="text" class="form-control" name="tgl_awal" id="tgl_awal" data-date-format="yyyy-mm-dd" placeholder="Tgl Awal" required="true" />
                    </div>
                    <div class="form-group">
                      <label for="pwd">Tanggal Akhir </label>
                      <input type="text" class="form-control" name="tgl_akhir" id="tgl_akhir" data-date-format="yyyy-mm-dd" placeholder="Tgl Akhir" required="true" />
                    </div>
                    
                    <button type="submit" class="btn btn-sm btn-primary btn-flat">Submit</button>
                    
                    <a href="<?php echo base_url(); ?>admin/kehadiran" class="btn btn-sm btn-danger btn-flat">
                    <i class="fa fa-edit"></i> Reload</a>
                  </form>
                  <?php echo form_close(); ?>

                  <div class="box-tools">
                  	
                  </div>
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
                        <th>Aksi</th>
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
                        <td align="center">
                          <div class="btn-group" role="group">
                            <a href="<?php echo base_url(); ?>admin/detail_kehadiran/<?php echo $lihat->nik ?>" class="btn btn-sm btn-primary btn-flat"><i class="fa fa-edit"></i> View</a>
                          </div>
                        </td>                  		
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
