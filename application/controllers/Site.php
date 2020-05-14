<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends CI_Controller {

	public function index()
	{
		$data["title"] = "Exercices Webboy | Moodle";
		$this->load->view('commun/header', $data);
		$this->load->view('site/index', $data);
		$this->load->view('commun/footer', $data);
	}

	public function contact()
	{
		$data["title"] = "Contact";
		$this->load->view('commun/header', $data);
		$this->load->view('site/index', $data);
		$this->load->view('commun/footer', $data);
	}
}
