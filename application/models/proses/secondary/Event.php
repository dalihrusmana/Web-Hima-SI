<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Event extends CI_Model{
  public $table = "event";

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
      $this->db->where($this->table.".id_event",$id);
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
  public function list($limit=[])
  {
    if(count($limit) > 0){
      $this->db->select("*");
      $this->db->from($this->table);
      $this->db->join("user","user.id_user = ".$this->table.".id_user");
      $this->db->limit($limit["limit"],$limit["start"]);
      return $this->db->get();
    }else{
      $this->db->select("*");
      $this->db->from($this->table);
      $this->db->join("user","user.id_user = ".$this->table.".id_user");
      return $this->db->get();
    }
  }

}
