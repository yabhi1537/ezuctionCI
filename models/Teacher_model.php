<?php 



class Teacher_model extends CI_model
{
	
	
	function all(){
            // print_r("SELECT DISTINCT teachers.name,teachers.subject,teachers.otherhighest_qualification,teachers.id,teachers.achievement,teachers.batch,teachers.total_techer_exp,teachers.class,teachers.image,teachers.price,teachers.board,teachers.email,teachers.phone,teachers.intro,teachers.highest_qualification,teachers.subjecthigh,IFNULL(batches.message, '') AS messages, batches.teach_id FROM teachers LEFT JOIN batches ON teachers.id = batches.teach_id");
            // die();
			 //$teachers = $this->db->query("SELECT  teachers.name,teachers.subject,teachers.otherhighest_qualification,teachers.id,teachers.achievement,teachers.batch,teachers.total_techer_exp,teachers.class,teachers.image,teachers.price,teachers.board,teachers.email,teachers.phone,teachers.intro,teachers.highest_qualification,teachers.subjecthigh,IFNULL(batches.message, '') AS messages, batches.teach_id FROM teachers LEFT JOIN batches ON teachers.id = batches.teach_id");
			 $teachers = $this->db->query("SELECT * FROM teachers");
			return $teachers->result_array();
		}
		
		
			function filter($clasees,$courses,$location,$experience){
			    
			    if($courses!="" ){
			        
			         $searchdata = $this->db->query("SELECT * FROM teachers WHERE (class LIKE '%".$clasees."%') AND (subject LIKE '%".$courses."%') AND (total_techer_exp LIKE '%".$experience."%') AND (distrcit LIKE '%".$location."%')");
			    }else if($clasees!=""){
			        
			         $searchdata = $this->db->query("SELECT * FROM teachers WHERE (class LIKE '%".$clasees."%') AND (subject LIKE '%".$courses."%') AND (total_techer_exp LIKE '%".$experience."%') AND (distrcit LIKE '%".$location."%')");
			    
			     //   print_r("SELECT teachers.name,teachers.subject,teachers.id,teachers.achievement,teachers.batch,teachers.total_techer_exp,teachers.class,teachers.image,teachers.price,teachers.board,teachers.email,teachers.phone,teachers.intro,teachers.highest_qualification,teachers.subjecthigh,IFNULL(batches.message, '') AS messages, batches.teach_id FROM teachers LEFT JOIN batches ON teachers.id = batches.teach_id WHERE (class LIKE '%".$clasees."%') AND (subject LIKE '%".$courses."%') AND (total_techer_exp LIKE '%".$experience."%') AND (distrcit LIKE '%".$location."%')");
			     //   die();
			    }
			    else if($experience==""){
			        
			         $searchdata = $this->db->query("SELECT * FROM teachers WHERE (class LIKE '%".$clasees."%') AND (subject LIKE '%".$courses."%') AND (total_techer_exp LIKE '%".$experience."%') AND (distrcit LIKE '%".$location."%')");
			    }
			    else if($location==""){
			        
			         $searchdata = $this->db->query("SELECT * FROM teachers WHERE (class LIKE '%".$clasees."%') AND (subject LIKE '%".$courses."%') AND (total_techer_exp LIKE '%".$experience."%') AND (distrcit LIKE '%".$location."%')");
			    }
			    
			    else{
			        
			        $searchdata = $this->db->query("SELECT * FROM teachers WHERE (class LIKE '%".$clasees."%') OR (subject LIKE '%".$courses."%') OR (board LIKE '%".$board."%') OR (total_techer_exp LIKE '%".$experience."%') OR (distrcit LIKE '%".$location."%')");
			    }
			  return $searchdata->result();
		}
		
// 		function filter($clasees,$courses,$location,$experience){
			    
// 			    if($courses!="" ){
			        
// 			         $searchdata = $this->db->query("SELECT  teachers.name,teachers.area,teachers.subject,teachers.id,teachers.achievement,teachers.batch,teachers.total_techer_exp,teachers.class,teachers.image,teachers.price,teachers.board,teachers.email,teachers.phone,teachers.intro,teachers.highest_qualification,teachers.subjecthigh,IFNULL(batches.message, '') AS messages, batches.teach_id FROM teachers LEFT JOIN batches ON teachers.id = batches.teach_id WHERE (class LIKE '%".$clasees."%') AND (subject LIKE '%".$courses."%') AND (total_techer_exp LIKE '%".$experience."%') AND (distrcit LIKE '%".$location."%')");
// 			    }else if($clasees!=""){
			        
// 			         $searchdata = $this->db->query("SELECT teachers.name, teachers.area,teachers.subject,teachers.id,teachers.achievement,teachers.batch,teachers.total_techer_exp,teachers.class,teachers.image,teachers.price,teachers.board,teachers.email,teachers.phone,teachers.intro,teachers.highest_qualification,teachers.subjecthigh,IFNULL(batches.message, '') AS messages, batches.teach_id FROM teachers LEFT JOIN batches ON teachers.id = batches.teach_id WHERE (class LIKE '%".$clasees."%') AND (subject LIKE '%".$courses."%') AND (total_techer_exp LIKE '%".$experience."%') AND (distrcit LIKE '%".$location."%')");
			    
// 			     //   print_r("SELECT teachers.name,teachers.subject,teachers.id,teachers.achievement,teachers.batch,teachers.total_techer_exp,teachers.class,teachers.image,teachers.price,teachers.board,teachers.email,teachers.phone,teachers.intro,teachers.highest_qualification,teachers.subjecthigh,IFNULL(batches.message, '') AS messages, batches.teach_id FROM teachers LEFT JOIN batches ON teachers.id = batches.teach_id WHERE (class LIKE '%".$clasees."%') AND (subject LIKE '%".$courses."%') AND (total_techer_exp LIKE '%".$experience."%') AND (distrcit LIKE '%".$location."%')");
// 			     //   die();
// 			    }
// 			    else if($experience==""){
			        
// 			         $searchdata = $this->db->query("SELECT teachers.name,teachers.subject,teachers.area,teachers.id,teachers.achievement,teachers.batch,teachers.total_techer_exp,teachers.class,teachers.image,teachers.price,teachers.board,teachers.email,teachers.phone,teachers.intro,teachers.highest_qualification,teachers.subjecthigh,IFNULL(batches.message, '') AS messages, batches.teach_id FROM teachers LEFT JOIN batches ON teachers.id = batches.teach_id WHERE (class LIKE '%".$clasees."%') AND (subject LIKE '%".$courses."%') AND (total_techer_exp LIKE '%".$experience."%') AND (distrcit LIKE '%".$location."%')");
// 			    }
// 			    else if($location==""){
			        
// 			         $searchdata = $this->db->query("SELECT teachers.name,teachers.subject,teachers.area,teachers.id,teachers.achievement,teachers.batch,teachers.total_techer_exp,teachers.class,teachers.image,teachers.price,teachers.board,teachers.email,teachers.phone,teachers.intro,teachers.highest_qualification,teachers.subjecthigh,IFNULL(batches.message, '') AS messages, batches.teach_id FROM teachers LEFT JOIN batches ON teachers.id = batches.teach_id WHERE (class LIKE '%".$clasees."%') AND (subject LIKE '%".$courses."%') AND (total_techer_exp LIKE '%".$experience."%') AND (distrcit LIKE '%".$location."%')");
// 			    }
			    
// 			    else{
			        
// 			        $searchdata = $this->db->query("SELECT teachers.name,teachers.subject,teachers.id,teachers.area,teachers.achievement,teachers.batch,teachers.total_techer_exp,teachers.class,teachers.image,teachers.price,teachers.board,teachers.email,teachers.phone,teachers.intro,teachers.highest_qualification,teachers.subjecthigh,IFNULL(batches.message, '') AS messages, batches.teach_id FROM teachers LEFT JOIN batches ON teachers.id = batches.teach_id WHERE (class LIKE '%".$clasees."%') OR (subject LIKE '%".$courses."%') OR (board LIKE '%".$board."%') OR (total_techer_exp LIKE '%".$experience."%') OR (distrcit LIKE '%".$location."%')");
// 			    }
// 			  return $searchdata->result();
// 		}
		
		
			function profile($techer_id){

			$profile = $this->db->query("SELECT * FROM teachers WHERE id='$techer_id' ");
			return $profile->row_array();
		}
		
		
		function batchesdata($techer_id){

			$batches = $this->db->query("SELECT * FROM batches WHERE teach_id='$techer_id' ");
			return $batches->result_array();
		}
		
		
		
