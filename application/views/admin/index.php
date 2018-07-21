<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Panel Admin</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/ionicons/css/ionicons.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/datatables/dataTables.bootstrap.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/skins/_all-skins.min.css">
    <!-- Date Picker -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/datepicker/datepicker3.css">
    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="hold-transition skin-green sidebar-mini">
    <div class="wrapper">

      <header class="main-header">
        <!-- Logo -->
        <a href="<?php echo base_url(); ?>admin/index" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>IS</b>S</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><i class="glyphicon glyphicon-globe"></i><b> S I S T E R </b> </span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">             
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown">
        			  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">User Login : <?php echo $user = $this->session->userdata('username'); ?>
                 <ul class="dropdown-menu" role="menu">
                  <li><a href="<?php echo base_url(); ?>admin/logout">Logout</a></li>
                </ul>
      			  </li>              
            </ul>
          </div>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header bg-blue-active">MAIN NAVIGATION</li>

            <?php  if($this->session->userdata('level') == "1"){ ?>
            <li class="<?php if($page == 'soal'){echo 'active';} ?>">
              <a href="<?php echo base_url(); ?>admin/soal">
                <i class="fa fa-file"></i> <span>Pilih Soal</span> 
              </a>
            </li>

            <li class="<?php if($page == 'berita'){echo 'active';} ?>">
              <a href="<?php echo base_url(); ?>admin/berita">
                <i class="fa fa-print"></i> <span>Berita Acara</span> 
              </a>
            </li> 

            <li class="<?php if($page == 'honor'){echo 'active';} ?>">
              <a href="<?php echo base_url(); ?>admin/honor">
                <i class="fa fa-envelope-o"></i> <span>Cetak Honor</span> 
              </a>
            </li> 

            <?php  } ?>

            <?php  if($this->session->userdata('level') == "0"){ ?>
            
            <li class="<?php if($page == 'dashboard'){echo 'active';} ?>">
                  <a href="<?php echo base_url(); ?>admin">
                    <i class="fa fa-desktop"></i> <span>Dashboard</span>
                  </a>
                </li>

            <li class="<?php if($page == 'export'){echo 'active';} ?>">
                  <a href="<?php echo base_url(); ?>admin/export">
                    <i class="fa fa-file-excel-o"></i> <span>Export Soal</span>
                  </a>
                </li>

            <li class="<?php if($page == 'v_dosen'){echo 'active';} ?>">
              <a href="<?php echo base_url(); ?>admin/dosen">
                <i class="fa fa-user-plus"></i> <span> Data Dosen</span> 
              </a>
            </li>
              <?php  } ?>

            
            <li class="<?php if($page == 'logout'){echo 'active';} ?>">
              <a href="<?php echo base_url(); ?>admin/logout">
                <i class="fa fa-power-off"></i> <span>Keluar</span>
              </a>
            </li>

            -->
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>

      <?php $this->load->view('admin/'.$page); ?>

     <div class="modal modal-success fade" id="modal-delete" data-backdrop="static">
      <div class="modal-dialog" style="width: 350px; margin-top: 200px">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title"><i class="fa fa-book"></i> Pilih Dosen </h4>
          </div>
          <div class="modal-body">
            <div class="box-body table-responsive">
              <div class="box-body">
                <div class="row">
                  <div class="col-xs-12">
                    <input type="hidden" id="delete-id" name="delete-id" />
                    <input type="hidden" id="delete-title" name="delete-title" />
                    <!--
                    <p>Are you sure to delete this data ?</p>
                    <div class="callout callout-danger">
                      <p>Title: <span class="delete-title"> </span></p>
                      <p>Author: <span class="delete-author"> </span></p>
                    </div>
                  -->

                    <select class="form-control" id="sel1">
                      <option>Hani Alhazani, S.Kom</option>
                      <option>Muhlis, S.Kom</option>
                      <option>Eka Riana, ST</option>
                      <option>Emirullah, S.Pd</option>
                    </select>

                  </div>
                </div>
              </div>
            </div><!-- /.box-body -->
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Cancel</button>
            <button id="btn-delete" type="button" class="btn btn-primary"><i class="fa fa-check"></i> Yes</button>
          </div>
        </div>
      </div>
    </div>

      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 1.0
        </div>
        <strong>Copyright &copy; <?php echo date('Y') ?> <a href="http://www.smkbpm.sch.id" target="_blank">SISTER</a>.</strong> All rights reserved.
      </footer>
    </div><!-- ./wrapper -->




    <!-- jQuery 2.1.4 -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>

      


        $(document).ready(function () {

          $('#btn-delete-trig').click(function(){
            $('#modal-delete').modal('show');
        });


          //$('#modal-delete').modal('show');

          //Initialize tooltips
          $('.nav-tabs > li a[title]').tooltip();
          
          //Wizard
          $('a[data-toggle="tab"]').on('show.bs.tab', function (e) {

              var $target = $(e.target);
          
              if ($target.parent().hasClass('disabled')) {
                  return false;

              }
          });

          $(".next-step").click(function (e) {

              var $active = $('.wizard .nav-tabs li.active');
              $active.next().removeClass('disabled');
              nextTab($active);

          });
          $(".prev-step").click(function (e) {

              var $active = $('.wizard .nav-tabs li.active');
              prevTab($active);

          });

          $(".save").click(function (e) {
              var data = $('.form-user').serialize();
              $.ajax({
                type: 'POST',
                url: "../siswa/update_profile",
                data: data,
                dataType: "JSON",
                success: function(data) {
                    alert(data.status);
                    /*
                    var $active = $('.wizard .nav-tabs li.active');
                    $active.next().removeClass('disabled');
                    nextTab($active); */
                }
              });

          });
      });

      function nextTab(elem) {
          $(elem).next().find('a[data-toggle="tab"]').click();
      }
      function prevTab(elem) {
          $(elem).prev().find('a[data-toggle="tab"]').click();
      }

      function validAngka(a)
      {
        if(!/^[0-9.]+$/.test(a.value))
        {
        a.value = a.value.substring(0,a.value.length-1000);
        }
      }

      $(function () {
        $("#example1").DataTable({          
          "language": {
            "url": "<?php echo base_url(); ?>assets/plugins/datatables/Indonesian.json",
            "sEmptyTable": "Tidak ada data di database"
        }
        });
      });

      $(function() {
          $( "#tanggal_lahir" ).datepicker({ 
            autoclose: true 
          });

          $( "#tgl_awal" ).datepicker({ 
            autoclose: true 
          });

          $( "#tgl_akhir" ).datepicker({ 
            autoclose: true 
          });

        });
    </script>

    <script>
      $(document).ready(function(){
          $('#dosen').change(function() {
            //alert($("#dosen option:selected").text());

            var postForm = { 
              'dosen'     : $("#dosen option:selected").text()
            };

            $.ajax({
                type: "POST",
                url: "<?php echo site_url('admin/save_session')?>",
                data: postForm,
                success: function(data) {
                    return false
                }
            });
          });  
      });
    </script>

    <!-- Bootstrap 3.3.5 -->
    <script src="<?php echo base_url(); ?>assets/bootstrap/js/bootstrap.min.js"></script>
    <!-- DataTables -->
    <script src="<?php echo base_url(); ?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/datatables/dataTables.bootstrap.min.js"></script>
    <!-- datepicker -->
    <script src="<?php echo base_url(); ?>assets/plugins/datepicker/bootstrap-datepicker.js"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo base_url(); ?>assets/dist/js/app.min.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    
    
    <!-- AdminLTE for demo purposes -->
    <script src="<?php echo base_url(); ?>assets/dist/js/demo.js"></script>
    
  </body>
</html>
