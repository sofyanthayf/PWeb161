<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct() {
        parent::__construct();

		$this->load->model('user_model');
    }

	public function index()
	{
		$this->load->view('templates/header');

		$data['page'] = "user";
		$data['judul'] = "User";
		$data['subjudul'] = "List";

		$this->load->view('templates/nav', $data);

		$this->load->view('user/user');

		$this->load->view('templates/footer');

	}


	public function data( $iduser ){

		$this->load->view('templates/header');

		$data['page'] = "user";
		$data['judul'] = "Detail User";
		$data['subjudul'] = $iduser;

		$this->load->view('templates/nav', $data);

		$user['id'] = $iduser;
		$this->load->view('user/detailuser', $user);

		$this->load->view('templates/footer');

	}

	public function formRegister(){
		$data['page'] = "user";
		$data['judul'] = "Registration";
		$data['subjudul'] = "Form";

		$this->load->view('templates/header');
		$this->load->view('templates/nav', $data);
		$this->load->view('user/formregister', $data);
		$this->load->view('templates/footer');
	}

	public function register(){
		// var_dump( $this->input->post() );
		$this->user_model->registeruser();
		redirect( base_url() );
	}

}  // end of class
