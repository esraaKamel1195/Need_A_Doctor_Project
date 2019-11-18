<?php
class news extends CI_Model{
	public function insert($data)
	{
		if($this->db->insert('news',$data))
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	public function getall()
	{
		$this->db->order_by("new_id", "desc");
		$sql=$this->db->get('news');

		return $sql->result();
	}
	public function delete($id)
	{
		$this->db->where('new_id',$id);
		if($this->db->delete('news'))
			return true;
		
	}
	public function update($id,$data)
	{
		$this->db->where('id',$id);
		if($this->db->update('news',$data))
			return true;
	}
	public function getnew($id)
	{
		$this->db->where('new_id',$id);
		$sql=$this->db->get('news');
		return $sql->result();

	}

}
?>