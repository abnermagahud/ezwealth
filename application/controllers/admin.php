<?php

class Admin extends CI_Controller{
	
	public function index()
	{

		$this->load->model('admin_model');
		$username = $this->input->post('loginname');
		$password  = $this->input->post('password');
		
		if(!$this->session->userdata('admin_id'))
		{
		
		 		
		if(isset($_POST['login_btn']))
		{
			if(empty($username) || empty($password))
			{
				$data['message'] =  '<div class="alert alert-danger">Both Fields cannot be empty</div>';
			}
			else
			{
				$loggedIn = $this->admin_model->loggedIn($username,$password);	
				
				if(empty($loggedIn))
				{
					$data['message'] =  '<div class="alert alert-danger">Username and/or Password are incorrect.</div>';	
				}
				else
				{

					foreach($loggedIn as $details)
					{

						$admin_id  = $details->member_id;
						$username = $details->username;
						$lname    = $details->lastname;
						$fname    = $details->firstname;
						$email    = $details->email;
						$fullname = $fname.' '.$lname;
						
						$newdata = array(
					   'admin_id'   => $admin_id,
	                   'username'  => $username,
	                   'email'     => $email,
	                   'fullname'  => $fullname
	               		);

						$this->session->set_userdata($newdata);//set session
						
						$location = base_url().'admin/';
						redirect($location);

					}
				}
			}
			
		}
			
			$this->load->view('admin/login.php',(isset($data) ? $data : ''));

		}
		else
		{
			
			$this->active();
		}

	}
		
	/*public function dashboard()
	{
		$this->load->view('admin/dashboard');
		
	}*/
	
	/**
	* Logout function
	*/
	public function loggedout()
	{

		$array_items = array(
			   'admin_id'   => $admin_id,
		       'username'  => $username,
		       'email'     => $email,
		       'fullname'  => $fullname
		   	);

		$this->session->unset_userdata($array_items);
		$location = base_url().'admin/';
		redirect($location);

	}	
	
	
	public function inactive()
	{
		$this->load->model('admin_model');
		$data['inactivemembers'] = $this->admin_model->inactive_members();
		$data['countInactiveMembers'] = $this->admin_model->countInactiveMembers();
		$data['countActiveMembers'] = $this->admin_model->countActiveMembers();
		$data['countMonthsExtension'] = $this->admin_model->countMonthsExtension();
		$data['countYearExtension'] = $this->admin_model->countYearExtension();
		$this->load->view('admin/subscribers/inactive',$data);
	}

	public function active()
	{
		$this->load->model('admin_model');
		$data['members'] = $this->admin_model->active_members();
		$data['countInactiveMembers'] = $this->admin_model->countInactiveMembers();
		$data['countActiveMembers'] = $this->admin_model->countActiveMembers();
		$data['countMonthsExtension'] = $this->admin_model->countMonthsExtension();
		$data['countYearExtension'] = $this->admin_model->countYearExtension();
		$this->load->view('admin/subscribers/active',$data);
	}

	public function expired()
	{
		$this->load->model('admin_model');
		$data['expiredmembers'] = $this->admin_model->expired_members();
		$data['countInactiveMembers'] = $this->admin_model->countInactiveMembers();
		$data['countActiveMembers'] = $this->admin_model->countActiveMembers();
		$data['countMonthsExtension'] = $this->admin_model->countMonthsExtension();
		$data['countYearExtension'] = $this->admin_model->countYearExtension();
		$this->load->view('admin/subscribers/expired',$data);
	}
	
	
	public function basic()
	{
		$this->load->model('admin_model');
		$payment_for = 'basic';
	    $data['getPayment'] = $this->admin_model->getPayment($payment_for);
		$data['countInactiveMembers'] = $this->admin_model->countInactiveMembers();
		$data['countActiveMembers'] = $this->admin_model->countActiveMembers();
		$data['countMonthsExtension'] = $this->admin_model->countMonthsExtension();
		$data['countYearExtension'] = $this->admin_model->countYearExtension();
		$this->load->view('admin/payments/basic',$data);
	}
	
	public function premium()
	{
		$this->load->model('admin_model');
		$payment_for = 'premium';
	    $data['getPayment'] = $this->admin_model->getPayment($payment_for);
		$data['countInactiveMembers'] = $this->admin_model->countInactiveMembers();
		$data['countActiveMembers'] = $this->admin_model->countActiveMembers();
		$data['countMonthsExtension'] = $this->admin_model->countMonthsExtension();
		$data['countYearExtension'] = $this->admin_model->countYearExtension();
		$this->load->view('admin/payments/premium',$data);
	}

