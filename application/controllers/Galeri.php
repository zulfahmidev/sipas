<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Galeri extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logout();

        $this->user = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->model('Sm_model', 'sm');
        $this->load->model('Sk_model', 'sk');
    }

    public function sm()
    {
        $data = [
            'user' => $this->user,
            'judul' => 'Galeri File - Surat Masuk',
            'file' => $this->sm->getSmByFile()
        ];

        $this->template->render_page('galeri/sm', $data);
    }

    public function sk()
    {
        $data = [
            'user' => $this->user,
            'judul' => 'Galeri File - Surat Keluar',
            'file' => $this->sk->getSkByFile()
        ];

        $this->template->render_page('galeri/sk', $data);
    }
}
