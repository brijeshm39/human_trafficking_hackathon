    <?php
    class Upload_model extends CI_Model {


        public function upload_dataa($data){
            extract($data);
                $value = $upload_data['file_name'];
            //$value=$data['file_name'];
              //  $vtitle=$da['title'];
                //$vcaption=$da['caption'];

                $sqlin = "INSERT INTO upload(file_name) VALUES(?)";
                $result = $this->db->query($sqlin, array($value));
                echo $this->db->last_query();

        }
    }

