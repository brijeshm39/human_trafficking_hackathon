<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');


/**
 * ================================================================================================
 * @author            =>  Brijesh Modi <brijeshmodi12@gmail.com>
 * @version           =>  1
 * @copyright         =>  Freedom For All Foundation.
 *
 * ------------------------------------------------------------------------------------------------
 * Total : 3 Methods
 * ------------------------------------------------------------------------------------------------
 *
 *
 * ================================================================================================
 */

class User extends CI_Controller{
    public function __construct() {
        parent::__construct();
        $this->load->model('user_model');
		$this->authentication->is_user_admin();
    }//End of constructor

	public function index(){
		$this->dashboard();
	}

	public function dashboard(){
		$this->load->view('templates/header');
		$this->load->view('user/user');
		$this->load->view('templates/footer');
	}
}