<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Welcome to EZ Wealth System | Member's Dashboard</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url();?>assets/member/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?php echo base_url();?>assets/member/css/plugins/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="<?php echo base_url();?>assets/member/css/plugins/timeline.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url();?>assets/member/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="<?php echo base_url();?>assets/member/css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url();?>assets/member/font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
<style>
/*.form-horizontal{
	width:94%	
	}*/
</style>
</head>

<body>
<input type="hidden" value="<?php echo base_url();?>" name="baseurl" id="baseurl">
    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo base_url();?>member"><img src="<?php echo base_url();?>assets/images/ezlogo.png" style="width: 294px;"></a>
            </div>
            <!-- /.navbar-header -->
            <div class="col-md-1"></div>
          <div class="col-md-4">
           <!--WEB BANNER-->
          </div>
           <div class="col-md-4">
         
    <?php
  // $this->load->helper('date');
  $this->load->model('member_model');
  if(!empty($member)){
	  foreach($member as $details){
		  $member_id = $details->member_id;
		 
		  $username 	= $details->username;
		  $lastname 	= $details->lastname;
		  $firstname 	= $details->firstname;
		  
		  $fullname 	= $lastname.', '.$firstname;
		  
		  $registration_date = $details->registration_date;
		  $activation_date 	 = $details->activation_date;
		  $expiration_date   = $details->expiration_date;
		  $account_status    = $details->account_status;
		  $referred_by       = $details->referred_by;
		  }
	  }
	  
/*$datestring = "%Y-%m-%d";
$time = time();

$todays_date =  mdate($datestring, $time);
*/
if($expiration_date=="0000-00-00"){
	echo '';
	}else{
if($activation_date>=$expiration_date){
	$this->member_model->updateStatus($member_id);
	}
}
	
  ?>        
 <table width="100%" border="0">
  <tr>
    <td width="51%"><i class="fa fa-user fa-fw"></i>Name</td>
    <td width="49%">: <?php echo $fullname;?></td>
  </tr>
  <tr>
    <td><i class="fa fa-calendar fa-fw"></i>Registration Date</td>
    <td>: <?php echo $registration_date;?></td>
  </tr>
  <tr>
    <td><i class="fa fa-calendar fa-fw"></i>Activation Date</td>
    <td>: <?php echo $activation_date;?></td>
  </tr>
  <tr>
    <td><i class="fa fa-calendar fa-fw"></i>Expiration Date</td>
    <td>: <?php echo $expiration_date;?></td>
  </tr>
  <tr>
    <td><i class="fa fa-bar-chart-o fa-fw"></i>Account Status</td>
    <td>: <?php if($account_status==0){echo 'Inactive';}else if($account_status==1){echo 'Active';}else{ echo 'Expired';}?></td>
  </tr>
  <tr>
    <td><i class="fa fa-power-off fa-fw"></i><a href="<?php echo base_url();?>member/logout/">Logout</a></td>
    <td>&nbsp;</td>
  </tr>
</table>
        
           
          </div>
           
