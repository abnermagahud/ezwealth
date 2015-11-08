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

</head>

<body>
<input type="hidden" value="<?php echo base_url();?>" id="baseurl" name="baseurl">
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
		  $member_id    = $details->member_id;
		 //echo $member_id;
		  $username 	= $details->username;
		  $lastname 	= $details->lastname;
		  $firstname 	= $details->firstname;
		  
		  $fullname 	= $lastname.', '.$firstname;
		  
		  $registration_date = $details->registration_date;
		  $activation_date 	 = $details->activation_date;
		  $expiration_date   = $details->expiration_date;
		  $account_status    = $details->account_status;
		  
		  $total_income 	= $details->total_income;
		  $balance          = $details->balance;
		  $encashed         = $details->total_encashed;
      $ecredit_balance = $details->ecredit_balance;
      $converted = $details->converted_amount;
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
                            <a class="active" href="<?php echo base_url();?>member/e_wallet/"><i class="fa fa-money fa-fw"></i> E-Wallet</a>
                            
                         
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
                          <i class="fa fa-money fa-fw"></i> E-Wallet
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
                        
              	 <table class="table table-striped table-bordered table-hover" id="examples1">
                            <thead>
                          <tr>
                     	
                            <th>Active Referrals Username</th>
                            <th>Product</th>
                            <th>Commission</th>

                          </tr>
                          </thead>
                          <tbody>
                          <?php
                          if(!empty($mywallet)){
							  foreach($mywallet as $wallet){
								  
							$status = $wallet->account_status;
						  ?>
                          <tr>
                 			<td><?php echo $wallet->username;?></td>
                             <td><?php echo $wallet->product;?></td>
							 <td><?php echo $wallet->amount;?></td>
                          </tr>
                          <?php
                          	  }
							  }
						  ?>
                          </tbody>
                          </table>
                        
                         
                         <br />
                         <br />
                         <div class="row">
                          <div class="col-md-6">
                         <table width="100%" class="table table-responsive table-hover" border="0">
                          <tr>
                     
                          	<td>Total</td>
                            <td>: <?php echo $total_income;?></td>
                          </tr>
                          <tr>
                            <td>Transfered</td>
                            <td>: <?php echo $encashed;?></td>
                          </tr>
                          <tr>
                            <td>Available</td>
                            <td>: <?php echo $balance;?></td>
                          </tr>
                            <tr>
                            <td>Converted</td>
                            <td>: <?php echo $converted;?></td>
                          </tr>
                        </table>
                        
                        </div>
                       <div class="col-md-3"></div>
                       <div class="col-md-3"></div>
                       </div>
<br />
<h3>Withdraw Money</h3>
<em>Make sure you set up your bank account in <a href="<?php echo base_url();?>member/update_info/">Update Info->Transfer Information tab</a></em>
<br />
<br />
    <form class="form-inline" role="form" method="post" id="formwithdraw">
    <input type="hidden" value="<?php echo $balance;?>" name="available" id="available" />
	<input type="hidden" value="<?php echo $member_id;?>" name="memberid" id="memberid" />
  <div class="form-group">
    <label for="transfer_mode">Transfer Mode</label><br />
    <select name="transfer_mode" id="transfer_mode" class="form-control">
    <option value="0">---Select---</option>
    <option value="bank">Bank</option>

    </select>
  </div>
 <div class="form-group">
    <label for="processor">Processor</label><br />
    <div id="options">
     <select name="processor" id="processor" class="form-control">
      <option value="0">---Select---</option>
    </select>
    </div>
  </div>
   <div class="form-group">
    <label for="amount">Amount</label><br />
    <input type="text" class="form-control" id="amount" name="amount" placeholder="Amount">
  </div>
   <div class="form-group">
    <label class="sr-only" for="transfer">Transfer Now</label><br />
     <button type="button" onClick="withdraw()" class="btn btn-primary" id="transfer">Transfer Now</button>
  </div>

</form> 
<br />
<div id="wait_withdraw_area"></div>   
<div id="message_withdraw_area"></div>     
<?php
	}
?>   
<br />
<br />
<h3>Convert your e-wallet to e-credit</h3>
  <form class="form-inline" role="form" method="post" >
<input type="hidden" value="<?php echo $balance;?>" name="available_balance" id="available_balance" />
   <div class="form-group">
    <label for="convert_amount">Amount</label><br />
    <input type="text" class="form-control" id="convertamount" name="convertamount" placeholder="Amount">
  </div>
   <div class="form-group">
    <label class="sr-only" for="transfer">Convert Now</label><br />
     <button type="button" onclick="converttoecredit()" class="btn btn-primary" id="convertewallet">Convert Now</button>
  </div>

</form> 
<br />
<div id="wait_ecredit"></div>    
<div id="message_ecredit"></div>       
<br />

<h3>Available E-Credit: <?php echo number_format($ecredit_balance);?></h3>
<br />
<h3>Transfer E-Credit</h3>

  <form class="form-inline" role="form" method="post" >
