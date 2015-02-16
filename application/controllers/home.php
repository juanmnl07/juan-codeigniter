<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

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

	/**
	*
	*	Constructor
	*/

	public function __construct()
    {
        parent::__construct();
        
        // Load helpers
        $this->load->helper('html');
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->helper('security');

        // language
        $this->lang->load('home', 'english');

        //models
        $this->load->model('user');

    }

	public function index()
	{
		$data['title'] = "Home page"; //title page

		//all fields in the login form
		$data['form_login'] = array('email_input' => array(
												"name"=>"email",
												"class"=>"input",
												"id" =>"email-input",
												"placeholder" => $this->lang->line('email'),
												"value" => "",
												),
									'pass_input' => array(
												"name"=>"pass",
												"class"=>"input",
												"id" =>"pass-input",
												"value" => "",
												"placeholder" => $this->lang->line('password'),
												),
									'submit' => array(
												"name"=>"login-submit",
												"class"=>"submit",
												"id" =>"login-submit",
												"value" => "Log in",
												)
									);

		//forgot your password link
		$data['forgot_password'] = array('uri' => 'forgot-password',
										 'text' => $this->lang->line('forgot-password'),
										 'attributes' => array(
										 		"id" => "forgot-password-link",
										 		"class" => "enlace",
										 	),
										);

		$data['content'] = array('main_content' => 'home');
		$this->load->view('template/home-template', $data);
	}

	public function forgotPassword(){

		$data['title'] = "Forgot password"; //title page
		$data['h1'] = 'Forgot password';
		$data['form_forgot_password'] = array('email_input' => array(
												"name"=>"email",
												"class"=>"input",
												"id" =>"email-input",
												"placeholder" => $this->lang->line('email'),
												"value" => "",
												),
									'submit' => array(
												"name"=>"new-password-submit",
												"class"=>"submit",
												"id" =>"new-password-submit",
												"value" => "Get new password",
												)
									);

		$data['content'] = array('main_content' => 'forgot-password');
		$this->load->view('template/home-template', $data);
	}

	//Validate if the user exists into de database
	public function userExists(){
		$email = $this->input->post('email');
		$pass = $this->input->post('pass');

		//MD5 password
		$md5_pass = do_hash($pass, 'md5'); // MD5 

		$value = $this->user->validateUser($email, $md5_pass);

		if($value){
			redirect('/dashboard');
		} else {
			redirect('/');
		}

	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */