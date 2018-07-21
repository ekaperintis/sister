<!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        

        <!-- Main content -->
        <section class="content">
          
          <div class="box box-info">
              <div class="box-header with-border">
                <h3 class="box-title">Export Data</h3>
              </div>
              <div class="box-body ">
                <!-- form start -->
                <?php echo form_open('export/export_excel'); ?>
                <div class="form-group col-md-6">
                    <label for="exampleInputEmail1">Pilihan Export</label>
                      <select class="form-control" id="sel1">
                      <option>Excel</option>
                      <option>PDF</option>
                 
                    </select>
                  </div>
                
                <div class="col-md-8" >
                  <button type="submit" name="simpan" class="btn btn-success"><i class="fa fa-random"></i> Export</button>
                </div>
                <?php echo form_close(); ?>
                
              </div><!-- /.box-body -->
            </div><!-- /.box -->

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
