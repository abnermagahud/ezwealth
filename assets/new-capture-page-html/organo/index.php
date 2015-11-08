<html>
<head>
<title>Capture Page</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<body bgcolor="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<!-- Save for Web Slices (organo grid.psd) -->
 <div align="right"  style="margin-right: 36px;">

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
<table style="margin:0 auto;" id="Table_01" width="1263" height="1397" border="0" cellpadding="0" cellspacing="0">
	<tr>
		<td colspan="3">
			<img src="<?php echo base_url();?>assets/new-capture-page-assets/organo/images/index_01.jpg" width="1263" height="460" alt=""></td>
	</tr>
	<tr>
		<td rowspan="2">
			<img src="<?php echo base_url();?>assets/new-capture-page-assets/organo/images/index_02.jpg" width="291" height="937" alt=""></td>
		<td width="680" height="410">
			<div id="ytb_vid" align="center"></div>
			<img id="ytb" src="<?php echo base_url();?>assets/new-capture-page-assets/organo/images/video.jpg" alt=""></td>
		<td rowspan="2">
			<img src="<?php echo base_url();?>assets/new-capture-page-assets/organo/images/index_04.jpg" width="292" height="937" alt=""></td>
	</tr>
	<tr>
		<td>
		<div align="center" id="web-form" align="center" style="position: absolute;margin-top: 8px;margin-left: 95px;">
		<br />
						<div id="for-webform">
							<script type="text/javascript" src=""></script>
						</div>
				

						<div id="for-getresponse"  style="background-color:#ccc; width:450px;">
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
					</div>
			<img src="<?php echo base_url();?>assets/new-capture-page-assets/organo/images/index_05.jpg" width="680" height="527" alt=""></td>
	</tr>
</table>
<!-- End Save for Web Slices -->
<script src="<?php echo base_url();?>assets/new-capture-page-assets/gfox/js/jquery-1.9.1.min.js"></script>
<script src="<?php echo base_url();?>assets/new-capture-page-assets/aim/js/script.js"></script>
</body>
</html>