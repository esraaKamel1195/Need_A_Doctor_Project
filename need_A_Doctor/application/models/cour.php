<?php
class Cour extends CI_Model{

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
	public function get_user($table_name)
	{
		//$sql=$this->db->get($table_name);
		$sql= $this->db->get_where('users', array('username' => "mohamed",'password'=>sha1(123)));
		$res=$sql->result();
		return $res;
	}
	public function getuser($tableNmae,$id)
	{
		$this->db->where('id',$id);
		$sql=$this->db->get($tableNmae);
		return $sql->result();

	}
	public function get_specific_user($table_name)
{
	//$sql=$this->db->get($table_name);
	$this->db->where('id !=', 2); 
	$sql= $this->db->get('users');
	$res=$sql->result();
	return $res;
}
 public function get_user_pass(){
        $this->db->select('password , email');
        $query=$this->db->get('users');
        return $query;
    }
 public function get_names() {
        $this->db->where('id >',2);
        $query=$this->db->get('users');    
        return $query->result();
    } 
     public function get_user_order($name) {
         $this->db->order_by($name);
        $query=$this->db->get('users');
        return $query->result();
    } 

      public function update_user($data,$id)
    {

		$this->db->where('id', $id);

		if($this->db->update('user', $data))
			{
				return TRUE;
			}
			else
			{
				echo "error";
			}
			    

	}
	 public function delete_user($id)
    {
    	$this->db->where('id',$id);
    	if($this->db->delete('user'))
    	{
    		return TRUE;
    	}
    	else
    	{
    		echo $this->db->error();
    	}
    }
    public function check($username,$password)
{
    $this->db->where('username',$username);
    $this->db->where('password',$password);
    $sql=$this->db->get('users');

         if ($sql->num_rows() > 0) {
           
            return $sql->result();
        } else {
        	
        	
            return FALSE;
        }
}
    
}
?>