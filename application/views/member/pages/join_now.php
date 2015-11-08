<html>

<head><title>EZwealthpages Online Opportunity</title>

<!--<script src="<?php //echo base_url();?>assets/ewealth/src/191.js"></script>
<script src="<?php //echo base_url();?>assets/ewealth/src/ui.js"></script>-->
<link rel="stylesheet" href="<?php echo base_url();?>assets/ewealth/src/ui.css" />
<link rel="stylesheet" href="<?php echo base_url();?>assets/ewealth/index.css" />
<link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/css/font-awesome.min.css" rel="stylesheet">
  
<link rel="shortcut icon" href="<?php echo base_url();?>assets/ewealth/images/favicon.ico" />
<script>
/*$(document).ready(function(){            
  $("#loginform").submit( function () { 
  $("#error").html('<center><img src="<?php echo base_url();?>assets/ewealth/icons/loader.gif"/></center>').show();
    $.post('loginexec.html', $(this).serialize(), function(data){
      $("#error").html(data)
    });
    return false;   
  });
});   */
</script>
<style>
.modal {
  border: 0;
}
.modal#loginForm {
  width: 600px;
  margin-left: -300px;
}
.modal .modal-header {
  border: 0;
  padding: 20px 20px 0;
}
.modal .modal-header > h4 {
  font-weight: 300;
  font-size: 14px;
  color: #848484;
  text-transform: uppercase;
  margin: 0;
}
.modal .modal-body {
  padding: 20px;
}
.modal input[type="text"],
.modal input[type="password"] {
  padding: 5px 10px;
  min-height: 30px;
  width: 130px;
  margin-right: 10px;
}
.modal .icon-remove {
  color: #848484;
  position: absolute;
  right: -5px;
  top: -5px;
  width: 16px;
  height: 16px;
  line-height: 16px;
  text-align: center;
  display: block;
  background: #ebebeb;
  -webkit-border-radius: 100%;
  -moz-border-radius: 100%;
  border-radius: 100%;
  cursor: pointer;
}
.modal button {
  margin-left: 10px;
  border: 0;
}
 
.panel {
  height: 401px;
  display: none;
}
a{
  color: #000;
}
a:hover{
  color: #000;
}
</style>
</head>
<body>
      

<input type="hidden" value="<?php echo base_url();?>" id="baseurl">
<div class="canvass">
  <div class="header">
    <div class="logo"></div>
    <div style="float:right;">
    <?php
     if(!empty($members)){
     foreach($members as $member){
       $username  = $member->username;
       $id = $member->member_id;
       $lname = $member->lastname;
       $fname = $member->firstname;
       $email = $member->email;
       $mobile_num = $member->mobile_number;
       $fullname = $fname.' '.$lname;
       
       }
     }
    
   ?>
     <?php echo ucwords($fullname);?> | <?php echo $email;?> | Phone: <?php echo $mobile_num;?>

    <div id="error"><span style="clear:both;">| <a href="<?php echo base_url();?>member/<?php echo $username;?>">HOME</a> | <a href="<?php echo base_url();?>member/<?php echo $username;?>/products/">PRODUCTS</a> | <a href="<?php echo base_url();?>member/<?php echo $username;?>/faq/">F.A.Q.</a> | <a href="<?php echo base_url();?>member/<?php echo $username;?>/contact-us/">CONTACT US</a> |</span></div>
    <div style="clear:both;"></div> 
    </div>
  </div>
  <div style="clear:both;"></div>
  
  <div class="middle">  
    <div align="center">
      <div style="padding:5px;">
        
        <iframe width="640" height="290"  src="http://www.youtube.com/embed/I1Ee0auMr8I?rel=0&autoplay=1&loop=1&showinfo=0&controls=0" frameborder="0" allowfullscreen=""></iframe>

      </div>
    </div>

    
    <div style="clear:both;"></div> 

     <div align="center">
          <a href="javascript:void(0);" class="flip"><img src="<?php echo base_url();?>assets/images/joinNow_Red.png"></a>
    </div>

  </div>
  <div class="panel">
  <form method="post">
 <div class="col-md-12 form-group">
   <div style="color:#FFF; background-color:red;">
       <h2 align="center">Step 1: Fill up the form</h2>
       </div>
</div>
<div class="col-md-6 form-group">
<div class="input-group">
 
      <div class="input-group-addon"><span class="icon-user-md"></span></div>
      <input type="hidden" value="<?php echo $id;?>" name="referrer_id" id="referrer_id">
    <input class="form-control" id="fname" name="fname" type="text" placeholder="First Name"/>
</div>
</div>
<div class="col-md-6 form-group">
<div class="input-group">

      <div class="input-group-addon"><span class="icon-user-md"></span></div>
      
    <input class="form-control" id="lname" name="lname" type="text" placeholder="Last Name"/>
</div>
</div>
<span class="clearfix"></span>
<div class="col-md-6 form-group">
<div class="input-group">
 
      <div class="input-group-addon"><span class="icon-phone-sign"></span></div>
    <input class="form-control" id="mobile_num" name="mobile_num" type="text" placeholder="Mobile Number"/>
