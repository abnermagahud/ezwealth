<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Payments>Bundle | Administration Panel</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url();?>assets/admin/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?php echo base_url();?>assets/admin/css/plugins/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="<?php echo base_url();?>assets/admin/css/plugins/timeline.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url();?>assets/admin/css/sb-admin-2.css" rel="stylesheet">

    <!-- DataTables CSS -->
    <link href="<?php echo base_url();?>assets/admin/css/plugins/dataTables.bootstrap.css" rel="stylesheet">
  
    <!-- Custom Fonts -->
    <link href="<?php echo base_url();?>assets/admin/font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
<style>
#hash{
	cursor:pointer;
	}
</style>
</head>

<body>
<input type="hidden" value="<?php echo base_url();?>" name="baseurl" id="baseurl">
    <div id="wrapper">

        <!-- Navigation -->
    <div class="navbar navbar-default navbar-static-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        <a class="navbar-brand" href="<?php echo base_url();?>admin/"><img src="<?php echo base_url();?>assets/images/ezlogo.png" style="width: 294px; margin-left: -96px;"></a>
                
        </div>
        <div class="navbar-collapse collapse">
        
      <div class="col-md-2"></div>
      <div class="col-md-4">
      <table width="100%" border="0">
  <tr>
    <td width="66%">Active Subscribers</td>
    <td width="34%">: <?php echo $countActiveMembers;?></td>
  </tr>
  <tr>
    <td>
Inactive Subscribers</td>
    <td>: <?php echo $countInactiveMembers;?></td>
  </tr>
  <tr>
    <td>6 Months Extension</td>
    <td>: <?php echo $countMonthsExtension;?></td>
  </tr>
  <tr>
    <td>1 Year Extension</td>
    <td>: <?php echo $countYearExtension;?></td>
  </tr>
</table>
     
      </div>   
      <div class="col-md-3">
      <br />
       
      <?php
       $fullname = $this->session->userdata('fullname');
	   ?>
      Administrator: <?php echo ucwords($fullname);?><br />
      <a href="<?php echo base_url();?>admin/loggedout/">Logout</a>
      </div>
        </div><!--/.nav-collapse -->
        
        
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">SUBSCRIBERS <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo base_url();?>admin/active/">ACTIVE</a></li>
                            <li><a href="<?php echo base_url();?>admin/inactive/">INACTIVE</a></li>
                  			<li><a href="<?php echo base_url();?>admin/expired/">EXPIRED</a></li>
                        </ul>
                    </li>
                    <li class="dropdown active">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">PAYMENTS<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo base_url();?>admin/basic/">BASIC</a></li>
                            <li><a href="<?php echo base_url();?>admin/premium/">PREMIUM</a></li>
                            <li><a href="<?php echo base_url();?>admin/six_months/">6 MONTHS</a></li>
                  			<li><a href="<?php echo base_url();?>admin/one_year/">1 YEAR</a></li>
                        <li><a href="<?php echo base_url();?>admin/bundle/">BUNDLE</a></li>
                        </ul>
                    </li>
                    <li><a href="<?php echo base_url();?>admin/ewallet/">E-WALLET</a></li>
                   <li class="dropdown">
                   <a href="#" class="dropdown-toggle" data-toggle="dropdown">E-CREDIT <b class="caret"></b></a>
                       <ul class="dropdown-menu">
                            <li><a href="<?php echo base_url();?>admin/ecredit/">E-CREDIT REQUEST </a></li>
              
                            <li><a href="<?php echo base_url();?>admin/ecredit_history/">E-CREDIT TRANSFER HISTORY </a></li>
                             <li><a href="<?php echo base_url();?>admin/ecreditconversionhistory/">E-CREDIT CONVERSION HISTORY </a></li>
                        </ul>

                        </li>
                     <li>
             		 <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">TRANSFER <b class="caret"></b></a>
                       <ul class="dropdown-menu">
                            <li><a href="<?php echo base_url();?>admin/bank_request/">BANK REQUEST </a></li>
              
              <li><a href="<?php echo base_url();?>admin/bank_history/">BANK HISTORY </a></li>
               
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">CONTROL <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo base_url();?>admin/administrator/">ADMINISTRATOR</a></li>
                            <li><a href="<?php echo base_url();?>admin/announcement/">ANNOUNCEMENT</a></li>
                            <li><a href="<?php echo base_url();?>admin/accounting/">ACCOUNTING</a></li>
                  	
                        </ul>
                    </li>
          			<li><a href="<?php echo base_url();?>admin/leads/">LEADS</a></li> 
                   
                </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
     <div class="col-md-8"></div>
    <div class="col-md-4">
<?php
$this->load->model('admin_model');
$payment_for_basic= "basic";
$payment_for_premium = "premium";
$payment_six_months = "6_months_extension";
$payment_one_year = "1_year_extension";
$payment_bundle = "bundle";
?>
<table width="100%" border="0">

  <tr>
    <td width="45%"> Basic
