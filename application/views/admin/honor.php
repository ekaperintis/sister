<!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        
        <!-- Main content -->
        <section class="content">
          
          <div class="box box-info">
              <div class="box-header with-border">
                <h3 class="box-title">Cetak Honor</h3>
              </div>
              <div class="box-body ">
                <!-- form start -->
                <?php echo form_open('admin/insert_departement'); ?>
                <div class="form-group col-md-6">
                    <label for="exampleInputEmail1">Nama Dosen</label>
                      <select class="form-control" id="dosen">
                      	<?php foreach($data as $rows) { ?>
                      <option><?php echo $rows->nama_lengkap;?></option>
                      	<?php } ?>
                    </select>
                  </div>
                
                <div class="col-md-8" >
                	<a href="<?php echo base_url(); ?>admin/cetak_honor" target="_blank" class="btn btn-warning"><i class="fa fa-arrow-left"></i> Preview</a>

                  <a href="<?php echo base_url(); ?>admin/cetak_honor" target="_blank" class="btn btn-success"><i class="fa fa-print"></i> Print</a>
                  
                </div>
                <?php echo form_close(); ?>
                
              </div><!-- /.box-body -->
            </div><!-- /.box -->

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

