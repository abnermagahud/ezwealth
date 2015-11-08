<!DOCTYPE html>
<html lang="en">
<head>
	<title>Capture Page</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Bootstrap -->
	<link href="<?php echo base_url();?>assets/capture_page_assets/capture-page-1/library/bootstrap/css/bootstrap.css" rel="stylesheet" media="screen">
	<link href="<?php echo base_url();?>assets/capture_page_assets/capture-page-1/library/bootstrap/css/bootstrap-responsive.css" rel="stylesheet">

	<link href="<?php echo base_url();?>assets/capture_page_assets/capture-page-1/style.css" rel="stylesheet">
	<link href="<?php echo base_url();?>assets/capture_page_assets/capture-page-1/css/custom-style.css" rel="stylesheet">
	<link href="<?php echo base_url();?>assets/capture_page_assets/capture-page-1/css/media-queries.css" rel="stylesheet">
</head>
<body>
<input type="hidden" value="<?php echo base_url();?>" id="baseurl" name="baseurl">

<!-- Part 1: Wrap all page content here -->
<div id="wrap">
 
	<div class="container" style="background:#000;">
        <div class="content_wrapper">
<div class="pull-right">

<?php

if(!$this->session->userdata('member_id')){
$username = $this->uri->segment(2);
$members_info = $this->member_model->checkUsername($username);

$cp = $this->uri->segment(3);
$capture_page = explode('-',$cp);
$capture_page_id = $capture_page[1];

}else{
$member_id = $this->session->userdata('member_id');
$members_info = $this->member_model->getMember($member_id);
$username = $this->session->userdata('username');
//$cp = $this->uri->segment(3);


$page = $this->uri->segment(2);

if($page=="edit_page"){
	$capture_page_id = $this->uri->segment(3);

	}else{
$cp = $this->uri->segment(3);
$capture_page = explode('-',$cp);
$capture_page_id = $capture_page[1];

		}
}

if(!empty($members_info)){
	foreach($members_info as $members){
$id = $members->member_id;
	$fname = $members->firstname;
	$lname = $members->lastname;
	$email = $members->email;
	$mobile_number = $members->mobile_number;
	$fullname = $fname.' '.$lname;

	echo '<strong style="color:#fff;">'.ucwords($fullname).' | '.$email.' | '.$mobile_number.'</strong>';

	}
}



?>
</div>
	<input type="hidden" value="<?php echo $capture_page_id?>" name="capture_page_id" id="capture_page_id">
            <div class="content_holder"><!-- Begin content -->
				<img src="<?php echo base_url();?>assets/capture_page_assets/capture-page-1/images/work-from-home.gif" width="661" height="98" border="0" style="text-align:center;" alt="Work From Home">
            </div><!-- //End Content Holder -->
        </div><!-- //End Content Wrapper -->
    </div><!-- //End Container -->
	
	<div class="rowpush" style="height:20px;"></div>
	
	<div class="container">

        <div class="content_wrapper">
            <div class="content_holder"><!-- Begin content -->
				<div class="row-fluid form">
					<div class="span7"></div>
					<div class="span5" style="background:#00a3d6; text-align:center; padding:40px;">
						<h3>SIGN UP NOW</h3>
						<form method="post">
						<div class="rowpush" style="height:40px;"></div>
						<input type="text" style="width:90%;" id="email" name="email">
						<input type="hidden" value="<?php echo $id;?>" name="member_id" id="member_id">
						<div class="rowpush" style="height:20px;"></div>
						<p style="color:#FFF;font-size:20px;">ENTER YOUR BEST EMAIL</p>
						<div class="rowpush" style="height:20px;"></div>
						<input type="button" id="btn_submit1" value="SUBMIT" onClick="sendEmail()">
						</form>
						
					</div>
				</div>
            </div><!-- //End Content Holder -->
        </div><!-- //End Content Wrapper -->
    </div><!-- //End Container -->
	
	<div class="rowpush" style="height:60px;"></div>
	
	<div class="container">
        <div class="content_wrapper">
            <div class="content_holder"><!-- Begin content -->
				<div class="row-fluid" style="background:url(<?php echo base_url();?>/assets/capture_page_assets/capture-page-1/images/white-bg.png); padding:20px;">
					<div class="span12">
						<h2 style="text-align:center;line-height:1;"><span style="color:#0e940e;">MAKE EXTRA MONEY</span> FOR YOUR FAMILY</h2>
					</div>
				</div>
            </div><!-- //End Content Holder -->
        </div><!-- //End Content Wrapper -->
    </div><!-- //End Container -->

    <div id="push"></div>
</div><!--//End Wrap-->



<div id="footer">
  <div class="container">
        <div class="content_wrapper">
            <div class="content_holder"><!-- Begin content -->
           </div><!-- //End Content Holder -->
        </div><!-- //End Content Wrapper -->
  </div><!--//End Container-->
</div><!--//End Footer-->


<script src="<?php echo base_url();?>assets/capture_page_assets/capture-page-1/js/jquery-1.9.1.min.js"></script>
<script src="<?php echo base_url();?>assets/capture_page_assets/capture-page-1/library/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>assets/capture_page_assets/capture-page-1/js/script.js"></script>
</body>
</html>