</div>
</div>
<div class="col-md-6 form-group">
<div class="input-group">
 <div class="input-group-addon">@</div>
 <input class="form-control" id="email_add" name="email_add"  type="text" placeholder="Email Address"/>
    </div>
</div>
<span class="clearfix"></span>
<div class="col-md-12 form-group">
  
  <div class="input-group">
 
      <div class="input-group-addon"><span class="icon-user"></span></div>
  <input class="form-control" id="uname" name="uname" type="text" placeholder="Create username"/>
    </div>
</div>

<span class="clearfix"></span>
<div class="col-md-6 form-group">
     <div class="input-group">
 
      <div class="input-group-addon"><span class="icon-lock"></span></div>
 
    <input class="form-control" id="create_password" name="create_password" type="password" placeholder="Create Password"/>
    </div>
</div>
<div class="col-md-6 form-group">
    <div class="input-group">
 
      <div class="input-group-addon"><span class="icon-lock"></span></div>
 
<input class="form-control" id="retype_password" name="retype_password"  type="password" placeholder="Re-type Password"/>
</div>
</div>
<span class="clearfix"></span>
<div class="col-md-12 form-group">
  <div class="input-group">
 
      <div class="input-group-addon"><span class="icon-user"></span></div>
<input type="hidden" value="<?php echo $username?>" name="referred" id="referred" /> 
<input class="form-control" id="referred_by" name="referred_by" value="<?php echo $username.' ('.ucwords($fullname).') '; ?>" type="text" placeholder="You were referred by" readonly/>

</div>
</div>
<span class="clearfix"></span>
 <div class="col-md-12 form-group">
<input type="button" name="btn_continue" id="btn_continue" onClick="setaccount()" value="Continue" class="btn form-control" style="background-color:#0F6; font-weight:bold;"/>
</div>

</form>

<div id="messages_response"></div>
<div id="wait_message"></div>
</div>



  <div class="middle">
    <div class="one">
      <div class="hblue">About Us</div>
        <div style="font-family:arial;text-align:center;font-size:13px;padding:20px;">
        <div style="font-weight:bold;">Who is EZwealthpages</div>
        <div>EZ Wealth Builder is one of the fastest growing home-based business on the internet right now. The reason for our success is that we're operating right in the middle of a multi-billion dollar industry in the world which is personal development and global internet marketing... plus we have a breakthough product and system that easily works for anyone.</div>
        </div>
    </div>
    <div class="two">
      
      <div class="hblue">EZwealthpages on Social Media</div>
      <div style="width:225px;margin:0 auto;margin-top:15px;">
        <a href="https://www.facebook.com/pages/Ezwealthpages/412752742228225?ref=hl/" target="_BLANK" style="text-decoration:none;">
          <div style="float:left;width:75px;height:75px;background:url(<?php echo base_url();?>assets/ewealth/images/facebook-icon.png);"></div>
        </a>
        <div style="float:left;width:75px;height:75px;background:url(<?php echo base_url();?>assets/ewealth/images/twitter-icon.png);"></div>
        <a href="https://www.youtube.com" target="_BLANK" style="text-decoration:none;">
          <div style="float:left;width:75px;height:75px;background:url(<?php echo base_url();?>assets/ewealth/images/youtube-icon.png);"></div>
        </a>  
      <div style="clear:both;"></div>
      </div>
    </div>
  <div class="three">
      <div class="hblue">Why use EZwealthpages system?</div>
        <div style="font-family:arial;text-align:justify;font-size:13px;padding:20px;">
          <p>* Not affiliated with any Company!<br>
            * No Programming skills needed!
            <br>
            * Simple Click and Type System!<br>
            * No Monthly Fees! No Hosting Fees!<br>
            * Highly Converting Capture Pages!<br>
            * 
            Use Multiple Capture Pages!<br>
          * You can add your own videos!</p></div>
    </div>    
    <div style="clear:both;"></div>
  </div>
  
  <div style="text-align:center;font-family:arial;font-size:12px;color:#ccc;margin-top:20px;">AVAILABLE CAPTURE PAGES<br>
    Product names, logos, brands, and other trademarks featured or referred to within www.ezwealthpages.com products and services and within www.ezwealthpages.com are the property of their respective trademark holders. These trademark holders are not affiliated with www.ezwealthpages.com, our products, or our website. </div>
  
  <div class="footer">  
  </div>
</div>



<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <br />
                
            </div>
            <div class="modal-body">
            <h4>Congratulations you are Successfully registered!</h4>

            <strong>Your Log-In Info</strong> <br /><br />
            
            <strong>Username:</strong> <span id="span_username"></span><br />
            <strong>Password:</strong> <span id="span_password"></span><br />
           <strong> Referrer:</strong> <span id="span_referrer"></span><br /><br />
            
            <a href="<?php echo base_url();?>">Click here to log In</a>
            </div>
          
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


    <script src="<?php echo base_url();?>assets/js/jquery.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/script.js"></script>
<script type="text/javascript">
var _tcq = _tcq || []; _tcq.push(['sidebar', '7ada97cbee', 'right-top', '003060', 'ffffff']); 
(function() { var e = document.createElement('script'); e.type = 'text/javascript'; e.async = true; e.src = '../s.tcimg.com/w/v2/sidebar.js'; var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(e, s); })();
</script>

</body>

</html>

