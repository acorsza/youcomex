<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Franquias extends CI_Controller {

	public function __construct() {
        parent::__construct();       
        $this->lang->load("message");        
    }

	public function index()
	{
		$this->load->model("franquias_m");
		$data['franquiasList'] = $this->franquias_m->getFranquias();
		$data['segmentoList'] = $this->franquias_m->getSegmentos();
		$this->load->view('header');
		$this->load->view('navbar');
		$this->load->view('franquias',$data);
		$this->load->view('footer');
	}

	public function filter($id)
	{
		if($id != null){
			$this->load->model("franquias_m");
			$data['franquiasList'] = $this->franquias_m->getFranquiaBySegment($id);
			$data['segmentoList'] = $this->franquias_m->getSegmentos();
			$this->load->view('header');
			$this->load->view('navbar');
			$this->load->view('franquias',$data);
			$this->load->view('footer');
		}else{
			echo "Erro";
		}
		
	}
}

/* End of file franquias.php */
/* Location: ./application/controllers/franquias.php */