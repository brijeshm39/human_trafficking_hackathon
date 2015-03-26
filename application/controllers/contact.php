<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 *
 */
class Contact extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('contact_model');
//        $this->load->library('email');

    }

//end of constructor

    public function index() {
        $this->contact_us();
    }

    public function suggestion(){

        if (isset($_POST['submitsuggestion'])) {
            $this->form_validation->set_rules('subject', 'Subject', 'required|trim|strip_tags');
            $this->form_validation->set_rules('description', 'Description', 'required|trim|strip_tags');

            if ($this->form_validation->run() !== FALSE) {

                $user_email = $_SESSION['user_email'];
                $user_email = "brijesh.modi@ves.ac.in";

                $subject = $_POST['subject'];
                $description = $_POST['description'];
                $added_on = date('Y-m-d H:i:s');
                $user_email = $_SESSION['user_email'];
                $user_email = "brijesh.modi@ves.ac.in";

                $arr = array(
                    "vsubject" => $subject,
                    "vdescription" => $description,
                    "vadded_on" => $added_on,
                    "vuser_email" => $user_email

                );
                $res = $this->contact_model->submit_suggestion($arr);

                if($res){
                    $this->email->clear();
                    $this->email->set_newline("\r\n");
                    $this->email->to('nisha.sajnani@ves.ac.in');
                    $this->email->from($user_email);
                    $config['charset'] = 'utf-8';
                    $config['wordwrap'] = TRUE;
                    $config['mailtype'] = 'html';
                    $this->email->initialize($config);
                    $this->email->subject($_POST['subject']);
                    //$message=$this->load->view('email/meetings_template',$fetch_email,TRUE);
                    $this->email->message($_POST['description']);
                    $this->email->send();

                    $this->session->set_flashdata('success','Your suggestion has been recorded');
                    redirect('contact/suggestion');
                }else{
                    $this->session->set_flashdata('error','Please Try Again.');
                    redirect('contact/suggestion');
                }


            }
        }

        $data['title'] = "Suggestion | Freedom for all";
        $this->load->view('templates/header',$data);
        $this->load->view('contact/suggestion');
		$this->load->view('templates/message');
        $this->load->view('templates/footer');
    }

    public function complain(){
        if (isset($_POST['submitcompliant'])) {
            $this->form_validation->set_rules('subject', 'Subject', 'required|trim|strip_tags');
            $this->form_validation->set_rules('description', 'Description', 'required|trim|strip_tags');
            $this->form_validation->set_rules('address_of_victim', 'Address of Victim', 'required|trim|strip_tags');


            if ($this->form_validation->run() !== FALSE) {

                $user_email = $_SESSION['user_email'];
                $user_email = "brijesh.modi@ves.ac.in";

                $subject = $_POST['subject'];
                $description = $_POST['description'];
                $victim = $_POST['victim'];
                $age_group = $_POST['age_group'];
                $address_of_victim = $_POST['address_of_victim'];
                $added_on = date('Y-m-d H:i:s');
                $user_email = $_SESSION['user_email'];
                $user_email = "brijesh.modi@ves.ac.in";

                $arr = array(
                    "vsubject" => $subject,
                    "vdescription" => $description,
                    "vvictim" => $victim,
                    "vage_group" => $age_group,
                    "vaddress_of_victim" => $address_of_victim,
                    "vadded_on" => $added_on,
                    "vuser_email" => $user_email

                );
               $res = $this->contact_model->submit_compliant($arr);
                if($res)
                {
                $this->email->clear();
                $this->email->set_newline("\r\n");
                $this->email->to('nisha.sajnani@ves.ac.in');
                $this->email->from($user_email);
                $config['charset'] = 'utf-8';
                $config['wordwrap'] = TRUE;
                $config['mailtype'] = 'html';
                $this->email->initialize($config);
                $this->email->subject($_POST['subject']);
                //$message=$this->load->view('email/meetings_template',$fetch_email,TRUE);
                $this->email->message($_POST['description']);
                $this->email->send();

                    $this->session->set_flashdata('success','Your complain has been recorded');
                    redirect('contact/complain');
                }else{
                    $this->session->set_flashdata('error','Please Try Again.');
                    redirect('contact/complain');
                }
            }
        }
        $data['title'] = "Complain | Freedom For All";
        $this->load->view('templates/header',$data);

        $this->load->view('contact/complain');
		$this->load->view('templates/message');
         $this->load->view('templates/footer');
    }

    public function contact_us(){
        $this->load->view('contact/contact_us');
    }
}
