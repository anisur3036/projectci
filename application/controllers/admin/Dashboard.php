<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends My_Controller {
	public function index() {
		//$data = $this->db->query('select * from subjects')->result();
		//echo $this->blade->view()->make('welcome_message', ['subjects' => $subjects]);

		// $var = $this->db->join('comments', 'comments.id = blogs.id AND comments.name = blogs.name', 'left');

		$data["ok"] = $this->lang->line("ok");
		$data["gd"] = $this->lang->line("gd");
		$data["msg"] = $this->lang->line("msg");
		echo $this->blade->view()->make('welcome_message');
	}
}