<input type="hidden" value="<?php echo $ecredit_balance;?>" name="ecredit_balance" id="ecredit_balance" />
   <div class="form-group">
    <label for="username">Username</label><br />
    <input type="text" class="form-control" id="username" name="username" placeholder="Username">
  </div>

   <div class="form-group">
    <label for="convert_amount">Amount to transfer</label><br />
    <input type="text" class="form-control" id="amounttosend" name="amounttosend" placeholder="Amount">
  </div>
   <div class="form-group">
    <label class="sr-only" for="transfer">Send</label><br />
     <button type="button" onclick="transferecredit()" class="btn btn-primary" id="transfer-e-credit">Transfer Now</button>
  </div>

</form> 
<br />
<div id="wait_transfer_ecredit"></div>
<div id="message_transfer_ecredit"></div>

                     </div>
                        <!-- /.panel-body -->
              </div>
                    <!-- /.panel -->


                 <div class="panel panel-default">
                        <div class="panel-heading">
                          <i class="fa fa-history fa-fw"></i> E-Credit Transfer Report
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                        <ul class="nav nav-tabs" id="tab">
                          <li class="active in"><a href="#sent" data-toggle="tab">Sent Report</a></li>
                          <li><a href="#received" data-toggle="tab">Received Report</a></li> 
                        </ul>

                        <div class="tab-content">
                          <div class="tab-pane active" id="sent">
                            <br />
                             <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="examples2">
                                    <thead>
                                  <tr>
                                    
                                    <th width="80">Receiver</th>
                                    <th width="89">Amount</th>
                                    <th width="99">Date</th>
                                  </tr>
                                </thead>
                                <tbody>
                                <?php
                                if(!empty($senders)){
                                  foreach($senders as $sender){
                                    
                                    $receiver_id     = $sender->receiver_id;
                                    $amount_sent  = $sender->amount;
                                    $date_sent    = $sender->date;
                                    
                                   
                                ?>
                                  <tr class="odd gradeX">
                                   
                                    <td><?php echo $this->member_model->getMemberInfo($receiver_id);?></td>
                                    <td><?php echo $amount_sent;?></td>
                                    <td><?php echo $date_sent;?></td>
                                   
                                  </tr>
                                  <?php
                                    }
                                  }
                                    ?>
                                </tbody>
                                </table>
                            </div>


                          </div>


                          <div class="tab-pane" id="received">
                          <br />
                                <table class="table table-striped table-bordered table-hover" id="examples5">
                                    <thead>
                                  <tr>
                                    
                                    <th width="80">Sender</th>
                                    <th width="89">Amount</th>
                                    <th width="99">Date</th>
                                  </tr>
                                </thead>
                                <tbody>
                                <?php
                                if(!empty($receivers)){
                                  foreach($receivers as $receiver){
                                    
                                    $sender_id     = $receiver->sender_id;
                                    $amount_received = $receiver->amount;
                                    $date_received    = $receiver->date;
                                   
                                ?>
                                  <tr class="odd gradeX">
                                   
                                    <td><?php echo $this->member_model->getMemberInfo($sender_id);?></td>
                                    <td><?php echo $amount_received;?></td>
                                    <td><?php echo $date_received;?></td>
                                   
                                  </tr>
                                  <?php
                                    }
                                  }
                                    ?>
                                </tbody>
                                </table>
                            </div>


                         
                            </div>

                       
                        </div>
                        <!-- /.panel-body -->
              </div>
                    <!-- /.panel -->




 			<div class="panel panel-default">
                        <div class="panel-heading">
                          <i class="fa fa-history fa-fw"></i> Bank Transfer History
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="examples">
                                    <thead>
                                  <tr>
                                    <th width="80">Bank Name</th>
                                    <th width="89">Account #</th>
                                    <th width="107">Amount Transfered</th>
                                    <th width="99">Date and Time</th>
                                    <th width="42">Status</th>
                                  </tr>
                                </thead>
                                <tbody>
                <?php
                                if(!empty($transfer_history)){
									foreach($transfer_history as $history){
										
										$amount 		= $history->amount;
										$transfer_date 	= $history->transfer_date;
										$processor 		= $history->processor;
										$stat 			= $history->status;
										$accnt_number	= $history->account_number;
								?>
                                  <tr class="odd gradeX">
                                    <td><?php echo $processor;?></td>
                                    <td><?php echo $accnt_number;?></td>
                                    <td><?php echo $amount;?></td>
                                    <td><?php echo $transfer_date;?></td>
                                    <td><?php echo ($stat==1 ? 'Completed' : 'Pending')?></td>
                                  </tr>
                                  <?php
                                  	}
								}
								  ?>
                                </tbody>
                                </table>
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
 <script src="<?php echo base_url();?>assets/js/script.js"></script>
 
 <script>
    $(document).ready(function() {
		
$("#examples").dataTable({
	 "bSort": false
	
	});		

  $("#examples1").dataTable({
	 "bSort": false
	
	});	

  $("#examples2").dataTable({
   "bSort": false
  
  }); 

$("#examples5").dataTable({
   "bSort": false
  
  }); 
	     
    });
	
    </script>
</body>

</html>
