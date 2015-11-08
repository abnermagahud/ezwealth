<?php


class Member extends CI_Controller{

	
	
	function _remap($method,$args)
	{
	
		if (method_exists($this, $method))
		{
			$this->$method($args);
		}
		else
		{
			$this->index($method,$args);
		}
	
	}

	/*public function _remap($method, $params = array())
	{
	    if(method_exists($this, $method))
	    {
	        return call_user_func_array(array($this, $method), $params);
	    }
	    else
	    {
	        $method = str_replace("-", "_", $method);
	        if(method_exists($this, $method))
	        {
	            return call_user_func_array(array($this, $method), $params);
	        }

	    }
	    show_404();
	}*/
	
	
	public function index($username=FALSE)
	{
	
		$this->load->model('member_model');
		$page = $this->uri->segment(3);

   
		if($username==FALSE)
		{
			if(!$this->session->userdata('member_id'))
			{
				$location = base_url();
				redirect($location);
			}

			$member_id = $this->session->userdata('member_id');
			$data['member'] = $this->member_model->getMember($member_id);
			$data['announcements'] = $this->member_model->getAnnouncement();
			$this->load->view('member/dashboard',$data);
			
		}
		else
		{
			$data['members_info'] = $this->member_model->checkUsername($username);
			$checkUsername = $this->member_model->checkUsername($username);
		
			foreach($checkUsername as $details)
			{
				$has_website = $details->has_website;
				$memberid = $details->member_id;
				$subscription  = $details->subscription;
			}
			
			if(isset($has_website) && $has_website==0)
			{
				show_404();
				
			}
			else
			{
				
				
				if(empty($checkUsername))
				{
					show_404();
					
				}
				else
				{
				
					$data['members'] = $this->member_model->checkUsername($username);	

					if($page=="about_us")
					{
						$this->load->view('member/pages/about_us',$data);
					}
					else if($page=="products")
					{
						$this->load->view('member/pages/products',$data);
					}
					else if($page=="affiliate")
					{
						$this->load->view('member/pages/affiliate',$data);
					}
					else if($page=="faq")
					{
						$this->load->view('member/pages/faq',$data);
					}
					else if($page=="contact_us" || $page=="contact-us" )
					{
						$this->load->view('member/pages/contact_us',$data);
					}
					else if($page=="join_now" || $page=="join-now")
					{
						$this->load->view('member/pages/join_now',$data);
					}
					else if($page=="amaze")
					{

						$getPrimaryCapturePage = $this->member_model->getPrimaryCapturePage($memberid,$page);
						
						foreach($getPrimaryCapturePage as $capture)
						{
							$status =  $capture->status;
						}

						if(empty($status))
						{
							show_404();
						}
						else
						{

							$this->load->view('capture_pages/'.$username.'/amaze/index.php',$data);
						}

					}
					else if($page=="beauty")
					{

						$getPrimaryCapturePage = $this->member_model->getPrimaryCapturePage($memberid,$page);
						
						foreach($getPrimaryCapturePage as $capture)
						{
							$status =  $capture->status;
						}

						if(empty($status))
						{
							show_404();
						}
						else
						{

							$this->load->view('capture_pages/'.$username.'/beauty/index.php',$data);
						}

					}
					else if($page=="carman")
					{
						$getPrimaryCapturePage = $this->member_model->getPrimaryCapturePage($memberid,$page);
						
						foreach($getPrimaryCapturePage as $capture)
						{
							$status =  $capture->status;
						}

						if(empty($status))
						{
							show_404();
						}
						else
						{

							$this->load->view('capture_pages/'.$username.'/carman/index.php',$data);
								}
					}
					else if($page=="coffee")
					{
						$getPrimaryCapturePage = $this->member_model->getPrimaryCapturePage($memberid,$page);
						
						foreach($getPrimaryCapturePage as $capture)
						{
							$status =  $capture->status;
						}

						if(empty($status))
						{
							show_404();
						}
						else
						{

							$this->load->view('capture_pages/'.$username.'/coffee/index.php',$data);
						}
					}
					else if($page=="money")
					{

						$getPrimaryCapturePage = $this->member_model->getPrimaryCapturePage($memberid,$page);
						
						foreach($getPrimaryCapturePage as $capture)
						{
							$status =  $capture->status;
						}

						if(empty($status))
						{
							show_404();
						}
						else
						{

							$this->load->view('capture_pages/'.$username.'/money/index.php',$data);
						}
					}
					else if($page=="real")
					{

						$getPrimaryCapturePage = $this->member_model->getPrimaryCapturePage($memberid,$page);
						
						foreach($getPrimaryCapturePage as $capture)
						{
							$status =  $capture->status;
						}

						if(empty($status))
						{
							show_404();
						}
						else
						{

							$this->load->view('capture_pages/'.$username.'/real/index.php',$data);
						}

					}
					else if($page=="secret")
					{
						$getPrimaryCapturePage = $this->member_model->getPrimaryCapturePage($memberid,$page);
						
						foreach($getPrimaryCapturePage as $capture)
						{
							$status =  $capture->status;
						}

						if(empty($status))
						{
							show_404();
						}
						else
						{

							$this->load->view('capture_pages/'.$username.'/secret/index.php',$data);
						}

					}
					else if($page=="aff")
					{
						$getPrimaryCapturePage = $this->member_model->getPrimaryCapturePage($memberid,$page);
						
						foreach($getPrimaryCapturePage as $capture)
						{
							$status =  $capture->status;
						}

						if(empty($status))
						{
							show_404();
						}
						else
						{

							$this->load->view('capture_pages/'.$username.'/affiliate/index.php',$data);
						}

					}
					else if($page=="aim")
					{			
						$getPrimaryCapturePage = $this->member_model->getPrimaryCapturePage($memberid,$page);
						
						foreach($getPrimaryCapturePage as $capture)
						{
							$status =  $capture->status;
						}

						if(empty($status))
						{
							show_404();		
						}
						else
						{
							$this->load->view('capture_pages/'.$username.'/aim/index.php');
						}

					}
					else if($page=="biogreen")
					{			
						$getPrimaryCapturePage = $this->member_model->getPrimaryCapturePage($memberid,$page);
						
						foreach($getPrimaryCapturePage as $capture)
						{
							$status =  $capture->status;
						}

						if(empty($status))
						{
							show_404();
						}
						else
						{
							$this->load->view('capture_pages/'.$username.'/biogreen/index.php');
						}
					}
					else if($page=="bwl")
					{			
						$getPrimaryCapturePage = $this->member_model->getPrimaryCapturePage($memberid,$page);
						
						foreach($getPrimaryCapturePage as $capture)
						{
							$status =  $capture->status;
						}
							
						if(empty($status))
						{
							show_404();
						}
						else
						{
							$this->load->view('capture_pages/'.$username.'/bwl/index.php');
						}

					}
					else if($page=="dxn")
					{			
						$getPrimaryCapturePage = $this->member_model->getPrimaryCapturePage($memberid,$page);
						
						foreach($getPrimaryCapturePage as $capture)
						{
							$status =  $capture->status;
						}
							if(empty($status))
							{
								show_404();
							}
							else
							{
								$this->load->view('capture_pages/'.$username.'/dxn/index.php');
							}

					}
					else if($page=="ezwealth")
					{			
						$getPrimaryCapturePage = $this->member_model->getPrimaryCapturePage($memberid,$page);
						
						foreach($getPrimaryCapturePage as $capture)
						{
							$status =  $capture->status;
						}

						if(empty($status))
						{
							show_404();
						}
						else
						{
							$this->load->view('capture_pages/'.$username.'/ezwealth/index.php');
						}

					}
					else if($page=="gfox")
					{			
						$getPrimaryCapturePage = $this->member_model->getPrimaryCapturePage($memberid,$page);
						
						foreach($getPrimaryCapturePage as $capture)
						{
							$status =  $capture->status;
						}

						if(empty($status))
						{
							show_404();
						}
						else
						{
							$this->load->view('capture_pages/'.$username.'/gfox/index.php');
						}

					}
					else if($page=="goldlife")
					{			
							$getPrimaryCapturePage = $this->member_model->getPrimaryCapturePage($memberid,$page);
						
						foreach($getPrimaryCapturePage as $capture)
						{
							$status =  $capture->status;
						}

						if(empty($status))
						{
						show_404();
						}
						else
						{
							$this->load->view('capture_pages/'.$username.'/goldlife/index.php');
						}
					}
					else if($page=="organo")
					{			
						$getPrimaryCapturePage = $this->member_model->getPrimaryCapturePage($memberid,$page);
						
						foreach($getPrimaryCapturePage as $capture)
						{
							$status =  $capture->status;
						}

						if(empty($status))
						{
							show_404();
						}
						else
						{
							$this->load->view('capture_pages/'.$username.'/organo/index.php');
						}

					}
					else if($page=="royale")
					{			
						$getPrimaryCapturePage = $this->member_model->getPrimaryCapturePage($memberid,$page);
						
						foreach($getPrimaryCapturePage as $capture)
						{
							$status =  $capture->status;
						}

						if(empty($status))
						{
							show_404();
						}
						else
						{
							$this->load->view('capture_pages/'.$username.'/royale/index.php');
						}

					}
					else if($page=="sante")
					{			
						$getPrimaryCapturePage = $this->member_model->getPrimaryCapturePage($memberid,$page);
						
						foreach($getPrimaryCapturePage as $capture)
						{
							$status =  $capture->status;
						}
						if(empty($status))
						{
							show_404();
						}
						else
						{
							$this->load->view('capture_pages/'.$username.'/sante/index.php');
						}
					}
					else if($page=="tpc")
					{			
						$getPrimaryCapturePage = $this->member_model->getPrimaryCapturePage($memberid,$page);
						
						foreach($getPrimaryCapturePage as $capture)
						{
							$status =  $capture->status;
						}

						if(empty($status))
						{
							show_404();
						}
						else
						{
							$this->load->view('capture_pages/'.$username.'/tpc/index.php');
						}

					}
					else if($page=="unoprime")
					{			
						$getPrimaryCapturePage = $this->member_model->getPrimaryCapturePage($memberid,$page);
						
						foreach($getPrimaryCapturePage as $capture)
						{
							$status =  $capture->status;
						}

						if(empty($status))
						{
							show_404();
						}
						else
						{
							$this->load->view('capture_pages/'.$username.'/unoprime/index.php');
						}
					}
					else if ($page=="landingpage") 
					{
						if($subscription == "premium")
						{
							$this->load->view('landingpage/'.$username.'/index.php');
						}
						else
						{
							show_404();
						}

					
					}
					else
					{
						if($page==true)
						{
							show_404();
						}
						else
						{
							$this->load->view('member/members_homepage',$data);	
						}
					
					}
				
				}	
			
			}
		
		}
	
	}
		
