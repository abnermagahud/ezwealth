<?php

class Member_model extends CI_Model{
	
	
	function getMember($member_id){
		$this->db->select('*');
		$this->db->from('member');
		
		$array = array(
		'member_id' => $member_id
		);

		$this->db->where($array);
		$query = $this->db->get();
		return $query->result();
		}
	
	
	function getPassword($member_id,$password){
		$this->db->select('*');
		$this->db->from('member');
		
		$array = array(
		'member_id' => $member_id,
		'password'  => $password        
		);

		$this->db->where($array);
		$query = $this->db->get();
		return $query->num_rows;
		}
		
	function updatePassword($member_id,$password){
		
		$data = array(
               'password' => $password, 
            );

		$this->db->where('member_id', $member_id);
		$this->db->update('member', $data); 
		}
		
	function getBankAccounts($member_id){
		$this->db->select('*');
		$this->db->from('bank_accounts');
		
		$array = array(
		'member_id' => $member_id
		);

		$this->db->where($array);
		$query = $this->db->get();
		return $query->result();
		}
	
	function deleteAccount($bank_account_id){
		
		
		$this->db->delete('bank_accounts', array('bank_account_id' => $bank_account_id));
		
	
		}
	function updateAccountNumber($member_id){
		
			$data = array(
               'account_number' => '' 
            );

		$this->db->where('member_id', $member_id);
		$this->db->update('member', $data); 
		}	
	
	function setPaypal($member_id,$paypal_email){
		
		$data = array(
  		'paypal_email' => $paypal_email,
		'member_id'	   => $member_id
		
	    );

	$this->db->insert('paypal', $data);  
		}
		
	function checkPaypal($member_id){
		
		$this->db->select('*');
		$this->db->from('paypal');
		
		$array = array(
		'member_id' => $member_id
		);

		$this->db->where($array);
		$query = $this->db->get();
		return $query->num_rows();  
		}	
		
		function getPaypal($member_id){
		
		$this->db->select('*');
		$this->db->from('paypal');
		
		$array = array(
		'member_id' => $member_id
		);

		$this->db->where($array);
		$query = $this->db->get();
		return $query->result();  
		}
		
	function updatePaypal($member_id,$paypal_email){
		
		$data = array(
               'paypal_email' => $paypal_email, 
			   
            );

		$this->db->where('member_id', $member_id);
		$this->db->update('paypal', $data); 
		}
		
	function setAccount($member_id,$bank_name,$account_name,$account_number){
		
		$data = array(
		'member_id'       => $member_id,
  		'bank_name'	      => $bank_name,
		'account_name'    => $account_name,
		'account_number'  => $account_number
		
	    );

	$this->db->insert('bank_accounts', $data); 
	
	 $data2 = array(
               'account_number' => $account_number, 
			   
            );

		$this->db->where('member_id', $member_id);
		$this->db->update('member', $data2);
		}
		
	
	
	function setPayment($member_id,$payment_for,$payment_mode,$processor,$reference_number,$senders_name,$notes,$proof_of_payment){
		

		
		$data = array(
		'member_id'       	  => $member_id,
		'payment_for'         => $payment_for,
  		'payment_mode'	      => $payment_mode,
		'processor'   		  => $processor,
		'reference_number'    => $reference_number,
		'sender_name'         => $senders_name,
		'notes'               => $notes,
		'status'              => 0,
		'proof_of_payment'    =>$proof_of_payment
		
	    );

	$this->db->insert('payment', $data); 
		}

	function setPaymentOverTheCounter($member_id,$payment_for,$payment_mode,$date,$senders_name,$notes)
	{
		$data = array(
		'member_id'       	  => $member_id,
		'payment_for'         => $payment_for,
  		'payment_mode'	      => $payment_mode,
		'sender_name'         => $senders_name,
		'notes'               => $notes,
		'status'              => 0,
		'date'   			  => $date
		
	    );

	$this->db->insert('payment', $data); 
	}
	
