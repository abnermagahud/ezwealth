// JavaScript Document


function login_member(){
	//$("#loading-example-btn").click(function() {
   
    var $btn = $(this);
    $btn.button('loading');
	var username = $('#username').val();
	var password = $('#password').val();
	var baseurl  = $('#baseurl').val();
		
	$.ajax({
		type:'POST',
		url:''+baseurl+'login/',
		data:'username='+username+'&password='+password,
		beforeSend: function(){
		$('#wait').html('Please wait...').show();
			},
		success: function(response){
			//alert(response);
			
			if(response=="error_empty"){
				$('#wait').html('Please wait...').hide();
	$('#message').html('<div style="color:red; font-size:9px;">Please type your username and password</div>').fadeIn('fast').fadeOut(5000);
			}else if(response=="incorrect"){
			$('#wait').html('Please wait...').hide();
			$('#message').html('<div style="color:red; font-size:9px;">Incorrect username and/or password.</div>').fadeIn('fast').fadeOut(5000);
				}else{
			$('#wait').html('Please wait...').hide();
		     window.location.href=""+baseurl+"member/";
					
					}
			
		
			}
		
		 })
	}
//});

$(function(){
	$("#username").keypress(function(event) {
    if (event.which == 13) {
        login_member();
    }       
	});
	
	$("#password").keypress(function(event) {
    if (event.which == 13) {
        login_member();
    }       
	});
})


function getInstantAccess(){
	$('#btn_instant1').attr('disabled','disabled')
	var email = $('#email').val();
	var contact = $('#contact').val();
	var baseurl  = $('#baseurl').val();
	
	$.ajax({
		type:'POST',
		url:''+baseurl+'instant_access/',
		data:'contact='+contact+'&email='+email,
		beforeSend: function(){
		$('#messages').html('');
		$('#waitmessage').html('Please wait...').show();
			},
		success: function(response){
			if(response==1){
				$('#waitmessage').html('<div class="alert alert-success">The Information has been sent to your email address ('+email+') </div>').show();
				window.location.href=""+baseurl+"join-now/";
				}else{
			$('#waitmessage').html('Please wait...').hide();
			$('#messages').html(response).fadeIn('fast').fadeOut(5000);
			$('#btn_instant1').removeAttr('disabled');
		
				}
			}
		
		 })
	
	}
	
	
	function InstantAccess(){
	$('#btn_instant2').attr('disabled','disabled')
	var member_id = $('#member_id').val();
	var email = $('#email').val();
	var contact = $('#contact').val();
	var baseurl  = $('#baseurl').val();
	var username  = $('#mem_username').val();
	$.ajax({
		type:'POST',
		url:''+baseurl+'member/landing_instantaccess/',
		data:'contact='+contact+'&email='+email+'&member_id='+member_id,
		beforeSend: function(){
		$('#messages1').html('');
		$('#waitmessage1').html('Please wait...').show();
			},
		success: function(response){
			if(response==1){
				$('#waitmessage1').html('<div class="alert alert-success">The Information has been sent to your email address ('+email+') </div>').show();
				window.location.href=""+baseurl+"member/"+username+"/join-now/";
				}else{
			$('#waitmessage1').html('Please wait...').hide();
			$('#messages1').html(response).fadeIn('fast').fadeOut(5000);
			$('#btn_instant2').removeAttr('disabled');
		
				}
			}
		
		 })
	
	}
	
	$(document).ready(function() {
		$(".flip").click(function() {
			//$(this).slideUp('fast');
			$(".panel").slideToggle("slow");
			
		});
	});
	
	function create_account(){
		
	$('#btn_createaccount').attr('disabled','disabled');
	var fname = $('#fname').val();
	var lname = $('#lname').val();
	var mobile_num = $('#mobile_num').val();
	var email_add = $('#email_add').val();
	var uname = $('#uname').val();
	var create_password = $('#create_password').val();
	var retype_password = $('#retype_password').val();
	var referred_by = $('#referred_by').val();
	//var referred = $('#referred').val();
	var baseurl  = $('#baseurl').val();
	//var referrer_id  = $('#referrer_id').val();
	
	$.ajax({
		type:'POST',
		url:''+baseurl+'create_account/',
		data:'fname='+fname+'&lname='+lname+'&mobile_num='+mobile_num+'&email_add='+email_add+'&uname='+uname+'&create_password='+create_password+'&retype_password='+retype_password+'&referred_by='+referred_by,
		beforeSend: function(){
		$('#messages_response').html('');
		$('#wait_message').html('Please wait...').show();
			},
		success: function(responses){
			
			if(responses==1){
			$('#wait_message').html('Please wait...').hide();
			$('#messages_response').html('<div class="alert alert-success">Successfully registered. Login <a href="'+baseurl+'">here</a></div>');
			//alert("Congratulations you are Successfully registered!\n\nYour Log-In Info\n\nUsername: "+uname+"\nPassword: "+create_password+"\nReferrer: "+referred_by+"");
			$('#myModalJoin').modal('show');
			$('#span_username1').html(uname);
			$('#span_password1').html(create_password);
			$('#span_referrer1').html(referred_by)
				}else{
			//alert(responses);
			$('#wait_message').html('Please wait...').hide();
			$('#messages_response').html(responses);
			$('#btn_createaccount').removeAttr('disabled');
				}
			}
		
		 })
		}
	
		function setaccount(){
		$('#btn_continue').attr('disabled','disabled');
	var fname = $('#fname').val();
	var lname = $('#lname').val();
	var mobile_num = $('#mobile_num').val();
	var email_add = $('#email_add').val();
	var uname = $('#uname').val();
	var create_password = $('#create_password').val();
	var retype_password = $('#retype_password').val();
	//var referred_by = $('#referred_by').val();
	var referred = $('#referred').val();
	var baseurl  = $('#baseurl').val();
	var referrer_id  = $('#referrer_id').val();
	$.ajax({
		type:'POST',
		url:''+baseurl+'member/createaccount/',
		data:'fname='+fname+'&lname='+lname+'&mobile_num='+mobile_num+'&email_add='+email_add+'&uname='+uname+'&create_password='+create_password+'&retype_password='+retype_password+'&referred='+referred+'&referrer_id='+referrer_id,
		beforeSend: function(){
		$('#messages_response').html('');
		$('#wait_message').html('Please wait...').show();
			},
		success: function(responses){
			
			if(responses==1){
				$('#wait_message').html('Please wait...').hide();
				$('#messages_response').html('<div class="alert alert-success">Successfully registered. Login <a href="'+baseurl+'">here</a></div>');
				$('#myModal').modal('show');
				$('#span_username').html(uname);
				$('#span_password').html(create_password);
				$('#span_referrer').html(referred);
				//alert("Congratulations you are Successfully registered!\n\nYour Log-In Info\n\nUsername: "+uname+"\nPassword: "+create_password+"\nReferrer: "+referred+"");
				}else{
			//alert(responses);
			$('#wait_message').html('Please wait...').hide();
			$('#messages_response').html(responses);
				$('#btn_continue').removeAttr('disabled');
				}
			}
		
		 })
		}
	
	function changepassword(str){
		var member_id  = str;
		
		var old_password = $('#old_password').val();
		var new_password = $('#new_password').val();
		var retype_password = $('#retype_password').val();
		var baseurl  = $('#baseurl').val()
		
		$.ajax({
		type:'POST',
		url:''+baseurl+'member/change_password/',
		data:'old_password='+old_password+'&new_password='+new_password+'&retype_password='+retype_password+'&member_id='+member_id,
		beforeSend: function(){
			$('#message_area').html('');
			$('#wait_area').html('Please wait...').show();
			},
		success: function(response){
			$('#wait_area').html('Please wait...').hide();
			$('#message_area').html(response).fadeIn('fast').fadeOut(5000);
			}
		
		 })
		}
		
		
		

