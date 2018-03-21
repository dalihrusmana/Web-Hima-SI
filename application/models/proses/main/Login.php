<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Model{
  public $table = "user";
  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }
  public function execute($username="",$password="")
  {
    $password = md5($password);
    $data = array("username"=>$username,"password"=>md5($password));
    $this->db->select("*");
    $this->db->from($this->table)->join("user_role","user_role.id_user = ".$this->table.".id_user")->join("role","user_role.id_role = role.id_role");
    $login = $this->db->get();
    if($login->num_rows() > 0){
      return array("priority"=>$login->row()->priority,"data"=>$login->result());
    }else{
      return false;
    }
  }

}
