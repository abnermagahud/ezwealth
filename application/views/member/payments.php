<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Welcome to EZ Wealth System | Member's Dashboard</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url();?>assets/member/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?php echo base_url();?>assets/member/css/plugins/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="<?php echo base_url();?>assets/member/css/plugins/timeline.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url();?>assets/member/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="<?php echo base_url();?>assets/member/css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url();?>assets/member/font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url();?>assets/css/bootstrap-datetimepicker.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
<input type="hidden" value="<?php echo base_url();?>" name="baseurl" id="baseurl">
    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo base_url();?>member"><img src="<?php echo base_url();?>assets/images/ezlogo.png" style="width: 294px;"></a>
            </div>
            <!-- /.navbar-header -->
            <div class="col-md-1"></div>
          <div class="col-md-4">
          <!--WEB BANNER-->
          </div>
           <div class="col-md-4">
         
   <?php
  //$this->load->helper('date');
  $this->load->model('member_model');
  if(!empty($member)){
	  foreach($member as $details){
		  $member_id	 = $details->member_id;
		  $username 	= $details->username;
		  $lastname 	= $details->lastname;
		  $firstname 	= $details->firstname;
		  
		  $fullname 	= $lastname.', '.$firstname;
		  
		  $registration_date = $details->registration_date;
		  $activation_date 	 = $details->activation_date;
		  $expiration_date   = $details->expiration_date;
		  $account_status    = $details->account_status;

      $subscription = $details->subscription;
      $limit = $details->capture_page_limit;
		  $ecredit_balance = $details->ecredit_balance;

		  }
	  }
	  

if($expiration_date=="0000-00-00"){
	echo '';
	}else{
if($activation_date>=$expiration_date){
	$this->member_model->updateStatus($member_id);
	}
}
	
  ?>      
 <table width="100%" border="0">
  <tr>
    <td width="51%"><i class="fa fa-user fa-fw"></i>Name</td>
    <td width="49%">: <?php echo $fullname;?></td>
  </tr>
  <tr>
    <td><i class="fa fa-calendar fa-fw"></i>Registration Date</td>
    <td>: <?php echo $registration_date;?></td>
  </tr>
  <tr>
    <td><i class="fa fa-calendar fa-fw"></i>Activation Date</td>
    <td>: <?php echo $activation_date;?></td>
  </tr>
  <tr>
    <td><i class="fa fa-calendar fa-fw"></i>Expiration Date</td>
    <td>: <?php echo $expiration_date;?></td>
  </tr>
  <tr>
    <td><i class="fa fa-bar-chart-o fa-fw"></i>Account Status</td>
    <td>: <?php if($account_status==0){echo 'Inactive';}else if($account_status==1){echo 'Active';}else{ echo 'Expired';}?></td>
  </tr>
  <tr>
    <td><i class="fa fa-power-off fa-fw"></i><a href="<?php echo base_url();?>member/logout/">Logout</a></td>
    <td>&nbsp;</td>
  </tr>
</table>
        
           
          </div>
           
