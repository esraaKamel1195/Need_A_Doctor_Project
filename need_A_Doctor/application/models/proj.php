
<?php

class Proj extends CI_Model{
   public function get_all($tablename,$order){
    $this->db->order_by($order,"desc");
		$sql=$this->db->get($tablename);
  	return $sql->result();

	}
  public function getComments($new_id)
  {
    $this->db->where("new_id",$new_id);
    $this->db->order_by("comment_id",'desc');
    $sql=$this->db->get('comments');
    return $sql->result();
    
  }
  public function getUser($user_id)
  {
    $this->db->where("user_id",$user_id);
    $sql=$this->db->get('users');
    return $sql->result();
  }
  public function insert_comment($data)
  {
    if($this->db->insert('comments',$data))
    {
      return true;
    }
    else
    {
      return false;
    }

  }
	public function getOrder($tablename)
	{
		$this->db->order_by('created_at',"desc");
		$sql=$this->db->get($tablename);
		return $sql->result();
	}
  public function getOrderLim($tablename)
  {
    $this->db->order_by('created_at',"desc");
    $this->db->limit(5);
    $sql=$this->db->get($tablename);
    return $sql->result();
  }
	public function getNewOFCat($tablename,$cat_id)
  {

  	$this->db->order_by('created_at',"desc");
  	$this->db->where('cat_id',$cat_id);
  	$this->db->limit(1);
  	$id=$this->db->get($tablename);
  	$id=$id->row()->new_id;
  	
  	
  	$this->db->where('new_id !=',$id);
  	$this->db->where('cat_id',$cat_id);

  	$this->db->limit(4);
  	$sql=$this->db->get($tablename);
  			
		return $sql->result();
  }
  public function getNewsOFCat($tablename,$cat_id)
  {
  
    $this->db->where('cat_id',$cat_id);
    $this->db->order_by('created_at',"desc");
    $sql=$this->db->get($tablename);
   return $sql->result();

  }
  public function getfirstOFCat($tablename,$cat_id)
  {
  	$this->db->order_by('created_at',"desc");
  	$this->db->where('cat_id',$cat_id);
  	$this->db->limit(1);
  	return $this->db->get($tablename)->result();
  	
  }
  public function getNameOfCat($id)
  {
    
    $this->db->where('cat_id',$id);
    
    return $this->db->get('cats')->result();
  }
  public function getnew($id)
  {
    $this->db->where('new_id',$id);
    return $this->db->get('news')->result();
  }
  public function shownew($id)
  {
    $this->db->order_by('created_at',"desc");
    $this->db->where('new_id',$id);
    
    return $this->db->get('news')->result();
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
public function insert($table,$data)
  {
    if($this->db->insert($table,$data))
    {
      return true;
    }
    else
      return false;
  }
  public function delete_new($id)
  {
     $this->db->where('new_id',$id);
    if($this->db->delete('news'))
      return true;
  }
  public function updatenew($data,$id)
  {
    $this->db->where('new_id',$id);
    if($this->db->update('news',$data))
      return true;
  }

}
?>