	public function one_year()
	{
		$this->load->model('admin_model');
		$payment_for = '1_year_extension';
	    $data['getPayment'] = $this->admin_model->getPayment($payment_for);
		$data['countInactiveMembers'] = $this->admin_model->countInactiveMembers();
		$data['countActiveMembers'] = $this->admin_model->countActiveMembers();
		$data['countMonthsExtension'] = $this->admin_model->countMonthsExtension();
		$data['countYearExtension'] = $this->admin_model->countYearExtension();
		$this->load->view('admin/payments/1year',$data);
	}

	public function six_months()
	{
		$this->load->model('admin_model');
		$payment_for = '6_months_extension';
	    $data['getPayment'] = $this->admin_model->getPayment($payment_for);
		$data['countInactiveMembers'] = $this->admin_model->countInactiveMembers();
		$data['countActiveMembers'] = $this->admin_model->countActiveMembers();
		$data['countMonthsExtension'] = $this->admin_model->countMonthsExtension();
		$data['countYearExtension'] = $this->admin_model->countYearExtension();
		$this->load->view('admin/payments/6months',$data);
	}

	public function bundle()
	{
		$this->load->model('admin_model');
		$payment_for = 'bundle';
	    $data['getPayment'] = $this->admin_model->getPayment($payment_for);
		$data['countInactiveMembers'] = $this->admin_model->countInactiveMembers();
		$data['countActiveMembers'] = $this->admin_model->countActiveMembers();
		$data['countMonthsExtension'] = $this->admin_model->countMonthsExtension();
		$data['countYearExtension'] = $this->admin_model->countYearExtension();
		$this->load->view('admin/payments/bundle',$data);
	}

	public function ewallet()
	{
		$this->load->model('admin_model');
		$data['countInactiveMembers'] = $this->admin_model->countInactiveMembers();
		$data['countActiveMembers'] = $this->admin_model->countActiveMembers();
		$data['countMonthsExtension'] = $this->admin_model->countMonthsExtension();
		$data['countYearExtension'] = $this->admin_model->countYearExtension();
		$data['getAllMembers'] = $this->admin_model->getAllMembers();
		$this->load->view('admin/ewallet',$data);
	}
	
	public function bank_request()
	{
		
		$this->load->model('admin_model');
		$transfer_mode = 'bank';
		$data['bankrequest'] = $this->admin_model->getRequest($transfer_mode);
		$data['countInactiveMembers'] = $this->admin_model->countInactiveMembers();
		$data['countActiveMembers'] = $this->admin_model->countActiveMembers();
		$data['countMonthsExtension'] = $this->admin_model->countMonthsExtension();
		$data['countYearExtension'] = $this->admin_model->countYearExtension();
		$this->load->view('admin/request/bank_request',$data);
	}

	public function remit_request()
	{
		$this->load->model('admin_model');
		$transfer_mode = 'remittance';
		$data['remitrequest'] = $this->admin_model->getRequest($transfer_mode);
		$data['countInactiveMembers'] = $this->admin_model->countInactiveMembers();
		$data['countActiveMembers'] = $this->admin_model->countActiveMembers();
		$data['countMonthsExtension'] = $this->admin_model->countMonthsExtension();
		$data['countYearExtension'] = $this->admin_model->countYearExtension();
		$this->load->view('admin/request/remit_request',$data);
	}

	public function paypal_request()
	{
		$this->load->model('admin_model');
		$transfer_mode = 'paypal';
		$data['paypalrequest'] = $this->admin_model->getRequest($transfer_mode);
		$data['countInactiveMembers'] = $this->admin_model->countInactiveMembers();
		$data['countActiveMembers'] = $this->admin_model->countActiveMembers();
		$data['countMonthsExtension'] = $this->admin_model->countMonthsExtension();
		$data['countYearExtension'] = $this->admin_model->countYearExtension();
		$this->load->view('admin/request/paypal_request',$data);
	}

	public function bank_history()
	{
		$this->load->model('admin_model');
		$transfer_mode = 'bank';
		
		$data['bankhistory'] = $this->admin_model->getHistory($transfer_mode);
		$data['countInactiveMembers'] = $this->admin_model->countInactiveMembers();
		$data['countActiveMembers'] = $this->admin_model->countActiveMembers();
		$data['countMonthsExtension'] = $this->admin_model->countMonthsExtension();
		$data['countYearExtension'] = $this->admin_model->countYearExtension();
		$this->load->view('admin/history/bank_history',$data);
	}

	public function remit_history()
	{
		$this->load->model('admin_model');
		$transfer_mode = 'remittance';
		$data['remithistory'] = $this->admin_model->getHistory($transfer_mode);
		$data['countInactiveMembers'] = $this->admin_model->countInactiveMembers();
		$data['countActiveMembers'] = $this->admin_model->countActiveMembers();
		$data['countMonthsExtension'] = $this->admin_model->countMonthsExtension();
		$data['countYearExtension'] = $this->admin_model->countYearExtension();
		$this->load->view('admin/history/remit_history',$data);
	}


