<!DOCTYPE html>
<html lang="en">
<head>
	<title>Capture Page</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Bootstrap -->
	<link href="<?php echo base_url();?>assets/capture_page_assets/capture-page-44/library/bootstrap/css/bootstrap.css" rel="stylesheet" media="screen">
	<link href="<?php echo base_url();?>assets/capture_page_assets/capture-page-44/library/bootstrap/css/bootstrap-responsive.css" rel="stylesheet">

	<link href="<?php echo base_url();?>assets/capture_page_assets/capture-page-44/style.css" rel="stylesheet">
	<link href="<?php echo base_url();?>assets/capture_page_assets/capture-page-44/css/custom-style.css" rel="stylesheet">
	<link href="<?php echo base_url();?>assets/capture_page_assets/capture-page-44/css/media-queries.css" rel="stylesheet">
</head>
<body>

<!-- Part 1: Wrap all page content here -->
<div id="wrap">

	<div class="container">
        <div class="content_wrapper">
        <input type="hidden" value="<?php echo base_url();?>" id="baseurl" name="baseurl">
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
				<div class="row-fluid">
					<div class="span12"><img src="<?php echo base_url();?>assets/capture_page_assets/capture-page-44/images/top.jpg" alt="top"></div><!-- //End span12 -->
				</div><!-- //End row-fluid -->
				<div class="row-fluid">
					<div class="span5">
						<div class="form">
						<form method="post">
							<p class="form-heading">LEAVE YOUR DETAILS FOR MORE INFO</p>
							<br />
							<input type="hidden" value="<?php echo $id;?>" name="member_id" id="member_id">
							<input class="span12" type="text" placeholder="Email" name="email" id="email">
							<br /><br />
							<input class="span12" type="text" placeholder="Contact Number" name="contact_num" id="contact_num">
							<br /><br />
							<input type="button" id="btn_submit1" value="SUBMIT" onClick="sendEmail()">
						</form>
						</div><!-- //End form -->
					</div><!-- //End span5 -->
					<div class="span1"></div><!-- //End span1 -->
					<div class="span6"><img src="<?php echo base_url();?>assets/capture_page_assets/capture-page-44/images/logo.jpg" alt="video"></div><!-- //End span6 -->
				</div><!-- //End row-fluid -->
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


<script src="<?php echo base_url();?>assets/capture_page_assets/capture-page-44/js/jquery-1.9.1.min.js"></script>
<script src="<?php echo base_url();?>assets/capture_page_assets/capture-page-44/library/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>assets/capture_page_assets/capture-page-44/js/script.js"></script>

</body>
</html>