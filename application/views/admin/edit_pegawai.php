<!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
          <section class="content-header">
            <h1>
              Edit
              <small>Pegawai</small>
            </h1>
            <ol class="breadcrumb">
              <li><i class="fa fa-dashboard"></i> Home</a></li>
              <li><a href="<?php echo base_url(); ?>admin/jenis_surat">Pegawai</a></li>
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
                <h3 class="box-title">Form Edit Pegawai</h3>
              </div>
              <div class="box-body">
                <!-- form start -->
                <?php echo form_open('admin/update_pegawai'); ?>
                <?php  
                foreach ($editdata as $data):
                ?>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Pegawai</label>
                      <input type="text" class="form-control" name="nama" value="<?php echo $data->nama; ?>" required="true" />
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Jenis Kelamin</label>
                      <input type="text" class="form-control" name="jenis_kelamin" placeholder="Jenis Kelamin" required="true" value="<?php echo $data->jenis_kelamin; ?>" />
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Tempat Lahir</label>
                      <input type="text" class="form-control" name="tempat_lahir" placeholder="Tempat Lahir" required="true" value="<?php echo $data->tempat_lahir; ?>"/>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tanggal Lahir</label>
                      <input type="text" class="form-control" name="tanggal_lahir" id="tgl_surat" data-date-format="yyyy-mm-dd" placeholder="Tanggal Lahir" required="true" value="<?php echo $data->tanggal_lahir; ?>"/>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Telpon</label>
                      <input type="text" class="form-control" name="telpon" placeholder="Telpon" required="true" value="<?php echo $data->telpon; ?>"/>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Bagian</label>
                      <select name="bagian" class="form-control" required="true" ><?php echo $data->bagian; ?>
                        <?php  
                        $bagian = $this->db->query("SELECT * FROM tbl_bagian ORDER BY id_bagian DESC")->result();
                        foreach ($bagian as $rows) {
                          echo "<option  value='$rows->bagian'>".ucwords($rows->bagian)."</option>"; 
                        }
                        ?>
                        
                      </select>
                  </div>

                  <input type="hidden" name="nik" value="<?php echo $data->nik ?>">
                  <a href="<?php echo base_url(); ?>admin/pegawai" class="btn btn-warning"><i class="fa fa-arrow-left"></i> Batal</a>
                  <button type="submit" name="simpan" class="btn btn-success"><i class="fa fa-save"></i> Simpan</button>
                <?php endforeach ?>
                <?php echo form_close(); ?>
              </div><!-- /.box-body -->
            </div><!-- /.box -->
          </section><!-- /.content -->
        </div>