	public function paypal_history()
	{
		$this->load->model('admin_model');
		$transfer_mode = 'paypal';
		$data['paypalhistory'] = $this->admin_model->getHistory($transfer_mode);
		$data['countInactiveMembers'] = $this->admin_model->countInactiveMembers();
		$data['countActiveMembers'] = $this->admin_model->countActiveMembers();
		$data['countMonthsExtension'] = $this->admin_model->countMonthsExtension();
		$data['countYearExtension'] = $this->admin_model->countYearExtension();
		$this->load->view('admin/history/paypal_history',$data);
	}
	public function administrator(){
			$this->load->model('admin_model');
			$data['admins'] = $this->admin_model->getAdmin();
			$data['countInactiveMembers'] = $this->admin_model->countInactiveMembers();
			$data['countActiveMembers'] = $this->admin_model->countActiveMembers();
			$data['countMonthsExtension'] = $this->admin_model->countMonthsExtension();
			$data['countYearExtension'] = $this->admin_model->countYearExtension();

			$this->load->view('admin/control/administrator',$data);
	}
	public function announcement(){
			$this->load->model('admin_model');
			
			$data['announcements'] = $this->admin_model->getAnnouncement();
			$data['countInactiveMembers'] = $this->admin_model->countInactiveMembers();
			$data['countActiveMembers'] = $this->admin_model->countActiveMembers();
			$data['countMonthsExtension'] = $this->admin_model->countMonthsExtension();
			$data['countYearExtension'] = $this->admin_model->countYearExtension();

			$this->load->view('admin/control/announcement',$data);
	}

	public function leads()
	{
		$this->load->model('admin_model');
		$data['countInactiveMembers'] = $this->admin_model->countInactiveMembers();
		$data['countActiveMembers'] = $this->admin_model->countActiveMembers();
		$data['countMonthsExtension'] = $this->admin_model->countMonthsExtension();
		$data['countYearExtension'] = $this->admin_model->countYearExtension();
		$data['leads'] = $this->admin_model->getLeads();
		$this->load->view('admin/memberleads',$data);
	}	
	
	public function delete_announcement()
	{
		$this->load->model('admin_model');
		$announcement_id = $this->input->get('announcement_id');		
		$this->admin_model->deleteAnnouncement($announcement_id);	

	}

	public function add_announcement()
	{
		$this->load->model('admin_model');
		$title = $this->input->post('title');
		$announcement = $this->input->post('announcement');
					
		if(empty($title) || empty($announcement))
		{
			echo 1;
		}
		else
		{
			$this->admin_model->setAnnouncement($title,$announcement);
			echo '<div class="alert alert-success">Successfully Created</div>';
		}
	}	
		
	public function add_admin()
	{
		
		$this->load->model('admin_model');
		
		$lname 			= $this->input->post('lname');
		$fname 			= $this->input->post('fname');
		$username		= $this->input->post('uname');
		$password 		= $this->input->post('password');
		$admin_email    = $this->input->post('admin_email');

		if(empty($lname) || empty($fname) || empty($username) || empty($password) || empty($admin_email))
		{
			echo 1;
		}
		else
		{
			$this->admin_model->setAdmin($username,$lname,$fname,$password,$admin_email);
			echo '<div class="alert alert-success">Successfully Added</div>';
		}
	}
		
	public function delete_admin()
	{
		$this->load->model('admin_model');
		$admin_id = $this->input->get('admin_id');		
		$this->admin_model->deleteAdmin($admin_id);	
	}	
		
