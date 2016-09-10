<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Participantes extends CI_Controller {

    function __construct() {
        parent:: __construct();
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->helper('array');
        $this->load->library('table');
    }
    
    public function index() {
        $dados = array(
            'titulo' => 'IFCITY',
            'tela' => 'paginasStaticas/Participantes',
        );
        $this->load->view("exibirDados", $dados);
    }

}