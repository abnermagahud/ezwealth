<!DOCTYPE html>
<html lang="en">
<head>
	<title>Capture Page</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Bootstrap -->
	<link href="<?php echo base_url();?>assets/capture_page_assets/capture-page-22/library/bootstrap/css/bootstrap.css" rel="stylesheet" media="screen">
	<link href="<?php echo base_url();?>assets/capture_page_assets/capture-page-22/library/bootstrap/css/bootstrap-responsive.css" rel="stylesheet">

	<link href="<?php echo base_url();?>assets/capture_page_assets/capture-page-22/style.css" rel="stylesheet">
	<link href="<?php echo base_url();?>assets/capture_page_assets/capture-page-22/css/custom-style.css" rel="stylesheet">
	<link href="<?php echo base_url();?>assets/capture_page_assets/capture-page-22/css/media-queries.css" rel="stylesheet">
</head>
<body>
<input type="hidden" value="<?php echo base_url();?>" id="baseurl" name="baseurl">
<!-- Part 1: Wrap all page content here -->
<div id="wrap">
	
	<div class="rowpush" style="height:30px;"></div>
	
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
				<div class="row-fluid" style="text-align:center;">
					<div class="span12"><img src="<?php echo base_url();?>assets/capture_page_assets/capture-page-22/images/weroyale.png" alt="we royale"></div><!-- //End span6 -->
				</div><!-- //End row-fluid -->
            </div><!-- //End Content Holder -->
        </div><!-- //End Content Wrapper -->
    </div><!-- //End Container -->
	
	<div class="rowpush" style="height:30px;"></div>
	
	<div class="container">
        <div class="content_wrapper">
            <div class="content_holder"><!-- Begin content -->
				<div class="row-fluid">
					<div class="span5">
						<div class="form">
						<form method="post">
							<p class="form-heading">TOGETHER WE ROYALIZE THE WORLD!</p>
							<div class="rowpush"></div>
							<input type="hidden" value="<?php echo $id;?>" name="member_id" id="member_id">
							<input class="span12" type="text" name="email" id="email" placeholder="ENTER EMAIL">
							<div class="rowpush"></div>
							<input class="span12" type="text" name="contact_num" id="contact_num" placeholder="CONTACT NUMBER">
							<div class="rowpush"></div>
							<input type="button" onclick="sendEmail()" id="btn_submit1" value="SUBMIT">
						</form>
						</div>
					</div><!-- //End span5 -->
					<div id="ytb_vid1"></div>
					<div class="span7"><img id="ytv1" src="<?php echo base_url();?>assets/capture_page_assets/capture-page-22/images/video.jpg" width="540" height="348" alt="video"></div><!-- //End span6 -->
				</div><!-- //End row-fluid -->
            </div><!-- //End Content Holder -->
        </div><!-- //End Content Wrapper -->
    </div><!-- //End Container -->

    <div id="push"></div>
</div><!--//End Wrap-->


<div id="footer" style="background:#4968be;">
  <div class="container">
        <div class="content_wrapper">
            <div class="content_holder"><!-- Begin content -->
           </div><!-- //End Content Holder -->
        </div><!-- //End Content Wrapper -->
  </div><!--//End Container-->
</div><!--//End Footer-->


<script src="<?php echo base_url();?>assets/capture_page_assets/capture-page-22/js/jquery-1.9.1.min.js"></script>
<script src="<?php echo base_url();?>assets/capture_page_assets/capture-page-22/library/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>assets/capture_page_assets/capture-page-22/js/script.js"></script>
</body>
</html>