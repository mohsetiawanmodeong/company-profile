<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengguna extends CI_Controller
{

    public function index()
    {
        $data['pengguna'] = $this->profile_model->get_data('tb_admin')->result();
        $this->load->view('template_admin/header');
        $this->load->view('template_admin/sidebar');
        $this->load->view('admin/pengguna', $data);

        $this->load->view('template_admin/footer');
    }
}