$(".del").click(function(){
var baseurl = $('#baseurl').val();
var element = $(this);

var bank_account_id = element.attr("id");


var info = 'bank_account_id=' + bank_account_id;
 if(confirm("Are you sure you want to delete this?"))
 {

 $.ajax({
   type: "GET",
   url:''+baseurl+'member/delete_account/',
   data: info,
   success: function(){
  
   }
 	});
  $(this).parents(".record").animate({ backgroundColor: "#fbc7c7" }, "fast").animate({ opacity: "hide" }, "slow");
 $('#btn-add-bank').show();
 }

return false;

});



$(".delannouncement").click(function(){
var baseurl = $('#baseurl').val();
var element = $(this);

var announcement_id = element.attr("id");


var info = 'announcement_id=' + announcement_id;
 if(confirm("Are you sure you want to delete this?"))
 {

 $.ajax({
   type: "GET",
   url:''+baseurl+'admin/delete_announcement/',
   data: info,
   success: function(){
   
   }
 	});
  $(this).parents(".record").animate({ backgroundColor: "#fbc7c7" }, "fast").animate({ opacity: "hide" }, "slow");

 }

return false;

});

 function setPaypal(str){
	 var baseurl = $('#baseurl').val();
	 var member_id = str;
	 var paypal_email = $('#paypal').val();
	$.ajax({
		type:'POST',
		url:''+baseurl+'member/paypal/',
		data:'paypal='+paypal_email+'&member_id='+member_id,
		beforeSend: function(){
			$('#message_paypal_area').html('');
			$('#wait_paypal_area').html('Please wait...').show();
			},
		success: function(response){
			//alert(response);
			$('#wait_paypal_area').html('Please wait...').hide();
			$('#message_paypal_area').html(response).fadeIn('fast').fadeOut(5000);
			}
		
		 })
	}

function addAccount(){
	$('#btn_add_bank').attr('disabled','disabled');
	 var baseurl 		= $('#baseurl').val();
	 var bank_name 		= $('#bank_name').val();
	 var account_name 	= $('#account_name').val();
	 var account_number = $('#account_number').val();
	 var member_id 		= $('#member_id').val();
	$.ajax({
		type:'POST',
		url:''+baseurl+'member/add_bank/',
		data:'bank_name='+bank_name+'&account_name='+account_name+'&account_number='+account_number+'&member_id='+member_id,
		beforeSend: function(){
			$('#message_add_bank').html('');
			$('#wait_bank_area').html('Please wait...').show();
			},
		success: function(response){
			if(response==1){
				$('#wait_bank_area').html('Please wait...').hide();
				$('#message_add_bank').html('<div class="alert alert-danger">All fields are required</div>').fadeIn('fast').fadeOut(5000);
					$('#btn_add_bank').removeAttr('disabled');
				}else{
			$('#wait_bank_area').html('Please wait...').hide();
			window.location.href=""+baseurl+"member/update_info/";
			//$('#message_add_bank').html(response).fadeIn('fast').fadeOut(5000);
			}
			}
		 })
	
	}
	
	
