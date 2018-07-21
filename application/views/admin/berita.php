<!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Main content -->
        <section class="content">
          
          <div class="box box-info">
              <div class="box-header with-border">
                <h3 class="box-title">Cetak Berita Acara</h3>
              </div>
              <div class="box-body ">
                <!-- form start -->
                <div class="form-group col-md-6">
                    <label for="exampleInputEmail1">Nama Dosen</label>
                      <select class="form-control" id="sel1">
                      <?php foreach($data as $rows) { ?>
                      <option><?php echo $rows->nama_lengkap;?></option>
                        <?php } ?>
                    </select>
                  </div>
                
                <div class="col-md-8" >
                	<a href="<?php echo base_url(); ?>admin/cetak_berita" target="_blank" class="btn btn-warning"><i class="fa fa-arrow-left"></i> Preview</a>
                  <a href="<?php echo base_url(); ?>admin/cetak_berita" target="_blank"  class="btn btn-success"><i class="fa fa-print"></i> Print</a>
                  
                </div>
                
                
              </div><!-- /.box-body -->
            </div><!-- /.box -->

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
