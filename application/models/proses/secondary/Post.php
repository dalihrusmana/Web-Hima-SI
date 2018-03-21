<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Post extends CI_Model{
  public $table = "post";

  public function __construct()
  {
    parent::__construct();
  }
  public function detail($id="")
  {
    if($id != ""){
      $this->db->select("*");
      $this->db->from($this->table);
      $this->db->join("user","user.id_user = ".$this->table.".id_user");
      $this->db->where($this->table.".id_post",$id);
      $data =  $this->db->get();
      if($data->num_rows() > 0){
        return $data;
      }else{
        return false;
      }
    }else{
      return false;
    }
  }
  //$this->event->list(["start"=>0,"limit"=>1]);
  public function list($limit=[],$tipe="article")
  {
    if(count($limit) > 0){
      $this->db->select("*");
      $this->db->from($this->table);
      $this->db->join("user","user.id_user = ".$this->table.".id_user");
      $this->db->limit($limit["limit"],$limit["start"]);
      $this->db->where($this->table.".type_post",$tipe);
      return $this->db->get();
    }else{
      $this->db->select("*");
      $this->db->from($this->table);
      $this->db->join("user","user.id_user = ".$this->table.".id_user");
      $this->db->where($this->table.".type_post",$tipe);
      return $this->db->get();
    }
  }

}
