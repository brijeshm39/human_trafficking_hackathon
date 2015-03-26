<?php
	if ( ! defined('BASEPATH')) exit('No direct script access allowed');


	/**
	 * ================================================================================================
	 * @author            =>  Nilesh Thadani <nilesh.thadani@ves.ac.in>
	 * @version           =>  1
	 * @copyright         =>  Freedom For All Foundation.
	 *
	 * ------------------------------------------------------------------------------------------------
	 * Total : 1 Methods
	 * ------------------------------------------------------------------------------------------------
	 *
	 * + index().........................Default handler of the constructor
	 *
	 * ================================================================================================
	 */
	class Donate extends CI_Controller {

		public function __construct() {
			parent::__construct();
			$this->authentication->is_session_set();

		}//End of constructor

		public function index()	{
			$this->load->view('templates/header');
			$this->load->view('donation/donate');
			$this->load->view('templates/message');
			$this->load->view('templates/footer');
		}
		//end of index

		public function accept(){
			if(isset($_POST['submit'])){
			$this->form_validation->set_rules('amount','Money','is_natural_no_zero');
				$this->form_validation->set_rules('credit_card','Credit card number','is_natural_no_zero');
			if($this->form_validation->run()!==FALSE){
					$this->load->view('templates/header');
					$this->load->view('donation/success');
					$this->load->view('templates/footer');
				}else{
					$this->session->set_flashdata('error', validation_errors());
					redirect('donate');
				}
			}
			else
				redirect('donate');
		}
	}