<?php 


class Batch_model extends CI_model
{
   
   public function insertdata($formArray)
   {
      $this->db->insert('batches',$formArray);
   }
   
    public function all($techid){
        
         $batch =  $this->db->query("SELECT * FROM batches WHERE teach_id='$techid'");
           // print_r($batch);die();
        return $batch->result_array();
    }
    
    public function getUser($userId){
            $this->db->where('id',$userId);
            return $batches = $this->db->get('batches')->row_array();
          
    }
    
        function updateUser($userId,$formArray){
			$this->db->where('id',$userId);

			$this->db->update('batches',$formArray);
		}
		
    
    
        function deleteUser($userId){
            $this->db->where('id',$userId);
            $this->db->delete('batches');
    
    }
		
    
}






?>