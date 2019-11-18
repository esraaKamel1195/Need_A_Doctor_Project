<?php

class Mod1 extends CI_Model{
    public function get_user() {
        $query=$this->db->get('users');
        return $query->result();
    } 
    public function get_usermail($name) {
        $this->db->where('name',$name);
        $query=$this->db->get('users');
        return $query->result();
    }
    public function g_user($name) {
       $query= $this->db->get_where('users',array('name'=>$name));
         return $query->result();
    }
    public function update($id,$arr) {
        $this->db->where('id',$id);
        $this->db->update('users',$arr);
    }
    public function get_user_pass(){
        $this->db->select('password , email');
        $query=$this->db->get('users');
        return $query;
    }
     public function get_pass($id){
         $s='1'.`id`.'='. `2`;
         $this->db->where('id',$s);
       $this->db->select('password , email');
        $query=$this->db->get('users');
        return $query->result();
    }
    public function delete($id) {
        $this->db->where('id',$id);
        $this->db->delete('users');        
    }
     public function get_user_order($name) {
         $this->db->order_by($name);
        $query=$this->db->get('users');
        return $query->result();
    } 
    public function get_names() {
        $this->db->where('id >',2);
        $query=$this->db->get('users');    
        return $query->result();
    } 
}
?>
