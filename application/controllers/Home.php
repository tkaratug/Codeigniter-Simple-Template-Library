<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->library('template');
		$this->template->set_platform('public');
		$this->template->set_theme('default');
	}

	public function index()
	{
		$data['content']	= 'Hello World !';

		$this->template->set_title('Simple Template Library');
		$this->template->set_css('bootstrap.min.css');
		$this->template->set_css('bootstrap-theme.css');
		$this->template->set_css('navbar.css');
		$this->template->set_js('https://code.jquery.com/jquery-1.11.3.min.js','footer','remote');
		$this->template->set_js('bootstrap.min.js','footer');
		$this->template->set_meta('author','Turan Karatuğ');
		$this->template->set_layout('home_view');
		$this->template->render($data);
	}
}