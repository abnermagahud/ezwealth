<!DOCTYPE html>
<html lang="en">
<head>
	<title>Capture Page</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Bootstrap -->
	<link href="<?php echo base_url();?>assets/new-capture-page-assets/affiliate/library/bootstrap/css/bootstrap.css" rel="stylesheet" media="screen">
	<link href="<?php echo base_url();?>assets/new-capture-page-assets/affiliate/library/bootstrap/css/bootstrap-responsive.css" rel="stylesheet">

	<link href="<?php echo base_url();?>assets/new-capture-page-assets/affiliate/style.css" rel="stylesheet">
	<link href="<?php echo base_url();?>assets/new-capture-page-assets/affiliate/css/custom-style.css" rel="stylesheet">
	<link href="<?php echo base_url();?>assets/new-capture-page-assets/affiliate/css/media-queries.css" rel="stylesheet">
</head>
<body>
<!-- Part 1: Wrap all page content here -->
<div id="wrap">

	<div class="container">
        <div class="content_wrapper" style="height:50px;">
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

	echo '<strong style="color:#fff;">'.ucwords($fullname).' | '.$email.' | '.$mobile_number.'</strong>';

	}
}



?>
</div>
	<input type="hidden" value="<?php echo base_url();?>" id="baseurl" name="baseurl">
	<input type="hidden" value="<?php echo $capture_page_id?>" name="capture_page_id" id="capture_page_id">
	<input type="hidden" value="<?php echo $id;?>" name="member_id" id="member_id">
            <div class="content_holder"><!-- Begin content -->
            </div><!-- //End Content Holder -->
        </div><!-- //End Content Wrapper -->
    </div><!-- //End Container -->
 
	<div class="container">
        <div class="content_wrapper">
            <div class="content_holder"><!-- Begin content -->
				<div class="row-fluid">
					<div class="span3"></div>
					<div class="span6">
						<div id="for-webform">
						<script type="text/javascript" src=""></script>
						</div>

						<div id="for-getresponse">
						<div class="form">
						<form method="post">
							<p class="form-heading">LEAVE YOUR DETAILS FOR MORE INFO</p>
							<br />
							<input class="span12" type="text" id="email" name="email" placeholder="Email">
							<br /><br />
							<input class="span12" type="text" name="contact_num" id="contact_num" placeholder="Contact Number">
							<br /><br />
							<input type="submit" onClick="sendEmail()" id="btn_submit1" value="SUBMIT">
						</form>
						</div><!-- //End form -->
						</div>
					</div><!-- //End span6 -->
					<div class="span3"></div>
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


<script src="<?php echo base_url();?>assets/new-capture-page-assets/affiliate/js/jquery-1.9.1.min.js"></script>
<script src="<?php echo base_url();?>assets/new-capture-page-assets/affiliate/library/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>assets/new-capture-page-assets/aim/js/script.js"></script>
</body>
</html>