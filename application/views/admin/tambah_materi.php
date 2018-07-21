<!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
          <section class="content-header">
            <h1>
              Tambah
              <small>Materi</small>
            </h1>
            <ol class="breadcrumb">
              <li><i class="fa fa-dashboard"></i> Home</a></li>
              <li><a href="<?php echo base_url(); ?>admin/materi">Materi</a></li>
              <li class="active">Tambah</li>
              <!--
              <li><a href="#">Layout</a></li>
              <li class="active">Top Navigation</li>
              -->
            </ol>
          </section>

          <!-- Main content -->
          <section class="content">
            <div class="box box-info">
              <div class="box-header with-border">
                <h3 class="box-title">Form Tambah Materi</h3>
              </div>
              <div class="box-body">
                <!-- form start -->
                <?php echo form_open('admin/insert_materi'); ?>
                
                <div class="form-group">
                  <label for="sel1">Departement</label>
                  <select class="form-control" id="departement" name="departement">
                    <?php  
                      foreach ($data_departement as $data):
                    ?>
                    <option value="<?php echo $data->kddepartement; ?>"><?php echo $data->nmdepartement; ?></option>
                    <?php endforeach ?>
                  </select>
                </div>


                <div class="form-group">
                    <label for="exampleInputEmail1">Nama Materi</label>
                      <input type="text" class="form-control" name="nama_materi" placeholder="Nama Materi" required="true" />
                  </div>
                  <a href="<?php echo base_url(); ?>admin/materi" class="btn btn-warning"><i class="fa fa-arrow-left"></i> Batal</a>
                  <button type="submit" name="simpan" class="btn btn-success"><i class="fa fa-save"></i> Simpan</button>
                <?php echo form_close(); ?>
                
              </div><!-- /.box-body -->
            </div><!-- /.box -->
          </section><!-- /.content -->
        </div>