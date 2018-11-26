<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Principal extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('principal');
	}
	public function fachada()
	{
		$this->load->view('fachada');
	}
	public function biblioteca()
	{
		$this->load->view('biblioteca');
	}
	public function pagina_firefox()
	{
		$this->load->view('pagina_firefox');
	}
	public function entrada()
	{
		$this->load->view('entrada');
	}
	public function hall_entrada()
	{
		$this->load->view('hall_entrada');
	}
	public function auditorio()
	{
		$this->load->view('auditorio');
	}
	public function refeitorio()
	{
		$this->load->view('refeitorio');
	}
	public function blocoA()
	{
		$this->load->view('blocoA');
	}
	public function blocoB()
	{
		$this->load->view('blocoB');
	}
	public function estacionamento()
	{
		$this->load->view('estacionamento');
	}
	public function campo()
	{
		$this->load->view('campo');
	}
	public function voltar()
	{
		$this->load->view('principal');
	}
}