	public function sends()
	{

		$this->load->library('mylibrary');
		  
		$getresponse = new GetResponse('121c39da1b05439f9c801642d6bc6b2b');
		$company_campaigns 	 = (array)$getresponse->getCampaigns();
		$company_campaignname = $company_campaigns['VfTxT']->name;
		$company_campaign_id = $getresponse->getCampaignByName($company_campaignname);
		  
		  
		$this->load->model('member_model');	
		$email_add = $this->input->post('email');
		$member_id = $this->input->post('member_id');
		$capture_page_id = $this->input->post('capture_page_id');
		$contact_num = $this->input->post('contact_num');

		
		if(empty($email_add))
		{
			echo 1;
		}
		else
		{
				
			if (!filter_var($email_add, FILTER_VALIDATE_EMAIL) === false) 
			{
					
				$getMember = $this->member_model->getMember($member_id);

				foreach($getMember as $member)
				{
					$get_response_key = $member->get_response_key;
				}	

				if(empty($get_response_key))
				{

					echo 3;
				}
				else
				{
					$api = new GetResponse($get_response_key);
					$getMemberCpage = $this->member_model->getMemberCpage($member_id,$capture_page_id);	

					foreach($getMemberCpage as $details)
					{
						$redirect_url = $details->redirect_url;
						$campaign_name = $details->campaign_name;
					}


					$campaign_id = $api->getCampaignByName($campaign_name);

					$api->addContact($campaign_id, 'Guest', $email_add, $action = 'standard', $cycle_day = 0, $customs = array());
					$getresponse->addContact($company_campaign_id, 'Guest', $email_add, $action = 'standard', $cycle_day = 0, $customs = array());
					$this->member_model->setCapturePageLeads($member_id,$email_add,$contact_num);
					
					if(empty($redirect_url) )
					{
						echo 2;
						//echo 'Success. An email has been sent your email.';
					}
					else
					{

						echo $redirect_url;
					}
				}

			}
			else
			{
				echo 4;
				//echo 'Invalid email address';
			}
		}
			
	}
		
	public function payments()
	{
		$this->load->model('member_model');	

		if(!$this->session->userdata('member_id'))
		{

			$location = base_url();
			redirect($location);
		}

		$member_id = $this->session->userdata('member_id');
		$data['member'] = $this->member_model->getMember($member_id);
		$data['payment_status'] = $this->member_model->getStatusPayment($member_id);
		$data['announcements'] = $this->member_model->getAnnouncement();
		$this->load->view('member/payments',$data);
	}
		
