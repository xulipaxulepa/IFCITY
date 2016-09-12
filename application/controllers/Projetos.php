<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Projetos extends CI_Controller {

    function __construct() {
        parent:: __construct();
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->helper('array');
        $this->load->library('table');
    }
    
    public function index() {
        $dados = array(
            'titulo' => 'DJIFNMG',
            'tela' => 'paginasStaticas/Projetos',
        );
        $this->load->view("exibirDados", $dados);
    }

}