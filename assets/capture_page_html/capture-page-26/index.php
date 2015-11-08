<html>
<head>
<title>stpeter1 grid</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

<link href="<?php echo base_url();?>assets/capture_page_assets/capture-page-26/style.css" rel="stylesheet">

</head>
<body bgcolor="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<input type="hidden" value="<?php echo base_url();?>" id="baseurl" name="baseurl">
<!-- Save for Web Slices (stpeter1 grid.psd) -->
<form method="post">
<table style="margin:0 auto;" id="Table_01" width="1263" height="895" border="0" cellpadding="0" cellspacing="0">
	<tr>
		<td colspan="3">
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
			<img src="<?php echo base_url();?>assets/capture_page_assets/capture-page-26/images/index_01.png" width="1263" height="413" alt=""></td>
	</tr>
	<tr>
		<td rowspan="2">
			<img src="<?php echo base_url();?>assets/capture_page_assets/capture-page-26/images/index_02.png" width="217" height="482" alt=""></td>
		
		<td class="form" style="background:#199a00; text-align:center; vertical-align:top; padding:20px 40px 20px 40px;" width="351" height="342">
			
			<p class="form-heading">LEAVE YOUR DETAILS FOR MORE INFO</p>
			<div class="rowpush"></div>
			<input type="hidden" value="<?php echo $id;?>" name="member_id" id="member_id">
			<input type="text" name="email" id="email" placeholder="ENTER EMAIL">
			<div class="rowpush"></div>
			<input type="text" name="contact_num" id="contact_num" placeholder="CONTACT NUMBER">
			<div class="rowpush"></div>
			<input type="button" onclick="sendEmail()" name="contact_num"value="SUBMIT">
			
		</td>
		
		<td rowspan="2">
			<img src="<?php echo base_url();?>assets/capture_page_assets/capture-page-26/images/index_04.png" width="695" height="482" alt=""></td>
	</tr>
	<tr>
		<td>
			<img src="<?php echo base_url();?>assets/capture_page_assets/capture-page-26/images/index_05.png" width="351" height="140" alt=""></td>
	</tr>
</table>
</form>
<!-- End Save for Web Slices -->
<script src="<?php echo base_url();?>assets/capture_page_assets/capture-page-25/js/jquery-1.9.1.min.js"></script>
<script src="<?php echo base_url();?>assets/capture_page_assets/capture-page-25/js/script.js"></script>
</body>
</html>