	public function capture_page()
	{
		$this->load->model('member_model');	

		if(!$this->session->userdata('member_id'))
		{
			$location = base_url();
			redirect($location);
		}

		$member_id = $this->session->userdata('member_id');
		$data['member'] = $this->member_model->getMember($member_id);
		$data['announcements'] = $this->member_model->getAnnouncement();
		$data['capturepages'] = $this->member_model->getCapturePage($member_id);
		$data['getresponsereferrer'] =  $this->member_model->getReferrerResponse($member_id);
		$username = $this->session->userdata('username');
	
		$path ="application/views/capture_pages/$username";

	    if(!is_dir($path)) //create the folder if it's not already exists
	    {	
		    /*mkdir($path,0777,TRUE);
			$source = "assets/capture_page_html";
			$dest = APPPATH."views/capture_pages/$username";
			
		 	$this->recurse_copy($source,$dest);*/

		 	mkdir($path,0777,TRUE);
			$source = "assets/new-capture-page-html";
			$dest = APPPATH."views/capture_pages/$username";
			
		 	$this->recurse_copy($source,$dest);

	    }
	
		$this->load->view('member/capture_page',$data);
	}	
		
	public function landing_page()
	{
		$this->load->model('member_model');	

		if(!$this->session->userdata('member_id'))
		{
			$location = base_url();
			redirect($location);
		}

		$member_id = $this->session->userdata('member_id');
		$data['member'] = $this->member_model->getMember($member_id);
		$data['announcements'] = $this->member_model->getAnnouncement();
		$data['landingpage'] = $this->member_model->getLandingPageInfo($member_id);
		$username = $this->session->userdata('username');
		$path ="application/views/landingpage/$username";

	    if(!is_dir($path)) //create the folder if it's not already exists
	    {
		 	mkdir($path,0777,TRUE);
			$source = "assets/landing-page";
			$dest = APPPATH."views/landingpage/$username";
		 	$this->recurse_copy($source,$dest);
	    }

			$this->load->view('member/landing_page',$data);
	}	
		
	public function referrals()
	{
		$this->load->model('member_model');	

		if(!$this->session->userdata('member_id'))
		{
			$location = base_url();
			redirect($location);
		}

		$member_id = $this->session->userdata('member_id');
		$data['member'] = $this->member_model->getMember($member_id);
		$data['inactives'] = $this->member_model->getInactiveReferrals($member_id);
		$data['actives'] = $this->member_model->getActiveReferrals($member_id);
		$data['announcements'] = $this->member_model->getAnnouncement();

		$this->load->view('member/referrals',$data);
	}	
		
	public function e_wallet()
	{
		$this->load->model('member_model');	

		if(!$this->session->userdata('member_id'))
		{
			$location = base_url();
			redirect($location);
		}

		$member_id = $this->session->userdata('member_id');
		$data['member'] = $this->member_model->getMember($member_id);
		$data['transfer_report'] = $this->member_model->getTransferCredit($member_id);
		$data['mywallet'] = $this->member_model->getEwallet($member_id);
		$data['announcements'] = $this->member_model->getAnnouncement();
		$data['transfer_history'] = $this->member_model->getTransferByMemberId($member_id);
		$data['banks'] = $this->member_model->getBank($member_id);
		$data['senders'] = $this->member_model->getSender($member_id);
		$data['receivers'] = $this->member_model->getReceiver($member_id);

		$this->load->view('member/ewallet',$data);
	}
		
	public function leads()
	{
		$this->load->model('member_model');	

		if(!$this->session->userdata('member_id'))
		{
			$location = base_url();
			redirect($location);
		}

		$member_id = $this->session->userdata('member_id');
		$data['member'] = $this->member_model->getMember($member_id);
		$data['leads'] = $this->member_model->getLeadsById($member_id);
		$data['announcements'] = $this->member_model->getAnnouncement();

		$this->load->view('member/leads',$data);
		
	}
		
	public function update_info()
	{
		$this->load->model('member_model');	
		
		if(!$this->session->userdata('member_id'))
		{
			$location = base_url();
			redirect($location);
		}

		$member_id = $this->session->userdata('member_id');
		$data['member'] = $this->member_model->getMember($member_id);
		$data['bank_accounts'] = $this->member_model->getBankAccounts($member_id);
		$data['email_paypal'] = $this->member_model->getPaypal($member_id);
		$data['announcements'] = $this->member_model->getAnnouncement();
		$data['referrer_data'] = $this->member_model->getReferrerName($member_id);
		$data['getBankById'] = $this->member_model->getBankByMemberId($member_id);
		$this->load->view('member/update_info',$data);
	}	
		
	public function online_training()
	{

		$this->load->model('member_model');	

		if(!$this->session->userdata('member_id'))
		{
			$location = base_url();
			redirect($location);
		}

	$member_id = $this->session->userdata('member_id');
	$data['member'] = $this->member_model->getMember($member_id);
	$data['announcements'] = $this->member_model->getAnnouncement();
	$this->load->view('member/online_training',$data);
	}	

	public function logout()
	{
		
		$array_items = array(
		   'member_id'   => $member_id,
	       'username'  => $username,                 
	    );

		$this->session->unset_userdata($array_items);
		$location = base_url();
		redirect($location );
		
	}		
		
	public function change_password()
	{
		$this->load->model('member_model');
			
		$old_password = $this->input->post('old_password');
		$new_password = $this->input->post('new_password');
		$retype_password = $this->input->post('retype_password');	
		$member_id = $this->input->post('member_id');

		if(empty($old_password) || empty($new_password) || empty($retype_password))
		{
			echo '<div class="alert alert-danger">All fields are required</div>';
		}
		else
		{
			$get_password = $this->member_model->getPassword($member_id,$old_password);

			if($get_password==0)
			{
				echo '<div class="alert alert-danger">Old password is incorrect</div>';
			}
			else
			{
				if($new_password!=$retype_password)
				{
					echo '<div class="alert alert-danger">Password did not match.</div>';
				}
				else
				{
								
					$this->member_model->updatePassword($member_id,$retype_password);
					echo '<div class="alert alert-success">Successfully changed.</div>';
				}
						
			}
		}
	}
	
	function delete_account()
	{
		$this->load->model('member_model');
		$member_id =	$this->session->userdata('member_id');
		$bank_account_id = $this->input->get('bank_account_id');
		$this->member_model->deleteAccount($bank_account_id);
		$this->member_model->updateAccountNumber($member_id);
	}
		
