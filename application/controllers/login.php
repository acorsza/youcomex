<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

 function __construct()
 {
   parent::__construct();
   $this->load->model('user_m','',TRUE);
 }

 function index() 
 {
    $this->load->view('login');

 }

 function try_login()
 {
   //This method will have the credentials validation
   $this->lang->load('message', 'portugues');
   $this->load->library('form_validation');

   $this->form_validation->set_rules('email', 'Email', 'trim|required|xss_clean');
   $this->form_validation->set_rules('pwd', 'Password', 'trim|required|xss_clean|callback_check_database');

   if($this->form_validation->run() == FALSE)
   {
     //Field validation failed.  User redirected to login page

     $this->load->view('login');
   }
   else
   {
     //Go to private area
     redirect('panel', 'refresh');
   }

 }

 function check_database($password)
 {
   //Field validation succeeded.  Validate against database
   $username = $this->input->post('email');

   //query the database
   $result = $this->user_m->login($username, $password);

   if($result)
   {
     $sess_array = array();
     foreach($result as $row)
     {
       $sess_array = array(
         'id' => $row->Id,
         'email' => $row->Email,
         'nome' => $row->Nome
       );
       $this->session->set_userdata('logged_in', $sess_array);
     }
     return TRUE;
   }
   else
   {
     $this->form_validation->set_message('check_database', 'Invalid username or password');
     return false;
   }
 }
 function logout()
  {
    session_start(); 
    
    $this->session->unset_userdata('logged_in');

    session_destroy();
     
     redirect('home', 'refresh');
   }
}
?>
