<?php 


class Profile_model extends CI_model
{
	
	function getUser($userId){
		
			$this->db->where('id',$userId);
			return $teachers = $this->db->get('teachers')->row_array();

		}

		function updateUser($userId,$formArray){
			$this->db->where('id',$userId);

			$this->db->update('teachers',$formArray);
		}

		function getRatings($techid){

			$rating = $this->db->query("SELECT students.name, students.id,ratings.sid,ratings.techid,ratings.review,ratings.rating,ratings.created_at
			FROM students
			INNER JOIN ratings ON ratings.sid = students.id WHERE ratings.techid='$techid' "  );
			return $rating->result_array();

		}
}


?>