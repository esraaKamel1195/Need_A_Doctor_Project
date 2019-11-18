<?php
class TaskReg extends CI_Model{
	public function get_all($tablename){
		$sql=$this->db->get($tablename);
		return $sql->result();

	}
	public function insert($table,$data)
	{
		if($this->db->insert($table,$data))
		{
			return true;
		}
		else
			return false;
	}
	public function check($tableName,$Udata)
	{
		
		$this->db->where('username',$Udata['username']);
		$this->db->where('password',sha1($Udata['password']));		
		$data=$this->db->get($tableName);
		//data=$data->result();
		//var_dump($data);

		if($data->num_rows()>=1)
			{
				
				return true;
					
			}
			
			else
			{
				return false;
			}
	}
}
?>