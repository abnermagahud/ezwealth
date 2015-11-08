<html>
<head>
<title>Capture Page</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

<link href="<?php echo base_url();?>assets/capture_page_assets/capture-page-19/style.css" rel="stylesheet">

</head>
<body bgcolor="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<input type="hidden" value="<?php echo base_url();?>" id="baseurl" name="baseurl">
<!-- Save for Web Slices (og grid.psd) -->
<form method="post">
<table style="margin:0 auto;" id="Table_01" width="1263" height="1011" border="0" cellpadding="0" cellspacing="0">
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
			<img src="<?php echo base_url();?>assets/capture_page_assets/capture-page-19/images/ogtop.png" width="1263" height="463" alt=""></td>
	</tr>
	<tr>
		<td rowspan="3">
			<img src="<?php echo base_url();?>assets/capture_page_assets/capture-page-19/images/index_02.png" width="403" height="548" alt=""></td>
		<td>
			<img src="<?php echo base_url();?>assets/capture_page_assets/capture-page-19/images/index_03.png" width="460" height="281" alt=""></td>
		<td rowspan="3">
			<img src="<?php echo base_url();?>assets/capture_page_assets/capture-page-19/images/index_04.png" width="400" height="548" alt=""></td>
	</tr>
	<tr>
		<td class="form" style="background:#1e0000; text-align:center; vertical-align:top; padding:20px 40px 20px 40px;" width="460" height="153">
			
			<input type="hidden" value="<?php echo $id;?>" name="member_id" id="member_id">
			<input type="text" name="email" id="email" placeholder="ENTER EMAIL">
			<div class="rowpush"></div>
			<input type="text" name="contact_num" id="contact_num" placeholder="CONTACT NUMBER">
			<div class="rowpush"></div>
			<input type="button" onclick="sendEmail()" id="btn_submit1" value="SUBMIT">
			
		</td>
	</tr>
	<tr>
		<td>
			<img src="<?php echo base_url();?>assets/capture_page_assets/capture-page-19/images/index_06.png" width="460" height="114" alt=""></td>
	</tr>
</table>
</form>
<!-- End Save for Web Slices -->
<script src="<?php echo base_url();?>assets/capture_page_assets/capture-page-19/js/jquery-1.9.1.min.js"></script>
<script src="<?php echo base_url();?>assets/capture_page_assets/capture-page-17/js/script.js"></script>
</body>
</html>