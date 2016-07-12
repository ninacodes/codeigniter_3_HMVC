<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Exemplo extends MX_Controller 
{
    function __construct()
    {
        parent::__construct();
    }

	public function index()
	{
		$this->load->view('Exemplo');
	}
    
    public function teste()
    {
        echo 'Configurando as rotas do modulo';
    }
}
