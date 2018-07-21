<style type="text/css">
  
  .col-centered{
    float: none;
    margin: 0;
}

</style>
<div class="content-wrapper">

        <form role="form" name="_form" method="post" id="_form" action="">
            <div class="panel-info">
            	<div class="panel-body" style="overflow: auto">
            	<div class="row">
            		<div class="col-md-4">
                    <a class="action back btn btn-info" rel="0" onclick="return back();">Soal ke <i class="glyphicon glyphicon-chevron-right"></i> 1 </a>
                </div>

                    
            	</div>
            	</div>
                <div class="panel-body" style="overflow: auto">
                    
                    <div class="panel-body" style="overflow: auto">
                        <div class="well">
                            <div class="panel panel-info">
                                <div class="panel-heading">
                                    <b>Gambar Soal</b>
                                </div>
                                <div class="panel-body">
                                    
                                </div>          
                            </div>


                            
                        <div class="input-group">
                            <label class="input-group-btn">
                                <span class="btn btn-danger">
                                    Browse&hellip; <input type="file" id="media" name="media" style="display: none;" required>
                                </span>
                            </label>
                            <input type="text" class="form-control" size="20" readonly required>
                        </div>
                        </div>

                        

                        <div class="progress" style="display:none">
                            <div id="progressBar" class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
                                <span class="sr-only">0%</span>
                            </div>
                        </div>
                        <div class="msg alert alert-info text-left" style="display:none"></div>
                    
                    </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Uraian Soal</label>
                    <textarea class="form-control"></textarea>
                      
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1"> Pilihan A</label>
                      <input type="text" class="form-control" value="" name="a" required="true" />
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1"> Pilihan B</label>
                      <input type="text" class="form-control" value=""  name="b" required="true" />
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1"> Pilihan C</label>
                      <input type="text" class="form-control" value="" name="c" required="true" />
                  </div>
                  
                  <div class="form-group">
                    <label for="exampleInputEmail1"> Pilihan D</label>
                      <input type="text" class="form-control" value="" name="d" required="true" />
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1"> Pilihan E</label>
                      <input type="text" class="form-control" value="" name="d" required="true" />
                  </div>

                  <div class="form-group">
                  <label for="sel1">Jawaban Benar</label>
                    <select class="form-control" id="jawaban_benar" name="jawaban_benar">
                      
                      <option value="1">A</option>
                      <option value="2">B</option>
                      <option value="3">C</option>
                      <option value="4">D</option>
                      <option value="5">E</option>
                    </select>
                </div>

                </div>

                <div class="panel-footer">
                <div class="row">
                    <div class="col-md-4">
                    <a class="action back btn btn-info col-centered" rel="0" onclick="return back();"><i class="glyphicon glyphicon-chevron-left"></i> Sebelumnya</a>

                    </div>

                    <div class="col-md-2">
                    <a class="ragu_ragu btn btn-primary pull-right" rel="1" onclick="return tidak_jawab();"><i class="glyphicon glyphicon-floppy-disk"></i> Ubah</a>

                	</div>

                  <div class="col-md-2">
                     <a class="ragu_ragu btn btn-danger col-centered" rel="1" onclick="return tidak_jawab();"><i class="glyphicon glyphicon-remove"></i> Hapus</a>
                  </div>

                    <div class="col-md-4">
                    <a class="action next btn btn-info pull-right" rel="2" onclick="return next();"><i class="glyphicon glyphicon-chevron-right"></i> Berikutnya</a>
                    </div>
                    
                    
               
                    </div>
                </div>
            </div>
        </form>
    
</div>