<div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                       
                        <li>
                            <a  href="<?php echo base_url();?>member/"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a  class="active" href="<?php echo base_url();?>member/payments/"><i class="fa fa-money fa-fw"></i> Payments</a>
                           
                        </li>
                        <li>
                            <a href="<?php echo base_url();?>member/message/"><i class="fa fa-comment fa-fw"></i> Messages</a>
                           
                        </li>
                        <li>
                            <a  href="<?php echo base_url();?>member/capture_page/"><i class="fa fa-edit fa-fw"></i>Edit Capture Page</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url();?>member/landing_page/"><i class="fa fa-edit fa-fw"></i> Edit Landing Page</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url();?>member/referrals/"><i class="fa fa-users fa-fw"></i> Referrals</a>
                            
                        </li>
                        <li>
                            <a href="<?php echo base_url();?>member/e_wallet/"><i class="fa fa-money fa-fw"></i> E-Wallet</a>
                            
                         
                        </li>
                        <li>
                            <a href="<?php echo base_url();?>member/leads/"><i class="fa fa-bar-chart-o fa-fw"></i> Leads</a>
                    </li>
                      <li>
                            <a href="<?php echo base_url();?>member/update_info/"><i class="fa fa-edit fa-fw"></i> Update Info</a>
                    </li>
                      <li>
                            <a href="<?php echo base_url();?>member/online_training/"><i class="fa fa-files-o fa-fw"></i> Online Training</a>
                    </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
        <br />
        <div id="show_message"></div>
        <?php
		
        if(!empty($payment_status)){
			foreach($payment_status as $stats){
				$status = $stats->status;
				$payment_for = $stats->payment_for;
				}
		
			}

		
		?>
    <?php
        	
		if(isset($status) && $status==0){	
		
  		echo '
  		 <div align="center">
  		 <h2>PAYMENT ON-PROCESS</h2>
  		 You will recieve and e-mail once payment is received <br />and your account has been activated.
  		 </div>
  		 ';
  		}else{
  	?>
        
            <div class="row" id="hide_panel">
                <div class="panel panel-default">
                        <div class="panel-heading">
                          <i class="fa fa-money fa-fw"></i> Payments
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                        <form method="post" class="form-inline" action="<?php echo base_url();?>member/pay/" role="form" id="form1" enctype="multipart/form-data">

                        <div class="col-md-4">
                          <p>
                          <strong>Payment for</strong><br />
                          
                          
							<?php
							
							
							 if(empty($payment_status)){
               	
                            ?>
                            <label style="font-size:12px;">
                              <input type="checkbox" name="CheckboxGroup1" value="basic" id="CheckboxGroup1_0">
                              BASIC PACK - P1000.00</label>
                              <br />
                              <label style="font-size:12px;">
                              <input type="checkbox" name="CheckboxGroup1" value="premium" id="CheckboxGroup1_0">
                              PREMIUM PACK - P2500.00</label>
                            <br />
                            <?php
							}
							?>
             	<?php
         			  if(!empty($payment_status)){
							  
							  if($status==1 || $status==2 ){
								  
						 ?>
                            <label style="font-size:12px;">
                              <input type="checkbox" name="CheckboxGroup1" value="6_months_extension" id="CheckboxGroup1_1">
                              6 Months Extension - Php 1,500</label>
                            <br>
                            <label style="font-size:12px;">
                              <input type="checkbox" name="CheckboxGroup1" value="1_year_extension" id="CheckboxGroup1_2">
                              1 Year Extension - Php 2,000</label>
                            <br />

                            <?php if($subscription=="basic"): ?>
                              <?php if($limit==30) :?>
                                
                              <?php else: ?>
                            <label style="font-size:12px;">
                              <input type="checkbox" name="CheckboxGroup1" value="bundle" id="CheckboxGroup1_2">
                              Bundle - Php 500 (Will add 5 capture pages)</label>
                              <br />
                                <?php endif; ?>
                            <?php endif;?>
                              
                           <?php
						   }
						  }
						   ?>

                  <label style="font-size:12px;">
                              <input type="checkbox" name="CheckboxGroup1" value="buy_ecredit" id="CheckboxGroup1_0">
                              BUY E-CREDIT</label>

                              <br />     
                          </p>
                          <strong>Send Payment to:</strong><br /><br />
                          BPI Acct. #: 0610-0081-51 Alvin Jhunne Cortez <br /><br />
                          Paypal: mlmbusinessideas@gmail.com <br /><br />
                          LBC or Cebuana Lhuiller <br /><br />
                         <strong> Alvin Jhunne Cortez</strong><br />
                          076 Calderon St. Brgy.Santolan,<br />
                          Palayan City<br />
                          
                     
                          
                        </div>
<div class="col-md-8" id="firstform" >
                      
  <div class="form-group">
    <label for="payment_mode">Payment Mode</label><br />
    <select name="payment_mode" id="payment_mode" class="form-control">
   <option value="0">-----------Select----------</option>
    <option value="bank">Bank</option>
	 <option value="remittance">Remittance</option>
    <option value="paypal">Paypal</option>
    <option value="over-the-counter">Over the counter</option>
    <?php if(!empty($ecredit_balance)):?>
     <option value="ecredit">E-Credit</option>
   <?php endif;?>
    </select>
  </div>
  <div class="form-group">
   <div id="pro"> 
    <label for="processor">Payment Processor</label><br />
    <div id="wait1"></div>
   
    <select name="processor" id="processor" class="form-control">
    <option value="0">-----------Select----------</option>

    </select>
   </div>
  </div>
  <br />


  <div class="form-group" id="reference">
  
    <label for="reference_no">Reference #</label><br />
    <input type="text" class="form-control" id="reference_no" name="reference_no" >
  </div>

  <div class="form-group" id="date_field" style="display:none;">
  
    <label for="date">Date</label><br />

    <div id="datepicker" class="input-append">
        <input data-format="yyyy-MM-dd"  class="form-control" id="datepicker" name="date" ></input>
        <span class="add-on glyphicon glyphicon-calendar"></span>
    </div>

  </div>

  <div class="form-group" id="sender">
    <label  for="senders_name">Sender's Name</label><br />
   
    <input type="text" class="form-control" id="senders_name" name="senders_name" >
    
  </div>
   <br />

   <div class="form-group" id="sender-notes-hide">
    <label  for="sender_notes">Sender Notes</label><br />
    
    <textarea name="sender_notes" id="sender_notes" rows="4" cols="51" class="form-control"></textarea>
	
  </div>
  <br />

    <div class="form-group" id="upload">
    <label  for="proof_of_payment">Upload Transaction Photo </label>  <em>(e.g receipt)</em><br />
    
    <input type="file" name="proof_of_payment" id="proof_of_payment" />
  
    <em style="color:red;">Allowed extensions: gif, jpg and png (1GB)</em>
  </div>
 	 <br />
    <div class="form-group">
<!--<button type="button" onClick="member_payment()" id="btn_payment" class="btn btn-primary">Submit</button>-->
  <button type="submit" id="SubmitButton" class="btn btn-primary">Submit</button>

  </div>
</div>
</form>


<div class="col-md-8" id="secondform" style="display:none;">
  <form method="post" id="form2" class="form-inline" enctype="multipart/form-data" action="<?php echo base_url();?>member/buyecredit/">
                    
  <div class="form-group">
    <label for="payment_mode">Payment Mode</label><br />
    <select name="payment_mode2" id="payment_mode1" class="form-control">
   <option value="0">-----------Select----------</option>
    <option value="bank">Bank</option>
  <option value="remittance">Remittance</option>
    <option value="paypal">Paypal</option>
    <option value="over-the-counter">Over the counter</option>
    </select>
  </div>
  <div class="form-group">
   <div id="pro2"> 
    <label for="processor">Payment Processor</label><br />
    <div id="wait2"></div>
   
    <select name="processor" id="processor" class="form-control">
    <option value="0">-----------Select----------</option>

    </select>
   </div>
  </div>
  <br />


  <div class="form-group" id="reference2">
  
    <label for="reference_no">Reference #</label><br />
    <input type="text" class="form-control" id="reference_no2" name="reference_no2" >
  </div>

  <div class="form-group" id="date_field2" style="display:none;">
  
    <label for="date">Date</label><br />

    <div id="datepicker2" class="input-append">
        <input data-format="yyyy-MM-dd"  class="form-control" id="datepicker2" name="date2" ></input>
        <span class="add-on glyphicon glyphicon-calendar"></span>
    </div>

  </div>

  <div class="form-group" id="sender">
    <label  for="senders_name">Sender's Name</label><br />
   
    <input type="text" class="form-control" id="senders_name2" name="senders_name2" >
    
  </div>
   <br />
  <div class="form-group" id="amount">
    <label  for="amount">Amount</label><br />
   
    <input type="text" style="width:202%;" class="form-control" id="desiredamount" name="desiredamount" >
    
  </div>
   <br />
   <div class="form-group">
    <label  for="sender_notes">Sender Notes</label><br />
    
    <textarea name="sender_notes2" id="sender_notes2" rows="4" cols="51" class="form-control"></textarea>
  
  </div>
  <br />

    <div class="form-group" id="upload2">
    <label  for="proof_of_payment">Upload Transaction Photo </label>  <em>(e.g receipt)</em><br />
    
    <input type="file" name="proof_of_payment2" id="proof_of_payment2" />
  
    <em style="color:red;">Allowed extensions: gif, jpg and png (1GB)</em>
  </div>
  <br />
    <br />
    <div class="form-group">
 <button type="submit" id="SubmitButton2" class="btn btn-primary">Submit</button>

  </div>
   
</form>
 </div>

                       </div>
                        <br />
<div id="output"></div>
<div id="message"></div>
                        <!-- /.panel-body -->
              </div>
                    <!-- /.panel -->
            </div>
            <!-- /.row --><!-- /.row --><!-- /.row -->
            <?php
			
		
				}
			?>
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
<div class="col-md-5">
<br />
<img src="<?php echo base_url();?>assets/images/questions.png">
</div>

