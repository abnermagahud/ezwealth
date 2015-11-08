<?php

class Main_model extends CI_Model{
	
	
	function login($username,$password){
		$this->db->select('*');
		$this->db->from('member');
		
		$array = array(
		'username' => $username, 
		'password' => $password,
		'type'     => 'member'
		);

		$this->db->where($array);
		$query = $this->db->get();
		return $query->result();

		}
	function setAccount($username,$password,$lname,$fname,$mobile_number,$email,$referred_by){
		
	$data = array(
   'username' 			=> $username,
   'password' 			=> $password,
   'lastname' 			=> $lname,
   'firstname'			=> $fname,
   'mobile_number'  	=> $mobile_number,
   'email'				=> $email,
   'referred_by'		=> $referred_by,
   'registration_date'  => $this->setDate(),
   'account_status' 	=> '0',
   'type'               => 'member',
   'getresponse_affiliate' => 'rommeldejesus'
	);

	$this->db->insert('member', $data); 
		}
	
		
	function setDate(){
		$date = date('Y-m-d');
		return $date;
		}
		
		function getLastInsertedId(){
			
		$this->db->select('max(member_id) as member_id');
		$this->db->from('member');
		
		
		$array = array(
		'type'		=> 'member'
		);

		$this->db->where($array);
		$query = $this->db->get();
		foreach($query->result() as $row){
			$member_id = $row->member_id;
			}
		return $member_id;
			}	
			
		function setReferral($referrer_id,$member_id){
		$data = array(
  		'referrer_member_id' 	=> $referrer_id,
		'referred_member_id'	=> $member_id
		
	    );

		$this->db->insert('referrals', $data);
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
		return ($query->num_rows()==0 ? 0 : 1);
			}
			
		function checkEmail($email){
			
		$this->db->select('*');
		$this->db->from('member');
		
		
		$array = array(
		'email'		=> $email,
		'type'			=> 'member'
		);

		$this->db->where($array);
		$query = $this->db->get();
		return ($query->num_rows()==0 ? 0 : 1);
			}	
	}
