<!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
          <section class="content-header">
            <h1>
              Tambah
              <small>Soal Ujian</small>
            </h1>
            <ol class="breadcrumb">
              <li><i class="fa fa-dashboard"></i> Home</a></li>
              <li><a href="<?php echo base_url(); ?>admin/soal_ujian">Soal Ujian</a></li>
              <li class="active">Tambah</li>
            </ol>
          </section>

          <!-- Main content -->
          <section class="content">
            <div class="box box-info">
              <div class="box-header with-border">
                <h3 class="box-title">Form Tambah Soal Ujian</h3>
              </div>
              <div class="box-body">
                <!-- form start -->
                <?php echo form_open('admin/insert_soal_ujian'); ?>

                <div class="form-group">
                  <label for="sel1">Kategori Soal</label>
                  <select class="form-control" id="departement" name="departement">
                    <?php  
                      foreach ($data_departement as $data):
                    ?>
                    <option value="<?php echo $data->id_kategori; ?>"><?php echo $data->kategori; ?></option>
                    <?php endforeach ?>
                  </select>
                </div>
                
                <div class="form-group">
                    <label for="exampleInputEmail1">Nama Soal</label>
                      <input type="text" class="form-control" name="nama_soal" placeholder="Nama Soal" required="true" />
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Uraian Soal</label>
                      <input type="text" class="form-control" name="uraian" placeholder="Uraian Soal" required="true" />
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1"> Jawaban A</label>
                      <input type="text" class="form-control" name="a" placeholder="Jawaban A" required="true" />
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1"> Jawaban B</label>
                      <input type="text" class="form-control" name="b" placeholder="Jawaban B" required="true" />
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1"> Jawaban C</label>
                      <input type="text" class="form-control" name="c" placeholder="Jawaban C" required="true" />
                  </div>
                  
                  <div class="form-group">
                    <label for="exampleInputEmail1"> Jawaban D</label>
                      <input type="text" class="form-control" name="d" placeholder="Jawaban D" required="true" />
                  </div>

                  <div class="form-group">
                  <label for="sel1">Jawaban Benar</label>
                    <select class="form-control" id="jawaban_benar" name="jawaban_benar">
                      
                      <option value="1">A</option>
                      <option value="2">B</option>
                      <option value="3">C</option>
                      <option value="4">D</option>
                      
                    </select>
                </div>


                  <a href="<?php echo base_url(); ?>admin/soal_ujian" class="btn btn-warning"><i class="fa fa-arrow-left"></i> Batal</a>
                  <button type="submit" name="simpan" class="btn btn-success"><i class="fa fa-save"></i> Simpan</button>
                <?php echo form_close(); ?>
                
              </div><!-- /.box-body -->
            </div><!-- /.box -->
          </section><!-- /.content -->
        </div>