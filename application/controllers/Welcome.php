<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends My_Controller {
	public function __construct() {
		parent::__construct();
		// $this->lang->load("message", "bangla");
	}

	public function index() {
		$data = $this->db->query('select * from subjects')->result();
		//echo $this->blade->view()->make('welcome_message', ['subjects' => $subjects]);

		// $var = $this->db->join('comments', 'comments.id = blogs.id AND comments.name = blogs.name', 'left');

		$data["ok"] = $this->lang->line("ok");
		$data["gd"] = $this->lang->line("gd");
		$data["msg"] = $this->lang->line("msg");
		//var_dump($data);

		$this->form_validation->set_rules('email', 'Email', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');

		if ($this->form_validation->run() == false) {
			echo $this->blade->view()->make('welcome_message', ['subjects' => $data]);
		} else {
			echo "success";
		}

	}
}
