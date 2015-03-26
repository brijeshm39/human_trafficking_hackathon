	<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

		class Home extends CI_Controller{

			public function __construct() {
				parent::__construct();
				$this->load->model('home_model');
			}//End of constructor.

			/**
			 * ----------------------------------------------------------------------------------------------------------------
			 * Displays the Home page
			 * @access public
			 * @param none
			 * @return none
			 * ----------------------------------------------------------------------------------------------------------------
			 */
			public function index(){
				$data['gallery'] = $this->home_model->get_gallery();

				$this->load->view('templates/header',$data);
				$this->load->view('home/index');
				$this->load->view('templates/footer');
			}//End of index

			/**
			 * ----------------------------------------------------------------------------------------------------------------
			 * Shows the gallery
			 * @access public
			 * @param none
			 * @return none
			 * ----------------------------------------------------------------------------------------------------------------
			 */
			public function gallery(){
				$data['gallery'] = $this->home_model->get_gallery();

//				$this->load->view('templates/header');
				$this->load->view('home/gallery',$data);
				$this->load->view('templates/footer');
			}




		}//End of Home Controller