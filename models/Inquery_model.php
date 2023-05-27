<?php 


class Inquery_model extends CI_model
{
   
   public function insertdata($formArray)
   {
      $this->db->insert('inquery',$formArray);
   }
   
   
    public function alldata($id)
   {
    $inqdata =  $this->db->query("SELECT * FROM inquery WHERE tech_id='$id'");
    
    return $inqdata->result_array(); 
   }
}






?>