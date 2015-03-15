<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Panel extends CI_Controller {

	public function __construct() {
        parent::__construct();       
        $this->lang->load("message");
    }

	public function index()
	{
		if($this->session->userdata('logged_in')) {
			$this->load->view('panel');
			$this->load->view('dash_content');
		}else{
			$this->load->view('login');
		}
		
	}

	public function nova_noticia()
	{
		$this->load->model("franquias_m");
		$data['segmentoList'] = $this->franquias_m->getSegmentos();
		if($this->session->userdata('logged_in')) {
			$this->load->view('panel');
			$this->load->view('nova_noticia',$data);
		}else{
			$this->load->view('login');
		}
		
	}



}

/* End of file panel.php */
/* Location: ./application/controllers/panel.php */