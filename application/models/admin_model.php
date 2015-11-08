<?php

class Admin_model extends CI_Model{
	
	
	public function loggedIn($username,$password){
		
		$this->db->select('*');
		$this->db->from('member');
		
		$array = array(
		'username' => $username, 
		'password' => $password,
		'type'	   => 'admin'
		);

		$this->db->where($array);
		$query = $this->db->get();
		return $query->result();

		
		}
		
	public function active_members(){
		$this->db->select('*');
		$this->db->from('member');
		
		$array = array(
		'account_status' => 1,
		'type'	   => 'member'
		);

		$this->db->where($array);
		$query = $this->db->get();
		return $query->result();
		}
	
	public function inactive_members(){
		$this->db->select('*');
		$this->db->from('member');
		
		$array = array(
		'account_status' => 0,
		'type'	   => 'member'
		);

		$this->db->where($array);
		$query = $this->db->get();
		return $query->result();
		}	
		
	public function expired_members(){
		$this->db->select('*');
		$this->db->from('member');
		
		$array = array(
		'account_status' => 2,
		'type'	   => 'member'
		);

		$this->db->where($array);
		$query = $this->db->get();
		return $query->result();
		}
			
	public function getAdmin(){
		$this->db->select('*');
		$this->db->from('member');
		
		$array = array(
		'type' => 'admin'
		);

		$this->db->where($array);
		$query = $this->db->get();
	
		return $query->result();
		}
		
	public function getAnnouncement(){
		$this->db->select('*');
		$this->db->from('announcement');
		$this->db->order_by("announcement_id", "desc"); 
		$query = $this->db->get();
		return $query->result();
		}
		
	public function deleteAnnouncement($announcement_id){
		$this->db->delete('announcement', array('announcement_id' => $announcement_id)); 
		
		}
		
	public function setAnnouncement($title,$announcement){
		$data = array(
  		'title'			 => $title,
		'contents'	     => $announcement,
		'date_created'   => $this->setDate()
		
	    );

	$this->db->insert('announcement', $data);  
		}
	
	public function setAdmin($username,$lname,$fname,$password,$admin_email){
		
		$data = array(
  		'username'	  => $username,
		'password'    => $password,
		'lastname'	  => $lname,
		'firstname'   => $fname,
		'email'       => $admin_email,
		'type'		  => 'admin'
		 
	    );

	$this->db->insert('member', $data);
		}
	
	public function deleteAdmin($admin_id){
		$this->db->delete('member', array('member_id' => $admin_id)); 
		
		}
		
	private function setDate(){
		return date('Y-m-d');
		}
		
	public function getPayment($payment_for){
		$this->db->select('*');
		$this->db->from('payment');
		$this->db->join('member', 'payment.member_id = member.member_id','inner');
		
		switch($payment_for){
			case 'basic':
				$array = array(
				'payment_for' => 'basic'
				);
			break;
			
			case 'premium':
				$array = array(
				'payment_for' => 'premium'
				);
			break;
			
			case '6_months_extension':
			$array = array(
				'payment_for' => '6_months_extension'
				);
			break;
			
			case '1_year_extension':
			$array = array(
				'payment_for' => '1_year_extension'
				);
			break;

			case 'bundle':
			$array = array(
				'payment_for' => 'bundle'
				);
			break;
			
			}
	

		$this->db->where($array);
		$this->db->order_by("payment_id", "desc"); 
		$query = $this->db->get();
		return $query->result();
		
		}
	
		
	public function subscriptionActivation($payment_id,$member_id,$product){
		$expiration_date = date('Y-m-d', strtotime('+1 year'));
		$data = array(
               'status' => '1', 
            );

		$this->db->where('payment_id', $payment_id);
		$this->db->update('payment', $data);
		
		switch ($product) {
			case 'Basic':
				$limit = 10;
				break;
			
			case 'Premium':
				$limit = 30;
				break;

		}
		$member_data = array(
		'account_status'   => 1,
		'has_website'	   => 1,
		'activation_date'  => $this->setDate(),
		'expiration_date'  => $expiration_date,
		'capture_page_limit' => $limit
		
		);
		
		$this->db->where('member_id', $member_id);
		$this->db->update('member', $member_data);
		
		}
		

	public function monthsActivation($payment_id,$member_id){
		
		
		$getMemberByID = $this->getMemberByID($member_id);
		foreach($getMemberByID as $member){
			$expiration_date = $member->expiration_date;
	    }
		
		$date = strtotime("+6 months", strtotime($expiration_date));
		$new_expiration =  date("Y-m-d", $date);
		
		$data = array(
               'status' => '1', 
            );

		$this->db->where('payment_id', $payment_id);
		$this->db->update('payment', $data); 
		
		$member_data = array(
		'account_status'   => 1,
		'has_website'	   => 1,
		'activation_date'  => $this->setDate(),
		'expiration_date'  => $new_expiration
		);
		
		$this->db->where('member_id', $member_id);
		$this->db->update('member', $member_data);
		}
		
	public function yearActivation($payment_id,$member_id){
		$getMemberByID = $this->getMemberByID($member_id);
		foreach($getMemberByID as $member){
			$expiration_date = $member->expiration_date;
	    }
		
		$date = strtotime("+1 year", strtotime($expiration_date));
		$new_expiration =  date("Y-m-d", $date);
		$data = array(
               'status' => '1', 
            );
		$this->db->where('payment_id', $payment_id);
		$this->db->update('payment', $data); 
		
		
		$member_data = array(
		'account_status'   => 1,
		'has_website'	   => 1,
		'activation_date'  => $this->setDate(),
		'expiration_date'  => $new_expiration
		);
		
		$this->db->where('member_id', $member_id);
		$this->db->update('member', $member_data); 
		}
		
	public function getRequest($transfer_mode){
		
		$this->db->select('*');
		$this->db->from('transfer');
		$this->db->join('member','transfer.member_id = member.member_id','inner');
		
		switch($transfer_mode){
			case 'bank':
			$array = array(
				'transfer_mode' => 'bank',
				'status'		=> '0'
				);
			break;
			
			case 'remittance':
			$array = array(
				'transfer_mode' => 'remittance',
				'status'		=> '0'
				);
			break;
			
			case 'paypal':
				$array = array(
				'transfer_mode' => 'paypal',
				'status'		=> '0'
				);
			break;
				
			}
			
				
		$this->db->where($array);
		$this->db->order_by("transfer_id", "desc"); 
		$query = $this->db->get();
		return $query->result();
		}
		
		public function getHistory($transfer_mode){
		
		$this->db->select('*');
		$this->db->from('transfer');
		$this->db->join('member','transfer.member_id = member.member_id','inner');
		
		switch($transfer_mode){
			case 'bank':
			$array = array(
				'transfer_mode' => 'bank',
				'status'		=> '1'
				);
			break;
			
			case 'remittance':
			$array = array(
				'transfer_mode' => 'remittance',
				'status'		=> '1'
				);
			break;
			
			case 'paypal':
				$array = array(
				'transfer_mode' => 'paypal',
				'status'		=> '1'
				);
			break;
				
			}
			
				
		$this->db->where($array);
		$this->db->order_by("transfer_id", "desc"); 
		$query = $this->db->get();
		return $query->result();
		}
		
		public function transfer_fund($transfer_id){
			
			
			$data = array(
				'transfer_date' => $this->setDateTime(),
                'status' => '1', 
            );
			
		$this->db->where('transfer_id', $transfer_id);
		$this->db->update('transfer', $data); 
			}
			
			
		public function updateAdmin($admin_id,$username,$lname,$fname,$email){
			
		$admin_data = array(
		'username'   => $username,    
		'lastname'   => $lname,
		'firstname'  => $fname,
		'email'      => $email
		);
		
		$this->db->where('member_id', $admin_id);
		$this->db->update('member', $admin_data);
			}
			
		public function getAdminById($admin_id){
			
		$this->db->select('*');
		$this->db->from('member');
		
		$array = array(
		'member_id' =>$admin_id
		
		);
		$this->db->where($array);
		
		$query = $this->db->get();
		return $query->result();
			
			}
			
			
		public function updateAdminPassword($admin_id,$password){
		$admin_data = array(
		'password'   => $password,    
		
		);
		
		$this->db->where('member_id', $admin_id);
		$this->db->update('member', $admin_data);
			
			}
			

	public function getAnnouncementById($announcement_id){
			
		$this->db->select('*');
		$this->db->from('announcement');
		
		$array = array(
		'announcement_id' =>$announcement_id
		
		);
		$this->db->where($array);
		
		$query = $this->db->get();
		return $query->result();
			
			}
	
	
	public function updateAnnouncement($announcement_id,$title,$content){
		$announcement_data = array(
		'title'  	 	=> $title,    
		'contents'   	=> $content,
		'date_created'  => $this->setDate()
		);
		
		$this->db->where('announcement_id', $announcement_id);
		$this->db->update('announcement', $announcement_data);
			
			}
	
	public function countInactiveMembers(){
		
		$this->db->select('count(*) as inactive');
		$this->db->from('member');
		
		$array = array(
		'account_status' =>0,
		'type'			 => 'member'
 		
		);
		$this->db->where($array);
		
		$query = $this->db->get();
		
		foreach($query->result() as $row){
			$inactive = $row->inactive;
			}
		return $inactive;


		}
		
		public function countActiveMembers(){
		
		$this->db->select('count(*) as active');
		$this->db->from('member');
		
		$array = array(
		'account_status' =>1,
		'type'			 => 'member'
 		
		);
		$this->db->where($array);
		
		$query = $this->db->get();
		
		foreach($query->result() as $row){
			$active = $row->active;
			}
		return $active;


		}
		public function countMonthsExtension(){
		
		$this->db->select('count(*) as months_extension');
		$this->db->from('payment');
		
		$array = array(
		'payment_for' =>'6_months_extension'
 		
		);
		$this->db->where($array);
		
		$query = $this->db->get();
		
		foreach($query->result() as $row){
			$months_extension = $row->months_extension;
			}
		return $months_extension;


		}
		
		public function countYearExtension(){
		
		$this->db->select('count(*) as year_extension');
		$this->db->from('payment');
		
		$array = array(
		'payment_for' =>'1_year_extension'
 		
		);
		$this->db->where($array);
		
		$query = $this->db->get();
		
		foreach($query->result() as $row){
			$year_extension = $row->year_extension;
			}
		return $year_extension;


		}
		
		public function getLeads(){
			
		$query = $this->db->query("SELECT member.firstname,member.lastname,leads.email,leads.contact_num FROM `leads` inner join member on member.member_id = leads.member_id");
		
		return $query->result();
			
			}
		public function getMemberLeads($member_id){

				
		$this->db->select('count(*) as counter');
		$this->db->from('leads');
		
		$array = array(
		'member_id' => $member_id
		);
		$this->db->where($array);
		
		$query = $this->db->get();
		foreach($query->result() as $row){
			$counter = $row->counter;
		}
		return $counter;
			}
		
		public function getMemberByID($member_id){
		$this->db->select('*');
		$this->db->from('member');
		
		$array = array(
		'member_id' =>$member_id
		
		);
		$this->db->where($array);
		
		$query = $this->db->get();
		return $query->result();
			
			}	
			
