<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
  //load requred
    $this->load->model('user_m');
    $this->load->library('twig'); // autoload library 
    
    
  // execute code
    $data['title'] = "Testing Twig!!";
    
    $this->user_m->listing();
  
  //render template
    $this->twig->display('view.twig', $data);

    //$this->load->view('welcome_message' , $data );
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
