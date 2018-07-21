<!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Data Soal Ujian
            <small>Control panel</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="index"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Data Soal Ujian</li>
          </ol>
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
                      <a href="<?php echo base_url(); ?>admin/tambah_soal_ujian" class="btn btn-sm btn-primary btn-flat"><i class="fa fa-edit"></i> Tambah</a>
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
                        <th>Soal</th>
                        <th>A</th>
                        <th>B</th>
                        <th>C</th>
                        <th>D</th>
                        <th>Jawaban</th>
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
                        <td><?php echo ucwords($lihat->soal)?></td>
                        <td><?php echo ucwords($lihat->a)?></td>
                        <td><?php echo ucwords($lihat->b)?></td>
                        <td><?php echo ucwords($lihat->c)?></td>
                        <td><?php echo ucwords($lihat->d)?></td>
                        <td><?php echo ucwords($lihat->jwaban)?></td>
                        <?php 
                        if($this->session->userdata('level') == "manager"){
                          ?>
                          <td align="center">
                          <div class="btn-group" role="group">
                            <a href="<?php echo base_url(); ?>admin/edit_soal_ujian/<?php echo $lihat->id ?>" class="btn btn-sm btn-primary btn-flat" disabled><i class="fa fa-edit"></i></a>
                            <a href="<?php echo base_url(); ?>admin/hapus_soal_ujian/<?php echo $lihat->id ?>" onclick="javascript: return confirm('Anda yakin akan menghapus data ini ?')" class="btn btn-sm btn-danger btn-flat" disabled><i class="fa fa-trash"></i></a>
                          </div>
                        </td>         
                          <?php
                        }else {
                          ?>
                             <td align="center">
                          <div class="btn-group" role="group">
                            <a href="<?php echo base_url(); ?>admin/edit_soal_ujian/<?php echo $lihat->id ?>" ><i class="fa fa-edit"></i></a>
                            <a href="<?php echo base_url(); ?>admin/hapus_soal_ujian/<?php echo $lihat->id ?>" onclick="javascript: return confirm('Anda yakin akan menghapus data ini ?')"><i class="fa fa-trash"></i></a>

                            <a href="<?php echo base_url(); ?>admin/edit_soal_ujian/<?php echo $lihat->id ?>" ><i class="fa fa-refresh"></i></a>
                            
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
