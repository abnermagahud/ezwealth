<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Control>Administrator | Administration Panel</title>

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
                    <li class="dropdown">
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
                    <li class="dropdown active">
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

                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-users fa-fw"></i>Administrator
                            <div class="pull-right" style="margin-top: -4px;">
                           <button type="button" name="add" data-toggle="modal" data-target="#modal" class="btn btn-primary btn-sm"><i class="fa fa-plus fa-fw"></i> Add Admin User</button>
                     
                            </div>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                           <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Fullname</th>
                                            <th>Username</th>
                                            <th>Password</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    if(!empty($admins)){
										
										foreach($admins as $admin){
											
										$lname = $admin->lastname;
										$fname = $admin->firstname;
										$password = $admin->password;
										$admin_fullname = $fname.' '.$lname;
										$admin_uname = $admin->username;	
										
									?>
                                        <tr class="odd gradeX record">
                                            <td><?php echo ucwords($admin_fullname); ?></td>
                                            <td><?php echo $admin_uname; ?></td>
                                            <td><?php echo $password; ?></td>
                                            <td><a href="<?php echo base_url();?>admin/edit-profile/<?php echo $admin->member_id;?>/">Edit</a> | <a href="javascript:void(0);" class="deladmin" id="<?php echo $admin->member_id;?>"><input type="hidden" value="<?php echo $admin->member_id;?>" name="admin_id" id="admin_id">Delete</a></td>
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


<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" >
  <form class="form-horizontal" role="form" method="post">
    <div class="modal-content">
      <div class="modal-header">
  
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
   <h4 class="modal-title" id="myModalLabel">Add Admin User</h4>
      </div>
      <div class="modal-body">
  <div id="wait_admin_area"></div>
  <div id="message_add_admin"></div>
     
  <div class="form-group">
    <label for="bank_name" class="col-sm-4 control-label">Username:</label>
    <div class="col-sm-7">
      <input type="text" class="form-control" name="uname" id="uname" >
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-4 control-label">Password:</label>
    <div class="col-sm-7">
      <input type="password" class="form-control" id="password" name="password" >
    </div>
  </div>
  <div class="form-group">
    <label for="lname" class="col-sm-4 control-label">Last Name:</label>
    <div class="col-sm-7">
      <input type="text" class="form-control" id="lname" name="lname">
    </div>
  </div>
   <div class="form-group">
    <label for="fname" class="col-sm-4 control-label">First Name:</label>
    <div class="col-sm-7">
      <input type="text" class="form-control" id="fname" name="fname">
    </div>
    
  </div>
  
   <div class="form-group">
    <label for="admin_email" class="col-sm-4 control-label">Email:</label>
    <div class="col-sm-7">
      <input type="text" class="form-control" id="admin_email" name="admin_email">
    </div>
    
  </div>
      </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
       <button type="button" class="btn btn-primary" id="btn_add_admin" onClick="addUser()">Add User</button>
      </div>  
    </div>
    </form>
  </div>
</div>
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
    
    <script src="<?php echo base_url();?>assets/js/script.js"></script>
<script>
    $(document).ready(function() {
        $('#dataTables-example').dataTable({
	 "bSort": false
	
	});
    });
    </script>
</body>

</html>
