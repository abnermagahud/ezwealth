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
<style>
  .panel-body {
  padding: 58px;
}
</style>
</head>

<body>

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

  $this->load->model('member_model');
  if(!empty($member))
  {
	  foreach($member as $details){
		  $member_id   		= $details->member_id;
		  $username 		= $details->username;
		  $lastname 		= $details->lastname;
		  $firstname 		= $details->firstname;
		  $email 			= $details->email;
		  $mobile_number 	= $details->mobile_number;
		  $fullname 		= $lastname.', '.$firstname;
		  
		  $registration_date = $details->registration_date;
		  $activation_date 	 = $details->activation_date;
		  $expiration_date   = $details->expiration_date;
		  $account_status    = $details->account_status;
      $subscription      = $details->subscription;

		  }
	  }
	  

    $info_header_image = "";
    $info_footer_image =  "";

    $info_youtube_id_1 = "";
    $info_youtube_id_2 = "";
    $info_youtube_id_3 = "";

    $info_redirect_image_1 = "";
    $info_redirect_image_2 = "";

    $info_redirect_link_1 = "";
    $info_redirect_link_2 = "";

    $info_feature_image_1 = "";
    $info_feature_image_2 = "";
    $info_feature_image_3 = "";
    $info_feature_image_4 = "";

    $info_description_image_1 = "";
    $info_description_image_2 ="";
    $info_description_image_3 = "";
    $info_description_image_4 = "";

    $info_font_color ="";
    $info_footer_content_1 = "";
    $info_footer_content_2 = "";


    $title1 = "";
    $title2 = "";
    $title3 = "";
    $title4 = "";

    $footer_title_1 = "";
    $footer_title_2 = "";

    $text1 = "";
    $text2 ="";
    $info_video_title = "";
    $info_background_color = "";

