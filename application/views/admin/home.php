<!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Dashboard
            <small>Control panel</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          
          <!-- Small boxes (Stat box) -->
          <div class="row">
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-aqua">
                <div class="inner">
                  <h3><?php echo "120"; ?></h3>
                  <p>Soal yang di buat</p>
                </div>
                <div class="icon">
                  <i class="fa fa-envelope"></i>
                </div>
                <a href="<?php echo base_url(); ?>admin" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->

            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-yellow">
                <div class="inner">
                  <h3><?php echo $departement; ?></h3>
                  <p> Soal yang di hapus</p>
                </div>
                <div class="icon">
                  <i class="fa fa-tag"></i>
                </div>
                <a href="<?php echo base_url(); ?>admin" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->

            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-green">
                <div class="inner">
                  <h3><?php echo $dosen; ?></h3>
                  <p>Jumlah dosen yang ikut</p>
                </div>
                <div class="icon">
                  <i class="fa fa-tag"></i>
                </div>
                <a href="<?php echo base_url(); ?>admin" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->

            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-red">
                <div class="inner">
                  <h3><?php echo "10%"; ?></h3>
                  <p>Persentase progres pembuatan soal</p>
                </div>
                <div class="icon">
                  <i class="fa fa-tag"></i>
                </div>
                <a href="<?php echo base_url(); ?>admin" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->


            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-red">
                <div class="inner">
                  <h3><?php echo "100"; ?></h3>
                  <p>Dosen yang sudah selesai</p>
                </div>
                <div class="icon">
                  <i class="fa fa-tag"></i>
                </div>
                <a href="<?php echo base_url(); ?>admin" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->


            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-green">
                <div class="inner">
                  <h3><?php echo $surat_keluar; ?></h3>
                  <p>Soal yang di edit</p>
                </div>
                <div class="icon">
                  <i class="fa fa-tag"></i>
                </div>
                <a href="<?php echo base_url(); ?>admin" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->

          </div><!-- /.row -->
          

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
