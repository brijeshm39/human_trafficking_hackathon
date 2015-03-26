<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * ----------------------------------------------------------------------------------------------------
 * @author Brijesh Modi <brijeshmodi12@gmail.com>
 * @version 1.0
 * @copyright (c) 2015, Freedom For All Foundation
 * ----------------------------------------------------------------------------------------------------
 */

class Authenticate_model extends CI_Model{
    public function __construct() {
        parent::__construct();
    }//End of constructor

    /**
     * ----------------------------------------------------------------------------------------------------
     * Checks user credentials
     * @access public
     * @param type $user_credentials
     * @return Boolean
     * ----------------------------------------------------------------------------------------------------
     */
    public function authenticate_user_credentials($user_credentials){
        extract($user_credentials);

        $sql = "SELECT user_id FROM users WHERE email = ? AND password = ? and status = ? LIMIT 1";
        $result = $this->db->query($sql, array($username, $password,1));

        if($result->num_rows() == 1)
            return TRUE;
        else
            return FALSE;
    }//End of authenticate_user_credentials

    /**
     * ----------------------------------------------------------------------------------------------------
     * Gets the users information, given the username
     * @access public
     * @param string $username
     * @return MySQL Object
     * ----------------------------------------------------------------------------------------------------
     */
    public function get_user_info($username){
        $query = "SELECT user_type, user_id, email,name FROM users WHERE email = ?  LIMIT 1";
        $result =  $this->db->query($query, array($username));
        return $result;
    }//End of get_user_info

    /**
     * ----------------------------------------------------------------------------------------------------
     * Inserts the user into the database
     * @access public
     * @param $data - associative array
     * @return bool
     * ----------------------------------------------------------------------------------------------------
     */
    public function insert_user($data){
        $query = "INSERT INTO users(user_id, name, email, password, contact_no, address, city, pincode, state, country, self_description, user_added_on, status, user_type, qid, answer) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?) ";

        $values = array(null, $data['name'], $data['email'], $data['password'], $data['contactno'], $data['address'], $data['city'], $data['pincode'],
        $data['state'], $data['country'], $data['self_description'], date('Y-m-d H:i:s'), 1, USER_TYPE_NORMAL, $data['question_id'], $data['answer']);

        $res = $this->db->query($query, $values);

        if($res){
            return TRUE;
        }
        else{
            return FALSE;
        }

    }//End of Insert User

    /**
     * ----------------------------------------------------------------------------------------------------
     * @access public
     * @param none
     * @return Boolean [True: If session is set ;  ]
     * ----------------------------------------------------------------------------------------------------
     */
    public function is_session_set(){
        if(isset($_SESSION['user_id'])){
            return TRUE;
        }
        return FALSE;
    }//End of is_session_set

    /**
     * ----------------------------------------------------------------------------------------------------
     * Gets all the countries from the database
     * @access public
     * @param none
     * @return bool
     * ----------------------------------------------------------------------------------------------------
     */
    public function get_countries(){
        $q = "SELECT * FROM countries ORDER BY countryName";
        $res = $this->db->query($q);
        if($res->num_rows() > 0){
            return $res;
        }else{
            return FALSE;
        }
    }//End of get_countries


    public function get_questions(){
        $q = "SELECT * FROM security_questions";
        $res = $this->db->query($q);
        if($res->num_rows() > 0){
            return $res;
        }else{
            return FALSE;
        }
    }//End of get_questions

    public function is_email_in_db($email){
        $res = $this->db->query("SELECT email from users WHERE email = '".$email."'");
        if($res->num_rows == 1){
            return TRUE;
        }
        return FALSE;
    }

    public function get_sec_question($email){
        $q = "SELECT u.qid, u.answer, q.question FROM
               users u LEFT JOIN security_questions q on u.qid = q.qid
                WHERE email = '".$email."'";

        $res = $this->db->query($q);
        foreach($res->result_array() as $row){
            extract($row);
            $_SESSION['answer'] = $answer;
            return $question;
        }

    }

    public function fetch_usertype(){
        $query = "SELECT user_type FROM users where email='".$_SESSION['user_email']."' ";
        $result = $this->db->query($query);
//        echo $this->db->last_query();
        foreach($result->result_array() as $row){
            extract($row);
            $_SESSION['user_type'] = $user_type;

            redirect('authenticate/login');
        }
    }

}//End of class Authenticate_model