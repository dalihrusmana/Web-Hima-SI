<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Model{
  public $table = "user";
  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }
  public function create($data)
  {
    $data["password"] = md5($data["password"]);
    return $this->db->insert($this->table,$data);
  }

}
