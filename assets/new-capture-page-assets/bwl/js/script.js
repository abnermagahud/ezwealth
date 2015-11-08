$(function(){
	
var memberid = $('#member_id').val();
var baseurl = $('#baseurl').val();
var capture_page_id = $('#capture_page_id').val();
$.ajax({
	type:'get',
	url:''+baseurl+'member/getVideoUrl',
	data:'member_id='+memberid+'&capture_page_id='+capture_page_id,
	success: function(value){

		if(value == ""){
			$('#ytb').show();
			}else{
				$('#ytb').remove();
				
			$('#ytb_vid').html('<iframe width="621" height="374" src="http://www.youtube.com/embed/'+value+'" frameborder="0" allowfullscreen></iframe>');
				}                       
			
		}
	
	})

	})
