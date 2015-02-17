<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends CI_Controller {

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
        $this->lang->load('user', 'english');

        //models
        $this->load->model('user');

    }

	public function index()
	{
		$data['title'] = "Users"; //title page
		$data['content'] = array('main_content' => 'users/index'); //set the url to users page
		//new user link
		$data['new_user_link'] = array('uri' => 'user/new',
										 'text' => $this->lang->line('add-new-user'),
										 'attributes' => array(
										 		"id" => "new-user-link",
										 		"class" => "submit",
										 	),
										);

		//get all Users
		$data['users'] = $this->user->getUsers();
		$this->load->view('template/main-template', $data);
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */