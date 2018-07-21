<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Dashboard - <?php echo $this->config->item('nama_aplikasi')." ".$this->config->item('versi'); ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta name="apple-mobile-web-app-capable" content="yes">
<link href="<?php echo base_url(); ?>___/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>___/css/style_dosen.css?<?php echo time(); ?>" rel="stylesheet">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

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
    color: #43433f;
    font-size: 13px;
}

.bg-kanan {
    background: #fff;
    right: 0;
    border-color:white;
    min-height: 92vh;
}

.full-height {
    background: #fff;
    right: 0;
    border-color:white;
}
.margin-bottom {
    margin-bottom:10px;
}

.margin-right{
    margin: 0px;
}

input[type=text], .txtarea{
    margin-bottom: 10px;
}
</style>
</head>
<body>
    <!--
<div class="se-pre-con"></div>
-->

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
                <li><a href="<?php echo site_url('admin/logout')?>" class="#"><i class="glyphicon glyphicon-off"></i> Keluar Aplikasi</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="dmobile">
    <div class="col-md-2" id="v_jawaban" style="background:#32CD32; font-color:#fff">
        <div>

            <!--
            <div class="panel-heading" id="nav_soal" style="overflow: auto">
                <div class="btn btn-default col-md-12"><i class="fa fa-search"></i> Navigasi Soal</div>
            </div>
        -->

            <div class="panel-body" style="overflow: auto;height: 100%; background:#32CD32; font-color:#fff">
                <div id="tampil_jawaban" class="text-center"></div>

                <div class="text-center"><img class="img-circle" src="<?php echo base_url(); ?>___/img/avatar.jpg" alt="Avatar"></div> <br>
                <div>

                    <label>
                    Nama Lengkap <br> <?php echo $dosen->nama_lengkap; ?>
                    </label>
                    <br><br>
                    <label>
                    NIP  <br> <?php echo $dosen->nip; ?>
                    </label> <br><br>

                    <label>
                    Formasi  <br> <?php echo $dosen->formasi; ?>
                    </label> <br><br>

                    <label>
                    Wilayah  <br> <?php echo $dosen->wilayah; ?>
                    </label> <br><br>

                    <label>
                    Jenis Soal  <br> <?php echo $dosen->jenis_soal; ?>
                    </label> <br>
                </div>
            </div>

            <a class="btn btn-warning btn-block center-block" href="#" onclick="return m_siswa_e(0);"><i class="glyphicon glyphicon-plus"></i> Input Referensi </a>   
        </div>
    </div>

    <div class="col-md-10 bg-kanan">
        <form class="form-horizontal" role="form" name="_form" method="post" id="_form">
            
                <div class="panel-heading">Soal Ke <div class="btn btn-info" id="soalke"></div>
        
                    <div class="tbl-kanan-soal">
                        <div id="clock" style="font-weight: bold" class="btn timer btn-success"></div>
                    </div>
                </div>

                <div class="panel-body">
                    
                    <div class="margin-bottom">
                        <div class="input-group ">
                            <label class="input-group-btn">>Gambar Soal
                                <span class="btn btn-danger">
                                    Browse&hellip; <input type="file" id="media" name="media" style="display: none;" required>
                                </span>
                            </label>
                            <input type="text" class="form-control" size="20" id="image" readonly required>
                        </div>

                        <div class="progress" style="display:none">
                            <div id="progressBar" class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
                                <span class="sr-only">0%</span>
                            </div>
                        </div>
                        <div class="msg alert alert-info text-left" style="display:none"></div>
                    
                    </div>

                  <div class="form-group">
                    <label for="nama" class="col-xs-1">Uraian</label>
                    <div class="col-xs-11">
                      <textarea class="form-control" name="uraian" rows="4" id="uraian"></textarea>
                  </div>
                  </div>

                  <div class="form-group margin-bottom">
                    <label for="nama" class="col-xs-1">Pilihan A</label>
                     <div class="col-xs-11">
                      <input type="text" class="form-control margin-bottom" id="jawaban_a" name="jawaban_a" required="true" />
                  </div>
                  </div>

                  <div class="form-group margin-bottom">
                    <label for="nama" class="col-xs-1">Pilihan B</label>
                     <div class="col-xs-11">
                      <input type="text" class="form-control"  id="jawaban_b" name="jawaban_b" required="true" />
                  </div>
                  </div>

                  <div class="form-group margin-bottom">
                    <label for="nama" class="col-xs-1">Pilihan C</label>
                     <div class="col-xs-11">
                      <input type="text" class="form-control" id="jawaban_c" name="jawaban_c" required="true" />
                  </div>
                  </div>
                  
                  <div class="form-group margin-bottom">
                    <label for="nama" class="col-xs-1">Pilihan D</label>
                     <div class="col-xs-11">
                      <input type="text" class="form-control" id="jawaban_d" name="jawaban_d"  required="true" />
                  </div>
                  </div>

                  <div class="form-group margin-bottom">
                    <input type="hidden" name="id_soal" id="id_soal">
                    <label for="nama" class="col-xs-1">Pilihan E</label>
                     <div class="col-xs-11">
                      <input type="text" class="form-control" id="jawaban_e" name="jawaban_e" required="true" />
                  </div>
                  </div>

                  <div class="form-group margin-bottom">
                  <label for="nama" class="col-xs-1">Jawaban</label>
                     <div class="col-xs-11">
                    <select class="form-control" id="jawaban_benar" name="jawaban_benar">
                      
                      <option value="1">A</option>
                      <option value="2">B</option>
                      <option value="3">C</option>
                      <option value="4">D</option>
                      <option value="5">E</option>
                    </select>
                </div>
                </div>

                </div>

                <div class="panel-footer full-height">
                <div class="row">
                    <div class="col-md-4">
                    <a class="action back btn btn-info back" rel="0" id="back" onclick="return back();"><i class="glyphicon glyphicon-chevron-left"></i> Sebelumnya</a>

                    </div>
                    <div class="col-md-4">
                        <button type="submit" class="btn btn-primary center-block"><i class="glyphicon glyphicon-floppy-disk"></i> Simpan</button>
                    </div>

                    <div class="col-md-4">
                    <a class="action next btn btn-info pull-right next" id="next" rel="2" onclick="return next();"><i class="glyphicon glyphicon-chevron-right"></i> Berikutnya</a>
                    </div>
                    
                    </div>
                </div>
            
        </form>