	function paypal()
	{
		$this->load->model('member_model');
		$member_id = $this->input->post('member_id');	
		$paypal_email = $this->input->post('paypal');
		
				
		$getPaypal = $this->member_model->checkPaypal($member_id);
		if($getPaypal==0)
		{
			$this->member_model->setPaypal($member_id,$paypal_email);
			echo '<div class="alert alert-success">Updated</div>';
		}
		else
		{
			$this->member_model->updatePaypal($member_id,$paypal_email);
			echo '<div class="alert alert-success">Updated</div>';
					
		}
		
	}
		
	function add_bank()
	{
		
		$this->load->model('member_model');
		$member_id = $this->input->post('member_id');
		$bank_name = $this->input->post('bank_name');	
		$account_name = $this->input->post('account_name');
		$account_number = $this->input->post('account_number');
		
		if(empty($bank_name) || empty($account_name) || empty($account_number))
		{
			echo 1;
			//echo '<div class="alert alert-danger">All fields are required</div>';
		}
		else
		{
				
			$this->member_model->setAccount($member_id,$bank_name,$account_name,$account_number);
			echo '<div class="alert alert-success">Successfully Added.</div>';
		}
		
	}
		
	public function pay()
	{

		 $this->load->model('member_model');
		 $this->load->model('admin_model');

		 $member_id = $this->session->userdata('member_id');
		 $referrer_id = $this->admin_model->getReferrer($member_id);

		 $CheckboxGroup1 		= $this->input->post('CheckboxGroup1');
		 
		 $payment_mode 		    = $this->input->post('payment_mode');
		 $processor 			= $this->input->post('processor');
		 $reference_no 			= $this->input->post('reference_no');
		 $sender_notes 			= $this->input->post('sender_notes');
		 $senders_name 			= $this->input->post('senders_name');

		if ( isset( $_FILES["proof_of_payment"] ) && !empty( $_FILES["proof_of_payment"]["name"] ) ) 
		{
			$proof_of_payment 		= $_FILES['proof_of_payment']['name']; 
			$temp_name 		= $_FILES['proof_of_payment']['tmp_name']; 
		}

	
		switch ($CheckboxGroup1) 
		{
			case 'basic':
				$price = 1000;
				break;

			case 'premium':
				$price = 2500;
				break;
			case '6_months_extension':
				$price = 1500;
				break;

			case '1_year_extension':
				$price = 2000;
				break;

			case 'bundle':
				$price = 500;
				break;
			
		}

		if($payment_mode=="ecredit")
		{

		$amount1 			= $this->input->post('amount');
		$amount = str_replace(',', '',  $amount1);

		if(empty($CheckboxGroup1) || empty($payment_mode) || empty($amount) )
		{
			echo '<div class="alert alert-danger">All fields are required</div>';
		}
		else
		{
			$getMember = $this->member_model->getMember($member_id);

			foreach ($getMember as $value) 
			{
				$ecredit_balance = $value->ecredit_balance;
			}

			if($amount!=$price)
			{
				echo '<div class="alert alert-danger"><strong>Error!</strong> Insufficient Funds.</div>';
			}
			else
			{

				if(!is_numeric($amount))
				{
					echo '<div class="alert alert-danger"><strong>Error!</strong> Please type number only.</div>';
				}
				else
				{

					if($amount>$ecredit_balance)
					{
						echo '<div class="alert alert-danger"><strong>Error!</strong> Insufficient Funds.</div>';
					}
					else
					{

						if($amount<0)
						{
							echo '<div class="alert alert-danger"><strong>Error!</strong> Invalid amount.</div>'; 
						}
						else
						{

						 	$getMember = $this->member_model->getMember($member_id);
							 
							foreach($getMember as $member)
							{
								 $email = $member->email;
								 $lname = $member->lastname;
								 $fname = $member->firstname;
								 $fullname = $fname.' '.$lname;
							}


							$to      =  $email;
							$subject = 'Processing your payment';
							$message = "Hi ".$fullname .",\r\n\r\n\r\nWe are now processing your payment transaction. Make sure you have entered the right information.\r\n\r\nWe will notify you via email regarding your transaction status. Expect the notification in the next 24 – 48 hours.\r\n\r\n\r\nThank you!\r\n\r\n\r\nEZwealth System\r\n\r\n\r\nFor any questions you can email us at our support center here: support@ezwealthpages.com";
							$headers = 'From: Customer Service<customerservice@ezwealthpages.com>' . "\r\n" .
							    'Reply-To: customerservice@ezwealthpages.com' . "\r\n" .
							    'X-Mailer: PHP/' . phpversion();

				
							if(!mail($to, $subject, $message, $headers))
							{
								echo 'Message Sending Failed';
							}
							else
							{

								$product = $CheckboxGroup1;
										
								$this->admin_model->setMemberCommission($member_id,$referrer_id,$product,$amount);
								$this->admin_model->insertAmmountToMember($referrer_id,$amount);
								$this->member_model->setPaymentUsingCredit($member_id,$CheckboxGroup1,$payment_mode);
								$this->member_model->updateEcreditBalance($member_id,$amount);
								
								if($CheckboxGroup1=="basic")
								{
									 $subscription = "basic";
									 $this->member_model->setSubscription($member_id,$subscription);
									 $this->member_model->setLimit($member_id,$subscription);

								}
								else if($CheckboxGroup1=="premium")
								{
									$subscription = "premium";
									$this->member_model->setSubscription($member_id,$subscription);
									$this->member_model->setLimit($member_id,$subscription);

								}

								echo 2;

							}

						}
					
					}
				
				}
			
			}
		
		}

	}
	else if($payment_mode=="over-the-counter")
	{
		$date 	= $this->input->post('date');

		if(empty($CheckboxGroup1)  || empty($payment_mode) || empty($date) || empty($sender_notes) || empty($senders_name) )
		{
			echo '<div class="alert alert-danger">All fields are required</div>';
		}
		else
		{

			$getMember = $this->member_model->getMember($member_id);
			 
			foreach($getMember as $member)
			{
				 $email = $member->email;
				 $lname = $member->lastname;
				 $fname = $member->firstname;
				 $fullname = $fname.' '.$lname;
			}


			$to      =  $email;
			$subject = 'Processing your payment';
			$message = "Hi ".$fullname .",\r\n\r\n\r\nWe are now processing your payment transaction. Make sure you have entered the right information.\r\n\r\nWe will notify you via email regarding your transaction status. Expect the notification in the next 24 – 48 hours.\r\n\r\n\r\nThank you!\r\n\r\n\r\nEZwealth System\r\n\r\n\r\nFor any questions you can email us at our support center here: support@ezwealthpages.com";
			$headers = 'From: Customer Service<customerservice@ezwealthpages.com>' . "\r\n" .
			    'Reply-To: customerservice@ezwealthpages.com' . "\r\n" .
			    'X-Mailer: PHP/' . phpversion();
		
			mail($to, $subject, $message, $headers);
			
			$this->member_model->setPaymentOverTheCounter($member_id,$CheckboxGroup1,$payment_mode,$date,$senders_name,$sender_notes);
		
			if($CheckboxGroup1=="basic")
			{
				 $subscription = "basic";
				 $this->member_model->setSubscription($member_id,$subscription);
			}
			else if($CheckboxGroup1=="premium")
			{
				$subscription = "premium";
				$this->member_model->setSubscription($member_id,$subscription);
					 
			}

			echo '<script>window.location.reload();</script>';
			
		}

	}
	else
	{

			if(empty($CheckboxGroup1) || empty($payment_mode) || empty($processor) || empty($reference_no) || empty($sender_notes) || empty($senders_name) || empty($proof_of_payment) )
			{
				//echo 1;
				echo '<div class="alert alert-danger">All fields are required</div>';
			}
			else
			{

				if(file_exists('uploads/'.$proof_of_payment)){
					
					echo '<div class="alert alert-danger">Image name is already exist.</div>';

				}
				else
				{
				
					$config['upload_path'] = './uploads/';
					$config['allowed_types'] = 'gif|jpg|png';
					$config['max_size']  = '1024';// in kb
					$config['overwrite'] = TRUE;
		
					$this->load->library('upload', $config);
					
					if ( ! $this->upload->do_upload('proof_of_payment'))
					{
						echo '<div class="alert alert-danger">'.$this->upload->display_errors().'</div>';
						
					}
					else
					{

						$data = array('upload_data' => $this->upload->data());

						$file = $data['upload_data']['file_name'];
						$getMember = $this->member_model->getMember($member_id);
							 
							foreach($getMember as $member)
							{
								 $email = $member->email;
								 $lname = $member->lastname;
								 $fname = $member->firstname;
								 $fullname = $fname.' '.$lname;
							}


						$to      =  $email;
						$subject = 'Processing your payment';
						$message = "Hi ".$fullname .",\r\n\r\n\r\nWe are now processing your payment transaction. Make sure you have entered the right information.\r\n\r\nWe will notify you via email regarding your transaction status. Expect the notification in the next 24 – 48 hours.\r\n\r\n\r\nThank you!\r\n\r\n\r\nEZwealth System\r\n\r\n\r\nFor any questions you can email us at our support center here: support@ezwealthpages.com";
						$headers = 'From: Customer Service<customerservice@ezwealthpages.com>' . "\r\n" .
						    'Reply-To: customerservice@ezwealthpages.com' . "\r\n" .
						    'X-Mailer: PHP/' . phpversion();

			
						if(!mail($to, $subject, $message, $headers))
						{
							echo 'Message Sending Failed';
						}
						else
						{

							$this->member_model->setPayment($member_id,$CheckboxGroup1,$payment_mode,$processor,$reference_no,$senders_name,$sender_notes,$file);
					
							if($CheckboxGroup1=="basic")
							{
								 $subscription = "basic";
								 $this->member_model->setSubscription($member_id,$subscription);
							}
							else if($CheckboxGroup1=="premium")
							{
								$subscription = "premium";
								$this->member_model->setSubscription($member_id,$subscription);
							}
							echo 1;
					 				
						}
					}
				}
			}
		}
	}

