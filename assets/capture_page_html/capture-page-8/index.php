<!DOCTYPE html>
<html lang="en">
<head>
	<title>Capture Page</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Bootstrap -->
	<link href="<?php echo base_url();?>assets/capture_page_assets/capture-page-8/library/bootstrap/css/bootstrap.css" rel="stylesheet" media="screen">
	<link href="<?php echo base_url();?>assets/capture_page_assets/capture-page-8/library/bootstrap/css/bootstrap-responsive.css" rel="stylesheet">

	<link href="<?php echo base_url();?>assets/capture_page_assets/capture-page-8/style.css" rel="stylesheet">
	<link href="<?php echo base_url();?>assets/capture_page_assets/capture-page-8/css/custom-style.css" rel="stylesheet">
	<link href="<?php echo base_url();?>assets/capture_page_assets/capture-page-8/css/media-queries.css" rel="stylesheet">
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

	echo '<strong style="color:#fff;">'.ucwords($fullname).' | '.$email.' | '.$mobile_number.'</strong>';

	}
}



?>
</div>
<input type="hidden" value="<?php echo $capture_page_id?>" name="capture_page_id" id="capture_page_id">
            <div class="content_holder"><!-- Begin content -->
				<div class="row-fluid">
					<div class="span7 form" style="text-align:center;">
						<div class="row-fluid">
							<div class="span12">
								<img src="<?php echo base_url();?>assets/capture_page_assets/capture-page-8/images/logo.jpg" width="539" height="223" alt="Logo">
							</div><!-- //End span12 -->
						</div><!-- //End row-fluid -->
						<div class="row-fluid">
							<div class="span12">
								<!-- Form -->
								<div class="row-fluid" style="background:#534848;">
									<div class="span12 form-title"><h1 style="text-align:center; color:#FFF;">GET STARTED TODAY!<h1></div><!-- //End span12 -->
								</div><!-- //End row-fluid -->
								<div class="row-fluid" style="background:#fc4df2;">
								<form method="post">
									<div class="span12">
										<div class="rowpush" style="height:20px;"></div>
										<input type="text" name="email" id="email" style="width:85%;" placeholder="Enter Your Email">
										<input type="hidden" value="<?php echo $id;?>" name="member_id" id="member_id">
										<div class="rowpush" style="height:20px;"></div>
										<p><input type="button" onClick="sendEmail()" id="btn_submit1" value="SIGN UP NOW"></p>
										<div class="rowpush" style="height:20px;"></div>
									</div><!-- //End span12 -->
								</form>
								</div><!-- //End row-fluid -->
								<!-- //End Form -->
							</div><!-- //End span12 -->
						</div><!-- //End row-fluid -->
					</div><!-- //End span7 -->
					<div class="span5">
						<img src="<?php echo base_url();?>assets/capture_page_assets/capture-page-8/images/plum.jpg" width="400" height="460" alt="Plum">
					</div><!-- //End span9 -->
				</div><!-- //End row-fluid -->
            </div><!-- //End Content Holder -->
        </div><!-- //End Content Wrapper -->
    </div><!-- //End Container -->
	<!-- //End Form -->
	
	<div class="rowpush" style="height:40px;"></div>
	
	<div class="container">
        <div class="content_wrapper">
            <div class="content_holder"><!-- Begin content -->
				<div class="row-fluid">
					<div class="span3"><img src="<?php echo base_url();?>assets/capture_page_assets/capture-page-8/images/testimonial-1.jpg" width="228" height="300" alt="Plum"></div>
					<div class="span3"><img src="<?php echo base_url();?>assets/capture_page_assets/capture-page-8/images/testimonial-2.jpg" width="228" height="300" alt="Plum"></div>
					<div class="span3"><img src="<?php echo base_url();?>assets/capture_page_assets/capture-page-8/images/testimonial-3.jpg" width="228" height="300" alt="Plum"></div>
					<div class="span3"><img src="<?php echo base_url();?>assets/capture_page_assets/capture-page-8/images/testimonial-4.jpg" width="228" height="300" alt="Plum"></div>
				</div>
            </div><!-- //End Content Holder -->
        </div><!-- //End Content Wrapper -->
    </div><!-- //End Container -->
	
    <div id="push"></div>
</div><!--//End Wrap-->



<div id="footer">
  <div class="container">
  </div><!--//End Container-->
</div><!--//End Footer-->


<script src="<?php echo base_url();?>assets/capture_page_assets/capture-page-8/js/jquery-1.9.1.min.js"></script>
<script src="<?php echo base_url();?>assets/capture_page_assets/capture-page-8/library/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>assets/capture_page_assets/capture-page-8/js/script.js"></script>
</body>
</html>