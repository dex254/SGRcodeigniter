<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class tax extends CI_Controller {

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
		$data['tax'] = $this->sgr_model->get_all_data('tax');
    $this->load->view('common/header',$ndata);
    $this->load->view('common/navigation');
    $this->load->view('tax/index',$data);
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
	    $this->load->view('tax/create',$data);
	    $this->load->view('common/footer');
		}
	  public function store()
		{
	    $this->load->library('form_validation');
			$this->load->helper(array('form'));

			$this->form_validation->set_rules('number', 'Terminol Number', 'required');
			$this->form_validation->set_rules('inside', 'Train Time in', 'required');
			$this->form_validation->set_rules('outside', 'Train Time out', 'required');
	    $this->form_validation->set_rules('date', 'Date', 'trim|required|Date');
			$this->form_validation->set_rules('from', 'From', 'required');
      $this->form_validation->set_rules('towads', 'To', 'required');
			 $this->form_validation->set_rules('amount', 'Price', 'required');

	    if ($this->form_validation->run() === FALSE)
			{
				$this->create();
			}
	    else
			{
	  	  	$datatax = array(
						'number' => $this->input->post('number'),
						'inside' => $this->input->post('inside'),
						'outside' => $this->input->post('outside'),
	          'date' => $this->input->post('date'),
            'from' => $this->input->post('from'),
						'towads' => $this->input->post('towads'),
						'amount' => $this->input->post('amount'),
          	'regBy' => $this->session_data['loggedId']
						);
	        $userRegId=$this->sgr_model->insert_data('tax', $datatax);
					redirect($_SERVER['HTTP_REFERER'],'refresh');
			}
		}
}
