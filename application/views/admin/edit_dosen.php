<!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
          <section class="content-header">
            <h1>
              Edit
              <small>Dosen</small>
            </h1>
            <ol class="breadcrumb">
              <li><i class="fa fa-dashboard"></i> Home</a></li>
              <li><a href="<?php echo base_url(); ?>admin/dosen">Dosen</a></li>
              <li class="active">Edit</li>
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
                <h3 class="box-title">Form Edit Dosen</h3>
              </div>
              <div class="box-body">
                <!-- form start -->
                <?php echo form_open('admin/update_dosen'); ?>
                <?php  
                foreach ($editdata as $data):
                ?>

                <div class="form-group">
                    <label for="exampleInputEmail1">NIP</label>
                      <input type="text" class="form-control" name="nis" value="<?php echo $data->nip; ?>" required="true" readonly />
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Lengkap</label>
                      <input type="text" class="form-control" name="username" value="<?php echo $data->nama_lengkap; ?>" required="true" />
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Tempat Lahir</label>
                      <input type="text" class="form-control" name="tmplahir" placeholder="Tempat Lahir" required="true" value="<?php echo $data->tmp_lahir; ?>"/>
                  </div>

                  <div class="form-group">
                      <label for="email">Tanggal Lahir</label>
                      <input type="text" class="form-control" name="tgllahir" id="tgl_awal" data-date-format="yyyy-mm-dd" placeholder="Tgl Lahir" required="true" value="<?php echo $data->tgl_lahir; ?>"/>
                    </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Alamat</label>
                      <input type="text" class="form-control" name="alamat" placeholder="Alamat" required="true" value="<?php echo $data->alamat; ?>"/>
                  </div>
                     
                  <div class="form-group">
                  <label for="sel1">Jenis Soal</label>
                  <select class="form-control" id="jenis_soal" name="jenis_soal">
                    <option>Teori</option>
                    <option>Praktek</option>
                  </select>
                </div>

                <div class="form-group">
                    <label for="formasi">Formasi</label>
                      <input type="text" class="form-control" name="formasi" placeholder="Formasi" required="true" value="<?php echo $data->formasi; ?>" />
                </div>

                <div class="form-group">
                  <label for="sel1">Wilayah</label>
                  <select class="form-control" id="wilayah" name="wilayah">
                    <option>Provinsi</option>
                    <option>Kabupaten</option>
                    <option>Kota</option>
                  </select>
                </div>

                  <input type="hidden" name="id" value="<?php echo $data->id ?>">
                  <a href="<?php echo base_url(); ?>admin/dosen" class="btn btn-warning"><i class="fa fa-arrow-left"></i> Batal</a>
                  <button type="submit" name="simpan" class="btn btn-success"><i class="fa fa-save"></i> Simpan</button>
                <?php endforeach ?>
                <?php echo form_close(); ?>
              </div><!-- /.box-body -->
            </div><!-- /.box -->
          </section><!-- /.content -->
        </div>