<div class="col-md-7">
<h2>Announcement</h2>
<div id="content">
<?php
if(!empty($announcements)){
	foreach($announcements as $announcement){
		echo '<strong>'.$announcement->title.'</strong><br />';
		$contents = $announcement->contents;
		
echo nl2br($contents);
		
		}
	}
?>


</div>
</div>



<div class="modal fade" data-keyboard="false" data-backdrop="static" id="showmodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div style="min-height: 16.43px;padding: 15px;">
      <a class="close" onclick="closemodal()" data-dismiss="modal" style="text-decoration:none;">x</a>
      </div>
      <div class="modal-body">
     
        <h4 class="alert alert-success" align="center">Your request is now processing. <br />You'll receive an email once your request has been approved.</h4>
      </div>
  
    </div>
  </div>
</div>

    <!-- jQuery Version 1.11.0 -->
    <script src="<?php echo base_url();?>assets/member/js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url();?>assets/member/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo base_url();?>assets/member/js/plugins/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url();?>assets/member/js/sb-admin-2.js"></script>
    <script src="<?php echo base_url();?>assets/js/jquery.form.js"></script>
<script src="<?php echo base_url();?>assets/js/script.js"></script>
<script src="<?php echo base_url();?>assets/js/bootstrap-datetimepicker.min.js"></script>
<script>