function addAnnouncement(){
	$('#btn_announcement').attr('disabled','disabled');
	 var baseurl 		= $('#baseurl').val();
	 var title 			= $('#title').val();
	 var announcement 	= $('#announcement').val();
	 
	$.ajax({
		type:'POST',
		url:''+baseurl+'admin/add_announcement/',
		data:'title='+title+'&announcement='+announcement,
		beforeSend: function(){
			$('#message_add_announcement').html('');
			$('#wait_announcement_area').html('Please wait...').show();
			},
		success: function(response){
			if(response==1){
				$('#wait_announcement_area').html('Please wait...').hide();
				$('#message_add_announcement').html('<div class="alert alert-danger">All fields are required</div>').fadeIn('fast').fadeOut(5000);
				$('#btn_announcement').removeAttr('disabled');
				}else{
			$('#wait_announcement_area').html('Please wait...').hide();
			window.location.href=""+baseurl+"admin/announcement/";
			
			}
			}
		 })
	
	}
	
	
	
function addUser(){
	$('#btn_add_admin').attr('disabled','disabled');
	
	 var baseurl 		= $('#baseurl').val();
	 var lname 			= $('#lname').val();
	 var fname 			= $('#fname').val();
	 var password 		= $('#password').val();
	 var uname          = $('#uname').val();
	 var admin_email    = $('#admin_email').val();
	$.ajax({
		type:'POST',
		url:''+baseurl+'admin/add_admin/',
		data:'lname='+lname+'&fname='+fname+'&password='+password+'&uname='+uname+'&admin_email='+admin_email,
		beforeSend: function(){
			$('#message_add_admin').html('');
			$('#wait_admin_area').html('Please wait...').show();
			},
		success: function(response){
			if(response==1){
				$('#wait_admin_area').html('Please wait...').hide();
				$('#message_add_admin').html('<div class="alert alert-danger">All fields are required</div>').fadeIn('fast').fadeOut(5000);
				$('#btn_add_admin').removeAttr('disabled');
				}else{
			$('#wait_admin_area').html('Please wait...').hide();
			window.location.href=""+baseurl+"admin/administrator/";
			
			}
			}
		 })
	
	}
	
	
	$(".deladmin").click(function(){
var baseurl = $('#baseurl').val();
var element = $(this);

var admin_id = element.attr("id");


var info = 'admin_id=' + admin_id;
 if(confirm("Are you sure you want to delete this?"))
 {

 $.ajax({
   type: "GET",
   url:''+baseurl+'admin/delete_admin/',
   data: info,
   success: function(){
   
   }
 	});
  $(this).parents(".record").animate({ backgroundColor: "#fbc7c7" }, "fast").animate({ opacity: "hide" }, "slow");

 }

return false;

});


//$("form#form1").one("submit", member_payment);

function member_payment(){
	
$('#btn_payment').attr('disabled','disabled');
	
	 var baseurl 				= $('#baseurl').val();
	 
	//var CheckboxGroup1 		= $("input[type='checkbox']").val()
	 var formData = new FormData(this);
	 var file = this.files[0];

 var CheckboxGroup1 = [];

	$("input[type='checkbox']").each(function() {
	
		if ($(this).is(":checked")) {
       CheckboxGroup1.push($(this).val());
    	}
	
	});
	
	 var payment_mode 			= $('#payment_mode').val();
	 var processor 				= $('#processor').val();
	 var reference_no 			= $('#reference_no').val();
	 var sender_notes 			= $('#sender_notes').val();
	 var senders_name			= $('#senders_name').val();
    
	$.ajax({
		type:'POST',
		url:''+baseurl+'member/pay/',
		data:formData,
		//data:'CheckboxGroup1='+CheckboxGroup1+'&payment_mode='+payment_mode+'&processor='+processor+'&reference_no='+reference_no+'&sender_notes='+sender_notes+'&senders_name='+senders_name,
		cache:false,
        contentType: false,
        processData: false,
		beforeSend: function(){
			$('#message_payment_area').html('');	
		$('#wait_payment_area').html('Please wait...').show();	
			},
		
		success: function(value){
			
			if(value==1){
				$('#wait_payment_area').html('Please wait...').hide();
				$('#message_payment_area').html('<div class="alert alert-danger">All fields are required</div>');
				$('#btn_payment').removeAttr('disabled');
				
			}else{
			$('#wait_payment_area').html('Please wait...').hide();
			$('#hide_panel').hide();	
				
			$('#show_message').html(value);
			
				}
			}
		 })
	
	}


	
