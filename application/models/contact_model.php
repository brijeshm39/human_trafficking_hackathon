<?php

class Contact_model extends CI_Model {

    public function submit_suggestion($para){
        extract($para);
        $sqlin = "INSERT INTO suggestion(user_email,subject,description,added_on) VALUES(?,?,?,?)";
        $result = $this->db->query($sqlin, array($vuser_email, $vsubject, $vdescription, $vadded_on));
       return $result;
    }

    public function submit_compliant($ara){
        extract($ara);

        $sqlin = "INSERT INTO compliant(user_email,victim,age_group,subject,description,address_of_victim,added_on) VALUES(?,?,?,?,?,?,?)";
        $result = $this->db->query($sqlin, array($vuser_email, $vvictim, $vage_group, $vsubject, $vdescription, $vaddress_of_victim, $vadded_on));
        //echo $this->db->last_query();
        return $result;
    }
}