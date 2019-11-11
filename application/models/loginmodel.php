<?php

class Loginmodel extends CI_Model
{
	public function admin_login_valid( $username, $password )
	{
		$q = $this->db->where(['AdminName'=>$username, 'password'=>$password])->get('admins');

		if ( $q->num_rows() ) {
		 	
		 	return $q->row()->id;
		 } else {
		 	return FALSE;
		 }
	}

	public function user_login_valid( $email, $password)
	{
		// $password = md5($password);  //for encryption of the password
		$q = $this->db->where(['Email'=>$email, 'Password'=>$password])
						->get('users');

			if( $q->num_rows() ) {
				return $q->row()->id;
			}	
			
			else {
				return FALSE;
			}		
	}
} 