		function teacherlimit(){
		    
		    $limit = $this->db->query("SELECT  teachers.name,teachers.subject,teachers.otherhighest_qualification,teachers.id,teachers.achievement,teachers.batch,teachers.total_techer_exp,teachers.class,teachers.image,teachers.price,teachers.board,teachers.email,teachers.phone,teachers.intro,teachers.highest_qualification,teachers.subjecthigh,teachers.paidstatus,teachers.status, IFNULL(batches.message, '') AS messages, batches.teach_id FROM teachers LEFT JOIN batches ON teachers.id = batches.teach_id LIMIT 3");
		    return $limit->result_array();
		}
		
		function classdata(){
		    
		    $class = $this->db->query("SELECT DISTINCT class FROM teachers");
		    return $class->result_array();
		}
		
		function locationdata(){
		    
		    $location = $this->db->query("SELECT DISTINCT distrcit FROM teachers");
		    return $location->result_array();
		}
		
		function subjectdata(){
		    
		    $subject = $this->db->query("SELECT DISTINCT subject FROM teachers");
		    return $subject->result_array();
		}
		
		function boarddata(){
		    
		    $board = $this->db->query("SELECT DISTINCT board FROM teachers");
		    return $board->result_array();
		}
		
		function experdata(){
		    
		    $experience = $this->db->query("SELECT DISTINCT total_techer_exp FROM teachers");
		    return $experience->result_array();
		}
		
