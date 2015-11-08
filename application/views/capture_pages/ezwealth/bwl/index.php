<!DOCTYPE html>
<html lang="en">
<head>
	<title>Capture Page</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Bootstrap -->
	<link href="<?php echo base_url();?>assets/new-capture-page-assets/bwl/library/bootstrap/css/bootstrap.css" rel="stylesheet" media="screen">
	<link href="<?php echo base_url();?>assets/new-capture-page-assets/bwl/library/bootstrap/css/bootstrap-responsive.css" rel="stylesheet">

	<link href="<?php echo base_url();?>assets/new-capture-page-assets/bwl/style.css" rel="stylesheet">
	<link href="<?php echo base_url();?>assets/new-capture-page-assets/bwl/css/custom-style.css" rel="stylesheet">
	<link href="<?php echo base_url();?>assets/new-capture-page-assets/bwl/css/media-queries.css" rel="stylesheet">
</head>
<body>

<div class="container">
    <div class="content_wrapper" style="background:#FFF;">

    <div class="pull-right">

<?php

if(!$this->session->userdata('member_id')){
$username = $this->uri->segment(2);
$members_info = $this->member_model->checkUsername($username);

$cp = $this->uri->segment(3);
//$capture_page = explode('-',$cp);
$capture_page_id =  $this->member_model->getNewCapturePageId($cp);

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
$capture_page_id = $this->member_model->getNewCapturePageId($cp);

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
	<input type="hidden" value="<?php echo base_url();?>" id="baseurl" name="baseurl">
	<input type="hidden" value="<?php echo $capture_page_id?>" name="capture_page_id" id="capture_page_id">
	<input type="hidden" value="<?php echo $id;?>" name="member_id" id="member_id">

        <div class="content_holder"><!-- Begin content -->
			<div class="row-fluid">
				<div class="span12" style="text-align:center;">
					<div class="rowpush" style="height:40px;"></div>
					<h1>Lorem Ipsum Dolore</h1>
					<h2>"5 Days to a Healthier Weight"</h2>
					<div class="rowpush" style="height:40px;"></div>
					<img src="<?php echo base_url();?>assets/new-capture-page-assets/bwl/images/logo.jpg" alt="logo">
					<div class="rowpush" style="height:40px;"></div>
					<div id="ytb_vid"></div>
					<img id="ytb" src="<?php echo base_url();?>assets/new-capture-page-assets/bwl/images/video.jpg" width="621" height="374" alt="top">
					<br />
					<br />
					<div align="center" id="web-form" >

					<div id="for-webform">
						<script type="text/javascript" src=""></script>
						</div>

						<div id="for-getresponse" style="background-color:#ccc; width:450px;" >
						<div class="form">
						<form method="post">
							<p class="form-heading">LEAVE YOUR DETAILS FOR MORE INFO</p>
							<br />
							<input class="span9" type="text" id="email" name="email" placeholder="Email">
							<br /><br />
							<input class="span9" type="text" name="contact_num" id="contact_num" placeholder="Contact Number">
							<br /><br />
							<input type="button" onClick="sendEmail()" id="btn_submit1" value="SUBMIT">
						</form>
						</div><!-- //End form -->

					</div>
					<div class="rowpush" style="height:40px;"></div>
					<img src="<?php echo base_url();?>assets/new-capture-page-assets/bwl/images/plum.jpg" alt="plum">
					<div class="rowpush" style="height:40px;"></div>
					<img src="<?php echo base_url();?>assets/new-capture-page-assets/bwl/images/bottom.jpg" alt="bottom">
				</div><!-- End span12 -->
			</div><!-- End row-fluid -->
        </div><!-- //End Content Holder -->
    </div><!-- //End Content Wrapper -->
</div><!-- //End Container -->


<script src="<?php echo base_url();?>assets/new-capture-page-assets/bwl/js/jquery-1.9.1.min.js"></script>
<script src="<?php echo base_url();?>assets/new-capture-page-assets/bwl/library/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>assets/new-capture-page-assets/aim/js/script.js"></script>
</body>
</html>