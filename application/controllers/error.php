<?php
/**
 * Created by PhpStorm.
 * User: thadaninilesh
 * Date: 3/7/15
 * Time: 12:40 PM
 */
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
 * ================================================================================================
 */

class Error extends CI_Controller{
    public function index(){
        $this->load->view('templates/header');
        $this->load->view('error/error404');
    }
}