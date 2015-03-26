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
 * + index().........................Default handler of the constructor
 * + login().........................Helps users to login to the portal
 * + logout()........................Checks whether user is student or not
 *
 * ================================================================================================
 */

class Authenticate extends CI_Controller{

    public function __construct() {
        parent::__construct();
        $this->load->model('authenticate_model');

    }//End of constructor

    public function index(){
        $this->login();
    }//End of index

    /**
     * ----------------------------------------------------------------------------------------------------
     * Helps users to login to the portal
     * @access public
     * @param none
     * @return none
     * ----------------------------------------------------------------------------------------------------
     */
    public function login(){
        $data['title'] = "Login | Freedom For All  ";
        //check whether user_is logged in or not.i.e if Session is set or not

        if(isset($_SESSION['user_type'])){
            if($_SESSION['user_type'] == USER_TYPE_ADMIN){
                redirect('admin');
            }elseif($_SESSION['user_type'] == USER_TYPE_NORMAL){
                redirect('user');
            }
        }


        //If session is not set. the control comes here

        if(isset($_POST['login_button'])){
            $this->form_validation->set_rules('email','Username','strip_tags|trim|valid_email|required');
            $this->form_validation->set_rules('password','Password','strip_tags|trim|required');

            if($this->form_validation->run() == TRUE){
                //if validation is successful: Then check if user's credentials are valid or not
                $user_credentials = array(
                    'username'      => $this->input->post('email'),
                    'password'      => $this->authentication->encrypt($this->input->post('password'))
                );

                $data['login_result'] = $this->authenticate_model->authenticate_user_credentials($user_credentials);

                if($data['login_result'] == TRUE){
                    $username              = $this->input->post('email');
                    //get user's info
                    $info = $this->authenticate_model->get_user_info($username);
                    foreach($info->result_array() as $row){
                        extract($row);
                        $_SESSION['user_type']      = $user_type;
                        $_SESSION['user_email']     = $email;
                        $_SESSION['name']           = $name;
                    }//End foreach
//					var_dump($_SESSION);die();
                    $this->session->set_flashdata('success','Login successful');
					if(isset($_SESSION['user_type'])){
						if($_SESSION['user_type'] == USER_TYPE_ADMIN){
							redirect('admin');
						}elseif($_SESSION['user_type'] == USER_TYPE_NORMAL){
							redirect('user');
						}
					}
                }else{
                    $this->session->set_flashdata('error','Invalid Credentials. Please Try again');
                    redirect('authenticate/login');
                }
            }//End if isset
        }
        $this->load->view('templates/header',$data);
        $this->load->view('authenticate/login');
        $this->load->view('templates/message');
        $this->load->view('templates/footer');

    }//End of login

    /**
     * ----------------------------------------------------------------------------------------------------
     * Handles user registration process
     * @access public
     * @param none
     * @return none
     * ----------------------------------------------------------------------------------------------------
     */
    public function register(){

        if(isset($_SESSION['user_type'])){
            if($_SESSION['user_type'] == USER_TYPE_NORMAL){
                redirect('user');
            }
            elseif($_SESSION['user_type'] == USER_TYPE_ADMIN){
                redirect('admin');
            }
        }

        if(isset($_POST['register_button'])){

            $this->form_validation->set_rules('name','Full name','required|trim|strip_tags');
            $this->form_validation->set_rules('email','Email ID','required|trim|strip_tags|valid_email|is_unique[users.email]');
            $this->form_validation->set_rules('password','Password','required|trim|strip_tags');
            $this->form_validation->set_rules('password_confirm','Confirm Password','required|trim|strip_tags|matches[password]');
            $this->form_validation->set_rules('contactno','Contact No','required|trim|strip_tags|is_natural_no_zero|min_length[10]');
            $this->form_validation->set_rules('address','Address','required|trim|strip_tags');
            $this->form_validation->set_rules('city','City','required|trim|strip_tags|alpha');
            $this->form_validation->set_rules('pincode','Pincode','required|trim|strip_tags|is_natural_no_zero|min_length[5]');
            $this->form_validation->set_rules('state','State','required|trim|strip_tags|alpha');
            $this->form_validation->set_rules('country','Password','required');
            $this->form_validation->set_rules('self_description','Self Description','trim|strip_tags');
            $this->form_validation->set_message('is_unique', 'The Email ID is already registered.');
            $this->form_validation->set_rules('question','Security Question','required');
            $this->form_validation->set_rules('answer','Answer','trim|strip_tags|required');
            if($this->form_validation->run() == TRUE){

                $insert_data = array(
                    'name'               => ucwords(strtolower($this->input->post('name'))),
                    'email'              => strtolower($this->input->post('email')),
                    'password'           => $this->authentication->encrypt($this->input->post('password')),
                    'contactno'          => $this->input->post('contactno'),
                    'address'            => $this->input->post('address'),
                    'city'               => $this->input->post('city'),
                    'pincode'            => $this->input->post('pincode'),
                    'state'              => $this->input->post('state'),
                    'country'            => $this->input->post('country'),
                    'self_description'   => $this->input->post('self_description'),
                    'question_id'        => $this->input->post('question'),
                    'answer'             => strtolower($this->input->post('answer'))
                );

                $res = $this->authenticate_model->insert_user($insert_data);
                if($res){
                    $this->session->set_flashdata('success','Registration successful. Please login to continue');
                    redirect('authenticate/login');
                }else{
                    $this->session->set_flashdata('error','Unable to register. Please try again.');
                    redirect('authenticate/register');
                }
            }else{
               $this->session->set_flashdata('error','Validation Errors.');
                redirect('authenticate/register');
            }
        }

        $data['questions'] = $this->authenticate_model->get_questions();
        $data['countries'] = $this->authenticate_model->get_countries();
        $data['title']  = "Register | Freedom For All";
        $this->load->view('templates/header',$data);

        $this->load->view('authenticate/register');
        $this->load->view('templates/message');
        $this->load->view('templates/footer');
    }

    /**
     * ----------------------------------------------------------------------------------------------------
     * Destroys the session and logout
     * @access public
     * @param none
     * @return void
     * ----------------------------------------------------------------------------------------------------
     */
    public function logout(){
        session_destroy();
        $this->session->set_flashdata('success','Logged out successfully');
        redirect('authenticate/login');
    }//End of logout

    /**
     * @param int $length
     * @return string
     */
    private function generate_long_id($length = 25){
        $s = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, $length);
        $s = $s.(string)time();
        return $s;
    }

    public function forgot_password(){

        if(isset($_POST['submit'])){
            $check = $this->authenticate_model->is_email_in_db($_POST['email']);
            if($check){
                $_SESSION['check'] = TRUE;
                $_SESSION['security_email'] = $_POST['email'];
                redirect('authenticate/security_question');
            }
            else{
                $this->session->set_flashdata('error','This email id is not registered');
                redirect(authenticate/login);
            }
        }

        $this->load->view('templates/header');
        $this->load->view('authenticate/forgot_password');
        $this->load->view('templates/footer');
    }

    public function security_question(){

        if(isset($_POST['check_answer'])){
            $answer = strip_tags(trim($_POST['answer']));
            if($answer == $_SESSION['answer']){
                $_SESSION['user_email'] = $_SESSION['security_email'];
                $this->authenticate_model->fetch_usertype();
            };
        }

        if($_SESSION['check']){
            $data['question'] = $this->authenticate_model->get_sec_question($_SESSION['security_email']);
            $this->load->view('authenticate/security_question',$data);
        }else{
            redirect('authenticate/login');
        }

    }


}//End class Authenticate