</div>


<div class="ajax-loading"><i class="fa fa-spin fa-spinner"></i> Loading ...</div>

<div class="modal fade" id="m_siswa" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 id="myModalLabel">Data Referensi</h4>
      </div>
      <div class="modal-body">
          <form name="f_siswa" id="f_siswa" onsubmit="return m_siswa_s();">
            <input type="hidden" name="id" id="id" value="0">
              <table class="table table-form">
                <tr><td style="width: 25%">Judul Buku</td><td style="width: 75%"><input type="text" class="form-control" name="judul" id="judul" required></td></tr>
                <tr><td style="width: 25%">Pengarang</td><td style="width: 75%"><input type="text" class="form-control" name="pengarang" id="pengarang" required></td></tr>
                <tr><td style="width: 25%">Penerbit</td><td style="width: 75%"><input type="text" class="form-control" name="penerbit" id="penerbit" required></td></tr>
                <tr><td style="width: 25%">Thn. Terbit</td><td style="width: 75%"><input type="text" class="form-control" name="tahun" id="tahun" required></td></tr>
              </table>

              
                <a href="#" onclick="return add();" class="btn btn-info" style="margin-bottom: 10px"><i class="glyphicon glyphicon-plus"></i> Add</a>

      <table class="table table-bordered" id="datatabel">
        <thead>
          <tr>
            <th width="35%">Jurul</th>
            <th width="15%">Pengarang</th>
            <th width="20%">Penerbit</th>
            <th width="15%">Thn. Terbit</th>
          </tr>
        </thead>

        <tbody>
        <?php
            $cart = $this->cart->contents();
        //https://stackoverflow.com/questions/15117078/codeigniter-unable-to-show-the-specific-value-from-cart-option-in-the-view-page

        foreach ($cart as $contents) {
                    ?><tr>
                        <td><?php echo $contents['name']; ?></td>
                        <td><?php echo $contents['options']['pengarang']; ?></td>
                        <td><?php echo $contents['options']['penerbit']; ?></td>
                        <td><?php echo $contents['options']['tahun']; ?></td>
                    </tr>

                <?php } ?>

                </tbody>
      </table>
    
      </div>

      <div class="modal-footer">
        <button class="btn btn-primary"><i class="fa fa-check"></i> Simpan</button>
        <button class="btn" data-dismiss="modal" aria-hidden="true"><i class="fa fa-minus-circle"></i> Tutup</button>
      </div>
        </form>
    </div>
  </div>