	public function starter_activation()
	{

		$this->load->model('admin_model');
		$payment_id = $this->input->get('payment_id');	
		$member_id = $this->input->get('member_id');
		
		$referrer_id = $this->admin_model->getReferrer($member_id);	
		
		$getMemberByID = $this->admin_model->getMemberByID($member_id);
		
		foreach($getMemberByID as $member)
		{
			$uname = $member->username;
			$lname = $member->lastname;
			$fname = $member->firstname;
			$full = ucwords($fname. ' '.$lname); 
			$email = $member->email;
			$password = $member->password;
		}
		  
	   
		$to      = $email;
		$subject = 'EZwealthsystem::Payment Approved';
		$message = "Hi ".$full.",\r\n\r\nCONGRATULATIONS!\r\n\r\n\r\nYour Payment Transaction with EZwealth System has been APPROVED!\r\n\r\nDetails: Basic\r\nAmount: Php 1,000\r\n\r\nYou can now use up to 10 capture pages for 1 year!\r\nYour subscription will expire on (Date)\r\nYour affiliate marketing URL ".base_url()."member/".$uname."\r\nYour Log In Details\r\nUsername: ".$uname."\r\nPassword: ".$password."\r\n\r\n\r\n\r\nEZwealth System\r\n\r\n\r\nFor any questions you can email us at our support center here: customerservice@ezwealthpages.com";

		$headers = 'From: Customer Service<customerservice@ezwealthpages.com>' . "\r\n" .
		    'Reply-To: customerservice@ezwealthpages.com' . "\r\n" .
		    'X-Mailer: PHP/' . phpversion();

		if(!mail($to, $subject, $message, $headers))
		{
			echo 'Message Sending Failed';
		}
		else
		{
			$product = "Basic";
			$amount = 1000;
				
			$this->admin_model->subscriptionActivation($payment_id,$member_id,$product);	
			$this->admin_model->setMemberCommission($member_id,$referrer_id,$product,$amount);
			$this->admin_model->insertAmmountToMember($referrer_id,$amount);
			
			echo 'Activated and sucessfully sent a message to the subscriber.';
		}
			
	}
			
			
	public function premium_activation()
	{

		$this->load->model('admin_model');
		$payment_id = $this->input->get('payment_id');	
		$member_id = $this->input->get('member_id');
		
		$referrer_id = $this->admin_model->getReferrer($member_id);	
		
		$getMemberByID = $this->admin_model->getMemberByID($member_id);
		
		foreach($getMemberByID as $member)
		{
			$uname = $member->username;
			$lname = $member->lastname;
			$fname = $member->firstname;
			$full = ucwords($fname. ' '.$lname); 
			$email = $member->email;
			$password = $member->password;
		}
			   
			   
		$to      = $email;
		$subject = 'EZwealthsystem::Payment Approved';
		$message = "Hi ".$full.",\r\n\r\nCONGRATULATIONS!\r\n\r\n\r\nYour Payment Transaction with EZwealth System has been APPROVED!\r\n\r\nDetails: Premium\r\nAmount: Php 2,500\r\n\r\nYou can now use 30 capture pages for 1 year!\r\nYour subscription will expire on (Date)\r\nYour affiliate marketing URL ".base_url()."member/".$uname."\r\nYour Log In Details\r\nUsername: ".$uname."\r\nPassword: ".$password."\r\n\r\n\r\n\r\nEZwealth System\r\n\r\n\r\nFor any questions you can email us at our support center here: customerservice@ezwealthpages.com";

		$headers = 'From: Customer Service<customerservice@ezwealthpages.com>' . "\r\n" .
		    'Reply-To: customerservice@ezwealthpages.com' . "\r\n" .
		    'X-Mailer: PHP/' . phpversion();

		if(!mail($to, $subject, $message, $headers))
		{
			echo 'Message Sending Failed';
		}
		else
		{
			$product = "Premium";
			$amount = 2500;

			$this->admin_model->setMemberCommission($member_id,$referrer_id,$product,$amount);
			$this->admin_model->insertAmmountToMember($referrer_id,$amount);

			$this->admin_model->subscriptionActivation($payment_id,$member_id,$product);	
			
			
			echo 'Activated and sucessfully sent a message to the subscriber.';
		}
				
	}
			
			
	public function months_activation()
	{

		$this->load->model('admin_model');
		$payment_id = $this->input->get('payment_id');	
		$member_id = $this->input->get('member_id');
		
		$getMemberByID = $this->admin_model->getMemberByID($member_id);
		$referrer_id = $this->admin_model->getReferrer($member_id);	

		foreach($getMemberByID as $member)
		{
			$lname = $member->lastname;
			$fname = $member->firstname;
			$full = ucwords($fname. ' '.$lname); 
			$email = $member->email;
		}

		$to      = $email;
		$subject = 'EZwealthsystem::6 months extension';
		$message = "Hi ".$full.",\r\n\r\n\r\nCONGRATULATIONS!\r\n\r\n\r\nYour Payment Transaction with EZwealth System Extension has been APPROVED!\r\n\r\nDetails: 6 months\r\nAmount: Php 1,500\r\n\r\nYour previous subscription will expire on (Date)\r\nYour new subscription will expire on (Date)\r\n\r\n\r\n\r\nEZwealth System\r\n\r\n\r\nFor any questions you can email us at our support center here: customerservice@ezwealthpages.com";
		$headers = 'From: Rommel de Jesus<rgdejesus12@gmail.com>' . "\r\n" .
		'Reply-To: rgdejesus12@gmail.com' . "\r\n" .
		'X-Mailer: PHP/' . phpversion();

		if(!mail($to, $subject, $message, $headers))
		{
			echo 'Message Sending Failed';

		}
		else
		{
			$product = "6 months extension";
			$amount = 1500;
			$this->admin_model->monthsActivation($payment_id,$member_id);
			$this->admin_model->setMemberCommission($member_id,$referrer_id,$product,$amount);
			$this->admin_model->insertAmmountToMember($referrer_id,$amount);
			echo 'Activated and sucessfully sent a message to the subscriber.';
		}
		
		
	}