		public function setMemberCommission($member_id,$refferer_id,$product,$amount){
		
			$multiply = 0.300 * $amount;
			$commission = $multiply;
			
						  
		$data = array(
  		'member_id'		 => $member_id,
		'referrer_id'	 => $refferer_id,
		'product'	     => $product,
		'amount'         => $commission
		
	    );

		
		$this->db->insert('commission', $data); 
		$this->setSales($member_id,$amount,$commission,$product);
			}
			
function setSales($member_id,$amount,$commission,$product){
$sales_data  = array(
			'member_id' => $member_id,
			'amount' => $amount,
			'commission' => $commission,
			'product' =>$product,
			'date'   => $this->setDate()

			);
$this->db->insert('company_sales', $sales_data);
}
			
			
function getReferrer($session_member_id){
		
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
		
	function insertAmmountToMember($member_id,$amount){
		
		$getMemberByID = $this->getMemberByID($member_id);
		foreach($getMemberByID as $member){
			$total_income = $member->total_income;
			$balance = $member->balance;
			$transfered = $member->total_encashed;
		
	    }
		
		$multiply = 0.300 * $amount;
		$commission = $multiply;
		$total = $total_income + $commission;
		
		$new_balance = $balance + $commission;
		
		$data = array(
               'total_income' => $total,
			   'balance' 	  => $new_balance
            );

		$this->db->where('member_id', $member_id);
		$this->db->update('member', $data);
		}
		
		function getAllMembers(){
		$query = $this->db->query("SELECT * FROM `member` WHERE account_status = 1 and type='member' and total_income  > 0");	
		
		return $query->result();

			}
			
		function disapproveSubscription($payment_id){
		$this->db->delete('payment', array('payment_id' => $payment_id));
			}
			
		private function setDateTime(){
			date_default_timezone_set("Asia/Manila");
			return date('Y-m-d h:i:s');
			
			}
			
		public function getPaymentStatus($payment_for){
		$this->db->select('count(*) as counter');
		$this->db->from('payment');
		
		$array = array(
		'payment_for' =>$payment_for,
		'status'      => 0
		
		);
		
		$this->db->where($array);
		
		$query = $this->db->get();
		foreach($query->result() as $row){
			$counter = $row->counter;
				
			}
		return $counter;
			}
		public function getTotalSales(){
		$this->db->select('sum(amount) as sales, sum(commission) as commission');
		$this->db->from('company_sales');
		
		$query = $this->db->get();
		return $query->result();

		}


		function getDailySales(){

			$query = $this->db->query("SELECT date, SUM( amount ) AS amount, SUM( commission ) AS commission FROM  `company_sales` GROUP BY date DESC");
			return $query->result();

		}

		function getMonthlySales(){

			$query = $this->db->query("SELECT date as month, SUM( amount ) AS amount, SUM( commission ) AS commission FROM  `company_sales` GROUP BY month(date) DESC");
			return $query->result();

		}

		function getWeeklySales(){
			    
			$query = $this->db->query("SELECT WEEK(date) as week, date, SUM( amount ) AS amount, SUM( commission ) AS commission FROM  `company_sales`  GROUP BY week DESC");
			return $query->result();

		}

		public function bundleactivation($member_id,$payment_id){

		$getMemberByID = $this->getMemberByID($member_id);

		foreach($getMemberByID as $member){
			$capture_page_limit = $member->capture_page_limit;
			$subscription = $member->subscription;
	    }
	    if($subscription=="premium"){
	    	$limit = $capture_page_limit;
	    }else{
	    	$limit = $capture_page_limit + 5;
	    }
	    
	    $data = array(
               'status' => '1', 
            );

		$this->db->where('payment_id', $payment_id);
		$this->db->update('payment', $data);

		$member_data = array(
		'capture_page_limit' => $limit
		
		);
		
		$this->db->where('member_id', $member_id);
		$this->db->update('member', $member_data);
		}

		function getEcredit(){

		$this->db->select('*');
		$this->db->from('e_credit');
		$this->db->join('member', 'e_credit.member_id = member.member_id','left');
		$this->db->where('status', 0);
		$this->db->order_by("ecredit_id", "desc"); 
		$query = $this->db->get();
		return $query->result();
		}

		function getEcreditHistory(){

		$this->db->select('*');
		$this->db->from('e_credit');
		$this->db->join('member', 'e_credit.member_id = member.member_id','left');
		$this->db->where('status', 1);
		$this->db->order_by("ecredit_id", "desc"); 
		$query = $this->db->get();
		return $query->result();
		}

		function getEcreditLogs(){
		$this->db->select('*');
		$this->db->from('ecredit_logs');
		$this->db->join('member', 'member.member_id = ecredit_logs.member_id','left');
		$this->db->order_by("ecredit_logs_id", "desc"); 
		$query = $this->db->get();
		return $query->result();
			
		}

		public function approveEcredit($buyecredit_id,$member_id,$amount){

		$data = array(
		'status' => 1
		
		);

		$where = array(
		'buyecredit_id' => $buyecredit_id
		);

		$this->db->where($where);
		$this->db->update('buyecredit', $data);

		$getMemberByID = $this->getMemberByID($member_id);
		
		foreach($getMemberByID as $member)
		{
			$ecredit_balance  =  $member->ecredit_balance;
		}
		
		$newbalance = $ecredit_balance + $amount;
		
		$memberdata = array(
		'ecredit_balance' =>  $newbalance
		
		);


		$this->db->where('member_id',$member_id);
		$this->db->update('member', $memberdata);

		}




function getEcreditById($ecredit_id){

		$this->db->select('*');
		$this->db->from('e_credit');
		$this->db->where('ecredit_id', $ecredit_id);
		$query = $this->db->get();
		return $query->result();
}

function disapproveEcredit($buyecredit_id,$member_id){

	$this->db->delete('buyecredit', array('buyecredit_id' => $buyecredit_id)); 
}


	function getPaymentForEcredit(){
	
		$this->db->select('buyecredit.payment_mode,buyecredit.processor, buyecredit.reference_number,buyecredit.notes,buyecredit.buyecredit_id,buyecredit.member_id,member.username,member.lastname,member.firstname,buyecredit.amount,buyecredit.status,buyecredit.image');
		$this->db->from('buyecredit');
		$this->db->join('member', 'buyecredit.member_id = member.member_id','inner');
		$this->db->order_by("buyecredit.buyecredit_id", "desc"); 
		$query = $this->db->get();
		return $query->result();

	}


	public function activateFree($member_id,$membership_type)
	{
		$expiration_date = date('Y-m-d', strtotime('+1 year'));

		switch ($membership_type) {
			case 'basic':
				
				$data = array(
		               'activation_date' => $this->setDate(), 
		               'expiration_date'=>$expiration_date, 
		               'account_status' =>1,
		               'has_website'	=>1,
		               'subscription'	=> 'basic',
		               'capture_page_limit'	=> 10
		            );

				$this->db->where('member_id', $member_id);
				$this->db->update('member', $data);

				$free = array(
			  		'member_id'			 => $member_id,
					'payment_for'	     => 'basic',
					'status'   => 1					
				    );

				$this->db->insert('payment', $free);  
		

				break;
			
			case 'premium':
				$data = array(
		               'activation_date' => $this->setDate(), 
		               'expiration_date'=>$expiration_date, 
		               'account_status' =>1,
		               'has_website'	=>1,
		               'subscription'	=> 'premium',
		               'capture_page_limit'	=> 30
		            );

				$this->db->where('member_id', $member_id);
				$this->db->update('member', $data);

				$free = array(
			  		'member_id'			 => $member_id,
					'payment_for'	     => 'premium',
					'status'   => 1					
				    );

				$this->db->insert('payment', $free);  
				
				break;
		}
	}





	}