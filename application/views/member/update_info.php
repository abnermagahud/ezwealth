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
      $getresponse_affiliate = $details->getresponse_affiliate;
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
                          <i class="fa fa-edit fa-fw"></i> Update Info
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
  <?php
  		  $ref_fname = "";
		  $ref_lname = "";
		  $ref_uname =  "";
		  $ref_fullname  = "";
  if(!empty($referrer_data)){
	  foreach($referrer_data as $ref){
		  $ref_fname = $ref->firstname;
		  $ref_lname = $ref->lastname;
		  $ref_fullname = $ref_fname.' '.$ref_lname;
		  $ref_uname = $ref->username;
		  }
	  }
  ?>           
                        
<ul class="nav nav-tabs" id="tab">
 		<li class="active in"><a href="#personal" data-toggle="tab">Personal Details</a></li>
  		<li><a href="#changepassword" data-toggle="tab">Change Password</a></li>
        <li><a href="#transfer_info" data-toggle="tab">Transfer Information</a></li>
	</ul>
  <div class="tab-content">
      <div class="tab-pane active" id="personal">
       <br /> 
       <form class="form-horizontal" role="form" method="post">
  <div class="form-group">
    <label for="affiliate_link" class="col-sm-3 control-label">Your Affiliate Link:</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" style="width: 90%;" onclick="this.focus();this.select()" id="affiliate_link" value="<?php echo base_url();?>member/<?php echo  $username;?>/" name="affiliate_link" >
    </div>
  </div>
  <div class="form-group">
    <label for="referred_by" class="col-sm-3 control-label">Referred By:</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" style="width: 90%;" value="<?php echo $ref_uname.' '.(empty($ref_fullname) ? '' : '(' ).' '.ucwords($ref_fullname).' '.(empty($ref_fullname) ? '' : ')' ).' ';?>" id="referred_by" name="referred_by" >
    </div>
  </div>
   <div class="form-group">
    <label for="referred_by" class="col-sm-3 control-label" style="margin-right: 1.4%;">getResponse Affiliate Link: </label>
    <div class="col-sm-6 input-group">
    <span class="input-group-addon" >http://www.getresponse.com/index/</span>
      <input type="text" class="form-control" style="width:206px;" value="<?php echo (isset($_POST['getresponse_affiliate']) ? $_POST['getresponse_affiliate'] : $getresponse_affiliate );  ?>" id="get-response-affiliate" name="getresponse_affiliate" > 
    </div>

  </div>

 <div class="form-group">

    <div class="col-sm-offset-3 col-sm-6">

     <input type="submit" name="input_get_response" class="btn btn-primary" id="input-get-response" value="Save" />
  
    </div>
  </div>
   <?php
    if(isset($_POST['input_get_response']))
    {

       if(empty($_POST['getresponse_affiliate'])){

         echo '<div class="alert alert-danger">Field is required.</div>';
       }else{

$this->member_model->setGetResponseAffiliate($member_id,$_POST['getresponse_affiliate']);
 echo '<div class="alert alert-success">Successfully saved.</div>';
          }
    }
    ?>
</form>        	  
      </div>
  
  
      <div class="tab-pane" id="changepassword">
      <br /> 
 <form class="form-horizontal" role="form" method="post">
  <div class="form-group">
    <label for="old_password" class="col-sm-3 control-label">Old Password:</label>
    <div class="col-sm-5">
    	<input type="hidden" id="member_id" name="member_id" value="<?php echo $member_id;?>">
      <input type="text" class="form-control" id="old_password" name="old_password">
    </div>
  </div>
  <div class="form-group">
    <label for="new_password" class="col-sm-3 control-label">New Password:</label>
    <div class="col-sm-5">
      <input type="password" class="form-control" id="new_password" name="new_password">
    </div>
  </div>
  <div class="form-group">
    <label for="retype_password" class="col-sm-3 control-label">Re-type New Password:</label>
    <div class="col-sm-5">
      <input type="password" class="form-control" id="retype_password" name="retype_password">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-3 col-sm-10">
      <button type="button" onClick="changepassword(<?php echo $member_id;?>)" class="btn btn-primary">Change Password</button>
    </div>
  </div>
  <br />
  <div id="wait_area"></div>
  <div id="message_area"></div>
</form>      	
   	 </div>
    
    <div class="tab-pane" id="transfer_info">
     <br /> 
      <strong>Bank Account</strong> 
       <a href="#modal" data-toggle="modal" id="btn-add-bank" style="font-size:10px; display:none;"><i>Add Bank Account</i></a> 
      <?php
      if($getBankById==0){  
	  ?>
      <a href="#modal" data-toggle="modal" style="font-size:10px;"><i>Add Bank Account</i></a> 
     <?php
     }
	 ?>
      <br />
      <br />
      <?php
      if(empty($bank_accounts)){
	  ?>
      <div class="alert alert-info"><em>No bank Account. </em></div>
      
		<?php
		$style = 'style="display:none;"';
	  	}
		?>
<div class="table-responsive" <?php echo (isset($style) ? $style : '')?>>
<table width="100%" border="0" class="table table-hover">
  <tr>
    <th>Bank Name</th>
    <th>Account Name</th>
    <th>Account Number</th>
    <th>Actions</th>
  </tr>
  <?php
  if(!empty($bank_accounts)){
	  foreach($bank_accounts as $account){
		  $bank_account_id = $account->bank_account_id;
		  $bank_name = $account->bank_name;
		  $account_name = $account->account_name;
		  $account_number = $account->account_number;
		  
	
  ?>
  <tr class="record">
    <td><?php echo $bank_name;?></td>
    <td><?php echo $account_name;?></td>
    <td><?php echo $account_number;?></td>
    <td><a href="<?php echo base_url();?>member/edit_bank/<?php echo $bank_account_id;?>/">Edit</a> | <a href="#" class="del" id="<?php echo $bank_account_id; ?>"><input type="hidden" value="<?php echo $bank_account_id;?>" name="bank_account_id">Delete</a></td>
  </tr>
  <?php
  	  
		  }
	  }
  ?>
</table>
</div>
          	  
 
    </div>
</div> 
           

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








<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" >
  <form class="form-horizontal" role="form" method="post">
    <div class="modal-content">
      <div class="modal-header">
      <input type="hidden"  name="member_id" id="member_id" value="<?php echo $member_id;?>" >
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
   <h4 class="modal-title" id="myModalLabel">Add Bank Account</h4>
      </div>
      <div class="modal-body">
  <div id="wait_bank_area"></div>
  <div id="message_add_bank"></div>
     
  <div class="form-group">
    <label for="bank_name" class="col-sm-4 control-label">Bank Name:</label>
    <div class="col-sm-7">
      <input type="text" class="form-control" name="bank_name" id="bank_name" >
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-4 control-label">Account Name:</label>
    <div class="col-sm-7">
      <input type="text" class="form-control" id="account_name" name="account_name" >
    </div>
  </div>
  <div class="form-group">
    <label for="account_number" class="col-sm-4 control-label">Account Number:</label>
    <div class="col-sm-7">
      <input type="text" class="form-control" id="account_number" name="account_number">
    </div>
  </div>
      </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
       <button type="button" class="btn btn-primary" id="btn_add_bank" onClick="addAccount()">Add Bank Account</button>
      </div>  
    </div>
    </form>
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
