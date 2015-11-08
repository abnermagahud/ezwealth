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
 //$get_response_key = "";
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
          $get_response_key = $details->get_response_key;
          $subscription = $details->subscription;
          $limit = $details->capture_page_limit;
          $getresponse_affiliate = $details->getresponse_affiliate;
          
		  }
	  }
	  
//$datestring = "%Y-%m-%d";
//$time = time();

//$todays_date =  mdate($datestring, $time);

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
                            <a class="active"  href="<?php echo base_url();?>member/capture_page/"><i class="fa fa-edit fa-fw"></i>Edit Capture Page</a>
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
          <div class="col-md-7">
         <h3>Your capture page URL:</h3>
         <ol>
          <?php

                    foreach($capturepages as $page){
                        $image = $page->capture_image;
                        $capture_page_id = $page->capture_page_id;
                        $primary_capture_id = $page->primary_capture_id;
                        $status =  $page->status;
                        $page_name =  $page->page_name;
            
                if(!empty($status)){
            ?>
           
            <li><a href="<?php echo base_url();?>member/<?php echo $username;?>/<?php echo $page_name ;?>/" target="_new"><?php echo base_url();?>member/<?php echo $username;?>/<?php echo $page_name ;?>/</a> </li>     
             <br />
            <?php
              }
       
             }
            ?>
          </ol>
          </div>


           <div class="col-md-5">
           <h3>Subscription Information</h3>
           Membership type: <?php echo ucfirst($subscription);?>  
           <?php 
           if(!empty($subscription))
           {
            if($subscription=="basic"){

              echo '(You can activate '.$limit.' capture pages)';
            }else{
              echo '(You can activate '.$limit.' capture pages)';

            }

           }
           ?>
           
          <br />
           <br />
          <a href="javascript:void(0);" data-toggle="modal" data-target="#modal">Configure your 3rd party autoresponder</a>
          </div>
      </div>
         <br />
      
  
            <div class="row">
                   <div class="panel panel-default">
                        <div class="panel-heading">
                          <i class="fa fa-edit fa-fw"></i>Capture page
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">

                        <ul class="nav nav-tabs" id="tab">
                          <li class="active in"><a href="#ezwealthpages" data-toggle="tab">ezwealthpages.com</a></li>
                          
                        </ul>

                          <div class="tab-content">
                            <div class="tab-pane active" id="ezwealthpages">
                         <br />     
                    <?php
                      if($account_status==0 || $account_status==2){
                     echo '
                     <h4 align="center" class="alert alert-info">You must be active account to view this page. Click <a href="'.base_url().'member/payments/">here</a> to activate your account.</h4>
                      ';
                     }else{
                   ?>    
                           
                  <div class="container-fluid">  

                    <div class="row">               
                  <?php
                  if(!empty($capturepages)){

                  ?>  

                <?php

                foreach($capturepages as $page){
                  $image = $page->capture_image;
                  $capture_page_id = $page->capture_page_id;
                  $primary_capture_id = $page->primary_capture_id;
                  $status =  $page->status;
                  $page_name =  $page->page_name;
                ?>

          <div class="col-xs-6 col-md-4">
             <div class="thumbnail">
             <?php
             
           if(empty($status)){
             
             
           ?>
             <img src="<?php echo base_url().$image;?>" class="img-responsive" style="height:300px;">
          <?php
            }else{
          
  ?>
    <a href="<?php echo base_url();?>member/<?php echo $username;?>/<?php echo $page_name;?>" target="_new"> <img src="<?php echo base_url().$image;?>" class="img-responsive" style="height:300px;"></a>
    
    <?php
  }
  ?>
<div align="center">
<br />
<a href="<?php echo base_url();?>member/edit_page/<?php echo $capture_page_id;?>/<?php echo (empty($primary_capture_id) ? '' : 'primary_capture_id/'.$primary_capture_id.'/')?>" class="btn btn-primary btn-sm">Edit Capture Page</a>
<?php
if(empty($primary_capture_id)){
    
?>
<span id="wt<?php echo $capture_page_id;?>"></span><a href="javascript:void(0);" class="btn btn-primary btn-sm" id="btn_primary<?php echo $capture_page_id;?>" onclick="primary_page(<?php echo $capture_page_id;?>)"><input type="hidden" value="<?php echo $capture_page_id;?>" name="capture_page_id" id="capture_page_id">Activate</a> 
<?php
}else{
?>
<span id="wtdeactivate<?php echo $capture_page_id;?>"></span>
<a href="javascript:void(0);" onclick="deactivate(<?php echo $capture_page_id;?>)" class="btn btn-success btn-sm" id="btndeactivate<?php echo $capture_page_id;?>">Deactivate
<input type="hidden" value="<?php echo $capture_page_id;?>" name="capture_page_id" id="capture_page_id">
</a> 

<?php
}
?>

</div>
<br />
</div>
    </div>


<?php
  }
}

?>
</div>
 </div> 
 
          <?php
                     
           }
           ?>
                            </div>

                            
                          </div>



                        </div>
                        
                    </div>
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
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="modal-title" id="myModalLabel">Configure getResponse API Key</h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" method="post">
                 <div class="form-group">
                     <label class="col-sm-3 control-label"><strong>API Key:</strong></label>
                   <div class="col-md-7">
           <input type="text"  class="form-control" style="height:32px;" name="api_key" id="api_key" value="<?php echo (empty($get_response_key) ? '' : $get_response_key);?>" />
                     
                 </div>
                  
          </div>
          NOTE:<br />In order to get the API key, you need to 
    
          <?php

          if(empty($getresponsereferrer)){

            echo '<a href="http://www.getresponse.com/index/rommeldejesus" target="_new">register</a> ';
          }
          else
          {
             foreach($getresponsereferrer as $value) 
             {
                $referrer = $value->getresponse_affiliate;
             }

             echo '<a href="http://www.getresponse.com/index/'.$referrer.'" target="_new">register</a>';

          }
     
          ?>
      
          in getResponse.
               <div id="get_wait"></div> 
              <div id="get_responses"></div> 
            
      </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-success" id="btn-get" onclick="save_get()">Save</button>
      </div>
    </div>
  </div>
</div>


    <!-- jQuery Version 1.11.0 -->
    <script src="<?php echo base_url();?>assets/member/js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url();?>assets/member/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo base_url();?>assets/member/js/plugins/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url();?>assets/member/js/sb-admin-2.js"></script>
<script src="<?php echo base_url();?>assets/js/script.js"></script>
<script>
var inp = $("#page_link")[0];
var default_value = inp.value;

inp.addEventListener("input", function () { 
    this.value = default_value;
}, false);
</script>
</body>

</html>
