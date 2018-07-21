<!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
          <section class="content-header">
            <h1>
              Edit
              <small>NILAI AKHIR</small>
            </h1>
            <ol class="breadcrumb">
              <li><i class="fa fa-dashboard"></i> Home</a></li>
              <li><a href="<?php echo base_url(); ?>admin/jawaban">Nilai AKhir</a></li>
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
                <h3 class="box-title">EDIT JAWABAN</h3>
              </div>
              <div class="box-body">
                <!-- form start -->
                <?php echo form_open('admin/update_jawaban'); ?>

                <?php  
                foreach ($editdata as $data):
                  
                ?>

                <!--
                <div class="form-group">
                    <label for="exampleInputEmail1">Nama Soal</label>
                      <input type="text" class="form-control" name="nama_soal" placeholder="Nama SOal" required="true" value="<?php echo $data->nmsoal; ?>" />
                  </div>
                -->

                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Siswa</label>
                      <input type="text" class="form-control" name="uraian" placeholder="Uraian Soal" required="true" value="<?php echo $data->nama_siswa; ?>" readonly />
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1"> Jumlah SOal</label>
                      <input type="text" class="form-control" name="a" placeholder="Jawaban A" required="true" value="<?php echo $data->jml_soal; ?>" readonly />
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1"> Jawaban Benar</label>
                      <input type="text" class="form-control" name="b" placeholder="Jawaban B" required="true" value="<?php echo $data->jumlah; ?>" readonly />
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1"> Jawaban Salah</label>
                      <input type="text" class="form-control" name="c" placeholder="Jawaban C" required="true" value="<?php echo $data->jml_salah; ?>" readonly />
                  </div>
                  
                  <div class="form-group">
                    <label for="exampleInputEmail1"> NIlai Murni</label>
                      <input type="text" class="form-control" name="d" placeholder="Jawaban D" required="true" value="<?php echo $data->nilai; ?>" readonly />
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1"> Nilai Akhir </label>
                      <input type="text" class="form-control" name="nilai_akhir" placeholder="Nilai Akhir" required="true" value="<?php echo $data->nilai_akhir; ?>"/>
                  </div>


                  <input type="hidden" name="id" value="<?php echo $data->id; ?>">
                  <a href="<?php echo base_url(); ?>admin/jawaban" class="btn btn-warning"><i class="fa fa-arrow-left"></i> Batal</a>
                  <button type="submit" name="simpan" class="btn btn-success"><i class="fa fa-save"></i> Simpan</button>
                <?php endforeach ?>
                <?php echo form_close(); ?>
              </div><!-- /.box-body -->
            </div><!-- /.box -->
          </section><!-- /.content -->
        </div>