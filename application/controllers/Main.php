<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {
	
	/**
	 * Index method. It loads Homepage
	 */
	public function index()
	{	
		$data['title']='Availability';
		$this->load->view('include/header', $data);
		$this->load->view('include/navbar');
		$this->load->view('dash/availability');
		$this->load->view('include/footer');
	}

	public function search()
	{
		$key = $this->input->post('search');
		$this->load->model('user');
		$data['search_result']=$this->user->search_result($key);
		$data['title']='Search | Admin';
		$this->load->view('include/header', $data);
		$this->load->view('include/navbarl');
		$this->load->view('admin/search');
		$this->load->view('include/footer');

	}

	public function searchblood()
	{
		$blood = $this->input->post('blood_group');
		$this->load->model('user');
		$data['search_result']=$this->user->search_blood($blood);
		$data['title']='Search | User';
		$this->load->view('include/header', $data);
		$this->load->view('include/navbar');
		$this->load->view('dash/availability');
		$this->load->view('include/footer');

	}

	public function searchcity()
	{
		$city = $this->input->post('city');
		$this->load->model('user');
		$data['search_result']=$this->user->search_city($city);
		$data['title']='Search | User';
		$this->load->view('include/header', $data);
		$this->load->view('include/navbar');
		$this->load->view('dash/availability');
		$this->load->view('include/footer');

	}

	public function searchcon()
	{
		$con = $this->input->post('search');
		$this->load->model('user');
		$data['search_result']=$this->user->search_con($con);
		$data['title']='Search | User';
		$this->load->view('include/header', $data);
		$this->load->view('include/navbar');
		$this->load->view('dash/availability');
		$this->load->view('include/footer');

	}	 
}