</div>

<script src="<?php echo base_url(); ?>___/js/jquery-1.11.3.min.js"></script> 
<script src="<?php echo base_url(); ?>___/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>___/plugin/countdown/jquery.countdownTimer.js"></script> 
<script src="<?php echo base_url(); ?>___/plugin/jquery_zoom/jquery.zoom.min.js"></script>
<script src="<?php echo base_url(); ?>___/js/upload.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
<script src="<?php echo base_url(); ?>___/plugin/uptimer/dist/ez.countimer.js"></script>

<script type="text/javascript">
    
    var base_url = "<?php echo base_url(); ?>";
    var id_widget=1;
    
    $(window).load(function() {
       // $(".se-pre-con").fadeOut("slow");

        $('.timer').countimer({
            autoStart : true
            });

    });
    
    function clock() {
          var now = new Date();
          var secs = ('0' + now.getSeconds()).slice(-2);
          var mins = ('0' + now.getMinutes()).slice(-2);
          var hr = now.getHours();
          var Time = hr + ":" + mins + ":" + secs;
          document.getElementById("clock").innerHTML = Time;
          requestAnimationFrame(clock);
    }

    //requestAnimationFrame(clock);
    cek_urutan(id_widget);


    function m_siswa_e(id) {
        $("#judul").val("");
        $("#pengarang").val("");
        $("#penerbit").val("");
        $("#tahun").val("");

        $("#m_siswa").modal('show');
        $.ajax({
            type: "GET",
            url: base_url+"adm/m_siswa/det/"+id,
            success: function(data) {
                $("#id").val(data.id);
                $("#nama").val(data.nama);
                $("#nim").val(data.nim);
                $("#jurusan").val(data.jurusan);
                $("#nama").focus();
            }
        });
        return false;
    }


    function add(){
        
        var judul = $("#judul").val();
        var pengarang = $("#pengarang").val();
        var penerbit = $("#penerbit").val();
        var tahun = $("#tahun").val();

        $("#datatabel > tbody").append("<tr><td>"+ judul +"</td><td>"+ pengarang +"</td><td>"+ penerbit +"</td><td>"+ tahun +"</td></tr>");

        var postForm = { 
            'judul'     : judul,
            'pengarang' : pengarang,
            'penerbit' : penerbit,
            'tahun' : tahun
        };

        $.ajax({
            type: "POST",
            url: base_url+"dosen/save_referensi",
            data: postForm,
            success: function(data) {
                alert("success");
            }
        });
        
    }

    /*
    var count = 0;
    var timer = $.timer(function() {
        $('#clock').html(++count);
    });
    timer.set({ time : 1000, autostart : true });
    */
    /*
    var Example1 = new (function() {
        var $stopwatch, 
            incrementTime = 70, 
            currentTime = 0, 
            updateTimer = function() {
                $stopwatch.html(formatTime(currentTime));
                currentTime += incrementTime / 10;
            },
            init = function() {
                $stopwatch = $('#clock');
                Example1.Timer = $.timer(updateTimer, incrementTime, true);
            };
        this.resetStopwatch = function() {
            currentTime = 0;
            this.Timer.stop().once();
        };
        $(init);
    });*/

    

    function cek_urutan(key){
        if (key==1) {
            $("#back").toggleClass('disabled');
        }else{
            $("#back").removeClass('disabled');
        }
    }

    function waktu() {
        var tanggal = new Date();
        setTimeout("waktu()",1000);
        document.getElementById("jam").innerHTML = tanggal.getHours();
        document.getElementById("menit").innerHTML = tanggal.getMinutes();
        document.getElementById("detik").innerHTML = tanggal.getSeconds();
    }

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

    buka2 = function(id_widget) {
        $(".next").attr('rel', (id_widget+1));
        $(".back").attr('rel', (id_widget-1));
        $(".ragu_ragu").attr('rel', (id_widget));
        $("#soalke").html(id_widget);
        
        $(".step").hide();
        $("#widget_"+id_widget).show();
    }

    buka = function(id_widget) {
        $.ajax({
            method: "POST",
            dataType: "json",
            url : base_url+"test/get_soal",
            data: { urutan: id_widget},
            beforeSend: function() {
                    $('.ajax-loading').show();    
                }
        })
        .done(function( msg ) {
            $('.ajax-loading').hide(); 

            if ( msg.length == 0 ) 
            {
                console.log("NO !");    
                $("#uraian").html("");
                $("#jawaban_a").val("");
                $("#jawaban_b").val("");
                $("#jawaban_c").val("");
                $("#jawaban_d").val("");
                $("#jawaban_e").val("");
                $("#soalke").html(id_widget);
                $("#next").toggleClass('disabled');
                $("#image").val("");
            }else{
                $("#uraian").html(msg.soal);
                $("#jawaban_a").val(msg.opsi_a);
                $("#jawaban_b").val(msg.opsi_b);
                $("#jawaban_c").val(msg.opsi_c);
                $("#jawaban_d").val(msg.opsi_d);
                $("#jawaban_e").val(msg.opsi_e);
                $("#soalke").html(msg.urutan);
                $("#image").val(msg.file);
                //$('#target_div').html('<img src="'+ base_url + "files/" + msg.file +'" width=100 height=100 alt="Hello Image" />');
            }

            
        });
    }

    next = function() {
        var urutan = parseInt($("#soalke").text())+1;

        $.ajax({
            method: "POST",
            dataType: "json",
            url : base_url+"test/get_soal",
            data: { urutan: urutan},
            beforeSend: function() {
                    $('.ajax-loading').show();    
                }
        })
        .done(function( msg ) {
            $('.ajax-loading').hide(); 
            if ( msg.length == 0 ) 
            {
                console.log("NO !");    
                $("#uraian").html("");
                $("#jawaban_a").val("");
                $("#jawaban_b").val("");
                $("#jawaban_c").val("");
                $("#jawaban_d").val("");
                $("#jawaban_e").val("");
                $("#next").toggleClass('disabled');
                $("#soalke").html(urutan);
                $("#image").val("");
            }else{
                $("#next").removeClass('disabled');
                $("#uraian").html(msg.soal);
                $("#jawaban_a").val(msg.opsi_a);
                $("#jawaban_b").val(msg.opsi_b);
                $("#jawaban_c").val(msg.opsi_c);
                $("#jawaban_d").val(msg.opsi_d);
                $("#jawaban_e").val(msg.opsi_e);
                $("#soalke").html(msg.urutan);
                $("#image").val(msg.file);
                //$('#target_div').html('<img src="'+ base_url + "files/" + msg.file +'" width=100 height=100 alt="Hello Image" />');
            }
        });

        cek_urutan(urutan);
    }

    back = function() {
        var urutan = parseInt($("#soalke").text())-1;
        $.ajax({
            method: "POST",
            dataType: "json",
            url : base_url+"test/get_soal",
            data: { urutan: urutan},
            beforeSend: function() {
                    $('.ajax-loading').show();    
                }
        })
        .done(function( msg ) {
            $('.ajax-loading').hide(); 
            if ( msg.length == 0 ) 
            {
                console.log("NO !");    
                $("#uraian").html("");
                $("#jawaban_a").val("");
                $("#jawaban_b").val("");
                $("#jawaban_c").val("");
                $("#jawaban_d").val("");
                $("#jawaban_e").val("");
                $("#image").val("");
            }else{
                $("#next").removeClass('disabled');
                $("#uraian").html(msg.soal);
                $("#jawaban_a").val(msg.opsi_a);
                $("#jawaban_b").val(msg.opsi_b);
                $("#jawaban_c").val(msg.opsi_c);
                $("#jawaban_d").val(msg.opsi_d);
                $("#jawaban_e").val(msg.opsi_e);
                $("#soalke").html(msg.urutan);
                $("#image").val(msg.file);
            }
            cek_urutan(urutan);
        });
    }

    buka(id_widget);

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
