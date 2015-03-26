<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Upload extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('upload_model');

    }

    public function index(){
        $this->file_view();
    }

    public function file_view(){

        $this->load->view('templates/header');
        $this->load->view('file_view', array('error' => ' ' ));
        $this->load->view('templates/header');

    }

    public function do_upload(){
        $new_name = time();
        //$config['file_name'] = $new_name;
        $config = array(
            'file_name' => "$new_name",
            'upload_path' => "./uploads/",
            'allowed_types' => "gif|jpg|png|jpeg",
            'overwrite' => TRUE,
            'max_size' => "2048000", // Can be set to particular file size , here it is 2 MB(2048 Kb)
            'max_height' => "768",
            'max_width' => "1024"
        );
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if($this->upload->do_upload())
        {
            //if (isset($_POST['submit'])) {
//                $this->form_validation->set_rules('title', 'Title', 'required');
//                $this->form_validation->set_rules('caption', 'Caption', 'required');
//
////                if ($this->form_validation->run() !== FALSE) {
////                    $title = $_POST['title'];
////                    $caption = $_POST['caption'];
////
////
////
////                    $data= array(
////                        "vtitle" => $title,
////                        "vcaption" => $caption
////                    );
////                }

            $data = array('upload_data' => $this->upload->data());

            $this->upload_model->upload_dataa($data);
            $this->load->view('upload_success',$data);
            //}
        }
        else
        {
            $error = array('error' => $this->upload->display_errors());
            $this->load->view('file_view', $error);
        }
//        $this->load->view('file_view');
    }

}