		function results($techer_id){
		    
		    $result = $this->db->query("SELECT * FROM results WHERE tech_id='$techer_id'");
		    return $result->result_array();
		}

		function getStartone($usrid){
			$ratonoe = $this->db->query("SELECT * FROM `ratings` WHERE rating='1' AND techid='$usrid'");
			return $ratonoe->result_array();
		}
		function getStartTwo($usrid){
			$rattwo = $this->db->query("SELECT * FROM `ratings` WHERE rating='2' AND techid='$usrid'");
			return $rattwo->result_array();
		}
		function getStartThree($usrid){
			$ratothree = $this->db->query("SELECT * FROM `ratings` WHERE rating='3' AND techid='$usrid'");
			return $ratothree->result_array();
		}
		function getStartfour($usrid){
			$ratfour = $this->db->query("SELECT * FROM `ratings` WHERE rating='4' AND techid='$usrid'");
			return $ratfour->result_array();
		}
		function getStartfive($usrid){
			$ratfive = $this->db->query("SELECT * FROM `ratings` WHERE rating='5' AND techid='$usrid'");
			return $ratfive->result_array();
		}

		function ourimage(){
		    
		    $experience = $this->db->query("SELECT * FROM facilities");
		    return $experience->result_array();
		}

			function fetch_pass($session_id)
			{
			$fetch_pass=$this->db->query("select * from teachers where id='$session_id'");
			$res=$fetch_pass->result();
			}
			function change_pass($session_id,$new_pass)
			{
			$update_pass=$this->db->query("UPDATE teachers set password ='$new_pass'  where id='$session_id'");
			}

			

		
		    
}


?>