$("input:checkbox").click(function() {

    if ($(this).is(":checked")) {
        var group = "input:checkbox[name='" + $(this).attr("name") + "']";
		
        $(group).prop("checked", false);
        $(this).prop("checked", true);
        var checkboxvalue = $(this).val();

        if(checkboxvalue=="buy_ecredit"){

        	$('#secondform').show();
        	$('#firstform').hide();
        	
        }else{
		$('#secondform').hide();
		$('#firstform').show();
        }
    } else {
        $(this).prop("checked", false);
       $('#secondform').hide();
        $('#firstform').show();
    }
});	
	

	$(".approval").click(function(){
var baseurl = $('#baseurl').val();
var element = $(this);

var payment_id = element.attr("id");
var member_id   = $('#member_id').val();

var info = 'payment_id=' + payment_id+'&member_id='+member_id;
 if(confirm("Continue Activation?")){

 $.ajax({
   type: "GET",
   url:''+baseurl+'admin/starter_activation/',
   data: {payment_id:payment_id,member_id:member_id},
   beforeSend: function(){
	 $('.approvalhide_'+payment_id+'').hide();
	  $('.disapprovehide_'+payment_id+'').hide();
	 
	 $('#span_wait1'+payment_id+'').html('Please wait...').show();
	   
	   },
   success: function(response){
	   $('#span_wait1'+payment_id+'').html('Please wait...').hide();
	   alert(response);
  setTimeout(window.location.href=""+baseurl+"admin/basic/",0000);
   }
 	});
 }

return false;

});

	$(".approval_premium").click(function(){
var baseurl = $('#baseurl').val();
var element = $(this);

var payment_id = element.attr("id");
var member_id   = $('#member_id').val();

var info = 'payment_id=' + payment_id+'&member_id='+member_id;
 if(confirm("Continue Activation?")){

 $.ajax({
   type: "GET",
   url:''+baseurl+'admin/premium_activation/',
   data: {payment_id:payment_id,member_id:member_id},
   beforeSend: function(){
	 $('.approvehide_'+payment_id+'').hide();
	  $('.disapprovehide_'+payment_id+'').hide();
	 
	 $('#span_wait1'+payment_id+'').html('Please wait...').show();
	   
	   },
   success: function(response){
	   $('#span_wait1'+payment_id+'').html('Please wait...').hide();
	   alert(response);
  setTimeout(window.location.href=""+baseurl+"admin/premium/",0000);
   }
 	});
 }

return false;

});


$(".approval-bundle").click(function(){
var baseurl = $('#baseurl').val();
var element = $(this);

var payment_id = element.attr("id");
var member_id   = $('#member_id').val();

var info = 'payment_id=' + payment_id+'&member_id='+member_id;
 if(confirm("Continue Activation?")){

 $.ajax({
   type: "GET",
   url:''+baseurl+'admin/bundle_activation/',
   data: {payment_id:payment_id,member_id:member_id},
   beforeSend: function(){
	 $('.approvehide_'+payment_id+'').hide();
	  $('.disapprovehide_'+payment_id+'').hide();
	 
	 $('#span_wait1'+payment_id+'').html('Please wait...').show();
	   
	   },
   success: function(response){
	   $('#span_wait1'+payment_id+'').html('Please wait...').hide();
	   alert(response);
  setTimeout(window.location.href=""+baseurl+"admin/bundle/",0000);
   }
 	});
 }

return false;

});


	$(".approval_months").click(function(){
var baseurl = $('#baseurl').val();
var element = $(this);

var payment_id = element.attr("id");
var member_id   = $('#member_id').val();


var info = 'payment_id=' + payment_id+'&member_id='+member_id;
 if(confirm("Extend Subscription?")){

 $.ajax({
   type: "GET",
   url:''+baseurl+'admin/months_activation/',
   data: {payment_id:payment_id,member_id:member_id},
   beforeSend: function(){
	 $('.approvalhide_'+payment_id+'').hide();
	  $('.disapprovehide_'+payment_id+'').hide();
	 
	 $('#span_wait'+payment_id+'').html('Please wait...').show();
	   
	   },
   success: function(response){
	    
	 $('#span_wait'+payment_id+'').html('Please wait...').hide();
	   alert(response);
   setTimeout(window.location.href=""+baseurl+"admin/six_months/",0000);
   }
 	});
 }

return false;

});

	$(".approval_year").click(function(){
var baseurl = $('#baseurl').val();
var element = $(this);

var payment_id = element.attr("id");

var member_id   = $('#member_id').val();

var info = 'payment_id=' + payment_id+'&member_id='+member_id;
 if(confirm("Extend Subscription?")){

 $.ajax({
   type: "GET",
   url:''+baseurl+'admin/year_activation/',
   data: {payment_id:payment_id,member_id:member_id},
   beforeSend: function(){
	 $('.approveyearhide_'+payment_id+'').hide();
	  $('.disapproveyearhide_'+payment_id+'').hide();
	 
	 $('#span_wait2'+payment_id+'').html('Please wait...').show();
	   
	   },
   success: function(response){
	    $('#span_wait2'+payment_id+'').html('Please wait...').hide();
	   alert(response);
   setTimeout(window.location.href=""+baseurl+"admin/one_year/",0000);
   }
 	});
 }

return false;

});


