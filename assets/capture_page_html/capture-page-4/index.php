<!DOCTYPE html>
<html lang="en">
<head>
	<title>Capture Page</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Bootstrap -->
	<link href="<?php echo base_url();?>assets/capture_page_assets/capture-page-4/library/bootstrap/css/bootstrap.css" rel="stylesheet" media="screen">
	<link href="<?php echo base_url();?>assets/capture_page_assets/capture-page-4/library/bootstrap/css/bootstrap-responsive.css" rel="stylesheet">

	<link href="<?php echo base_url();?>assets/capture_page_assets/capture-page-4/style.css" rel="stylesheet">
	<link href="<?php echo base_url();?>assets/capture_page_assets/capture-page-4/css/custom-style.css" rel="stylesheet">
	<link href="<?php echo base_url();?>assets/capture_page_assets/capture-page-4/css/media-queries.css" rel="stylesheet">
</head>
<body>
<input type="hidden" value="<?php echo base_url();?>" id="baseurl" name="baseurl">
<!-- Part 1: Wrap all page content here -->
<div id="wrap">
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
	<div class="container" style="background:#ffe5e5;">
		<img src="<?php echo base_url();?>assets/capture_page_assets/capture-page-4/images/make-money-online.png" width="1263" height="162" border="0" alt="Make Money Oline">
    </div><!-- //End Container -->
	
	<div class="rowpush" style="height:40px;"></div>
	
	<div class="container">
        <div class="content_wrapper">

            <div class="content_holder"><!-- Begin content -->
				<div class="row-fluid">
					<div class="span6" style="text-align:center;">
					<div id="ytb_vid2"></div>
						<img id="ytb2" src="<?php echo base_url();?>assets/capture_page_assets/capture-page-4/images/video.jpg" width="460" height="336" alt="video">
					</div><!-- //End span6 -->
					
					<div class="span6 form" style="text-align:center;">
						<div class="row-fluid">
							<div class="span12">
								<h2 style="line-height:1;color:#ff0000;margin-top:0px;">WATCH THIS FREE VIDEO</h2>
							</div><!-- //End span12 -->
						</div><!-- //End row-fluid -->
						<div class="rowpush" style="height:20px;"></div>
						<!-- Form -->
						<div class="row-fluid" style="background:#534848;">
							<div class="span12"><h1 style="text-align:center; color:#FFF;">GET STARTED TODAY!<h1></div><!-- //End span12 -->
						</div><!-- //End row-fluid -->
						<div class="row-fluid" style="background:#ff3c02;">
						<form method="post">
							<div class="span12">
								<div class="rowpush" style="height:20px;"></div>
								<input type="text" style="width:85%;" id="email" name="email" placeholder="Enter Your Email">
								<input type="hidden" value="<?php echo $id;?>" name="member_id" id="member_id">
								<div class="rowpush" style="height:20px;"></div>
								<p><input type="button" onClick="sendEmail()" value="SIGN UP NOW"></p>
								<div class="rowpush" style="height:20px;"></div>
							</div><!-- //End span12 -->
						</form>
						</div><!-- //End row-fluid -->
						<!-- //End Form -->
					</div><!-- //End span6 -->
				</div><!-- //End row-fluid -->
            </div><!-- //End Content Holder -->
        </div><!-- //End Content Wrapper -->
    </div><!-- //End Container -->
	
	<div class="rowpush" style="height:60px;"></div>
	
	<div class="container">
        <div class="content_wrapper">
            <div class="content_holder"><!-- Begin content -->
				<div class="row-fluid">
					<div class="span5" style="text-align:center;"></div><!-- //End span9 -->
					<div class="span7 list">
						<h1><span>*</span> Be your own <span>BOSS</span></h1>
						<h1><span>*</span> Control your <span>FINANCES</span></h1>
						<h1><span>*</span> Earn extra <span>CASH</span></h1>
						<h1><span>*</span> Pay off your <span>DEBT</span></h1>
						<h1><span>*</span> Work from <span>HOME</span></h1>
					</div><!-- //End span9 -->
				</div><!-- //End row-fluid -->
            </div><!-- //End Content Holder -->
        </div><!-- //End Content Wrapper -->
    </div><!-- //End Container -->
	
    <div id="push"></div>
</div><!--//End Wrap-->



<div id="footer">
  <div class="container">
  </div><!--//End Container-->
</div><!--//End Footer-->


<script src="<?php echo base_url();?>assets/capture_page_assets/capture-page-4/js/jquery-1.9.1.min.js"></script>
<script src="<?php echo base_url();?>assets/capture_page_assets/capture-page-4/library/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>assets/capture_page_assets/capture-page-4/js/script.js"></script>
</body>
</html>