	function getReferrerMemberById($session_member_id){

		
		$query = $this->db->query('SELECT b.member_id
FROM  `referrals` AS a, member AS b
WHERE a.referrer_member_id = b.member_id
AND a.referred_member_id =  '.$session_member_id.' ');

		foreach($query->result() as $row){
			$memberid = $row->member_id;
			
			}
			if(empty($memberid))
			{
$member_id = 1;//default

			}else{

$member_id = $row->member_id;
			}
			return $member_id;
		
		
		}


	function setPaymentUsingCredit($member_id,$payment_for,$payment_mode){
		$getMember 	= $this->getMember($member_id);
		
		foreach($getMember as $member)
		{
			
			$expiration_date = $member->expiration_date;
			$account_status = $member->account_status;
		}
		
		if($account_status==0)
		{

			//$date = date('Y-m-d', strtotime('+1 year'));
			//$new_expiration =  date("Y-m-d", $date);

			  $date = new DateTime('today');
			  $date->add(new DateInterval('P365D'));
			  $new_expiration =  $date->format('Y-m-d');
		}
		else
		{
			//$date = strtotime("+1 year", strtotime($expiration_date));
			//$new_expiration =  date("Y-m-d", $date);	

			  $date = new DateTime($expiration_date);
			  $date->add(new DateInterval('P365D'));
			  $new_expiration =  $date->format('Y-m-d');
		}
		
		$data = array(
		'member_id'       	  => $member_id,
		'payment_for'         => $payment_for,
  		'payment_mode'	      => $payment_mode,
		'status' => 1
		
	    );
		
		$this->db->insert('payment', $data); 

		$memberdata = array(
			   'activation_date' =>$this->setdate(),
               'expiration_date' => $new_expiration,
               'account_status'  =>1,
               'has_website'     =>1
			 );

		$this->db->where('member_id', $member_id);
		$this->db->update('member', $memberdata); 

		
		}	
		
		function setBuyEcredit($member_id,$payment_mode,$processor,$reference_number,$senders_name,$notes,$image,$amount){
		
	
		$data = array(
		'member_id'       	  => $member_id,
  		'payment_mode'	      => $payment_mode,
		'processor'   		  => $processor,
		'reference_number'    => $reference_number,
		'sender_name'         => $senders_name,
		'notes'               => $notes,
		'amount'			  => $amount,
		'status'              => 0,
		'image'				  =>$image
			
	    );

	$this->db->insert('buyecredit', $data); 
		}

		function setBuyEcreditOverTheCounter($member_id,$payment_mode,$senders_name,$notes,$date,$amount)
		{
		
	
		$data = array(
		'member_id'       	  => $member_id,
  		'payment_mode'	      => $payment_mode,
  		'sender_name'         => $senders_name,
		'notes'               => $notes,
		'amount'			  => $amount,
		'status'              => 0,
		'date'				  => $date
			
	    );

	$this->db->insert('buyecredit', $data); 
		}
		
	function setSubscription($member_id,$subscription){
		$data = array(
               'subscription' => $subscription	   
			   
            );

		$this->db->where('member_id', $member_id);
		$this->db->update('member', $data); 
		}
	function getStatusPayment($member_id){
		
		$this->db->select('*');
		$this->db->from('payment');
		
		$array = array(
		'member_id' => $member_id
		);

		$this->db->where($array);
		$query = $this->db->get();
		return $query->result();  
		}
		
	function getActiveReferrals($member_id){
		
		$this->db->select('*');
		$this->db->from('referrals');
		$this->db->join('member','referrals.referred_member_id = member.member_id','inner');
		
		$array = array(
		'member.account_status'			 => 1,
		'referrals.referrer_member_id' 	=> $member_id
		);

		$this->db->where($array);
		
		$query = $this->db->get();
			
		return $query->result(); 

	}
		
	function getInactiveReferrals($member_id){
		$this->db->select('*');
		$this->db->from('referrals');
		$this->db->join('member','referrals.referred_member_id = member.member_id','inner');
		
		$array = array(
		'member.account_status'		=> 0,
		'referrals.referrer_member_id' 	=> $member_id
		);

		$this->db->where($array);
		$query = $this->db->get();
		return $query->result(); 
		
	}
		
	function updateStatus($member_id){
		
		$data = array(
               'account_status' => 2,// expired
			   'has_website'    => 0
			   
			   
            );

		$this->db->where('member_id', $member_id);
		$this->db->update('member', $data); 
		}
		
	function checkUsername($username){
		$this->db->select('*');
		$this->db->from('member');
		
		
		$array = array(
		'username'		=> $username,
		'type'			=> 'member'
		);

		$this->db->where($array);
		$query = $this->db->get();
		return $query->result();
		}
		
	function updateMember($member_id,$lname,$fname,$email,$mobile){
		$data = array(
               'lastname'  		=> $lname,
			   'firstname'	 	=> $fname,
			   'email' 	  	 	=> $email,
			   'mobile_number' 	=> $mobile
			   
            );

		$this->db->where('member_id', $member_id);
		$this->db->update('member', $data); 
		}
	
	
	function setLeads($member_id,$email,$mobile){
		$data = array(
  		'member_id' 	=> $member_id,
		'email'	   		=> $email,
		'contact_num' 	=> (empty($mobile) ? NULL : $mobile)
		
	    );

	$this->db->insert('leads', $data);
		}
		
		
	function getLeadsById($member_id){
		$this->db->select('*');
		$this->db->from('leads');
		
		
		$array = array(
		'member_id'		=> $member_id
		);

		$this->db->where($array);
		$query = $this->db->get();
		return $query->result();
		
		}
		
		function getEwallet($member_id){
			//echo $member_id;
			$query = $this->db->query('SELECT b.account_status, b.username,a.product,a.amount FROM `commission` as a, member as b WHERE a.member_id = b.member_id and a.referrer_id = '.$member_id.'');
		    return $query->result();	
			
		}
		function getTotal($member_id){
			
			$this->db->select_sum('amount');
			
			$array = array(
			'referrer_id'		=> $member_id
			);

		   $this->db->where($array);
			$query = $this->db->get('commission');
			foreach($query->result() as $row){
				$total = $row->amount;
				}
			
		$data = array(
  		'total_income' 		=> $total,
		'balance'	    	=> $total,
	
	    );
			$array_member = array(
			'member_id'		=> $member_id
			);

	$this->db->where($array_member);
	 $this->db->insert('transfer', $data);;
			
			}
			
		function getTransferedAmount($member_id){
			$this->db->select_sum('amount');
			
			$array = array(
			'member_id'		=> $member_id,
			'status'        => 1
			);

		   $this->db->where($array);
			$query = $this->db->get('transfer');
			foreach($query->result() as $row){
				$transfered = $row->amount;
				}
				return $transfered;
			
			}
			
		function setTransfer($member_id,$transfer_mode,$processor,$account_num,$amount){
			
		$data = array(
  		'member_id' 		=> $member_id,
		'transfer_mode'	    => $transfer_mode,
		'processor'			=> $processor,
		'amount'			=> $amount,
		'account_number'	=> $account_num,
		'transfer_date'		=> $this->setdatetime(),
		'status'			=> 0
			
	    );

	$this->db->insert('transfer', $data);
			}
			
		
		function updateAmount($member_id,$transfer_amount){
			
		$getMember 	= $this->getMember($member_id);
		
		foreach($getMember as $member){
			$tansfered = $member->total_encashed;
			$balance = $member->balance;
			}
			$new_transfered = $tansfered + $transfer_amount;
			$new_balance = $balance - $transfer_amount;
			
			$data = array(
			'total_encashed' => $new_transfered,
            'balance' => $new_balance, 
            );

		$this->db->where('member_id', $member_id);
		$this->db->update('member', $data); 
			
			}
			
		function existsPayment($member_id,$payment_for){
			
		$this->db->select('*');
		$this->db->from('payment');
		
		
		$array = array(
		'member_id'		=> $member_id,
		'payment_for'	=> $payment_for
		);

		$this->db->where($array);
		$query = $this->db->get();
		return ($query->num_rows()==0 ? 0 : 1);
			}
		
		function getAnnouncement(){
		$query = $this->db->query('SELECT * FROM `announcement` order by announcement_id desc limit 1');
		return $query->result();
			
			}
			
			
		function getReferrerName($session_member_id){
		
		$query = $this->db->query('SELECT b.username,b.firstname,b.lastname
FROM  `referrals` AS a, member AS b
WHERE a.referrer_member_id = b.member_id
AND a.referred_member_id =  '.$session_member_id.' ');

		return $query->result();
		}
		
		function getTransferByMemberId($member_id){
		$this->db->select('*');
		$this->db->from('transfer');
		
		
		$array = array(
		'member_id'		=> $member_id
		);

		$this->db->where($array);
		$this->db->order_by('transfer_id','desc');
		$query = $this->db->get();
		return $query->result();	
			}
			
			
	function getBank($member_id){
		$this->db->select('*');
		$this->db->from('bank_accounts');
		
		
		$array = array(
		'member_id'		=> $member_id
		);

		$this->db->where($array);
		$query = $this->db->get();
		return $query->result();
		
		}
		
	private function setdatetime(){
			date_default_timezone_set("Asia/Manila");
			return date('Y-m-d h:i:s');
			
			}
		private function setdate(){
			date_default_timezone_set("Asia/Manila");
			return date('Y-m-d');
			
			}
	
	public function getBankByMemberId($member_id){
		
		$this->db->select('*');
		$this->db->from('bank_accounts');
		
		
		$array = array(
		'member_id'		=> $member_id
		);

		$this->db->where($array);
		$query = $this->db->get();
		return ($query->num_rows()==0 ? 0 : 1 );
		
		}
		
		public function getBankById($bank_account_id){
		
		$this->db->select('*');
		$this->db->from('bank_accounts');
		
		
		$array = array(
		'bank_account_id'		=> $bank_account_id
		);

		$this->db->where($array);
		$query = $this->db->get();
		return $query->result();
		
		}
		
		public function updateBank($member_id,$bank_id,$bank_name,$account_name,$account_number){
			$data = array(
               'bank_name' 		=> $bank_name, 
			   'account_name'   => $account_name,
			   'account_number'	=> $account_number
            );

		$this->db->where('bank_account_id', $bank_id);
		$this->db->update('bank_accounts', $data); 
		
		 $data2 = array(
               'account_number' => $account_number, 
			   
            );

		$this->db->where('member_id', $member_id);
		$this->db->update('member', $data2);
			}
			
		public function getCapturePage($member_id){
		$this->db->select('*');
		$this->db->from('primary_capture_page');
		$this->db->join('capture_page','primary_capture_page.capture_page_id = capture_page.capture_page_id and primary_capture_page.member_id = '.$member_id.'','right');
		$query = $this->db->get();
		return $query->result();
		
			
			}	
		
			public function getPrimaryCapturePage($member_id,$page_name){
		$this->db->select('*');
		$this->db->from('primary_capture_page');
		$this->db->join('capture_page','primary_capture_page.capture_page_id = capture_page.capture_page_id','right');
		//SELECT * FROM `primary_capture_page` right join capture_page on primary_capture_page.capture_page_id = capture_page.capture_page_id where primary_capture_page.member_id = 1 and capture_page.page_name = 'capture-2'
		$array = array(
		'primary_capture_page.member_id' => $member_id,
		'capture_page.page_name'		 => $page_name
		);

		$this->db->where($array);
		$query = $this->db->get();
		return $query->result();
		
			
			}	
		public function makePrimary($capture_page_id,$member_id){
			
		$data = array(
  		'capture_page_id'	=> $capture_page_id,
		'member_id'	  		=> $member_id,
		'status'			=> 1
		
	    );

		$this->db->insert('primary_capture_page', $data); 
			}
		
		public function getLimit($member_id){
		
		$this->db->select('count(*) as limited');
		$this->db->from('primary_capture_page');
		
		
		$array = array(
		'member_id'		=> $member_id
		);

		$this->db->where($array);	
		$query = $this->db->get();
		foreach($query->result() as $row){
			$limit = $row->limited;
			}
		return $limit;
				
		}
		
		public function getPageDetails($member_id){
			
			
		$this->db->select('*');
		$this->db->from('primary_capture_page');
		
		
		$array = array(
		'member_id'		=> $member_id,
		'status'		=> 1
		);

		$this->db->where($array);
		$query = $this->db->get();
		return ($query->num_rows()==0 ? 0 : 1); 
			
		}
		
		
		public function updatePageDetails($member_id,$capture_page_id){
			
			$data = array(
				'capture_page_id' => $capture_page_id,
               	'status'		  => 1, 
            );

		$this->db->where('member_id', $member_id);
		$this->db->update('primary_capture_page', $data); 
			}
			
		public function setCpage($member_id,$capture_page_id,$youtube_video_id,$use_form,$webform){
			
		$data = array(
		'member_id'	  		=> $member_id,
  		'capture_page_id'	=> $capture_page_id,
		'youtube_video_id'	=> $youtube_video_id,
		'use_form'          => $use_form,
		'webform'		=> $webform
		
	    );

		$this->db->insert('members_capture_page', $data); 
			}	
		
		public function getMemberCpage($member_id,$capture_page_id){
			
		$this->db->select('*');
		$this->db->from('members_capture_page');
		
		
		$array = array(
		'member_id'				=> $member_id,
		'capture_page_id'		=> $capture_page_id
		);

		$this->db->where($array);
		$query = $this->db->get();
		return $query->result();	
			}
			
			
		public function existsMemberCpage($member_id,$capture_page_id){
			
		$this->db->select('*');
		$this->db->from('members_capture_page');
		
		
		$array = array(
		'member_id'				=> $member_id,
		'capture_page_id'		=> $capture_page_id
		);

		$this->db->where($array);
		$query = $this->db->get();
		return ($query->num_rows()==0 ? 0 : 1);	
			}
			
		public function updateCpage($member_id,$capture_page_id,$youtube_video_id,$use_form,$webform){
		$data = array(
		'youtube_video_id'	=> $youtube_video_id,
		'use_form' =>$use_form,
		'webform'		=> $webform
		);
			$this->db->update('members_capture_page', $data, array('member_id' => $member_id,'capture_page_id'=>$capture_page_id));
			
			}
			
		public function setCapturePageLeads($member_id,$email,$contact_num=NULL){
		$data = array(
  		'member_id' 	=> $member_id,
		'email'	   		=> $email,
		'contact_num'   => $contact_num
		
	    );

	$this->db->insert('leads', $data);
			
			}

		function setGetResponse($member_id,$api_key){

		$data = array(
               'get_response_key' => $api_key, 
            );

		$this->db->where('member_id', $member_id);
		$this->db->update('member', $data); 
		}	

function deactivate_page($capture_page_id,$member_id){
	
			$this->db->delete('primary_capture_page', array('capture_page_id' => $capture_page_id,'member_id'=>$member_id));
	}
	
	function update_capture($capture_page_id,$member_id)
	{
		$data = array(
               'youtube_video_id' => '', 
               'webform'     => ''
            );
		$where =  array('member_id' => $member_id, 'capture_page_id'=>$capture_page_id);
		$this->db->where($where);
		$this->db->update('members_capture_page', $data); 
	}	


	function setGetResponseAffiliate($member_id,$getresponse_affiliate)
	{
			$data = array(
	               'getresponse_affiliate' => $getresponse_affiliate, 
	            );

			$this->db->where('member_id', $member_id);
			$this->db->update('member', $data); 

	}

	function setAmountToConvert($member_id,$amount){
		$data = array(
		'member_id'	   => $member_id,
		'amount' =>$amount,
		'date' =>$this->setdate(),
		'status' => 1
		
	    );

	$this->db->insert('e_credit', $data); 

	$getMember = $this->getMember($member_id);
		foreach ($getMember as $member) {
			$balance = $member->balance;
			$ecredit_balance = $member->ecredit_balance;
			$converted_amount = $member->converted_amount;
		}
		$new_converted_amount = $converted_amount + $amount;
		$newbalance = $balance - $amount;
		$current_bal = $ecredit_balance + $amount;
			$member_data = array(
			        'balance' => $newbalance,
					'ecredit_balance' =>$current_bal,
					'converted_amount' =>$new_converted_amount
			            );

			$this->db->where('member_id', $member_id);
			$this->db->update('member', $member_data); 

	}

	function sendEcredit($member_id,$username,$amount){


		$getMember = $this->getMember($member_id);

		foreach ($getMember as $member) {
			$ecredit_balance = $member->ecredit_balance;
		}
			$new_balance = $ecredit_balance - $amount;
		$memberdata = array(
               'ecredit_balance' => $new_balance, 
            );

		$this->db->where('member_id', $member_id);
		$this->db->update('member', $memberdata);

	$reciever_id = $this->getMemberIdByUsername($username);
	$getMember = $this->getMember($reciever_id);

		foreach ($getMember as $member) {
			$ecreditbalance = $member->ecredit_balance;
		}
		$newbalance_receiver = $ecreditbalance + $amount;
		$member_data = array(
               'ecredit_balance' => $newbalance_receiver 
            );

		$this->db->where('member_id', $reciever_id);
		$this->db->update('member', $member_data);

		$logs = array(
  		'member_id' 	=> $member_id,
		'amount'	   => $amount,
		'to'           =>$username,
		'receiver_id'  =>$reciever_id,
		'sender_id'	   =>$member_id,
		'date'   => $this->setdate()
	    );

	$this->db->insert('ecredit_logs', $logs);

	}

function getMemberIdByUsername($username){

		$this->db->select('member_id');
		$this->db->from('member');
		
		$array = array(
		'username'				=> $username
		);

		$this->db->where($array);
		$query = $this->db->get();
		foreach($query->result() as $row){
		$member_id = $row->member_id;

		}
		return$member_id;

}

function updateEcreditBalance($member_id,$amount){

$getMember = $this->getMember($member_id);
		foreach ($getMember as $member) {
			$ecredit_balance = $member->ecredit_balance;
		}
	$new_credit = $ecredit_balance - $amount;
	$memberdata = array(
               'ecredit_balance' => $new_credit 
            );

		$this->db->where('member_id', $member_id);
		$this->db->update('member', $memberdata);
}

function getTransferCredit($member_id){
		$this->db->select('member.username, ecredit_logs.to, ecredit_logs.amount, ecredit_logs.date');
		$this->db->from('ecredit_logs');
		$this->db->join('member','member.member_id = ecredit_logs.member_id','inner');
		$this->db->order_by("ecredit_logs.ecredit_logs_id","desc");
		$query = $this->db->get();
		return $query->result();
}


public function getReferrerResponse($session_member_id){
		
		$query = $this->db->query('SELECT b.getresponse_affiliate
FROM  `referrals` AS a, member AS b
WHERE a.referrer_member_id = b.member_id
AND a.referred_member_id =  '.$session_member_id.' ');

		return $query->result();
}

	
function getSender($member_id){
$query = $this->db->query('SELECT ecredit_logs.ecredit_logs_id,ecredit_logs.receiver_id,member.lastname,member.firstname,member.username,ecredit_logs.amount,ecredit_logs.date FROM  `ecredit_logs` inner JOIN member ON member.member_id = ecredit_logs.sender_id WHERE ecredit_logs.sender_id = '.$member_id.' order by ecredit_logs.ecredit_logs_id desc');

return $query->result();

}

function getReceiver($member_id){
$query = $this->db->query('SELECT ecredit_logs.ecredit_logs_id,ecredit_logs.sender_id,member.lastname,member.firstname,member.username,ecredit_logs.amount,ecredit_logs.date FROM  `ecredit_logs` inner JOIN member ON member.member_id = ecredit_logs.sender_id WHERE ecredit_logs.receiver_id = '.$member_id.' order by ecredit_logs.ecredit_logs_id desc');

return $query->result();

}

	function getMemberInfo($member_id){

			$this->db->select('username,lastname,firstname');
			$this->db->from('member');
			
			
			$array = array(
			'member_id'	=> $member_id
			);

			$this->db->where($array);
			$query = $this->db->get();

			foreach($query->result() as $row)
			{
				$data = $row->username.' ('.$row->firstname.' '.$row->lastname.')';
			}
			return $data;

	}

	public function setLimit($member_id,$product){

		switch ($product) 
		{
			case 'basic':
				$limit = 10;
				break;
			
			case 'premium':
				$limit = 30;
				break;

		}

		$member_data = array(
		'capture_page_limit' => $limit
		
		);
		
		$this->db->where('member_id', $member_id);
		$this->db->update('member', $member_data);
		
		}

		function getCapturePageName($capture_page_id)
		{
			$this->db->select('page_name');
			$this->db->from('capture_page');
			$this->db->where('capture_page_id', $capture_page_id);
			$query = $this->db->get();
			
			foreach($query->result() as $row)
			{
				$page_name = $row->page_name;
			}
			return $page_name;
		}

		function getNewCapturePageId($page_name)
		{
			$this->db->select('capture_page_id');
			$this->db->from('capture_page');
			$this->db->where('page_name', $page_name);
			$query = $this->db->get();

			foreach($query->result() as $row)
			{
				$capture_page_id = $row->capture_page_id;
			}
			return $capture_page_id;
		}

		public function setLandingPage($member_id,$header_image,$footer_image,$youtube_id_1,$youtube_id_2,$youtube_id_3,$text1,$text2,$redirect_image_1,$redirect_image_2,$redirect_link_1,$redirect_link_2,$title1,$title2,$title3,$title4,$feature_image_1,$feature_image_2,$feature_image_3,$feature_image_4,$description_image_1,$description_image_2,$description_image_3,$description_image_4,$font_color,$footer_title_1,$footer_title_2,$footer_content_1,$footer_content_2)
		{

		$data = array(
		'member_id'=>$member_id,
		'header_image' =>$header_image,
		'footer_image' =>$footer_image,
		'youtube_id_1' => $youtube_id_1,
		'youtube_id_2' => $youtube_id_2,
		'youtube_id_3' => $youtube_id_3,
		'youtube_id_3' => $youtube_id_3,
		'text1'	=>$text1,
		'text2' => $text2,
		'redirect_image_1' => $redirect_image_1,
		'redirect_image_2' => $redirect_image_2,
		'redirect_link_1' => $redirect_link_1,
		'redirect_link_2' => $redirect_link_2,
		'title1'	=>$title1,
		'title2'	=>$title2,
		'title3'	=>$title3,
		'title4'	=>$title4,
		'feature_image_1' => $feature_image_1,
		'feature_image_2' => $feature_image_2,
		'feature_image_3' => $feature_image_3,
		'feature_image_4' => $feature_image_4,
		'description_image_1' => $description_image_1,
		'description_image_2' => $description_image_2,
		'description_image_3' => $description_image_3,
		'description_image_4' => $description_image_4,
		'font_color' => $font_color,
		'footer_title_1'	=>$footer_title_1,
		'footer_title_2'	=>$footer_title_2,
		'footer_content_1' => $footer_content_1,
		'footer_content_2' => $footer_content_2,
	    );

		$this->db->insert('landing_page', $data); 
		}

		public function existsLandingPage($member_id)
		{
			$this->db->select('count(landing_page_id) as counter');
			$this->db->from('landing_page');
			
			$array = array(
			'member_id'	=> $member_id
			);

			$this->db->where($array);
			$query = $this->db->get();

			foreach($query->result() as $row)
			{
				$counter = $row->counter;
			}
			if($counter > 0)
			{
				return 1;
			}
			else
			{
				return 0;
			}

		}

		public function getLandingPageInfo($member_id)
		{

		$this->db->select('*');
		$this->db->from('landing_page');
		
		
		$array = array(
		'member_id'				=> $member_id
		);

		$this->db->where($array);
		$query = $this->db->get();
		return $query->result();
		}


	public function sendMessage($member_id,$name,$phone,$content,$email)
	{
		$data = array(
  		'member_id' => $member_id,
		'name'	   => $name,
		'phone'	=>$phone,
		'content'  =>$content,
		'email'  =>$email,
		'date'   => $this->setdate()
	    );

	$this->db->insert('message', $data);
	}

	public function saveHeaderInfo($member_id,$lastname,$firstname,$email,$phone,$header_image,$footer_image,$action)
	{
		$counter =  $this->existsLandingPage($member_id);

		switch ($action) 
		{
			case 'insert':
			if($counter == 1 )
			{

				$member_data = array(
		  		'lastname' => $lastname,
				'firstname'=> $firstname,
				'mobile_number'=>$phone,
				'email'=>$email
			    );

			$this->db->where('member_id', $member_id);
			$this->db->update('member', $member_data);


			$data = array(
					'header_image'=> $header_image,
					'footer_image'=>$footer_image,
				    );

			$this->db->where('member_id', $member_id);
			$this->db->update('landing_page', $data);

			}
			else
			{
				$data = array(
				  		'member_id' => $member_id,
						'header_image'=> $header_image,
						'footer_image'=>$footer_image,
					    );

				$this->db->insert('landing_page', $data);
			}
				break;
		
			
			case 'update':

			$member_data = array(
		  		'lastname' => $lastname,
				'firstname'=> $firstname,
				'mobile_number'=>$phone,
				'email'=>$email
			    );

			$this->db->where('member_id', $member_id);
			$this->db->update('member', $member_data);


			$data = array(
					'header_image'=> $header_image,
					'footer_image'=>$footer_image,
				    );

			$this->db->where('member_id', $member_id);
			$this->db->update('landing_page', $data);
			
				break;
		}
	}

	public function saveYoutubeLinks($member_id,$youtube_video1,$youtube_video2,$youtube_video3,$text1,$text2,$redirect1,$redirect2,$redirect_link_1,$redirect_link_2,$video_title,$action)
	{
		$counter =  $this->existsLandingPage($member_id);

		switch ($action) 
		{
			case 'insert':
			if($counter == 1 )
			{
				$data = array(
					'video_title' =>$video_title,
			  		'youtube_id_1' => $youtube_video1,
					'youtube_id_2'=> $youtube_video2,
					'youtube_id_3'=>$youtube_video3,
					'text1'=>$text1,
					'text2'=>$text2,
					'redirect_image_1'=>$redirect1,
					'redirect_image_2'=>$redirect2,
					'redirect_link_1'=>$redirect_link_1,
					'redirect_link_2'=>$redirect_link_2
				    );
			$this->db->where('member_id', $member_id);
			$this->db->update('landing_page', $data);
			}
			else
			{
				$data = array(
					'member_id'	=>$member_id,
					'video_title' =>$video_title,
			  		'youtube_id_1' => $youtube_video1,
					'youtube_id_2'=> $youtube_video2,
					'youtube_id_3'=>$youtube_video3,
					'text1'=>$text1,
					'text2'=>$text2,
					'redirect_image_1'=>$redirect1,
					'redirect_image_2'=>$redirect2,
					'redirect_link_1'=>$redirect_link_1,
					'redirect_link_2'=>$redirect_link_2
				    );

			$this->db->insert('landing_page', $data);
			}
					
				break;
			
			case 'update':
				$data = array(
					'video_title' =>$video_title,
			  		'youtube_id_1' => $youtube_video1,
					'youtube_id_2'=> $youtube_video2,
					'youtube_id_3'=>$youtube_video3,
					'text1'=>$text1,
					'text2'=>$text2,
					'redirect_image_1'=>$redirect1,
					'redirect_image_2'=>$redirect2,
					'redirect_link_1'=>$redirect_link_1,
					'redirect_link_2'=>$redirect_link_2
				    );
			$this->db->where('member_id', $member_id);
			$this->db->update('landing_page', $data);
			break;
		}
	}


	public function saveFeaturedImages($member_id,$featured_title1,$featured_title2,$featured_title3,$featured_title4,$feature1,$feature2,$feature3,$feature4,$description1,$description2,$description3,$description4,$action)
	{
		$counter =  $this->existsLandingPage($member_id);
	
		switch ($action) 
		{
			case 'insert':
			if($counter == 1 )
			{
				$data = array(
		  			'title1'	=>$featured_title1,
					'title2'	=>$featured_title2,
					'title3'	=>$featured_title3,
					'title4'	=>$featured_title4,
					'feature_image_1' => $feature1,
					'feature_image_2' => $feature2,
					'feature_image_3' => $feature3,
					'feature_image_4' => $feature4,
					'description_image_1' => $description1,
					'description_image_2' => $description2,
					'description_image_3' => $description3,
					'description_image_4' => $description4
				    );
			$this->db->where('member_id', $member_id);
			$this->db->update('landing_page', $data);
			}
			else
			{
				$data = array(
					'member_id'	=>$member_id,
		  			'title1'	=>$featured_title1,
					'title2'	=>$featured_title2,
					'title3'	=>$featured_title3,
					'title4'	=>$featured_title4,
					'feature_image_1' => $feature1,
					'feature_image_2' => $feature2,
					'feature_image_3' => $feature3,
					'feature_image_4' => $feature4,
					'description_image_1' => $description1,
					'description_image_2' => $description2,
					'description_image_3' => $description3,
					'description_image_4' => $description4
				    );

			$this->db->insert('landing_page', $data);
			}
					
				break;
			
			case 'update':
				$data = array(
		  			'title1'	=>$featured_title1,
					'title2'	=>$featured_title2,
					'title3'	=>$featured_title3,
					'title4'	=>$featured_title4,
					'feature_image_1' => $feature1,
					'feature_image_2' => $feature2,
					'feature_image_3' => $feature3,
					'feature_image_4' => $feature4,
					'description_image_1' => $description1,
					'description_image_2' => $description2,
					'description_image_3' => $description3,
					'description_image_4' => $description4
				    );
			$this->db->where('member_id', $member_id);
			$this->db->update('landing_page', $data);
			break;
		}
	}


	public function saveColors($member_id,$background_color,$font_color,$footer_title_1,$footer_title_2,$footer_content_1,$footer_content_2,$action)
	{
		$counter =  $this->existsLandingPage($member_id);
	
		switch ($action) 
		{
			case 'insert':
			if($counter == 1 )
			{
				$data = array(
					'background_color'=>$background_color,
		  			'font_color' => $font_color,
					'footer_title_1'	=>$footer_title_1,
					'footer_title_2'	=>$footer_title_2,
					'footer_content_1' => $footer_content_1,
					'footer_content_2' => $footer_content_2
				    );

			$this->db->where('member_id', $member_id);
			$this->db->update('landing_page', $data);
			}
			else
			{
				$data = array(
					'member_id'	=>$member_id,
					'background_color'=>$background_color,
		  			'font_color' => $font_color,
					'footer_title_1'	=>$footer_title_1,
					'footer_title_2'	=>$footer_title_2,
					'footer_content_1' => $footer_content_1,
					'footer_content_2' => $footer_content_2
				    );

			$this->db->insert('landing_page', $data);
			}
					
				break;
			
			case 'update':
				$data = array(
					'background_color'=>$background_color,
		  			'font_color' => $font_color,
					'footer_title_1'	=>$footer_title_1,
					'footer_title_2'	=>$footer_title_2,
					'footer_content_1' => $footer_content_1,
					'footer_content_2' => $footer_content_2
				    );
			$this->db->where('member_id', $member_id);
			$this->db->update('landing_page', $data);
			break;
		}
	}


	public function deleteImage($member_id,$image)
	{
		switch ($image) {

			case 'header_image':
				$data = array(
					'header_image'=>''
				    );

				break;
			
			case 'footer_image':
			$data = array(
					'footer_image'=>''
				    );
	
				break;

			case 'redirect_image_1':
			$data = array(
					'redirect_image_1'=>''
				    );
	
				break;
			case 'redirect_image_2':
			$data = array(
					'redirect_image_2'=>''
				    );
	
				break;
			case 'feature_image_1':
			$data = array(
					'feature_image_1'=>''
				    );
	
				break;
			case 'feature_image_2':
			$data = array(
					'feature_image_2'=>''
				    );
	
				break;
			case 'feature_image_3':
			$data = array(
					'feature_image_3'=>''
				    );
	
				break;
			case 'feature_image_4':
			$data = array(
					'feature_image_4'=>''
				    );
	
				break;
		}

		$this->db->where('member_id', $member_id);
		$this->db->update('landing_page', $data);
			
	}

	public function getMessages($member_id)
	{
		$this->db->select('*');
		$this->db->from('message');
		
		
		$array = array(
		'member_id'	=> $member_id
		);

		$this->db->where($array);
		$query = $this->db->get();
		return $query->result();
	}

	public function deleteMessage($message_id)
	{
		$this->db->delete('message', array('message_id' => $message_id));
	}


	public function saveCampaign($member_id,$capture_page_id,$youtube_video_id,$campaign_name,$use_form,$redirect_url,$action)
	{
		switch ($action) 
		{
			case 'update':
				$data = array(
					'youtube_video_id'=>$youtube_video_id,
					'redirect_url' =>$redirect_url,
		  			'campaign_name' => $campaign_name,
		  			'use_form' =>$use_form
				    );
			$where = array(
				'member_id' =>$member_id,
				'capture_page_id' => $capture_page_id
				);
			$this->db->where($where);
			$this->db->update('members_capture_page', $data);
				break;
			
			case 'insert':

				$data = array(
					'member_id'=>$member_id,
					'capture_page_id' =>$capture_page_id,
					'youtube_video_id'=>$youtube_video_id,
					'redirect_url' =>$redirect_url,
		  			'campaign_name' => $campaign_name,
		  			'use_form'=>$use_form
				    );

			$this->db->insert('members_capture_page', $data);
				break;
		}
	}

} 
