<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Model{
  public $table = "user";
  public function __construct()
  {
    parent::__construct();

  }
  public function get($data = "")
  {
    if($data != ""){
      return $this->db->get_where($this->table,$data);
    }else{
    return $this->db->get($this->table);
    }
  }
  public function insert($data=[])
  {
    return $this->db->insert($this->table,$data);
  }
  public function delete($data=[])
  {
     $this->db->delete($this->table,$data);
     return $this->db->affected_rows() > 0;
  }
  public function update($data=[],$where=[])
  {
    if(count($where) > 0){
      $this->db->update($this->table,$data,$where);
      return $this->db->affected_rows() > 0;
    }else{
      return false;
    }
  }

}
