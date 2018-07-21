<!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
          <section class="content-header">
            <h1>
              Tambah
              <small>Dosen</small>
            </h1>
            <ol class="breadcrumb">
              <li><i class="fa fa-dashboard"></i> Home</a></li>
              <li><a href="<?php echo base_url(); ?>admin/dosen">Dosen</a></li>
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
                <h3 class="box-title">Form Tambah Dosen</h3>
              </div>
              <div class="box-body">
                <!-- form start -->
                <?php echo form_open('admin/insert_dosen'); ?>

                <div class="form-group">
                    <label for="nis">NIP</label>
                      <input type="text" class="form-control" name="nis" placeholder="NIP" required="true" />
                  </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Nama Lengkap</label>
                      <input type="text" class="form-control" name="username" placeholder="Nama Lengkap" required="true" />
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Tempat Lahir</label>
                      <input type="text" class="form-control" name="tmplahir" placeholder="Tempat Lahir" required="true" />
                  </div>

                  <div class="form-group">
                      <label for="email">Tanggal Lahir</label>
                      <input type="text" class="form-control" name="tgllahir" id="tgl_awal" data-date-format="yyyy-mm-dd" placeholder="Tgl Lahir" required="true" />
                    </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Alamat</label>
                      <input type="text" class="form-control" name="alamat" placeholder="Alamat" required="true" />
                  </div>
                 
                   <div class="form-group">
                  <label for="jenis_soal">Jenis Soal</label>
                  <select class="form-control" id="jenis_soal" name="jenis_soal">
                    <option>Teori</option>
                    <option>Praktek</option>
                  </select>
                </div>


                <div class="form-group">
                    <label for="formasi">Formasi</label>
                      <input type="text" class="form-control" name="formasi" placeholder="Formasi" required="true" />
                </div>

                <div class="form-group">
                  <label for="wilayah">Wilayah</label>
                  <select class="form-control" id="wilayah" name="wilayah">
                    <option>Provinsi</option>
                    <option>Kabupaten</option>
                    <option>Kota</option>
                  </select>
                </div>


                  <a href="<?php echo base_url(); ?>admin/dosen" class="btn btn-warning"><i class="fa fa-arrow-left"></i> Batal</a>
                  <button type="submit" name="simpan" class="btn btn-success"><i class="fa fa-save"></i> Simpan</button>
                <?php echo form_close(); ?>
                
              </div><!-- /.box-body -->
            </div><!-- /.box -->
          </section><!-- /.content -->
        </div>