$('#datepicker').click(function(){
$('#datepicker').datetimepicker('show');
})

$('#datepicker').datetimepicker({
      pickTime: false,
      format:'yyyy-MM-dd'
    }).on('changeDate', function (e) {

        $(this).datetimepicker('hide');

    });


$('#datepicker2').click(function(){
$('#datepicker2').datetimepicker('show');
})

$('#datepicker2').datetimepicker({
      pickTime: false,
      format:'yyyy-MM-dd'
    }).on('changeDate', function (e) {

        $(this).datetimepicker('hide');

    });
        $(document).ready(function() {

        var baseurl         = $('#baseurl').val();
        var submitbutton    = $("#SubmitButton");
        var myform          = $("#form1");
        var output          = $("#output");
        var message         = $("#message");
       
                $(myform).ajaxForm({
                    beforeSend: function() { //brfore sending form
                        output.html('');
                        submitbutton.attr('disabled', 'disabled'); // disable upload button
                        message.html('Please wait...').show();
                    },
                     success: function(response){
						 
                          if(response==1){
                         // message.html('Please wait...').hide();
                        
                         setTimeout(window.location.href=""+baseurl+"member/payments/",0000);
						  
						  }else if(response==2){
							 output.html('<div class="alert alert-success">Success.</div>'); 
							  setTimeout(window.location.href=""+baseurl+"member/payments/",0000);
                          }else{
                         message.html('Please wait...').hide();
                        output.html(response); //update element with received data
                        submitbutton.removeAttr('disabled'); //enable submit button
                       

                              }
                          }
             
            });
        });

$(document).ready(function() {

        var baseurl         = $('#baseurl').val();
        var submitbutton2    = $("#SubmitButton2");
        var myform2         = $("#form2");
        var output2          = $("#output");
        var message2         = $("#message");
       
                $(myform2 ).ajaxForm({
                    beforeSend: function() { //brfore sending form
                        output2.html('');
                        output2.attr('disabled', 'disabled'); // disable upload button
                        message2.html('Please wait...').show();
                    },
                     success: function(response){
						 //alert(response);
                          if(response==1){
                         // message.html('Please wait...').hide();
                          message2.html('Please wait...').hide();
                          $('#showmodal').modal('show');
                          //setTimeout(window.location.href=""+baseurl+"member/payments/",0000);
                          }else{
                         message2.html('Please wait...').hide();
                        output2.html(response); //update element with received data
                        submitbutton2.removeAttr('disabled'); //enable submit button
                       

                              }
                          }
             
            });
        });

function closemodal(){
   var baseurl         = $('#baseurl').val();
   setTimeout(window.location.href=""+baseurl+"member/payments/",0000);
}
</script>
</body>

</html>
