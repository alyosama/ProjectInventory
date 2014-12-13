<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_controller extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('registration_view.php');
		$name=$this->input->post('name');
		$email=$this->input->post('email');
	    $phone=$this->input->post('phone_no');
				$pass=$this->input->post('password');
				$this->load->model('user.php');
$this->user->addName($name);
$this->user->addEmail($email);
$this->user->addMobile($phone_no);
$this->user->addPassword($password);






	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */