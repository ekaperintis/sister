<?php
/*
NIPD
Nama_Siswa
Tempat_Lahir
Tanggal_Lahir
Jenis_Kelamin
Kd_Kelas
Kd_Jurusan
No_HP
Email
Alamat
No_Telp
ID_Wali_Kelas
ID_Kaprog
Agama
Kewarganegaraan
Anakke
Berat_Badan
Tinggi_Badan
Gol_Darah
Nama_Ayah
Nama_Ibu
TglLahir_Ayah
TglLahir_Ibu
Pend_Ayah
Pend_Ibu
Jml_Saudara
Kode_Pos
Hp_Ayah
Hp_Ibu
Pekerjaan_Ayah
Pekerjaan_Ibu


*/
    if (isset($editdata)){
        foreach($editdata as $profile){
            $nik                = $profile->NIPD;
            $nama_lengkap       = $profile->Nama_Siswa;
            $alamat             = $profile->Alamat;
                    
            $tempat_lahir       = $profile->Tempat_Lahir;
            $tanggal_lahir      = $profile->Tanggal_Lahir;
            $jenis_kelamin      = $profile->Jenis_Kelamin;
                    
            $nomor_hp           = $profile->No_HP;
            $berat_badan        = $profile->Berat_Badan;
            $email              = $profile->Email;
            $tinggi_badan       = $profile->Tinggi_Badan;
            $agama              = $profile->Agama;
            $anakke             = $profile->Anakke;
            $jumlah_saudara     = $profile->Jml_Saudara;
            $gol_darah          = $profile->Gol_Darah;
            $kode_pos     = $profile->Kode_Pos;

            $nama_ayah     = $profile->Nama_Ayah;
            $nama_ibu     = $profile->Nama_Ibu;
            $pekerjaan_ayah     = $profile->Pekerjaan_Ayah;
            $pekerjaan_ibu     = $profile->Pekerjaan_Ibu;
            $hp_ayah     = $profile->Hp_Ayah;
            $hp_ibu     = $profile->Hp_Ibu;

            $pend_ayah  = $profile->Pend_Ayah;
            $pend_ibu  = $profile->Pend_Ibu;
            //$avatar                 = base_url($profile->photo);       
        }
    }else{  
                    
        $nik                = "";
        $nama_lengkap       = "";
        $tempat_lahir       = "";
        $tanggal_lahir      = "";
        $jenis_kelamin      = "";
        $alamat             = "";
        $berat_badan        = "";
        $email              = "";
        $agama             = "";
        $jurusan            = "";
        $tahun_lulus        = "";
        $anakke          = "";
        $cabang             = "";
        $norek              = "";
        $pemilik            = "";
        $jumlah_saudara     = "";
        $jumlah_anak        = "";
        $gol_darah    ="";
        $nomor_hp               ="";
        $tinggi_badan            = "";
        $kode_pos     = "";
        $nama_ayah     = "";
        $nama_ibu     = "";
        $pekerjaan_ayah     = "";
        $pekerjaan_ibu     = "";
        $hp_ayah     = "";
        $hp_ibu     = "";
        $pend_ayah  = "";
        $pend_ibu  = "";
    }
?>

<style type="text/css">
.wizard {
    margin: 20px auto;
    background: #fff;
}

    .wizard .nav-tabs {
        position: relative;
        margin: 40px auto;
        margin-bottom: 0;
        border-bottom-color: #e0e0e0;
    }

    .wizard > div.wizard-inner {
        position: relative;
    }

.connecting-line {
    height: 2px;
    background: #e0e0e0;
    position: absolute;
    width: 80%;
    margin: 0 auto;
    left: 0;
    right: 0;
    top: 50%;
    z-index: 1;
}

.wizard .nav-tabs > li.active > a, .wizard .nav-tabs > li.active > a:hover, .wizard .nav-tabs > li.active > a:focus {
    color: #555555;
    cursor: default;
    border: 0;
    border-bottom-color: transparent;
}

span.round-tab {
    width: 70px;
    height: 70px;
    line-height: 70px;
    display: inline-block;
    border-radius: 100px;
    background: #fff;
    border: 2px solid #e0e0e0;
    z-index: 2;
    position: absolute;
    left: 0;
    text-align: center;
    font-size: 25px;
}
span.round-tab i{
    color:#555555;
}
.wizard li.active span.round-tab {
    background: #fff;
    border: 2px solid #5bc0de;
    
}
.wizard li.active span.round-tab i{
    color: #5bc0de;
}

span.round-tab:hover {
    color: #333;
    border: 2px solid #333;
}

.wizard .nav-tabs > li {
    width: 20%;
}

.wizard li:after {
    content: " ";
    position: absolute;
    left: 46%;
    opacity: 0;
    margin: 0 auto;
    bottom: 0px;
    border: 5px solid transparent;
    border-bottom-color: #5bc0de;
    transition: 0.1s ease-in-out;
}

.wizard li.active:after {
    content: " ";
    position: absolute;
    left: 46%;
    opacity: 1;
    margin: 0 auto;
    bottom: 0px;
    border: 10px solid transparent;
    border-bottom-color: #5bc0de;
}

.wizard .nav-tabs > li a {
    width: 70px;
    height: 70px;
    margin: 20px auto;
    border-radius: 100%;
    padding: 0;
}

    .wizard .nav-tabs > li a:hover {
        background: transparent;
    }

.wizard .tab-pane {
    position: relative;
    padding-top: 50px;
}

.wizard h3 {
    margin-top: 0;
}

@media( max-width : 585px ) {

    .wizard {
        width: 90%;
        height: auto !important;
    }

    span.round-tab {
        font-size: 16px;
        width: 50px;
        height: 50px;
        line-height: 50px;
    }

    .wizard .nav-tabs > li a {
        width: 50px;
        height: 50px;
        line-height: 50px;
    }

    .wizard li.active:after {
        content: " ";
        position: absolute;
        left: 35%;
    }
}
</style>

