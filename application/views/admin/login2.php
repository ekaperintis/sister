<!doctype html>
    <html>
        <head>
            <title>Login App Kehadiran</title>
            <link href="<?php echo base_url('assets/assets/css/bootstrap.min.css');?>" rel="stylesheet">
            <link href="<?php echo base_url('assets/assets/font-awesome/css/font-awesome.css');?>" rel="stylesheet">
            <link href="<?php echo base_url('assets/assets/css/plugins/timeline/timeline.css');?>" rel="stylesheet">
            <link href="<?php echo base_url('assets/assets/css/sb-admin.css');?>" rel="stylesheet">
            <script src="<?php echo base_url('assets/assets/js/jquery.js');?>"></script>
            <script src="<?php echo base_url('assets/assets/js/bootstrap.js');?>"></script>
            <script src="<?php echo base_url('assets/assets/js/tinymce/tinymce.min.js');?>"></script>
            
        </head>
        <body>
             <div class="container">    
                <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
                    <div class="panel panel-info" >
                            <div class="panel-heading">
                                <div class="panel-title">Sign In</div>
                                <!--
                                <div style="float:right; font-size: 80%; position: relative; top:-10px"><a href="#">Forgot password?</a></div>
                                -->

                            </div>     
        
                            <div style="padding-top:30px" class="panel-body" >
        
                                <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                                 <?php echo form_open('login/proses_login'); ?>   
                                
                                            
                                    <div style="margin-bottom: 25px" class="input-group">
                                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                                <input id="login-username" type="text" class="form-control" name="username" value="" placeholder="username" required="true">                                        
                                            </div>
                                        
                                    <div style="margin-bottom: 25px" class="input-group">
                                                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                                <input id="login-password" type="password" class="form-control" name="password" placeholder="password" required="true">
                                            </div>
                                            
        
                                        
                                    <div class="input-group">
                                              <div class="checkbox">
                                                <label>
                                                  <input id="login-remember" type="checkbox" name="remember" value="1"> Remember me
                                                </label>
                                              </div>
                                            </div>
        
        
                                        <div style="margin-top:10px" class="form-group">
                                            <!-- Button -->
        
                                            <div class="col-sm-12 controls">
                                              
                                                <button type="submit" name="simpan" class="btn btn-success"><i class="fa fa-save"></i> Login</button>
                                            <?php echo form_close(); ?>

                                            </div>
                                        </div>
        
                                        <!--
                                        <div class="form-group">
                                            <div class="col-md-12 control">
                                                <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
                                                    Don't have an account! 
                                                <a href="#" onClick="$('#loginbox').hide(); $('#signupbox').show()">
                                                    Sign Up Here
                                                </a>
                                                </div>
                                            </div>
                                        </div>    
                                        -->

                                   
        
        
        
                                </div>                     
                            </div>  
                </div>
             
            </div>
    
            
            
            <!-- Core Scripts - Include with every page -->
            <script src="<?php echo base_url('assets/assets/js/holder.js');?>"></script>
    
            <script src="<?php echo base_url('assets/assets/js/application.js');?>"></script>
            <script src="<?php echo base_url('assets/assets/js/jquery-1.10.2.js');?>"></script>
            <script src="<?php echo base_url('assets/assets/js/bootstrap.min.js');?>"></script>
            <script src="<?php echo base_url('assets/assets/js/plugins/metisMenu/jquery.metisMenu.js');?>"></script>
            <script src="<?php echo base_url('assets/assets/js/plugins/morris/raphael-2.1.0.min.js');?>"></script>
            <script src="<?php echo base_url('assets/assets/js/sb-admin.js');?>"></script>
        </body>
    </html>