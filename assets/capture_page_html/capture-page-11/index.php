<!DOCTYPE html>
<html lang="en">
<head>
	<title>Capture Page</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Bootstrap -->
	<link href="<?php echo base_url();?>assets/capture_page_assets/capture-page-11/library/bootstrap/css/bootstrap.css" rel="stylesheet" media="screen">
	<link href="<?php echo base_url();?>assets/capture_page_assets/capture-page-11/library/bootstrap/css/bootstrap-responsive.css" rel="stylesheet">

	<link href="<?php echo base_url();?>assets/capture_page_assets/capture-page-11/style.css" rel="stylesheet">
	<link href="<?php echo base_url();?>assets/capture_page_assets/capture-page-11/css/custom-style.css" rel="stylesheet">
	<link href="<?php echo base_url();?>assets/capture_page_assets/capture-page-11/css/media-queries.css" rel="stylesheet">
</head>
<body>
<input type="hidden" value="<?php echo base_url();?>" id="baseurl" name="baseurl">
<!-- Part 1: Wrap all page content here -->
<div id="wrap">

	<div class="container">
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

	echo '<strong style="color:#000;">'.ucwords($fullname).' | '.$email.' | '.$mobile_number.'</strong>';

	}
}



?>
</div>
	<input type="hidden" value="<?php echo $capture_page_id?>" name="capture_page_id" id="capture_page_id">
            <div class="content_holder"><!-- Begin content -->
				
				<div class="rowpush" style="height:50px;"></div>
				
				<div class="row-fluid">
					<div class="span12"><h1>LAUNCH AN ONLINE BUSINESS</h1></div><!-- //End span6 -->
				</div><!-- //End row-fluid -->

				<div class="rowpush" style="height:50px;"></div>

				<div class="row-fluid">
				
					<div class="span6"><div id="ytb_vid1"></div><img id="ytb1" src="<?php echo base_url();?>assets/capture_page_assets/capture-page-11/images/video.jpg" width="459" height="282" alt="video"></div><!-- //End span6 -->
					<div class="span6">
						<img src="<?php echo base_url();?>assets/capture_page_assets/capture-page-11/images/logo.jpg" alt="logo">
						<div class="rowpush" style="height:30px"></div>
						<div class="form">
						<form method="post">
							<p class="form-heading">ENTER YOUR EMAIL</p>
							<div class="rowpush"></div>
							<input type="hidden" value="<?php echo $id;?>" name="member_id" id="member_id">
							<input class="span12" name="email" id="email" type="text" placeholder="Email">
							<div class="rowpush"></div>
							<input type="button" onclick="sendEmail()" id="btn_submit1" value="SUBMIT">
						</form>
						</div>
					</div><!-- //End span6 -->
				</div><!-- //End row-fluid -->
				
			</div><!-- //End Content Holder -->
        </div><!-- //End Content Wrapper -->
    </div><!-- //End Container -->


    <div id="push"></div>
</div><!--//End Wrap-->


<div id="footer" style="background:#0a5dad;">
  <div class="container">
        <div class="content_wrapper">
            <div class="content_holder"><!-- Begin content -->
				<div class="row-fluid">
					<div class="span12"><h2>Instantly create your online business with payment gateway and built in easy to sell products.</h2></div><!-- //End span6 -->
				</div><!-- //End row-fluid -->
			</div><!-- //End Content Holder -->
        </div><!-- //End Content Wrapper -->
  </div><!--//End Container-->
</div><!--//End Footer-->


<script src="<?php echo base_url();?>assets/capture_page_assets/capture-page-11/js/jquery-1.9.1.min.js"></script>
<script src="<?php echo base_url();?>assets/capture_page_assets/capture-page-11/library/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>assets/capture_page_assets/capture-page-11/js/script.js"></script>
</body>
</html>