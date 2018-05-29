<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Categories extends My_Controller
{
	public function index()
	{
		$data = $this->Category_model->get_list();
		echo $this->blade->view()->make('blog_admin/category/index', ['categories' => $data]);
	}

	public function add()
	{

		$this->form_validation->set_error_delimiters('<span class="help-block">', '</span>');
		$this->form_validation->set_rules('category', 'Category Name', 'trim|required|min_length[3]');

		if ($this->form_validation->run() == false) {
			echo $this->blade->view()->make('blog_admin/category/add');
		} else {
			$data = [
				'name' => $this->input->post('category'),
			];

			// insert subject
			$this->Category_model->add($data);

			$data = [
				'resource_id' => $this->db->insert_id(),
				'type' => 'Category',
				'action' => 'added',
				'user_id' => 1,
				'message' => 'Category was added(' . $data['name'] . ')',
			];

			$this->Activity_model->add($data);

			//set Message
			$this->session->set_flashdata('success', 'Category has been add.');

			//redirect
			redirect('admin/categories');
		}

	}
}