<?php
class Propertym extends CI_Model {

public function __construct()	{
    parent::__construct();
}

 public function propertylist() {
   $this -> db -> select('*');
   $this -> db -> from('property_details');

    $query = $this -> db -> get();
    $row = $query->result_array();
    return $row;

}
              
}