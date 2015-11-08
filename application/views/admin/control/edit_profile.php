<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Control>Administrator>Edit Profile | Administration Panel</title>

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
<?php
$admin_id =  $this->uri->segment(3);
?>
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
                            <i class="fa fa-users fa-fw"></i>Edit Profile
                            
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                           <div class="col-md-5">
                                <strong>Personal Details</strong>
                                 <br />
                                 <br />
                                 <?php
                                 if(!empty($admin_detail)){
									 foreach($admin_detail as $detail){
									/*	 echo '<pre>';
										 print_r($detail);
										 echo '</pre>';*/
						
										$admin_username  = $detail->username;
										$admin_lastname  = $detail->lastname;
										$admin_firstname = $detail->firstname;
										$admin_email     = $detail->email;
										$current_password = $detail->password;
									  }
								 }
								 ?>
  <form class="form-horizontal" role="form" method="post">
  <div class="form-group">
    <label for="edit_username" class="col-sm-3 control-label">Username:</label>
    <div class="col-sm-7">
      <input type="text" class="form-control" id="edit_username" name="edit_username" value="<?php echo  (isset($_POST['edit_username']) ? $_POST['edit_username'] : $admin_username);?>" placeholder="Username">
    </div>
  </div>
  <div class="form-group">
    <label for="edit_lastname" class="col-sm-3 control-label">Lastname:</label>
    <div class="col-sm-7">
      <input type="text" class="form-control" id="edit_lastname" name="edit_lastname" value="<?php echo  (isset($_POST['edit_lastname']) ? $_POST['edit_lastname'] : $admin_lastname);?>" placeholder="Lastname">
    </div>
  </div>

<div class="form-group">
    <label for="edit_firstname" class="col-sm-3 control-label">Firstname:</label>
    <div class="col-sm-7">
      <input type="text" class="form-control" id="edit_firstname" name="edit_firstname" value="<?php echo  (isset($_POST['edit_firstname']) ? $_POST['edit_firstname'] : $admin_firstname);?>" placeholder="Lastname">
    </div>
  </div>
  
  <div class="form-group">
    <label for="edit_firstname" class="col-sm-3 control-label">Email:</label>
    <div class="col-sm-7">
      <input type="text" class="form-control" id="edit_email" name="edit_email" value="<?php echo  (isset($_POST['edit_email']) ? $_POST['edit_email'] : $admin_email);?>" placeholder="Email">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-3 col-sm-10">
      <button type="submit" class="btn btn-primary" name="btn_edit_profile">Update</button>
    </div>
  </div>
</form>
<?php
$this->load->model('admin_model');

if(isset($_POST['btn_edit_profile'])){
	
	
	$edit_username = $this->input->post('edit_username');
	$edit_lastname = $this->input->post('edit_lastname');
	$edit_firstname = $this->input->post('edit_firstname');
	$edit_email = $this->input->post('edit_email');
	
	
	if(empty($edit_username) || empty($edit_lastname) || empty($edit_firstname) || empty($edit_email)){
		echo '<div class="alert alert-danger">All fields are required.</div>';
		}else{
			
			$this->admin_model->updateAdmin($admin_id,$edit_username,$edit_lastname,$edit_firstname,$edit_email);
			
			echo '<div class="alert alert-success">Successfully Updated</div>';
			}
	}
?>
                            </div> 
                         
                         
                         
      <div class="col-md-6">
      <strong>Change Password</strong>
      <br />
      <br />
  <form class="form-horizontal" role="form" method="post">
  <div class="form-group">
    <label for="edit_cur_password" class="col-sm-5 control-label">Current Password:</label>
    <div class="col-sm-7">
      <input type="password" class="form-control" id="edit_cur_password" name="edit_cur_password" placeholder="Current Password">
    </div>
  </div>
  <div class="form-group">
    <label for="edit_lastname" class="col-sm-5 control-label">New Password:</label>
    <div class="col-sm-7">
      <input type="password" class="form-control" id="edit_new_password" name="edit_new_password" placeholder="New Password">
    </div>
  </div>

<div class="form-group">
    <label for="edit_firstname" class="col-sm-5 control-label">Re-type New Password:</label>
    <div class="col-sm-7">
      <input type="password" class="form-control" id="edit_retype_password" name="edit_retype_password" placeholder="Re-type New Password">
    </div>
  </div>
  

  <div class="form-group">
    <div class="col-sm-offset-5 col-sm-10">
      <button type="submit" class="btn btn-primary" name="btn_change_pw">Change password</button>
    </div>
  </div>
</form>

<?php

if(isset($_POST['btn_change_pw'])){
	
		$cur_password = $this->input->post('edit_cur_password');
		$new_password = $this->input->post('edit_new_password');
		$retype_new_pw = $this->input->post('edit_retype_password');
		
	if(empty($cur_password) | empty($new_password) | empty($retype_new_pw) ){
			echo '<div class="alert alert-danger">All fields are required.</div>';
		}else{
			if($current_password!=$cur_password){
				echo '<div class="alert alert-danger">Current password is Incorrect.</div>';
				}else{
					
					if($new_password!=$retype_new_pw){
						echo '<div class="alert alert-danger">Password did not match.</div>';
						}else{
							
							$this->admin_model->updateAdminPassword($admin_id,$new_password);
							echo '<div class="alert alert-success">Successfully Changed.</div>';
							}
					}
			
			}
	}

?>
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
