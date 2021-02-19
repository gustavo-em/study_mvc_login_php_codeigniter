<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Formulario extends CI_Controller {
    function index(){
        $dados = ["nome" => "login"];
        $this->load->view('formulario', $dados);
    }



}



    




?>