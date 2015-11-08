
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

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
<?php

          $this->load->library('mylibrary');
		  
?>
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
 
 // $this->load->helper('date');
  $this->load->model('member_model');
  if(!empty($member)){
	  foreach($member as $details){
		  $member_id    = $details->member_id;
		  $username 	= $details->username;
		  $lastname 	= $details->lastname;
		  $firstname 	= $details->firstname;
		  
		  $fullname 	= $lastname.', '.$firstname;
		  
		  $registration_date = $details->registration_date;
		  $activation_date 	 = $details->activation_date;
		  $expiration_date   = $details->expiration_date;
		  $account_status    = $details->account_status;
		
	
		  }
	  }
	  
//$datestring = "%Y-%m-%d";
//$time = time();

//$todays_date =  mdate($datestring, $time);

if($expiration_date=="0000-00-00"){
	echo '';
	}else{
if($activation_date>=$expiration_date){
	$this->member_model->updateStatus($member_id);
	}
}

  ?>  
  <input type="hidden" value="<?php echo $page_id; ?>" name="page_id">  
  <input type="hidden" value="<?php echo $primary_capture_id; ?>" name="primary_capture_id" id="primary_capture_id">  
     
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
                            <a href="<?php echo base_url();?>member/payments/"><i class="fa fa-money fa-fw"></i> Payments</a>
                           
                        </li>
                         <li>
                            <a href="<?php echo base_url();?>member/message/"><i class="fa fa-comment fa-fw"></i> Messages</a>
                           
                        </li>
                        <li>
                            <a class="active"  href="<?php echo base_url();?>member/capture_page/"><i class="fa fa-edit fa-fw"></i>Edit Capture Page</a>
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
            <div class="row">
                   <div class="panel panel-default">
                        <div class="panel-heading">
                          <i class="fa fa-edit fa-fw"></i>Edit Capture page
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                        <div class="pull-right">
                          <a href="javascript:void(0);" onclick="restore(<?php echo $page_id;?>)" class="btn btn-primary"><span class="glyphicon glyphicon-cog"></span> Restore Default</a>
                       </div>
                       <br />
                       <br />
                        
                  <?php
				  $use_form = "";
				  if(!empty($getMemberCpage)){
					 foreach($getMemberCpage as $cpage){
						 $youtube_video_id = $cpage->youtube_video_id;
						 $webform  = $cpage->webform;
             $use_form = $cpage->use_form;
             $campaignname  = $cpage->campaign_name;
             $redirect = $cpage->redirect_url; 
						 } 
					  }
				  
				  
          if($account_status==0 || $account_status==2){
					 echo '
					 <h4 align="center" class="alert alert-info">You must be active account to view this page. Click <a href="'.base_url().'member/payments/">here</a> to activate your account.</h4>
						';
					 }else{
				 ?>    
                <form method="post" class="form-horizontal">
                <textarea name="content_textarea"><?php echo  (isset($_POST['content_textarea']) ? $_POST['content_textarea'] : $this->load->view('capture_pages/'.$username.'/'.$pagename.'/index.php'));?></textarea>
                <br />
             
                <!--<div class="form-group">
                    <label for="video" class="col-sm-3 control-label">Youtube ID:</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" name="youtube_video_id" id="video" value="<?php //echo (isset($_POST['youtube_video_id']) ? $_POST['youtube_video_id'] : (isset($youtube_video_id) ? $youtube_video_id : ''));?>"   placeholder="Youtube ID">
                    </div>
                  </div>-->

                  <div class="form-group">
                    <label for="video" class="col-sm-3 control-label"></label>
                    <div class="col-sm-6">
                      <label><input type="checkbox" name="show_web_form" value="1" <?php echo (isset($_POST['show_web_form']) ? 'checked="checked"' : ($use_form==1 ? 'checked="checked"' : '') );?> id="show_web_form"> Use form from Getresponse</label>
                    </div>
                  </div>

                  <?php if($page_id==19 || $page_id==18  || $page_id==17 || $page_id==16 || $page_id==15 || $page_id==14 || $page_id==13 || $page_id==20):?>

                  <?php else:?> 

                  <div class="form-group">
                      <label for="youtube_video2" class="col-sm-3 control-label">Youtube ID:</label>
                    <div class="col-sm-8"> 
                    <div class="col-sm-9 input-group">
                    <span class="input-group-addon">https://www.youtube.com/watch?v=</span>
                      <input type="text" class="form-control" name="youtube_video_id" id="video" value="<?php echo (isset($_POST['youtube_video_id']) ? $_POST['youtube_video_id'] : (isset($youtube_video_id) ? $youtube_video_id : ''));?>"   placeholder="Youtube ID">
                    </div>
                    </div>
                  </div>
                <?php endif;?>
                  <br />

          <div id="campaign-form"> 

        <div class="form-group">
            <label for="youtube_video2" class="col-sm-3 control-label">Redirect URL:</label>
          <div class="col-sm-8"> 
          <div class="col-sm-9 input-group">
          <span class="input-group-addon">http://</span>
            <input type="text" class="form-control" name="redirect" id="redirect" value="<?php echo (isset($_POST['redirect']) ? $_POST['redirect'] : (isset($redirect) ? $redirect : ''));?>" >
          </div>
          </div>
        </div>


         <div class="form-group">
         
          <label for="video" class="col-sm-3 control-label">Your getResponse campaign:</label>
             <div class="col-sm-6">
            <select name="campaign_name" id="campaign_name" class="form-control">
            <option value="0">Select Campaign Name</option>
            <?php

            $getMember = $this->member_model->getMember($member_id);

            foreach($getMember as $member){
            $get_response_key = $member->get_response_key;
            } 
      
      if(!empty($get_response_key)){
        
        
            $api = new GetResponse($get_response_key);


            // Campaigns
            $campaigns   = (array)$api->getCampaigns();
            $campaignIDs = array_keys($campaigns);
            $count = $campaignIDs;
            
         
            for($i=0;$i < count($count);$i++){
              
           
            $campaign_token = $campaignIDs[$i];
            $value = $campaigns[$campaign_token]->name;

            if(isset($_POST['btn_save'])){

          if($_POST['campaign_name']==$value){

            $selected =  'selected="selected"';
            }else{

              $selected =  '';
            }
          }else{

            if($campaignname==$value){

              $selected =  'selected="selected"';
            }else{
            $selected =  '';

            }
          

          }

            echo '<option value="'.$value .'" '.$selected.'>'.$value.'</option>'; 
          
            }
           }
            ?>
           </select>   
           <em>If the dropdown list is empty, please configure the getResponse API key <a href="<?php //echo base_url();?>member/capture_page/">here</a></em>
            </div>
            </div>
            </div>

                   
                
          <div id="webform-field" style="display:none;">
          <div class="form-group">
              <label for="redirect_url" class="col-sm-3 control-label">Webform ID: </label>
                      
          <div class="col-sm-6">
          <textarea name="webform"  class="form-control" cols="40" rows="5" id="webform"><?php echo (isset($_POST['webform']) ? $_POST['webform'] : (isset($webform) ? $webform : ''));?></textarea>
          </div>

          </div>
                  </div>
                <br />
                  <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-10">
                      <button type="submit" class="btn btn-primary" name="btn_save">Save changes</button>
                    </div>
                 </div>
           <?php

           
            if(isset($_POST['btn_save']))
            {
              

            if(isset($_POST['show_web_form']))
           {
            
            $show_web_form = 1;
         
					  $content_textarea = $this->input->post('content_textarea');
					  $youtube_video_id1 = $this->input->post('youtube_video_id');
            $webform1 = $this->input->post('webform');

            if(!empty($webform))
            {

              preg_match( '@src="([^"]+)"@' , $webform, $oldmatch );

            $old_webform = array_pop($oldmatch);
            }
            else
            {
              $old_webform = '';
            }
           

            preg_match( '@src="([^"]+)"@' , $webform1, $match );

            $src = array_pop($match);

					 if(empty($content_textarea) || empty($webform1))
           {
						 
						 echo '<div class="alert alert-danger">All fields are required.</div>';
					 }
           else
           {
							$existsMemberCpage = $this->member_model->existsMemberCpage($member_id,$page_id);
							

							if($existsMemberCpage==0)
              {
               
                $contents  = str_replace('type="text/javascript" src="', 'type="text/javascript" src="'.$src, $content_textarea );

                file_put_contents('application/views/capture_pages/'.$username.'/'.$pagename.'/index.php',$contents );
                
							 $this->member_model->setCpage($member_id,$page_id,$youtube_video_id1,$show_web_form,$webform1);
							  echo '<div class="alert alert-success">Saved changes</div>';

							}
              else
              {
                $content1 = str_replace('type="text/javascript" src="', 'type="text/javascript" src="', $content_textarea  );

                $contents  = str_replace('type="text/javascript" src="', 'type="text/javascript" src="'.$src, $content1 );

								file_put_contents('application/views/capture_pages/'.$username.'/'.$pagename.'/index.php',$contents );
                
              
								$this->member_model->updateCpage($member_id,$page_id,$youtube_video_id1,$show_web_form,$webform1);
               

								echo '<div class="alert alert-success">Saved changes</div>';
							}

            }
						
						}
            else
            {
               $show_web_form = $this->input->post('show_web_form');
               $campaign_name = $this->input->post('campaign_name');
               $youtube_video_id1 = $this->input->post('youtube_video_id');
               $redirecturl = $this->input->post('redirect');
              if(empty($campaign_name) || empty($redirecturl)  )
              {
                echo '<div class="alert alert-danger">All fields are required.</div>';
              }
              else
              {
                $existsMemberCpage = $this->member_model->existsMemberCpage($member_id,$page_id);

                if($existsMemberCpage == 0)
                {
                   $this->member_model->saveCampaign($member_id,$page_id,$youtube_video_id1,$campaign_name,$show_web_form,$redirecturl,'insert');
                }
                else
                {
                   $this->member_model->saveCampaign($member_id,$page_id,$youtube_video_id1,$campaign_name,$show_web_form,$redirecturl,'update');
                }
              
               echo '<div class="alert alert-success">Saved changes</div>';
              }
                
            }
					 
           }
				 ?>
                </form>

                    <?php
                     
					 }
					 ?>
                        </div>
                        
                    </div>
            </div>
            <!-- /.row --><!-- /.row --><!-- /.row -->
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
    <!-- jQuery Version 1.11.0 -->
    <script src="<?php echo base_url();?>assets/member/js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url();?>assets/member/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo base_url();?>assets/member/js/plugins/metisMenu/metisMenu.min.js"></script>



<script src="<?php echo base_url();?>assets/ckeditor-4.4.6/ckeditor.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url();?>assets/member/js/sb-admin-2.js"></script>
<script src="<?php echo base_url();?>assets/js/script.js"></script>
<script>
CKEDITOR.replace( 'content_textarea', {
	 allowedContent: true
});

</script>
</body>

</html>
