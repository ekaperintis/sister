<!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
          <section class="content-header">
            <h1>
              Edit
              <small>Users</small>
            </h1>
            <ol class="breadcrumb">
              <li><i class="fa fa-dashboard"></i> Home</a></li>
              <li><a href="<?php echo base_url(); ?>admin/users">Users</a></li>
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
                <h3 class="box-title">Form Edit Users</h3>
              </div>
              <div class="box-body">
                <!-- form start -->
                <?php echo form_open('admin/update_users'); ?>
                <?php  
                foreach ($editdata as $data):
                ?>

                <div class="form-group">
                    <label for="exampleInputEmail1">Nomor Induk Siswa</label>
                      <input type="text" class="form-control" name="nis" value="<?php echo $data->nis; ?>" required="true" readonly />
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Siswa</label>
                      <input type="text" class="form-control" name="username" value="<?php echo $data->nama_siswa; ?>" required="true" />
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Tempat Lahir</label>
                      <input type="text" class="form-control" name="tmplahir" placeholder="Tempat Lahir" required="true" value="<?php echo $data->tmplahir; ?>"/>
                  </div>

                  <div class="form-group">
                      <label for="email">Tanggal Awal</label>
                      <input type="text" class="form-control" name="tgl_awal" id="tgl_awal" data-date-format="yyyy-mm-dd" placeholder="Tgl Lahir" required="true" value="<?php echo $data->tgllahir; ?>"/>
                    </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Alamat</label>
                      <input type="text" class="form-control" name="alamat" placeholder="Alamat" required="true" value="<?php echo $data->alamat; ?>"/>
                  </div>
                     
                  <div class="form-group">
                  <label for="sel1">Jenis Kelamin</label>
                  <select class="form-control" id="sel1" name="kelamin">
                    <option>L</option>
                    <option>P</option>
                  </select>
                </div>

                <div class="form-group">
                  <label for="sel1">Agama</label>
                  <select class="form-control" id="agama" name="agama">
                    <option>Islam</option>
                    <option>Kristen</option>
                    <option>Hindu</option>
                    <option>Budha</option>
                  </select>
                </div>

                  <input type="hidden" name="id" value="<?php echo $data->id ?>">
                  <a href="<?php echo base_url(); ?>admin/users" class="btn btn-warning"><i class="fa fa-arrow-left"></i> Batal</a>
                  <button type="submit" name="simpan" class="btn btn-success"><i class="fa fa-save"></i> Simpan</button>
                <?php endforeach ?>
                <?php echo form_close(); ?>
              </div><!-- /.box-body -->
            </div><!-- /.box -->
          </section><!-- /.content -->
        </div>