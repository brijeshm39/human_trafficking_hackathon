<?php
	if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	/**
	 * ----------------------------------------------------------------------------------------------------
	 * @author Brijesh Modi <brijeshmodi12@gmail.com>
	 * @version 1.0
	 * @copyright (c) 2015, Freedom For All Foundation
	 * ----------------------------------------------------------------------------------------------------
	 */

	class Admin_model extends CI_Model{
		public function __construct() {
			parent::__construct();
		}//End of constructor

		public function view_user(){
			$data = "SELECT user_id,name, email, contact_no, self_description, status FROM users";
			$viewdata = $this->db->query($data);
			return $viewdata;
		}

		public function display_user($id){
			$edit = "SELECT * FROM users WHERE user_id = '$id'";
			$edituser = $this->db->query($edit);
			return $edituser;
		}

		public function update_user($update_user,$id){
			extract($update_user);
			$sql =  "UPDATE users SET name='$name',email='$email',contact_no='$contact_no',address='$address',city='$city',pincode='$pincode',state='$state',country='$country', self_description='$self_description'  WHERE user_id='$id'";
			return $this->db->query($sql);
//			echo $this->db->last_query();
		}

		public function get_countries(){
			return $this->db->query("SELECT * FROM countries ORDER BY countryName");
		}
	}