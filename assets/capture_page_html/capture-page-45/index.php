<html>
<head>
<title>Capture Page</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

<link href="<?php echo base_url();?>assets/capture_page_assets/capture-page-45/style.css" rel="stylesheet">

</head>
<body bgcolor="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<input type="hidden" value="<?php echo base_url();?>" id="baseurl" name="baseurl">
<div align="right">
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
<!-- Save for Web Slices (uno grid.psd) -->
<table style="margin:0 auto;" id="Table_01" width="935" height="762" border="0" cellpadding="0" cellspacing="0">
	<tr>
		<td colspan="3">
			<img src="<?php echo base_url();?>assets/capture_page_assets/capture-page-45/images/index_01.jpg" width="935" height="357" alt=""></td>
	</tr>
	<tr>
		<td class="form" style="background:#8f0302; text-align:center; vertical-align:top; padding:20px 40px 20px 40px;" width="377" height="358">
			<form method="post">
			<p class="form-heading">LEAVE YOUR DETAILS FOR MORE INFO</p>
			<div class="rowpush"></div>
			<input type="hidden" value="<?php echo $id;?>" name="member_id" id="member_id">
			<input type="text" placeholder="ENTER EMAIL" name="email" id="email">
			<div class="rowpush"></div>
			<input type="text" placeholder="CONTACT NUMBER" name="contact_num" id="contact_num">
			<div class="rowpush"></div>
			<input type="button" id="btn_submit1" value="SUBMIT" onClick="sendEmail()">
			</form>
		</td>
		<td rowspan="2">
			<img src="<?php echo base_url();?>assets/capture_page_assets/capture-page-45/images/index_03.jpg" width="23" height="405" alt=""></td>
		<td>
			<div id="ytb_vid1"></div><img id="ytb1" src="<?php echo base_url();?>assets/capture_page_assets/capture-page-45/images/video.jpg" width="535" height="358" alt=""></td>
	</tr>
	<tr>
		<td>
			<img src="<?php echo base_url();?>assets/capture_page_assets/capture-page-45/images/index_05.jpg" width="377" height="47" alt=""></td>
		<td>
			<img src="<?php echo base_url();?>assets/capture_page_assets/capture-page-45/images/index_06.jpg" width="535" height="47" alt=""></td>
	</tr>
</table>
<script src="<?php echo base_url();?>assets/capture_page_assets/capture-page-45/js/jquery-1.9.1.min.js"></script>
<script src="<?php echo base_url();?>assets/capture_page_assets/capture-page-45/js/script.js"></script>
<!-- End Save for Web Slices -->
</body>
</html>