/*$(".transfer_bank").click(function(){
var baseurl = $('#baseurl').val();
var element = $(this);

var transfer_id = element.attr("id");


var info = 'transfer_id=' + transfer_id;
 if(confirm("Confirm transfer?"))
 {

 $.ajax({
   type: "GET",
   url:''+baseurl+'admin/transfer/',
   data: info,
   success: function(response){
   alert(response);
   }
 	});
  $(this).parents(".record").animate({ backgroundColor: "#fbc7c7" }, "fast").animate({ opacity: "hide" }, "slow");

 }

return false;

});*/

$(".transfer_bank").click(function(){
var baseurl = $('#baseurl').val();
var element = $(this);

var transfer_id = element.attr("id");


var info = 'transfer_id=' + transfer_id;
 if(confirm("Confirm transfer?"))
 {

 $.ajax({
   type: "GET",
   url:''+baseurl+'admin/transfer_bank/',
   data: {transfer_id:transfer_id},
   beforeSend: function(){
	 $('.transfer_bank').hide();
	 
	 
	 $('#span_wait3').html('Please wait...').show();
	   
	   },
   success: function(response){
	   	 $('#span_wait3').html('Please wait...').hide();
   alert(response);
   setTimeout(window.location.href=""+baseurl+"admin/bank_request/",0000);
   }
 	});
 // $(this).parents(".record").animate({ backgroundColor: "#fbc7c7" }, "fast").animate({ opacity: "hide" }, "slow");

 }

return false;

});

$(".transfer_paypal").click(function(){
var baseurl = $('#baseurl').val();
var element = $(this);

var transfer_id = element.attr("id");


var info = 'transfer_id=' + transfer_id;
 if(confirm("Confirm transfer?"))
 {

 $.ajax({
   type: "GET",
   url:''+baseurl+'admin/transfer_paypal/',
   data: info,
   success: function(response){
   alert(response);
   }
 	});
  $(this).parents(".record").animate({ backgroundColor: "#fbc7c7" }, "fast").animate({ opacity: "hide" }, "slow");

 }

return false;

});

$(".transfer_remittance").click(function(){
var baseurl = $('#baseurl').val();
var element = $(this);

var transfer_id = element.attr("id");


var info = 'transfer_id=' + transfer_id;
 if(confirm("Confirm transfer?"))
 {

 $.ajax({
   type: "GET",
   url:''+baseurl+'admin/transfer_remittance/',
   data: info,
   success: function(response){
   alert(response);
   }
 	});
  $(this).parents(".record").animate({ backgroundColor: "#fbc7c7" }, "fast").animate({ opacity: "hide" }, "slow");

 }

return false;

});

//$("form#formwithdraw").one("submit", withdraw);

function withdraw(){
	//event.preventDefault(); 
    //$("form#formwithdraw").submit();
	$('#transfer').attr('disabled','disabled');
	 var baseurl 		= $('#baseurl').val();
	 var transfer_mode 	= $('#transfer_mode').val();
	 var processor  	= $('#processor').val();
	 var amount  	    = $('#amount').val();

	 var available_amount  	= $('#available').val();
	 
		$.ajax({
		type:'POST',
		url:''+baseurl+'member/withdrawal/',
		data:'transfer_mode='+transfer_mode+'&processor='+processor+'&amount='+amount+'&available='+available_amount,
		beforeSend: function(){
			$('#message_withdraw_area').html('');	
			$('#wait_withdraw_area').html('Please wait...').show();	
			},
		
		success: function(value){
	
			if(value==1){
				$('#wait_withdraw_area').html('Please wait...').hide();
			
				$('#message_withdraw_area').html('<div class="alert alert-success">Your request is being processed.</div>');	
			 
				}else{
					$('#wait_withdraw_area').html('Please wait...').hide();
					$('#message_withdraw_area').html(value);
						$('#transfer').removeAttr('disabled');
					}
			}
		 })
	}
	
	$(".disapprove").click(function(){
var baseurl = $('#baseurl').val();
var element = $(this);

var payment_id = element.attr("id");
var member_id   = $('#member_id').val();

var info = 'payment_id=' + payment_id+'&member_id='+member_id;
 if(confirm("Are you sure you want to disapprove?")){

 $.ajax({
   type: "GET",
   url:''+baseurl+'admin/disapproved_subscription/',
   data: {payment_id:payment_id,member_id:member_id},
   beforeSend: function(){
	 $('.approvalhide_'+payment_id+'').hide();
	  $('.disapprovehide_'+payment_id+'').hide();
	 
	 $('#span_wait1'+payment_id+'').html('Please wait...').show();
	   
	   },
   success: function(response){
	    $('#span_wait1'+payment_id+'').html('Please wait...').hide();
	   alert(response);
  setTimeout(window.location.href=""+baseurl+"admin/basic/",0000);
   }
 	});
 }

return false;

});	





	$(".disapprove_premium").click(function(){
var baseurl = $('#baseurl').val();
var element = $(this);

var payment_id = element.attr("id");
var member_id   = $('#member_id').val();

var info = 'payment_id=' + payment_id+'&member_id='+member_id;
 if(confirm("Are you sure you want to disapprove?")){

 $.ajax({
   type: "GET",
   url:''+baseurl+'admin/disapproved_subscription/',
   data: {payment_id:payment_id,member_id:member_id},
   beforeSend: function(){
	 $('.approvehide_'+payment_id+'').hide();
	  $('.disapprovehide_'+payment_id+'').hide();
	 
	 $('#span_wait1'+payment_id+'').html('Please wait...').show();
	   
	   },
   success: function(response){
	    $('#span_wait1'+payment_id+'').html('Please wait...').hide();
	   alert(response);
  setTimeout(window.location.href=""+baseurl+"admin/premium/",0000);
   }
 	});
 }

return false;

});	


