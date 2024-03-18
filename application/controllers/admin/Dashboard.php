<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function index()
    {
        // $this->profile_model->admin_login();
        $data['total_layanan'] = $this->db->query("SELECT * FROM tb_layanan")->num_rows();
        $data['total_client'] = $this->db->query("SELECT * FROM tb_clients")->num_rows();
        $data['total_gallery'] = $this->db->query("SELECT * FROM tb_gallery")->num_rows();
        $data['total_testimoni'] = $this->db->query("SELECT * FROM tb_testimonial")->num_rows();
        $this->load->view('template_admin/header');
        $this->load->view('template_admin/sidebar');
        $this->load->view('admin/dashboard', $data);
        $this->load->view('template_admin/footer');
    }
}
