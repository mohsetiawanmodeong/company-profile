<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Owner extends CI_Controller
{
    public function index()
    {
        // $this->profile_model->admin_login();
        $data['owner'] = $this->profile_model->get_data('tb_owner')->result();
        $this->load->view('template_admin/header');
        $this->load->view('template_admin/sidebar');
        $this->load->view('admin/about_owner', $data);

        $this->load->view('template_admin/footer');
    }



    public function _rules()
    {
        $this->form_validation->set_rules('judul', "Judul Artikel", 'required');
        $this->form_validation->set_rules('artikel', "Artikel", 'required');
        $this->form_validation->set_rules('quotes', "Quotes", 'required');
    }

    public function update_owner_aksi()
    {

        $this->_rules();
        if ($this->form_validation->run() == FALSE) {
            $this->about_owner($this->input->post('id'));
        } else {
            $id                   = $this->input->post('id');
            $judul                = $this->input->post('judul');
            $artikel              = $this->input->post('artikel');
            $quotes              = $this->input->post('quotes');
            $tgl                  = date('Y-m-d');
            $gambar               = $_FILES['gambar']['name'];

            if ($gambar) {
                $config['upload_path']        = './assets/upload';
                $config['allowed_types']    = 'jpg|jpeg|png|tiff|webp';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('gambar')) {
                    $gambar = $this->upload->data('file_name');
                    $this->db->set('avatar', $gambar);
                } else {
                    echo $this->upload->display_errors();
                }
            }

            $data = array(
                'judul_artikel'            => $judul,
                'artikel'          => $artikel,
                'quotes'           => $quotes,
                'date_created'     => $tgl,
            );

            $where = array(
                'id' => $id
            );

            $this->profile_model->update_data('tb_owner', $data, $where);

            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
				  Halaman Tentang Owner Berhasil Diupdate
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>');
            redirect('admin/owner');
        }
    }
}