	public function year_activation()
	{

		$this->load->model('admin_model');
		$payment_id = $this->input->get('payment_id');
		$member_id = $this->input->get('member_id');	
		
		$getMemberByID = $this->admin_model->getMemberByID($member_id);
		$referrer_id = $this->admin_model->getReferrer($member_id);	

		foreach($getMemberByID as $member)
		{
			$lname = $member->lastname;
			$fname = $member->firstname;
			$full = ucwords($fname. ' '.$lname); 
			$email = $member->email;
		}

		$to      = $email;
		$subject = 'EZwealthsystem::1 year extension';
		$message = "Hi ".$full.",\r\n\r\nCONGRATULATIONS!\r\n\r\n\r\nYour Payment Transaction with EZwealth System Extension has been APPROVED!\r\n\r\nDetails: 1 year\r\n\r\nAmount: Php 2,000\r\n\r\nYour previous subscription will expire on (Date)\r\n\r\nYour new subscription will expire on (Date)\r\n\r\n\r\n\r\nEZwealth System\r\n\r\n\r\nFor any questions you can email us at our support center here: customerservice@ezwealthpages.com";

		$headers = 'From: Customer Service<customerservice@ezwealthpages.com>' . "\r\n" .
		    'Reply-To: customerservice@ezwealthpages.com' . "\r\n" .
		    'X-Mailer: PHP/' . phpversion();

		if(!mail($to, $subject, $message, $headers))
		{
			echo 'Message Sending Failed';
		}
		else
		{
			$product = "1 year extension";
			$amount = 2000;

			$this->admin_model->yearActivation($payment_id,$member_id);
			$this->admin_model->setMemberCommission($member_id,$referrer_id,$product,$amount);
			$this->admin_model->insertAmmountToMember($referrer_id,$amount);

			echo 'Activated and sucessfully sent a message to the subscriber.';
		}
	
	}
			
		public function transfer_bank()
		{
			$this->load->model('admin_model');
			$transfer_id= $this->input->get('transfer_id');
			$this->admin_model->transfer_fund($transfer_id);

			echo 'Transfer Confirmed.';
		}
		
		public function transfer_paypal()
		{
			$this->load->model('admin_model');
			$transfer_id = $this->input->get('transfer_id');
			$this->admin_model->transfer_fund($transfer_id);
			echo 'Transfer Confirmed.';
		}
		
		public function transfer_remittance()
		{
			$this->load->model('admin_model');
			$transfer_id = $this->input->get('transfer_id');
			$this->admin_model->transfer_fund($transfer_id);
			echo 'Transfer Confirmed.';
		}
		
	public function edit_profile($admin_id = FALSE)
	{

		$this->load->model('admin_model');
        $data['admin_detail'] =  $this->admin_model->getAdminById($admin_id);
		$data['countInactiveMembers'] = $this->admin_model->countInactiveMembers();
		$data['countActiveMembers'] = $this->admin_model->countActiveMembers();
		$data['countMonthsExtension'] = $this->admin_model->countMonthsExtension();
		$data['countYearExtension'] = $this->admin_model->countYearExtension();
		$this->load->view('admin/control/edit_profile',$data);
		
	}
		
	public function edit_announcement($announcement_id = FALSE)
	{
		$this->load->model('admin_model');
		$data['announcements'] =  $this->admin_model->getAnnouncementById($announcement_id);
		$data['countInactiveMembers'] = $this->admin_model->countInactiveMembers();
		$data['countActiveMembers'] = $this->admin_model->countActiveMembers();
		$data['countMonthsExtension'] = $this->admin_model->countMonthsExtension();
		$data['countYearExtension'] = $this->admin_model->countYearExtension();
		$this->load->view('admin/control/edit_announcement',$data);
		
	}
		
	public function toExcel()
	{

		require APPPATH."/third_party/exportxlsclass.php";

	 	$this->load->model('admin_model');
		$leads = $this->admin_model->getLeads();
		$filename = "leads.xls";
		$xls = new ExportXLS($filename);
		  
		$header[] = "#";
		$header[] = "Referrer";
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
				$member_id = $leading->member_id;
				$ref_fname = $leading->firstname;
			  	$ref_lname = $leading->lastname;
				$ref_fullname = ucwords($ref_fname.' '.$ref_lname);
				
				$row[] = array(
					0 => $counter1++,
					1 => $ref_fullname,
					2 => $data_email,
					3 => $data_contact_num
				);
			}
			 
