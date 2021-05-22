<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logout();

        $this->user = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->model('Home_model', 'model');
    }

    public function index()
    {
        $data = [
            'user' => $this->user,
            'judul' => 'Dashboard',
            'suratMasuk' => $this->model->countSm(),
            'suratKeluar' => $this->model->countSk(),
            'klasifikasi' => $this->model->countJabatan(),
            'file' => $this->model->countFile(),
            'smBulan' => $this->model->getSmBulan(),
            'skBulan' => $this->model->getSkBulan(),
            'smTahun' => $this->model->getSmTahun(),
            'skTahun' => $this->model->getSkTahun()
        ];

        $this->template->render_page('home/index', $data);
    }

    public function tes()
    {
        $data = [
            'user' => $this->user,
            'judul' => 'Halaman Tes',
            'smTahun' => $this->model->getSmTahun(),
            'skTahun' => $this->model->getSkTahun(),
        ];
        $this->load->view('home/tes', $data);
    }
}
