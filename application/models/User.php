<?php
Class user extends CI_Model
{
 function login($username, $password)
 {
   $this -> db -> select('*');
   $this -> db -> from('user_details');
   $this -> db -> where('email', $username);
   $this -> db -> where('password', $password);
   $this -> db -> limit(1);

   $query = $this -> db -> get();
  
   if($query -> num_rows() == 1)
   {
     return $query->num_rows();
   }
   else
   {
     return false;
   }
 }
}