if(!empty($landingpage))
{
  foreach($landingpage as $info)
  {
    $info_header_image = $info->header_image;
    $info_footer_image =  $info->footer_image;
    $info_video_title  = $info->video_title;
    $info_youtube_id_1 = $info->youtube_id_1;
    $info_youtube_id_2 = $info->youtube_id_2;
    $info_youtube_id_3 = $info->youtube_id_3;

    $info_redirect_image_1 = $info->redirect_image_1;
    $info_redirect_image_2 = $info->redirect_image_2;

    $info_redirect_link_1 = $info->redirect_link_1;
    $info_redirect_link_2 = $info->redirect_link_2;

    $title1 = $info->title1;
    $title2 = $info->title2;
    $title3 = $info->title3;
    $title4 = $info->title4;

    $info_feature_image_1 = $info->feature_image_1;
    $info_feature_image_2 = $info->feature_image_2;
    $info_feature_image_3 = $info->feature_image_3;
    $info_feature_image_4 = $info->feature_image_4;

    $info_description_image_1 = $info->description_image_1;
    $info_description_image_2 = $info->description_image_2;
    $info_description_image_3 = $info->description_image_3;
    $info_description_image_4 = $info->description_image_4;

    $info_font_color = $info->font_color;
    $info_footer_content_1 = $info->footer_content_1;
    $info_footer_content_2 = $info->footer_content_2;



    $footer_title_1 = $info->footer_title_1;
    $footer_title_2 = $info->footer_title_2;
    $text1 = $info->text1;
    $text2 = $info->text2;

    $info_background_color  = $info->background_color;
    
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
                            <a href="<?php echo base_url();?>member/payments/"><i class="fa fa-money fa-fw"></i> Payments</a>
                           
                        </li>
                         <li>
                            <a href="<?php echo base_url();?>member/message/"><i class="fa fa-comment fa-fw"></i> Messages</a>
                           
                        </li>
                        <li>
                            <a  href="<?php echo base_url();?>member/capture_page/"><i class="fa fa-edit fa-fw"></i>Edit Capture Page</a>
                        </li>
                        <li>
                            <a class="active"  href="<?php echo base_url();?>member/landing_page/"><i class="fa fa-edit fa-fw"></i> Edit Landing Page</a>
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
              <?php
              if(!empty($landingpage))
              {
                  echo '<h4>Your Landing page URL:</h4>';
                  echo '<a target="_new" href="'.base_url().'member/'.$username.'/landingpage/">'.base_url().'member/'.$username.'/landingpage/</a><br /><br />';

              }
              ?>
                   <div class="panel panel-default">
                        <div class="panel-heading">
                          <i class="fa fa-edit fa-fw"></i>Landing page
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                        <?php
                         if($account_status==0 || $account_status==2){
              					 echo '
              					 <h4 align="center" class="alert alert-info">You must be active account to view this page. Click <a href="'.base_url().'member/payments/">here</a> to activate your account.</h4>
              						';
                        }else if($subscription == "basic"){

                           echo '
                         <h4 align="center" class="alert alert-info">Sorry, this page is for premium subscribers only.</h4>
                          ';

              					 }else{
                        
              				 ?>    

            
                 <div class="col-md-12">
                
                 <div class="panel panel-primary">
                    <div class="panel-heading">
                      <h3 class="panel-title">Personal Details, Header, and Footer</h3>
                    </div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="post"  enctype="multipart/form-data">
                  <div class="form-group">
                    <label for="lname" class="col-sm-4 control-label">Lastname:</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" id="lname" name="lname" value="<?php echo (isset($_POST['lname']) ? $_POST['lname'] : $lastname);?>" placeholder="Lastname">
                    </div>
                  </div>
                   <div class="form-group">
                    <label for="fname" class="col-sm-4 control-label">Firstname:</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" id="fname" name="fname" value="<?php echo (isset($_POST['fname']) ? $_POST['fname'] : $firstname);?>" placeholder="Firstname">
                    </div>
                  </div>
                     <div class="form-group">
                    <label for="email" class="col-sm-4 control-label">Email:</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" id="email" name="email" value="<?php echo (isset($_POST['email']) ? $_POST['email'] : $email);?>" placeholder="Email">
                    </div>
                  </div>
                    <div class="form-group">
                    <label for="email" class="col-sm-4 control-label">Contact #:</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" id="con_num" name="con_num"  value="<?php echo (isset($_POST['con_num']) ? $_POST['con_num'] : $mobile_number);?>" placeholder="Contact Number">
                    </div>
                  </div>


                <h4>Header</h4>
              
                <?php if(!empty($info_header_image)):?>
                <div class="form-group">
                  <label for="image_header" class="col-sm-4 control-label">Current Image Header:</label>
                  <div class="col-sm-6">
                    <img src="<?php echo base_url();?>uploads/<?php echo  $info_header_image;?>" style="height:100px; width:300px;"> &nbsp <a href="javascript:void(0);" onclick="deletePhoto('<?php echo  $info_header_image;?>','header_image')">Delete</a>
                  </div>
                </div>   
                 <?php endif;?>
                <?php if(empty($info_header_image)):?>
                <div class="form-group">
                  <label for="image_header" class="col-sm-4 control-label">Upload Image:</label>
                  <div class="col-sm-6">
                    <input type="file" class="form-control" id="image-header" name="image_header" >
                  </div>
                </div> 
                 <?php endif;?>  
                <br />
               <h4>Footer</h4>
               <?php if(!empty($info_footer_image)):?>
                  <div class="form-group">
                  <label for="image_header" class="col-sm-4 control-label">Current Image Footer:</label>
                  <div class="col-sm-6">
                    <img src="<?php echo base_url();?>uploads/<?php echo  $info_footer_image;?>" style="height:100px; width:300px"> &nbsp <a href="javascript:void(0);" onclick="deletePhoto('<?php echo  $info_footer_image;?>','footer_image')">Delete</a>
                  </div>
                </div>   
                 <?php endif;?>

                <?php if(empty($info_footer_image)):?>
                <div class="form-group">
                  <label for="image_footer" class="col-sm-4 control-label">Upload Image:</label>
                  <div class="col-sm-6">
                    <input type="file" class="form-control" id="image-footer" name="image_footer" >
                  </div>
                </div>
                <?php endif;?>

                 <div class="form-group">
                  <div class="col-sm-offset-4 col-sm-10">
                  <button type="submit" class="btn btn-primary" name="btn1" id="btn1-update">Update</button>
                  </div>
                  </div>
                  <br />

                  <?php
                  if(isset($_POST['btn1']))
                  {
                      $image_header = $info_header_image;
                      $image_footer =  $info_footer_image;

                      $lname      = $this->input->post('lname');
                      $fname      = $this->input->post('fname');
                      $member_email = $this->input->post('email');
                      $mobile     = $this->input->post('con_num');

                      if(isset($_FILES['image_header']['name']))
                      {
                          $imageheader     = $_FILES['image_header']['name']; 
                      }

                      if(isset($_FILES['image_footer']['name']))
                      {
                           $imagefooter  = $_FILES['image_footer']['name']; 
                      }
                    
                     

                      if(empty($lname) || empty($fname) || empty($member_email) || empty($mobile) )
                      {
                        echo '<div class="alert alert-danger">All fields are required.</div>';
                      }
                      else
                      {

                            $config['upload_path'] = './uploads/';
                            $config['allowed_types'] = 'gif|jpg|png|PNG';
                            $config['max_size']  = '1024';// in kb
                            $config['overwrite'] = TRUE;
                            $ci = get_instance(); 

                            $ci->load->library('upload', $config);
                            

                             if(isset($_FILES['image_header']['name']))
                             {

                                if ( ! $ci->upload->do_upload('image_header'))
                                {
                                  echo '<div class="alert alert-danger">Header Image '.$ci->upload->display_errors().'</div>';
                                  
                                }
                                else
                                {
                                  $data_header = array('upload_data' => $ci->upload->data());
                                  $image_header =  $data_header['upload_data']['file_name'];
                                }

                              }
                             
                            if(isset($_FILES['image_footer']['name']))
                            {
                              if ( ! $ci->upload->do_upload('image_footer'))
                              {
                                echo '<div class="alert alert-danger">Footer Image'.$ci->upload->display_errors().'</div>';
                                
                              }
                              else
                              {
                                $data_footer = array('upload_data' => $ci->upload->data());
                                $image_footer =  $data_footer['upload_data']['file_name'];
                              }
                            }

                            if(empty($info_header_image) || empty($info_footer_image))
                            {
                               $this->member_model->saveHeaderInfo($member_id,$lname,$fname,$member_email,$mobile,$image_header,$image_footer,'insert');
                               echo '<div class="alert alert-success" id="btn1">Successfully Saved.</div>';
                            }
                            else
                            {
                               $this->member_model->saveHeaderInfo($member_id,$lname,$fname,$member_email,$mobile,$image_header,$image_footer,'update');
                              echo '<div class="alert alert-success" id="btn1">Successfully Saved.</div>';
                            }
                       
                      }

                  }
                  ?>
                </form>
                    </div>
                  </div>
                 

                 <br />
                  <div class="panel panel-primary">
                  <div class="panel-heading">
                    <h3 class="panel-title">Youtube Links, Texts, and Images</h3>
                  </div>
                  <div class="panel-body">
                      <form class="form-horizontal" role="form" method="post"  enctype="multipart/form-data">
                  
                  <div class="form-group">
                    <label for="email" class="col-sm-4 control-label">Title:</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" id="main_title" name="main_title" value="<?php echo $info_video_title;?>" placeholder="Title">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="youtube_video1" class="col-sm-4 control-label">Main Youtube Video: </label>
                    <div class="col-sm-7"> 
                    <div class="col-sm-9 input-group">
                    <span class="input-group-addon">https://www.youtube.com/watch?v=</span>
                     <input type="text" style="width:150%;" class="form-control" id="youtube_video1" value="<?php echo $info_youtube_id_1;?>" name="youtube_video1" >
                    </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="youtube_video2" class="col-sm-4 control-label">Youtube Video 1: </label>
                    <div class="col-sm-7"> 
                    <div class="col-sm-9 input-group">
                    <span class="input-group-addon">https://www.youtube.com/watch?v=</span>
                     <input type="text" style="width:150%;" class="form-control" id="youtube_video2" value="<?php echo $info_youtube_id_2;?>"  name="youtube_video2" >
                    </div>
                    </div>
                  </div>

                 <div class="form-group">
                    <label for="youtube_video3" class="col-sm-4 control-label">Youtube Video 2: </label>
                    <div class="col-sm-7"> 
                    <div class="col-sm-9 input-group">
                    <span class="input-group-addon">https://www.youtube.com/watch?v=</span>
                     <input type="text" style="width:150%;"  class="form-control" id="youtube_video3" value="<?php echo $info_youtube_id_3;?>" name="youtube_video3" >
                    </div>
                    </div>
                  </div> 
                <br />
                <h4>Texts below the main video</h4>

                <div class="form-group">
                  <label for="image_header" class="col-sm-4 control-label">Text 1:</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" id="text1" name="text1" value="<?php echo $text1;?>">
                  </div>
                </div>  

                <div class="form-group">
                  <label for="image_header" class="col-sm-4 control-label">Text 2:</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" id="text2" name="text2" value="<?php echo $text2;?>">
                  </div>
                </div>  

                <h4>Redirect Links with Images</h4>
                <br />
                <?php if(!empty($info_redirect_image_1)):?>
                <div class="form-group">
                  <label for="image_header" class="col-sm-4 control-label">Current Image:</label>
                  <div class="col-sm-6">
                    <img src="<?php echo base_url();?>uploads/<?php echo  $info_redirect_image_1;?>" style="height:100px; width:300px"> &nbsp <a href="javascript:void(0);" onclick="deletePhoto('<?php echo  $info_redirect_image_1;?>','redirect_image_1')">Delete</a>
                  </div>
                </div>  
              <?php endif;?>

                <div class="form-group">
                  <?php if(empty($info_redirect_image_1)):?>
                  <label for="youtube_video1" class="col-sm-4 control-label">Image 1: </label>
                  <div class="col-sm-6">
                    <input type="file" class="form-control" id="redirect1" name="redirect1" >
                  </div>
                   
                  <br />
                  <br />
                  <?php endif;?>
                   <label for="youtube_video1" class="col-sm-4 control-label">Redirect Link 1:</label>
                  <div class="col-sm-6"> 
                    
                    <div class="col-sm-8 input-group">
                    <span class="input-group-addon">http://</span>
                     <input type="text" style="width: 162%;" class="form-control" value="<?php echo $info_redirect_link_1;?>" id="redirect_link_1" name="redirect_link_1" >
                    </div>
                  </div>

                </div>   
                  <?php if(!empty($info_redirect_image_2)):?>
                <div class="form-group">

                  <label for="image_header" class="col-sm-4 control-label">Current Image:</label>
                  <div class="col-sm-6">
                    <img src="<?php echo base_url();?>uploads/<?php echo  $info_redirect_image_2;?>" style="height:100px; width:300px"> &nbsp <a href="javascript:void(0);" onclick="deletePhoto('<?php echo  $info_redirect_image_2;?>','redirect_image_2')">Delete</a>
                  </div>
                </div>  
                <?php endif;?>
                <div class="form-group">
                <?php if(empty($info_redirect_image_2)):?>
                  <label for="youtube_video1" class="col-sm-4 control-label">Image 2: </label>
                  <div class="col-sm-6">
                    <input type="file" class="form-control" id="redirect2" name="redirect2" >
                  </div>

                  <br />
                  <br />
              <?php endif;?>
                   <label for="youtube_video1" class="col-sm-4 control-label">Redirect Link 2:</label>
                  <div class="col-sm-6"> 
                      <div class="col-sm-8 input-group">
                    <span class="input-group-addon">http://</span>
                     <input type="text" style="width: 162%;" class="form-control" id="redirect_link_2" value="<?php echo $info_redirect_link_2;?>" name="redirect_link_2" >
                    </div>
                  </div>

                </div> 

                  <div class="form-group">
                  <div class="col-sm-offset-4 col-sm-10">
                  <button type="submit" class="btn btn-primary" name="btn2">Update</button>
                  </div>
                  </div>
                  <br />
                  <?php
                    if(isset($_POST['btn2']))
                    {
                        $redirect1  =  $info_redirect_image_1;
                        $redirect2  =  $info_redirect_image_2;

                        $main_title = $this->input->post('main_title');
                        $youtube_video1 = $this->input->post('youtube_video1');
                        $youtube_video2 = $this->input->post('youtube_video2');
                        $youtube_video3 = $this->input->post('youtube_video3');

                        $redirect_link_1 = $this->input->post('redirect_link_1');
                        $redirect_link_2 = $this->input->post('redirect_link_2');

                        if(isset($_FILES['redirect1']['name']))
                        {
                            $redirect_image_1 = $_FILES['redirect1']['name']; 
                        }

                         if(isset($_FILES['redirect2']['name']))
                        {
                            $redirect_image_2 = $_FILES['redirect2']['name']; 
                        }

                        $belowtext1 = $this->input->post('text1');
                        $belowtext2 = $this->input->post('text2');

                        if(empty($main_title) || empty($youtube_video1) || empty($youtube_video2)  || empty($youtube_video3)  || empty($redirect_link_1)  || empty($redirect_link_2)  )
                        {
                            echo '<div class="alert alert-danger">All fields are required.</div>';
                        }
                        else
                        {

                            $config['upload_path'] = './uploads/';
                            $config['allowed_types'] = 'gif|jpg|png|PNG';
                            $config['max_size']  = '1024';// in kb
                            $config['overwrite'] = TRUE;
                            $ci = get_instance(); 

                            $ci->load->library('upload', $config);

                            if(isset($_FILES['redirect1']['name']))
                            {

                              if ( ! $ci->upload->do_upload('redirect1'))
                              {
                               echo '<div class="alert alert-danger">Image 1 '.$ci->upload->display_errors().'</div>';
                                
                              }
                              else
                              {
                                $data_redirect1 = array('upload_data' => $ci->upload->data());
                                 $redirect1 =  $data_redirect1['upload_data']['file_name'];
                              }

                            }


                            if(isset($_FILES['redirect2']['name']))
                            {

                              if ( ! $ci->upload->do_upload('redirect2'))
                              {
                                echo '<div class="alert alert-danger">Image 2 '.$ci->upload->display_errors().'</div>';
                                
                              }
                              else
                              {
                                $data_redirect2 = array('upload_data' => $ci->upload->data());
                                $redirect2 =  $data_redirect2['upload_data']['file_name'];
                              }

                            }

                          if(empty($info_youtube_id_1)  ||  empty($info_youtube_id_2) ||  empty($info_redirect_image_2)  || empty($info_redirect_link_1) || empty($info_redirect_link_2))
                          {
                              $this->member_model->saveYoutubeLinks($member_id,$youtube_video1,$youtube_video2,$youtube_video3,$belowtext1,$belowtext2,$redirect1,$redirect2,$redirect_link_1,$redirect_link_2,$main_title,'insert');
                              echo '<div class="alert alert-success">Successfully Saved.</div>';
                          }
                          else
                          {
                              $this->member_model->saveYoutubeLinks($member_id,$youtube_video1,$youtube_video2,$youtube_video3,$belowtext1,$belowtext2,$redirect1,$redirect2,$redirect_link_1,$redirect_link_2,$main_title,'update');
                              echo '<div class="alert alert-success">Successfully Saved.</div>';
                          }

                        }

                    }
                  ?>
                </form>
                  </div>
                </div>
                
                <br />
                <div class="panel panel-primary">
                  <div class="panel-heading">
                    <h3 class="panel-title">Featured Images</h3>
                  </div>
                  <div class="panel-body">
                    <form class="form-horizontal" role="form" method="post"  enctype="multipart/form-data">
                <div class="form-group">
                  <label for="color" class="col-sm-4 control-label">Title 1:</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" id="title1" name="title1" value="<?php echo $title1;?>">
                  </div>
                </div> 
                 <?php if(!empty($info_feature_image_1)):?>
                <div class="form-group">
                  <label for="image_header" class="col-sm-4 control-label">Current Featured Image 1:</label>
                  <div class="col-sm-6">
                    <img src="<?php echo base_url();?>uploads/<?php echo  $info_feature_image_1;?>" style="height:100px; width:300px"> &nbsp <a href="javascript:void(0);" onclick="deletePhoto('<?php echo  $info_feature_image_1;?>','feature_image_1')">Delete</a>
                  </div>
                </div>  
                <?php endif;?>
                  <?php if(empty($info_feature_image_1)):?>
                <div class="form-group">
                  <label for="image_header" class="col-sm-4 control-label">Image 1:</label>
                  <div class="col-sm-6">
                    <input type="file" class="form-control" id="feature1" name="feature1" >
                  </div>
                </div>  
                   <?php endif;?> 
                <br />
                <div class="form-group">
                  <label for="image_header" class="col-sm-4 control-label">Description of Image 1:</label>
                  <div class="col-sm-6">
                    <textarea  class="form-control" id="description1" name="description1"><?php echo $info_description_image_1;?></textarea>
                  </div>
                </div>

                <div class="form-group">
                  <label for="color" class="col-sm-4 control-label">Title 2:</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" id="title2" name="title2" value="<?php echo $title2;?>">
                  </div>
                </div> 
                   <?php if(!empty($info_feature_image_2)):?>
                <div class="form-group">
                  <label for="image_header" class="col-sm-4 control-label">Current Featured Image 2:</label>
                  <div class="col-sm-6">
                    <img src="<?php echo base_url();?>uploads/<?php echo  $info_feature_image_2;?>" style="height:100px; width:300px"> &nbsp <a href="javascript:void(0);" onclick="deletePhoto('<?php echo  $info_feature_image_2;?>','feature_image_2')">Delete</a>
                  </div>
                </div>  
                <?php endif;?>
                <?php if(empty($info_feature_image_2)):?>
                <div class="form-group">
                  <label for="image_header" class="col-sm-4 control-label">Image 2:</label>
                  <div class="col-sm-6">
                    <input type="file" class="form-control" id="feature2" name="feature2" >
                  </div>
                </div>  
                 <?php endif;?> 
                <br />
                 <div class="form-group">
                  <label for="image_header" class="col-sm-4 control-label">Description of Image 2:</label>
                  <div class="col-sm-6">
                    <textarea  class="form-control" id="description2" name="description2"><?php echo $info_description_image_2;?></textarea>
                  </div>
                </div>

                <div class="form-group">
                  <label for="color" class="col-sm-4 control-label">Title 3:</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" id="title3" name="title3" value="<?php echo $title3;?>">
                  </div>
                </div> 
                  <?php if(!empty($info_feature_image_3)):?>
                <div class="form-group">
                  <label for="image_header" class="col-sm-4 control-label">Current Featured Image 3:</label>
                  <div class="col-sm-6">
                    <img src="<?php echo base_url();?>uploads/<?php echo  $info_feature_image_3;?>" style="height:100px; width:300px"> &nbsp <a href="javascript:void(0);" onclick="deletePhoto('<?php echo  $info_feature_image_3;?>','feature_image_3')">Delete</a>
                  </div>
                </div>  
                <?php endif;?>
                   <?php if(empty($info_feature_image_3)):?>
                <div class="form-group">
                  <label for="image_header" class="col-sm-4 control-label">Image 3:</label>
                  <div class="col-sm-6">
                    <input type="file" class="form-control" id="feature3" name="feature3" >
                  </div>
                </div>  
                  <?php endif;?> 
                <br />
                 <div class="form-group">
                  <label for="image_header" class="col-sm-4 control-label">Description of Image 3:</label>
                  <div class="col-sm-6">
                    <textarea  class="form-control" id="description3" name="description3"><?php echo $info_description_image_3;?></textarea>
                  </div>
                </div>

                <div class="form-group">
                  <label for="color" class="col-sm-4 control-label">Title 4:</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" id="title4" name="title4" value="<?php echo $title4;?>">
                  </div>
                </div> 
                 <?php if(!empty($info_feature_image_4)):?>
                <div class="form-group">
                  <label for="image_header" class="col-sm-4 control-label">Current Featured Image 4:</label>
                  <div class="col-sm-6">
                    <img src="<?php echo base_url();?>uploads/<?php echo  $info_feature_image_4;?>" style="height:100px; width:300px"> &nbsp <a href="javascript:void(0);" onclick="deletePhoto('<?php echo  $info_feature_image_4;?>','feature_image_4')">Delete</a>
                  </div>
                </div> 
                  <?php endif;?> 
                  <?php if(empty($info_feature_image_4)):?>
                <div class="form-group">
                  <label for="image_header" class="col-sm-4 control-label">Image 4:</label>
                  <div class="col-sm-6">
                    <input type="file" class="form-control" id="feature4" name="feature4" >
                  </div>
                </div>  
                 <?php endif;?>  
                <br />
                 <div class="form-group">
                  <label for="description4" class="col-sm-4 control-label">Description of Image 4:</label>
                  <div class="col-sm-6">
                    <textarea  class="form-control" id="description4" name="description4"><?php echo $info_description_image_4;?></textarea>
                  </div>
                </div>
                    <div class="form-group">
                  <div class="col-sm-offset-4 col-sm-10">
                  <button type="submit" class="btn btn-primary" name="btn3">Update</button>
                  </div>
                  </div>
                    
                  <br />
                  <?php
                  if(isset($_POST['btn3']))
                  {
                      $feature1 = $info_feature_image_1;
                      $feature2 = $info_feature_image_2;
                      $feature3 = $info_feature_image_3;
                      $feature4 = $info_feature_image_4;

                      $featured_title1 = $this->input->post('title1');
                      $featured_title2 = $this->input->post('title2');
                      $featured_title3 = $this->input->post('title3');
                      $featured_title4 = $this->input->post('title4');

                      if(isset($_FILES['feature1']['name']))
                      {
                         $feature_image_1 = $_FILES['feature1']['name']; 
                      }

                       if(isset($_FILES['feature2']['name']))
                      {
                          $feature_image_2 = $_FILES['feature2']['name']; 
                      }

                       if(isset($_FILES['feature3']['name']))
                      {
                          $feature_image_3 = $_FILES['feature3']['name']; 
                      }

                       if(isset($_FILES['feature4']['name']))
                      {
                        $feature_image_4 = $_FILES['feature4']['name']; 
                      }
    
                      $description1 = $this->input->post('description1');
                      $description2 = $this->input->post('description2');
                      $description3 = $this->input->post('description3');
                      $description4 = $this->input->post('description4');

                    if(empty($featured_title1) || empty($featured_title2) || empty($featured_title3) || empty($featured_title4) || empty($description1) || empty($description2) || empty($description3) || empty($description4) )
                    {
                      echo '<div class="alert alert-danger">All fields are required.</div>';
                    }
                    else
                    {

                            $config['upload_path'] = './uploads/';
                            $config['allowed_types'] = 'gif|jpg|png|PNG';
                            $config['max_size']  = '1024';// in kb
                            $config['overwrite'] = TRUE;
                            $ci = get_instance(); 

                            $ci->load->library('upload', $config);


                      if(isset($_FILES['feature1']['name']))
                      {

                          if ( ! $ci->upload->do_upload('feature1'))
                          {
                            echo '<div class="alert alert-danger">Image 1'.$ci->upload->display_errors().'</div>';
                            
                          }
                          else
                          {
                            $data_feature1 = array('upload_data' => $ci->upload->data());
                            $feature1 =  $data_feature1['upload_data']['file_name'];
                          }
                      }


                      if(isset($_FILES['feature2']['name']))
                      {

                          if ( ! $ci->upload->do_upload('feature2'))
                          {
                            echo '<div class="alert alert-danger">Image 2'.$ci->upload->display_errors().'</div>';
                            
                          }
                          else
                          {
                            $data_feature2 = array('upload_data' => $ci->upload->data());
                            $feature2 =  $data_feature2['upload_data']['file_name'];
                          }
                      }


                      if(isset($_FILES['feature3']['name']))
                      {

                          if ( ! $ci->upload->do_upload('feature3'))
                          {
                            echo '<div class="alert alert-danger">Image 3 '.$ci->upload->display_errors().'</div>';
                            
                          }
                          else
                          {
                            $data_feature3 = array('upload_data' => $ci->upload->data());
                            $feature3 =  $data_feature3['upload_data']['file_name'];
                          }
                      }


                      if(isset($_FILES['feature4']['name']))
                      {

                          if ( ! $ci->upload->do_upload('feature4'))
                          {
                            echo '<div class="alert alert-danger">Image 4 '.$ci->upload->display_errors().'</div>';
                            
                          }
                          else
                          {
                            $data_feature4 = array('upload_data' => $ci->upload->data());
                            $feature4 =  $data_feature4['upload_data']['file_name'];
                          }
                      }

                        if(empty($title1) || empty($title2) || empty($title3)  || empty($title4) || empty($info_feature_image_1) || empty($info_feature_image_2) || empty($info_feature_image_3)  || empty($info_feature_image_4)  || empty($info_description_image_1) || empty($info_description_image_2) || empty($info_description_image_3)  || empty($info_description_image_4) )
                        {
                          $this->member_model->saveFeaturedImages($member_id,$featured_title1,$featured_title2,$featured_title3,$featured_title4,$feature1,$feature2,$feature3,$feature4,$description1,$description2,$description3,$description4,'insert');
                           echo '<div class="alert alert-success">Successfully Saved.</div>';
                        }
                        else
                        {
                          $this->member_model->saveFeaturedImages($member_id,$featured_title1,$featured_title2,$featured_title3,$featured_title4,$feature1,$feature2,$feature3,$feature4,$description1,$description2,$description3,$description4,'update');
                           echo '<div class="alert alert-success">Successfully Saved.</div>';
                        }     
                    }
                  }
                  ?>
                </form>
                  </div>
                </div>

                    <div class="panel panel-primary">
                      <div class="panel-heading">
                        <h3 class="panel-title">Colors and Contents</h3>
                      </div>
                      <div class="panel-body">
                         <form class="form-horizontal" role="form" method="post"  enctype="multipart/form-data">

                          <div class="form-group">
                            <label for="color" class="col-sm-4 control-label">Background Color:</label>
                            <div class="col-sm-6">
                              <input type="text" class="form-control" id="background_color" name="background_color" value="<?php echo $info_background_color;?>">
                            </div>
                          </div> 

                          <div class="form-group">
                            <label for="color" class="col-sm-4 control-label">Panel Color:</label>
                            <div class="col-sm-6">
                              <input type="text" class="form-control" id="color" name="color" value="<?php echo $info_font_color;?>">
                            </div>
                          </div> 

                          <h4>Footer Content</h4>

                            <div class="form-group">
                            <label for="color" class="col-sm-4 control-label">Title 1:</label>
                            <div class="col-sm-6">
                              <input type="text" class="form-control" id="footer_title_1" name="footer_title_1" value="<?php echo $footer_title_1;?>">
                            </div>
                          </div> 

                            <div class="form-group">
                              <label for="description4" class="col-sm-4 control-label">Content 1:</label>
                              <div class="col-sm-6">
                                <textarea  class="form-control" id="content1" name="content1"><?php echo $info_footer_content_1;?></textarea>
                              </div>
                            </div>

                              <div class="form-group">
                              <label for="color" class="col-sm-4 control-label">Title 2:</label>
                              <div class="col-sm-6">
                                <input type="text" class="form-control" id="footer_title_2" name="footer_title_2" value="<?php echo $footer_title_2;?>">
                              </div>
                            </div> 

                          <div class="form-group">
                            <label for="description4" class="col-sm-4 control-label">Content 2:</label>
                            <div class="col-sm-6">
                              <textarea  class="form-control" id="content2" name="content2"><?php echo $info_footer_content_2;?></textarea>
                            </div>
                          </div>

                            <div class="form-group">
                            <div class="col-sm-offset-4 col-sm-10">
                            <button type="submit" class="btn btn-primary" name="btn4">Update</button>
                            </div>
                            </div>
                          </form>

                          <?php
                          if(isset($_POST['btn4']))
                          {
                                $color = $this->input->post('color');
                                $background_color = $this->input->post('background_color');
                                
                                $content1 = $this->input->post('content1');
                                $content2 = $this->input->post('content2');


                                $footer_title1 = $this->input->post('footer_title_1');
                                $footer_title2 = $this->input->post('footer_title_2');  

                                if(empty($color) ||empty($background_color) || empty($content1) || empty($content2) ||  empty($footer_title1) ||  empty($footer_title2) )
                                { 
                                 echo '<div class="alert alert-danger">All fields are required.</div>';
                                }
                                else
                                {
                                   $this->member_model->saveColors($member_id,$background_color,$color,$footer_title1,$footer_title2,$content1,$content2,'insert');
                                   echo '<div class="alert alert-success">Successfully Saved.</div>';
                                }  
                          }
                          ?>

                      </div>
                    </div>

              </div>
                 
             
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

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url();?>assets/member/js/sb-admin-2.js"></script>
    <script src="<?php echo base_url();?>assets/colorpicker/jqColorPicker.min.js"></script>
    <script type="text/javascript">
    $('#color').colorPicker(); 
    $('#background_color').colorPicker(); 


    function deletePhoto(image,column)
    {
      var del = confirm("Are you sure you want to delete this image?");

      if(del==true)
      {
        $.ajax({
            type:'POST',
            url:'<?php echo base_url();?>member/delete_image',
            data: {image:image,column:column},
            success: function(response){
              window.location.href="<?php echo base_url();?>member/landing_page/";
            }

        })
      }
      else
      {
        exit();
      }

    }
    </script>
</body>

</html>
