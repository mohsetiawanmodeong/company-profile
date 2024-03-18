<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

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
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		$data['about'] = $this->profile_model->get_data('tb_about')->result();
		$data['layanan'] = $this->profile_model->get_data('tb_layanan')->result();
		$data['clients'] = $this->profile_model->get_data('tb_clients')->result();
		$data['testimonial'] = $this->profile_model->get_data('tb_testimonial')->result();
		$data['owner'] = $this->profile_model->get_data('tb_owner')->result();
		$data['gallery_category'] = $this->db->query("SELECT DISTINCT kategori FROM tb_gallery")->result();
		$data['gallery'] = $this->profile_model->get_data('tb_gallery')->result();
		$this->load->view('customer/index', $data);
	}
}
