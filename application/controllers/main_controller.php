<?php

class Main_controller extends CI_Controller{
	
	function _remap($method,$args)
	{

		if(method_exists($this, $method))
		{
			$this->$method($args);
		}
		else
		{
			$this->index($method,$args);
		}

	}

	public function index($id=FALSE)
	{
		
		$this->load->view('index.php');
	}
	
	/**
	 * About us page
	 */
	public function about_us()
	{
		$this->load->view('about_us.php');
	}

	/**
	* products page
	*/
	public function products()
	{
		$this->load->view('products.php');
	}

	/**
	* Affiliate page
	*/
	public function affiliate()
	{
		$this->load->view('affiliate.php');
	}

	/**
	* FAQ page
	*/
	public function faq()
	{
		$this->load->view('faq.php');
	}
	
	/**
	* Contact us page
	*/
	public function contact_us()
	{
		$this->load->view('contact_us.php');
		
	}
	

	/**
	* Login page
	*/
	public function login()
	{
		$this->load->model('main_model');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
	
		if(empty($username) || empty($password))
		{
			echo 'error_empty';//will use in ajax response
		}
		else
		{
				
			$login = $this->main_model->login($username,$password);

			if(empty($login))
			{
				echo 'incorrect';//will use in ajax response
			}
			else
			{
					
				foreach($login as $member)
				{
					
					$member_id = $member->member_id;
					$username = $member->username;
					$account_status = $member->account_status;
				}
				
							
				$newdata = array(
				   'member_id'   => $member_id,
                   'username'  => $username,                  
           		);

				$this->session->set_userdata($newdata);
						
			}

		}
					
	}
	
	public function instant_access()
	{

		$this->load->model('member_model');
		$this->load->library('mylibrary');

		$api = new GetResponse('121c39da1b05439f9c801642d6bc6b2b');
		$campaigns 	 = (array)$api->getCampaigns();
		$company_campaignname = $campaigns['VfTxT']->name;
		$campaign_id = $api->getCampaignByName($company_campaignname);

		
		$member_id 	= 1;//default
		$email = $this->input->post('email');
		$contact = $this->input->post('contact');
			
		if(empty($email) || empty($contact))
		{
			echo '<div class="alert alert-danger">Please enter your email and contact number</div>';
		}
		else
		{
			
			if(!filter_var($email, FILTER_VALIDATE_EMAIL) === false) 
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

					$api->addContact($campaign_id, 'Guest', $email_add, $action = 'standard', $cycle_day = 0, $customs = array());
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
	
	/**
	* Login page
	*/
	public function join_now()
	{
		$this->load->view('join_now');
	}
	
	/**
	* Create account function
	*/
	public function create_account()
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
		
		$email_add = $this->input->post('email_add');
		$uname = $this->input->post('uname');
		$fullname = $fname.' '.$lastname;
		$create_password = $this->input->post('create_password');
		$retype_password = $this->input->post('retype_password');
		$referred_by = $this->input->post('referred_by');
		//$referred = $this->input->post('referred');
		$referrer_id = 1;//default

		if(empty($fname) || empty($lname)  || empty($mobile_num) || empty($email_add) || empty($uname) || empty($create_password) || empty($retype_password) || empty($referred_by))
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
							$message = "Hi $fname, \r\n\r\n\r\nWelcome to EZwealth System Affiliate Program \r\n\r\nWe like to welcome you in our fast growing community. \r\n\r\nPlease login to our website to learn how to activate your account: 
							".base_url()."\r\n\r\n\r\nYour login details are: \r\nYour Username: ".$uname."\r\nYour Password: ".$create_password." \r\n\r\n\r\nYou can activate your account anytime and start earning your commissions. \r\n\r\n\r\nFor any questions you can email us at our support center here: support@ezwealthpages.com
							";
							
							$headers = 'From: Customer Service<customerservice@ezwealthpages.com>' . "\r\n" .
						    'Reply-To: customerservice@ezwealthpages.com' . "\r\n" .
										'X-Mailer: PHP/' . phpversion();
							
							if(!mail($to, $subject, $message, $headers))
							{
								echo 'Message Sending Failed';
							}
							else
							{
								$this->main_model->setAccount($uname,$create_password,$lname,$fname,$mobile_num,$email_add,$referred_by);
								$getLastInsertedId = $this->main_model->getLastInsertedId();
								$this->main_model->setReferral($referrer_id,$getLastInsertedId);
								$getresponse->addContact($company_campaign_id, $fullname, $email_add, $action = 'standard', $cycle_day = 0, $customs = array());
								echo 1;
								//echo '<div class="alert alert-success">Successfully registered.</div>';
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
	


}