</td>
    <td width="55%">: <?php echo $this->admin_model->getPaymentStatus($payment_for_basic);?></td>
  </tr>
  <tr>
    <td>Premium</td>
    <td>: <?php echo $this->admin_model->getPaymentStatus($payment_for_premium);?></td>
  </tr>
  <tr>
    <td>6 Months Extension</td>
    <td>: <?php echo $this->admin_model->getPaymentStatus($payment_six_months);?></td>
  </tr>
  <tr>
    <td>1 Year Extension</td>
    <td>: <?php echo $this->admin_model->getPaymentStatus($payment_one_year);?></td>
  </tr>
    <tr>
    <td>Bundle</td>
    <td>: <?php echo $this->admin_model->getPaymentStatus($payment_bundle);?></td>
  </tr>
</table>
</div>
        
        <br />
        <br />
        <br />
        <br />

                <div class="col-lg-12">
             
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-users fa-fw"></i> Bundle
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                     
                           <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Username</th>
                                            <th>Fullname</th>
                                            <th>Payment Mode</th>
                                             <th>Transaction Photo</th>
                                            <th>Processor</th>
                                            <th>Reference #</th>
                                            <th>Sender</th>
                                            <th width="40">Notes</th>
                                            
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    if(!empty($getPayment)){
										foreach($getPayment as $subscription){
											/*echo '<pre>';
											print_r($subscription);
											echo '</pre';*/
											$payment_id = $subscription->payment_id;
											$member_id 	= $subscription->member_id;
											$username 	= $subscription->username;
											$lname 		= $subscription->lastname;
											$fname 		= $subscription->firstname;
											
											$members_fullname = $fname. ' '.$lname;
											
											$payment_mode = $subscription->payment_mode;
											$processor = $subscription->processor;
											$reference_number = $subscription->reference_number;
											$sender_name = $subscription->sender_name; 
											$notes = $subscription->notes;
											$status = $subscription->status;
                       $proof_of_payment = $subscription->proof_of_payment;
										
									?>
                                        <tr class="odd gradeX">
                                            <td><?php echo $username;?></td>
                                            <td><?php echo ucwords($members_fullname);?></td>
                                            <td><?php echo $payment_mode;?></td>
                                            <td class="center"><?php echo $processor;?></td>
                                             <td class="center"><a href="<?php echo base_url();?>uploads/<?php echo $proof_of_payment;?>" target="_new" data-toggle="lightbox"><?php echo $proof_of_payment;?></a></td>
                                            <td class="center"><?php echo $reference_number;?></td>
                                            <td class="center"><?php echo $sender_name;?></td>
                                            <td class="center" width="40" align="center"><a id="hash" data-container="body" data-trigger="hover" data-placement="left" data-content="<?php echo nl2br($notes);?>"><span class="glyphicon glyphicon-list-alt"></span></a></td>
                                           
                                            <td align="center"><span id="span_wait1<?php echo $payment_id;?>"></span><?php echo ($status==0 ? '<a href="javascript:void();" class="approval-bundle approvehide_'.$payment_id.'" id="'.$payment_id.'"><input type="hidden" value="'.$payment_id.'" id="payment_id" name="payment_id"><input type="hidden" value="'.$member_id.'" id="member_id" name="member_id">Approve</a>' : '---');?>  <?php echo ($status==0 ? '<a href="javascript:void();" class="disapprove_bundle disapprovehide_'.$payment_id.'" id="'.$payment_id.'"><input type="hidden" value="'.$payment_id.'" id="payment_id" name="payment_id"><input type="hidden" value="'.$member_id.'" id="member_id" name="member_id">Disapprove</a>' : '---');?> </td>
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
                <!-- /.col-lg-4 -->
      
       

    </div>
    <!-- /#wrapper -->

    <!-- jQuery Version 1.11.0 -->
    <script src="<?php echo base_url();?>assets/admin/js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url();?>assets/admin/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/tooltip.js"></script>
    <script src="<?php echo base_url();?>assets/js/popover.js"></script>
    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo base_url();?>assets/admin/js/plugins/metisMenu/metisMenu.min.js"></script>

 <!-- DataTables JavaScript -->
    <script src="<?php echo base_url();?>assets/admin/js/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="<?php echo base_url();?>assets/admin/js/plugins/dataTables/dataTables.bootstrap.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url();?>assets/admin/js/sb-admin-2.js"></script>
    
    
    <script src="<?php echo base_url();?>assets/js/script.js"></script>
    
<script src="<?php echo base_url();?>assets/lightbox/ekko-lightbox.js"></script>
        <script type="text/javascript">
            $(document).ready(function ($) {
                // delegate calls to data-toggle="lightbox"
                $(document).delegate('*[data-toggle="lightbox"]', 'click', function(event) {
                    event.preventDefault();
                    return $(this).ekkoLightbox({
                        onShown: function() {
                            if (window.console) {
                                return console.log('Checking proof of payment huh?');
                            }
                        }
                    });
                });

                //Programatically call
                $('#open-image').click(function (e) {
                    e.preventDefault();
                    $(this).ekkoLightbox();
                });
                $('#open-youtube').click(function (e) {
                    e.preventDefault();
                    $(this).ekkoLightbox();
                });

            });
        </script>
<script>
    $(document).ready(function() {
        $('#dataTables-example').dataTable({
	 "bSort": false
	
	});
	$('[id=hash]').popover({ trigger: "hover" });
    });
    </script>
</body>

</html>
