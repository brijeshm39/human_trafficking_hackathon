	<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * ================================================================================================
 * @author            =>  Brijesh Modi <brijeshmodi12@gmail.com>
 * @version           =>  1.1
 * @copyright         =>  (c) 2014, Cloud Concessions
 * @last_modified_on  =>  Sep 8, 2014
 * 
 * ------------------------------------------------------------------------------------------------
 * Total : 3 Methods 
 * ------------------------------------------------------------------------------------------------
 * 
 * + is_session_set().......................Checks whether session is set or not
 * + is_user_admin()........................Checks whether user is admin or not
 * + is_user_student()........................Checks whether user is student or not
 * 
 * ================================================================================================
 */


class Authentication{
    
    public function __construct() {
    }//End of constructor
    
    /**
     * ------------------------------------------------------------------------------------------------
     * Checks whether session is set or not
     * @access public
     * @param none
     * @return none
     * ------------------------------------------------------------------------------------------------
     */
    public function is_session_set(){
        
        //If session is not set, redirect it to the login page
        if(!isset($_SESSION['user_email'])){
            redirect('authenticate/login');
        }//End if isset
        
        
    }//End of authenticate

    /**
     * ------------------------------------------------------------------------------------------------
     * Check whether session is set and user is admin or not
     * @access public
     * @param none
     * @return none
     * ------------------------------------------------------------------------------------------------
     */
    public function is_user_admin(){
        //check if user is admin 
        $this->is_session_set();
        
        if($_SESSION['user_type'] == USER_TYPE_ADMIN ){
            redirect('admin');
        }//End if 
        
    }//End is_user_admin

    /**
     * ------------------------------------------------------------------------------------------------
     * Check whether session is set and user is student or not
     * @access public
     * @param none
     * @return none
     * ------------------------------------------------------------------------------------------------
     */
    public function is_user_normal(){

        $this->is_session_set();
        
        if($_SESSION['user_type'] == USER_TYPE_NORMAL ){
            redirect('user');
        }//End if 
        
              
    }//End is_user_student

    
    public function is_user_supervisor(){
        //check if user is admin 
        $this->is_session_set();
        
        if($_SESSION['user_type'] != 0 ){
            redirect('application/apply_concession');
        }//End if
    }

    public function encrypt($str){
        return sha1(hash('sha512', $str));
    }
    
}//End of class Authentication


?>