$(".disapprove_bundle").click(function(){
var baseurl = $('#baseurl').val();
var element = $(this);

var payment_id = element.attr("id");
var member_id   = $('#member_id').val();

var info = 'payment_id=' + payment_id+'&member_id='+member_id;
 if(confirm("Are you sure you want to disapprove?")){

 $.ajax({
   type: "GET",
   url:''+baseurl+'admin/disapproved_subscription/',
   data: {payment_id:payment_id,member_id:member_id},
   beforeSend: function(){
	 $('.approvehide_'+payment_id+'').hide();
	  $('.disapprovehide_'+payment_id+'').hide();
	 
	 $('#span_wait1'+payment_id+'').html('Please wait...').show();
	   
	   },
   success: function(response){
	    $('#span_wait1'+payment_id+'').html('Please wait...').hide();
	   alert(response);
  setTimeout(window.location.href=""+baseurl+"admin/bundle/",0000);
   }
 	});
 }

return false;

});	

	$(".disapprove_year").click(function(){
var baseurl = $('#baseurl').val();
var element = $(this);

var payment_id = element.attr("id");
var member_id   = $('#member_id').val();

var info = 'payment_id=' + payment_id+'&member_id='+member_id;
 if(confirm("Are you sure you want to disapprove?")){

 $.ajax({
   type: "GET",
   url:''+baseurl+'admin/disapproved_subscription/',
   data: {payment_id:payment_id,member_id:member_id},
   beforeSend: function(){
	 $('.approveyearhide_'+payment_id+'').hide();
	  $('.disapproveyearhide_'+payment_id+'').hide();
	 
	 $('#span_wait2'+payment_id+'').html('Please wait...').show();
	   
	   },
   success: function(response){
	    $('#span_wait2'+payment_id+'').html('Please wait...').hide();
	   alert(response);
  setTimeout(window.location.href=""+baseurl+"admin/one_year/",0000);
   }
 	});
 }

return false;

});	

	$(".disapprove_months").click(function(){
var baseurl = $('#baseurl').val();
var element = $(this);

var payment_id = element.attr("id");
var member_id   = $('#member_id').val();

var info = 'payment_id=' + payment_id+'&member_id='+member_id;
 if(confirm("Are you sure you want to disapprove?")){

 $.ajax({
   type: "GET",
   url:''+baseurl+'admin/disapproved_subscription/',
   data: {payment_id:payment_id,member_id:member_id},
      beforeSend: function(){
	  $('.approvalhide_'+payment_id+'').hide();
	  $('.disapprovehide_'+payment_id+'').hide();
	 
	 $('#span_wait'+payment_id+'').html('Please wait...').show();
	   },
   success: function(response){
	   $('#span_wait'+payment_id+'').html('Please wait...').hide();
	   alert(response);
  setTimeout(window.location.href=""+baseurl+"admin/six_months/",0000);
   }
 	});
 }

return false;

});	



$('#payment_mode').change(function(){ //if the select value gets changed
   var paymentmode = $(this).val();
   var baseurl = $('#baseurl').val();

	$.ajax({
   type: "GET",
   url:''+baseurl+'member/onchange/',
   data: 'payment_mode='+paymentmode,
   beforeSend: function(){
	   $('#pro').html("");
	   $('#wait1').html("Please wait..").show();
	   
	   },
   success: function(response){

if(paymentmode=="ecredit"){

  $('#wait1').html("Please wait..").hide();
	$('#pro').html(response);
	$('#reference').hide();
	$('#sender').hide();
	$('#upload').hide();
	$('#sender-notes-hide').hide();
	$('#date_field').hide();
}
else if(paymentmode=="over-the-counter")
{

$('#reference').hide();
$('#upload').hide();
$('#date_field').show();
}
else
{
	$('#reference').show();
	$('#sender').show();
	$('#upload').show();
   	$('#wait1').html("Please wait..").hide();
   	$('#sender-notes-hide').show();
   	$('#date_field').hide();

	$('#pro').html(response);
}
  	 }
 	})


	})

$('#payment_mode1').change(function(){ //if the select value gets changed
   var paymentmode = $(this).val();
   var baseurl = $('#baseurl').val();

	$.ajax({
   type: "GET",
   url:''+baseurl+'member/onchange/',
   data: 'payment_mode='+paymentmode,
   beforeSend: function(){
	   $('#pro2').html("");
	   $('#wait2').html("Please wait..").show();
	   
	   },
   success: function(response){

 if(paymentmode=="over-the-counter")
{

$('#reference2').hide();
$('#upload2').hide();
$('#date_field2').show();
}
else
{
	$('#reference2').show();
	$('#sender2').show();
	$('#upload2').show();
   	$('#date_field2').hide();


	$('#wait2').html("Please wait..").hide();
	$('#pro2').html(response);
}

  	

  	 }
 	})


	})
	
