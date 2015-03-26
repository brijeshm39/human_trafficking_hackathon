<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * ----------------------------------------------------------------------------------------------------
 * @author Brijesh Modi <brijeshmodi12@gmail.com>
 * @version 1.0
 * @copyright (c) 2015, Freedom For All Foundation
 * ----------------------------------------------------------------------------------------------------
 */

class Home_model extends CI_Model{
    public function __construct() {
        parent::__construct();
    }//End of constructor

    /**
     * ----------------------------------------------------------------------------------------------------
     * Extracts all the gallery images from the database
     * @access public
     * @param none
     * @return mixed
     * ----------------------------------------------------------------------------------------------------
     */
    public function get_gallery(){
        $query = "SELECT * FROM upload WHERE status = 1";
        $res = $this->db->query($query);
        return $res;
    }

}