		 	$xls->addRow($row);	  
			$xls->sendFile();   
		}
	}
	
	
	public function disapproved_subscription()
	{
		$this->load->model('admin_model');
		$payment_id = $this->input->get('payment_id');
		$member_id = $this->input->get('member_id');
		
		
		$getMemberByID = $this->admin_model->getMemberByID($member_id);
		
		foreach($getMemberByID as $member)
		{
			$lname = $member->lastname;
			$fname = $member->firstname;
			$full = ucwords($fname. ' '.$lname); 
			$email = $member->email;
		}		
		
		$to      = $email;
		$subject = 'EZwealthsystem::Payment Disapproved';
		$message = "Hi ".$full.", \r\n\r\nYour Payment Transaction with EZwealth System Extension has NOT been approved. \r\n\r\nDetails: (6 months / 1 year)\r\nAmount: \r\n\r\nDetails: \r\n\r\nEZwealth System\r\n\r\nFor any questions you can email us at our support center here: customerservice@ezwealthpages.com";

		$headers = 'From: Customer Service<customerservice@ezwealthpages.com>' . "\r\n" .
		    'Reply-To: customerservice@ezwealthpages.com' . "\r\n" .
		    'X-Mailer: PHP/' . phpversion();

		if(!mail($to, $subject, $message, $headers))
		{
			echo 'Message Sending Failed';
		}
		else
		{
			
			$this->admin_model->disapproveSubscription($payment_id);
			echo 'Payment has been disapproved';
			
		}
		
	}

	public function accounting()
	{
	    $this->load->model('admin_model');
		
		$data['countInactiveMembers'] = $this->admin_model->countInactiveMembers();
		$data['countActiveMembers'] = $this->admin_model->countActiveMembers();
		$data['countMonthsExtension'] = $this->admin_model->countMonthsExtension();
		$data['countYearExtension'] = $this->admin_model->countYearExtension();
		$data['total_sales'] = $this->admin_model->getTotalSales();
		$data['daily_sales'] = $this->admin_model->getDailySales();
		$data['weekly_sales'] = $this->admin_model->getWeeklySales();
		$data['monthly_sales'] = $this->admin_model->getMonthlySales();

		$this->load->view('admin/control/accounting',$data);
	}


	public function exportdaily()
	{

		require APPPATH."/third_party/exportxlsclass.php";

		 $this->load->model('admin_model');

		$filename = "daily-total.xls";
		$sales = $this->admin_model->getDailySales();


		$xls = new ExportXLS($filename);
		  
		$header[] = "Date";
		$header[] = "Sales";
		$header[] = "Commision";
		$header[] = "Gross Profit";
		$header[] = "Maintenance (15%)";
		$header[] = "Alvin (30%)";
		$header[] = "Lowel (30%)";
		$header[] = "Mhel (25%)";

		$xls->addHeader($header);

    	if(!empty($sales))
    	{
		 
			$row = array();

		    foreach($sales as $info)
		    {
			  	
			   	$date = date('Y-m-d',strtotime($info->date));
			   	
		        $totalsales = $info->amount;
		        $commission = $info->commission;
		        $gross = $totalsales - $commission;
		        $maintenance = 0.150 * $gross;
		        $profit_1 = 0.300 * $gross;//alvin 30%
		        $profit_2 = 0.300 * $gross;//Lowel 30%
		        $profit_3 = 0.250 * $gross;//Mhel 25%

				$row[] = array(
				0 => $date,
				1 => $totalsales,
				2 => $commission,
				3 => $gross,
				4 => $maintenance,
				5 => $profit_1,
				6 => $profit_2,
				7 => $profit_3,
				);
			}
		 
		 	$xls->addRow($row);	  

			$xls->sendFile();  

	 	}	
	}

	public function exportweekly()
	{

		require APPPATH."/third_party/exportxlsclass.php";

		$this->load->model('admin_model');

		$filename = "weekly-total.xls";
		$sales = $this->admin_model->getWeeklySales();
		$xls = new ExportXLS($filename);
	  
		$header[] = "Week";
		$header[] = "Sales";
		$header[] = "Commision";
		$header[] = "Gross Profit";
		$header[] = "Maintenance (15%)";
		$header[] = "Alvin (30%)";
		$header[] = "Lowel (30%)";
		$header[] = "Mhel (25%)";

		$xls->addHeader($header);

	    if(!empty($sales))
	    {
			 
			$row = array();

		   foreach($sales as $info)
		   {
			  
		        $totalsales = $info->amount;
		        $commission = $info->commission;
		        $gross = $totalsales - $commission;
		        $maintenance = 0.150 * $gross;
		        $profit_1 = 0.300 * $gross;//alvin 30%
		        $profit_2 = 0.300 * $gross;//Lowel 30%
		        $profit_3 = 0.250 * $gross;//Mhel 25%

		        $date = date('W \w\e\e\k \o\f \y\e\a\r Y',strtotime($info->date) );

				$row[] = array(
				0 => $date,
				1 => $totalsales,
				2 => $commission,
				3 => $gross,
				4 => $maintenance,
				5 => $profit_1,
				6 => $profit_2,
				7 => $profit_3,
				);
			}
			 
		 	$xls->addRow($row);	  

			$xls->sendFile();   
		}
	
	}


	public function exportmonthly()
	{

		require APPPATH."/third_party/exportxlsclass.php";
		$this->load->model('admin_model');

	 	$filename = "monthly-total.xls";
		$sales = $this->admin_model->getMonthlySales();

		$xls = new ExportXLS($filename);
		  
		$header[] = "Month";
		$header[] = "Sales";
		$header[] = "Commision";
		$header[] = "Gross Profit";
		$header[] = "Maintenance (15%)";
		$header[] = "Alvin (30%)";
		$header[] = "Lowel (30%)";
		$header[] = "Mhel (25%)";

		$xls->addHeader($header);

	    if(!empty($sales))
	    {
			 
			$row = array();

		   	foreach($sales as $info)
		   	{
			  	
			   	//$date = date('Y-m-d',strtotime($info->month));
			    $month = date('F Y',strtotime($info->month) );
		        $totalsales = $info->amount;
		        $commission = $info->commission;
		        $gross = $totalsales - $commission;
		        $maintenance = 0.150 * $gross;
		        $profit_1 = 0.300 * $gross;//alvin 30%
		        $profit_2 = 0.300 * $gross;//Lowel 30%
		        $profit_3 = 0.250 * $gross;//Mhel 25%

				$row[] = array(
				0 => $month,
				1 => $totalsales,
				2 => $commission,
				3 => $gross,
				4 => $maintenance,
				5 => $profit_1,
				6 => $profit_2,
				7 => $profit_3,
				);
			}
			 
	 		$xls->addRow($row);	  

			$xls->sendFile();   
		}
	
	}



	public function bundle_activation()
	{
		$this->load->model('admin_model');
		$payment_id = $this->input->get('payment_id');
		$member_id = $this->input->get('member_id');
	    $referrer_id = $this->admin_model->getReferrer($member_id);	
		$getMemberByID = $this->admin_model->getMemberByID($member_id);
		
		foreach($getMemberByID as $member)
		{
			$uname = $member->username;
			$lname = $member->lastname;
			$fname = $member->firstname;
			$full = ucwords($fname. ' '.$lname); 
			$email = $member->email;
			$password = $member->password;
		}
				  
			   
		$to      = $email;
		$subject = 'EZwealthsystem::Payment Approved';
		$message = "Hi ".$full.",\r\n\r\nCONGRATULATIONS!\r\n\r\n\r\nYour Payment Transaction with EZwealth System has been APPROVED!\r\n\r\nDetails: Starter\r\nAmount: Php 1,000\r\n\r\nYou can now use up to 6 capture pages for 1 year!\r\nYour subscription will expire on (Date)\r\nYour affiliate marketing URL ".base_url()."member/".$uname."\r\nYour Log In Details\r\nUsername: ".$uname."\r\nPassword: ".$password."\r\n\r\n\r\n\r\nEZwealth System\r\n\r\n\r\nFor any questions you can email us at our support center here: customerservice@ezwealthpages.com";

		$headers = 'From: Customer Service<customerservice@ezwealthpages.com>' . "\r\n" .
		    'Reply-To: customerservice@ezwealthpages.com' . "\r\n" .
		    'X-Mailer: PHP/' . phpversion();

		if(!mail($to, $subject, $message, $headers))
		{
			echo 'Message Sending Failed';
		}
		else
		{
			$product = "Bundle";
			$amount = 500;
				
			$this->admin_model->bundleactivation($member_id,$payment_id);
			$this->admin_model->setMemberCommission($member_id,$referrer_id,$product,$amount);
			$this->admin_model->insertAmmountToMember($referrer_id,$amount);
			
			echo 'Activated and sucessfully sent a message to the subscriber.';
		}

	}



	public function ecredit()
	{
		$this->load->model('admin_model');
		$data['ecredits'] = $this->admin_model->getPaymentForEcredit();
		$data['countInactiveMembers'] = $this->admin_model->countInactiveMembers();
		$data['countActiveMembers'] = $this->admin_model->countActiveMembers();
		$data['countMonthsExtension'] = $this->admin_model->countMonthsExtension();
		$data['countYearExtension'] = $this->admin_model->countYearExtension();
		$this->load->view('admin/request/ecredit_request',$data);
	}


	public function ecredit_history()
	{
		$this->load->model('admin_model');
		$data['ecredithistory'] = $this->admin_model->getEcreditLogs();
		$data['countInactiveMembers'] = $this->admin_model->countInactiveMembers();
		$data['countActiveMembers'] = $this->admin_model->countActiveMembers();
		$data['countMonthsExtension'] = $this->admin_model->countMonthsExtension();
		$data['countYearExtension'] = $this->admin_model->countYearExtension();
		$this->load->view('admin/history/ecredit_history',$data);
	}

	public function ecreditconversionhistory()
	{
		$this->load->model('admin_model');
		$data['ecredithistory'] = $this->admin_model->getEcreditHistory();
		$data['countInactiveMembers'] = $this->admin_model->countInactiveMembers();
		$data['countActiveMembers'] = $this->admin_model->countActiveMembers();
		$data['countMonthsExtension'] = $this->admin_model->countMonthsExtension();
		$data['countYearExtension'] = $this->admin_model->countYearExtension();
		$this->load->view('admin/history/ecredit_conversionhistory',$data);
	}

	public function approved_ecredit()
	{
		$this->load->model('admin_model');
		$data = $this->input->post('datas');
		$s = explode(',',$data);
		$buyecredit_id = $s[0];
		$member_id = $s[1];
		//$amount_data = $s[2];

		$amount = $this->input->post('amount');
		
		if(empty($amount))
		{
			echo 1;
		}
		else
		{
			$this->admin_model->approveEcredit($buyecredit_id,$member_id,$amount);
			echo '<div class="alert alert-success">Approved</div>';

		}
	}

	public function disapprove_ecredit()
	{
		$this->load->model('admin_model');
		$buyecredit_id = $this->input->get('buyecredit_id');
		$member_id = $this->input->get('member_id');

		$this->admin_model->disapproveEcredit($buyecredit_id,$member_id);
	 	echo 'Disapproved';
	}

	public function activate_free_basic()
	{
		$this->load->model('admin_model');
		$member_id = $this->input->get('member_id');
		
		$getMemberByID = $this->admin_model->getMemberByID($member_id);
			
		foreach($getMemberByID as $member)
		{
			$uname = $member->username;
			$lname = $member->lastname;
			$fname = $member->firstname;
			$full = ucwords($fname. ' '.$lname); 
			$email = $member->email;
			$password = $member->password;
		}
				  
			   
		$to      = $email;
		$subject = 'EZwealthsystem::Your account has been activated';
		$message = "Hi ".$full.",\r\n\r\nCONGRATULATIONS!\r\n\r\n\r\nYour account has been ACTIVATED in a basic subscription!\r\n\r\nYou can now use up to 10 capture pages for 1 year!\r\nYour affiliate marketing URL ".base_url()."member/".$uname."\r\nYour Log In Details\r\nUsername: ".$uname."\r\nPassword: ".$password."\r\n\r\n\r\n\r\nEZwealth System\r\n\r\n\r\nFor any questions you can email us at our support center here: customerservice@ezwealthpages.com";

	$headers = 'From: Customer Service<customerservice@ezwealthpages.com>' . "\r\n" .
	    'Reply-To: customerservice@ezwealthpages.com' . "\r\n" .
	    'X-Mailer: PHP/' . phpversion();

		if(!mail($to, $subject, $message, $headers))
		{
			//echo 'Message Sending Failed';
		}
		else
		{
			$this->admin_model->activateFree($member_id,'basic');
			echo 'Sucessfully activated';
		}
	}

	public function activate_free_premium()
	{

		$this->load->model('admin_model');
		$member_id = $this->input->get('member_id');
		$getMemberByID = $this->admin_model->getMemberByID($member_id);
			
		foreach($getMemberByID as $member)
		{
			$uname = $member->username;
			$lname = $member->lastname;
			$fname = $member->firstname;
			$full = ucwords($fname. ' '.$lname); 
			$email = $member->email;
			$password = $member->password;
		}
			  
		$to      = $email;
		$subject = 'EZwealthsystem::Your account has been activated';
		$message = "Hi ".$full.",\r\n\r\nCONGRATULATIONS!\r\n\r\n\r\nYour account has been ACTIVATED in a premium subscription!\r\n\r\nYou can now use up to 30 capture pages for 1 year!\r\nYour affiliate marketing URL ".base_url()."member/".$uname."\r\nYour Log In Details\r\nUsername: ".$uname."\r\nPassword: ".$password."\r\n\r\n\r\n\r\nEZwealth System\r\n\r\n\r\nFor any questions you can email us at our support center here: customerservice@ezwealthpages.com";

		$headers = 'From: Customer Service<customerservice@ezwealthpages.com>' . "\r\n" .
		    'Reply-To: customerservice@ezwealthpages.com' . "\r\n" .
		    'X-Mailer: PHP/' . phpversion();

		if(!mail($to, $subject, $message, $headers))
		{
			echo 'Message Sending Failed';
		}
		else
		{
			$this->admin_model->activateFree($member_id,'premium');
			echo 'Sucessfully activated';
		}
	
	}



}