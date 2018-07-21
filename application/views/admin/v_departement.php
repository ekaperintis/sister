<!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Data Kategori
            <small>Control panel</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="index"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Data Kategori</li>
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
                      <a href="<?php echo base_url(); ?>admin/tambah_departement" class="btn btn-sm btn-primary btn-flat"><i class="fa fa-edit"></i> Tambah</a>
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
                        <th>Nama Jurusan</th>
                        <th width="20%">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                      	<?php  
                        $no = 1;
                        foreach ($data as $lihat):
                        ?>
                    	<tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo ucwords($lihat->kategori)?></td>
                        <?php 
                        if($this->session->userdata('level') == "manager"){
                          ?>
                          <td align="center">
                          <div class="btn-group" role="group">
                            <a href="<?php echo base_url(); ?>admin/edit_departement/<?php echo $lihat->id_kategori ?>" class="btn btn-sm btn-primary btn-flat" disabled><i class="fa fa-edit"></i> Edit</a>
                            <a href="<?php echo base_url(); ?>admin/hapus_departement/<?php echo $lihat->id_kategori ?>" onclick="javascript: return confirm('Anda yakin akan menghapus data ini ?')" class="btn btn-sm btn-danger btn-flat" disabled><i class="fa fa-trash"></i> Hapus</a>
                          </div>
                        </td>         
                          <?php
                        }else {
                          ?>
                             <td align="center">
                          <div class="btn-group" role="group">
                            <a href="<?php echo base_url(); ?>admin/edit_departement/<?php echo $lihat->id_kategori ?>" class="btn btn-sm btn-primary btn-flat"><i class="fa fa-edit"></i> Edit</a>
                            <a href="<?php echo base_url(); ?>admin/hapus_departement/<?php echo $lihat->id_kategori ?>" onclick="javascript: return confirm('Anda yakin akan menghapus data ini ?')" class="btn btn-sm btn-danger btn-flat"><i class="fa fa-trash"></i> Hapus</a>
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
