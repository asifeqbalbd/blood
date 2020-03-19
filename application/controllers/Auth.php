<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller
{

		/**
		 * Login Method. Loads Login Form
		 */
		public function index()
		{
			if ($this->session->userdata('logged_in')!='') 
			{
				redirect(base_url().'Auth/home');
			}
			$data['title']='Login | Admin';
			$data['error']= $this->session->flashdata('error');
			$this->load->view('include/header', $data);
			$this->load->view('admin/loginform');
			$this->load->view('include/footer');
		}

		/**
		 * Validate login data
		 */
		public function login_validation()
		{
			$this->form_validation->set_rules('username', 'Username', 'required');
			$this->form_validation->set_rules('password', 'Password', 'required');

			if ($this->form_validation->run()==false) 
			{
				$this->index();
			}
			else
			{
				$user = $this->input->post('username');
				$pass = md5($this->input->post('password'));
				$this->load->model('User');
				$result = $this->User->login_val($user);

				foreach ($result as $data) 
				{
					$password = $data->auth_password;
					$role = $data->auth_role;
				}

				if ($pass === $password) 
				{
					$data = array(
						'logged_in' => true,
						'role' => $role
					);
					$this->session->set_userdata($data);
					redirect('auth/home');
				}
				else 
				{
					$this->session->set_flashdata('error', 'Wrong Password');
					redirect('auth/index');
				}
			}
		}

		/**
		 * Destroy session
		 */
		public function logout()
		{
			session_destroy();
			redirect("dash/home");

		}

		/**
		*Admin Requst 
		*/

		public function home()
		{
			if (!$this->session->userdata('logged_in')) 
			{
				redirect(base_url().'auth');
			}
			$data['title']='Home | Admin';
			$this->load->model('User');
			$data['result'] = $this->User->showdata_join();
			$this->load->view('include/header', $data);
			$this->load->view('include/navbarl');
			$this->load->view('admin/home');
			$this->load->view('include/footer');
		}

		/**
		*Admin Requst output 
		*/

		public function join_validation_ins()
		{
			$data = array(
				'name' =>$this->input->post('name'),
				'email' =>$this->input->post('email'),
				'dod' =>$this->input->post('dod'),
				'bag' =>$this->input->post('bag'),
				'gender' =>$this->input->post('gender'),
				'blood_group' =>$this->input->post('blood_group'),
				'address' =>$this->input->post('address'),
				'city' =>$this->input->post('city'),
				'mobile' =>$this->input->post('mobile')		
			);

			$id = $this->input->post('id');
			$this->load->model('user');
			if($this->user->updatedata($data, $id) == true)
			{
				redirect('auth/contact');
			}
			else{
				redirect('auth/contact');
			}
		}

		/**
		*Admin Requst delete 
		*/

		public function deletedata_join(){
			$id = $this->uri->segment(3);
			$this->load->model('User');
			$a  =$this->User->delete_join($id);
			if($a == true){
				redirect('auth/home');
			}
			else{
				redirect('auth/home');

			}
		}
		
		public function joins(){
			$data['title']='Joins | Admin';
			$this->load->view('include/header', $data);
			$this->load->view('include/navbarl');
			$this->load->view('admin/joins');
			$this->load->view('include/footer');
		}

		

		/**
		*Admin Contact
		*/

		public function contact()
		{
			if (!$this->session->userdata('logged_in')) 
			{
				redirect(base_url().'auth');
			}
			$data['title']='Contact | Admin';
			$this->load->model('User');
			$data['result'] = $this->User->showdata();
			$this->load->view('include/header', $data);
			$this->load->view('include/navbarl');
			$this->load->view('admin/contact');
			$this->load->view('include/footer');
		}

		/**
		*Admin Contact output 
		*/

		public function con_validation_ins()
		{
			$data = array(
				'name' =>$this->input->post('name'),
				'email' =>$this->input->post('email'),
				'details' =>$this->input->post('details'),
			);

			$id = $this->input->post('id');
			$this->load->model('user');
			if($this->user->updatedata($data, $id) == true)
			{
				redirect('auth/home');
			}
			else{
				redirect('auth/home');
			}
		}

		/**
		*Admin Contact delete 
		*/

		public function deletedata(){
			$id = $this->uri->segment(3);
			$this->load->model('User');
			$a  =$this->User->delete($id);
			if($a == true){
				redirect('auth/contact');
			}
			else{
				redirect('auth/contact');

			}
		}
	}
