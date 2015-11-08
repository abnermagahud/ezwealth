<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Login | Administration Panel</title>
    <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/font-awesome.min.css" rel="stylesheet">
  
    <link href="<?php echo base_url();?>assets/css/main.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
<style>

.panel-heading {
    padding: 5px 15px;
}

.panel-footer {
	padding: 1px 15px;
	color: #A0A0A0;
}

.profile-img {
	width: 96px;
	height: 96px;
	margin: 0 auto 10px;
	display: block;
	-moz-border-radius: 50%;
	-webkit-border-radius: 50%;
	border-radius: 50%;
}
</style>
</head><!--/head-->
<body>
   


    <div class="container" style="margin-top:40px">
		<div class="row">
			<div class="col-sm-6 col-md-4 col-md-offset-4">
            
            <div class="row">
					<div class="center-block" align="center">
				<img src="<?php echo base_url();?>assets/images/ezlogo.png" style="width: 294px;">
			     </div>
			</div>
            
				<div class="panel panel-default ">
                
					<div class="panel-heading">
						<strong> Sign in</strong>
					</div>
					<div class="panel-body">
						<form role="form" action="<?php echo base_url();?>admin/" method="POST">
							<fieldset>
								
								<div class="row">
									<div class="col-sm-12 col-md-10  col-md-offset-1 ">
										<div class="form-group">
											<div class="input-group">
												<span class="input-group-addon">
													<i class="glyphicon glyphicon-user"></i>
												</span> 
												<input class="form-control" placeholder="Username" name="loginname" type="text" >
											</div>
										</div>
										<div class="form-group">
											<div class="input-group">
												<span class="input-group-addon">
													<i class="glyphicon glyphicon-lock"></i>
												</span>
												<input class="form-control" placeholder="Password" name="password" type="password" value="">
											</div>
										</div>
										<div class="form-group">
											<input type="submit" name="login_btn" class="btn btn-lg btn-primary btn-block" value="Sign in">
										</div>
									</div>
								</div>
							</fieldset>
						</form>
         
					</div>
			
                </div>
                	 <?php
            if(isset($message)){
				if(!empty($message)){
					echo $message;
					}
				
				}
			?> 
			</div>
            
		</div>
	</div>
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
    <footer id="footer" class="midnight-blue" align="center">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    &copy; <?php echo date('Y');?> <a target="_blank" href="#">EZ Wealth System</a>. All Rights Reserved.
                </div>
        
            </div>
        </div>
    </footer><!--/#footer-->

    <script src="<?php echo base_url();?>assets/js/jquery.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
  
</body>
</html>