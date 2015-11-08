<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Transfer>Paypal History | Administration Panel</title>

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

</head>

<body>

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
        <a class="navbar-brand" href="<?php echo base_url();?>admin/">EZ Wealth System</a>
                
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
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">PAYMENTS<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo base_url();?>admin/subscription">SUBCRIPTIONS</a></li>
                            <li><a href="<?php echo base_url();?>admin/six_months/">6 MONTHS</a></li>
                  			<li><a href="<?php echo base_url();?>admin/one_year/">1 YEAR</a></li>
                        </ul>
                    </li>
                    <li><a href="<?php echo base_url();?>admin/ewallet/">E-WALLET</a></li>
                   
             		 <li class="dropdown active">
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
                  	
                        </ul>
                    </li>
          			<li><a href="<?php echo base_url();?>admin/leads/">LEADS</a></li> 
                   
                </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>

                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-users fa-fw"></i>Paypal History
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                           <div class="table-responsive">
                                      <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Username</th>
                                            <th>Fullname</th>
                                            <th>Mode of Transfer</th>
                                            <th>Processor</th>
                                            <th>Amount</th>
                                            <th>Transfer Date</th>
                                         
                                        </tr>
                                    </thead>
                                    <tbody>
                                     <?php
                                    if(!empty($paypalhistory)){
										foreach($paypalhistory as $request){
										/*	echo '<pre>';
											print_r($request);
											echo '</pre>';*/
											$transfer_id    = $request->transfer_id;
											$member_id      = $request->member_id;
											$username 	    = $request->username;
											$lname 		    = $request->lastname;
											$fname		    = $request->firstname;
											
											$memberfullname = $fname.' '.$lname;
											
											$transfer_mode  = $request->transfer_mode;
											$processor      = $request->processor;
											$amount         = $request->amount;
											$transfer_date  = $request->transfer_date;
											$timestamp 		= strtotime($transfer_date);
									
									?>
                                        <tr class="odd gradeX">
                                            <td><?php echo $username;?></td>
                                            <td><?php echo ucwords($memberfullname);?></td>
                                            <td><?php echo $transfer_mode;?></td>
                                            <td class="center"><?php echo $processor;?></td>
                                            <td class="center"><?php echo $amount;?></td>
                                            <td class="center"><?php echo date('Y-m-d',$timestamp);?> <?php echo date('h:i:s',$timestamp);?></td>
                                         
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

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo base_url();?>assets/admin/js/plugins/metisMenu/metisMenu.min.js"></script>

 <!-- DataTables JavaScript -->
    <script src="<?php echo base_url();?>assets/admin/js/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="<?php echo base_url();?>assets/admin/js/plugins/dataTables/dataTables.bootstrap.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url();?>assets/admin/js/sb-admin-2.js"></script>
<script>
    $(document).ready(function() {
        $('#dataTables-example').dataTable({
	 "bSort": false
	
	});
    });
    </script>
</body>

</html>