<div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                       
                        <li>
                            <a  href="<?php echo base_url();?>member/"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url();?>member/payments/"><i class="fa fa-money fa-fw"></i> Payments</a>
                           
                        </li>
                        <li>
                            <a href="<?php echo base_url();?>member/message/"><i class="fa fa-comment fa-fw"></i> Messages</a>
                           
                        </li>
                        <li>
                            <a href="<?php echo base_url();?>member/capture_page/"><i class="fa fa-edit fa-fw"></i>Edit Capture Page</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url();?>member/landing_page/"><i class="fa fa-edit fa-fw"></i> Edit Landing Page</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url();?>member/referrals/"><i class="fa fa-users fa-fw"></i> Referrals</a>
                            
                        </li>
                        <li>
                            <a href="<?php echo base_url();?>member/e_wallet/"><i class="fa fa-money fa-fw"></i> E-Wallet</a>
                            
                         
                        </li>
                        <li>
                            <a href="<?php echo base_url();?>member/leads/"><i class="fa fa-bar-chart-o fa-fw"></i> Leads</a>
                    </li>
                      <li>
                            <a  class="active" href="<?php echo base_url();?>member/update_info/"><i class="fa fa-edit fa-fw"></i> Update Info</a>
                    </li>
                      <li>
                            <a href="<?php echo base_url();?>member/online_training/"><i class="fa fa-files-o fa-fw"></i> Online Training</a>
                    </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
        <br />
            <div class="row">
                
                <div class="panel panel-default">
                        <div class="panel-heading">
                          <i class="fa fa-edit fa-fw"></i> Edit Bank Account
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
 				
                        <?php
                        if(!empty($bank_accounts)){
							foreach($bank_accounts as $bank){
								//print_r($bank);
								$bank_id = $bank->bank_account_id;
								$bank_name = $bank->bank_name;
								$account_name = $bank->account_name;
								$account_num = $bank->account_number;
								
								}
							}
						?>
                        
                        
                        <form class="form-horizontal" role="form" method="post">
                          <div class="form-group">
                            <label for="edit_bank_name" class="col-sm-3 control-label">Bank Name:</label>
                            <div class="col-sm-5">
                          <input type="text" class="form-control" name="edit_bank_name" value="<?php echo (isset($_POST['edit_bank_name']) ? $_POST['edit_bank_name'] : $bank_name); ?>" id="edit_bank_name" >
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="edit_account_name" class="col-sm-3 control-label">Account Name:</label>
                            <div class="col-sm-5">
                              <input type="text" class="form-control" id="edit_account_name" value="<?php echo (isset($_POST['edit_account_name']) ? $_POST['edit_account_name'] : $account_name); ?>" name="edit_account_name" >
                            </div>
                          </div>
                            <div class="form-group">
                            <label for="edit_account_number" class="col-sm-3 control-label">Account Number:</label>
                            <div class="col-sm-5">
                             <input type="text" class="form-control" id="edit_account_number" value="<?php echo (isset($_POST['edit_account_number']) ? $_POST['edit_account_number'] : $account_num); ?>" name="edit_account_number">
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-10">
                              <button type="submit" name="btn_update_account" class="btn btn-primary">Save changes</button>
                            </div>
                          </div>
                          <?php
						  
                          if(isset($_POST['btn_update_account'])){
							  $edit_bank_name = $this->input->post('edit_bank_name');
							  $edit_account_name = $this->input->post('edit_account_name');
							  $edit_account_number = $this->input->post('edit_account_number');
							  if(empty($edit_bank_name) || empty($edit_account_name) || empty($edit_account_number)){
								  echo '<div class="alert alert-danger">All fields are required.</div>';
								  }else{
									  $this->member_model->updateBank($member_id,$bank_id,$edit_bank_name,$edit_account_name,$edit_account_number);
									echo '<div class="alert alert-success">Saved changes</div>';  
									  }
							  }
						  ?>
							</form>
                            
                    	 </div>
                        <!-- /.panel-body -->
              </div>
                    <!-- /.panel -->
            </div>
            <!-- /.row --><!-- /.row --><!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
<div class="col-md-5">
<br />
<img src="<?php echo base_url();?>assets/images/questions.png">
</div>

<div class="col-md-7">
<h2>Announcement</h2>
<div id="content">
<?php
if(!empty($announcements)){
	foreach($announcements as $announcement){
		echo '<strong>'.$announcement->title.'</strong><br />';
		$contents = $announcement->contents;
		
echo nl2br($contents);
		
		}
	}
?>


</div>
</div>










    <!-- jQuery Version 1.11.0 -->
    <script src="<?php echo base_url();?>assets/member/js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url();?>assets/member/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo base_url();?>assets/member/js/plugins/metisMenu/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src=<?php echo base_url();?>"assets/member/js/plugins/morris/raphael.min.js"></script>
    <script src="<?php echo base_url();?>assets/member/js/plugins/morris/morris.min.js"></script>
    <script src="<?php echo base_url();?>assets/member/js/plugins/morris/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url();?>assets/member/js/sb-admin-2.js"></script>
    <script src="<?php echo base_url();?>assets/js/script.js"></script>
    
    <script type="text/javascript">
	
	var inp = $("#affiliate_link")[0];
var default_value = inp.value;

inp.addEventListener("input", function () { 
    this.value = default_value;
}, false);


	var inp2 = $("#referred_by")[0];
var default_value2 = inp2.value;

inp2.addEventListener("input", function () { 
    this.value = default_value2;
}, false);
	</script>

</body>

</html>
