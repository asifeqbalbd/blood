<?php  
defined('BASEPATH') OR exit('No direct script access allowed');  
class Dash extends CI_Controller {  
                //functions  
  public function index(){
    $data['title']='Publish | donor';
    $data['error'] = $this->session->flashdata('error');
    $data['success'] = $this->session->flashdata('success');
    $this->load->view('include/header', $data);
    $this->load->view('include/navbar');
    $this->load->view('dash/donor');
    $this->load->view('include/footer');
  }

    /**
    *Publish New Donor input 
    */

    public function donor_validation() 
    {
      $this->form_validation->set_rules('address', 'Name', 'required');

      if ($this->form_validation->run() == false) 
      {
       $this->index();
     }
     else
     {
       if (!empty($_FILES['picture']['name'])) 
       {   
        $path = $_FILES['picture']['name'];
        $image_name = 'image-'.time().'.'.pathinfo($path, PATHINFO_EXTENSION); 
        $config['upload_path']          = './upload/';
        $config['allowed_types']        = 'gif|jpg|jpeg|png';
        $config['max_size']             = 1024;
        $config['max_width']            = 1600;
        $config['max_height']           = 1200;
        $config['file_name']            = $image_name;  
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('picture'))
        {                 
          $error = $this->upload->display_errors();
          $this->session->set_flashdata('error', $error);  
          $this->index();
        }
        else
        {
          $fname = $this->input->post('firstname');
          $lname = $this->input->post('lastname');
          $name = $fname." ".$lname;
          $data = array( 
            "sex" => $this->input->post('sex'),  
            "b_type" => $this->input->post('b_type'),
            "address" => $this->input->post('address'),
            "age" => $this->input->post('age'),
            "city" => $this->input->post('city'),
            "mobile" => $this->input->post('mobile'),
            "don_date" => $this->input->post('don_date'),
            "stats" => $this->input->post('stats'),
            "temp" => $this->input->post('temp'),
            "pulse" => $this->input->post('pulse'),
            "bp" => $this->input->post('bp'),
            "weight" => $this->input->post('weight'),
            "hemoglobin" => $this->input->post('hemoglobin'),
            "hbsag" => $this->input->post('hbsag'),
            "aids" => $this->input->post('aids'),


            "name" => $name,         
            "image" => $image_name
          );
          $this->load->model('Upmodel');
          if($this->Upmodel->insertdata($data) == true)
          {
            $this->session->set_flashdata('success', 'Inserted successfully'); 
            $this->index();
          }
          else 
          {
            $this->session->set_flashdata('error', 'Insert failed'); 
            $this->index();
          }
        }
      } 
      else
      {          
        $this->session->set_flashdata('error', 'Please select an image.'); 
        $this->index();
      }   
    }   
  }

  /**
    *Admin New Donor 
  */

  public function donoroutput()
  {
    if (!$this->session->userdata('logged_in')) 
    {
      redirect(base_url().'auth');
    }
    $data['title']='Donor | Admin';
    $data['error'] = $this->session->flashdata('error');
    $data['success'] = $this->session->flashdata('success');
    $this->load->model('Upmodel');
    $data['result'] = $this->Upmodel->showdata();
    $data["msg"]=$this->session->flashdata('success');
    $this->load->view('include/header', $data);
    $this->load->view('include/navbarl');
    $this->load->view('admin/donor');
    $this->load->view('include/footer');
  }

  /**
    *Admin New Donor Output 
  */

  public function up_validation()
  {
    $this->form_validation->set_rules('address', 'Address', 'required');
    $this->form_validation->set_rules('mobile', 'Mobile', 'is_natural');
    $this->form_validation->set_rules('city', 'City', 'required');
    if (!empty($_FILES['picture']['name'])) 
    {   
      $path = $_FILES['picture']['name'];
      $image_name = 'image-'.time().'.'.pathinfo($path, PATHINFO_EXTENSION); 
      $config['upload_path']          = './upload/';
      $config['allowed_types']        = 'gif|jpg|jpeg|png';
      $config['max_size']             = 1024;
      $config['max_width']            = 1600;
      $config['max_height']           = 1200;
      $config['file_name']            = $image_name;  
      $this->load->library('upload', $config);
      if (!$this->upload->do_upload('picture'))
      {                   
        $error = $this->upload->display_errors();
        $this->session->set_flashdata('error', $error);  
        $this->index();
      }
      else
      {
        $data = array(    
          "sex" => $this->input->post('sex'),  
          "b_type" => $this->input->post('b_type'),
          "address" => $this->input->post('address'),
          "age" => $this->input->post('age'),
          "city" => $this->input->post('city'),
          "mobile" => $this->input->post('mobile'),
          "don_date" => $this->input->post('don_date'),
          "stats" => $this->input->post('stats'),
          "temp" => $this->input->post('temp'),
          "pulse" => $this->input->post('pulse'),
          "bp" => $this->input->post('bp'),
          "weight" => $this->input->post('weight'),
          "hemoglobin" => $this->input->post('hemoglobin'),
          "hbsag" => $this->input->post('hbsag'),
          "aids" => $this->input->post('aids'),


          "name" => $name,         
          "image" => $image_name
        );
        $id = $this->input->post('id');
        $this->load->model('Upmodel');
        if($this->Upmodel->updatedata($data, $id) == true)
        {
          $this->session->set_flashdata('success', 'Updated successfully'); 
          $this->donoroutput();
        }
        else 
        {
          $this->session->set_flashdata('error', 'Insert failed'); 
          $this->index();
        }
      }
    }
    else
    {          
      $this->session->set_flashdata('error', 'Please select an image.'); 
      $this->index();
    }   
  }

  /**
    *Publish About 
  */

  public function about(){
    $data['title']='Publish | About';
    $this->load->view('include/header', $data);
    $this->load->view('include/navbar');
    $this->load->view('dash/about');
    $this->load->view('include/footer');
  }

  /**
    *Publish Join 
  */  

  public function join(){
    $data['title']='Publish | Join';
    $data['error'] = $this->session->flashdata('error');
    $data['success'] = $this->session->flashdata('success');
    $this->load->view('include/header', $data);
    $this->load->view('include/navbar');
    $this->load->view('dash/join');
    $this->load->view('include/footer');
  }

  /**
    *Publish Join Input 
  */

  public function join_validation_ins()
  {
    $fname = $this->input->post('firstName');
    $lname = $this->input->post('lastname');
    $name = $fname." ".$lname;
    $data = array(
     "name" => $name,
     'email' =>$this->input->post('email'),
     'dod' =>$this->input->post('dod'),
     'bag' =>$this->input->post('bag'),
     'gender' =>$this->input->post('gender'),
     'blood_group' =>$this->input->post('blood_group'),
     'address' =>$this->input->post('address'),
     'city' =>$this->input->post('city'),
     'mobile' =>$this->input->post('mobile')
   );

    $this->load->model('User');
    $r =$this->User->join_insertdata($data);
    if($r == true)
    {
      $this->session->set_flashdata('success', 'Inserted successfully');
      redirect('dash/join');
    }
    else{
      $this->session->set_flashdata('error', 'Insert failed');
      redirect('dash/join');
    }
  } 

  /**
    *Publish home 
  */

  public function home(){
    $data['title']='Publish | HomePage';
    $this->load->view('include/header', $data);
    $this->load->view('include/navbar');
    $this->load->view('dash/home');
    $this->load->view('include/footer');
  }

  /**
    *Publish contact 
  */

  public function contact(){
    $data['title']='Publish | Contact';
    $data['error'] = $this->session->flashdata('error');
    $data['success'] = $this->session->flashdata('success');
    $this->load->model('User');
    $this->load->view('include/header', $data);
    $this->load->view('include/navbar');
    $this->load->view('dash/contact');
    $this->load->view('include/footer');
  }
  /*
    contact data insat
  */
    public function con_validation_ins()
    {
      $data = array(
        'name' =>$this->input->post('name'),
        'email' =>$this->input->post('email'),
        'details' =>$this->input->post('details'),
      );

      $this->load->model('User');
      $r =$this->User->con_insertdata($data);
      if($r == true)
      {
        $this->session->set_flashdata('success', 'Inserted successfully');
        redirect('dash/contact');
      }
      else{
        $this->session->set_flashdata('error', 'Insert failed');
        redirect('dash/contact');
      }
    }

    /**
    *Publish Availability 
  */

    public function availability(){
      $data['title']='Publish | Availability';
      $this->load->view('include/header', $data);
      $this->load->view('include/navbar');
      $this->load->view('dasha/availability');
      $this->load->view('include/footer');
    }

    /**
    *Admin New donor delet 
  */

    public function deletedata(){
      $id = $this->uri->segment(3);
      $this->load->model('Upmodel');
      $a  =$this->Upmodel->delete($id);
      if($a == true){
        $this->session->set_flashdata("success","Delete Successfull...");
        redirect('dash/donoroutput');
      }
      else{
        $this->session->set_flashdata("success","Delete faile...");
        redirect('dash/donoroutput');

      }
    }

    /**
    *Admin new donor single
  */

    public function single()
    {
      if (!$this->session->userdata('logged_in')) 
      {
        redirect(base_url().'auth');
      }
      $id = $this->uri->segment(3);
      $data['title'] = "Donor Medical Info";
      $data['error'] = $this->session->flashdata('error');
      $data['success'] = $this->session->flashdata('success');
      $this->load->model('Upmodel');
      $data['result'] = $this->Upmodel->singlenews($id);
      $data["msg"]=$this->session->flashdata('success');
      $this->load->view('include/header', $data);
      $this->load->view('include/navbarl');
      $this->load->view('admin/single');
      $this->load->view('include/footer');

    }

  } 