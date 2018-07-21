<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Dashboard - <?php echo $this->config->item('nama_aplikasi')." ".$this->config->item('versi'); ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta name="apple-mobile-web-app-capable" content="yes">
<link href="<?php echo base_url(); ?>___/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>___/css/style.css?<?php echo time(); ?>" rel="stylesheet">

<style type="text/css">
    .no-js #loader { display: none;  }
    .js #loader { display: block; position: absolute; left: 100px; top: 0; }
    .se-pre-con {
        position: fixed;
        left: 0px;
        top: 0px;
        width: 100%;
        height: 100%;
        z-index: 9999;
        background: url(<?php echo base_url('___/img/facebook.gif'); ?>) center no-repeat #fff;
    }

        .img-circle {
        border-radius: 50%;
        width: 100px;
        height: 100px;
    }
    .ajax-loading {
        position: fixed;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        z-index: 9999;
        background: #6f6464;
        opacity: 0.75;
        color: #fff;
        text-align: center;
        font-size: 25px;
        padding-top: 200px;
        display: none;
    }

    .ml-auto .dropdown-menu {
    left: auto !important;
    right: 0px;
  }

  .gambar {
    height: 200px;
    width: 200px;
  }

  #jam-digital{overflow:hidden; width:300px;background-color:#2c2d2d;}
    #hours{float:left; width:80px; height:55px; background-color:#6B9AB8; margin-right:25px}
    #minute{float:left; width:80px; height:55px; background-color:#A5B1CB}
    #second{float:right; width:80px; height:55px; background-color:#FF618A; margin-left:25px}
    #jam-digital p{color:#FFF; font-size:36px; text-align:center; margin-top:2px}

label{
    color: #fff;
}

.bg-kanan {
    background: #fff;
    right: 0;
    border-color:white;
    position: absolute;
    top: 50px;
    bottom: 0;
}

.full-height {
    background: #fff;
    right: 0;
    border-color:white;
}
.margin-bottom {
    margin-bottom:10px;
}

input[type=text], .txtarea{
    margin-bottom: 10px;
}
</style>
</head>
<body>


<nav class="navbar navbar-findcond navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand"><i class="glyphicon glyphicon-globe"></i> SISTER - Pembuatan Soal</a>
        </div>

        <div class="collapse navbar-collapse" id="navbar">
            <ul class="nav navbar-nav navbar-right" style="z-index: 1000">
                <li><a class="#" onclick="return simpan_akhir();"><i class="glyphicon glyphicon-off"></i> Keluar Aplikasi</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="dmobile">
    <div class="col-md-2" id="v_jawaban" style="background:#292c29; font-color:#fff">
        <div>

            <!--
            <div class="panel-heading" id="nav_soal" style="overflow: auto">
                <div class="btn btn-default col-md-12"><i class="fa fa-search"></i> Navigasi Soal</div>
            </div>
        -->

            <div class="panel-body" style="overflow: auto;height: 100%; background:#292c29; font-color:#fff">
                <div id="tampil_jawaban" class="text-center"></div>

                <div class="text-center"><img class="img-circle" src="<?php echo base_url(); ?>___/img/avatar.jpg" alt="Avatar"></div> <br>
                <div>

                    <label>
                    Nama Lengkap <br> <?php echo $dosen->nama_lengkap; ?>
                    </label>
                    <br><br>
                    <label>
                    Nipd  <br> <?php echo $dosen->nipd; ?>
                    </label> <br><br>

                    <label>
                    Formasi  <br> <?php echo $dosen->formasi; ?>
                    </label> <br><br>

                    <label>
                    Tingkat  <br> <?php echo $dosen->tingkat; ?>
                    </label> <br><br>

                    <label>
                    Jenis Soal  <br> <?php echo $dosen->jenis_soal; ?>
                    </label> <br>
                </div>
            </div>
        </div>

        <!--
        <footer class="page-footer font-small blue pt-4 mt-4 text-center">
            <div id="jam-digital">
        <div id="hours"><p id="jam"></p></div>
        <div id="minute"><p id="menit"></p></div>
        <div id="second"><p id="detik"></p></div>
    </div>
        </footer>
    -->

    </div>

    <div class="col-md-10 bg-kanan">
        <form role="form" name="_form" method="post" id="_form" action="">
            <div class="full-height">
                <div class="panel-heading">Soal Ke <div class="btn btn-info" id="soalke"></div>
        
                    <div class="tbl-kanan-soal">
                        <div id="clock" style="font-weight: bold" class="btn btn-success"></div>
                    </div>
                </div>

                <div class="panel-body" style="overflow: auto">
                    <div class="margin-bottom">
                        <div class="input-group ">
                            <label class="input-group-btn">>Gambar Soal
                                <span class="btn btn-danger">
                                    Browse&hellip; <input type="file" id="media" name="media" style="display: none;" required>
                                </span>
                            </label>
                            <input type="text" class="form-control" size="20" readonly required>
                        </div>

                        <div class="progress" style="display:none">
                            <div id="progressBar" class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
                                <span class="sr-only">0%</span>
                            </div>
                        </div>
                        <div class="msg alert alert-info text-left" style="display:none"></div>
                    
                    </div>
                  <div class="form-group">
                      <textarea class="form-control" rows="4" placeholder="Uraian Soal" id="cpDesc"></textarea>
                  </div>

                  <div class="form-group">
                    
                      <input type="text" class="form-control margin-bottom" value="A" name="a" placeholder="Jawaban A" required="true" />
                  </div>

                  <div class="form-group">
                    
                      <input type="text" class="form-control" value="B"  name="b" placeholder="Jawaban B" required="true" />
                  </div>

                  <div class="form-group">
                    
                      <input type="text" class="form-control" value="C" name="c" placeholder="Jawaban C" required="true" />
                  </div>
                  
                  <div class="form-group">
                    
                      <input type="text" class="form-control" value="D" name="d" placeholder="Jawaban D" required="true" />
                  </div>

                  <div class="form-group">
                    
                      <input type="text" class="form-control" value="E" name="d" placeholder="Jawaban E" required="true" />
                  </div>

                  <div class="form-group">
                  
                    <select class="form-control" id="jawaban_benar" name="jawaban_benar">
                      
                      <option value="1">A</option>
                      <option value="2">B</option>
                      <option value="3">C</option>
                      <option value="4">D</option>
                      <option value="5">E</option>
                    </select>
                </div>

                </div>

                <div class="panel-footer full-height">
                <div class="row">
                    <div class="col-md-4">
                    <a class="action back btn btn-info" rel="0" onclick="return back();"><i class="glyphicon glyphicon-chevron-left"></i> Sebelumnya</a>

                    </div>

                    <div class="col-md-3">
                    <a class="ragu_ragu btn btn-primary" rel="1" onclick="document.getElementById('_form').submit()"><i class="glyphicon glyphicon-floppy-disk"></i> Simpan</a>

                </div>
                    <div class="col-md-5 ">
                    <a class="action next btn btn-info pull-right" rel="2" onclick="return next();"><i class="glyphicon glyphicon-chevron-right"></i> Berikutnya</a>
                    </div>
                    
                    
                   
                    <!--
                    <a class="selesai action submit btn btn-danger" onclick="return simpan_akhir();"><i class="glyphicon glyphicon-stop"></i> Selesai</a>
                    -->
                    </div>
                </div>
            </div>
        </form>
