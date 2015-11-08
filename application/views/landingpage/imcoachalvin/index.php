<?php

   $header_image = "";
  $footer_image =  "";
  $youtube_id_1 =  "";
  $youtube_id_2 = "";
  $youtube_id_3 =  "";

  $redirect_image_1 =  "";
  $redirect_image_2 =  "";
  $redirect_link_1 =  "";
  $redirect_link_2 =  "";

  $feature_image_1 =  "";
  $feature_image_2 =  "";
  $feature_image_3 = "";
  $feature_image_4 =  "";

  $description_image_1 =   "";
  $description_image_2 =   "";
  $description_image_3 =   "";
  $description_image_4 =  "";

  $font_color = "";
  $footer_content_1 =  "";
  $footer_content_2 =  "";

  $title1 =   "";
  $title2 =  "";
  $title3 = "";
  $title4 =  "";

  $footer_title_1 =  "";
  $footer_title_2 =  "";

  $text1 =  "";
  $text2 =  "";
  $body_color  = "";
  $video_title  = "";

$username = $this->uri->segment(2);
$members_info = $this->member_model->checkUsername($username);

foreach ($members_info as $value) 
{
  $member_id = $value->member_id;
}

$landing_info = $this->member_model->getLandingPageInfo($member_id);

foreach ($landing_info as $data) 
{
  $header_image = $data->header_image;
  $footer_image = $data->footer_image;
  $video_title = $data->video_title;
  $youtube_id_1 = $data->youtube_id_1;
  $youtube_id_2 = $data->youtube_id_2;
  $youtube_id_3 = $data->youtube_id_3;

  $redirect_image_1 = $data->redirect_image_1;
  $redirect_image_2 = $data->redirect_image_2;
  $redirect_link_1 = $data->redirect_link_1;
  $redirect_link_2 = $data->redirect_link_2;

  $feature_image_1 = $data->feature_image_1;
  $feature_image_2 = $data->feature_image_2;
  $feature_image_3 = $data->feature_image_3;
  $feature_image_4 = $data->feature_image_4;

  $description_image_1 =  $data->description_image_1;
  $description_image_2 =  $data->description_image_2;
  $description_image_3 =  $data->description_image_3;
  $description_image_4 =  $data->description_image_4;

  $body_color = $data->background_color;
  $font_color = $data->font_color;
  $footer_content_1 = $data->footer_content_1;
  $footer_content_2 = $data->footer_content_2;

  $title1 =  $data->title1;
  $title2 = $data->title2;
  $title3 =$data->title3;
  $title4 = $data->title4;

  $footer_title_1 = $data->footer_title_1;
  $footer_title_2 = $data->footer_title_2;

  $text1 = $data->text1;
  $text2 = $data->text2;

}

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Landing Page</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url();?>assets/member/css/bootstrap.min.css" rel="stylesheet">
<style>

.responsive-video {
position: relative;
padding-bottom: 56.25%;
padding-top: 60px; overflow: hidden;
}


.responsive-video iframe,
.responsive-video object,
.responsive-video embed {
position: absolute;
top: 0;
left: 0;

}
#feedback {
  float: left;
  position: fixed;
  top: calc(50% - 47px);
  right: 0;
}

#feedback a {
  background: #FF4500;
  border-radius: 5px 0 0 5px;
  box-shadow: 0 0 3px rgba(0, 0, 0, .3);
  border: 3px solid #fff;
  border-right: 0;
  display: block;
  padding: 20px 12px;
  transition: all .2s ease-in-out;
}

#feedback a:hover {
  padding-right: 20px;
}

