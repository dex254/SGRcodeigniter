<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class agents extends CI_Controller {

	function __construct()
    {
   	 parent::__construct();
   	 $this->load->helper("url");   //call the form helper
   	 $this->load->helper('form');
  	 $this->load->library('session');
    $this->load->model('sgr_model','',TRUE);
    $this->session_data = $this->session->userdata('logged_in');
    if(empty($this->session_data))
    {
       redirect('login');
    }
    }
	public function index()
	{
		$ndata['login']=$this->session_data;
		$data['agents'] = $this->sgr_model->get_all_data('agents');
    $this->load->view('common/header',$ndata);
    $this->load->view('common/navigation');
    $this->load->view('agents/index',$data);
		$this->load->view('common/footer');
	}


	public function create()
		{
	    $data = array('id' => '');
	    $data['attributes'] = array('class' => 'form');
	    $data['prop'] = array('class' => 'form-control');

	    $ndata['login']=$this->session_data;

	    $this->load->view('common/header',$ndata);
	    $this->load->view('common/navigation');
	    $this->load->view('agents/create',$data);
	    $this->load->view('common/footer');
		}
	  public function store()
		{
	    $this->load->library('form_validation');
			$this->load->helper(array('form'));

			$this->form_validation->set_rules('name', 'Train  Name', 'required');
			$this->form_validation->set_rules('number', 'Train Number', 'required');
			$this->form_validation->set_rules('size', 'Train Capacity', 'required');

			$this->form_validation->set_rules('term', 'Operation Terminol Number', 'required');


	    if ($this->form_validation->run() === FALSE)
			{
				$this->create();
			}
	    else
			{
	  	  	$dataagents = array(
						'name' => $this->input->post('name'),
						'number' => $this->input->post('number'),
						'size' => $this->input->post('size'),

						'term' => $this->input->post('term'),

          	'regBy' => $this->session_data['loggedId']
						);
	        $userRegId=$this->sgr_model->insert_data('agents', $dataagents);
					redirect($_SERVER['HTTP_REFERER'],'refresh');
			}
		}
}
