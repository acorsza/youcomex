<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct() {
        parent::__construct();       
        $this->lang->load("message");
    }

	public function index()
	{
		$this->load->view('header');
		$this->load->view('navbar');
		$this->load->view('home');
		$this->load->view('footer');
	}

	public function about()
	{
		$this->load->view('header');
		$this->load->view('navbar');
		$this->load->view('about');
		$this->load->view('footer');
	}
}

/* End of file home.php */
/* Location: ./application/controllers/home.php */