</style>
</head>
<body style="background-color:<?php echo $body_color;?>">

            <input type="hidden" name="baseurl" id="baseurl" value="<?php echo base_url();?>" />
          <!---header-->
          <div class="col-md-12" style="height:280px;">
            <img src="<?php echo base_url();?>uploads/<?php echo  $header_image;?>" style="height:280px; width:100%;">
          </div>

          <br />
          <!---main video-->
        
  
          <div class="col-md-8" style="height:500px; ">

           <div class="col-md-12" style="height:40px; font-size:25px;" >
          <?php echo  $video_title;?>
          </div>
          <br />
          <br />

          <div class="responsive-video">

              <iframe width="870" height="460" src="http://www.youtube.com/embed/<?php echo $youtube_id_1;?>" frameborder="0" allowfullscreen></iframe>
          </div>
          </div>

          <!---redirect link 1-->
          <div class="col-md-4"  style="height:40px;"></div>
          <div class="col-md-4"  style="height:230px; ">
               <a href="<?php echo 'http://'.$redirect_link_1;?>" target="_blank"><img src="<?php echo base_url();?>uploads/<?php echo  $redirect_image_1;?>" style="height:220px; width:420px;"><br /></a>
          </div>
          <div class="col-md-4"  style="height:5px;"></div>
         <!---redirect link 2-->
          <div class="col-md-4"  style="height:230px; ">
                <a href="<?php echo 'http://'.$redirect_link_2;?>" target="_blank"><img src="<?php echo base_url();?>uploads/<?php echo  $redirect_image_2;?>" style="height:220px; width:420px;"></a>
          </div>
          <br />

          <div class="col-md-6" style="height:80px; font-size:30px;">
            <?php echo $text1;?>
          </div>

           <div class="col-md-6" style="height:80px; font-size:30px; ">
           <?php echo $text2;?>
          </div>

         <!---video 1-->
          <div class="col-md-6" style="height:400px; ">
              <div class="responsive-video">
                 <iframe width="650" height="390" src="http://www.youtube.com/embed/<?php echo $youtube_id_2;?>" frameborder="0" allowfullscreen></iframe>
              </div>
          </div>

          <!---video 2-->
          <div class="col-md-6" style="height:400px; ">
             <div class="responsive-video">
              <iframe width="650" height="390" src="http://www.youtube.com/embed/<?php echo $youtube_id_3;?>" frameborder="0" allowfullscreen></iframe>
            </div>
          </div>

          <!---feature image 1-->
         <div class="col-md-3" style="height:480px; ">
              <div class="panel panel-default" style="height:480px;">
                <div class="panel-heading" style="background-color:<?php echo $font_color;?>;">
                  <h3 class="panel-title"><?php echo  $title1;?></h3>
                </div>
                <div class="panel-body">

                    <div class="col-sm-6 col-md-12">
                      <div class="thumbnail">
                          <img  alt="300x200" src="<?php echo base_url();?>uploads/<?php echo  $feature_image_1;?>" style="width: 300px; height: 200px;">
                        <div class="caption">
                          <p><?php echo nl2br($description_image_1);?></p>
                         
                        </div>
                      </div>
                    </div>
                </div>
              </div>
         </div>
          <!---feature image 2-->
         <div class="col-md-3" style="height:480px; ">
           <div class="panel panel-default" style="height:480px;">
                <div class="panel-heading" style="background-color:<?php echo $font_color;?>;">
                  <h3 class="panel-title"><?php echo  $title2;?></h3>
                </div>
                <div class="panel-body">
                  <div class="col-sm-6 col-md-12">
                      <div class="thumbnail">
                          <img  alt="300x200" src="<?php echo base_url();?>uploads/<?php echo  $feature_image_2;?>" style="width: 300px; height: 200px;">
                        <div class="caption">
                          <p><?php echo nl2br($description_image_2);?></p>
                         
                        </div>
                      </div>
                    </div>
                </div>
              </div>
         </div>

         <!---feature image 3-->
         <div class="col-md-3" style="height:480px; ">
           <div class="panel panel-default" style="height:480px;">
                <div class="panel-heading" style="background-color:<?php echo $font_color;?>;">
                  <h3 class="panel-title"><?php echo  $title3;?></h3>
                </div>
                <div class="panel-body">
                  <div class="col-sm-6 col-md-12">
                      <div class="thumbnail">
                          <img  alt="300x200" src="<?php echo base_url();?>uploads/<?php echo  $feature_image_3;?>" style="width: 300px; height: 200px;">
                        <div class="caption">
                          <p><?php echo nl2br($description_image_3);?></p>
                         
                        </div>
                      </div>
                    </div>
                </div>
              </div>
         </div>

         <!---feature image 4-->
         <div class="col-md-3" style="height:480px; ">
           <div class="panel panel-default" style="height:480px;">
                <div class="panel-heading" style="background-color:<?php echo $font_color;?>;">
                  <h3 class="panel-title"><?php echo  $title4;?></h3>
                </div>
                <div class="panel-body">
                  <div class="col-sm-6 col-md-12">
                      <div class="thumbnail">
                          <img  alt="300x200" src="<?php echo base_url();?>uploads/<?php echo  $feature_image_4;?>" style="width: 300px; height: 200px;">
                        <div class="caption">
                          <p><?php echo nl2br($description_image_4);?></p>
                         
                        </div>
                      </div>
                    </div>
                </div>
              </div>
         </div>

        <!---footer content 1-->
        <div class="col-md-6" style="height:390px; ">
        <br />
              <div class="panel panel-default" style="height:365px;">
                <div class="panel-heading" style="background-color:<?php echo $font_color;?>;">
                  <h3 class="panel-title"><?php echo $footer_title_1;?></h3>
                </div>
                <div class="panel-body">
                <p><?php echo $footer_content_1;?></p>
                </div>
              </div>
        </div>
          <!---footer content 2-->
        <div class="col-md-6" style="height:390px;">
          <br />
              <div class="panel panel-default" style="height:365px;">
                <div class="panel-heading" style="background-color:<?php echo $font_color;?>;">
                  <h3 class="panel-title"><?php echo $footer_title_2;?></h3>
                </div>
                <div class="panel-body">
                   <p><?php echo $footer_content_2;?></p>
                </div>
              </div>
          <br />
        </div>


        <!---footer-->
       <div class="col-md-12 pills" style="height:280px;">

            <img src="<?php echo base_url();?>uploads/<?php echo  $footer_image;?>" style="height:280px; width:100%;">
       </div>