	public function exportToExcel()
	{

		require APPPATH."/third_party/exportxlsclass.php";

		$this->load->model('member_model');
		$member_id = $this->session->userdata('member_id');
		$leads = $this->member_model->getLeadsById($member_id);
		$filename = "leads.xls";
		$xls = new ExportXLS($filename);
		  
		$header[] = "#";
		$header[] = "Email";
		$header[] = "Contact Number";

		$xls->addHeader($header);

	    if(!empty($leads))
	    {
			 $counter1 = 1;
			$row = array();
		    foreach($leads as $leading)
		    {
			  
			   $data_email = $leading->email;
			   $data_contact_num = $leading->contact_num;
			   
				$row[] = array(
					0 => $counter1++,
					1 => $data_email,
					2 => $data_contact_num
				);
			}
			 
			$xls->addRow($row);	  
			$xls->sendFile();   
		 }
	   
	}
			
	public function landing_instantaccess()
	{

		$this->load->model('member_model');
		$this->load->library('mylibrary');

		$api = new GetResponse('121c39da1b05439f9c801642d6bc6b2b');
		$campaigns 	 = (array)$api->getCampaigns();
		$company_campaignname = $campaigns['VfTxT']->name;
		$campaign_id = $api->getCampaignByName($company_campaignname);

		$member_id 	= $this->input->post('member_id');
		$email		= $this->input->post('email');
		$contact    = $this->input->post('contact');
		
		if(empty($email) || empty($contact))
		{
			echo '<div class="alert alert-danger">Please enter your email and contact number</div>';
		}
		else
		{
	
			if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) 
			{
							
				$to      = $email;
				$subject = 'EZwealthsystem::Information';
				$message = "Hello!\r\n\r\n\r\nThank you for visiting ".base_url()."\r\n\r\nWe have received your request for EZwealth System Instant Access.You will be receiving free information how you can successfully build a business on the internet.You will be able to unsubscribe at anytime. \r\n\r\nIf you have received this email in error and do not intend to join our list, no further action is required on your part.\r\n\r\n---------EZwealthsystem";

				$headers = 'From: Customer Service<customerservice@ezwealthpages.com>' . "\r\n" .
				    'Reply-To: customerservice@ezwealthpages.com' . "\r\n" .
				    'X-Mailer: PHP/' . phpversion();

				if(!mail($to, $subject, $message, $headers))
				{
					echo '<div class="alert alert-danger">Message Sending Failed</div>';
				}
				else
				{
					$api->addContact($campaign_id, 'Guest', $email, $action = 'standard', $cycle_day = 0, $customs = array());
					$this->member_model->setLeads($member_id,$email,$contact);
					echo 1;
						
				}

			}
			else
			{
				echo '<div class="alert alert-danger">Invalid email address.</div>';
			}
		}
	}
		
	public function withdrawal()
	{
	
		$this->load->model('member_model');
		$member_id = $this->session->userdata('member_id');
		 
		$transfer_mode    = $this->input->post('transfer_mode');
		$processor   	   = $this->input->post('processor');
		$amount           = $this->input->post('amount');
		$available_amount = $this->input->post('available');
		$account_num = explode(',',$processor);
		$bank_name =  $account_num[0];
		$account_name =  $account_num[1];
	 
		if(empty($transfer_mode) || empty($processor) ||empty($amount) )
		{
			echo '<div class="alert alert-danger">All fields are required.</div>';
		}
		else
		{
				 
			
			if(!is_numeric($amount))
			{
				echo '<div class="alert alert-danger"><strong>Error!</strong> Please type number only.</div>';
			}
			else
			{
				if($amount<0)
				{
					echo '<div class="alert alert-danger"><strong>Error!</strong> Invalid amount.</div>'; 
				}
				else
				{
					if($amount>$available_amount)
					{
					 	echo '<div class="alert alert-danger"><strong>Error!</strong> Insufficient Funds.</div>';
					}
					else
					{
		
						$this->member_model->setTransfer($member_id,$transfer_mode,$bank_name,$account_name,$amount); 
						$this->member_model->updateAmount($member_id,$amount);
						echo 1;
				 			//echo '<div class="alert alert-success">Your request is being processed.</div>';	 
					}
				
				}
			
			}
		
		}
	 
	}


	public function createaccount()
	{
		$this->load->model('main_model');
		$this->load->library('mylibrary');

		$getresponse = new GetResponse('121c39da1b05439f9c801642d6bc6b2b');
		$company_campaigns 	 = (array)$getresponse->getCampaigns();
		$company_campaignname = $company_campaigns['VfTxT']->name;
		$company_campaign_id = $getresponse->getCampaignByName($company_campaignname);
	
		$fname = $this->input->post('fname');
		$lname = $this->input->post('lname');
		$mobile_num = $this->input->post('mobile_num');
		$fullname = $fname.' '.$lname;
		$email_add = $this->input->post('email_add');
		$uname = $this->input->post('uname');
		$referrer_id = $this->input->post('referrer_id');
		$create_password = $this->input->post('create_password');
		$retype_password = $this->input->post('retype_password');
		$referred_by = $this->input->post('referred_by');
		$referred = $this->input->post('referred');

		if(empty($fname) || empty($lname)  || empty($mobile_num) || empty($email_add) || empty($uname) || empty($create_password) || empty($retype_password))
		{
			
			echo '<div class="alert alert-danger">All fields must be fill in</div>';
		}
		else
		{
			if($create_password!=$retype_password)
			{
				echo '<div class="alert alert-danger">Error! Password did not match.</div>';
			}
			else
			{
					
				$getUsername = $this->main_model->checkUsername($uname);
				
				if($getUsername==1)
				{
					echo '<div class="alert alert-danger">Username is already exists.</div>';
				}
				else
				{
					
					$checkEmail = $this->main_model->checkEmail($email);

					if($checkEmai==1)
					{
						echo '<div class="alert alert-danger">Email is already exists.</div>';
					}
					else
					{
								
						if (!filter_var($email_add, FILTER_VALIDATE_EMAIL) === false) 
						{
														
							$to      = $email_add;
							$subject = 'Welcome';
							$message = "Hi $fname, \r\n\r\n\r\nWelcome to EZwealth System Affiliate Program \r\n\r\nWe like to welcome you in our fast growing community. \r\n\r\nPlease login to our website to learn how to activate your account: ".base_url()."\r\n\r\n\r\nYour login details are: \r\nYour Username: ".$uname."\r\nYour Password: ".$create_password." \r\n\r\n\r\nYou can activate your account anytime and start earning your commissions. \r\n\r\n\r\nFor any questions you can email us at our support center here: support@ezwealthpages.com";


							$headers = 'From: Customer Service<customerservice@ezwealthpages.com>' . "\r\n" .
							    'Reply-To: customerservice@ezwealthpages.com' . "\r\n" .
							    'X-Mailer: PHP/' . phpversion();

							if(!mail($to, $subject, $message, $headers))
							{
								echo 'Message Sending Failed';
							}
							else
							{
								$this->main_model->setAccount($uname,$create_password,$lname,$fname,$mobile_num,$email_add,$referred);
								$getLastInsertedId = $this->main_model->getLastInsertedId();
								$this->main_model->setReferral($referrer_id,$getLastInsertedId);
								$getresponse->addContact($company_campaign_id, $fullname, $email_add, $action = 'standard', $cycle_day = 0, $customs = array());
								echo 1;//ajax response
								//echo '<div class="alert alert-success">Successfully registered. Login <a href="'.base_url().'">here</a></div>';
													
							}

						}
						else
						{
							echo '<div class="alert alert-danger">Invalid email address.</div>';
							
						}
					}
				}
					
			}
		}
	}
		
		
		
	public function onchange()
	{
			
		$payment_mode = $this->input->get('payment_mode');
		
		switch($payment_mode)
		{
			case 'bank':
			echo ' <label for="processor">Payment Processor</label><br /><select name="processor" id="processor" class="form-control">
					
					<option value="BPI">BPI</option>
					
					</select>';
			break;
			
			case 'remittance':
				echo ' <label for="processor">Payment Processor</label><br /><select name="processor" id="processor" class="form-control">
					<option value="LBC">LBC</option>
					<option value="Cebuana">Cebuana</option>
					
					</select>';
			break;
			
			case 'paypal':
				echo '<label for="processor">Payment Processor</label><br /><select name="processor" id="processor" class="form-control">
					<option value="Paypal">Paypal</option>
					
					</select>';
			break;

			case 'ecredit':
				echo '<label for="processor">Amount</label><br /><input type="text" class="form-control" name="amount" id="amount" > ';
			break;
			
			case 'over-the-counter':
				echo '';
			break;

			default: 
			
			echo '
			 <label for="processor">Payment Processor</label><br /><select name="processor" id="processor" class="form-control">
			<option value="0">-----------Select----------</option>
		
			</select>
			';
			break;
			
		}
	}
			
	public function onchange_transfer()
	{
		$this->load->model('member_model');
		$member_id = $this->input->get('memberid');
		
		$transfer_mode = $this->input->get('transfer_mode');
		$banks = $this->member_model->getBank($member_id);
		
		switch($transfer_mode)
		{
			case 'bank':

				if(empty($banks))
				{
					echo 1;
					//Please add a Bank Account in Update Info->Transfer Information tab
				}
				else
				{

					echo '<select name="processor" id="processor" class="form-control">';

					foreach($banks as $bank)
					{
						
						$bank_name = $bank->bank_name;
						$acct_no = $bank->account_number;
						echo '<option value="'.$bank_name.','.$acct_no.'">'.$bank_name.'</option>';
					}
					echo '</select>';
				};
			break;
		
		default: 
		
			echo '
			<select name="processor" id="processor" class="form-control">
			<option value="0">---Select---</option>
		
			</select>
			';
			break;	
		}
		
	}
				
	public function edit_bank()
	{
		$this->load->model('member_model');	
		$bank_account_id = $this->uri->segment(3);

		if(!$this->session->userdata('member_id'))
		{
			$location = base_url();
			redirect($location);
		}

		$member_id = $this->session->userdata('member_id');
		$data['member'] = $this->member_model->getMember($member_id);
		$data['announcements'] = $this->member_model->getAnnouncement();
		
		$data['bank_accounts'] = $this->member_model->getBankById($bank_account_id);
		$this->load->view('member/edit_bank',$data);
		
	}
				
	public function primarypage()
	{
		$this->load->model('member_model');	
		$capture_page_id = $this->input->get('capture_page_id');
		$member_id = $this->session->userdata('member_id');
		$getPageDetails = $this->member_model->getPageDetails($member_id);
		$members = $this->member_model->getMember($member_id);

		foreach($members as  $member)
		{
			$subscription  = $member->subscription;
			$capture_page_limit = $member->capture_page_limit;
		}
				
			
		$getLimit =	$this->member_model->getLimit($member_id);
		
		if($getLimit>=$capture_page_limit)
		{
			echo "limit";//ajax response
		}
		else
		{
			$this->member_model->makePrimary($capture_page_id,$member_id);
			echo 'Success';
		}
		
	}
		
	public function edit_page()
	{
		
		$this->load->model('member_model');	
		$data['page_id']  = $this->uri->segment(3);
		$page_id = $this->uri->segment(3);
		$primary_capture_id = $this->uri->segment(5);
		$data['primary_capture_id'] = $this->uri->segment(5);
		$member_id = $this->session->userdata('member_id');
		$data['announcements'] = $this->member_model->getAnnouncement();
		$data['member'] = $this->member_model->getMember($member_id);
		$data['getMemberCpage'] = $this->member_model->getMemberCpage($member_id,$page_id);
		$data['pagename'] = $this->member_model->getCapturePageName($page_id);
		$this->load->view('member/edit_page',$data);
	}
			
			
	function recurse_copy($src,$dst) 
	{

	    $dir = opendir($src); 
		@mkdir($dst); 
	   
	    while(false !== ( $file = readdir($dir)) ) 
	    { 
		
	        if (( $file != '.' ) && ( $file != '..' )) 
	        { 
	            if ( is_dir($src . '/' . $file) ) { 

				 
	                $this->recurse_copy($src . '/' . $file,$dst . '/' . $file); 
				
	            } 
	            else 
	            { 
	                copy($src . '/' . $file,$dst . '/' . $file); 
					
	            } 
	        } 
	    } 
	}		


	public function getVideoUrl()
	{
		$this->load->model('member_model');	
		$member_id = $this->input->get('member_id');
		$capture_page_id = $this->input->get('capture_page_id');
		$getMemberCpage = $this->member_model->getMemberCpage($member_id,$capture_page_id);
		$values = array();

		foreach($getMemberCpage  as $cpage)
		{
			$rowset = array();
			$rowset['youtube_video_id'] = $cpage->youtube_video_id;
			$rowset['use_form'] = $cpage->use_form;
			array_push($values,$rowset);
		}
		echo json_encode($values);
			
	}


	public function getWebForm()
	{
		$this->load->model('member_model');	
		
		$member_id = $this->input->get('member_id');
		$capture_page_id = $this->input->get('capture_page_id');
		$getMemberCpage = $this->member_model->getMemberCpage($member_id,$capture_page_id);

		foreach($getMemberCpage  as $cpage)
		{
			$webform = $cpage->webform;
			echo $webform;
		}
			
	}
	
	
	
	public function config_get()
	{
		$this->load->model('member_model');
	 	$member_id = $this->session->userdata('member_id');

		$api_key = $this->input->post('api_key');
		
		if(empty($api_key))
		{
			echo 1;
			//echo '<div class="alert alert-danger">Field is required.</div>';
		}
		else
		{
			$this->member_model->setGetResponse($member_id,$api_key);
			echo '<div class="alert alert-success">Successfully Saved</div';
		}
	}
	
	
	public function create_page()
	{
		$this->load->model('member_model');
		$member_id = $this->session->userdata('member_id');
		$data['announcements'] = $this->member_model->getAnnouncement();
		$data['member'] = $this->member_model->getMember($member_id);
		//$bank_account_id = $this->uri->segment(3);
		$this->load->view('member/create_page',$data);	
	}
		
	public function deactivate()
	{
		$this->load->model('member_model');
		$member_id = $this->session->userdata('member_id');
		$capture_page_id = $this->input->get('capture_page_id');
		$this->member_model->deactivate_page($capture_page_id,$member_id);
		//echo 'Deactivated';
	}

	public function restore_default()
	{
		$this->load->model('member_model');
		$capture_page_id = $this->input->get('page_id');
		$pagename = $this->member_model->getCapturePageName($capture_page_id);
		$username = $this->session->userdata('username');
		$member_id = $this->session->userdata('member_id');
		$source = "assets/new-capture-page-html/$pagename";
	    $dest = APPPATH."views/capture_pages/$username/$pagename";
 	    $this->recurse_copy($source,$dest);
 	    $this->member_model->update_capture($capture_page_id,$member_id);

	}

	public function get_close_redirect()
	{
		$this->load->model('member_model');
		$member_id = $this->input->get('member_id');

		$capture_page_id = $this->input->get('capture_page_id');

		$getMemberCpage = $this->member_model->getMemberCpage($member_id,$capture_page_id);
	
		foreach($getMemberCpage  as $cpage)
		{
			$close_redirect_url = $cpage->close_redirect_url;
			
		}

		if(!empty($close_redirect_url))
		{
			echo $close_redirect_url;
		}
	}


	public function covertmoney()
	{
		$this->load->model('member_model');
		$member_id = $this->session->userdata('member_id');
		$amount = $this->input->post('convertamount');
		$convertamount = str_replace(',','',$amount);
		$available_balance = $this->input->post('available_balance');
		

		if(empty($amount))
		{
			echo '<div class="alert alert-danger">Field is required.</div>';
		}
		else
		{
			if(!is_numeric($amount))
			{
			  echo '<div class="alert alert-danger"><strong>Error!</strong> Please type number only or enter amount without comma</div>';
			 
			}
			else
			{
			  	if($amount<0)
			    {
					echo '<div class="alert alert-danger"><strong>Error!</strong> Invalid amount.</div>'; 
				}
				else
				{
					if($convertamount>$available_balance)
					{
						 echo '<div class="alert alert-danger"><strong>Error!</strong> Insufficient Funds.</div>';
					}
					else
					{
						$this->member_model->setAmountToConvert($member_id,$convertamount);
						echo 1;
					}
				}
			 
			}
		}
			
	}

	public function transfer_ecredit()
	{

		$this->load->model('member_model');
		$this->load->model('main_model');
		$member_id = $this->session->userdata('member_id');
		$username = $this->input->post('username');
		
		$amount = $this->input->post('amounttosend');
		$amounttosend = str_replace(',','',$amount);
	    $ecredit_balance = $this->input->post('ecredit_balance');

			
	    if(empty($username) || empty($amount) )
	    {
	    	echo '<div class="alert alert-danger">All fields are required.</div>';
	    }
	    else
	    {

	    	$checkUsername = $this->main_model->checkUsername($username);

	    	if($checkUsername==0)
	    	{
	    		echo '<div class="alert alert-danger">Username doesn\'t exist.</div>';
	    	}
	    	else
	    	{

	    		if(!is_numeric($amount))
	    		{
			  		echo '<div class="alert alert-danger"><strong>Error!</strong> Please type number only or enter amount without comma</div>';
				}
				else
				{

				 	if($amount<0)
				 	{
						echo '<div class="alert alert-danger"><strong>Error!</strong> Invalid amount.</div>'; 
					}
					else
					{

					 	if($amounttosend>$ecredit_balance)
					 	{
			 				echo '<div class="alert alert-danger"><strong>Error!</strong> Insufficient Funds.</div>';
				 		}
				 		else
				 		{

							$this->member_model->sendEcredit($member_id,$username,$amounttosend);
							echo '<div class="alert alert-success">Successfully sent to '.$username.' </div>';
						}
					
					}
				
				}
			
			}
		
		}
			
	}

	function buyecredit()
	{

		 $this->load->model('member_model');
		 $member_id = $this->session->userdata('member_id');
		 $payment_mode 		    = $this->input->post('payment_mode2');
		 $processor 			= $this->input->post('processor');
		 $reference_no 			= $this->input->post('reference_no2');
		 $sender_notes 			= $this->input->post('sender_notes2');
		 $senders_name 			= $this->input->post('senders_name2');
		
		 if ( isset( $_FILES["proof_of_payment2"] ) && !empty( $_FILES["proof_of_payment2"]["name"] ) )
		 {
			 $proof_of_payment 		= $_FILES['proof_of_payment2']['name']; 
			 $temp_name 		    = $_FILES['proof_of_payment2']['tmp_name'];
		 }
 			$amount 			= $this->input->post('desiredamount');
 			$desiredamount = str_replace(',', '',  $amount);
		

 		if($payment_mode=="over-the-counter")
 		{
 			 $date2 			= $this->input->post('date2');

 			if(empty($amount) || empty($payment_mode) || empty($date2) || empty($sender_notes) || empty($senders_name) )
			{
				
				echo '<div class="alert alert-danger">All fields are required</div>';
			}
			else
			{
				$this->member_model->setBuyEcreditOverTheCounter($member_id,$payment_mode,$senders_name,$sender_notes,$date2,$desiredamount);
				echo 1;
			}
 		}	
 		else
 		{

			if(empty($amount) || empty($payment_mode) || empty($processor) || empty($reference_no) || empty($sender_notes) || empty($senders_name) || empty($proof_of_payment) )
			{
				
				echo '<div class="alert alert-danger">All fields are required</div>';
			}
			else
			{

				if(!is_numeric($desiredamount))
				{
					echo '<div class="alert alert-danger"><strong>Invalid amount!</strong> Please type number only or enter amount without comma</div>';
				}
				else
				{
								
					if(file_exists('uploads/'.$proof_of_payment))
					{
					
						echo '<div class="alert alert-danger">Image name is already exist.</div>';
					}
					else
					{
						$config['upload_path'] = './uploads/';
						$config['allowed_types'] = 'gif|jpg|png';
						$config['max_size']  = '1024';// in kb
						$config['overwrite'] = TRUE;
						
						$this->load->library('upload', $config);
			
						if ( ! $this->upload->do_upload('proof_of_payment2'))
						{
							echo '<div class="alert alert-danger">'.$this->upload->display_errors().'</div>';
						}
						else
						{
							$data = array('upload_data' => $this->upload->data());

							$files = $data['upload_data']['file_name'];
							$getMember = $this->member_model->getMember($member_id);
								 
							foreach($getMember as $member)
							{
								 $email = $member->email;
								 $lname = $member->lastname;
								 $fname = $member->firstname;
								 $fullname = $fname.' '.$lname;
							}

							$to      =  $email;
							$subject = 'Processing your payment';
							$message = "Hi ".$fullname .",\r\n\r\n\r\nWe are now processing your payment transaction. Make sure you have entered the right information.\r\n\r\nWe will notify you via email regarding your transaction status. Expect the notification in the next 24 – 48 hours.\r\n\r\n\r\nThank you!\r\n\r\n\r\nEZwealth System\r\n\r\n\r\nFor any questions you can email us at our support center here: support@ezwealthpages.com";
							$headers = 'From: Customer Service<customerservice@ezwealthpages.com>' . "\r\n" .'Reply-To: customerservice@ezwealthpages.com' . "\r\n" .'X-Mailer: PHP/' . phpversion();

							if(!mail($to, $subject, $message, $headers))
							{
								echo 'Message Sending Failed';
							}
							else
							{

								$this->member_model->setBuyEcredit($member_id,$payment_mode,$processor,$reference_no,$senders_name,$sender_notes,$files,$desiredamount);
								echo 1;
					 				
							}
			
						
						}
					
					}
				
				}
			
			}

		}
	
	}
	
	
	
	
	public function send_message()
	{
		$this->load->model('member_model');

		$member_id = $_POST['member_id'];
		$email = $_POST['email'];
		$your_name = $_POST['your_name'];
		$phone = $_POST['number'];
		$message = $_POST['message'];

		if(empty($email) || empty($your_name) || empty($phone) || empty($message)){
			echo 1;
		}
		else
		{
			$this->member_model->sendMessage($member_id,$your_name,$phone,$message,$email);
			echo '<div class="alert alert-success">Your message was sent successfully.</div>';

		}

	}

	public function delete_image()
	{
		$member_id = $this->session->userdata('member_id');
		$this->load->model('member_model');
		
		$imagename = $_POST['image'];
		$column    =  $_POST['column'];

		$this->member_model->deleteImage($member_id,$column);
		unlink('uploads/'.$imagename);
		
	}
	
	public function message()
	{
		$this->load->model('member_model');	

		if(!$this->session->userdata('member_id'))
		{
			$location = base_url();
			redirect($location);
		}
		$member_id = $this->session->userdata('member_id');
		$data['member'] = $this->member_model->getMember($member_id);
		$data['announcements'] = $this->member_model->getAnnouncement();
		$data['messages'] = $this->member_model->getMessages($member_id);
		$this->load->view('member/message',$data);
	}

	public function delete_message()
	{
		$this->load->model('member_model');	
		$message_id = $_POST['message_id'];
		$this->member_model->deleteMessage($message_id);
	}



}