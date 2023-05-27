<?php 

 class Result_model extends CI_model
 {
 	
 		public function saveRecord($formArray){

 			$this->db->insert('results',$formArray);
 		}


 		public function showResults($techid){

 			 $results = $this->db->query("SELECT * FROM results WHERE tech_id ='$techid'");
 			 return $results->result_array(); 
 		}
 		
 		function getUser($userId){
			$this->db->where('id',$userId);
			return $user = $this->db->get('results')->row_array();

		}
		
		function deleteUser($userId){
			$this->db->where('id',$userId);
			$this->db->delete('results');

		}


 }


?>