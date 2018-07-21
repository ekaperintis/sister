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
              <li><a href="<?php echo base_url(); ?>admin/sub_materi">Materi</a></li>
              <li class="active">Tambah</li>
            </ol>
          </section>

          <!-- Main content -->
          <section class="content">
            <div class="box box-info">
              <div class="box-header with-border">
                <h3 class="box-title">Form Tambah Sub Materi</h3>
              </div>
              <div class="box-body">
                <!-- form start -->
                <?php echo form_open_multipart('admin/insert_sub_materi'); ?>
                  <div class="form-group">
                  <label for="sel1">Materi Utama</label>
                  <select class="form-control" id="materi" name="materi">
                    <?php  
                      foreach ($data_materi as $data):
                    ?>
                    <option value="<?php echo $data->kdmateri; ?>"><?php echo $data->nmmateri; ?></option>
                    <?php endforeach ?>
                  </select>
                </div>

                <div class="form-group" style="position:relative;"> Photo
                    <a class='btn btn-primary' href='javascript:;'>
                        Choose File...
                        <input type="file" style='position:absolute;z-index:2;top:0;left:0;filter: alpha(opacity=0);-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";opacity:0;background-color:transparent;color:transparent;' name="filefoto" size="40"  onchange='$("#upload-file-info").html($(this).val());'>
                    </a>
                    &nbsp;
                    <span class='label label-info' id="upload-file-info"></span>
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Deskripsi</label>
                      <input type="text" class="form-control" name="deskripsi" placeholder="Deskripsi" required="true" />
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Fitur</label>
                      <input type="text" class="form-control" name="fitur" placeholder="Fitur" required="true" />
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Benefit</label>
                      <input type="text" class="form-control" name="benefit" placeholder="Benefit" required="true" />
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Kegunaan</label>
                      <input type="text" class="form-control" name="kegunaan" placeholder="Kegunaan" required="true" />
                  </div>

                  <a href="<?php echo base_url(); ?>admin/sub_materi" class="btn btn-warning"><i class="fa fa-arrow-left"></i> Batal</a>
                  <button type="submit" name="simpan" class="btn btn-success"><i class="fa fa-save"></i> Simpan</button>
                <?php echo form_close(); ?>
                
              </div><!-- /.box-body -->
            </div><!-- /.box -->
          </section><!-- /.content -->
        </div>