</div>

<div class="ajax-loading"><i class="fa fa-spin fa-spinner"></i> Loading ...</div>

<script src="<?php echo base_url(); ?>___/js/jquery-1.11.3.min.js"></script> 
<script src="<?php echo base_url(); ?>___/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>___/plugin/countdown/jquery.countdownTimer.js"></script> 
<script src="<?php echo base_url(); ?>___/plugin/jquery_zoom/jquery.zoom.min.js"></script>
<script src="<?php echo base_url(); ?>___/js/upload.js"></script>


<script type="text/javascript">
    //var id_tes;
    //var base_url = "<?php //echo base_url(); ?>";
    //id_tes = "<?php //echo $id_tes; ?>";

    /*
    $(window).load(function() {
        $(".se-pre-con").fadeOut("slow");
    });
    */

    //window.setTimeout("waktu()",1000);

    function waktu() {
        var tanggal = new Date();
        setTimeout("waktu()",1000);
        document.getElementById("jam").innerHTML = tanggal.getHours();
        document.getElementById("menit").innerHTML = tanggal.getMinutes();
        document.getElementById("detik").innerHTML = tanggal.getSeconds();
    }

    //hitung();

    hitung = function() {
        var tgl_mulai = '<?php echo date('Y-m-d H:i:s'); ?>';
       

        $("div#clock").countdowntimer({
            startDate : tgl_mulai,
            dateAndTime : tgl_mulai,
            size : "lg",
            displayFormat: "HMS",
            timeUp : tgl_mulai,
        });
    }

    buka = function(id_widget) {
        $(".next").attr('rel', (id_widget+1));
        $(".back").attr('rel', (id_widget-1));
        $(".ragu_ragu").attr('rel', (id_widget));
        $("#soalke").html(id_widget);
        
        $(".step").hide();
        $("#widget_"+id_widget).show();
    }

    //hitung();
    buka(1);

    $(function() {
        base_url = "<?php echo base_url(); ?>";
      $(document).on('change', ':file', function() {
        var input = $(this),
            numFiles = input.get(0).files ? input.get(0).files.length : 1,
            label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
        input.trigger('fileselect', [numFiles, label]);
      });
    });


    $(document).ready( function() {
        //$(".se-pre-con").fadeOut("slow");

        //$('.ajax-loading').show(); 
          $(':file').on('fileselect', function(event, numFiles, label) {

              var input = $(this).parents('.input-group').find(':text'),
                  log = numFiles > 1 ? numFiles + ' files selected' : label;

              if( input.length ) {
                  input.val(log);
              } else {
                  if( log ) alert(log);
              }

          });
      });
    </script>

</body>
</html>