$('#transfer_mode').change(function(){ //if the select value gets changed
   var transfer_mode = $(this).val();
   var baseurl = $('#baseurl').val();
	var memberid = $('#memberid').val();


	$.ajax({
   type: "GET",
   url:''+baseurl+'member/onchange_transfer/',
   data: 'transfer_mode='+transfer_mode+'&memberid='+memberid,
   beforeSend: function(){
	  $('#wait_withdraw_area').html('Please wait...').show(); 
	   },
   success: function(response){

	if(response==1){
		$('#wait_withdraw_area').html('Please wait...').hide(); 
		alert('You dont have a Bank Account. Please add a Bank Account in Update Info->Transfer Information tab');
		
		}else{
			$('#wait_withdraw_area').html('Please wait...').hide();
		$('#options').html(response);  
		  
		}

  	 }
	 
	 
 	})



	})


function primary_page(id){
	
	var capture_page_id = id;
	 var baseurl = $('#baseurl').val();
	var make = confirm("Are you sure you want to activate?");
	
	if(make==true){
		$.ajax({
	type:'GET',
	url:''+baseurl+'member/primarypage/',
	data: 'capture_page_id='+capture_page_id,
	beforeSend: function(){
		$('#btn_primary'+capture_page_id+'').hide();
		$('#wt'+capture_page_id+'').html('<a class="btn btn-primary btn-sm">Please wait..</a>').show();
		},
	success: function(resp){
		
		if(resp=="limit"){
			alert('You can\'t activate a capture pages anymore. You can add capture pages by purchasing a bundle worth Php 500');
			$('#wt'+capture_page_id+'').html('<a class="btn btn-primary btn-sm">Please wait..</a>').hide();
			setTimeout(window.location.href=""+baseurl+"member/capture_page/",0000);
			}else{
		$('#wt'+capture_page_id+'').html('<a class="btn btn-primary btn-sm">Please wait..</a>').hide();
		  setTimeout(window.location.href=""+baseurl+"member/capture_page/",0000);
			}
		}
	
	})
		}else{
			exit();
			}

	
	}


	function save_get(){
	$('#btn-get').attr('disabled','disabled');
 var baseurl = $('#baseurl').val();
 var api_key = $('#api_key').val();
 $.ajax({
 	type: 'POST',
 	url: ''+baseurl+'member/config_get/',
 	data: 'api_key='+api_key,
 	beforeSend: function(){

$('#get_responses').html('');		
$('#get_wait').html('Please wait...').show();
 	},
 	success: function(res){
 		if(res==1){
 $('#get_wait').html('Please wait...').hide();
$('#btn-get').removeAttr('disabled');
$('#get_responses').html('<div class="alert alert-danger">Field is required.</div>').fadeIn('fast').fadeOut(5000);

 		}else{
$('#get_wait').html('Please wait...').hide();
 	$('#get_responses').html(res);	
  setTimeout(window.location.href=""+baseurl+"member/capture_page/",0000);
 		}

 	}


 })
	}
	
	
	function deactivate(str){
		var baseurl = $('#baseurl').val();
		var capture_page_id = str;
		var make = confirm("Are you sure you want to deactivate?");
	
	if(make==true){
		$.ajax({
			type:'GET',
			url:''+baseurl+'member/deactivate/',
			data: 'capture_page_id='+capture_page_id,
			beforeSend: function(){
			$('#btndeactivate'+capture_page_id+'').hide();
			$('#wtdeactivate'+capture_page_id+'').html('<a class="btn btn-success btn-sm">Please wait..</a>').show();
			},
			success: function(resp){
				//alert(resp);
				setTimeout(window.location.href=""+baseurl+"member/capture_page/",0000);
				}
			
			
			})
	}else{
		exit();
		}
		
		}


		function restore(str){
			var baseurl = $('#baseurl').val();
			var capture_page_id = str;
			var res = confirm("Are you sure?");
			//var primary_capture_id = $('#primary_capture_id').val();
			if(res==true){
				$.ajax({
					type:'GET',
					url:''+baseurl+'member/restore_default/',
					data:'page_id='+capture_page_id,
					success: function(resp){
						
						setTimeout(window.location.href=""+baseurl+"member/edit_page/"+capture_page_id+"/",0000);
					}


				})

			}else{

				exit();
			}
		}

		function converttoecredit(){
			$('#convertewallet').attr('disabled','disabled');
			var baseurl = $('#baseurl').val();
			var convertamount = $('#convertamount').val();
			var available_balance = $('#available_balance').val();
			
				$.ajax({
					type:'POST',
					url:''+baseurl+'member/covertmoney/',
					data:'convertamount='+convertamount+'&available_balance='+available_balance,
					beforeSend: function(){
						$('#message_ecredit').html('');
						$('#wait_ecredit').html('Please wait...').show();
					},
					success: function(responses){
						
						if(responses==1){
						$('#wait_ecredit').html('Please wait...').hide();
						$('#message_ecredit').html('<div class="alert alert-success">Successfully Converted.</div>');
						
						$('#convertewallet').removeAttr('disabled');
						$('#convertamount').val("");
						}else{
						$('#wait_ecredit').html('Please wait...').hide();
						$('#message_ecredit').html(responses);
						
						$('#convertewallet').removeAttr('disabled');

						}
						
							
					}


				})
		}


		function transferecredit(){
			$('#transfer-e-credit').attr('disabled','disabled');
			var baseurl = $('#baseurl').val();
			var username = $('#username').val();
			var amounttosend = $('#amounttosend').val();
			var ecredit_balance = $('#ecredit_balance').val();
				$.ajax({
					type:'POST',
					url:''+baseurl+'member/transfer_ecredit/',
					data:'username='+username+'&amounttosend='+amounttosend+'&ecredit_balance='+ecredit_balance,
					beforeSend: function(){
						$('#message_transfer_ecredit').html('');
						$('#wait_transfer_ecredit').html('Please wait...').show();
					},
					success: function(resp){
						$('#wait_transfer_ecredit').html('Please wait...').hide();
						$('#message_transfer_ecredit').html(resp);
						$('#transfer-e-credit').removeAttr('disabled');
						$('#username').val("");
						$('#amounttosend').val("");

					}


				})
		}