<div class="modal fade feedback-modal" id="feedback-modal" tabindex="-1" role="dialog" aria-labelledby="feedback-modal"
     aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">

      <form id="feedback-form" method="post" autocomplete="off">

        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                    aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Contact Us</h4>
        </div>

        <div class="modal-body">
            <div class="form-group">
            <input type="hidden" class="form-control" name="member_id" id="member_id" value="<?php echo $member_id;?>" />
              <input type="text" class="form-control" name="email" id="email"
                     placeholder="Your email" required/>

            </div>
          <div class="form-group">
            <input type="text" class="form-control" name="your_name" id="your_name" autocomplete="off" placeholder="Your Name" required/>      
          </div>

          <div class="form-group">
            <input type="text" class="form-control" name="number" id="number" autocomplete="off" placeholder="Your Phone Number" required/>      
          </div>

          <div class="form-group">
          <textarea name="message" id="message" cols="30" rows="10"
                    placeholder="Your message" required="required" class="form-control"></textarea>
          </div>
          <br />
          <div id="loading"></div>
          <div id="send-response"></div>
        </div>
        <div class="modal-footer">
          <button type="reset" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="button" onclick="sends()" class="btn btn-primary">Send</button>
        </div>
      </form>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div><!-- /.modal -->

<div id="feedback">
  <a href="#" data-toggle="modal" data-target="#feedback-modal">
    <img src="<?php echo base_url();?>/assets/images/contact_button_vertical_text.png" alt="Feedback" title="Contact Button" height="70px"/>
  </a>
</div>



    <!-- jQuery Version 1.11.0 -->
    <script src="<?php echo base_url();?>assets/member/js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url();?>assets/member/js/bootstrap.min.js"></script>
    <script type="text/javascript">

      function sends()
      {

        var email = $('#email').val(); 
        var your_name = $('#your_name').val(); 
        var message = $('#message').val(); 
        var member_id = $('#member_id').val(); 
        var number = $('#number').val(); 
        var baseurl = $('#baseurl').val();

        $.ajax({
          type: 'POST',
          url:''+baseurl+'member/send_message',
          data:'email='+email+'&your_name='+your_name+'&message='+message+'&number='+number+'&member_id='+member_id,
          beforeSend: function(){
            $('#send-response').html('');
            $('#loading').html('Please wait...').show();
          },
          success: function(response){
              if(response==1)
              {
                $('#loading').html('Please wait...').hide();
                $('#send-response').html('<div class="alert alert-danger">All fields are required.</div>').fadeIn('fast').fadeOut(5000);
              }
              else
              { 
                $('#loading').html('Please wait...').hide();
                $('#send-response').html(response);
                $('#feedback-form')[0].reset();
              }
          }

        })
      }

    </script>
</body>

</html>