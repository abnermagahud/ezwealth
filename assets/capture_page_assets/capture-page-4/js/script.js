// JavaScript Document

function sendEmail(){
	var email = $('#email').val();
	var member_id = $('#member_id').val();
	var baseurl = $('#baseurl').val();
	var capture_page_id = $('#capture_page_id').val();
	$('#btn_submit1').attr('disabled','disabled');
	
	$.ajax({
		
		type:'post',
		url:''+baseurl+'member/sends/',
		data: 'email='+email+'&member_id='+member_id+'&capture_page_id='+capture_page_id,
		beforeSend: function(){
			$('#wait_1').html('Please wait...');
		
			},
		success: function(response){

			if(response==1){	
			alert('Email is required.');
			$('#btn_submit1').removeAttr('disabled');
			}else if(response==2){
				alert('Success. An email has been sent to your email address.');

			}else if(response==3){
				alert('The getResponse API key is not yet set.');
				$('#btn_submit1').removeAttr('disabled');
			}else if(response==4){
				alert('Invalid email address');
				$('#btn_submit1').removeAttr('disabled');
				}else{
					alert('Success. An email has been sent to your email address.');
				$('#btn_submit1').removeAttr('disabled');
				 window.location.href="http://"+response+"";					
				 }
			
			}
		})
	}
	
	
	
$(function(){
	

var memberid = $('#member_id').val();
var baseurl = $('#baseurl').val();
var capture_page_id = $('#capture_page_id').val();
$.ajax({
	type:'get',
	url:''+baseurl+'member/getVideoUrl',
	data:'member_id='+memberid+'&capture_page_id='+capture_page_id,
	success: function(value){
	//alert('http://www.youtube.com/embed/'+value+'');
		if(value==""){
			$('#ytb2').show();
			}else{
				$('#ytb2').remove();
			$('#ytb_vid2').html('<iframe width="460" height="336" src="http://www.youtube.com/embed/'+value+'" frameborder="0" allowfullscreen></iframe>');
				}
			
			
                                  
			
		}
	
	})

	
	})
