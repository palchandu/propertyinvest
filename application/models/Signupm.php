<?php
class Signupm extends CI_Model {

public function __construct()	{
    parent::__construct();
}

 public function createaccount($data) {
$dbTable= 'user_details';
$this->db->insert($dbTable, $data);	
    
if ($this->db->affected_rows() > 0) {
         return true;
         }
         else {
         return false;
         }


}
              
}