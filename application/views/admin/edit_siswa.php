<!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
          
          <!-- Main content -->
          <section class="content">
            <div class="box box-info">
              <div class="box-header with-border">
                <h3 class="box-title">Biodata Pribadi</h3>
              </div>
              <div class="box-body">
                <!-- form start -->
                
                  <div class="nav-tabs-custom">
                    <ul class="nav nav-tabs">
                    
                      <li class="active"><a href="#activity" data-toggle="tab">Personal Info</a></li>
                      <li><a href="#alamat" data-toggle="tab">Alamat Lengkap</a></li>
                      <li><a href="#bank" data-toggle="tab">Data Bank</a></li>
                      <li><a href="#pendidikan" data-toggle="tab">Pendidikan</a></li>
                      <li><a href="#photo" data-toggle="tab">Photo</a></li>
                    
                    </ul>

                    <div class="tab-content">
                      <div id="activity" class="tab-pane fade in active">
                          <?php echo form_open('admin/update_departement'); ?>
                            <?php  
                            foreach ($editdata as $data):
                            ?>
                              <div class="form-group">
                                <div class="col-sm-6">
                                    <label for="nis">Nomor Induk Siswa</label>
                                    <input type="text" name="nis" class="form-control" value="<?php echo $data->NIPD; ?>" >
                                </div>
                                <div class="col-sm-6">
                                  <label for="exampleInputEmail1">Berat Badan</label>
                                  <input type="text" class="form-control" name="nama_departement" value="<?php echo $data->NIPD; ?>" required="true" />
                                </div>
                              </div>

                              <div class="form-group">
                                <div class="col-sm-6">
                                  <label for="example">Nama Lengkap</label>
                                    <input type="text" name="nama" class="form-control" required oninvalid="setCustomValidity('NIK Harus di Isi !')"
                                         oninput="setCustomValidity('')" placeholder="Masukan Induk Pegawai" value="<?php echo $data->Nama_Siswa; ?>" >
                                         
                                </div>
                                  <div class="col-sm-6">
                                    <label for="exampleInputEmail1">Tinggi Badan</label>
                                    <input type="text" class="form-control" name="nama_departement" value="<?php echo $data->NIPD; ?>" required="true" />
                                  </div>
                              </div>

                              <div class="form-group">
                                <div class="col-sm-6">
                                  <label for="example">Tempat Lahir</label>
                                    <input type="text" name="nama" class="form-control" required oninvalid="setCustomValidity('NIK Harus di Isi !')"
                                         oninput="setCustomValidity('')" placeholder="Masukan Induk Pegawai" value="<?php echo $data->Nama_Siswa; ?>" >
                                         
                                </div>
                                  <div class="col-sm-6">
                                    <label for="exampleInputEmail1">Golongan Darah</label>
                                    <input type="text" class="form-control" name="nama_departement" value="<?php echo $data->NIPD; ?>" required="true" />
                                  </div>
                              </div>

                              <div class="form-group">
                                <div class="col-sm-6">
                                  <label for="example">Tanggal Lahir</label>
                                    <input type="text" name="nama" class="form-control" required oninvalid="setCustomValidity('NIK Harus di Isi !')"
                                         oninput="setCustomValidity('')" placeholder="Masukan Induk Pegawai" value="<?php echo $data->Nama_Siswa; ?>" >
                                         
                                </div>
                                  <div class="col-sm-6">
                                    <label for="tgllahir">Tanggal Lahir</label>
                                    <input type="text" class="form-control" name="nama_departement" value="<?php echo $data->NIPD; ?>" required="true" />
                                  </div>
                              </div>

                              <div class="form-group">
                                <div class="col-sm-6">
                                  <label for="agama">Agama</label>
                                    <input type="text" name="nama" class="form-control" required oninvalid="setCustomValidity('NIK Harus di Isi !')"
                                         oninput="setCustomValidity('')" placeholder="Masukan Induk Pegawai" value="<?php echo $data->Nama_Siswa; ?>" >
                                         
                                </div>
                                  <div class="col-sm-6">
                                    <label for="exampleInputEmail1">Tanggal Lahir</label>
                                    <input type="text" class="form-control" name="nama_departement" value="<?php echo $data->NIPD; ?>" required="true" />
                                  </div>
                              </div>

                              <div class="form-group">
                                <div class="col-sm-6">
                                  <label for="jeniskelamin">Jenis Kelamin</label>
                                    <input type="text" name="nama" class="form-control" required oninvalid="setCustomValidity('NIK Harus di Isi !')"
                                         oninput="setCustomValidity('')" placeholder="Masukan Induk Pegawai" value="<?php echo $data->Nama_Siswa; ?>" >
                                         
                                </div>
                                  <div class="col-sm-6">
                                    <label for="tgllahir">Tanggal Lahir</label>
                                    <input type="text" class="form-control" name="nama_departement" value="<?php echo $data->NIPD; ?>" required="true" />
                                  </div>
                              </div>

                              
                            <?php endforeach ?>
                            <?php echo form_close(); ?>
                      </div>

                      <div id="alamat" class="tab-pane">
                        <div class="form-group">
                                <div class="col-sm-6">
                                  <label for="jeniskelamin">Jenis Kelamin</label>
                                    <input type="text" name="nama" class="form-control" required oninvalid="setCustomValidity('NIK Harus di Isi !')"
                                         oninput="setCustomValidity('')" placeholder="Masukan Induk Pegawai" value="<?php echo $data->Nama_Siswa; ?>" >
                                         
                                </div>
                                  <div class="col-sm-6">
                                    <label for="tgllahir">Tanggal Lahir</label>
                                    <input type="text" class="form-control" name="nama_departement" value="<?php echo $data->NIPD; ?>" required="true" />
                                  </div>
                              </div>
                      </div>
                    </div>
                </div>
              </div><!-- /.box-body -->
            </div><!-- /.box -->
          </section><!-- /.content -->
        </div>