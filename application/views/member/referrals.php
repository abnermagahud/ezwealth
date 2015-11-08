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
 
 <!-- DataTables CSS -->
    <link href="<?php echo base_url();?>assets/member/css/plugins/dataTables.bootstrap.css" rel="stylesheet">
  
    <!-- Custom Fonts -->
    <link href="<?php echo base_url();?>assets/member/font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
<style>
#dataTables-example tr>th{
	font-size:12px;	
	}
#dataTables-example td{
	font-size:11px;	
	}
</style>
</head>

<body>

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
   //$this->load->helper('date');
  $this->load->model('member_model');
  if(!empty($member)){
	  foreach($member as $details){
		  $member_id    = $details->member_id;
		  $username 	= $details->username;
		  $lastname 	= $details->lastname;
		  $firstname 	= $details->firstname;
		  
		  $fullname 	= $lastname.', '.$firstname;
		  
		  $registration_date = $details->registration_date;
		  $activation_date 	 = $details->activation_date;
		  $expiration_date   = $details->expiration_date;
		  $account_status    = $details->account_status;
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
                            <a class="active" href="<?php echo base_url();?>member/referrals/"><i class="fa fa-users fa-fw"></i> Referrals</a>
                            
                        </li>
                        <li>
                            <a href="<?php echo base_url();?>member/e_wallet/"><i class="fa fa-money fa-fw"></i> E-Wallet</a>
                            
                         
                        </li>
                        <li>
                            <a href="<?php echo base_url();?>member/leads/"><i class="fa fa-bar-chart-o fa-fw"></i> Leads</a>
                    </li>
                      <li>
                            <a href="<?php echo base_url();?>member/update_info/"><i class="fa fa-edit fa-fw"></i> Update Info</a>
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
                          <i class="fa fa-users fa-fw"></i> Referrals
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                 <?php
                 if($account_status==0 || $account_status==2){
					 echo '
					 <h4 align="center" class="alert alert-info">You must be active account to view this page. Click <a href="'.base_url().'member/payments/">here</a> to activate your account.</h4>
						';
					 }else{
				 ?>            
                        <ul class="nav nav-tabs" id="tab">
 		<li class="active in"><a href="#inactive_ref" data-toggle="tab">Inactive Referrals</a></li>
  		<li><a href="#active_ref" data-toggle="tab">Active Referrals</a></li>
	</ul>
  <div class="tab-content">
      <div class="tab-pane active" id="inactive_ref">
           <br />
              	  <table width="100%" class="table table-responsive table-hover" id="referral_table1" border="0">
                        <thead>
                         <tr>
                     		<th>Username</th>
                            <th>Fullname</th>
                            <th>Contact Number</th>
                            <th>Email</th>
                            <th>Registration Date</th>

                          </tr>
                        </thead>
                        <tbody>
                          <?php
                          if(!empty($inactives)){
							  
							  foreach($inactives as $inactive){
								/*  echo '<pre>';
								  print_r($inactive);
								  echo '</pre>';*/
								  
								  $uname         = $inactive->username;
								  $lname         = $inactive->lastname;
								  $fname         = $inactive->firstname;
								  $reffered_fullname = $fname.' '.$lname;
								  
								  $mobile_number = $inactive->mobile_number;
								  $email         = $inactive->email;
								  $registration_date    = $inactive->registration_date;
								  
							
						  ?>
                          <tr>
                            <td><?php echo $uname;?></td>
                            <td><?php echo $reffered_fullname;?></td>
                            <td><?php echo $mobile_number;?></td>
                           	<td><?php echo $email;?></td>
                            <td><?php echo $registration_date;?></td>
                          </tr>

                          <?php
                          	  }
							}
						  ?>
              </tbody>
                          </table>
      </div>
  
      <div class="tab-pane" id="active_ref">
       <br />
              	  <table width="100%" class="table table-responsive table-hover" id="referral_table2" border="0">
                          <thead>
                          <tr>
                     		<th>Username</th>
                            <th>Fullname</th>
                            <th>Contact Number</th>
                            <th>Email</th>
                            <th>Registration Date</th>
                            <th>Activation Date</th>
                            <th>Expiration Date</th>

                          </tr>
                          </thead>
                          <tbody>
                              <?php
                          if(!empty($actives)){
							  
							  foreach($actives as $active){
							/*	  echo '<pre>';
								  print_r($active);
								  echo '</pre>';*/
								  
								  $active_uname         = $active->username;
								  $active_lname         = $active->lastname;
								  $active_fname         = $active->firstname;
								  $active_reffered_fullname = $active_fname.' '.$active_lname;
								  
								  $active_mobile_number = $active->mobile_number;
								  $active_email         = $active->email;
								  $active_registration_date    = $active->registration_date;
								  $expiration_date             = $active->expiration_date;
								  $activation_date             = $active->activation_date;
						  ?>
                          <tr>
                            <td><?php echo $active_uname;?></td>
                            <td><?php echo $active_reffered_fullname;?></td>
                            <td><?php echo $active_mobile_number;?></td>
                           	<td><?php echo $active_email;?></td>
                            <td><?php echo $active_registration_date;?></td>
                            <td><?php echo $activation_date;?></td>
                            <td><?php echo $expiration_date;?></td>
                          </tr>
                          <?php
							  }
							  
						  }
						  ?>
              </tbody>
                          </table>
     

    </div>
    
</div> 
                        
     <?php
	 }
	 ?>                   

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

 <!-- DataTables JavaScript -->
    <script src="<?php echo base_url();?>assets/member/js/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="<?php echo base_url();?>assets/member/js/plugins/dataTables/dataTables.bootstrap.js"></script>


    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url();?>assets/member/js/sb-admin-2.js"></script>
 <script>
    $(document).ready(function() {
    
$("#referral_table1").dataTable({
   "bSort": false
  
  });   

$("#referral_table2").dataTable({
   "bSort": false
  
  });   
 
       
    });
  
    </script>
</body>

</html>
