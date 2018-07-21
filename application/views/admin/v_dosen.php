<!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Data Dosen
            <small>Pengelolaan data dosen</small>
          </h1>
          
        </section>

        <!-- Main content -->
        <section class="content">
          
          	<div class="row">          	
          	<div class="col-xs-12">
          		<div class="box">
                <div class="box-header">
                  <h3 class="box-title">

                  <?php 
                    if($this->session->userdata('level') != "manager"){
                      ?>
                      <a href="<?php echo base_url(); ?>admin/tambah_dosen" class="btn btn-sm btn-primary btn-flat"><i class="fa fa-edit"></i> Tambah</a>
                      <?php
                    }
                  ?>

                  	
                  </h3>
                  <div class="box-tools">
                  	
                  </div>
                </div><!-- /.box-header -->

               

                <div class="box-body">
                 
                  <table id="example1" class="table table-bordered table-hover dataTable">
                    <thead>
                      <tr>
                        <th width="5%">No</th>
                        <th>NIP</th>
                        <th>Nama Dosen</th>
                        <th>Formasi</th>
                        <th>Wilayah</th>
                        <th>Jenis Soal</th>
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
                        <td><?php echo ucwords($lihat->nip)?></td>
                        <td><?php echo ucwords($lihat->nama_lengkap)?></td>
                        <td><?php echo ucwords($lihat->formasi)?></td>
                        <td><?php echo ucwords($lihat->wilayah)?></td>
                        <td><?php echo ucwords($lihat->jenis_soal)?></td>
                        <?php 
                        if($this->session->userdata('level') == "manager"){
                          ?>
                          <td align="center">
                          <div class="btn-group" role="group">
                            <a href="<?php echo base_url(); ?>admin/edit_dosen/<?php echo $lihat->id ?>" class="btn btn-sm btn-primary btn-flat" disabled><i class="fa fa-edit"></i> Edit</a>
                            <a href="<?php echo base_url(); ?>admin/hapus_dosen/<?php echo $lihat->id ?>" onclick="javascript: return confirm('Anda yakin akan menghapus data ini ?')" class="btn btn-sm btn-danger btn-flat" disabled><i class="fa fa-trash"></i> Hapus</a>
                          </div>
                        </td>         
                          <?php
                        }else {
                          ?>
                             <td align="center">
                          <div class="btn-group" role="group">

                            <?php if($lihat->is_status=="0") {?>

                            <a href="<?php echo base_url(); ?>admin/aktif/<?php echo $lihat->id ?>" class="btn btn-sm btn-primary btn-flat"><i class="fa fa-check-square-o"></i> Aktifkan</a>

                            <?php } ?>

                            <a href="<?php echo base_url(); ?>admin/edit_dosen/<?php echo $lihat->id ?>" class="btn btn-sm btn-warning btn-flat"><i class="fa fa-edit"></i> Edit</a>
                            <a href="<?php echo base_url(); ?>admin/hapus_dosen/<?php echo $lihat->id ?>" onclick="javascript: return confirm('Anda yakin akan menghapus data ini ?')" class="btn btn-sm btn-danger btn-flat"><i class="fa fa-trash"></i> Hapus</a>
                          </div>
                        </td>             
                          <?php
                        }
                      ?>

                            		
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
