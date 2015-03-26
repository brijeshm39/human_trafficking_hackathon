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
 * ================================================================================================
 */

class Admin extends CI_Controller{
    public function __construct() {
        parent::__construct();
        $this->load->model('admin_model');
		$this->authentication->is_user_normal();
    }//End of constructor

    /**
     * ------------------------------------------------------------------------------------------------
     * Loads the dashboard for Admin
     * ------------------------------------------------------------------------------------------------
     */
    public function index(){
//        $this->load->view('templates/header');
        $this->load->view('admin/dashboard');
        $this->load->view('templates/footer');
    }

	public function view_user(){
		$this->load->library("form_validation");
		$viewdata['details'] = $this->admin_model->view_user();
//		$this->load->view('templates/header');
		$this->load->view('admin/view_user',$viewdata);
		$this->load->view('templates/message');
		$this->load->view('templates/footer');
	}

	public function edit_user(){
		if($this->uri->segment(3))
			$id = $this->uri->segment(3);
		else
			redirect('admin');


		if(isset($_POST['update'])){
			$this->load->library("form_validation");
			$this->form_validation->set_rules('name','Full name','required|trim|strip_tags');
			//  $this->form_validation->set_rules('email','Email ID','required|trim|strip_tags|valid_email|is_unique[users.email]');
			//  $this->form_validation->set_rules('password','Password','required|trim|strip_tags');
			//  $this->form_validation->set_rules('password_confirm','Confirm Password','required|trim|strip_tags|matches[password]');
			// $this->form_validation->set_rules('contactno','Contact No','required|trim|strip_tags|is_natural_no_zero|min_length[10]');
			$this->form_validation->set_rules('address','Address','required|trim|strip_tags');
			$this->form_validation->set_rules('city','City','required|trim|strip_tags|alpha');
			$this->form_validation->set_rules('pincode','Pincode','required|trim|strip_tags|is_natural_no_zero|min_length[5]');
			$this->form_validation->set_rules('state','State','required|trim|strip_tags|alpha');
			$this->form_validation->set_rules('country','Password','required');
			$this->form_validation->set_rules('self_description','Self Description','trim|strip_tags');
			// $this->form_validation->set_message('is_unique', 'The Email ID is already registered.');


			if($this->form_validation->run()!=FALSE){
				$update_user = array(

					'name'               => $this->input->post('name'),
					'email'              => $this->input->post('email'),
					'password'           => $this->authentication->encrypt($this->input->post('password')),
					'contact_no'          => $this->input->post('contact_no'),
					'address'            => $this->input->post('address'),
					'city'               => $this->input->post('city'),
					'pincode'            => $this->input->post('pincode'),
					'state'              => $this->input->post('state'),
					'country'            => $this->input->post('country'),
					'self_description'   => $this->input->post('self_description'),

				);

				$result = $this->admin_model->update_user($update_user,$id);
				//$this->view_user();
				if($result)
				{
					$this->session->set_flashdata('success','Your update has been recorded');
					redirect('admin/view_user');
				}else{
					$this->session->set_flashdata('error','Please Try Again.');
					redirect('admin/view_user');

				}
			}
		}

		if($id!=NULL){
			$data_array['countries'] = $this->admin_model->get_countries();
			$data_array['edit'] = $this->admin_model->display_user($id);
			//$data_array['name'] = "Edit: ".$first_name." ".$middle_name." ".$last_name;
//			$this->load->view('templates/header');
			$this->load->view('admin/update_user',$data_array);
			$this->load->view('templates/message');
			$this->load->view('templates/footer');
		}

	}

}