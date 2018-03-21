<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller{
  public $css = [];
  public $js = [];
  public function __construct()
  {
    parent::__construct();
    $this->css["css"] = array(
      array("url"=>base_url("assets/css/bootstrap.min.css")),
      array("url"=>"https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css"),
      array("url"=>base_url("assets/css/style.css")),
      array("url"=>base_url("assets/css/animate.css")),
      array("url"=>base_url("assets/css/set2.css")),
      array("url"=>base_url("assets/css/slick.css")),
      array("url"=>"https://fonts.googleapis.com/css?family=Lato"),
      array("url"=>"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css")
    );
    $this->js["js"] = array(
      array("url"=>base_url("assets/js/jquery-3.3.1.min.js")),
      array("url"=>base_url("assets/js/bootstrap.min.js")),
      array("url"=>base_url("assets/js/sticky-kit.min.js")),
      array("url"=>"https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"),
      array("url"=>base_url("assets/js/main.js")),
      array("url"=>base_url("assets/js/dropdown.js")),
      array("url"=>base_url("assets/js/slick.min.js")),
      array("url"=>base_url("assets/js/wow.min.js"))
    );
  }

  function index()
  {
    $data = array(
      "judul"=>"HIMA SI | Himpunan Mahasiswa Sistem Informasi",
      "css"=>$this->css["css"],
      "js"=>$this->js["js"]
    );
    $this->parser->parse('public/theme/header', $data);
    $this->parser->parse('public/home', $data);
    $this->parser->parse('public/theme/footer', $data);
  }

}
