<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Langs extends My_Controller
{
    public function index()
    {
        $data = $this->Lang->get_lang();
        $this->form_validation->set_rules('lang', 'Language', 'trim|required');

        if ($this->form_validation->run() == false) {
            echo $this->blade->view()->make('blog_admin/lang/index', ['data' => $data]);
        } else {

            $data = [
                'active' => $this->input->post('lang'),
            ];
    
            // Upadate Language
            $this->Lang->update($data);
    
            $this->session->set_flashdata('success', 'Language updated.');
        
            //redirect
            redirect('admin/dashboard');
        }
    }

}