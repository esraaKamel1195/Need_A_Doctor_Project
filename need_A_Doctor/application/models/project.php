<?php 

class project extends CI_Model
{
  public function insert($table,$data)
  {
    if($this->db->insert($table,$data))
    {
      return true;
    }
    else
      return false;
  }
  public function get_Specialty()
  {
  	return $this->db->get('specialize')->result();
  }

   public function get_doctors()
  {  
    $this->db->select('first_name,photo,qualify,last_name');
    return $this->db->get('doctor')->result();
  }

   public function get_doctorbyphoto($photo)
  {  $this->db->where('photo',$photo);
    //$this->db->select('first_name,photo,qualify,last_name,Specialty');
    $sql=$this->db->get('doctor');
     if ($sql->num_rows() > 0) {
           
            return $sql->result();
        } else {
          
          
            return FALSE;
        }
  }

  public function get_doctorbysearch($search)
  {   $sql=$this->db->query('select * from doctor where first_name like ? or last_name like ? or Specialty like ? ',array($search,$search,$search));

     if ($sql->num_rows() > 0) {
           
            return $sql->result();
        } else {
          
          
            return FALSE;
        }
  }
  public function get_doctorbyprice($first,$last)
  {   $sql=$this->db->query('select * from doctor  where price >= ? and price < ? ',array($first,$last));

     if ($sql->num_rows() > 0) {
           
            return $sql->result();
        } else {
          
          
            return FALSE;
        }
  }
  public function get_doctorbylocation($search)
  {   $sql=$this->db->query('select * from doctor where street like ? ',array($search));

     if ($sql->num_rows() > 0) {
           
            return $sql->result();
        } else {
          
          
            return FALSE;
        }
  }
  public function get_doctorby($specialty,$first,$last,$street)
  {    $sql=$this->db->query('select * from doctor where Specialty like ? and price >= ? and price < ? and street like ?',array($specialty,$first,$last,$street));

     if ($sql->num_rows() > 0) {
           
            return $sql->result();
        } else {
          
          
            return FALSE;
        }
  }
  public function get_doctorbySpecialty($specialty)
  {   $sql=$this->db->query('select * from doctor where Specialty like ? ',array($specialty));

     if ($sql->num_rows() > 0) {
           
            return $sql->result();
        } else {
          
          
            return FALSE;
        }
  }
  public function get_SpecialtyFromSymptoms($fall)
  {   $sql=$this->db->query('select name_s from symptoms where name_symptoms in ? group by name_s order by count(name_s) desc limit 1',array($fall));

     if ($sql->num_rows() > 0) {
           
            return $sql->result();
        } else {
          
          
            return FALSE;
        }
  }

  public function get_doctorbyemail($email,$table_name)
  {   $this->db->where('email',$email);
    $this->db->select('id');
    $sql=$this->db->get($table_name);
     if ($sql->num_rows() > 0) {
           
            return $sql->result();
        } else {
          
          
            return FALSE;
        }
  }
   public function check($table_name,$email,$password)
  {
    $this->db->where('email',$email);
    $this->db->where('password',md5($password));
    $sql=$this->db->get($table_name);

         if ($sql->num_rows() > 0) {
           
            return $sql->result();
        } else {
          
          
            return FALSE;
        }
  }
	
  public function update_user($data,$id)
    {

    $this->db->where('id', $id);

    if($this->db->update('doctor', $data))
      {
        return TRUE;
      }
      else
      {
        echo "error";
      }
          

  }
}
?>