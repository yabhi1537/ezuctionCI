<?php	

class Common_model extends CI_model{	
	
	public function __construct(){		
	
		$this->load->database();		
	}
	
	public function getData($tblName, $dataget='', $limits ='', $orderby='', $orderformat ='DESC', $orDatget='' ) {

		$this->db->select('*');
		if($dataget != ''){					
			foreach ($dataget as $field => $value)					
				$this->db->where($field, $value);
		}	
		if($orDatget != ''){					
			foreach ($orDatget as $field => $value)				
			$this->db->or_where($field, $value);	
		}												
		if ($limits != ''){				
			$this->db->limit($limits);
		}	
		if ($orderby != ''){
			$this->db->order_by($orderby, $orderformat);
		}						
		$query = $this->db->get($tblName);			
		return $query->result();		
	}

   // single record		
	public function getDataSingle($tableName, $dataget, $returnType = ''){
		if($dataget != ''){					
			foreach ($dataget as $field => $value)					
				$this->db->where($field, $value);
		}
		$result = $this->db->get($tableName);
		if ($result->num_rows() > 0) {		
			if ($returnType == 'array')					
				return $result->row_array();
			else					
				return $result->row();
		}		
			else			
				return FALSE;		
	}
	

	public function getRow($tableName, $colName, $id, $returnType = '') {
		$this->db->where($colName, $id);	
		$result = $this->db->get($tableName);
		if ($result->num_rows() > 0) {		
			if ($returnType == 'array')					
				return $result->row_array();
			else					
				return $result->row();
		}		
			else			
				return FALSE;		
	}
	
		public function getRowpkg($tableName, $colName, $id, $returnType = '') {
		$this->db->where($colName, $id);	
		$result = $this->db->get($tableName);
		if ($result->num_rows() > 0) {		
			if ($returnType == 'array')					
				return $result->result();
			else					
				return $result->result();
		}		
			else			
				return FALSE;		
	}
		
	/*  Search */
	public function getSearchData($tblName, $search){	

		$this->db->or_where('company_name', $search);	
		$this->db->or_where('company_type', $search);	
		$this->db->or_where('job_profile', $search);
		$this->db->or_where('qualification', $search);	
		$query = $this->db->get($tblName);		
		return $query->result();		
	}
		
	/* Updates */

	public function	updateData($tblName, $data, $clause){
		$this->db->set($data);			
		$this->db->where($clause);			
		$this->db->update($tblName);			
		return $this->db->affected_rows();		
	}	
	
	
	function getAllLeavesWithStatus($userId){
	    $query= $this->db->query("SELECT * FROM `leaves` where `hr_id`='".$userId."' and approve_decline !=''");
        return $query->result();
	}
		
			
	/* Insert */

	function addRecord($tblName, $data){		
		$this-> db->insert($tblName, $data);
		return $this->db->affected_rows();	
	}
	
	function addRecords($tblName, $data){		
		$this-> db->insert($tblName, $data);
		$insert_id = $this->db->insert_id();
		return  $insert_id;
	}
	 
	    public function selectAllData() {
        $query = $this->db->get('category');
        return $query->result();
    }
    
        public function selectplanData() {
        $query = $this->db->get('plan');
        return $query->result();
    }

	/* Delete */
	
	public function deleteRecord($tblName, $uid){
		$this->db->where($uid);		
		$this->db->delete($tblName);   	
		return $this->db->affected_rows();
	}
	
	public function deleteMultipleRecord($tblName, $dataget) {

       $this->db->where($dataget);
    
       $this->db->delete($tblName);
    
       return TRUE;
    
    }
	/*get count */
	public function getCount($tblName,$clause){
		if($clause != ''){					
			foreach ($clause as $field => $value)					
			$this->db->where($field, $value);
		}
		$query = $this->db->get($tblName);			
		return $query->num_rows();
	}
	
	public function isUserExit($tblName,$clause){
		if($clause != ''){					
			foreach ($clause as $field => $value)					
			$this->db->where($field, $value);
		}
		$query = $this->db->get($tblName);			
		if($query->num_rows() >0){
			return true;
		}else{
			return false;
		}
	}
    public function isStuExit($tblName,$clause){
		if($clause != ''){					
			foreach ($clause as $field => $value)					
			$this->db->where($field, $value);
		}
		$query = $this->db->get($tblName);			
		if($query->num_rows() >0){
			return true;
		}else{
			return false;
		}
	}
	public function getDetailsByEmail($tblName,$clause){
		if($clause != ''){					
			foreach ($clause as $field => $value)					
			$this->db->where($field, $value);
		}
		$query = $this->db->get($tblName);			
		if($query->num_rows()>0){
			return $query->result();
		}else{
			return false;
		}
	}
	
	public function getsystemTradeVolume(){
	    
	   $query = $this->db->query('SELECT record_master.Id FROM record_master
INNER JOIN account_master ON record_master.account_id = account_master.account_id WHERE account_master.account_type=1;');
       return $query->num_rows();;
	}



	public function get_data_limited($tbl="",$limit="",$start=""){

	$this->db->select('*');
    $this->db->from($tbl);
    $this->db->limit($limit, $start);
    $query = $this->db->get();
    return $query->result();
	}
	



	public function getData_limited($tblName, $dataget='', $limits ='', $start ='', $orderby='', $orderformat ='DESC', $orDatget='' ) {

		$this->db->select('*');
		if($dataget != ''){					
			foreach ($dataget as $field => $value)					
				$this->db->where($field, $value);
		}	
		if($orDatget != ''){					
			foreach ($orDatget as $field => $value)				
			$this->db->or_where($field, $value);	
		}												
		if ($limits != ''){				
			$this->db->limit($limits,$start);
		}	
		if ($orderby != ''){
			$this->db->order_by($orderby, $orderformat);
		}						
		$query = $this->db->get($tblName);			
		return $query->result();		
	}
	
	
	/* End Of Class*/
}
?>	