<div class="content-wrapper">
<section class="content">
<div class="box box-info">
<div class="box-body">
        
        <div class="wizard">
            <div class="wizard-inner">
                <div class="connecting-line"></div>
                <ul class="nav nav-tabs" role="tablist">

                    <li role="presentation" class="active">
                        <a href="#step1" data-toggle="tab" aria-controls="step1" role="tab" title="Personal Info">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-user"></i>
                            </span>
                        </a>
                    </li>

                    <li role="presentation" class="disabled">
                        <a href="#step2" data-toggle="tab" aria-controls="step2" role="tab" title="Alamat Lengkap">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-map-marker"></i>
                            </span>
                        </a>
                    </li>
                    <li role="presentation" class="disabled">
                        <a href="#step3" data-toggle="tab" aria-controls="step3" role="tab" title="Keluarga">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-folder-open"></i>
                            </span>
                        </a>
                    </li>
                    <li role="presentation" class="disabled">
                        <a href="#step4" data-toggle="tab" aria-controls="step4" role="tab" title="Photo">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-picture"></i>
                            </span>
                        </a>
                    </li>
                    <li role="presentation" class="disabled">
                        <a href="#complete" data-toggle="tab" aria-controls="complete" role="tab" title="Photo">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-ok"></i>
                            </span>
                        </a>
                    </li>
                </ul>
            </div>

            <!-- -->
            <form rule="form" class="form-user"> <!-- -->
                <div class="tab-content">
                    <!-- Personal Info -->
                    <div class="tab-pane active" role="tabpanel" id="step1">
                        <div class="panel-body">
                            <div class="form-group">
                                <div class="col-sm-6">
                                    <label class="control-label">Nomor Induk Siswa</label>
                                    <input name="nis" maxlength="100" type="text" required="required" class="form-control" value="<?php echo $nik; ?>" readonly/>
                                </div>
                                <div class="col-sm-6">
                                    <label class="control-label">Kewarganegaraan</label>
                                    <input name="kewarganegaraan" maxlength="100" type="text" required="required" class="form-control" placeholder="Kewarganegaraan" />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-6">
                                    <label class="control-label">Nama Lengkap</label>
                                    <input name="nama_lengkap" maxlength="100" type="text" required="required" class="form-control" placeholder="Nama Lengkap" value="<?php echo $nama_lengkap; ?>" />
                                </div>
                                <div class="col-sm-6">
                                    <label class="control-label">Anak Ke</label>
                                    <input name="anakke" maxlength="100" type="text" required="required" class="form-control" placeholder="Anak Ke" value="<?php echo $anakke; ?>" onkeyup="validAngka(this)" />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-6">
                                    <label class="control-label">Jenis Kelamin</label>
                                    <input name="jenis_kelamin" maxlength="100" type="text" required="required" class="form-control" placeholder="Jenis Kelamin" value="<?php echo $jenis_kelamin; ?>" />
                                </div>
                                <div class="col-sm-6">
                                    <label class="control-label">Berat Badan</label>
                                    <input name="berat_badan" maxlength="100" type="text" required="required" class="form-control" placeholder="Berat Badan" value="<?php echo $berat_badan; ?>" onkeyup="validAngka(this)" />
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-6">
                                    <label class="control-label">Agama</label>
                                    <input name="agama" id="agama" maxlength="100" type="text" required="required" class="form-control" placeholder="Agama" value="<?php echo $agama; ?>" />
                                </div>
                                <div class="col-sm-6">
                                    <label class="control-label">Tinggi Badan</label>
                                    <input name="tinggi_badan" maxlength="100" type="text" required="required" class="form-control" placeholder="Tinggi Badan" value="<?php echo $tinggi_badan; ?>" onkeyup="validAngka(this)" />
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-6">
                                    <label class="control-label">Tempat Lahir</label>
                                    <input name="tempat_lahir" maxlength="100" type="text" required="required" class="form-control" placeholder="Tempat Lahir" value="<?php echo $tempat_lahir; ?>" />
                                </div>
                                <div class="col-sm-6">
                                    <label class="control-label">Golongan Darah</label>
                                    <input name="gol_darah" maxlength="100" type="text" required="required" class="form-control" placeholder="Golongan Darah" value="<?php echo $gol_darah; ?>" />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-6">
                                    <label class="control-label">Tanggal Lahir</label>
                                    <!--
                                    <input name="tanggal_lahir" maxlength="100" type="text" required="required" class="form-control" placeholder="Tanggal Lahir" value="<?php echo $tanggal_lahir; ?>" />
                                    -->
                                    
                                    <input type="text" class="form-control" name="tanggal_lahir" id="tanggal_lahir" data-date-format="yyyy-mm-dd" placeholder="Tanggal Lahir" value="<?php echo $tanggal_lahir; ?>"  />
                                </div>
                                <div class="col-sm-6">
                                    <label class="control-label">Jumlah Saudara</label>
                                    <input name="jumlah_saudara" maxlength="100" type="text" required="required" class="form-control" placeholder="Jumlah Saudara" value="<?php echo $jumlah_saudara; ?>" onkeyup="validAngka(this)" />
                                </div>
                            </div>
                            
                        </div>

                        <div class="panel-body">
                            <div class="col-sm-12">
                            <button class="btn btn-primary next-step pull-right" type="button">Next</button>
                            </div>
                        </div>  
 
                    </div>
                    <!-- End Personal Info -->

                    <div class="tab-pane" role="tabpanel" id="step2">
                        <div class="panel-body">
                            <div class="form-group">
                                <div class="col-sm-6">
                                        <label class="control-label">Alamat Lengkap</label>
                                        <input name="alamat" maxlength="100" type="text" required="required" class="form-control" placeholder="Alamat Lengkap" value="<?php echo $alamat; ?>" />
                                </div>
                                <div class="col-sm-6">
                                        <label class="control-label">Kode Pos</label>
                                        <input name="kode_pos" maxlength="100" type="text" required="required" class="form-control" placeholder="Kode POS" value="<?php echo $kode_pos; ?>" onkeyup="validAngka(this)" />
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-6">
                                        <label class="control-label">Nomor HP</label>
                                        <input name="nomor_hp" maxlength="100" type="text" required="required" class="form-control" placeholder="Nomor HP" value="<?php echo $nomor_hp; ?>" onkeyup="validAngka(this)" />
                                </div>
                                <div class="col-sm-6">
                                        <label class="control-label">Email</label>
                                        <input name="email" maxlength="100" type="text" required="required" class="form-control" placeholder="Email" value="<?php echo $email; ?>" />
                                </div>
                            </div>

                        </div>
                        <div class="panel-body list-inline pull-right">
                            <div class="col-sm-12">
                            <button type="button" class="btn btn-default prev-step">Previous</button></li>
                            <button type="button" class="btn btn-primary next-step">Next</button>
                            </div>
                        </div> 
                    </div>

                    <div class="tab-pane" role="tabpanel" id="step3">
                        <div class="panel-body">
                            <div class="form-group">
                                <div class="col-sm-6">
                                        <label class="control-label">Nama Ayah</label>
                                        <input name="nama_ayah" maxlength="100" type="text" required="required" class="form-control" placeholder="Nama Ayah" value="<?php echo $nama_ayah; ?>" />
                                </div>
                                <div class="col-sm-6">
                                        <label class="control-label">Pekerjaan Ayah</label>
                                        <input name="pekerjaan_ayah" maxlength="100" type="text" required="required" class="form-control" placeholder="Pekerjaan Ayah" value="<?php echo $pekerjaan_ayah; ?>"/>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-6">
                                    <label class="control-label">Nama Ibu</label>
                                    <input name="nama_ibu" maxlength="100" type="text" required="required" class="form-control" placeholder="Nama Ibu" value="<?php echo $nama_ibu; ?>" />
                                </div>
                                <div class="col-sm-6">
                                    <label class="control-label">Pekerjaan Ibu</label>
                                    <input name="pekerjaan_ibu" maxlength="100" type="text" required="required" class="form-control" placeholder="Pekerjaan Ibu" value="<?php echo $pekerjaan_ibu; ?>"/>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-6">
                                    <label class="control-label">Nomor HP Ayah</label>
                                    <input nama="hp_ayah" maxlength="100" type="text" required="required" class="form-control" placeholder="Nomor HP Ayah" value="<?php echo $hp_ayah; ?>" />
                                </div>
                                <div class="col-sm-6">
                                    <label class="control-label">Nomor HP Ibu</label>
                                    <input name="hp_ibu" maxlength="16" type="text" required="required" class="form-control" placeholder="Nomor HP Ibu" value="<?php echo $hp_ibu; ?>"/>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-6">
                                    <label class="control-label">Pendidikan Ayah</label>
                                    <input name="pend_ayah" maxlength="100" type="text" required="required" class="form-control" placeholder="Pendidikan Ayah" value="<?php echo $pend_ayah; ?>" />
                                </div>
                                <div class="col-sm-6">
                                    <label class="control-label">Pendidikan Ibu</label>
                                    <input name="pend_ibu" maxlength="100" type="text" required="required" class="form-control" placeholder="Pendidikan Ibu" value="<?php echo $pend_ibu; ?>"/>
                                </div>
                            </div>

                        </div>

                         <div class="panel-body list-inline pull-right">
                            <div class="col-sm-12">
                            <button type="button" class="btn btn-default prev-step">Previous</button></li>
                            <button type="button" class="btn btn-primary btn-info-full next-step">Next</button>
                            </div>
                        </div> 
                    </div>

                    <div class="tab-pane" role="tabpanel" id="step4">
                        <div class="panel-body">
                        <h3>Step 4</h3>
                        <p>Upload Photo Sementara Belum Diaktifkan</p>

                        <div class="panel-body list-inline pull-right">
                            <div class="col-sm-12">
                            <button type="button" class="btn btn-default prev-step">Previous</button></li>
                            <button type="button" class="btn btn-primary btn-info-full next-step">Next</button>
                            </div>
                        </div> 
                        </div>
                    </div>

                    <div class="tab-pane" role="tabpanel" id="complete">
                        <div class="panel-body">
                        <h3>Complete</h3>
                        <p>You have successfully completed all steps.</p>

                        <ul class="list-inline pull-right">
                            <li><button type="button" class="btn btn-default prev-step">Previous</button></li>
                            
                            <li><button type="button" class="btn btn-primary btn-info-full save" >Save</button></li>
                        </ul>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            
        </div>
   
   </form> 

</div>
</div>
</section>
</div>

<!--
    https://jsfiddle.net/yeyene/59e5e1ya/
    https://bootsnipp.com/snippets/featured/form-wizard-using-tabs
-->