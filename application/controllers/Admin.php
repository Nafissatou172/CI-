<?php 
Class Admin extends CI_Controller{
    public function index(){
      $this->load->view("school/login");
}
public function voir(){
    echo "Voir ";
}
}

?>