$(".approval_ecredit").click(function(){
var baseurl = $('#baseurl').val();
var element = $(this);

var datas = element.attr("id");
$('#modal-approval').modal('show');
var result=datas.split(',');
var amount = result[2];

$('#datas').val(datas);
$('#amount').val(amount);
});

function approve_ecredit(){
	var baseurl = $('#baseurl').val();
	var datas = $('#datas').val();
$('#btn-approve-credit1').attr('disabled','disabled');
var current_amount = $('#amount').val();
	$.ajax({
   type: "POST",
   url:''+baseurl+'admin/approved_ecredit/',
   data: 'datas='+datas+'&amount='+current_amount,
   beforeSend: function(){
	   $('#messages-approval').html('');
	   $('#wait-approval').html('Please wait...').show();
	   },
   success: function(response){
	   
		if(response==1){
			$('#wait-approval').html('Please wait...').hide();
			$('#messages-approval').html('<div class="alert alert-danger">Amount is required</div>');
			$('#btn-approve-credit1').removeAttr('disabled');
			}else{
	   $('#wait-approval').html('Please wait...').hide();
	   	$('#messages-approval').html(response);
  setTimeout(window.location.href=""+baseurl+"admin/ecredit/",0000);
	   
			}
	   
  // setTimeout(window.location.href=""+baseurl+"admin/ecredit/",0000);
   }
 	});
	
	}

$(".disapprove_ecredit").click(function(){
var baseurl = $('#baseurl').val();
var element = $(this);

var buyecredit_id = element.attr("id");

var member_id = $('#member_id').val();


var info = 'buyecredit_id='+buyecredit_id+'&member_id='+member_id;
 if(confirm("Are you sure you want to disapprove?")){

 $.ajax({
   type: "GET",
   url:''+baseurl+'admin/disapprove_ecredit/',
   data: {buyecredit_id:buyecredit_id,member_id:member_id},
   beforeSend: function(){
	 $('.approveecredithide_'+buyecredit_id+'').hide();
	  $('.disapproveecredithide_'+buyecredit_id+'').hide();
	 
	 $('#wait_ecredit'+buyecredit_id+'').html('Please wait...').show();
	   
	   },
   success: function(response){
   	
	    $('#wait_ecredit'+buyecredit_id+'').html('Please wait...').hide();
	
  setTimeout(window.location.href=""+baseurl+"admin/ecredit/",0000);
   }
 	});
 }

return false;

});


 if ($('#show_web_form').is(":checked")) 
 {

  $('#webform-field').show();
  $('#campaign-form').hide();
 }

$('#show_web_form').click(function(){
 if ($(this).is(":checked")) 
 {
  $('#webform-field').slideDown();
  $('#campaign-form').slideUp();
 }
 else
 {
    $('#webform-field').slideUp();
    $('#campaign-form').slideDown();
 }


})


$('.activate-free-basic').click(function(){
	var baseurl = $('#baseurl').val();
	var id = $(this).attr("id");
	var activate_basic = confirm("Are you sure you want to activate it in a basic subscription?");
	if(activate_basic==true)
	{
		$.ajax({
		type:'GET',
		url:''+baseurl+'admin/activate_free_basic',
		data:{member_id:id},
		beforeSend: function(){
			$('#div-activate-free'+id+'').hide()
			$('#wait-activate-free'+id+'').html('Please wait...').show();
		},
		success: function(response){
			$('#wait-activate-free'+id+'').html('Please wait...').hide();
			alert(response);
			 setTimeout(window.location.href=""+baseurl+"admin/inactive/",0000);
		}
	
		})
	}
	else
	{
		exit();
	}
	
})

$('.activate-free-premium').click(function(){
	var baseurl = $('#baseurl').val();
	var id = $(this).attr("id");
	var activate_premium = confirm("Are you sure you want to activate it in a premium subscription?");

	if(activate_premium==true)
	{
		$.ajax({
		type:'GET',
		url:''+baseurl+'admin/activate_free_premium',
		data:{member_id:id},
		beforeSend: function(){
			$('#div-activate-free'+id+'').hide()
			$('#wait-activate-free'+id+'').html('Please wait...').show();
		},
		success: function(response){
			$('#wait-activate-free'+id+'').html('Please wait...').hide();
			alert(response);
			setTimeout(window.location.href=""+baseurl+"admin/inactive/",0000);
		}
		})
	}
	else
	{
		exit();
	}
	
})

